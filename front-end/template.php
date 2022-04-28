<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $enJson['global']['title'] ?></title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./partials/Menu.css">
    <link rel="stylesheet" href="./views/Timeline/Home.css">
</head>

<body>
    <!-- Put all components here -->
    <div class="content">
        <?= $menu; ?>
        <?= $page; ?>
    </div>
    <!-- Add js library and script here -->
    <script src="./assets/js/Jquery.js"></script>
    <script src="./assets/js/script-menu.js"></script>
</body>

</html>