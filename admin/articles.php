<?php
require_once("../database.php");
require_once("../models/functions.php");

$link = db_connect();

if(isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

if($action == 'add') {
    if(!empty($_POST)) {
        articles_new($link, $_POST['title'], $_POST['date'], $_POST['content']);
        header("Location: articles.php");
    }
    include("../views/admin/article_admin.php");
} else if($action == 'edit') {
    if(!isset($_GET['id'])) {
        header("Location: articles.php");
    }
    $id = (int)$_GET['id'];

    if(!empty($_POST) && $id > 0) {
        articles_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['content']);
        header("Location: articles.php");
    }

    $article = articles_get($link, $id);
    include("../views/admin/article_admin.php");
} else if($action == 'delete') {
    $id = $_GET['id'];
    $article = articles_delete($link, $id);
    header("Location: articles.php");
} else {
    $articles = articles_all($link);
    include("../views/admin/articles_admin.php");
}