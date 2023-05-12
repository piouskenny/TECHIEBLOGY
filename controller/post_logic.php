<?php

require_once __DIR__ . '/../Classes/Post.php';

require_once __DIR__ . '/../Classes/Validate.php';

// use App\Classes\Validate;


class PostLogic
{

    public $post;


    public function handle_create_post()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            $this->post = new Post();

            if (isset($_POST['create'])) {

                $post_title = $_POST['post_title'];
                $image_path = $_POST['image_path'];
                $post_content = $_POST['post_content'];


                $this->post->create_post($post_title, $image_path, $post_content);

                header('Location:../Admin/logout.php');
            }
        }
    }
}
