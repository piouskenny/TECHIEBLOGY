<?php
require_once 'User.php';



use Classes\Validate;

class UserLogic
{
    public function handle_request()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $name = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            echo "<div class='mt-5'>

            </div>";

            var_dump($name. "" . $email . "" . $password);

            // $validate = new Validate;
            // $validate->validate_email($email);
            // $validate->validate_username($name);
            // $validate->validate_password($password);

            // $user = new User();

            // if (isset($_POST['register'])) {
            //     $user->register($name, $email, $password);
            //     header('Location:../Admin/signup.php');
            // } elseif (isset($_POST['login'])) {
            //     $user->login($email, $password);
            // }
        }
    }
}
