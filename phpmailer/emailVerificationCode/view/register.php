<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册</title>
</head>

<body>
    <div>
        <form action="../server/server_register.php" method="get">
            邮 箱<input type="email" name="email" id="email">

            密 码<input type="password" name="password" id="password"></br>
            验证码<input type="text" name="verificationcode" id="verificationcode"></br>

            <button>立刻注册</button>
        </form>
        <button onclick="getVerificationCode()">获取验证码</button>
    </div>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
    <script>
        function getVerificationCode() {
            console.log("adf");
            Email = $('#email').val();
            console.log(Email);
            $.ajax({
                url: "http://localhost/allPHPcode/phpmailer/emailVerificationCode/server/createVerificationCode.php",
                type: 'get',
                data: { email:Email},
                success: function() {
                    alert("获取验证码成功！");
                }
            })
        }
    </script>
</body>

</html>