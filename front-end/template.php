<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $enJson['global']['title'] ?></title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/SearchBar.css">
    <link rel="stylesheet" href="./assets/css/SearchPage.css">
</head>

<body>
    <!-- Put all components here -->
    <div class="content">
        
        <?php require_once "views/SearchBar/Searchbar.php" ?>
        <?php require_once "views/SearchBar/SearchPage.php" ?>


    </div>
    <!-- Add js library and script here -->
    <script src="./assets/js/SearchPage.js"></script>
    <script src="./assets/js/script-menu.js"></script>
</body>

</html>