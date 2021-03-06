<?php

namespace DeadPoolCave\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use DeadPoolCave\Domain\Comment;
use DeadPoolCave\Form\Type\CommentType;
use DeadPoolCave\Domain\User;
use DeadPoolCave\Form\Type\UserType;
use DeadPoolCave\Form\Type\ProfilType;
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
        $authors = $app['dao.author']->findAll();
        $editors = $app['dao.editor']->findAll();
        return $app['twig']->render('home.html.twig', array('articles' => $articles, 'genres' => $genres, 'authors' => $authors, 'editors' => $editors));
    }

    /**
     *
     * @param $genre String
     * @param Application $app Silex application
     */
    public function genreAction($genre, Application $app) {
        $articles = $app['dao.article']->findByGenre($genre);
        $genres = $app['dao.genre']->findAll();
        $authors = $app['dao.author']->findAll();
        $editors = $app['dao.editor']->findAll();
        return $app['twig']->render('index.html.twig', array('articles' => $articles, 'genres' => $genres, 'authors' => $authors, 'editors' => $editors));
    }

    /**
     *
     * @param $begin String
     * @param $end String
     * @param Application $app Silex application
     */
    public function nameAction($begin,$end, Application $app) {
        $genres = $app['dao.genre']->findAll();
        $authors = $app['dao.author']->findAll();
        $editors = $app['dao.editor']->findAll();
        $articles = $app['dao.article']->findByName($begin,$end);
        return $app['twig']->render('index.html.twig', array('articles' => $articles, 'genres' => $genres, 'authors' => $authors, 'editors' => $editors));
    }

    /**
     *
     * @param $begin String
     * @param $end String
     * @param Application $app Silex application
     */
    public function authorAction($author, Application $app) {
        $genres = $app['dao.genre']->findAll();
        $authors = $app['dao.author']->findAll();
        $editors = $app['dao.editor']->findAll();
        $articles = $app['dao.article']->findByAuthor($author);
        return $app['twig']->render('index.html.twig', array('articles' => $articles, 'genres' => $genres, 'authors' => $authors, 'editors' => $editors));
    }


    /**
     *
     * @param $usrId integer
     * @param $artId integer
     * @param Application $app Silex application
     */
    public function addArticleToCart($usrId, $artId, Application $app){
        $genres = $app['dao.genre']->findAll();
        $authors = $app['dao.author']->findAll();
        $editors = $app['dao.editor']->findAll();
        $article = $app['dao.article']->find($artId);
        $app['dao.article']->addToCart($artId,$usrId);
        return $app['twig']->render('addToCart.html.twig', array('article' => $article, 'genres' => $genres, 'authors' => $authors, 'editors' => $editors));
    }

    /**
     *
     * @param $begin String
     * @param $end String
     * @param Application $app Silex application
     */
    public function editorAction($editor, Application $app) {
        $genres = $app['dao.genre']->findAll();
        $authors = $app['dao.author']->findAll();
        $editors = $app['dao.editor']->findAll();
        $articles = $app['dao.article']->findByEditor($editor);
        return $app['twig']->render('index.html.twig', array('articles' => $articles, 'genres' => $genres, 'authors' => $authors, 'editors' => $editors));
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
        $authors = $app['dao.author']->findAll();
        $editors = $app['dao.editor']->findAll();
        $authorsArticle = $app['dao.author']->findByArticle($id);
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
                $app['session']->getFlashBag()->add('success', 'Votre commentaire à été ajouté.');
            }
            $commentFormView = $commentForm->createView();
        }
        $comments = $app['dao.comment']->findAllByArticle($id);
        return $app['twig']->render('article.html.twig', array(
            'article' => $article,
            'authorsArticle' => $authorsArticle,
            'genres' => $genres,
            'authors' => $authors,
            'editors' => $editors,
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
      $authors = $app['dao.author']->findAll();
      $editors = $app['dao.editor']->findAll();
        return $app['twig']->render('login.html.twig', array(
          'genres' => $genres,
          'editors' => $editors,
          'authors' => $authors,
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
      $authors = $app['dao.author']->findAll();
      $editors = $app['dao.editor']->findAll();
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


            $app['session']->getFlashBag()->add('success', 'Le profil à été correctement créé.');
        }
        return $app['twig']->render('user_signup.html.twig', array(
          'genres' => $genres,
          'authors' => $authors,
           'editors' => $editors,
            'title' => 'New user',
            'userForm' => $userForm->createView()));
    }


    public function profilAction($id, Request $request, Application $app){
        $user = $app['dao.user']->find($id);
        return $app['twig']->render('profil.html.twig', array(
            'user'=>$user,));
    }

    public function profilEdit($id, Request $request, Application $app) {
        $user = $app['dao.user']->find($id);
        $genres = $app['dao.genre']->findAll();
        $authors = $app['dao.author']->findAll();
        $profilForm = $app['form.factory']->create(new ProfilType(), $user);
        $profilForm->handleRequest($request);
        if ($profilForm->isSubmitted() && $profilForm->isValid()) {
            $plainPassword = $user->getPassword();
            // find the encoder for the user
            $encoder = $app['security.encoder_factory']->getEncoder($user);
            // compute the encoded password
            $password = $encoder->encodePassword($plainPassword, $user->getSalt());
            $user->setPassword($password);
            $app['dao.user']->save($user);
            $app['session']->getFlashBag()->add('success', 'Le profil à été correctement modifié.');
        }

        $editors = $app['dao.editor']->findAll();

        return $app['twig']->render('profil_form.html.twig', array(
            'genres' => $genres,
            'authors' => $authors,
            'editors' => $editors,
            'title' => 'Edit Profil',
            'profilForm' => $profilForm->createView()));
    }

    public function cart ($id, Request $request, Application $app){
        $user = $app['dao.user']->find($id);
        $genres = $app['dao.genre']->findAll();
        $authors = $app['dao.author']->findAll();
        $cart = $app['dao.article']->findByCart($id);
        $editors = $app['dao.editor']->findAll();
        return $app['twig']->render('commande.html.twig', array(
            'genres' => $genres,
            'authors' => $authors,
            'editors' => $editors,
            'cart' => $cart,
            'title' => 'Cart',
            ));
    }

    /**
     * Delete article in the cart.
     *
     * @param integer $id Comment id
     * @param Application $app Silex application
     */
    public function deleteCartAction($userId, Application $app) {
        $app['dao.user']->deleteCart($userId);
        $app['session']->getFlashBag()->add('success', 'Votre commande à été enregistré');
        // Redirect to home page
        return $app->redirect($app['url_generator']->generate('home'));
    }


}
