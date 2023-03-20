<!--
/*
 *  登录页面
 */
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <style>
        #titlediv {
            margin-bottom: 20px;
        }

        #title {
            text-align: center;
        }

        #login {
            position: absolute;
            width: 300px;
            height: 240px;
            padding: 40px 60px;
            color: black;
            background-color: white;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 750px;
        }

        .caret::after {
            content: "";
            display: inline-block;
            width: 2px;
            height: 1em;
            margin-bottom: -2px;
            margin-left: -2px;
            background-color: #333;
            animation: blink-caret .5s step-end infinite;
        }

        @keyframes blink-caret {
            50% {
                opacity: 0;
            }
        }
    </style>
</head>

<body class="layui-bg-cyan">

    <div>
        <div style="float:left ;margin-left: 300px">
            <div style="margin-top: 300px;">
                <h1 id="txt"></h1>
            </div>
        </div>

        <div id="login" style="float:right">
            <div id="titlediv" class="layui-fluid">
                <h1 id="title">后台管理系统</h1>
            </div>
            <form class="layui-form" action="../server/server_login.php" method="post">
                <div class="layui-form-item">
                    <input class="layui-input" type="text" name="username" required lay-verify="required" autocomplete="off" placeholder="请输入用户名">
                </div>
                <div class="layui-form-item">
                    <input class="layui-input" type="password" name="password" required lay-verify="required" autocomplete="off" placeholder="请输入密码">
                </div>
                <div class="layui-form-item layui-row">
                    <div class="layui-col-xs5 layui-col-sm5 layui-col-md5">
                        <button class="layui-btn layui-btn-primary layui-btn-fluid">注册</button>
                    </div>
                    <div class="layui-col-xs-offset2 layui-col-xs5 layui-col-sm-offset2 layui-col-sm5 layui-col-md-offset2 layui-col-md5">
                        <button class="layui-btn layui-btn-fluid">登录</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <script>
        var str = '';
        time = 0;
        //var source='这是一个传说中的打字动画';
        //var source = ["这", "是", "一", "个", "传", "说", "中", "的", "打", "字", "动", "画",""];
        var source = ["","m","a","k","e","C","h","o","i","c","e","Q","E","a","s","i","e","r"," ","让","选","择","题","更","容","易",""];
        function sleep(numberMillis)
        {
            var now = new Date();
            var exitTime = now.getTime() + numberMillis;
            while (true) 
            {
                now = new Date();
                if (now.getTime() > exitTime)
                    return;
            }
        }

        var ele = document.getElementById('txt');

        window.setInterval
            (
                function () {
                    str += source[time % source.length];
                    time++;
                    ele.innerHTML = str+'_';
                    //sleep(500);

                    if ((time % source.length) == 0) 
                    {
                        for(d=1;d<=5;d++)
                        {
                            sleep(1000);
                            if(d%2==0)
                            {
                                ele.innerHTML=" makeChoiceQEasier 让选择题更容易_";
                            }
                            else
                            {
                                ele.innerHTML=" makeChoiceQEasier 让选择题更容易_";
                            }
                        }
                        //sleep(5000);
                        str = '';
                    }
                },
                250
            );
    </script>



    <script src="./layui/layui.js"></script>
</body>

</html>