<?php
/*
 * @Description: 登录模块的控制器
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-11-15 10:03:01
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-11-15 11:00:59
 * @FilePath: /management-system/app/controller/LoginController.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */
class LoginController {
  public function index() {
    // echo "<h1>登录页面</h1>";
    // 1, 获取Smarty对象（完成配置）
    global $smarty;
    // 2，Smarty调用 display 方法，展示视图
    $smarty->display('login.php');
  }
}