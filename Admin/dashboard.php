<?php
require __DIR__ . '/../inc/header.php';
require __DIR__ . '/../controller/user_logic.php';


$user_logic = new UserLogic;
?>

<h1><?= $user_logic->handle_dashboard(); ?></h1>