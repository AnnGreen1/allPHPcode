<?php
//登录拦截
session_start();
if(empty($_SESSION['username']))
{
    //找不到session中的用户名，说明用户没有登录过，那么久需要弹窗提醒，并跳转到登录页面
    //加了  echo
    echo "<script>alert('请先登录！');location.href='../view/login.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新闻列表</title>
    <link rel="stylesheet" href="../utils/layui/css/layui.css">

    <style>
        #container
        {
            padding:20px;
        }

        .search-form
        {
            display:inline-block;
        }

        .search-form-container
        {
            display: flex;
        }
        .search-form-container>*
        {
            margin-left:10px;
        }
        .search-form-container>*:first-child
        {
            margin-left:50px;
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
                    <a class="layui-btn" href="./newsadd.php">
                        <i class="layui-icon layui-icon-add-circle"></i>
                        添加新闻
                    </a>
                    <form class="layui-form search-form" action="" method="post">
                        <div class="search-form-container">
                            <input class="layui-input" name="search_title" placeholder="搜索标题" type="text">
                            <select name="type" lay-verify="required">
                                <option value=""></option>
                                <option value="1">平台时讯</option>
                                <option value="2">创业经验</option>
                                <option value="3">优质加盟</option>
                                <option value="3">团队协作</option>
                            </select>
                            <input type="submit" class="layui-btn layui-btn-primary">
                        </div>
                    </form>
                    <table class="layui-table">
                    <thead>

                        <tr>
                            <th>编号</th>
                            <th>标题</th>
                            <th>主图</th>
                            <th>分类</th>
                            <th>发布时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>
        </div>
</div>


<script src="../utils/layui/layui.js"></script>
<script src="../utils/jquery/jquery-3.6.0.min.js"></script>
    <script>
 

        
 
 $(window).on("load",function initial()
        {
        $.ajax
        (
            {
            type:'get',
            url:'../server/news.php',
            dataType:'json',
            success:function(res)
            {
                console.log(res.content);
                var content="";
                res.content.forEach(element=>
                    {
                        var temType="";
                        switch(element.type_id)
                        {
                            case "1":
                            temType="平台时讯"
                            break;
                            case "2":
                            temType="创业经验"
                            break;
                            case "3":
                            temType="优质加盟"
                            break;
                            case "4":
                            temType="团队协作"
                            break;
                            default:
                            temType="平台时讯"
                            break;
                        }
                        content+='<tr>\
                        <td>'+element.id+'</td>\
                        <td>'+element.title+ '</td>\
                        <td><img src="../server/resource/' + element.img + '" alt="暂无图片"></td>\
                        <td>' + temType + '</td>\
                        <td>' + element.create_time + '</td><td>\
                        <button class="layui-btn layui-btn-xs">编辑</button>\
                        <button class="layui-btn layui-btn-xs layui-btn-danger">删除</button\>\
                        </td></tr>';
                    });
                    $('tbody').html(content);
            },
            error:function(error)
            {
                console.log("出错了，"+error);
            }
            }

        )
        //$('tbody').html(content);
        })
      
       
        
        
    </script>
</body>
</html>