<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $enJson['global']['title'] ?></title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/channel.css">
</head>

<body>
<button class="feature-channel-modal-creationAccount-open" onclick="feature_open_accountCreator_function()"><?php echo $enJson['creation']['create'] ?></button>

    <!-- Put all components here -->
    <div class="bloc-modal">
         <div class="feature-channel-modal-overlay-channel"></div> 
        <div class="modal-card">
            <div class="title">
                <p class="title-create"><?php echo $enJson['creation']['createTitle'] ?></p>
            </div>
            <div class="feature-channel-modal-profile">
                <img class="img-profile" src="<?php echo $enJson['creation']['Image'] ?>" alt="">
                <input class="btn-image"type="button" value="<?php echo $enJson['creation']['Import'] ?>">
                <label id="info_name">Nom :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div class="feature-channel-control-btn">
                <input class="btn-create" type="button" value="<?php echo $enJson['creation']['create'] ?>">
                <button class="btn-cancel" onclick="feature_remove_accountCreator_function()"><?php echo $enJson['creation']['cancel'] ?></button>
            </div>
            

        </div>
    
    </div>

    <!-- Add js library and script here -->
    <script src="./assets/js/feature-channel-modal-createCreator.js"></script>
</body>

</html>