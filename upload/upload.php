<?php
/*
    通过使用 PHP 的超全局变量 $_FILES（数组），可以获取从客户端上传的文件信息。
    第一个 key userfile 是表单的 input[type='file'] 的 name，第二个 key 可以是 "name", "type", "size", "tmp_name" 或 "error"。就像这样：
    $_FILES["userfile"]["name"] - 客户端被上传文件的原名称
    $_FILES["userfile"]["type"] - 客户端被上传文件的类型
    $_FILES["userfile"]["size"] - 客户端被上传文件的大小，以字节为单位
    $_FILES["userfile"]["tmp_name"] - 文件被上传后在服务端储存的临时文件名
    $_FILES["userfile"]["error"] - 和该文件上传相关的错误代码
    */
    // 跨域问题处理
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
// header('Access-Control-Allow-Headers:x-requested-with,content-type');

$res = [
    "code" => 0,
    "msg" => "success",
        "url" => "" 
];
# 获取文件
$file = $_FILES['file'];
# 获取文件的原名字
$name = $file['name'];
# 获取文件的类型
$type = $file['type'];
# 获取文件的大小
$size = $file['size'];
# 获取文件在服务端的临时文件名
$tmpName = $file['tmp_name'];
# 判断如果有错误出现
if ($file["error"] > 0) {
    # 提示出现错误
    // echo "文件上传失败！Error:" . $file['error'];
} else {
    # 未出现错误，说明上传成功，那么需要通过临时名，将图片（以图片为例）存储到某个目录中
    if(move_uploaded_file($tmpName, "./file/$name")) {
        # 图片存储成功则返回一个 img 标签，并展示此图片
        // echo "<img src='http://localhost:8080/allPHPCode/ElementPaginationDemo/$name'>";
        $res['url'] = "http://localhost/allPHPCode/upload/file/$name";
    } else {
        # 提示出现错误
        // echo "文件上传失败！";
        $res['code'] = 1;
        $res['msg'] = "fail";
    }
}

exit(json_encode($res));