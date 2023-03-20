<?php
/*
    通过使用 PHP 的超全局变量 $_FILES（数组），可以获取从客户端上传的文件信息。
    第一个 key userfile 是表单的 input[type='file'] 的 name，第二个 key 可以是 "name", "type", "size", "tmp_name" 或 "error"。就像这样：
    $_FILES["userfile"]["name"] - 客户端被上传文件的原名称
    $_FILES["userfile"]["type"] - 客户端被上传文件的类型
    $_FILES["userfile"]["size"] - 客户端被上传文件的大小，以字节(byte)为单位
    $_FILES["userfile"]["tmp_name"] - 文件被上传后在服务端储存的临时文件名
    $_FILES["userfile"]["error"] - 和该文件上传相关的错误代码
    */

# 获取文件
$file = $_FILES['uploadFile'];
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
    echo "文件上传失败！Error:" . $file['error'];
} else {
    # 因为获取的类型不是需要的类型（如image/png），我们需要提取出其中的类型（即png）
    $type = substr($type, strpos($type, "/")+1);
    # 判断类型是否是图片类型
    if(!in_array($type,["jpg", "jpeg", "png", "gif"])) {
        exit("文件类型不对，支持的类型有： jpg/jpeg/png/gif，请检查格式！");
    }
    # 判断大小是是否在 1M 以内，即 1024k 以内 (byte、Kb、M、G)
    if($size > 1024*1024){
        exit("文件太大了，大小不得超过 1M ！");
    }
    # 未出现错误，说明上传成功，那么需要通过临时名，将图片（以图片为例）存储到某个目录中
    if(move_uploaded_file($tmpName, 'img/' . $name)) {
        # 图片存储成功则返回一个 img 标签，并展示此图片
        echo "<img src='http://localhost/allPHPcode/img/$name'>";
    } else {
        # 提示出现错误
        echo "文件上传失败！";
    }
}