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
require_once __DIR__ . '/channel.php';
//require_once __DIR__ . '/template.php';
//require_once __DIR__ . '/upload.php';

