<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../layui//css/layui.css">
</head>

<body>
    <div id="test2">
        <button onclick="show()">fdf</button>
    </div>



    <!-- <div style="padding:20px;"><img src="../imgupload/Mckenna.jpg" alt="" id="show-img"></div> -->
    <script src="../layui/layui.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
    <script>
        function show() {
            //弹出一个页面层
            $('#test2').on('click', function() {
                layer.open({
                    type: 1,
                    title: "更改头像",
                    resize: false,
                    area: ['300px', '500px'],
                    shadeClose: true, //点击遮罩关闭
                    //content: '\<\div style="padding:20px;margin:auto;"><img src="" alt="" id="show-img" style="width:200px;height:200px;margin:0px 30px;"><div style="padding:20px;margin:auto;"><button style="margin-left:50px;" type="button" class="layui-btn" id="test1"><i class="layui-icon">&#xe67c;</i>上传图片</button><\/div>\<\/div>',
                    content:'\<\div style="padding:20px;margin:auto;"><div class="layui-upload">\
  <button type="button" class="layui-btn" id="test1" onclick="upload()">上传图片</button>\
  <div class="layui-upload-list">\
    <img class="layui-upload-img" id="demo1" style="width:200px;height:200px;">\
    <p id="demoText"></p>\
  </div>\
  <div style="width: 95px;">\
    <div class="layui-progress layui-progress-big" lay-showpercent="yes" lay-filter="demo">\
      <div class="layui-progress-bar" lay-percent=""></div>\
    </div>\
  </div>\
</div></div>  ',
                    btn: ['按钮一', '按钮二'],
                    yes: function(index, layero) {
                        //按钮【按钮一】的回调
                    },
                    btn2: function(index, layero) {
                        //按钮【按钮二】的回调

                        //return false 开启该代码可禁止点击该按钮关闭
                    },
                    cancel: function() {
                        //右上角关闭回调

                        //return false 开启该代码可禁止点击该按钮关闭
                    },
                    btnAlign: 'c'
                });
            });
        }
    </script>

    <script>
        // layui.use(['upload', function() {
        //     console.log("sdfsdf");

        //     var upload = layui.upload;

        //     //执行实例
        //     upload.render({
        //         elem: '#test1' //绑定元素
        //             ,
        //         url: 'http://localhost/allPHPcode/layuidemo2/imgupload/img_upload.php' //上传接口
        //             ,
        //         done: function(res) {
        //             //上传完毕回调
        //             if (res.code == 100) {
        //                 $('#show-img').attr('src', './' + res.img); // 获取图片的路径，设置给 src 属性
        //                 $('#show-img').css('display', 'inline-block'); // 显示元素
        //                 //$(':input[type=hidden]')[0].value = res.img; // 将图片的名字保存给隐藏域
        //             }
        //         },
        //         error: function() {
        //             //请求异常回调
        //         }
        //     });
        // });

        
    // layui.use(['upload', 'layer'], function() {
    //   // 获取上传控件实例
    //   var upload = layui.upload
    //   // 执行实例
    //   var uploadInst = upload.render({
    //     elem: '#upload-btn', // 绑定元素
    //     url: '../imgupload/img_upload.php', // 上传接口
    //     field: 'icon', // 设置上传域的key，服务端通过此key来获取信息
    //     done: function(res, index, upload) {
    //       // res服务端返回的资源 ,其中的 code 如果是 100 则表示上传成功
    //       if (res.code == 100) {
    //         console.log(res);
    //         $('#show-img').attr('src', '../server/resource/' + res.img); // 获取图片的路径，设置给 src 属性
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
    function upload()
    {

        layui.use(['upload', 'element', 'layer'], function(){
  var $ = layui.jquery
  ,upload = layui.upload
  ,element = layui.element
  ,layer = layui.layer;
  
  //常规使用 - 普通图片上传
  var uploadInst = upload.render({
    elem: '#test1',
    field: 'icon'
    ,url: 'https://httpbin.org/post' //此处用的是第三方的 http 请求演示，实际使用时改成您自己的上传接口即可。
    ,before: function(obj){
      //预读本地文件示例，不支持ie8
      obj.preview(function(index, file, result){
        $('#demo1').attr('src', result); //图片链接（base64）
      });
      
      element.progress('demo', '0%'); //进度条复位
      layer.msg('上传中', {icon: 16, time: 0});
    }
    ,done: function(res){
      //如果上传失败
      if(res.code > 0){
        return layer.msg('上传失败');
      }
      //上传成功的一些操作
      //……
      $('#demoText').html(''); //置空上传失败的状态
    }
    ,error: function(){
      //演示失败状态，并实现重传
      var demoText = $('#demoText');
      demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
      demoText.find('.demo-reload').on('click', function(){
        uploadInst.upload();
      });
    }
    //进度条
    ,progress: function(n, elem, e){
      element.progress('demo', n + '%'); //可配合 layui 进度条元素使用
      if(n == 100){
        layer.msg('上传完毕', {icon: 1});
      }
    }

  });

  
});
    }
</script>
</body>

</html>