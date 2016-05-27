<?php
    require_once __DIR__ . '/models/db.php';
    require_once __DIR__ . '/models/add.php';
    require_once __DIR__ . '/models/delete.php';
    require_once __DIR__ . '/models/edit.php';
    require_once __DIR__ . '/models/article.php';
    require_once __DIR__ . '/models/articles.php';

    db_connect();
    add_article('Topic 1', 'Hello, my friends!');
    $articles = get_articles();
    include __DIR__ . '/views/articles.php';