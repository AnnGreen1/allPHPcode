<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 文件上传</title>
</head>

<body>
    <form action="server.php" method="post" enctype="multipart/form-data" />
        <input type="file" value="选择文件" name="uploadFile" />
        <p></p>
        <input type="submit" value="提交">
    </form>
</body>

</html>