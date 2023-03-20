<?php

// $dsn = 'mysql:host=localhost;dbname=myplatform;port=3306;charset=utf-8';
// $username='root';
// $password='';

// #1、连接数据库服务器
// $host = "localhost";
// $user = "root";
// $password = "";
// $database = "myplatform";
// $conn = mysqli_connect($host, $user, $password);
// if(!$conn) {
//     die("数据库连接失败!" . mysqli_connect_error());
// }
// // else
// // {
// //     echo "成功";
// // }
// #2、选择数据库
// mysqli_select_db($conn,$database);

// 数据库配置参数
$config = array(
    'dsn' => 'mysql:host=localhost;dbname=myplatform;port=3306;charset=utf8',
    'username' => 'root',
    //'password' => '123456'
    'password' => ''
  );
  
  //  数据库连接属性
  $option = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // 默认是 ：PDO::ERRMODE_SILENT,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  );
  
  // 连接数据库
  try {
    $pdo = new PDO($config['dsn'], $config['username'], $config['password'], $option);
  } catch (PDOException $e) {
    die('数据库连接失败' . $e->getMessage());
  }


