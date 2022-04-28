<?php 

$res = $_POST;

//session_start();

?> 
<?php

var_dump($res);

/* $sql = 'SELECT * FROM users WHERE username = :username';

$query = $conn->prepare($sql);

$query->execute([
	':username' => $res["username"],
]); 
$data = $query->fetch(PDO::FETCH_ASSOC);


if( empty($_POST['username']) || empty( $_POST['password']) ){
    $_SESSION['signup_error']= "Remplissez vos champs";
    header("Location: /login ");
    die();
}

$password = hash('sha256',$_POST['password']);


if ($res["username"] == $data["username"] && $password == $data["password"] ){
    $_SESSION["useranme"] = 1;
    $_SESSION["id"] = $data["id"];
    header('Location: /');
}else{
    if($res["username"] != $data["username"]){
    $_SESSION['signup_error']= "Le nom d’utilisateur entré n’appartient à aucun compte.";
    header("Location: /login");
    die();
    }else{
    $_SESSION['signup_error']= "Votre mot de passe est incorrect.";
    header("Location: /login");
    die();
    }
} */

?>