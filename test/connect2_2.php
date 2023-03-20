<?php
//面向对象方式连接
//配置信息
$host="localhost";
$user="root";
$password="";
$dabase="test";
//1，实例化mysqli对象
$coon=new mysqli($host,$user,$password);
//检测连接是否成功
//判断数据库是否连接，返回0则连接成功，返回非0则连接失败
if($coon->conn_error)
{
    die("数据库连接失败！".$coon->conn_error);
}
//2,选择数据库
$coon->select_db($database);
//3,执行sql语句
//执行查询
$result=$coon->query("select * from test");

     // 判断查询的结果数量是否大于0
     if(mysqli_num_rows($result) > 0) {
        $response = [];
        // 通过 while 循环来遍历结果集，去除其中的数据
        while($row = mysqli_fetch_array($result)) {
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

#关闭结果集
    mysqli_free_result($result);
#断开与mysql数据库服务器的连接
    mysqli_close($conn);







?>