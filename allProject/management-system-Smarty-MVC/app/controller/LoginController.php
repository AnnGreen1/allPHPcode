<?php
require_once './app/model/LoginModel.php';

class LoginController
{
    public function index()
    {
        // echo "<h1>登录页面</h1>";
        // 1、获取smarty对象（完成配置）
        global $smarty;
        // 2，Smarty调用 display 方法，展示视图
        $smarty->display('login.html');
    }

    //登录验证的方法
    public function login()
    {
        //获取前段提交的参数
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        //获取模型
        $loginModel = new LoginModel();
        //通过模型查询用户
        $user = $loginModel->getUser($username);
        // 判断数据是否为空
        if (empty($user)) {
            // 弹窗提示用户不存在，返回到登录页面
            echo "<script>alert('用户不存在！');history.go(-1);</script>";
        } else {
            // 用户存在
            if ($user['password'] == $password) {
                // 密码正确，跳转到首页
                // 启用session
                session_start();
                // 将用户名保存到session中
                $_SESSION['username'] = $username;
                echo "<script>location.href='./index.php?controller=Users&method=userslist';</script>";
            } else {
                // 弹窗提示密码错误，返回到登录页面
                echo "<script>alert('密码错误！');history.go(-1);</script>";
            }
        }
    }

    //退出
    public function logout()
    {
        session_start();
        unset($_SESSION['username']);
        echo "<script>alert('退出成功！');location.href='./index.php';</script>";
    }
}
