<?php
class Article {
    public $topic;
    public $text;
    public $dt;

    public function __construct($topic, $text) {
        $this->topic = $topic;
        $this->text = $text;
        $this->dt = date('d:m:y');
    }
}