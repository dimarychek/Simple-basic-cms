<?php
require_once("../database.php");
require_once("../models/functions.php");

$link = db_connect();

$settings = settings_get($link);

include("../views/admin/settings_admin.php");

if(!empty($_POST)) {
    settings_save($link, $_POST['site_name'], $_POST['copyright']);
    header("Location: /admin/settings.php");
}