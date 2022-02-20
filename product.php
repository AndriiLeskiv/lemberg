<?php
require_once 'config/db.php';

$product_id = $_GET['id'];
$product = mysqli_query($connect, "select * from product where id = $product_id");
$product = mysqli_fetch_assoc($product);

$comments = mysqli_query($connect, "select * from coments where product_id = $product_id");
$comments = mysqli_fetch_all($comments);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product</title>
</head>
<body>
<h2>Назва товару: <?= $product['title']?></h2>
<h3>Ціна: <?= $product['price']?></h3>
<p>Опис товару: <?= $product['description']?></p>

<hr>

<form action="vendor/create_comment.php" method="post">
    <input type="hidden" name="id" value="<?= $product['id']?>">
    <textarea name="body"></textarea><br>
    <button type="submit">Add comment</button>
</form>

<hr>
<h2>Comments</h2>
<ul>
    <?php foreach ($comments as $comment) { ?>
        <li><?= $comment[2] ?></li>
    <?php } ?>
</ul>
</body>
</html>