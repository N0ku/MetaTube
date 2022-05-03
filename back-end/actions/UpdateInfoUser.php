<?php
require_once __DIR__ . '/../Db.php';
session_start();
$_SESSION['process'] = 'user';

if (!ctype_alnum($_POST['username'])) {
    $_SESSION['process'] = "user";
    header("Location: /index.php?name=Profile ");
    $_SESSION['toastr'] = array(
        'type'      => 'error',
        'message' => 'Your username is not valid',
        'title'     => ''
    );
}


if ($_SESSION["user"]["username"] != $_POST['username']) {
    $sql = 'SELECT * FROM user WHERE username = :username ';
    $query = $db->prepare($sql);
    $query->execute([
        ':username' => $_POST["username"],
    ]);
    $data = $query->fetch(PDO::FETCH_ASSOC);
    if ($data) {
        $_SESSION['process'] = "user";
        $_SESSION['toastr'] = array(
            'type'      => 'error',
            'message' => 'Your username is already use.',
            'title'     => ''
        );
        header("Location: /index.php?name=Profile ");
    } else {
        $name = $_POST["username"];
    }
} else {
    $name = $_SESSION["user"]["username"];
}

if ($_SESSION["user"]["email"] != $_POST['email']) {
    $sql = 'SELECT * FROM user WHERE email = :email ';
    $query = $db->prepare($sql);
    $query->execute([
        ':email' => $_POST['email'],
    ]);
    $mail = $query->fetch(PDO::FETCH_ASSOC);

    if ($mail) {
        $_SESSION['processUser'] = true;
        $_SESSION['process'] = false;
        header("Location: /index.php?name=Profile ");
        $_SESSION['toastr'] = array(
            'type'      => 'error',
            'message' => 'This email is already use.',
            'title'     => ''
        );
    } else {
        $email = $_POST["email"];
    }
} else {
    $email = $_SESSION["user"]["email"];
}

if (!empty($_POST['dateBirth'])) {
    $dateBirth = explode("-", $_POST['dateBirth']);
    $newbirth = array_reverse($dateBirth);
    $yearsUser = HowOldAreYou($newbirth);
    if ($yearsUser < 13) {
        $_SESSION['toastr'] = array(
            'type'      => 'error',
            'message' => 'Sorry access to Meta Tube is reserved to the person over 13 years.',
            'title'     => ''
        );
        header("Location: /index.php?name=Profile ");
        die();
    }else{
        $birth = $_POST['dateBirth'];
    }
}else{
    $birth = $_SESSION["user"]["birthday"];
}

$sql = 'UPDATE user set email =:email, username =:username ,birthday =:birthday,years=:years  WHERE id =:id ';
$query = $db->prepare($sql);
$query->execute([
    ':id'=> $_SESSION["user"]["id"],
    ':email' => $email,
    ':username' => $name,
    ':birthday' => $birth,
    ':years' => $yearsUser
]);
$_SESSION["user"]["email"]= $email;
$_SESSION["user"]["username"] = $name;
$_SESSION["user"]["birthday"] = $birth;
$_SESSION["user"]["years"] = $yearsUser;
unset($_SESSION['process']);
$_SESSION['toastr'] = array(
    'type'      => 'success',
    'message' => 'Your account is update now.',
    'title'     => ''
);

header("Location: /index.php?name=Profile ");
