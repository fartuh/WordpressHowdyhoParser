<?php

namespace engine;

class InsertController
{
    public static function insert($data){
        wp_insert_post(['post_content' => $data['body'], 'post_title' => $data['title'], 'post_status' => 'publish', 'post_type' => 'post']);
    }
}
