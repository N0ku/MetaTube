<?php
require_once __DIR__ . '/../Db.php';
session_start();
$_SESSION['process'] = 'user';

if (ctype_alnum($_POST['username'])) {
    $sql = 'SELECT * FROM user WHERE username = :username AND id != :id';
    $query = $db->prepare($sql);
    $query->execute([
        ':username' => $_POST["username"],
        ':id' => $_SESSION["user"]["id"]
    ]);
    $data = $query->fetch(PDO::FETCH_ASSOC);
    if(!$data){
        $sql = 'SELECT * FROM user WHERE email = :email AND id != :id';
        $query = $db->prepare($sql);
        $query->execute([
            ':email' => $_POST['email'],
            ':id' => $_SESSION["user"]["id"]
        ]);
        $mail = $query->fetch(PDO::FETCH_ASSOC);
        if (!$mail) {
            $dateBirth = explode("-", $_POST['dateBirth']);
            $newbirth = array_reverse($dateBirth);
            $yearsUser = HowOldAreYou($newbirth);
            if ($yearsUser > 13) {
                

            $sql = 'UPDATE user set email =:email, username =:username ,birthday =:birthday,years=:years  WHERE id =:id ';
            $query = $db->prepare($sql);
            $query->execute([
                ':id'=> $_SESSION["user"]["id"],
                ':email' => $_POST['email'],
                ':username' => $_POST["username"],
                ':birthday' => $_POST['dateBirth'],
                ':years' => $yearsUser
            ]);
            $_SESSION["user"]["email"]= $_POST['email'];
            $_SESSION["user"]["username"] =$_POST["username"];
            $_SESSION["user"]["birthday"] = $_POST['dateBirth'];
            $_SESSION["user"]["years"] = $yearsUser;
            unset($_SESSION['process']);
            $_SESSION['toastr'] = array(
                'type'      => 'success',
                'message' => 'Your account is update now.',
                'title'     => ''
            );

            header("Location: /index.php?name=Profile ");
            }else{
                $_SESSION['toastr'] = array(
                    'type'      => 'error',
                    'message' => 'Sorry access to Meta Tube is reserved to the person over 13 years.',
                    'title'     => ''
                );
                header("Location: /index.php?name=Profile ");
                }

        } else {
            
            $_SESSION['process'] = 'user';
            
            $_SESSION['toastr'] = array(
                'type'      => 'error',
                'message' => 'This email is already use.',
                'title'     => ''
            );
            header("Location: /index.php?name=Profile ");
        }
    }else{
        $_SESSION['process'] = "user";
        $_SESSION['toastr'] = array(
            'type'      => 'error',
            'message' => 'Your username is already use.',
            'title'     => ''
        );
        header("Location: /index.php?name=Profile ");
    }
}else{
    $_SESSION['process'] = "user";
    header("Location: /index.php?name=Profile ");
    $_SESSION['toastr'] = array(
        'type'      => 'error',
        'message' => 'Your username is not valid',
        'title'     => ''
    );
}






