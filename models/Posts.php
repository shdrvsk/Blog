<?php

class Posts extends AbstractModel {

    public $id;
    public $topic;
    public $text;

    protected static $table = 'posts';
    protected static $class = 'Posts';

    public function add()
}