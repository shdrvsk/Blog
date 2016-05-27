<?php
    function get_articles() {
        $resource = db_query('SELECT * FROM posts');
        $n = mssql_num_rows($resource);
        $arr = array();
        for($i = 1; $i < $n; $i++) {
            $row = mysql_fetch_assoc($resource);
            $arr[] = $row;
        }
        return $arr;
    }