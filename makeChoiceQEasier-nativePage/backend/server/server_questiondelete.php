<?php

// require_once "./common/connect.php";
require_once './common/DB.php';

$id = $_REQUEST["id"];

$sql = "DELETE FROM question WHERE id='$id'";
$count = DB::getInstance()->connect()->exec($sql);
if ($count > 0) {
  echo "<script>alert('删除成功！');location.href='../view/questionlist.php'</script>";
} else {
  echo "<script>alert('删除失败！');location.href='../view/questionadd.php'</script>";
}
