<?php
  require_once __DIR__ . "/models/article.php";
  require_once __DIR__ . "/models/delete.php";

  session_start();
  db_connect();
  $article = get_article($_GET['id']);
  include __DIR__ . "/views/article.php";
  if(isset($_GET['del_id'])) {
    delete_article($_GET['del_id']);
    header('Location: index.php');
  }