<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

    ?>
</head>
<body>
    <!-- The entire searchbar-->
    <div id="search-bar">
        <div id="searchbar" class="row">
            <!-- The form where we get the result from the url -->
            <form method="GET" class="nav-search-box" action="">
                <input
                type="text"
                name="searchbar-content"
                id="searchbar-content"
                placeholder="Search Pradish"
                />
                <div class="search-button">
                <img class="search-icon"
                    src="./assets/img/magnifying-glass-solid.svg"
                    alt="magnifying glass" @click="fonctionDeRecherche"
                />
                </div>
            </form>
        </div>
    </div>
</body>
</html>