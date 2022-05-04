<?php
require_once __DIR__ . '/../helper/function.php';
$path_key = "C:/Users/Ruiseki/sprint/MetaTube/storage/";

function getVid($id){
    $vid = getApi('video/' . $id);
return $vid;
}