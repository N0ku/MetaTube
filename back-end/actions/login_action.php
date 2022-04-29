<?php 
require_once __DIR__. '/../db.php';
session_start();
$res = $_POST;

$sql = 'SELECT * FROM user WHERE email = :username';

$query = $db->prepare($sql);

$query->execute([
	':username' => $res["username"],
]); 
$data = $query->fetch(PDO::FETCH_ASSOC);


if( empty($_POST['username']) || empty( $_POST['password'])){
    $_SESSION['signup_error']= $enJson['form']['error']['signup'] ;
    header("Location: /index.php?name=Login ");
    die();
}

$password = $_POST['password'];

$password = hash('sha256',$_POST['password']);


if ($res["username"] == $data["username"] && $password == $data["password"] ){
    header('Location: /index.php?name=Home');
}else{
    if($res["username"] != $data["username"]){
    $_SESSION['signup_error']= "sd";
    header("Location: /index.php?name=Login ");
    die();
    }else{
    $_SESSION['signup_error']= $enJson['form']['error']['password'];
    header("Location: /index.php?name=Login ");
    die();}

}

