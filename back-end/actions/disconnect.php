<?php
require_once __DIR__. '/../db.php';
session_start();
$_SESSION = array();
session_destroy();
header('Location: /index.php?name=Login');
exit;
?>