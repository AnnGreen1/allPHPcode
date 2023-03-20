<?php
//require_once "./common/connect.php";
require_once './common/DB.php';


$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$birthday = $_REQUEST['birthday'];
$type = $_REQUEST['type'];
$icon = $_REQUEST['icon'];
$create_time = time();


$sql = "UPDATE user SET name='$name', age=$age, birthday='$birthday', type=$type, icon='$icon', create_time=$create_time WHERE id='$id'";
/*
//执行sql语句
$stmt = $pdo->query($sql);
*/
$stmt = DB::getInstance()->connect()->exec($sql);

if($stmt > 0) {
  echo "<script>alert('编辑成功！');location.href='../view/userlist.php'</script>";
} else {
  echo "<script>alert('编辑失败！');location.href='../view/useradd.php'</script>";
}