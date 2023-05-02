<?php

namespace Classes;

class Validate
{
    function validate_email($email)
    {
        // Check if the email address is a valid format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_message = "The email provided is not valid";
            return $error_message;
        }

        // Check if the domain part of the email address exists and is valid
        $parts = explode('@', $email);
        $domain = array_pop($parts);
        if (!checkdnsrr($domain, 'MX')) {
            $error_message = "The email provided doesen't have a valid domain";

            return $error_message;
        }

        // If all checks passed, the email address is valid
        return true;
    }

    public function validate_password($password)
    {
        // The password must be at least 8 characters long
        if (strlen($password) < 8) {
            $error_message = "Password must not be less then 8 characters";
            return $error_message;
        }

        // The password must contain at least one uppercase letter
        if (!preg_match('/[A-Z]/', $password)) {
            $error_message = "Password should not contain at Least One uppercase";
            return $error_message;
        }

        // The password must contain at least one lowercase letter
        if (!preg_match('/[a-z]/', $password)) {
            $error_message  = "Password must contain at least One lowercase";
            return $error_message;
        }

        // The password must contain at least one digit
        if (!preg_match('/\d/', $password)) {
            $error_message = "Password must contain at least one number";
            return $error_message;
        }

        // If all checks pass, the password is valid
        return true;
    }

    public function validate_username($username)
    {
        // The username must be at least 3 characters long
        if (strlen($username) < 3) {
            $error_message = "username must be at least 3 characters long";
            return $error_message;
        }

        // The username must contain only alphanumeric characters
        if (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
            $error_message = "username must contain only alphanumeric characters";
            return $error_message;
        }

        // If all checks pass, the username is valid
        return true;
    }
}
