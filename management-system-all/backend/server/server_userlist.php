<?php
/*
 * @Description: 服务端用户列表处理页面
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-10-19 16:21:43
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-11-01 14:24:28
 * @FilePath: /management-system-all/backend/server/server_userlist.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */

//  __DIR__ ：获取文件的目录
// require __DIR__ . '/common/connect.php';
require_once __DIR__ . '/common/DB.php';

// 准备sql语句
$sql = "SELECT * FROM user";

// 执行sql查询
$stmt = DB::getInstance()->connect()->query($sql);
$users = $stmt->fetchAll();
$data = [];
foreach ($users as $u) {
  // 对类型进行转化
  switch ($u['type']) {
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