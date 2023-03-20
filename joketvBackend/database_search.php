<?php
/*
 * @Description: 
 * @Version: 
 * @Author: Humbert Cheung
 * @Date: 2021-04-28 07:02:50
 * @LastEditors: [Humbert Cheung]
 * @LastEditTime: 2022-04-20 11:18:27
 * @FilePath: /joketv/database_search.php
 * Copyright (C) 2022 syzhang. All rights reserved.
 */
function searchDatabase($sql, $type)
{
    # 连接数据库
    $mysqli = new mysqli("localhost", "root", "", "joketv");

    # 判断数据库是否连接成功
    if ($mysqli->connect_errno) {
        die($mysqli->connect_error);
    }

    # 设定编码格式
    $mysqli->query("set names utf8");

    # 执行语句
    $result = $mysqli->query($sql);

    if ($type == "search") {
        # 处理结果
        if ($result->num_rows > 0) {
            $row = $result->fetch_all(MYSQLI_ASSOC);
            return $row;
        } else {
            return '{}';
        }
    } else {
        # 判断是否插入成功
        if ($result) {
            echo "success";
        } else {
            echo "error";
        }
    }


    # 关闭数据库
    $mysqli->close();
}