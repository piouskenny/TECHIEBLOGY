<?php
require __DIR__ . '/../controller/user_logic.php';

require __DIR__ . '/../inc/header.php';


$user_logic = new UserLogic;

?>
<div class="container mt-5">
    <h1 class="text-center pt-5">Welcome <?= $user_logic->handle_dashboard(); ?></h1>
</div>
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <?php require __DIR__ . '/../inc/sidebar.php' ?>
    <!-- Sidebar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4"></div>
</main>
<!--Main layout-->