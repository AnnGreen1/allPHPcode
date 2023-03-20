<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="text" id="title">
    <div id="editor"></div>
    <button onclick="send()">发送数据</button>
    <script src="https://cdn.jsdelivr.net/npm/wangeditor@latest/dist/wangEditor.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
    <script>


const E = window.wangEditor
        const editor = new E("#editor")
        editor.create()




        function send() 
        {
            //先获取input框的内容
            var content = document.getElementById("title");
            console.log(content.value);

            //获取富文本框内容
            var contentEditer = document.getElementById('#editor');
            //console.log(contentEditer.innerHTML);

            var contentE = editor.txt.html()

            console.log(contentE);//这个就是富文本框的内容了，就是把这个标签插入数据库即可

            $.ajax
            (
                {
                    type: 'get',
                    url:'./aspectdata.php',
                    data:
                    {
                        //'content':content.value
                        'content':contentE
                    },
                    dataType:'json',
                    success: function()
                    {
                       
                        alert('插入成功');
                    },
                    error: function()
                    {
                        alert('chengong');
                        location.href='./senddata.php';
                    }
                }
            )
        }
    </script>
</body>

</html>