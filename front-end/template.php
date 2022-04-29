<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $enJson['global']['title'] ?> | <?= $title ?></title>

    <link rel="stylesheet" href="./front-end/assets/css/global.css">
    <link rel="stylesheet" href="./front-end/assets/css/navbar.css">
    <link rel="stylesheet" href="./front-end/assets/css/register.css">
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