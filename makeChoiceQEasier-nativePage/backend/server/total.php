<?php
/*
 * @Description: 获取数据总条目数量

 */
require_once '../server/common/DB.php';

$sql = '';
// 获取总数
if ($_REQUEST['type'] == 'total') {
  // 查询表中所有记录的数量
  $sql = 'SELECT COUNT(*) FROM question';
} else {
  $title = $_REQUEST['search_title'];
  $type_id = $_REQUEST['type'] + 0;
  // 查询根据条件所匹配出的所有记录的数量
  $sql = "SELECT COUNT(*) FROM question WHERE stem LIKE '%$title%' AND type='$type'";
  echo $sql;
}
$stmt = DB::getInstance()->connect()->query($sql);
$countArr = $stmt->fetch();
echo $countArr["COUNT(*)"];
