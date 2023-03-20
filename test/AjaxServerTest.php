<?php

$id = $_GET['id'];
//echo $id;

// 1, 连接数据库服务器
$host = "localhost";
$user = "root";
$password = "";
$database = "test";
$conn = mysqli_connect($host, $user, $password);
if (!$conn) 
{
    die("数据库连接失败!" . mysqli_connect_error());
}

#选择数据库
mysqli_select_db($conn, $database);
#执行sql语句
//mysqli_query($conn,"set names utf8");

$result = mysqli_query($conn, "select * from testform where id='$id'");
//return $result;
if (mysqli_num_rows($result) > 0) 
{
    $response = [];
    // 通过 while 循环来遍历结果集，去除其中的数据
    while ($row = mysqli_fetch_array($result)) 
    {
        $contact = array
        (
            "id" => $row["id"],
            "username" => $row["username"],
            "password" => $row["password"],

        );
        array_push($response, $contact);
    }
    echo "<pre>";
    print_r($response);

    $username = $response[0]['username'];
    $password = $response[0]['password'];



    //echo "<h1>$username</h1>";


    //print_r("<h5>$username</h5>");
    //return $username;


    
    //return $password;

    //return $response;
    print_r(mysqli_fetch_assoc($result));
}


#关闭结果集
mysqli_free_result($result);
#断开与mysql数据库服务器的连接
mysqli_close($conn);
