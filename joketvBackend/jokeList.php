<?php
    # 引入数据库封装函数
    require_once "database_search.php";
    header('Content-Type:text/json;charset=utf-8');
    # 设置允许跨域
    header("Access-Control-Allow-Origin: *");  

    $sql = "SELECT snippet.*,`user`.nickname,`user`.avatar FROM snippet LEFT JOIN `user` ON snippet.user_id = `user`.id ORDER BY time DESC";
    $res = searchDatabase($sql,"search");

    for ($i=0; $i <count($res) ; $i++) { 
        $sqlImg = "SELECT * FROM imgs WHERE imgs.snippet_id = " . $res[$i]['id'];
        $res[$i]['imgsList'] = searchDatabase($sqlImg,"search");
    }
    
    $data = array("code" => 0, "msg" => "success", "data" => $res);
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>