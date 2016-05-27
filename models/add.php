<?php
    function add_article($topic, $text) {
        $dt = date('d:m:y');
        db_query("INSERT INTO posts (dt, topic, text) VALUES ('$dt', '$topic', '$text')");
    }