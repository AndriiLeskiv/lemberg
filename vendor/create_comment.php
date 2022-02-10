<?php
require_once '../config/db.php';

$id = $_POST['id'];
$body = $_POST['body'];

mysqli_query($connect,"insert into coments(id, product_id, body) value (null, '$id', '$body')");

header('Location: ../product.php?id='.$id);

