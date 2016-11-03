<?php

require_once('database.php');
require_once('models/functions.php');

$link = db_connect();
//$article = articles_get($link, $_GET['id']);

include('views/site/article.php');
