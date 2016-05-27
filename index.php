<?php
    require_once __DIR__ . '/models/db.php';
    require_once __DIR__ . '/models/add.php';
    require_once __DIR__ . '/models/delete.php';
    require_once __DIR__ . '/models/edit.php';
    require_once __DIR__ . '/models/article.php';
    require_once __DIR__ . '/models/articles.php';

    session_start();
    db_connect();
    $articles = get_articles();
    include __DIR__ . '/views/articles.php';

    if(isset($_GET['id']))
        header('Location: article.php?id=' . $_GET['id']);