<?php
/*
 * @Description: 服务端注销处理页面
 * @Version: 1.0
 * @Author: Humbert Cheung
 * @Date: 2021-10-20 09:50:59
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2021-10-20 09:56:30
 * @FilePath: /management-system/backend/server/server_logout.php
 * Copyright (C) 2021 syzhang. All rights reserved.
 */

// 去除用户的登录状态
session_start();
unset($_SESSION['username']);
echo "<script>alert('退出成功！');location.href='../view/login.php';</script>";