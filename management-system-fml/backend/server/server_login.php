<?php
/*
 * @Author: your name
 * @Date: 2021-11-10 17:55:34
 * @LastEditTime: 2021-11-10 17:58:23
 * @LastEditors: Please set LastEditors
 * @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 * @FilePath: \management-system-fml\backend\server\server_login.php
 */

 require_once './common/connect.php';

//  获取前端提交的用户名和密码
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

//准备sql语句
$sqlStr = "select * from admin where username = '$username'";

//执行sql查询
$stmt = $pdo->query($sqlStr);
//提取结果集中的所有记录
$user = $stmt->fetch();
//判断数据是否为空
if(empty($user))
{
    //弹窗提示用户不存在，返回登录页面
    echo "<script>alert('用户不存在');history.go(-1);</script>";
}
else
{
    //用户存在
    if($user['password']==$password)
    {
        //密码正确，跳转到首页
        echo "<script>location.href='../view/userlist.php'</script>";
        //启用session
        session_start();
        //将用户名保存到session中
        $_SESSION['username']=$username;
        echo "<script>location.href='../view/userlist.php';</script>";
    }
    else
    {
        //弹窗提示密码错误，返回到登录页面
        echo "<script>alert('密码错误！');history.go(-1);</script>";
    }
}