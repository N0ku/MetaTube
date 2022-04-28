<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $enJson['global']['title'] ?> | <?= $title ?></title>

    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/navbar.css">
    <link rel="stylesheet" href="./assets/css/register.css">
    <link rel="stylesheet" href="./partials/Menu.css">
    <link rel="stylesheet" href="./views/Timeline/Home.css">
</head>
 <?php require_once __DIR__ . "/../front-end/partials/navbar.php" ?>
<body>
   
    <div class="content">

        <?= $content; ?>
        <?= $menu; ?>
        <?= $page; ?>
      
      
    </div>
    <!-- Add js library and script here -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="./assets/js/script-menu.js"></script>

  </body>

</html>