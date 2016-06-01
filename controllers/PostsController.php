<?php

class PostsController {

    public function actionAll() {
        $posts = Posts::getAll();
        include __DIR__ . '/../views/posts.php';
    }

    public function actionOne() {
        $id = $_GET['id'];
        $post = Posts::getOne($id);
        include __DIR__ . '/../views/post.php';
    }

    public function add() {
        $topic = $_GET['topic'];
        $text = $_GET['text'];

    }
}