<?php
// ALL ARTICLES
function articles_all($link) {
    $query = "SELECT * FROM articles ORDER BY id DESC";
    $result = mysqli_query($link, $query);

    if(!$result) {
        die(mysqli_error($link));
    }

    $n = mysqli_num_rows($result);
    $articles = array();

    for($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }

    return $articles;
}

// GET ARTICLES
function articles_get($link, $id_article) {
    $query = sprintf("SELECT * FROM articles WHERE id='$id_article'");
    $result = mysqli_query($link, $query);

    if(!$result) {
        die(mysqli_error($link));
    }

    $article = mysqli_fetch_assoc($result);

    return $article;
}

// NEW ARTICLES
function articles_new($link, $title, $date, $content) {
    // Подготовка
    $title = trim($title);
    $content = trim($content);

    // Проверка
    if($title == '') {
        return false;
    }

    // Запрос
    $t = "INSERT INTO articles (title, date, content) VALUES('%s', '%s', '%s')";

    $query = sprintf($t, mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $date),
                         mysqli_real_escape_string($link, $content));

    $result = mysqli_query($link, $query);

    if(!$result) {
        die(mysqli_error($link));
    }

    return true;
}

// EDIT ARTICLES
function articles_edit($link, $id, $title, $date, $content) {
    // Подготовка
    $title = trim($title);
    $content = trim($content);
    $date = trim($date);
    $id = (int)$id;

    // Проверка
    if($title == '') {
        return false;
    }

    // Запрос
    $sql = "UPDATE articles SET title='%s', date='%s', content='%s' WHERE id='%d'";

    $query = sprintf($sql, mysqli_real_escape_string($link, $title),
        mysqli_real_escape_string($link, $date),
        mysqli_real_escape_string($link, $content),
        $id);

    $result = mysqli_query($link, $query);

    if(!$result) {
        die(mysqli_error($link));
    }

    return mysqli_affected_rows($link);
}

// DELETE ARTICLES
function articles_delete($link, $id) {
    // Подготовка
    $id = (int)$id;

    // Проверка
    if($id == 0) {
        return false;
    }

    // Запрос
    $query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
    $result = mysqli_query($link, $query);

    if(!$result) {
        die(mysqli_error($link));
    }

    return mysqli_affected_rows($link);
}

// ARTICLES PREVIEW LENGTH
function articles_intro($text, $len = 500) {
    return mb_substr($text, 0 , $len)."...";
}

// SITE SETTINGS SAVE
function settings_save($link, $site_name, $copyright) {
    $site_name = trim($site_name);
    $copyright = trim($copyright);

    if($site_name == '') {
        return false;
    }

    $q = "SELECT * FROM settings";

    $isset = mysqli_query($link, $q);
    $num = mysqli_num_rows($isset);

    if($num > 0) {
        $sql = "UPDATE settings SET site_name='%s', copyright='%s'";
    } else {
        $sql = "INSERT INTO settings (site_name, copyright) VALUES('%s', '%s')";
    }

    $query = sprintf($sql, mysqli_real_escape_string($link, $site_name),
                           mysqli_real_escape_string($link, $copyright));

    $result = mysqli_query($link, $query);

    if(!$result) {
        die(mysqli_error($link));
    }

    return true;
}

// SITE SETTINGS GET
function settings_get($link) {
    $query = sprintf("SELECT * FROM settings");
    $result = mysqli_query($link, $query);

    if(!$result) {
        die(mysqli_error($link));
    }

    $settings = mysqli_fetch_assoc($result);

    return $settings;
}