<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layPage快速使用</title>
  <link rel="stylesheet" href="../layui/css/layui.css" media="all">
</head>
<body>
 
<div id="test1">
<table id="demo" lay-filter="test" style="height: 400px;"></table>
</div>
 
<script src="../layui/layui.js"></script>
<script>
layui.use('laypage', function(){
  var laypage = layui.laypage;
  
  //执行一个laypage实例
  laypage.render({
    elem: 'test1' //注意，这里的 test1 是 ID，不用加 # 号
    ,count: 11 //数据总数，从服务端得到
    ,limit: 4
    ,url:'servertable.php'
    ,cols: [[ //表头
      {field: 'id', title: 'ID', width:80, sort: true, fixed: 'left'}
      ,{field: 'username', title: '用户名', width:80}
      ,{field: 'password', title: '密码', width:80, sort: true}
    ]]
  });
});
</script>
</body>
</html>