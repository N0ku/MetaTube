<?php
include './back-end/helper/Function.php';


function upload()
{


	$apiUrl = 'http://93.16.2.231:8081/';

	$id = giveId();

	if (array_key_exists('video', $_FILES)) {
		if ($_FILES['video']['error'] === UPLOAD_ERR_OK) {
			echo 'upload was successful';
		} else {
			die("Upload failed with error code " . $_FILES['video']['error']);
		}
	}
	$maxsize = 1000000000000;
	if (isset($_FILES['video']['name']) && $_FILES['video']['name'] != '') {
		$path_key = "C:/Users/Ruiseki/sprint/MetaTube/storage/";
		// $path_key = "/Users/celian/Documents/MetaTube/storage/";
		$target_file = $path_key . $_FILES["video"]["name"];

		// Select file type
		$extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		// Valid file extensions
		$extensions_arr = array("mp4", "avi", "3gp", "mov", "mpeg");

		// Check extension
		if (in_array($extension, $extensions_arr)) {
			// Check file size
			if (($_FILES['video']['size'] >= $maxsize) || ($_FILES["video"]["size"] == 0)) {
			} else {
				// Upload
				if (move_uploaded_file($_FILES['video']['tmp_name'], $path_key . $id . '.' . $extension)) {

					$img_file = $_FILES['thumbnail']['tmp_name'];
					$imgData = base64_encode(file_get_contents($img_file));

					$data = array(
						"id" => $id,
						"creator" => $_SESSION['user']['id'],
						"title" => $_POST['title'],
						"description" => $_POST['description'],
						"privacy" => "public",
						"thumbnail" => $imgData
					);

					postApi($data, 'upload/video');
				}
			}
		} else {
			$_SESSION['message'] = "Invalid file extension.";
		}
	} else {
		$_SESSION['message'] = "Please select a file.";
	}
	header('location: index.php?name=ChannelPage');
	exit;
}
