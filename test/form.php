<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP 表单</title>
</head>

<body>
  <form action="addContactAction.php" method="post">
    姓名： <input type="text" name="name"><br>
    性别：男<input type="radio" name="sex" value="男">
         女<input type="radio" name="sex" value="女"><br>
    个性签名： <input type="text" name="motto"><br>
    <input type="submit" value="提交">
  </form>
</body>

</html>
