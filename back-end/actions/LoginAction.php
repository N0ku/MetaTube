<?php 
require_once __DIR__. '/../Db.php';
session_start();
$res = $_POST;


$sql = 'SELECT * FROM user WHERE email = :username';

$query = $db->prepare($sql);

$query->execute([
	':username' => $res["username"],
]); 
$data = $query->fetch(PDO::FETCH_ASSOC);


if( empty($_POST['username']) || empty( $_POST['password'])){
    //$_SESSION['signup_error']= $enJson['form']['error']['signup'] ;
    header("Location: /index.php?name=Login ");
    die();
}

$password = hash('sha256',$_POST['password']);


if ($res["username"] == $data["email"] && $password == $data["password"] ){
     $_SESSION['user'] = $data;
     $_SESSION['connect'] = true;
    $_SESSION['toastr'] = array(
        'type'      => 'success', 
        'message' => "Welcome, {$data['username']}",
        'title'     => ''
    ); 
    header('Location: /index.php?name=Home');
}else{
    if($res["username"] != $data["email"]){
        $_SESSION['toastr'] = array(
            'type'      => 'error', 
            'message' => $enJson['form']['error']['signup'],
            'title'     => ''
        ); 
    //$_SESSION['signup_error']= $enJson['form']['error']['signup'];
    header("Location: /index.php?name=Login ");
    }else{
        $_SESSION['toastr'] = array(
            'type'      => 'error', 
            'message' => "Warning password wrong",
            'title'     => ''
        ); 

    //$_SESSION['signup_error']= $enJson['form']['error']['password'];
    header("Location: /index.php?name=Login ");}

}

