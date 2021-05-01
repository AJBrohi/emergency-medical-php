<?php
session_start();

$url = basename($_SERVER['PHP_SELF']);
// $split = explode('/',dirname($url));
// $folder = end($split);


if($url == 'index.php' || $url == 'signupForm.php'){
    require_once('./db/dbconnect.php');
}
else {
    require_once('../db/dbconnect.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<title>Emergency Medical</title>
</head>
<body>