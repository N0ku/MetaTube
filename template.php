<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $enJson['global']['title'] ?></title>

    <link rel="stylesheet" href="./front-end/assets/css/global.css">
    <link rel="stylesheet" href="./front-end/partials/navBar.css">
    <link rel="stylesheet" href="./front-end/views/pages/Register.css">
    <link rel="stylesheet" href="./front-end/partials/Menu.css">
    <link rel="stylesheet" href="./front-end/views/pages/Home.css">
</head>
<body>
   
    <div class="content">

    <?php if ($pageName != "404")  {
      echo $navBar; 
      echo $menu; }?>
      
      <?= $pageName ?>
      
    </div>
    <!-- Add js library and script here -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="./front-end/assets/js/script-menu.js"></script>

  </body>

</html>