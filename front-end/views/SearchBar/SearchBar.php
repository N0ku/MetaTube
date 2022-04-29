<head>
    <?php
session_start();

// SearchBar request content
if(isset($_GET["searchbar_content"])){
    $_filters["srch_cntnt"] = $_GET["searchbar_content"];
}else{
    $_filters["srch_cntnt"] = "";
}


// GET (or attribute default) value for filters.
echo $_filters["up_date"];
if(!isset($_filters["up_date"])){
    $_filters["up_date"] = "";
}
if(!isset($_filters["type"])){
    $_filters["type"] = "";
}
if(!isset($_filters["ord_by"])){
    $_filters["ord_by"] = "";
}

//coucou je suis un commentaire.
$array = ['SearchBarContent' => $_filters["srch_cntnt"], "filters" => ["uploadDate" => $_filters["up_date"], "filterType" => $_filters["type"], "orderBy" => $_filters["ord_by"] ] ];
echo json_encode($array, JSON_PRETTY_PRINT);
?>
</head>
<body>
    <!-- The entire searchbar-->
    <div id="searchBar">
        <div id="searchbar" class="row">
            <!-- The form where we get the result from the url -->
            <form method="GET" class="navSearchBox" action="/front-end/template.php">
                <input
                type="text"
                name="searchbar_content"
                id="searchbarContent"
                placeholder="Search Pradish"
                />
                <button type="submit" class="searchButton">
                <img class="searchIcon"
                    src="./assets/img/magnifying-glass-solid.svg"
                    alt="magnifying glass" @click="fonctionDeRecherche"
                />
                </button>
            </form>
        </div>
    </div>
</body>
</html>