<?php

$Json = file_get_contents('./wordingUtils/en.json');
 
$enJson = json_decode($Json, true);

// Prevent the user from going on non-existing pages
session_start();
$page_title = 'Unknown page?';
$existing_pages = ['Home', 'Explorer', 'Subscriptions' , 'Library'];

if (empty($_GET['name']) == false) {
    if (in_array($_GET['name'], $existing_pages)) {
        $pageName = $_GET['name'];
    } else {
        $pageName = "404";
    }
}else {
    $pageName = "Home";
}

include __DIR__ . '/views/Timeline/' . $pageName. '.php'; // $page 
include __DIR__ . "/partials/Menu.php"; // $menu
require_once __DIR__ . '/template.php';