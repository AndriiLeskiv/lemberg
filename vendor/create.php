<?php

require_once '../config/db.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, "insert into product(id, title, price, description)
value (null, '$title', '$price', '$description')");

header('Location: ../index.php');