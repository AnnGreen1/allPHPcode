<?php
/*
wangEditor view
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wangEditor view</title>
    <link rel="stylesheet" href="../layuiDemo/layui/css/layui.css">
</head>
<body>
    
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">

<div class="layui-body">
        <div id="container">
            <div id="titlediv">
                <h2>添加新闻</h2>
            </div>
            <form class="layui-form" action="">

                    <div class="layui-form-item">
                        <label class="layui-form-label">内容</label>
                        <div class="layui-input-block">
                            <input type="hidden" name="content">
                            <div id="editor"></div>                                                                                                                                                           
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <a class="layui-btn" onclick="location.href='./wangEditorServer.php'">确认</a>
                            <a class="layui-btn layui-btn-primary" onclick="location.href='./wangEditorServer.php'">返回</a>
                        </div>
                    </div>
            </form>
        </div>
</div>

</div>
<script src="../layuiDemo/layui/layui.js"></script>
<script
  type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/wangeditor@latest/dist/wangEditor.min.js"
></script>
<script type="text/javascript">
  const E = window.wangEditor
  const editor = new E("#editor")
  editor.config.uploadImgServer="./wangEditorServer.php"
  editor.config.uploadFileName="pic";
  editor.config.height=400

  editor.create()
  </script>
</body>
</html>