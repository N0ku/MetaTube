<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $enJson['global']['title'] ?> | <?= $title ?></title>

    <link rel="stylesheet" href="./assets/css/global.css">
        <link rel="stylesheet" href="./assets/css/navbar.css">
</head>

<body>
    <?php require_once __DIR__ . "/../front-end/partials/navbar.php" ?>
    <div class="content">

    <?php echo $content; ?>

    </div>
    <!-- Add js library and script here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="./assets/js/script-menu.js"></script> -->
</body>

</html>