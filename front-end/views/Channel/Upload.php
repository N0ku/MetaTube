<?php

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

}
include("../back-end/actions/uploadVideo.php");

if(isset($_POST['but_upload'])){
  
  if(array_key_exists('file', $_FILES)){
    if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
       echo 'upload was successful';
    } else {
       die("Upload failed with error code " . $_FILES['file']['error']);
    }
  }
  $maxsize = 1000000000000;
   if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
       $name = $_FILES['file']['name'];
       $path_key = "C:/";
       $target_file = "C:/Users/Ruiseki/sprint/MetaTube/back-end/temp/" . $_FILES["file"]["name"];

       // Select file type
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($extension,$extensions_arr) ){
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
             $_SESSION['message'] = $_FILES["file"];
          }else{
            $_SESSION['message'] = $_FILES['file'];
             
             // Upload
             if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
               // Insert record
               $_SESSION['message'] = $_FILES['file'];
               $query = "INSERT INTO video(id,buffer,date,privacy) VALUES(1, '".$_FILES['file']['name']."','2022-4-28','public')";

               mysqli_query($con,$query);
               $_SESSION['message'] = "Upload successfully.";
             }
          }
       }else{
          $_SESSION['message'] = "Invalid file extension.";
       }
   }else{
       $_SESSION['message'] = "Please select a file.";
   }
   header('location: index.php');
   exit;
} 

function php_func(){
    //var_dump($_SESSION['message']);
}
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

    <button onclick="clickMe()"> Click </button>

   <script>
      function clickMe(){
         var result = "<?php php_func(); ?>";
         console.log(result);
      }

   </script>   
</div>

<?php $upload = ob_get_clean() ?>
