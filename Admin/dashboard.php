<?php
require __DIR__ . '/../inc/header.php';
require __DIR__ . '/../controller/user_logic.php';


$user_logic = new UserLogic;
?>
<div class="container mt-5">
    <h1 class="text-center pt-5">Welcome <?= $user_logic->handle_dashboard(); ?></h1>

</div>