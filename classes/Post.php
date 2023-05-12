<?php
require_once  __DIR__ . '/../config/db_properties.php';
require_once  __DIR__ . '/../controller/db_interaction.php';

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new DB_interaction();
    }


    public function all_post()
    {
        $sql = "SELECT * FROM post";
        return $this->db->base_query($sql);
    }

    public function create_post($post_title, $img_path, $post_content)
    {
        $sql = "INSERT INTO post (post_title, img_path, post_content) VALUES ('$post_title', '$img_path', '$post_content')";
        return $this->db->base_query($sql);
    }


    public function edit_post()
    {
    }


    public function delete_post()
    {
    }
}
