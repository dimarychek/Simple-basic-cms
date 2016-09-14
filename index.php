<?php

require_once('database.php');
require_once('models/functions.php');

$link = db_connect();
$articles = articles_all($link);
$settings = settings_get($link);

include('views/site/articles.php');