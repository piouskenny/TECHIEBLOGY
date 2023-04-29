<?php
require_once 'User.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new User();

    if (isset($_POST['register'])) {
        $user->register($name, $email, $password);
        header('Location:../Admin/signup.php');
    } elseif (isset($_POST['login'])) {
        $user->login($email, $password);
    }
}
