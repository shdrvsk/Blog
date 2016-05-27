<?php
    function get_article($id) {
        return db_query('SELECT * FROM posts WHERE id="$id"');
    }