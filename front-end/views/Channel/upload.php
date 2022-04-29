<?php ob_start() ?>
<body>
    <!-- Put all components here -->
    <div class="feature-channel-modal-background"></div>
 <div class="modal-container">
    <div class ="feature-channel-modal-overlay-uploadVideo"></div>
<div class="modal">
  <button class="feature-channel-modal-close" onclick="feature_remove_upload_function()">X</button>
  <h1 id="feature-channel-modal-container-title">Upload</h1>
  <p id="feature-channel-modal-container-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut nam exercitationem nihil veritatis sapiente quia.</p>
</div>

</div>


    <!-- Add js library and script here -->
</body>

<?php $channelVideoUpload = ob_get_clean() ?>