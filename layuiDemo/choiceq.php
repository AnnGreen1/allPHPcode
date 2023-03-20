<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>makeChoiceQEasier-添加题目</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
</head>

<body>

    <div style="position:fixed;top:100px;left:400px;border:solid;width:800px;height:500px;">
        <div>
            <div id="questioncontent">
                <form class="layui-form" action="">
                    <div class="layui-form-item">
                        <!-- <label class="layui-form-label">单选框</label> -->
                        <div>
                            题干：
                        </div>
                        <div id="stem" style="margin:10px;">
                            <span id="answer_a" style="font-size:large;">化作春泥更护花</span>
                        </div>
                        <div style="float:left;">
                            <div>
                                <input type="radio" name="sex" value="女" title="">
                                <!-- <div style="float:none" id="answer_a"></div> -->
                                <span id="answer_a" style="font-size:large;">落红不是无情物</span>
                            </div>
                            <div>
                                <input type="radio" name="sex" value="女" title="">
                                <!-- <div style="float:none" id="answer_b"></div> -->
                                <span id="answer_a" style="font-size:large;">落红不是无情物</span>
                            </div>
                            <div>
                                <input type="radio" name="sex" value="女" title="">
                                <!-- <div style="float:none" id="answer_c"></div> -->
                                <span id="answer_a" style="font-size:large;">落红不是无情物</span>
                            </div>
                            <div>
                                <input type="radio" name="sex" value="女" title="">
                                <!-- <div style="float:none" id="answer_d"></div> -->
                                <span id="answer_a" style="font-size:large;">落红不是无情物</span>
                            </div>
                        </div>
                    </div>
                </form>
                <button type="button" class="layui-btn" onclick="lastquestion()">上一题</button>
                <button type="button" class="layui-btn" onclick="nextquestion()">下一题</button>
            </div>
        </div>
    </div>








    <script src="./layui/layui.js"></script>
    <script>
        function nextquestion()
        {
            console.log("asdfAsdf");
        }
    </script>

</body>

</html>