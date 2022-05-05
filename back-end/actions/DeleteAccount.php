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
    //DELETE COMMENT ROWs
    $sql = 'DELETE FROM comment WHERE creator = :creator ';
    $query = $db->prepare($sql);
    $query->execute([
        ":creator" => $_SESSION['user']['id']
    ]);
     //DELETE VIDEO ROWs
     $sql = 'DELETE FROM video WHERE creator = :creator ';
     $query = $db->prepare($sql);
     $query->execute([
         ":creator" => $_SESSION['user']['id']
     ]);
     //DELETE CHANNEL ROWs
     $sql = 'DELETE FROM video WHERE channelId = :channelId';
     $query = $db->prepare($sql);
     $query->execute([
         ":channelId" => $_SESSION['user']['id']
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