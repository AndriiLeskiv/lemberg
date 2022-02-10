<?php
require_once '../config/db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect,"update product set title = '$title', price = '$price', description = '$description' where id = '$id'");

header('Location: ../index.php');