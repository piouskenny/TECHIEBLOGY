    <?php
    require __DIR__ . '/../config/config.php';
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>TechieBlogyy</title>
        <link rel="stylesheet" href="<?= ASSET_URL ?>css/mdb.min.css" />
        <link rel="stylesheet" href="<?= ASSET_URL_ADMIN ?>css/mdb.min.css" />
        <link rel="stylesheet" href="<?= ASSET_URL_ADMIN ?>css/sidebar.css" />


        <!-- Custom styles -->
        <link rel="stylesheet" href="<?= ASSET_URL ?>css/style.css" />
        <link rel="stylesheet" href="<?= ASSET_URL_ADMIN ?>css/style.css" />

    </head>

    <body class="min-vh-100">
        <header>
            <?php require 'nav.php';
            ?>