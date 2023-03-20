<?php
# 引入数据库封装函数
require_once "database_search.php";

# 设置允许跨域
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); // 允许请求的类型


if (isset($_POST['title'])) {
	# 保存snippet数据
	$setSnippet = "INSERT INTO snippet VALUES (NULL,'{$_POST['content']}',5,NOW(),'{$_POST['title']}',1,'https://www.qiushibaike.com/article/124266148')";
	searchDatabase($setSnippet, "insert");

	# 取出保存的snippet 的 id
	$getSnippetId = "SELECT snippet.id FROM snippet ORDER BY id DESC LIMIT 1";
	$snippet_id = searchDatabase($getSnippetId, "search");
	$sId = $snippet_id[0]["id"];

	$dest_folder = "./picture/";   //上传图片保存的路径
	if (!file_exists($dest_folder)) {
		mkdir($dest_folder, 700);    // 创建文件夹
	}

	for ($i = 0; $i < count($_FILES); $i++) {
		$key = 'img' . $i;
		echo $key;
		echo $_FILES[$key]["error"];
		if ($_FILES[$key]["error"] == UPLOAD_ERR_OK) {
			$tmp_name = $_FILES[$key]["tmp_name"];
			$a = explode(".", $_FILES[$key]["name"]);  //截取文件名跟后缀     
			$name = date('YmdHis') . mt_rand(100, 999) . "." . $a[1];  // 文件的重命名 （日期+随机数+后缀）      
			$uploadfile = $dest_folder . $name;                  // 文件的路径        
			move_uploaded_file($tmp_name, $uploadfile);
			$saveImg = "INSERT INTO imgs VALUE (NULL,$sId,'$uploadfile')";
			searchDatabase($saveImg, "insert");
		}
	}
}