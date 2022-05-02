<?php
require_once __DIR__. '/../db.php';
session_start();

$id = giveId();
$email = $_POST['email'];
$profilNull = 'https://images.unsplash.com/photo-1551373884-8a0750074df7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80';
if( empty($_POST['username']) || empty( $_POST['password']) || empty( $_POST['dateBirth']) || empty( $_POST['email']) ){
    header("Location: /index.php?name=Login ");
    die();
}
if(!ctype_alnum($_POST['username'])){
    $_SESSION['signup_error']= "Pseudo invalide";
    header("Location: index.php?name=Register ");
    die();
}

$password = hash('sha256',$_POST['password']);

$sql = 'SELECT * FROM user WHERE email = :email OR username = :pseudo';
$query = $db->prepare($sql);

$query->execute([
    ':email' => $email,
    ':pseudo' => $_POST['username']
]);

$data = $query->fetch(PDO::FETCH_ASSOC);

if($data){
    $_SESSION['signup_error']= "Email / pseudo deja utilise";
    header(" index.php?name=Register");
    //die();
}


$sql = 'INSERT INTO user(id,email, username, password, profilePicture, birthday) VALUES (:id,:email, :pseudo, :password, :photoProfil, :dateBirth)';
$query = $db->prepare($sql);
$query->execute([
    ':id' => $id,
	':email' => $email,
	':pseudo' => $_POST['username'],
	':password' => $password,
    ':photoProfil' => $profilNull,
    ':dateBirth' => $_POST['dateBirth']
]);
header("Location: /index.php?name=Login ");

?>