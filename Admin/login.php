<?php
require __DIR__ . '/../controller/user_logic.php';

require __DIR__ . '/../inc/header.php';


$user_logic = new UserLogic;

// $user_logic->session_handler();
?>

<div class="container mt-5">
    <div class="row d-flex justify-content-center ">
        <div class="col-md-4">
            <div class="form-signin bg-light d-block">

                <form method="POST" action=<?php $user_logic->handle_request(); ?>>
                    <h1 class="h3 mb-3 fw-normal text-center  mt-5">login</h1>
                    <div class="form-floating my-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <!-- <button class="w-100 btn btn-lg btn-success" type="submit" name="signin">Login</button>
                 -->
                    <button class="w-100 btn btn-lg btn-success" type="submit" name="login">Login</button>


                    <p class="mt-5 mb-3 text-muted text-center">&copy; 2023</p>
                </form>
            </div>
        </div>
    </div>


</div>


<?php
require __DIR__ . '/../inc/footer.php';
?>