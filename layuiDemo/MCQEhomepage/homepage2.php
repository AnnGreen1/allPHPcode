<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>makeChoiceQEasier-首页</title>
    <link rel="stylesheet" href="../layui/css/layui.css">
    <link rel="stylesheet" href="../css/nav.css">


    <style>
        .layui-layout-admin .layui-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgb(139, 176, 205)
        }
    </style>
</head>

<body>

    <?php
    require_once './nav.php';
    ?>
    <div style="margin-top:60px;">
        <div class="layui-carousel" id="test1">
            <div carousel-item>
                <div><img src="../server/resource/lunbo.jpg" alt=""><img src="../server/resource/slogan.gif" alt=""></div>
                <div><img src="../server/resource/slogan.gif" alt=""><img src="../server/resource/slogan.gif" alt=""></div>
                <div><img src="../server/resource/slogan.gif" alt=""><img src="../server/resource/slogan.gif" alt=""></div>
                <div><img src="../server/resource/slogan.gif" alt=""><img src="../server/resource/slogan.gif" alt=""></div>
                <div><img src="../server/resource/slogan.gif" alt=""><img src="../server/resource/slogan.gif" alt=""></div>
            </div>
        </div>
    </div>


    <div style="position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      width:auto;
      border-color:chartreuse;
      background-color:azure;padding:10px 10px 10px 10px;">

<div style="margin:10px 10px 10px 10px;">
<div style="margin: 20px 20px 20px 20px;">
    <div style="float:left;width:50%;">

      <div style="float:left;width:50%;">
        <div style="background-color:rgb(139, 176, 205);border-style:solid;margin-right:10px;height:350px;border-radius: 5px;border-color:rgb(139, 176, 205);">
          <h1>用户排行榜</h1>
        </div>
      </div>




      <div style="float:left;width:50%;">
        <div style="background-color:rgb(139, 176, 205);border-radius: 5px;border-color:rgb(139, 176, 205);border-style:solid;margin-left:10px; margin-right:10px;height:350px;">
          <h1>题目排行榜</h1>
        </div>
      </div>

    </div>


    <div style="float:left;width:50%;">
      <div style="background-color:rgb(139, 176, 205);border-radius: 5px;border-color:rgb(139, 176, 205);border-style:solid;margin-left:10px;height:350px;">
        <h1>社区排行榜</h1>
      </div>
    </div>

  </div>

</div>
    </div>










    <!-- 条目中可以是任意内容，如：<img src=""> -->

    <script src="../layui//layui.js"></script>
    <script>
        layui.use('carousel', function() {
            var carousel = layui.carousel;
            //建造实例
            carousel.render({
                elem: '#test1',
                width: '100%' //设置容器宽度
                    ,
                arrow: 'always' //始终显示箭头
                //,anim: 'updown' //切换动画方式
            });
        });
    </script>
</body>

</html>