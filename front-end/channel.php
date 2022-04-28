<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $enJson['global']['title'] ?></title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/channel.css">
</head>

<body>
    <!-- Put all components here -->
    <input type="button" value="<?php echo $enJson['creation']['create'] ?>">
    <div class="bloc-modal">
         <div class="overlay"></div> 
        <div class="modal-card">


            <div class="title">
                <p class="title-create"><?php echo $enJson['creation']['createTitle'] ?></p>
            </div>
            <div class="channel-profile">
                <img class="img-profile" src="<?php echo $enJson['creation']['Image'] ?>" alt="">
                <input class="btn-image"type="button" value="<?php echo $enJson['creation']['Import'] ?>">
                <label id="info_name">Nom :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div class="control-btn">
                <input class="btn-create" type="button" value="<?php echo $enJson['creation']['create'] ?>">
                <input class="btn-cancel"type="button" value="<?php echo $enJson['creation']['cancel'] ?>">
            </div>
            

        </div>
    
    </div>
    <!-- Add js library and script here -->
    <script src="./assets/js/script-menu.js"></script>
</body>

</html>