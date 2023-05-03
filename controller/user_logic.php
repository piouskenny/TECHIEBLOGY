<?php
require_once 'User.php';



use App\Classes\Validate;


class UserLogic
{
    public function handle_request()
    {
        $validate = new Validate();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $name = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];



            $validate->validate_email($email);
            $validate->validate_username($name);
            $validate->validate_password($password);

            $user = new User();

            if (isset($_POST['register'])) {
                $user->register($name, $email, $password);
                header('Location:../Admin/signup.php');
            } elseif (isset($_POST['login'])) {
                $user->login($email, $password);
            }
        }
    }
}
