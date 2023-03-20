<?php
require_once "./common/connect.php";

//  获取前端提交的用户名和密码
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

/*
用户不存在------->返回到登录
用户存在------->密码不正确----------->返回到登录
用户存在------->密码正确------------->跳转首页
*/

//sqlStrUsername,用户存在吗
$sqlStr="select * from admin where username = '$username'";

//执行sql
$stmt=$pdo->query($sqlStr);

//提取结果集中的所有记录
$user = $stmt->fetch();

//判断数据是否为空
if(empty($user))
{
    echo "<script>alert('用户不存在！');history.go(-1);</script>";
}
else
{
 // 用户存在
 if ($user['password'] == $password) {
    // 密码正确，跳转到首页
        // 启用session
        session_start();
        // 将用户名保存到session中
        $_SESSION['username'] = $username;
      echo "<script>location.href='../view/userlist.php';</script>";
    } else {
      // 弹窗提示密码错误，返回到登录页面
      echo "<script>alert('密码错误！');history.go(-1);</script>";
    }
}
var_dump($stmt);

