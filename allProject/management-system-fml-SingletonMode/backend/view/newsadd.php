<?php

/*
 * @Description: 添加用户界面
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-10-19 23:44:25
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-10-21 21:59:42
 * @FilePath: /management-system-all/backend/view/useradd.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */

session_start();
if(empty($_SESSION['username']))
{
    //找不到session中的用户名，说明用户没有登录过，那么久需要弹窗提醒，并跳转到登录页面
    //加了  echo
    echo "<script>alert('请先登录！');location.href='../view/login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加新闻</title>
    <link rel="stylesheet" href="../utils/layui/css/layui.css">
    <style>
    #titlediv {
      margin-bottom: 15px;
    }

    #container {
      padding: 20px;
    }

    #show-img {
      display: none;
      width: 150px;
      height: 150px;
      margin-top: 15px;
    }
    </style>


</head>
<body class="layui-layout-body">
    <div class="layui-layout layui-layout-admin">
    <?php
        require './common/nav.php';
    ?>
    <div class="layui-body">
            <div id="container">
                <div id="titlediv">
                    <h2>添加新闻</h2>
                </div>
                <form class="layui-form" action="">
                        <div class="layui-form-item">
                            <label class="layui-form-label">标题</label>
                            <div class="layui-input-inline">
                                <input type="text" name="title" class="layui-input" require layui-verify="required" placeholder="请输入标题">
                            </div>
                        </div>
                        
                        <div class="layui-form-item">
                            <label class="layui-form-label">分类</label>
                            <div class="layui-input-inline">
                                <select name="type" lay-verify="required">
                                    <option value=""></option>
                                    <option value="1">普通员工</option>
                                    <option value="2">项目经理</option>
                                    <option value="3">项目组长</option>
                                </select>
                            </div>
                        </div>

                        
                       
                        <div class="layui-form-item">
                            <label class="layui-form-label">图片</label>
                            <div class="layui-input-inline">
                                <input class="layui-input" type="hidden" name="img">
                                <a class="layui-btn" id="upload-btn">
                                    <i class="layui-icon">&#xe67c;</i>上传图片
                                </a>
                                <img id="show-img">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">内容</label>
                            <div class="layui-input-block">
                                <input type="hidden" name="content">
                                <div id="editor"></div>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <a class="layui-btn" onclick="submit()">确认</a>
                                <a class="layui-btn layui-btn-primary" onclick="location.href='./newslist.php'">返回</a>
                            </div>
                        </div>
                </form>
            </div>
    </div>
    <!-- 新增 -->
    <div class="layui-footer">
      <!-- 底部固定区域 -->
      © web3 - 创业平台后台管理系统
    </div>
    </div>
<script src="../utils/layui/layui.js"></script>
<script src="../utils/jquery/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/wangeditor@latest/dist/wangEditor.min.js"></script>

<!--
区别特别大的地方，wangeditor
-->
<script type="text/javascript">
  const E = window.wangEditor
  const editor = new E("#editor")
  editor.config.uploadImgServer="../server/upload_wang.php"
  editor.config.uploadFileName='pic';
  editor.config.height=400

  editor.create()



  layui.use('upload',function()
  {
       // 获取上传控件实例
       var upload = layui.upload
      // 执行实例
      var uploadInst = upload.render({
        elem: '#upload-btn', // 绑定元素
        url: '../server/common/img_upload.php', // 上传接口
        field: 'icon', // 设置上传域的key，服务端通过此key来获取信息
        done: function(res, index, upload) {
          // res服务端返回的资源 ,其中的 code 如果是 100 则表示上传成功
          if (res.code == 100) {
            $('#show-img').attr('src', '../server/resource/' + res.img); // 获取图片的路径，设置给 src 属性
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

    function submit() {
      // 获取富文本框的文本
      var content = document.querySelector('input[name=content]')
      console.log(content);
      content.value = editor.txt.html()
      /*
      $.ajax({
        type: service == 'add' ? 'post' : 'put',
        url: '../server/news.php',
        data: {
          'title': $('input[name=title]').val(),
          'type_id': $('select[name=type_id]').val(),
          'img': $('input[name=img]').val(),
          'content': $('input[name=content]').val(),
          'id': localStorage.getItem('NEWS_ID')
        },
        dataType: 'json',
        success: function(res) {
          if (service == 'add') {
            if (res.code == "10001") {
              // 添加成功
              layui.layer.confirm(res.message, {
                btn: ["返回新闻列表", "继续添加"]
              }, function() {
                history.go(-1);
              }, function() {
                location.reload();
              })
            }
          } else {
            // 修改成功
            if (res.code == "10001") {
              layui.layer.confirm(res.message, {
                btn: ["返回新闻列表"]
              }, function() {
                location.href = './newslist.php'
              })
            }
          }
        },
        error: function(error) {
          console.log(error);
        }
      })
      
      */
      
    }
</script>
</body>
</html>