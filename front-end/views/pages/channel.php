<?php ob_start() ?>

<body>

    <!-- Put all components here -->
    <div class="bloc-modal">
        <div class="feature-channel-modal-overlay-channel"></div>
        <div class="modal-card">
            <div class="title">
                <p class="title-create"><?php echo $enJson['creation']['createTitle'] ?></p>
            </div>
            <div class="feature-channel-modal-profile">
                <img class="img-profile" src="<?php echo $enJson['creation']['Image'] ?>" alt="">
                <input class="btn-image" type="button" value="<?php echo $enJson['creation']['Import'] ?>">
                <label id="info_name">Nom :</label>
                <input class="feature-channel-modal-username" type="text">
            </div>
            <div class="feature-channel-control-btn">
                <button class="btn-create" onclick="feature_create_account()"><?php echo $enJson['creation']['create'] ?></button>
                <button class="btn-cancel" onclick="feature_remove_accountCreator_function()"><?php echo $enJson['creation']['cancel'] ?></button>
            </div>


        </div>

    </div>

    <!-- Add js library and script here -->

</body>
<?php $channelCreation = ob_get_clean() ?>