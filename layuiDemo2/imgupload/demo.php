<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../layui/css/layui.css">
</head>

<body>
    <!-- <img src="" alt=""> -->


    <button type="button" class="layui-btn" id="test1">
        <i class="layui-icon">&#xe67c;</i>上传图片
    </button>
    <img src="" alt="" id="show-img">

    <script src="../layui/layui.js"></script>
    <script>
        layui.use('upload', function() {
            document.getElementById('test1');
            var upload = layui.upload;

            //执行实例
            var uploadInst = upload.render({
                elem: '#test1' //绑定元素
                    ,
                url: 'http://localhost/allPHPcode/layuidemo2/imgupload/img_upload.php' //上传接口
                    ,
                done: function(res) {
                    //上传完毕回调
                    if (res.code == 100) {
            $('#show-img').attr('src', './' + res.img); // 获取图片的路径，设置给 src 属性
            $('#show-img').css('display', 'inline-block'); // 显示元素
            //$(':input[type=hidden]')[0].value = res.img; // 将图片的名字保存给隐藏域
          }
                },
                error: function() {
                    //请求异常回调
                }
            });
        });
    </script>
</body>

</html>