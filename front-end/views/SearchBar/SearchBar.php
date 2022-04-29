<!DOCTYPE html>
<head>
    <html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

if(isset($_GET["searchbar_content"])){
    $_filters["srch_cntnt"] = $_GET["searchbar_content"];
    echo($_filters["srch_cntnt"]);
}
if(isset($_GET["filter_upload_date"])){
    $_filters["up_date"] = $_GET["filter_upload_date"];
    echo($_filters["up_date"]);
}else{
    $_filters["up_date"] = "";
}
if(isset($_GET["filter_type"])){
    $_filters["type"] = $_GET["filter_type"];
    echo($_filters["type"]);
}else{
    $_filters["type"] = "";
}
if(isset($_GET["filter_order_by"])){
    $_filters["ord_by"] = $_GET["filter_order_by"];
    echo($_filters["ord_by"]);
}else{
    $_filters["ord_by"] = "";
}
$array = ['SearchBarContent' => $_filters["srch_cntnt"], ];
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