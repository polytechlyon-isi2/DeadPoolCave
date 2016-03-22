<?php

namespace DeadPoolCave\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use DeadPoolCave\Domain\Comment;
use DeadPoolCave\Form\Type\CommentType;
use DeadPoolCave\Domain\User;
use DeadPoolCave\Form\Type\UserType;
use DeadPoolCave\Form\Type\SignUpType;

class HomeController {

    /**
     * Home page controller.
     *
     * @param Application $app Silex application
     */
    public function indexAction(Application $app) {
        $articles = $app['dao.article']->findAll();
        $genres = $app['dao.genre']->findAll();
        return $app['twig']->render('index.html.twig', array('articles' => $articles, 'genres' => $genres));
    }

    /**
     * Article details controller.
     *
     * @param integer $id Article id
     * @param Request $request Incoming request
     * @param Application $app Silex application
     */
    public function articleAction($id, Request $request, Application $app) {
        $article = $app['dao.article']->find($id);
        $genres = $app['dao.genre']->findAll();
        $commentFormView = null;
        if ($app['security.authorization_checker']->isGranted('IS_AUTHENTICATED_FULLY')) {
            // A user is fully authenticated : he can add comments
            $comment = new Comment();
            $comment->setArticle($article);
            $user = $app['user'];
            $comment->setAuthor($user);
            $commentForm = $app['form.factory']->create(new CommentType(), $comment);
            $commentForm->handleRequest($request);
            if ($commentForm->isSubmitted() && $commentForm->isValid()) {
                $app['dao.comment']->save($comment);
                $app['session']->getFlashBag()->add('success', 'Your comment was succesfully added.');
            }
            $commentFormView = $commentForm->createView();
        }
        $comments = $app['dao.comment']->findAllByArticle($id);
        return $app['twig']->render('article.html.twig', array(
            'article' => $article,
            'genres' => $genres,
            'comments' => $comments,
            'commentForm' => $commentFormView));
    }

    /**
     * User login controller.
     *
     * @param Request $request Incoming request
     * @param Application $app Silex application
     */
    public function loginAction(Request $request, Application $app) {
      $genres = $app['dao.genre']->findAll();
        return $app['twig']->render('login.html.twig', array(
          'genres' => $genres,
            'error'         => $app['security.last_error']($request),
            'last_username' => $app['session']->get('_security.last_username'),
            ));
    }

    /**
     * user sign up controller.
     *
     * @param Request $request Incoming request
     * @param Application $app Silex application
     */
    public function userSignUpAction(Request $request, Application $app) {
      $genres = $app['dao.genre']->findAll();
        $user = new User();
        $userForm = $app['form.factory']->create(new SignUpType(), $user);
        $userForm->handleRequest($request);
        if ($userForm->isSubmitted() && $userForm->isValid()) {
            // generate a random salt value
            $salt = substr(md5(time()), 0, 23);
            $user->setSalt($salt);
            $plainPassword = $user->getPassword();
            // find the default encoder
            $encoder = $app['security.encoder.digest'];
            // compute the encoded password
            $password = $encoder->encodePassword($plainPassword, $user->getSalt());
            $user->setPassword($password);
            $user->setRole('User');
            $app['dao.user']->save($user);

            $app['session']->getFlashBag()->add('success', 'print '.'<img class="img-responsive pull-right" src="../web/pictures/deadpoolove.jpg" alt="love"/>'.';The user was successfully created.');
        }
        return $app['twig']->render('user_signup.html.twig', array(
          'genres' => $genres,
            'title' => 'New user',
            'userForm' => $userForm->createView()));
    }
}
