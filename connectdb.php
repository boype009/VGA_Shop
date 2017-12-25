<?php

$dbcon = mysqli_connect ('localhost','root','','member');

if (mysqli_connect_errno()){
    echo "ไม่สามารถติดต่อฐานขอมูล MySQL ได้". mysqli_connect_errno();
}
mysqli_set_charset($dbcon,'utf-8');

?>