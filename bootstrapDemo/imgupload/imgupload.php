<?php
# 获取文件
$file = $_FILES['demo1'];
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
    # 未出现错误，说明上传成功，那么需要通过临时名，将图片（以图片为例）存储到某个目录中
    if(move_uploaded_file($tmpName, 'imgupload/' . $name)) {
        # 图片存储成功则返回一个 img 标签，并展示此图片
        //echo "<img src='http://localhost/allPHPcode/bootstrapdemo/imgupload/$name'>";

        $response = array(
            'code' => 100,
            'msg' => '图片上传成功',
            'data' => array('src'=>'http://localhost/allPHPcode/bootstrapdemo/imgupload/$name'),
        );

        exit(json_encode($response)) ;
    } else {
        # 提示出现错误
        echo "文件上传失败！";
    }
}

// $result = move_uploaded_file($tmpName, './'.$name);
// $response = null;
// if ($result) {
//     // 图片的路径返回给前端
//     $response = array(
//         'code' => 100,
//         'msg' => '图片上传成功',
//         'data' => array('src'=>$name),
//     );
// } else {
//     $response = array(
//         'code' => -100,
//         'msg' => '图片上传失败！',
//     );
// }

// echo json_encode($response);
