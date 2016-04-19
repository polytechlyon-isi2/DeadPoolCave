<?php

// Home page
$app->get('/', "DeadPoolCave\Controller\HomeController::indexAction")->bind('home');

// Genre
$app->get('/genre/{genre}', "DeadPoolCave\Controller\HomeController::genreAction")->bind('genre');

// Name
$app->get('/name/{begin}/{end}', "DeadPoolCave\Controller\HomeController::nameAction")->bind('name');

// editor
$app->get('/editor/{editor}', "DeadPoolCave\Controller\HomeController::editorAction")->bind('editor');

// Detailed info about an article
$app->match('/article/{id}', "DeadPoolCave\Controller\HomeController::articleAction")->bind('article');

// Login form
$app->get('/login', "DeadPoolCave\Controller\HomeController::loginAction")->bind('login');

// Admin zone
$app->get('/admin', "DeadPoolCave\Controller\AdminController::indexAction")->bind('admin');

// Add a new article
$app->match('/admin/article/add', "DeadPoolCave\Controller\AdminController::addArticleAction")->bind('admin_article_add');

// Edit an existing article
$app->match('/admin/article/{id}/edit', "DeadPoolCave\Controller\AdminController::editArticleAction")->bind('admin_article_edit');

// Remove an article
$app->get('/admin/article/{id}/delete', "DeadPoolCave\Controller\AdminController::deleteArticleAction")->bind('admin_article_delete');

// Edit an existing comment
$app->match('/admin/comment/{id}/edit', "DeadPoolCave\Controller\AdminController::editCommentAction")->bind('admin_comment_edit');

// Remove a comment
$app->get('/admin/comment/{id}/delete', "DeadPoolCave\Controller\AdminController::deleteCommentAction")->bind('admin_comment_delete');

// Add a user
$app->match('/admin/user/add', "DeadPoolCave\Controller\AdminController::addUserAction")->bind('admin_user_add');

// User sign up
$app->match('/signup', "DeadPoolCave\Controller\HomeController::userSignUpAction")->bind('user_signup');

// Edit an existing user
$app->match('/admin/user/{id}/edit', "DeadPoolCave\Controller\AdminController::editUserAction")->bind('admin_user_edit');

// Remove a user
$app->get('/admin/user/{id}/delete', "DeadPoolCave\Controller\AdminController::deleteUserAction")->bind('admin_user_delete');

// API : get all articles
$app->get('/api/articles', "DeadPoolCave\Controller\ApiController::getArticlesAction")->bind('api_articles');

// API : get an article
$app->get('/api/article/{id}', "DeadPoolCave\Controller\ApiController::getArticleAction")->bind('api_article');

// API : create an article
$app->post('/api/article', "DeadPoolCave\Controller\ApiController::addArticleAction")->bind('api_article_add');

// API : remove an article
$app->delete('/api/article/{id}', "DeadPoolCave\Controller\ApiController::deleteArticleAction")->bind('api_article_delete');

// Profil
$app->match('/profil/{id}',  "DeadPoolCave\Controller\HomeController::profilAction")->bind('profil');
$app->match('/profil/{id}/edit',  "DeadPoolCave\Controller\HomeController::profilEdit")->bind('profilEdit');
