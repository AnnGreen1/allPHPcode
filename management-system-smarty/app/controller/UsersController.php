<?php
/*
用户列表模块的控制器
*/
require_once './app/model/UsersModel.php';

class UsersController
{
    //用户列表方法
    public function userslist()
    {
        $this->isLogin();
        $userModel = new UsersModel();
        $users = $userModel->getUsers();
        // echo "<h1>用户列表</h1>";
        global $smarty;
        $smarty->assign('data', $users);
        $smarty->display('userslist.html');
    }

    //登录拦截
    public function isLogin()
    {
        session_start();
        if (empty($_SESSION['username'])) {
            // 找不到session中的用户名，说明用户是没有登陆过，那么就需要弹窗提醒，并跳转到登录页面
            echo "<script>alert('请先登录！');location.href='./index.php'</script>";
        }
    }


    //跳转到添加页面
    public function add()
    {
        global $smarty;
        $smarty->display('useradd.html');
        //echo "<h1>添加用户</h1>";
    }
    //添加用户处理方法
    public function addUser()
    {
        $usersModel = new UsersModel();
        $count = $usersModel->addUser();
        if ($count > 0) {
            echo "<script>alert('添加成功！');location.href='index.php?controller=Users&method=userslist'</script>";
        } else {
            echo "<script>alert('添加失败！');location.href='index.php?controller=Users&method=add'</script>";
        }
    }

    //跳转到编辑用户信息
    public function edit()
    {
        //获取被编辑的用户信息
        $usersModel = new UsersModel();
        $user = $usersModel->getEditingUser();
        global $smarty;
        $smarty->assign('user', $user);
        $smarty->display('useredit.html');
        // echo "<h1>编辑用户</h1>";
    }
    //编辑用户处理方法
    public function editUser()
    {
        $usersModel = new UsersModel();
        $count = $usersModel->editUser();
        if ($count > 0) {
            echo "<script>alert('修改成功！');location.href='index.php?controller=Users&method=userslist'</script>";
        } else {
            echo "<script>alert('修改失败！');location.href='index.php?controller=Users&method=edit'</script>";
        }
    }
    public function delete()
    {
        //echo "<h1>删除用户</h1>";
        $usersModel = new UsersModel();
        $count = $usersModel->deleteUser();
        $msg = "删除失败！";
        if ($count > 0) {
            $msg = "删除成功！";
        }
        echo "<script>alert('$msg');location.href='index.php?controller=Users&method=userslist'</script>";
    }
}
