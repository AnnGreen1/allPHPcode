<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>table模块快速使用</title>
  <link rel="stylesheet" href="../layui/css/layui.css" media="all">
</head>
<body>
 
<table id="demo" lay-filter="test" style="height: 400px;"></table>
 
<script src="../layui/layui.js"></script>
<script>
layui.use('table', function(){
  var table = layui.table;
  
  //第一个实例
  table.render({
    elem: '#demo'
    ,limits:5
    ,height:500
    ,url: 'servertable.php' //数据接口
    ,page: true //开启分页
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