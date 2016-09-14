<?php
$header_admin = '
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../../css/admin.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <header class="admin_header">
        <center><h1>Панель Администратора</h1></center>
    </header>
    <div class="container">
    <a href="http://cms.idealab.com.ua/">Вернуться на сайт</a><br><br>
        <div class="admin_main_menu">
            <ul>
                <li><a href="http://cms.idealab.com.ua/admin/index.php">Консоль</a></li>
                <li><a href="http://cms.idealab.com.ua/admin/settings.php">Настройки сайта</a></li>
                <li><a href="http://cms.idealab.com.ua/admin/articles.php">Статьи</a></li>
            </ul>
        </div>
    </div>
';
return $header_admin;