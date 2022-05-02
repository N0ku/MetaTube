<?php 
$title ="Profile";
ob_start();

if (!(isset($_SESSION['connect']) == true)){
    header('Location: /index.php?name=Home');
    
}?> 

 
<?php $pageName = ob_get_clean(); 
