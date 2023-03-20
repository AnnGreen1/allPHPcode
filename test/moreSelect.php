<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP 表单</title>
</head>

<body>
  <?php
  $engine = isset($_GET['engine']) ? $_GET['engine'] : '';
  if ($engine) {
    if ($engine == 'baidu') {
      echo '百度一下<br>http://www.baidu.com';
    } else if ($engine == 'google') {
      echo 'Google 搜索<br>http://www.google.com';
    } else if ($engine == 'bing') {
      echo 'Bing<br>http://www.bing.com';
    } else if ($engine == '360') {
      echo '360 搜索<br>http://www.so.com';
    }
  } else {
  ?>
  <form action="" method="get">
    <select name="engine">
      <option value="">选择搜索引擎:</option>
      <option value="baidu">百度</option>
      <option value="google">Google</option>
      <option value="bing">Bing</option>
      <option value="360">360</option>
    </select>
    <input type="submit" value="提交">
  </form>
  <?php
  }
  ?>
</body>

</html>