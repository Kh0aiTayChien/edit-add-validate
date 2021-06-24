<?php
include_once '../../src/Product.php';
include_once '../../src/ProductManager.php';
include_once '../../src/Validate.php';
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $price = $_REQUEST['price'];
//    $product = new Product($id, $name, $price);
//        ProductManager::$pathFile = '../../data.json';
//        ProductManager::addProduct($product);
//        header('location:../../index.php');
  Product::check_username($id,$name,$price);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 align="center"> NHAP SAN PHAM VAO DAY </h1>
<p>Ten sp khong dai hon 6 chu cai</p>
<!--<form method="post">-->
<!--    <input type="text" name="id">-->
<!--    <input type="text" name="name">-->
<!--    <input type="text" name="price">-->
<!--    <button>add</button>-->
<!--</form>-->
<form method="post">
    <div class="form-group">
        <label for="formGroupExampleInput">ID</label>
        <input type="text" class="form-control" name="id" placeholder="id">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Name</label>
        <input type="text" class="form-control" name="name" placeholder="name">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Price</label>
        <input type="text" class="form-control" name="price" placeholder="price">
    </div>
    <button>add</button>
    <p><?php if (isset($_SESSION['name'])){ echo $_SESSION['name']; session_destroy();} ?></p>
</form>
</body>
</html>
