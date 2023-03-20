<?php
require_once './DB.php';

$id = $_GET['id'];
$sqlReturnOnequestionbyid = "select id,username,password from testform where id = '$id'";

$stmtReturnOnequestionbyid = DB::getInstance()->connect()->query($sqlReturnOnequestionbyid);
$onequestion = $stmtReturnOnequestionbyid->fetch();

$question = [];
foreach ($onequestion as $q) {
    array_push($question, $q);
}


/**
 * json encode需要用关联数组，但是这个是索引数组，要把索引数组转为关联数组
 */
$questionS = array(
    "id" => "",
    "username" => "",
    "password" => ""
);

$questionS['id'] = $question[0];
$questionS['username'] = $question[1];
$questionS['password'] = $question[2];

exit(json_encode($questionS));
