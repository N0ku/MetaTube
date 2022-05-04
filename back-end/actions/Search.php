<?php


function getVids($number)
{
    $vids = getApi('timeline/video/' . $number);
    return $vids;
}

function postAPIString($string){
    $arrayJSon = array(
        'searchRequest' => $string
    );
    return postApi($arrayJSon, "search");
}


function getCreator($id)
{
    $creator = getApi('channel/' . $id);
    return $creator;
}


    $vids = getVids(10);
    // var_dump($vids);

        header('Location: /index.php?name=SearchPage');
        ?>