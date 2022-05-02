<?php

$Json = file_get_contents('./front-end/wordingUtils/en.json');

$enJson = json_decode($Json, true);

// Prevent the user from going on non-existing pages
session_start();
require_once __DIR__ . '/back-end/db.php';
$page_title = 'Unknown page?';
$existing_pages = ['Home', 'Explorer', 'Subscriptions', 'Library', 'History', 'LikedVideo', 'WatchLater', 'Profile', 'Register', 'Login', 'channel_page', 'Upload'];
$homeBar = $_GET['name'];


if (empty($_GET['name']) == false) {
    if (in_array($_GET['name'], $existing_pages)) {
        $pageName = $_GET['name'];
    } else {
        $pageName = "404";
    }
} else {
    header('Location: index.php?name=Home');
}

include __DIR__ . '/front-end/views/components/FilterBar.php'; // $filterbar
include  __DIR__ . '/front-end/views/pages/' . $pageName . '.php'; // $page 
include   __DIR__ . "/front-end/partials/Menu.php"; // $menu
include   __DIR__ . "/front-end/partials/navBar.php"; // $navBar
include __DIR__ . '/front-end/views/pages/upload.php'; //$channelVideoUpload
include __DIR__ . '/front-end/views/pages/channel.php';

require_once './template.php';
