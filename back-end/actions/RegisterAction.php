<?php
require_once __DIR__ . '/../Db.php';
session_start();

$id = giveId(); //GET ID
$email = $_POST['email']; // GET MAIL

//CHECK IF ALL INPUT HAVE VALUE
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['dateBirth']) || empty($_POST['email'])) {
    header("Location: /index.php?name=Register ");
    die();
}

// CHECK IF TYPE OF USERNAME IS VALID
if (!ctype_alnum($_POST['username'])) {
    
    // TOASTR ERROR
    $_SESSION['toastr'] = array(
        'type'      => 'error',
        'message' => 'Your unsername is not respect the alphanumeric characters.',
        'title'     => ''
    );

    header("Location: index.php?name=Register ");
    die();
}

//CHECK IF USERNAME IS NOT ALREADY USE
if (!empty($_POST['username'])) {
    $sql = 'SELECT * FROM user WHERE username = :username ';
    $query = $db->prepare($sql);
    $query->execute([
        ':username' => $_POST["username"],
    ]);
    $dataUser = $query->fetch(PDO::FETCH_ASSOC);
    if ($dataUser['username']) {
       
        // TOASTR ERROR
        $_SESSION['toastr'] = array(
            'type'      => 'error',
            'message' => 'This username is already use.',
            'title'     => ''
        );
        header("Location: /index.php?name=Register ");
        die();
    }
}

// CHECK THE DATEBIRTH AND GET YEARS WITH FUNCTION
if (!empty($_POST['dateBirth'])) {
    $dateBirth = explode("-", $_POST['dateBirth']);
    $newbirth = array_reverse($dateBirth);
    $yearsUser = HowOldAreYou($newbirth);
    if ($yearsUser < 13) {

        // TOASTR ERROR
        $_SESSION['toastr'] = array(
            'type'      => 'error',
            'message' => 'Sorry access to Meta Tube is reserved to the person over 13 years.',
            'title'     => ''
        );
        header("Location: /index.php?name=Register ");
        die();
    }
}
// CHECK IF AVATARE HAVE VALUE ELSE GET DEFAULT AVATAR
if (!empty($_FILES['avatar']['tmp_name'])) {
    $tmpName = $_FILES['avatar']['tmp_name'];
    $imgData = base64_encode(file_get_contents($tmpName));
} else {
    $imgData = "No photo";
}

// HASH PASSWORD
$password = hash('sha256', $_POST['password']);

//CHECK IS EMAIL IS NOT ALREADY USE
$sql = 'SELECT * FROM user WHERE email = :email ';
$query = $db->prepare($sql);

$query->execute([
    ':email' => $email,
]);

$data = $query->fetch(PDO::FETCH_ASSOC);
if ($data) {
    console_log($data);
    $_SESSION['toastr'] = array(
        'type'      => 'error',
        'message' => 'Your email is already use.',
        'title'     => ''
    );

    header("Location: /index.php?name=Register");
    die();
}

// INSERT DATA REGISTER IN TABLE USER 
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

// TOASTR SUCCESS
$_SESSION['toastr'] = array(
    'type'      => 'success',
    'message' => 'Your accompte as be created',
    'title'     => ''
);

header("Location: /index.php?name=Login");
