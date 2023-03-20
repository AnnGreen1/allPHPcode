<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>jQuery AJAX</title>
  <style>
    #content {
      color: black;
      background-color: powderblue;
      width: 800px;
      height: 200px;
    }
  </style>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
        // 给div绑定点击事件
        $("#content").on("click", function(){
            // 准备请求地址
            var urlStr = "http://wthrcdn.etouch.cn/weather_mini?city=芜湖";
            // 发起请求并将数据加载到div中
            $(this).load(urlStr, function(data, status, xhr) {
                if (status == "success") {
                    console.log("请求成功!");
                }
            });
        });
    });
</script>
</head>

<body>
  <p>今天的天气怎样？</p>
  <div id="content">
    <h1>点击查询天气</h1>
  </div>
</body>

</html>