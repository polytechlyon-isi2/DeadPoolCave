<?php

function getArticles() {

    $bdd = new PDO('mysql:host=127.0.0.1; dbname=deadpoolcave; charset=utf8', 'cave_admin', 'secret');
$articles = $bdd->query('select * from t_article order by art_id desc');
    return $articles;
}