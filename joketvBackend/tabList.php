<?php include_once "database_search.php" ?>
<?php
    header('Content-Type:text/json;charset=utf-8');
    header("Access-Control-Allow-Origin: *");

    $sql = "SELECT * FROM news_category WHERE 1";
    $res = searchDatabase($sql,"search");
    $data = array("code" => 0, "msg" => "success", "data" => $res);
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>