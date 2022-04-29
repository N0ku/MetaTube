<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $enJson['global']['title'] ?></title>

    <link rel="stylesheet" href="./front-end/assets/css/global.css">
    <link rel="stylesheet" href="./front-end/partials/navbar.css">
    <link rel="stylesheet" href="./front-end/assets/css/register.css">
    <link rel="stylesheet" href="./front-end/partials/Menu.css">
    <link rel="stylesheet" href="./front-end/views/Timeline/Home.css">
    <link rel="stylesheet" href="./front-end/assets/css/channel.css">
    <link rel="stylesheet" href="./front-end/assets/css/upload.css">

</head>
<body>
   
    <div class="content">

    <?= $channelCreation ?>
       <?= $channelVideoUpload ?>
        <?= $navBar; ?>
        <?= $menu; ?>
       <?= $pageName ?>
       


      
    </div>
    <!-- Add js library and script here -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="./front-end/assets/js/feature-channel-modal-uploadVideo.js"></script>
    <script src="./front-end/assets/js/feature-channel-modal-createCreator.js"></script>  
    <script src="./front-end/assets/js/script-menu.js"></script>

  </body>

</html>