<?php
/*
首页、用户列表
*/
echo '用户列表';
//登录拦截
session_start();
if(empty($_SESSION['username']))
{
    //找不到session中的用户名，说明用户没有登录过，那么久需要弹窗提醒，并跳转到登录页面
    //加了  echo
    echo "<script>alert('请先登录！');location.href='../view/login.php'</script>";
}
// else
// {
//     echo $_SESSION['username'];
// }

require_once '../server/server_userlist.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首页</title>
    <link rel="stylesheet" href="../utils/layui/css/layui.css">

    <style>
        #container
        {
            padding:20px;
        }
    </style>
</head>
<body class="layui-layout-body">
    <div class="layui-layout layui-layout-admin">
        <?php
            require_once '../view/common/nav.php';
        ?>
        <div class="layui-body">
            <div id="container">
                <a href="useradd.php" class="layui-btn">
                <i class="layui-icon layui-icon-add-circle"></i>
                添加用户
                </a>
                <table class="layui-table">
                    <thead>
                    <tr>
                            <th>编号</th>
                            <th>头像</th>
                            <th>姓名</th>
                            <th>年龄</th>
                            <th>分类</th>
                            <th>生日</th>
                            <th>创建日期</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($data as $user)
                            {
                                $img = $user['icon']? $user['icon']:'default.jpeg';
                                echo "
                                <tr>
                                    <td>{$user['id']}</td>
                                    <td>
                                    <img class\"layui-img\" src=\"../server/resource/{$img}\">
                                    </td>
                                    <td>{$user['name']}</td>
                                    <td>{$user['age']}</td>
                                    <td>{$user['type_name']}</td>
                                    <td>{$user['birthday']}</td>
                                    <td>{$user['ctime']}</td>
                                    <td>
                                        <a class='layui-btn layui-btn-sm' href=\"./useredit.php?id={$user['id']}\">编辑</a>
                                        <button class=\"layui-btn layui-btn-danger layui-btn-sm\" onclick=\"deleteUser({$user['id']},'{$user['name']}')\">删除</button>
                                    </td>
                                </tr>
                                ";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="../utils/layui/layui.js"></script>
    <script>
         function deleteUser(id, name) {
      // 获取弹出框对象
      var layer = layui.layer;
      layer.confirm('确认删除' + name + "？", {
        btn: ["确定", "取消"] // 设置按钮
      }, function (index, ) {
        // 第一个按钮的回调函数
        location.href = "../server/server_userdelete.php?id=" + id
      }, function (index) {
        // 第二个按钮的回调函数
      })
    }
    </script>
</body>
</html>