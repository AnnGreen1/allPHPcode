<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bootstrap 实例 - 模态框（Modal）插件</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./layui/css/layui.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <h2>创建模态框（Modal）</h2>
    <!-- 按钮触发模态框 -->
    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        开始演示模态框
    </button>
    <!-- 模态框（Modal） -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        模态框（Modal）标题
                    </h4>
                </div>
               
                <div class="modal-body">
                    <h1>在这里添加一些文本</h1>
                    <form action="./imgupload/imgupload.php" method="get">
                    <div class="layui-upload">
                        <button type="button" class="layui-btn" id="test1">上传图片</button>
                        <div class="layui-upload-list">
                            <img class="layui-upload-img" id="demo1" name="demo1" style="width:200px;height:200px;">
                            <p id="demoText"></p>
                        </div>
                        <div style="width: 95px;">
                            <div class="layui-progress layui-progress-big" lay-showpercent="yes" lay-filter="demo">
                                <div class="layui-progress-bar" lay-percent=""></div>
                            </div>
                        </div>
                    </div>
                    <button>提交</button>
                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                    </button>
                    <button type="button" class="btn btn-primary">
                        提交更改
                    </button>
                </div>
                
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>

    <script src="./layui/layui.js"></script>
    <script>
        layui.use(['upload', 'element', 'layer'], function(){
  var $ = layui.jquery
  ,upload = layui.upload
  ,element = layui.element
  ,layer = layui.layer;
  
  //常规使用 - 普通图片上传
  var uploadInst = upload.render({
    elem: '#test1'
    ,url: 'http://localhost/allPHPcode/layuidemo2/imgupload/img_upload.php' //此处用的是第三方的 http 请求演示，实际使用时改成您自己的上传接口即可。
    ,data:{icon: 'demo1'}
    ,before: function(obj){

        // console.log(obj);
        // $.ajax({
        //     url:'http://localhost/allPHPcode/bootstrapDemo/imgupload/imgupload.php',
        //     dataType:'JSON',
        //     data:{

        //     }
        // })

      //预读本地文件示例，不支持ie8
      obj.preview(function(index, file, result){
        console.log(result);
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
    </script>
</body>

</html>