<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="" id="show-img" alt="">




<script src="../utils/jquery/jquery-3.6.0.min.js"></script>
  <script src="../layui/layui.js"></script>
  <script>
    // 上传头像脚本
    layui.use(['upload', 'laydate'], function() {
      // 获取上传控件实例
      var upload = layui.upload
      // 执行实例
      var uploadInst = upload.render({
        elem: '#upload-btn', // 绑定元素
        url: './img_upload.php', // 上传接口
        field: 'icon', // 设置上传域的key，服务端通过此key来获取信息
        done: function(res, index, upload) {
          // res服务端返回的资源 ,其中的 code 如果是 100 则表示上传成功
          if (res.code == 100) {
            $('#show-img').attr('src', './' + res.img); // 获取图片的路径，设置给 src 属性
            $('#show-img').css('display', 'inline-block'); // 显示元素
            $(':input[type=hidden]')[0].value = res.img; // 将图片的名字保存给隐藏域
          }
        },
        error: function(error) {
          // 请求异常回调
          console.log(error);
        }
      })
    })
  </script>
</body>
</html>