<?php

//require_once "./common/connect.php";
require_once './common/DB.php';


$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
$birthday = $_REQUEST['birthday'];
$type = $_REQUEST['type'];
$icon = $_REQUEST['icon'];
$create_time = time() + 8 * 3600;

$sql = "INSERT INTO user(name, age, birthday, type, icon, create_time) VALUES('$name', $age, '$birthday', $type, '$icon', $create_time)";

/*
//执行sql语句
$stmt = $pdo->query($sql);
 */
$stmt=DB::getInstance()->connect()->exec($sql);
if($stmt > 0) {
  echo "<script>alert('添加成功！');location.href='../view/userlist.php'</script>";
} else {
  echo "<script>alert('添加失败！');location.href='../view/useradd.php'</script>";
}