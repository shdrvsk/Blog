<?php
    function db_connect() {
        mysql_connect('localhost', 'root', '') or die('No connection with database');
        mysql_select_db('posts') or die('No database');
    }

    function db_query($sql) {
        $result = mysql_query($sql);
        return $result;
    }