<?php
    function edit($id, $new_topic, $new_name) {
        db_query('UPDATE posts SET "topic"="$new_topic", "name"="$new_name" WHERE id="$id"');
    }