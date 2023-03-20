<?php
require __DIR__.'/common/connect.php';

// 准备sql语句
$sql = "SELECT * FROM user";

$stmt = $pdo->query($sql);
$users = $stmt->fetchAll();
$data=[];
foreach($users as $u){
    switch($u['type']){
        case 1:
            $u['type_name'] = "普通员工";
            break;
          case 2:
            $u['type_name'] = "项目经理";
            break;
          case 3:
            $u['type_name'] = "项目组长";
            break;
          default:
            break;
    }
    $u['ctime'] = date('Y-m-d H:i', $u['create_time']);
    array_push($data, $u);
}