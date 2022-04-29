<?php 
require_once __DIR__. '/../db.php';
session_start();
$res = $_POST;

$sql = 'SELECT * FROM user WHERE username = :username';

$query = $db->prepare($sql);

$query->execute([
	':username' => $res["username"],
]); 
$data = $query->fetch(PDO::FETCH_ASSOC);


if( empty($_POST['username']) || empty( $_POST['password'])){
    $_SESSION['signup_error']= "Remplissez tous les champs";
    header("Location: /login ");
    die();
}

$password = $_POST['password'];

$password = hash('sha256',$_POST['password']);


if ($res["username"] == $data["username"] && $password == $data["password"] ){
    header('Location: /');
}else{
    if($res["username"] != $data["username"]){
    $_SESSION['signup_error']= "The email you entered isn’t connected to an account. Find your account and log in.";
    header("Location: /login");
    die();
    }else{
    $_SESSION['signup_error']= "The password you’ve entered is incorrect.";
    header("Location: /login");
    die();}

}

?>