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
      $("#requestBtn").click(function () {
        // 1、创建请求路径
        var urlStr = "http://wthrcdn.etouch.cn/weather_mini";
        // 2、发起get请求
        $.ajax({
          url: urlStr,
          type: 'get',
          data: { city: '芜湖' },
          dataType: 'json',
          success: function (responseData) {
            console.log(responseData.data);
            $('#content').text(responseData.data.ganmao)
          },
          error: function (error) {
            console.log(error);
          }
        })
      });
    });
  </script>
</head>

<body>
  <p>今天的天气怎样？</p>
  <button id="requestBtn">请求天气信息</button>
  <p></p>
  <div id="content"></div>
</body>

</html>