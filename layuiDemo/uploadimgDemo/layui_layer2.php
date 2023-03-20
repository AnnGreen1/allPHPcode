<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="../layui/css/layui.css" media="all">
    <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->

    <style>
        

    #show-img {
      display: none;
      width: 150px;
      height: 150px;
      margin-top: 15px;
    }

    </style>
</head>

<body>




    <div id="layerDemo" style="margin-bottom: 0;">
        <div class="layui-btn-container" style="margin-top: 30px;">
            <button data-method="notice" class="layui-btn">示范一个公告层</button>
            <!-- <a data-method="notice">示范一个公告层</a> -->
        </div>
    </div>
   
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
    <script src="../layui/layui.js" charset="utf-8"></script>
    <!-- 注意：如果你直接复制所有代码到本地，上述 JS 路径需要改成你本地的 -->
    <script>
        //var contents = "<?php //require_once './upload2.php' ?>";
        layui.use('layer', function() { //独立版的layer无需执行这一句
            var $ = layui.jquery,
                layer = layui.layer; //独立版的layer无需执行这一句

            //触发事件
            var active = {
               
                notice: function() {
                    //示范一个公告层
                    layer.open({
                        type: 1,
                        title: false //不显示标题栏
                            ,
                        closeBtn: false,
                        area: '300px;',
                        shade: 0.8,
                        id: 'LAY_layuipro' //设定一个id，防止重复弹出
                            ,
                        btn: ['火速围观', '残忍拒绝'],
                        btnAlign: 'c',
                        moveType: 1 //拖拽模式，0或者1
                            ,
                        content: "<button type='button' class='layui-btn' id='test1' onclick='self()'><i class='layui-icon'>&#xe67c;</i>上传图片<img id='show-img'></button>",
                        success: function(layero) {
                            var btn = layero.find('.layui-layer-btn');
                            btn.find('.layui-layer-btn0').attr({
                                href: 'http://www.layui.com/',
                                target: '_blank'
                            });
                        }
                    });
                }
            };

            $('#layerDemo .layui-btn').on('click', function() {
                var othis = $(this),
                    method = othis.data('method');
                active[method] ? active[method].call(this, othis) : '';
            });


        });
    </script>


    <script>
    //      layui.use(['upload', 'layer'], function() {
    //          console.log('执行了');
    //   // 获取上传控件实例
    //   var upload = layui.upload
    //   // 执行实例
    //   var uploadInst = upload.render({
    //     elem: '#upload-btn', // 绑定元素
    //     url: './img_upload.php', // 上传接口
    //     field: 'icon', // 设置上传域的key，服务端通过此key来获取信息
    //     done: function(res, index, upload) {
    //       // res服务端返回的资源 ,其中的 code 如果是 100 则表示上传成功
    //       if (res.code == 100) {
    //         console.log(res);
    //         $('#show-img').attr('src', './' + res.img); // 获取图片的路径，设置给 src 属性
    //         $('#show-img').css('display', 'inline-block'); // 显示元素
    //         $('input[name=img]')[0].value = res.img; // 将图片的名字保存给隐藏域
    //       }
    //     },
    //     error: function(error) {
    //       // 请求异常回调
    //       console.log(error);
    //     }
    //   })
    // })
    </script>

<script>
    function self(){
        layui.use('upload', function(){
    //console.log("这是真的执行了");
  var upload = layui.upload;
   
  //执行实例
  var uploadInst = upload.render({
    elem: '#test1' //绑定元素
    ,url: './img_upload.php' //上传接口
    ,done: function(res, index, upload) {
          // res服务端返回的资源 ,其中的 code 如果是 100 则表示上传成功
          if (res.code == 100) {
            console.log(res);
            $('#show-img').attr('src', './' + res.img); // 获取图片的路径，设置给 src 属性
            $('#show-img').css('display', 'inline-block'); // 显示元素
            $('input[name=img]')[0].value = res.img; // 将图片的名字保存给隐藏域
          }
     }
    ,error: function(){
      //请求异常回调
    }
  });
});

    }

</script>

</body>

</html>