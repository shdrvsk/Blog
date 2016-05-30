<?php
require_once __DIR__ . '/models/db.php';
require_once __DIR__ . '/models/article.php';

session_start();
setlocale('LC_ALL', 'ru_RU.CP1251');

$db = new Database();

if(isset($_GET['id']))
    header('Location: article.php?id=' . $_GET['id']);

//$article1 = new Article('Article 1', 'Text 1');
//$db->add($article1->dt, $article1->topic, $article1->text);
$db->edit(56, 'New Topic 1', 'New Text 1');

$articles = $db->get();
include __DIR__ . '/views/articles.php';





