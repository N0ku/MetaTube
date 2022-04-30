<?php

//include "back-end/actions/uploadVideo.php";

//if(isset($_POST['but_upload'])){ upload(); }  

ob_start() ?>

<body>
   <!-- Put all components here -->
   <div class="feature-channel-modal-background"></div>
   <div class="modal-container">
      <div class="feature-channel-modal-overlay-uploadVideo"></div>
      <div class="modal">
         <button class="feature-channel-modal-close" onclick="feature_remove_upload_function()">X</button>
         <h1 id="feature-channel-modal-container-title">Upload</h1>
         <p id="feature-channel-modal-container-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut nam exercitationem nihil veritatis sapiente quia.</p>
         <div>

            <!-- Upload response -->
            <?php
            if (isset($_SESSION['message'])) {
               var_dump($_SESSION['message']);
               unset($_SESSION['message']);
            }
            ?>
            <form method="post" action="" enctype='multipart/form-data'>
               <div id="drop_zone" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);">
                  <p>Drag one or more files to this Drop Zone ...</p>
               </div>
               <input type='file' name='file' />
               <input type='submit' value='Upload' name='but_upload'>
            </form>
         </div>
      </div>

   </div>


   <!-- Add js library and script here -->
</body>

<?php $channelVideoUpload = ob_get_clean() ?>