<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $enJson['global']['title'] ?></title>
    <link rel="shortcut icon" href="./front-end/assets/img/favicon.svg" type="image/x-icon">

    <link rel="stylesheet" href="./front-end/assets/css/global.css">
    <link rel="stylesheet" href="./front-end/partials/navBar.css">
    <link rel="stylesheet" href="./front-end/views/pages/Register.css">
    <link rel="stylesheet" href="./front-end/views/pages/Profile.css">
    <link rel="stylesheet" href="./front-end/partials/Menu.css">
    <link rel="stylesheet" href="./front-end/views/pages/Home.css">
    <link rel="stylesheet" href="./front-end/assets/css/toastr.css">
    <link rel="stylesheet" href="./front-end/views/pages/Explorer.css">
    <link rel="stylesheet" href="./front-end/views/components/FilterBar.css">
    <link rel="stylesheet" href="./front-end/assets/css/SearchPage.css">

</head>

<body>
    <?php if ($pageName != "404") {
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
                <?= $pageName ?>
            </div>
        </div>


    <?php 
    if ($pageName != "404" )  {
       
        echo $navBar;
        echo $menu;
     }
      ?>
      
      <?= $pageName ?>
      
    </div>
    <!-- Add js library and script here -->
    <script src="./front-end/assets/js/script-menu.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script> 
    <script src="./front-end/assets/js/toastr.min.js"></script> 
    <script src="./front-end/assets/js/toastr.js.map"></script> 
    <script src="./front-end/assets/js/SearchPage.js"></script>
    <script src="/front-end/assets/js/script-explorer.js"></script>

    <script>
      toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-full-width",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
    </script>


</body>

</html>