<?php
include_once './back-end/helper/function.php';


function getVids($number)
{
    $vids = getApi('videos/' . $number);
    return $vids;
}
