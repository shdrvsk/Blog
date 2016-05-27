<?php
    require_once __DIR__ . '/db.php';
    function get_article($id) {
        $resource = db_query("SELECT * FROM posts WHERE id='$id'");
        $row = mysql_fetch_assoc($resource);
        return $row;
    }