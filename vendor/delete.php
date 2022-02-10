<?php

require_once '../config/db.php';

$id = $_GET['id'];

mysqli_query($connect, "delete from product where id = '$id' ");

header('Location: ../index.php');