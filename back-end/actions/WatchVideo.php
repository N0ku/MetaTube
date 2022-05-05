<?php
include_once __DIR__ . '/../helper/function.php';
$path_key = "C:/Users/Ruiseki/sprint/MetaTube/storage/";

function getVid($id)
{
    $vid = getApi('video/' . $id);
    return $vid;
}

function getCreator($id)
{
    $creator = getApi('channel/' . $id);
    return $creator;
}


function postComment($comment, $idUser, $idVid)
{
    $id = checkid('comment/');

    $data = array(
        "id" => $id,
        "author" => $idUser,
        "content" => $comment,
        "video" => $idVid,
        "response" => ""
    );

    postApi($data, 'upload/comment/');
}


function answerComment($comment, $idUser, $idVid, $idAnswer)
{
    $id = checkid('comment/');
    $data = array(
        "id" => $id,
        "author" => $idUser,
        "content" => $comment,
        "video" => $idVid,
        "response" => $idAnswer
    );

    postApi($data, 'upload/comment/');
}


function getComments($id)
{
    $comments = getApi('comment/' . $id);
    return $comments;
}

function view($id)
{
    /*$url = 'http://93.16.2.231:8081/video/view/' . $id;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    curl_close($curl);*/
    getApi('video/view/' . $id);
}

function like($video, $like)
{
    $data = array(
        "video" => $video,
        "like" => $like,
    );
    postApi($data, 'video/like/');
}
