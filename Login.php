<?php
require 'connectdb.php';

$login_username = mysqli_real_escape_string($dbcon,$_POST['username']);
$login_password = mysqli_real_escape_string($dbcon,$_POST['password']);

$salt = 'tygfvbfvfgctcgctectgctrgctxtcgfcgf';
$hash_login_password = hash_hmac('sha256',$login_password,$salt);

$sql = "SELECT * FROM sas_login WHERE login_username=? AND login_password=?";
$stmt = mysqli_prepare($dbcon, $sql);
mysqli_stmt_bind_param($stmt,"ss",$login_username,$hash_login_password);
mysqli_execute($stmt);
$result_user = mysqli_stmt_get_result($stmt);
if ($result_user->num_rows == 1) {
    session_start();
        $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        $_SESSION['login_id'] = $row_user['login_id'];
    
    header("Location: main.php");
}else {
    echo "username or password invalid";
}
?>