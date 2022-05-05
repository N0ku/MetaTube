<?php
include_once './back-end/helper/function.php';


function getVids($id)
{
    $vids = getApi('videos/' . $id);
    return $vids;
}
