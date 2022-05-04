<?php
require_once __DIR__ . '/../db.php';
require_once __DIR__ . '/../helper/function.php';
session_start();

$id = giveId();
$email = $_POST['email'];
$profilNull = 'https://images.unsplash.com/photo-1551373884-8a0750074df7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80';
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['dateBirth']) || empty($_POST['email'])) {
    header("Location: /index.php?name=Login ");
    //die();
}
if (!ctype_alnum($_POST['username'])) {
    $_SESSION['signup_error'] = "Pseudo invalide";
    header("Location: /index.php?name=Register ");
    //die();
}
if (!empty($_FILES['avatar'])) {
    $tmpName = $_FILES['avatar']['tmp_name'];
    $imgData = base64_encode(file_get_contents($tmpName));
}
if (!empty($_POST['dateBirth'])) {
    // Calcule l'âge à partir d'une date de naissance jj/mm/aaaa
    function Age($date_naissance)
    {
        $am = $date_naissance;
        $an = explode('/', date('d/m/Y'));
        print_r($am);
        print_r($an);
        if (($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) return $an[2] - $am[2];
        return $an[2] - $am[2] - 1;
    }
    $dateBirth = explode("-", $_POST['dateBirth']);
    $newbirth = array_reverse($dateBirth);
    $yearsUser = Age($newbirth);
    if ($yearsUser < 13) {
        $_SESSION['signup_error'] = "Sorry access to Meta Tube is reserved to the person over 13 years.";
        header("Location: /index.php?name=Register ");
        //die();
    }
}

$password = hash('sha256', $_POST['password']);

$sql = 'SELECT * FROM user WHERE email = :email OR username = :pseudo';
$query = $db->prepare($sql);

$query->execute([
    ':email' => $email,
    ':pseudo' => $_POST['username']
]);

$data = $query->fetch(PDO::FETCH_ASSOC);

if ($data) {
    $_SESSION['signup_error'] = "Email / pseudo deja utilise";
    header("location: /index.php?name=Register");
    //die();
}


$sql = 'INSERT INTO user(id,email, username, password, profilePicture, birthday,years) VALUES (:id,:email, :pseudo, :password, :photoProfil, :dateBirth,:years)';
$query = $db->prepare($sql);
$query->execute([
    ':id' => $id,
    ':email' => $email,
    ':pseudo' => $_POST['username'],
    ':password' => $password,
    ':photoProfil' => $imgData,
    ':dateBirth' => $_POST['dateBirth'],
    ':years' => $yearsUser
]);
header("Location: /index.php?name=Login ");
