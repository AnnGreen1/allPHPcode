<?php
    /*
    通过使用 PHP 的超全局变量 $_FILES（数组），可以获取从客户端上传的文件信息。
    第一个 key userfile 是表单的 input[type='file'] 的 name，第二个 key 可以是 "name", "type", "size", "tmp_name" 或 "error"。就像这样：
    $_FILES["userfile"]["name"] - 客户端被上传文件的原名称
    $_FILES["userfile"]["type"] - 客户端被上传文件的类型
    $_FILES["userfile"]["size"] - 客户端被上传文件的大小，以字节（byte）为单位
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
    
    echo "文件信息如下：<br/>";
    echo "文件名：" .$name . "<br/>";
    echo "文件类型：" .$type . "<br/>";
    echo "文件大小：" .$size . "<br/>";
    echo "文件临时名：" .$tmpName . "<br/>";
?>