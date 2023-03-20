<?php
//connect3
//连接与操作分开
 // 配置信息
 $host = "localhost";
 $user = "root";
 $password = "";
 $database = "test";
 // 1, 实例化mysqli对象
 $conn = new mysqli($host, $user, $password);
 // 检测连接是否成功
 // 判断数据库是否连接,返回0则连接成功，返回非0则连接失败
 if($conn->connect_error) {
     die("数据库连接失败!" . $conn->connect_error);
 }