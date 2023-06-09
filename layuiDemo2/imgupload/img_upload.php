<?php
/*
 * @Description: 文件上传接口
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-10-20 14:22:01
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-10-20 21:37:35
 * @FilePath: /management-system-all/backend/server/common/img_upload.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */




$file = $_FILES['icon']; // 获取文件信息对象
$originalName = $file['name']; // 获取文件名字
$type = $file['type']; // 获取文件类型
$size = $file['size']; // 获取文件的大小
$tmpName = $file['tmp_name']; // 获取上传的文件在服务端的临时名字

// 判断是否上传出错
if ($file['error'] > 0) {
  die("Error!" . $file['error']);
}

// 判断是否是图片格式的
$type = substr($type, strpos($type, '/') + 1);
if (!in_array($type, ['jpg', 'jpeg', 'png', 'gif'])) {
  die("不支持的类型！");
}
// 判断是否超出大小(100M)
if ($size > 1024 * 1024 * 1024 * 1024) {
  die("文件不得超过100M！");
}
// 存储文件
$result = move_uploaded_file($tmpName, './' . $originalName);
$response = null;
if($result) {
  // 图片的路径返回给前端
  $response = array(
    'code' => 100,
    'msg' => '图片上传成功',
    'img' => $originalName,
  );
} else {
  $response = array(
    'code' => -100,
    'msg' => '图片上传失败！',
  );
}
//exit(json_encode($response)) ;
echo json_encode($response);