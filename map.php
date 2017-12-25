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
<html>
  <head>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
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
    <h3>แผนที่ตั้งร้าน Xignos VGA Shop</h3>
    
    
</div>
<div class="container">
    <h2>ที่อยู่ : จังหวัดหนองคาย ตใหนองกอมเกาะ อ.เมือง ซอยนฤมล 5 โทร : 091-XXXXXXX </h2>
  </div>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 17.8466623, lng: 102.7496386};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuLIuV2QbyqqoOGOJ-fkoL8h7xtg5pliM&callback=initMap">
    </script>
<hr/>

  
</div>
  </body>
</html>