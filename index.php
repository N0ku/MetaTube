<?php
$Json = file_get_contents('./wordingUtils/en.json');

$enJson = json_decode($Json, true);

// Prevent the user from going on non-existing pages
session_start();
$page_title = 'Unknown page?';
$existing_pages = ['Home', 'Explorer', 'Subscriptions', 'Library', 'History', 'LikedVideo', 'WatchLater', "MetaCreator", 'Settings', 'Report', 'Help', 'SendFeedback', 'Profile', 'Register', 'Login', 'ChannelPage', 'Upload', 'SearchPage', 'Watch', 'MetaTubePremium', '404'];
$existing_studio = ['Dashboard', 'Content','Analystic'];
$homeBar = $_GET['name'];





if ($homeBar == "MetaCreator") {
    $link = $_GET['link'];
    if (empty($_GET['link']) == false) {
        if (in_array($_GET['link'], $existing_studio)) {
            $pageMeta = $_GET['link'];
        } else {
            $pageName = "404";
            header('Location: index.php?name=404');
        }
    } else {
        header('Location: index.php?name=MetaCreator&link=Dashboard');
    }
    // Include here MetaCreator Menu
    include __DIR__ . "/front-end/partials/MetaCreatorNavbar.php"; // $CreatorNavbar
    include __DIR__ . "/front-end/partials/MetaCreatorMenu.php"; // $CreatorMen
    include  __DIR__ . '/front-end/views/pages/MetaCreator/' . $pageMeta . '.php'; // $page


} else {
    if (empty($_GET['name']) == false) {
        if (in_array($_GET['name'], $existing_pages)) {
            $pageName = $_GET['name'];
        } else {
            $pageName = "404";
            header('Location: index.php?name=404');
        }
    } else {
        header('Location: index.php?name=Home');
    }

    include __DIR__ . '/front-end/views/components/FilterBar.php'; // $filterbar
    include  __DIR__ . '/front-end/views/pages/' . $pageName . '.php'; // $page 
    include  __DIR__ . "/front-end/partials/Menu.php"; // $menu
    include __DIR__ . '/front-end/views/pages/Channel.php';
    include  __DIR__ . "/front-end/partials/NavBar.php"; // $navBar
    include __DIR__ . '/front-end/views/pages/upload.php'; //$channelVideoUpload
}


require_once './template.php';
