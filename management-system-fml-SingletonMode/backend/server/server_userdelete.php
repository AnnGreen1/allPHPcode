<?php
//require_once "./common/connect.php";
require_once './common/DB.php';

$id = $_REQUEST["id"];

$sql = "delete from user where id = '$id'";

/*
//执行sql语句
$stmt = $pdo->query($sql);
*/
$stmt = DB::getInstance()->connect()->exec($sql);
if ($stmt > 0) {
    echo "<script>alert('删除成功！');location.href='../view/userlist.php'</script>";
  } else {
    echo "<script>alert('删除失败！');location.href='../view/useradd.php'</script>";
  }