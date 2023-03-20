<?php
require_once './DB.php';

// 跨域问题处理
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
header('Access-Control-Allow-Headers:x-requested-with,content-type');

$num = $_REQUEST['num'];
$page = $_REQUEST['page'];

$sql = "select * from commodity where c_id > $num*($page-1) and c_id <= $num*$page";
// echo $sql;

$stmt = DB::getInstance()->connect()->query($sql);
$commodity = $stmt->fetchAll();


$msg = array(
    "code" => "",
    "data" => $commodity,
    "message" => ""
);

if (empty($commodity)) {
    $msg['code'] = 404;
    $msg['message'] = "查找失败";
} else {
    $msg['code'] = 1001;
    $msg['message'] = "查找成功";
}


exit(json_encode($msg));
