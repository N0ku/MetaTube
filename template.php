<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $enJson['global']['title'] ?></title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./front-end/assets/js/toastr.min.js"></script>
    <script src="./front-end/assets/js/toastr.js.map"></script>
    <link rel="shortcut icon" href="./front-end/assets/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./front-end/assets/css/Global.css">
    <link rel="stylesheet" href="./front-end/assets/css/NavBar.css">
    <link rel="stylesheet" href="./front-end/assets/css/Register.css">
    <link rel="stylesheet" href="./front-end/assets/css/Profile.css">
    <link rel="stylesheet" href="./front-end/assets/css/Menu.css">
    <link rel="stylesheet" href="./front-end/assets/css/Channel.css">
    <link rel="stylesheet" href="./front-end/assets/css/Upload.css">
    <link rel="stylesheet" href="./front-end/assets/css/ChannelPage.css">
    <link rel="stylesheet" href="./front-end/assets/css/Home.css">
    <link rel="stylesheet" href="./front-end/assets/css/Toastr.css">
    <link rel="stylesheet" href="./front-end/assets/css/Explorer.css">
    <link rel="stylesheet" href="./front-end/assets/css/FilterBar.css">
    <link rel="stylesheet" href="./front-end/assets/css/404.css">
    <link rel="stylesheet" href="./front-end/assets/css/SearchPage.css">
    <link rel="stylesheet" href="./front-end/assets/css/Watch.css">
    <link rel="stylesheet" href="./front-end/assets/css/MetaTubePremium.css">
    <link rel="stylesheet" href="./front-end/assets/css/flash.css">
    <link rel="stylesheet" href="./front-end/assets/css/likedvideo.css">
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>

    <link rel="stylesheet" href="./front-end/assets/css/Update.css">
</head>

<body>
    <?= $channelVideoUpload ?>

    <?php if ($pageName != "404") {
        echo $channelCreation;
        echo $navBar;
    } ?>
    <div class="content">
        <div class="menus">
            <?php if ($pageName != "404") {
                echo $menu;
            } ?>
        </div>
        <div class="page-content">
            <div class="page">
                <?php if ($homeBar == "Home") {
                    echo $filterbar;
                } ?>
                <?php if ($pageName != "404") {
                    echo $pageName;
                } ?>
            </div>
        </div>
    </div>

    <!-- Add js library and script here -->
    <?php if ($homeBar == "Home") { ?>
    <script src="/front-end/assets/js/scroll.js"></script>
    <?php } ?>
    <script src="/front-end/assets/js/script-menu.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./front-end/assets/js/SearchPage.js"></script>
    <script src="/front-end/assets/js/feature-channel-modal-createCreator.js"></script>
    <script src="/front-end/assets/js/script-menu.js"></script>
    <script src="/front-end/assets/js/script-explorer.js"></script>
    <script src="/front-end/assets/js/script-watch.js"></script>
    <script src="./front-end/assets/js/toastr.min.js"></script>
    <script src="./front-end/assets/js/toastr.js.map"></script>

    <script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "2000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    </script>


</body>

</html>