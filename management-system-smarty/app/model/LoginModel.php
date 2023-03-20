<?php
/*
根据用户名查询用户
*/
class LoginModel
{
    public function getUser($username)
    {
        global $pdo;
        // 准备sql语句
        $sqlStr = "SELECT * FROM admin WHERE username = '$username'";
        // 执行sql查询
        $stmt = $pdo->query($sqlStr);
        // 提取结果集中的所有记录
        $user = $stmt->fetch();
        return $user;
    }
}
