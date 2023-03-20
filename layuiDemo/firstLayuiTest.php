<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>开始使用 layui</title>
  <link rel="stylesheet" href="./layui/css/layui.css">
</head>
<body>
 
<!-- 你的 HTML 代码 -->
 
<script src="./layui/layui.js"></script>


<form class="layui-form" action="">

  <div class="layui-form-item">
    <label class="layui-form-label">选择框</label>
    <div class="layui-input-inline">
      <select name="city" lay-verify="required">
        <option value=""></option>
        <option value="0">北京</option>
        <option value="1">上海</option>
        <option value="2">广州</option>
        <option value="3">深圳</option>
        <option value="4">杭州</option>
      </select>
    </div>
  </div>
 
</form>

</body>
</html>