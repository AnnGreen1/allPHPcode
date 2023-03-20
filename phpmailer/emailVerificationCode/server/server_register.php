<?php
require 'DB.php';
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$verificationcode = $_REQUEST['verificationcode'];

$sqlselectverificationcode = "select * from emailverificationCode where username = '$email' and $verificationcode = '$verificationcode'";
$stmt = DB::getInstance()->connect()->query($sqlselectverificationcode);
if(is_null($stmt)) 
{
    echo "<script>alert('注册成功！');</script>";
}else{
    echo "<script>alert('注册失败！');</script>";
}
