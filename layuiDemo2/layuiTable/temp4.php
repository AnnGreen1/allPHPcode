<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>layui 调试预览</title>
  <link rel="stylesheet" href="../layui/css/layui.css" media="all">
  <style>
    body{margin: 10px;}
    .demo-carousel{height: 200px; line-height: 200px; text-align: center;}
  </style>
</head>
<body>
 
<table class="layui-hide" id="demo" lay-filter="test"></table>
 
  
<script src="../layui/layui.js"></script>
<script>
layui.config({
  version: '1632428048260' //为了更新 js 缓存，可忽略
});
 
//加载模块  
layui.use(function(){ 
  //得到各种内置组件
  var layer = layui.layer //弹层
  ,laypage = layui.laypage //分页
  ,table = layui.table //表格

  

  
  //执行一个 table 实例
  table.render({
    elem: '#demo'
    ,height: 370
    ,url:'servertable.php'
    ,title: '用户表'
    ,page: true //开启分页
    // ,request:
    // {
    //     pageName:'page',
    //     limitName:'nums'
    // }
    ,toolbar: 'default' //开启工具栏，此处显示默认图标，可以自定义模板，详见文档
    ,totalRow: true //开启合计行
    ,cols: [[ //表头
        {type: 'checkbox', fixed: 'left'}
      ,{field: 'id', title: 'ID', width:80, sort: true, fixed: 'left'}
      ,{field: 'username', title: '用户名', width:80}
      ,{field: 'password', title: '密码', width:80, sort: true}
    ]]
  });
  
  //监听头工具栏事件
  table.on('toolbar(test)', function(obj){
    var checkStatus = table.checkStatus(obj.config.id)
    ,data = checkStatus.data; //获取选中的数据
    switch(obj.event){
      case 'add':
        layer.msg('添加');
      break;
      case 'update':
        if(data.length === 0){
          layer.msg('请选择一行');
        } else if(data.length > 1){
          layer.msg('只能同时编辑一个');
        } else {
          layer.alert('编辑 [id]：'+ checkStatus.data[0].id);
        }
      break;
      case 'delete':
        if(data.length === 0){
          layer.msg('请选择一行');
        } else {
          layer.msg('删除');
        }
      break;
    };
  });
  
  //监听行工具事件
  table.on('tool(test)', function(obj){ //注：tool 是工具条事件名，test 是 table 原始容器的属性 lay-filter="对应的值"
    var data = obj.data //获得当前行数据
    ,layEvent = obj.event; //获得 lay-event 对应的值
    if(layEvent === 'detail'){
      layer.msg('查看操作');
    } else if(layEvent === 'more'){
      //下拉菜单
      dropdown.render({
        elem: this //触发事件的 DOM 对象
        ,show: true //外部事件触发即显示
        ,data: [{
          title: '编辑'
          ,id: 'edit'
        },{
          title: '删除'
          ,id: 'del'
        }]
        ,click: function(menudata){
          if(menudata.id === 'del'){
            layer.confirm('真的删除行么', function(index){
              obj.del(); //删除对应行（tr）的DOM结构
              layer.close(index);
              //向服务端发送删除指令
            });
          } else if(menudata.id === 'edit'){
            layer.msg('编辑操作，当前行 ID:'+ data.id);
          }
        }
        ,align: 'right' //右对齐弹出（v2.6.8 新增）
        ,style: 'box-shadow: 1px 1px 10px rgb(0 0 0 / 12%);' //设置额外样式
      })
    }
  });
  

  

  
 
});
</script>
</body>
</html>        
        