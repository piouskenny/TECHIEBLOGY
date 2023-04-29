<?php
require __DIR__ . '/../inc/header.php';
?>
<link rel="stylesheet" href="<?= ASSET_URL ?>form.css">

<div class="form-signin bg-light">
    <form method="POST" action="../controller/user_logic.php">

        <img class="mb-4" src="https://www.dropbox.com/s/zgbbayj1iqd9fjf/CF_Mark.jpg?raw=1" alt="" width="72">
        <h1 class="h3 mb-3 fw-normal">SIGNUP</h1>
        <div class="form-floating">
            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-success" type="submit" name="register">Sign UP</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
    </form>
</div>

<?php
require __DIR__ . '/../inc/footer.php';
?>