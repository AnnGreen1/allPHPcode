

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>makeChoiceQEasier-注册</title>
    <link rel="stylesheet" type="text/css" href="../utils/Resource_of_Login/css/style.css" />
    <link rel="icon" href="../utils/headlogo_right.png">
</head>

<body>
    <div class="vid-container">
        <video class="bgvid" autoplay="autoplay" muted="muted" preload="auto" loop>
            <source src="../utils/Resource_of_Login/video/loginBackgroundVideo.webm" type="video/webm">
        </video>
        <div class="inner-container">
            <video class="bgvid inner" autoplay="autoplay" muted="muted" preload="auto" loop>
                <source src="../utils/Resource_of_Login/video/loginBackgroundVideo.webm">
            </video>




            <div class="box">
                <form action="../server/server_register.php" method="post">
                    <h1>join makeChoiceQEasier</h1>
                    <input type="text" placeholder="用户名" name="username" />
                    <input type="password" placeholder="密码" name="password" />
                    <button>Register</button>
                    <p>没有账户？<span><a href='./login.php'>返回登录</a></span></p>
                </form>

            </div>
        </div>
    </div>
</body>

</html>