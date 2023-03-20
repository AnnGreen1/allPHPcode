<?php
// 登录拦截
session_start();
if (empty($_SESSION['username'])) {
    // 找不到session中的用户名，说明用户是没有登陆过，那么就需要弹窗提醒，并跳转到登录页面
    echo "<script>alert('请先登录！');location.href='../view/login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>makeChoiceQEasier-题库</title>
    <link rel="stylesheet" href="../utils/layui/css/layui.css">
    <link rel="stylesheet" href="../utils/css/nav.css">
    <link rel="icon" href="../utils/headlogo_right.png">
    <style>
        .layui-layout-admin .layui-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgb(139, 176, 205)
        }
    </style>
    <style>
        #container {
            padding: 20px;
        }

        .search-form {
            display: inline-block;
        }

        .search-form-container {
            display: flex;
        }

        .search-form-container>* {
            margin-left: 10px;
        }

        .search-form-container>*:first-child {
            margin-left: 50px;
        }
    </style>
</head>

<body>
    <?php
    require_once './commom/nav.php';
    ?>
    <div style="margin-top:70px;">
        <div>
            <a href="./questionadd.php" class="layui-btn">
                <i class="layui-icon layui-icon-add-circle"></i>
                添加题目
            </a>
            <form class="layui-form search-form">
                <div class="search-form-container">
                    <input type="text" class="layui-input" name="search_title" placeholder="搜索题干">
                    <select name="type">
                        <option value=""></option>
                        <option value="php">php</option>
                        <option value="html">html</option>
                        <option value="jQuery">jQuery</option>
                    </select>
                    <div onclick="search()" class="layui-btn layui-btn-primary">搜索</div>
                </div>
            </form>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>编号</th>
                        <th>类型</th>
                        <th>用户</th>
                        <th>题干</th>
                        <th>选项1</th>
                        <th>选项2</th>
                        <th>选项3</th>
                        <th>选项4</th>
                        <th>正确答案</th>
                        <th>创建时间</th>
                        <th>难度</th>
                        <th>是否公开</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <div id="pager"></div>
        </div>
    </div>

    <script src="../utils/layui/layui.js"></script>
    <script src="../utils/jquery/jquery-3.6.0.min.js"></script>
    <script>
        var total = 0;
        var page_num = 5;
        var current_page = 1;
        // $(window).on(
        //     'load',
        //     () => {
        //         var requestData = {
        //             service: 'all',
        //         }
        //         getData('total', requestData);
        //     }
        // )
        $(document).ready
        (
            function() 
            {    

            }
        );
        function getData(totalType, requestData) {
            $.ajax({
                type: 'get',
                url: '../server/total.php',
                data: {
                    type: totalType,
                    search_title: $('input[name=search_title]').val(),
                    type: $('select[name=type]').val(),
                },
                success: function(res) {
                    total = res
                    console.log("总共有" + total + "条记录");
                    //根据返回的数据来设置分页
                    layui.use(
                        "laypage",
                        function() {
                            var laypage = layui.page_num
                            laypage.render({
                                elem: "pager",
                                page: true,
                                count: total,
                                limit: page_num,
                                limits: [10, 20, 30, 40],
                                jump: function(obj) {
                                    requestData['limit'] = obj.limit
                                    requestData['curr'] = obj.curr
                                    initial(requestData);
                                }
                            })
                        }
                    )
                },
                error: function(error) {
                    console.log(error);
                }
            })
        }

        function initial(data) {
            $.ajax({
                type: 'get',
                url: '../server/question.php',
                dataType: 'json',
                data: data,
                success: function(res) {
                    console.log(res.content);
                    var tmpType = "";
                    res.content.forEach(element => {
                        
                        content += '<tr>\
            <td>' + element.id + '</td>\
            <td>' + element.title + '</td>\
            <td><img src="../server/resource/' + element.img + '" alt="暂无图片"></td>\
            <td>' + tmpType + '</td>\
            <td>' + element.create_time + '</td><td>\
            <button class="layui-btn layui-btn-xs" onclick="editNews(' + element.id + ')">编辑</button>\
            <button class="layui-btn layui-btn-danger layui-btn-xs" onclick="deleteNews(' + element.id + ',\'' + element.title + '\')">删除</button>\
            </td></tr>'
                        //以上代码中的删除按钮，因为是通过字符串拼接而成，所以在按钮单击事件中，如果传递字符串类型的参数，像中文或英文等，那么就需要添加引号，因此添加了 \'
                    });
                    $('tbody').html(content);
                }
            })
        }
    </script>
</body>

</html>