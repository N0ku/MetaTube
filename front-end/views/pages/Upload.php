<?php

include "back-end/actions/uploadVideo.php";

if(isset($_POST['but_upload'])){ upload(); }
?>

<?php ob_start() ?>
  
  <div>

    <!-- Upload response -->
    <?php 
    if(isset($_SESSION['message'])){
       var_dump($_SESSION['message']);
       unset($_SESSION['message']);
    }
    ?>
    <form method="post" action="" enctype='multipart/form-data'>
      <input type='file' name='file' />
      <input type='submit' value='Upload' name='but_upload'>
    </form>


</div>

<?php $upload = ob_get_clean() ?>
