<?php
//用户列表模块控制器

require_once './app/model/UsersModel.php';
class UsersController
{
    public function userslist()
    {
        $this->isLogin();
        $usersModel = new UsersModel();
        $users = $usersModel->getUsers();
        // echo "<h1>用户列表</h1>";
        global $smarty;
        $smarty->assign('data', $users);
        $smarty->display('userslist.html');

    }
    public function isLogin()
    {
        session_start();
        if (empty($_SESSION['username'])) 
        {
            // 找不到session中的用户名，说明用户是没有登陆过，那么就需要弹窗提醒，并跳转到登录页面
            echo "<script>alert('请先登录！');location.href='../view/index.php'</script>";
        }
    }

    //跳转到添加页面
    public function add()
    {
        global $smarty;
        $smarty->display('useradd.html');

        echo "<h1>添加用户<h1>";
    }
    //添加用户处理方法
    public function addUser()
    {
        $usersModel = new UsersModel();
        $count = $usersModel->addUser();
        if($count > 0) {
            echo "<script>alert('添加成功！');location.href='index.php?controller=Users&method=userslist'</script>";
          } else {
            echo "<script>alert('添加失败！');location.href='index.php?controller=Users&method=add'</script>";
          }
    }
    public function edit ()
    {
        //获取被编辑的用户信息
        $userModel = new UsersModel();
        $user = $userModel->getEditingUser();
        global $smarty;
        $smarty->assign('user',$user);
        $smarty->display('useredit.html');
        // echo "<h1>编辑用户<h1>";
    }
    public function editUser()
    {
        $usersModel = new UsersModel();
        $count = $usersModel->editUser();
        if($count > 0) {
            echo "<script>alert('编辑成功！');location.href='index.php?controller=Users&method=userslist'</script>";
          } else {
            echo "<script>alert('编辑失败！');location.href='index.php?controller=Users&method=edit'</script>";
          }
    }
    public function delete ()
    {
        $usersModel = new UsersModel();
        $count = $usersModel->deleteUser();
        $msg = "删除失败！";
        if ($count > 0) 
        {
            $msg = "删除成功！";
          
        } 
            echo "<script>alert('$msg');location.href='index.php?controller=Users&method=userslist'</script>";
          
    }
}
