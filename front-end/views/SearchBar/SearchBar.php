<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="searchbar" class="row">
        <form method="POST" class="nav-search-box" action="">
            <input
            type="text"
            name="searchbar-content"
            id="searchbar-content"
            placeholder="Search Pradish"
            />
            <div class="search-button">
            <img class="search-icon"
                src="../../assets/img/magnifying-glass-solid.svg"
                alt="magnifying glass" @click="fonctionDeRecherche"
            />
            </div>
        </form>
    </div>
</body>
</html>