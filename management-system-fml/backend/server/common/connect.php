<?php
/*
 * @Author: your name
 * @Date: 2021-11-10 17:39:35
 * @LastEditTime: 2021-11-10 17:48:17
 * @LastEditors: your name
 * @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 * @FilePath: \management-system-fml\backend\server\common\connect.php
 */
/*
数据库配置文件
*/

// $dsn = 'mysql:localhost;dbname=myplatform;port=3306;charset=utf-8;';
// $username = 'root';
// $password = '';

$config = array
(
    'dsn' => 'mysql:host=localhost;dbname=myplatform;port=3306;charset=utf8',
    'username' => 'root',
   // 'passowrd' => '123456'
   'password' => ''
);


//  数据库连接属性
$option = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,    //默认是：PDO::ERRMODE_SILENT,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
);

//连接数据库
try{
    $pdo = new PDO($config['dsn'],$config['username'],$config['password'],$option);
}
catch(PDOException $e)
{
    die('数据库连接失败'.$e->getMessage());
}