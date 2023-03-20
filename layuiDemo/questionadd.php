<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>makeChoiceQEasier-添加题目</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <style>
        #titlediv {
            margin-bottom: 15px;
        }

        #container {
            padding: 20px;
        }

        #show-img {
            display: none;
            width: 150px;
            height: 150px;
            margin-top: 15px;
        }
    </style>

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

<body class="layui-layout-body">
    <div class="layui-layout layui-layout-admin">
        <div class="layui-body">
            <div id="container">
                <div id="titlediv" class="layui-fluid">
                    <h2>添加题目</h2>
                </div>
                <form class="layui-form" action="../server/server_questionadd.php" method="post" enctype="multipart/form-data">
                    <div class="layui-form-item">
                        <label class="layui-form-label">类型</label>
                        <div class="layui-input-inline">
                            <input class="layui-input" type="text" name="type" required lay-verify="required" placeholder="请输入类型" autocomplete="off">
                        </div>
                    </div>
                    <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">题干</label>
                        <div class="layui-input-inline">
                            <textarea name="stem" placeholder="请输入内容" class="layui-textarea" style="width:500px"></textarea>
                        </div>
                        <label class="layui-form-label">正确选项</label>
                        <div class="layui-input-inline">
                            <textarea name="stem" placeholder="请输入内容" class="layui-textarea" style="width:500px"></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">选项1</label>
                        <div class="layui-input-inline">
                            <textarea name="stem" placeholder="请输入内容" class="layui-textarea" style="width:500px"></textarea>
                        </div>

                        <label class="layui-form-label">选项2</label>
                        <div class="layui-input-inline">
                            <textarea name="stem" placeholder="请输入内容" class="layui-textarea" style="width:500px"></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">选项3</label>
                        <div class="layui-input-inline">
                            <textarea name="stem" placeholder="请输入内容" class="layui-textarea" style="width:500px"></textarea>
                        </div>
                        <label class="layui-form-label">选项4</label>
                        <div class="layui-input-inline">
                            <textarea name="stem" placeholder="请输入内容" class="layui-textarea" style="width:500px"></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item" style="margin: left 800px;">
                        <label class="layui-form-label">难度</label>
                        <input type="radio" name="difficulty" value="1" title="1" checked>
                        <input type="radio" name="difficulty" value="2" title="2">
                        <input type="radio" name="difficulty" value="3" title="3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>