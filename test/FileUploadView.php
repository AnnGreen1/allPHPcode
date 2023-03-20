<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 文件上传</title>
</head>

<body>
    <form action="FileUploadBacked.php" method="post" enctype="multipart/form-data" />
    <input type="file" value="选择文件" name="uploadFile" oncanplay="done()"/>
    <p></p>
    <img src="" alt="" id="show-img">
    <input type="submit" value="提交">
    </form>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
    <script>
        $('#show-img').attr('src', './' + res.img); // 获取图片的路径，设置给 src 属性
        $('#show-img').css('display', 'inline-block'); // 显示元素
        $(':input[type=hidden]')[0].value = res.img; // 将图片的名字保存给隐藏域
        function done()
        {
            console.log("done");
        }
    </script>
</body>

</html>