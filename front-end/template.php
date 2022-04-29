<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    $en_json = file_get_contents('wordingUtils/en.json'); 
    $decoded_en_json = json_decode($en_json, true);
    ?>
    <meta charset="UTF-8">
    <title><?= $decoded_en_json['global']['title'] ?></title>
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