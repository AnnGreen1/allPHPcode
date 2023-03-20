<!--
/*
 * @Description: 通用组件--导航栏
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-10-20 09:01:44
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-10-20 11:40:45
 * @FilePath: /management-system/backend/view/common/nav.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */
-->
<!-- 创建顶部导航 -->
<div class="layui-header">
  <!-- 添加logo区域 -->
  <div class="layui-logo">
    创业平台后台管理系统
  </div>
  <ul class="layui-nav layui-layout-left">
    <li class="layui-nav-item"><a href="">控制台</a></li>
    <li class="layui-nav-item"><a href="">用户管理</a></li>
    <li class="layui-nav-item"><a href="">新闻管理</a></li>
    <li class="layui-nav-item">
      <a href="">其他系统</a>
      <dl class="layui-nav-child">
        <dd><a href="">邮件管理</a></dd>
        <dd><a href="">消息管理</a></dd>
        <dd><a href="">授权管理</a></dd>
      </dl>
    </li>
  </ul>
  <ul class="layui-nav layui-layout-right">
    <li class="layui-nav-item">
      <a href="">
        <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
        贤心
      </a>
      <dl class="layui-nav-child">
        <dd><a href="">个人中心</a></dd>
        <dd><a href="">消息</a></dd>
        <dd><a href="">设置</a></dd>
      </dl>
    </li>
    <li class="layui-nav-item"><a href="../server/server_logout.php">退了</a></li>
  </ul>
</div>
<!-- 创建侧边导航 -->
<div class="layui-side layui-bg-black">
  <div class="layui-side-scroll">
    <ul class="layui-nav layui-nav-tree">
      <li class="layui-nav-item layui-nav-itemed">
        <a href="javascript:;">所有用户</a>
        <dl class="layui-nav-child">
          <dd><a href="">用户列表</a></dd>
          <dd><a href="">添加列表</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item">
        <a href="#">新闻管理</a>
        <dl class="layui-nav-child">
          <dd><a href="">新闻列表</a></dd>
          <dd><a href="">添加分类</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="">云市场</a></li>
      <li class="layui-nav-item"><a href="">发布商场</a></li>
    </ul>
  </div>
</div>