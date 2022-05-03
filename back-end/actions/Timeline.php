<?php

function getVids($number)
{
    $vids = getApi('timeline/video/' . $number);
    return $vids;
}

function redirect()
{
    header('location: index.php?name=Home');
}

$path_key = "C:/Users/Ruiseki/sprint/MetaTube/storage/";


function getCreator($id)
{
    $creator = getApi('channel/' . $id);
    return $creator;
}
