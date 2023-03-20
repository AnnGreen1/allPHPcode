<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!--

大致的思路
1、要用到ajax发送数据到服务端
2、要用ajax一次性把input和富文本框的内容同时发送过去
3、服务端可以直接获取请求方法
$method = $_SERVER["REQUEST_METHOD"];
-->
<form action="./serverWangEditor.php">
<input type="text" id="title" name= "title                                                                                                                                 " required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    <div id="div1" name = "div1" style="margin:auto;width:700px;"></div>
    <button onclick="submit()">获取内容</button>


</form>



    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/wangeditor@latest/dist/wangEditor.min.js"></script>
    <script type="text/javascript">
        const E = window.wangEditor
        const editor = new E("#div1")
        // 或者 const editor = new E(document.getElementById('div1'))
        editor.create()





        function submit() {
            var title = document.getElementById('title');
            console.log(title.value);
            console.log("执行力函数");
            // 获取富文本框的文本
            var content = editor.txt.html()

            console.log(content);


            // var content = document.querySelector('input[name=content]')
            // content.value = editor.txt.html()
            // $.ajax({
            //     type: service == 'add' ? 'post' : 'put',
            //     url: '../server/news.php',
            //     data: {
            //         'title': $('input[name=title]').val(),
            //         'type_id': $('select[name=type_id]').val(),
            //         'img': $('input[name=img]').val(),
            //         'content': $('input[name=content]').val(),
            //         'id': localStorage.getItem('NEWS_ID')
            //     },
            //     dataType: 'json',
            //     success: function(res) {
            //         if (service == 'add') {
            //             if (res.code == "10001") {
            //                 // 添加成功
            //                 layui.layer.confirm(res.message, {
            //                     btn: ["返回新闻列表", "继续添加"]
            //                 }, function() {
            //                     history.go(-1);
            //                 }, function() {
            //                     location.reload();
            //                 })
            //             }
            //         } else {
            //             // 修改成功
            //             if (res.code == "10001") {
            //                 layui.layer.confirm(res.message, {
            //                     btn: ["返回新闻列表"]
            //                 }, function() {
            //                     location.href = './newslist.php'
            //                 })
            //             }
            //         }
            //     },
            //     error: function(error) {
            //         console.log(error);
            //     }
            // })
        }
    </script>
</body>

</html>