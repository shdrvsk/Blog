<?php

class Database {
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db_name = 'blog';
    private $link;

    public function __construct() {
        $this->link = mysqli_connect($this->hostname, $this->username, $this->password, $this->db_name) or die('No connection with database');
    }

    public function add($dt, $topic, $text) {
        $sql = "INSERT INTO posts (dt, topic, text) VALUES ('$dt', '$topic', '$text')";
        $result = mysqli_query($this->link, $sql);
        if(!$result)
            die(mysqli_error($this->link));
    }

    public function edit($id, $new_topic, $new_text) {
        $sql = "UPDATE posts SET topic='$new_topic', text='$new_text' WHERE id='$id'";
        $result = mysqli_query($this->link, $sql);
        if(!$result)
            die(mysqli_error($this->link));
    }

    public function delete($id) {
        $sql = "DELETE FROM posts WHERE id='$id'";
        mysqli_query($this->link, $sql);
    }

    public function getById($id) {
        $resource = mysqli_query($this->link, "SELECT * FROM posts WHERE id='$id'");
        $row = mysqli_fetch_assoc($resource);
        return $row;
    }

    public function get() {
        $resource = mysqli_query($this->link, 'SELECT * FROM posts');
        $n = mysqli_num_rows($resource);
        $arr = array();
        for($i = 1; $i < $n; $i++) {
            $row = mysqli_fetch_assoc($resource);
            $arr[] = $row;
        }
        return $arr;
    }
}
