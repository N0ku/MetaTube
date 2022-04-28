<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $enJson['global']['title'] ?> | <?= $title ?></title>

    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/navbar.css">
</head>

<body>
    <?php require_once __DIR__ . "/../front-end/partials/navbar.php" ?>
    <div class="content">

    <?php echo $content; ?>

    </div>
    <!-- Add js library and script here -->

    <!-- <script src="./assets/js/script-menu.js"></script> -->
</body>

</html>