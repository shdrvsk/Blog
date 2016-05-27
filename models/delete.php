<?php
    function delete_article($id) {
        mysql_query("DELETE FROM posts WHERE id='$id'");
    }