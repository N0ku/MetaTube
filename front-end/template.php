<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $enJson['global']['title'] ?> | <?= $title ?></title>

    <link rel="stylesheet" href="./front-end/assets/css/global.css">
    <link rel="stylesheet" href="./front-end/assets/css/navbar.css">
    <link rel="stylesheet" href="./front-end/assets/css/register.css">
</head>

<body>
    <?php require_once __DIR__ . "/../front-end/partials/navbar.php" ?>
    <div class="content">

     <?php echo $content; ?> 

    </div>
    <!-- Add js library and script here -->
    <!-- choose one -->
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <!-- <script src="./assets/js/script-menu.js"></script> -->
</body>

</html>