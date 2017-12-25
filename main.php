<?php
include 'session.php';
require 'connect.php';

$meSql = "SELECT * FROM products";
$meQuery = mysqli_query($meConnect,$meSql);
$action = isset($_GET['a']) ? $_GET['a'] : "";
$itemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
if(isset($_SESSION['qty'])){
    $meQty = 0;
    foreach($_SESSION['qty'] as $meItem){
        $meQty += intval($meItem);
    }
}else{
    $meQty=0;
}
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Xignos VGA Shop</title>

       
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/nava.css" rel="stylesheet">

        
    </head>
    <body>
        <div class="container">

        <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="main.php">หน้าแรก</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">สินค้า</a></li>
                    <li><a href="cart.php">ตะกร้าสินค้าของฉัน <span class="badge"><?php echo $meQty; ?></span></a></li>
                    <li><a href="map.php">ที่ตั้งของทางร้าน</a></li>
                    <li><a href="logout.php">ออกจากระบบ</a></li>
                </ul>
            </div>
        </div>
    </div>
            

            
            
            <h3>ยินดีต้อนรับ</h3>
<?php

    echo "รหัสสมาชิกของท่านคือ ".$_SESSION['login_id'];
    echo "<br>";
    echo "ID ของท่าน  $s_login_username <br> ที่อยู่ Email :  $s_login_email";
?>

