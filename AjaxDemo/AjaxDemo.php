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
        $(document).ready(
            function() {
                $("#requestBtn").click(
                    function() {
                        // 1、创建XMLHttpRequest请求对象
                        var xhr;
                        if (window.XMLHttpRequest) {
                            xhr = new XMLHttpRequest();
                        } else {
                            xhr = new ActiveXObject("Microsoft.XMLHTTP");
                        }

                        // 2、创建请求路径
                        var urlStr = "http://wthrcdn.etouch.cn/weather_mini?city=芜湖";

                        //设置请求对象的准备状态
                        xhr.onreadystatechange = function() {
                            // 准备状态为已完成，且请求状态为OK时
                            if (xhr.readyState == 4 && xhr.status == 200) {
                                //将请求返回的数据展示在页面中
                                $("#content").html(xhr.responseText);
                            }
                        };
                        // 3、发起请求
                        xhr.open("GET", urlStr, true);
                        xhr.send();
                    }
                );
            }
        );
    </script>
</head>

<body>
    <p>今天的天气怎样？</p>
    <button id="requestBtn">请求天气信息</button>
    <p></p>
    <div id="content"></div>
</body>

</html>