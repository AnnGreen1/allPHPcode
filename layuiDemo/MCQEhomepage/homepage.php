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


  <div style="margin: 20px 20px 20px 20px;">
    <div style="float:left;width:50%;">

      <div style="float:left;width:50%;">
        <div style="border-style:solid;margin-right:10px;height:350px;border-radius: 5px;border-color:rgb(139, 176, 205);">
          <h1>用户排行榜</h1>
          <div class="layui-card" style="float:none">
            <div class="layui-card-body" style="float:none">
              <div style="float:none">
                <span class="layui-badge-rim" style="background-color: gold;margin-right:20px;">1</span>
                <span style="margin-right:20px;"><img src="./photo/default.png" alt="" style="border-radius:50%"></span>
                <span style="font-size:large;margin-right:20px;">aaaa</span>
                <span style="font-size:large;margin-right:20px;">45</span>
                <span style="font-size:large;margin-right:20px;">10-27</span>
              </div>
            </div>
          </div>
          <div class="layui-card">
            <div class="layui-card-body">
              <span class="layui-badge-rim" style="background-color: silver;">2</span>
            </div>
          </div>
          <div class="layui-card">
            <div class="layui-card-body">
              <span class="layui-badge-rim" style="background-color: rgb(191, 173, 111);">3</span>
            </div>
          </div>
          <div class="layui-card">
            <div class="layui-card-body">
              <span class="layui-badge-rim">4</span>
            </div>
          </div>
          <div class="layui-card">
            <div class="layui-card-body">
              <span class="layui-badge-rim">5</span>
            </div>
          </div>
        </div>
      </div>




      <div style="float:left;width:50%;">
        <div style="border-radius: 5px;border-color:rgb(139, 176, 205);border-style:solid;margin-left:10px; margin-right:10px;height:350px;">
          <h1>题目排行榜</h1>
        </div>
      </div>

    </div>


    <div style="float:left;width:50%;">
      <div style="border-radius: 5px;border-color:rgb(139, 176, 205);border-style:solid;margin-left:10px;height:350px;">
        <h1>社区排行榜</h1>
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