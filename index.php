<?php


require 'connection.php';

$articles = getArticles();

require 'view.php';