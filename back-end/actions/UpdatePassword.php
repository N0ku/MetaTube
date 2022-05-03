<?php
require_once __DIR__ . '/../Db.php';
session_start();
$old_password =  $_SESSION['user']['password'];
$id = $_SESSION['user']['id'];
$_SESSION['process'] = 'password';



if(empty($_POST['password']) || empty($_POST['new-password']) || empty($_POST['confirm-password'])){
    $password = hash('sha256',$_POST['old-password']);
    $new_password = hash('sha256',$_POST['new-password']);
    $confirm_password = hash('sha256',$_POST['confirm-password']);
 
    if($password == $old_password){
        if($new_password == $confirm_password){
            $sql = 'UPDATE user SET password = :password WHERE id = :id';

            $query = $db->prepare($sql);
            $query->execute([
	            ":password" => $new_password,
                ":id" => $id
            ]);
            $_SESSION['process'] = false;
            header("Location: /index.php?name=Profile ");
            $_SESSION['toastr'] = array(
                'type'      => 'success', 
                'message' => 'Your password as be changed',
                'title'     => ''
            );
            $_SESSION['user']['password'] = $new_password;
            unset($_SESSION['process']);
        }else{
            $_SESSION['toastr'] = array(
                'type'      => 'error', 
                'message' => 'Password is not similar',
                'title'     => ''
            );
        }
    }else{
        $_SESSION['toastr'] = array(
            'type'      => 'error', 
            'message' => 'Your old password is incorrect',
            'title'     => ''
        );
    }
}else{
    
}

header("Location: /index.php?name=Profile ");