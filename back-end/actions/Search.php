<?php 

function getVids($number)
{
    $vids = getApi('timeline/video/' . $number);
    return $vids;
}

function getCreator($id)
{
    $creator = getApi('channel/' . $id);
    return $creator;
}


    $vids = getVids(10);
    // var_dump($vids);
    ?>