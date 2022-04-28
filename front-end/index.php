<?php

$Json = file_get_contents('./wordingUtils/en.json');
 
$enJson = json_decode($Json, true);


// Prevent the user from going on non-existing pages
session_start();
$page_title = 'Unknown page?';
$existing_pages = ['Home'];

if (empty($_GET['name']) == false) {
    if (in_array($_GET['name'], $existing_pages)) {
        $pageName = $_GET['name'];
    } else {
        $pageName = "404";
    }
}else {
    $pageName = "Home";
}

$request = explode('?',$_SERVER['REQUEST_URI']);

switch ($request[0]) {
    case '/':
        require_once __DIR__ . '/../src/pages/home.php';
        break;
    case '/login':
        require_once __DIR__ . '/../src/pages/login.php';
        break;
    case '/register':
        require_once __DIR__ . '/../src/pages/register.php';
        break;
    case '/deconnexion':
        require_once __DIR__. '/action/disconnect.php';
        break;
    case '/profils':
        require_once __DIR__ . '/../src/pages/profils.php';
        break;

}

require_once __DIR__ . '/template.php';

