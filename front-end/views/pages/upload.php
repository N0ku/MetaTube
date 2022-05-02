<?php

include_once "back-end/actions/uploadVideo.php";

if (isset($_POST['but_upload'])) {
   upload();
}

ob_start() ?>

<body>
   <!-- Put all components here -->
   <div class="feature-channel-modal-background"></div>
   <div class="modal-container-channel">
      <div class="feature-channel-modal-overlay-uploadVideo"></div>
      <div class="modal-channel">
         <button class="feature-channel-modal-close" onclick="feature_remove_upload_function()">X</button>
         <h1 id="feature-channel-modal-container-title">Upload</h1>
         <form method="post" action="" enctype='multipart/form-data'>
            <label for="video">Choose a video</label>
            <input type='file' name='video' />
            <label for="title">Enter the title</label>
            <input type="text" name="title">
            <label for="title">Enter the description</label>
            <input type="text" name="description">
            <label for="video">Choose a thumbnail</label>
            <input type='file' name='thumbnail' />
            <input type='submit' value='Upload' name='but_upload'>
         </form>
         <div>

            <!-- Upload response -->
            <?php
            if (isset($_SESSION['message'])) {
               var_dump($_SESSION['message']);
               unset($_SESSION['message']);
            }
            ?>

         </div>
      </div>

   </div>


   <!-- Add js library and script here -->
</body>

<?php $channelVideoUpload = ob_get_clean() ?>