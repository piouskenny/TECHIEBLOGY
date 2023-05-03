<?php

require_once __DIR__ . '/../Classes/User.php';

require_once __DIR__ . '/../Classes/Validate.php';

// use App\Classes\Validate;


class UserLogic
{

    public $user;

    public function handle_request()
    {

        $validate = new Validate();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            $this->user = new User();

            if (isset($_POST['register'])) {

                $name = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];


                $validate->validate_email($email);
                $validate->validate_username($name);
                $validate->validate_password($password);

                $this->user->register($name, $email, $password);
                header('Location:../Admin/login.php');
            } elseif (isset($_POST['login'])) {

                $email = $_POST['email'];
                $password = $_POST['password'];

                $validate->validate_email($email);
                $validate->validate_password($password);
                $this->user->login($email, $password);
                header('Location:../Admin/dashboard.php');
            }
        }
    }


    public function session_handler()
    {
        $this->user = new User();

        $loggedIn_user_id = $this->user->isLoggedIn();

        if ($loggedIn_user_id) {
            header('Location:../Admin/dashboard.php');
        } else {
            return true;
        }
    }

    public function handle_dashboard()
    {
        $this->user = new User();

        $loggedIn_user_id = $this->user->isLoggedIn();

        if (!$loggedIn_user_id) {
            header('Location:../Admin/login.php');
        } else {
            return $this->user->dashboard($loggedIn_user_id);
        }
    }


    public function handle_logout()
    {
        $this->user = new User();

        $loggedIn_user_id = $this->user->isLoggedIn();

        if ($loggedIn_user_id) {
            $this->user->logout();
        }
    }
}
