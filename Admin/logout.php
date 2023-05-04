<?php
require __DIR__ . '/../controller/user_logic.php';

require __DIR__ . '/../inc/header.php';


$user_logic = new UserLogic;
?>
<form method="post" action=<?php $user_logic->handle_logout(); ?>>
    <button type="submit" class="btn btn-danger mt-4">Yes</button>
</form>
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <?php require __DIR__ . '/../inc/sidebar.php' ?>
    <!-- Sidebar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4 text-center">
        <span class="bg-warning d-block py-2">
            LOGOUT
        </span>
        <div class="alert alert-warning text-center">

            <span>
                Are you sure you want to logout?
            </span>
            <div class="text-center">


            </div>

        </div>
    </div>
</main>
<!--Main layout-->