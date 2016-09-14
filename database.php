<?php
define('MYSQL_SERVER', 'idealab.mysql.ukraine.com.ua');
define('MYSQL_USER', 'idealab_cms');
define('MYSQL_PASSWORD', 'xxzzhr47');
define('MYSQL_DB', 'idealab_cms');

function db_connect() {
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
        or die('Error: '.mysqli_error($link));
    if(!mysqli_set_charset($link, 'utf8')) {
        printf('Error: '.mysqli_error($link));
    }

    return $link;
}