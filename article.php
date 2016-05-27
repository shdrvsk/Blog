<?php
  require_once __DIR__ . "/models/article.php";

  session_start();
  db_connect();
  $article = get_article($_GET['id']);
  include __DIR__ . "/views/article.php";