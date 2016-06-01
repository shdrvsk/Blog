<?php

class DB {
    public function __construct() {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('blog');
    }

    public function queryAll($sql, $class = 'stdClass') {
        $res = mysql_query($sql);
        $arr = array();
        while($row = mysql_fetch_object($res, $class)) {
            $arr[] = $row;
        }
        return $arr;
    }

    public function queryOne($sql, $class = 'stdClass') {
        return $this->queryAll($sql, $class)[0];
    }
}