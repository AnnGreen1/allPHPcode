<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <input type="text" id="input">
        <button onclick="getid()">getid</button>
    </div>
    <div>
        id <span id="id" style="color:pink;"></span></br>
        <input type="text" id="id_input">
    </div>
    <div>
        username <span id="username" style="color:pink;"></span></br>
        <input type="text" id="username_input">
    </div>
    <div>
        password <span id="password" style="color:pink;"></span></br>
        <input type="text" id="password_input">
    </div>




    <script src="../jquery/jquery-3.6.0.min.js"></script>

    <script>
        function getid() {
            var value = $('#input').val();
            console.log(value);


            $.ajax({
                url: "http://localhost/allPHPcode/test/ajax/ajaxServer.php",
                dataType: 'JSON',
                data: {
                    id: value
                },
                success: function(res) {
                    console.log(res);
                    console.log(res.stem);
                    //$('#nowquestionid').attr("value",res.id);
                    $('#id').text(res.id);
                    $('#username').text(res.username);
                    $('#password').text(res.password);
                    $('#id_input').val(res.id);
                    $('#username_input').val(res.username);
                    $('#password_input').val(res.password);
                    // $('#answer_a').val(res.answer_a);
                    // $('#answer_b').text(res.answer_b);
                    // $('#answer_b').val(res.answer_b);
                    // $('#answer_c').text(res.answer_c);
                    // $('#answer_c').val(res.answer_c);
                    // $('#answer_d').text(res.answer_d);
                    // $('#answer_d').val(res.answer_d);
                },
                error: function(res) {
                    console.log(res);
                }
            })
        }
    </script>
</body>

</html>