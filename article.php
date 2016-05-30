<?php
require_once __DIR__ . "/models/article.php";
require_once __DIR__ . "/models/db.php";

session_start();
$db = new Database();
$article = $db->getById($_GET['id']);
include __DIR__ . "/views/article.php";

if(isset($_GET['del_id'])) {
    $db->delete($_GET['del_id']);
    header('Location: index.php');
}

