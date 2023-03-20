<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../layui/css/layui.css">


    <style>
        .layui-layout-admin .layui-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgb(139, 176, 205)
        }
    </style>
</head>

<body>

    <?php
    require_once '../nav/lastnav.php';
    ?>

    <div style="margin-top:70px;">
        <div style="margin:0px 200px 0px 200px;">
            <div class="layui-tab">
                <ul class="layui-tab-title">
                    <li class="layui-this">配置题目</li>
                    <li>用户管理</li>
                </ul>
                <div class="layui-tab-content" style="height: 100px;">
                    <div class="layui-tab-item layui-show">1</div>
                    <div class="layui-tab-item">2</div>
                </div>
            </div>
        </div>

    </div>



    <script src="../layui//layui.js"></script>
</body>

</html>