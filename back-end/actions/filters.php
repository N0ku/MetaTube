<?php

    session_start();
    $_SESSION['up_date'] = $_POST['filter_upload_date'];
    // SearchBar request content
    if(isset($_POST["searchBar"])){
        $_SESSION["srch_cntnt"] = $_POST["searchBar"];
    }else{
        $_SESSION["srch_cntnt"] = "";
    }
    //We $_POST filters from the url
    if(isset($_POST["filter_upload_date"])){
        $_SESSION["up_date"] = $_POST["filter_upload_date"];
        echo($_SESSION["up_date"]);
    }else{
        if(!isset($_SESSION["up_date"])){
            $_SESSION["up_date"] = "";
        }
    }
    if(isset($_POST["filter_type"])){
        $_SESSION["type"] = $_POST["filter_type"];
        echo($_SESSION["type"]);
    }else{
        $_SESSION["type"] = "";
    }
    if(isset($_POST["filter_order_by"])){
        $_SESSION["ord_by"] = $_POST["filter_order_by"];
        echo($_SESSION["ord_by"]);
    }else{
        $_SESSION["ord_by"] = "";
    }
    
    echo (header('Location:../../index.php?name=SearchPage'));
?>