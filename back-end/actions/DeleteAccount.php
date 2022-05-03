<?php
require_once __DIR__ . '/../Db.php';
session_start();
// CHECK IF USER EXIST
if (!empty($_SESSION['user']['id'])) {
    //DELETE USER ROW
    $sql = 'DELETE FROM user WHERE id = :id ';
    $query = $db->prepare($sql);
    $query->execute([
        ":id" => $_SESSION['user']['id']
    ]);
    // EMPTY THE SESSION 
    $_SESSION = array();
    session_destroy();
    //TOASTR
    $_POST['toastr'] = array(
        'type' => 'success', 
        'message' => 'Your accompte as be delete',
        'title' => ''
    );
   
    header("Location: //index.php?name=Login.php");
     
}

header('Location: /index.php?name=Login');