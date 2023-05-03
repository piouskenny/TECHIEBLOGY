<?php
require_once  __DIR__ . '/../config/db_properties.php';
require_once  __DIR__ . '/../controller/DB_interaction.php';


class User
{
    private $db;

    public function __construct()
    {
        $this->db = new DB_interaction();
    }

    public function register($name, $email, $password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);


        $sql = "INSERT INTO admin_user (username, email, password) VALUES ('$name', '$email', '$hash')";

        return $this->db->base_query($sql);
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM admin_user WHERE email='$email'";
        $result = $this->db->base_query($sql);
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            return true;
        } else {
            return false;
        }
    }

    public function dashboard($id)
    {
        $sql = "SELECT * FROM admin_user WHERE id='$id'";
        $result = $this->db->base_query($sql);
        $user = $result->fetch_assoc();
        $username = $user['username'];
        return $username;
    }



    public function logout()
    {
        session_start();
        unset($_SESSION['user_id']);
        session_destroy();
    }

    public function isLoggedIn()
    {
        session_start();
        $user_id = $_SESSION['user_id'];
        return $user_id;
    }
}
