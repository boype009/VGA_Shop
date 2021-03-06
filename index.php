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
<!DOCTYPE html>
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
            

            
            
            <h3>หน้าสินค้า</h3>
<?php
if($action == 'exists'){
    echo "<div class=\"alert alert-warning\">เพิ่มจำนวนสินค้าแล้ว</div>";
}
if($action == 'add'){
    echo "<div class=\"alert alert-success\">เพิ่มสินค้าลงในตะกร้าเรียบร้อยแล้ว</div>";
}
if($action == 'order'){
	echo "<div class=\"alert alert-success\">สั่งซื้อสินค้าเรียบร้อยแล้ว</div>";
}
if($action == 'orderfail'){
	echo "<div class=\"alert alert-warning\">สั่งซื้อสินค้าไม่สำเร็จ มีข้อผิดพลาดเกิดขึ้นกรุณาลองใหม่อีกครั้ง</div>";
}
?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>รหัสสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>รายละเอียด</th>
                        <th>ราคา</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($meResult=mysqli_fetch_array($meQuery))
                    {
                        ?>
                        <tr>
                            <td><img src="images/<?php echo $meResult['product_img_name']; ?>" border="0"></td>
                            <td><?php echo $meResult['product_code']; ?></td>
                            <td><?php echo $meResult['product_name']; ?></td>
                            <td><?php echo $meResult['product_desc']; ?></td>
                            <td><?php echo number_format($meResult['product_price'],2); ?></td>
                            <td>
                                <a class="btn btn-primary btn-lg" href="updatecart.php?itemId=<?php echo $meResult['id']; ?>" role="button">
                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                    หยิบใส่ตะกร้า</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>


        </div> 

        
        <script src="bootstrap/js/jquery.min.js"></script>
        
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
<?php
    mysqli_close($meConnect);
?>


