<?php
//操作
require_once 'connect3.php';
 // 2, 选择数据库
 $conn->select_db($database);

 // 3, 执行sql语句
 // 设置编码格式
 $conn->set_charset("utf8");
 // 执行查询
 $result = $conn->query("SELECT * FROM stu");
 // 判断查询的结果数量是否大于0
 if($result->num_rows > 0) {
   $response = [];
   // 通过 while 循环来遍历结果集，去除其中的数据
   while($row = $result->fetch_assoc()) {
     $contact = array(
         "id" => $row["id"],
         "stu_id" => $row["stu_id"],
         "stu_name" => $row["stu_name"],
         "stu_class_1"=> $row["stu_class_1"],
         "stu_classs_2"=>$row["stu_class_2"]
     );
     array_push($response, $contact);
   }
   echo "<pre>";
   print_r($response);
 }

 // 4, 关闭结果集
 $result->free();
 // 5, 关闭数据库的连接
 $conn->close();