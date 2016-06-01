<?php

class AbstractModel {

    protected static $table;
    protected static $class;

    public static function getAll() {
        $db = new DB();
        return $db->queryAll('SELECT * FROM ' . static::$table, static::$class);
    }

    public static function getOne($id) {
        $db = new DB();
        return $db->queryOne('SELECT * FROM posts WHERE id=' . $id, 'Posts', static::$class);
    }

}