<?php

    session_start();
    // SearchBar request content
    if(isset($_POST["searchBar"])){
        $_SESSION["srch_cntnt"] = $_POST["searchBar"];
    }else{
        if(!isset($_SESSION["srch_cntnt"])){
            $_SESSION["srch_cntnt"] = "";
        }
    }
    //We $_POST filters from the url
    if(isset($_POST["filter_upload_date"])){
        $_SESSION["up_date"] = $_POST["filter_upload_date"];
    }else{
        if(!isset($_SESSION["up_date"])){ // verify that the value is not already set (avoid value supression)
            $_SESSION["up_date"] = "";
        }
    }
    if(isset($_POST["filter_type"])){
        $_SESSION["type"] = $_POST["filter_type"];
    }else{
        if(!isset($_SESSION["type"])){ // verify that the value is not already set (avoid value supression)
            $_SESSION["type"] = "";
        }
    }
    if(isset($_POST["filter_order_by"])){
        $_SESSION["ord_by"] = $_POST["filter_order_by"];
    }else{
        if(!isset($_SESSION["ord_by"])){ // verify that the value is not already set (avoid value supression)
            $_SESSION["ord_by"] = "";
        }
    }
    if( (isset($_SESSION["srch_cntnt"])) and (isset($_SESSION["up_date"])) and (isset($_SESSION["type"])) and (isset($_SESSION["ord_by"])) ){}
    $array = ['SearchBarContent' => $_SESSION["srch_cntnt"], "filters" => ["uploadDate" => $_SESSION["up_date"], "filterType" => $_SESSION["type"], "orderBy" => $_SESSION["ord_by"] ] ];
    $encoded_array = json_encode($array, JSON_PRETTY_PRINT);
    $Json['TheJson'] = $encoded_array;

    function addUrlParam($params = array())
    {
        $p = array_merge($_GET, $params);
        $qs = http_build_query($p);
        return basename($_SERVER['PHP_SELF']) . '?' . $qs;
    }

    echo (header('Location:../../index.php?name=SearchPage'.'&'.addUrlParam($Json)));
    ?>