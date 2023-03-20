
<?php

function json($code = 0;$message="",$data=[])
{
    $ret=[
        'errno' => $code,
        'message' => $message,
        'data' => $data
    ];
    //echo json_encode($ret,JSON_UNESCAPED_UNICODE);
    //exit(json_encode($ret,JSON_UNESCAPED_UNICODE));
    return json_encode($ret);
}
if(!empty($_FILES['pic']))
{

    $file=$_FILES['pic'];

    echo $file;
    move_uploaded_file($file['tmp_name'],'../server/resource/'.$file['name']);
    //获取当前文件的完整路径
    $url='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['PHP_SELF'];
    echo $url;
    //用当前文件的完整路径改造成图片的路径
    $icon=str_replace('upload_wang.php','',$url).'resource/'.$file['name'];
    echo $icon;
    //将图片路径返回
    json(0,'上传成功',[$icon]);
}
else
{
    json(-1,'图片不存在！');
}

?>