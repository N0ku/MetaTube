<?php

function createChannel()
{
    $name = $_POST['channelName'];
    $id = $_SESSION['user']['id'];

    $img_file = $_FILES['channelImg']['tmp_name'];
    $imgData = base64_encode(file_get_contents($img_file));

    $data = array(
        "id" => $id,
        "channelName" => $name,
        "channelProfilePicture" => $imgData
    );

    postApi($data, 'upload/channel');
}
