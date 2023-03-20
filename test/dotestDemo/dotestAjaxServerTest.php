<?php 
//var_dump(__DIR__);
$root_file = substr(__DIR__, 0, -47);
//var_dump($root_file);
require_once 'DB.php';


$id = $_GET['id'];

$sqlReturnOnequestionbyid = "select stem,answer_a,answer_b,answer_c,answer_d from question where id = '$id'";

//echo $sqlReturnOnequestionbyid;

$stmtReturnOnequestionbyid = DB::getInstance()->connect()->query($sqlReturnOnequestionbyid);

$onequestion = $stmtReturnOnequestionbyid->fetch();

$question=[];
foreach($onequestion as $q)
{
    array_push($question,$q);
}
// echo "<pre>";
// var_dump($question);
// var_dump($question[3]);

/**
 * json encode需要用关联数组，但是这个是索引数组，要把索引数组转为关联数组
 */
$questionS = array
(
    "stem" => "",
    "answer_a" => "",
    "answer_b" => "",
    "answer_c" => "",
    "answer_d" => ""
);

    $questionS['stem'] = $question[0];
    $questionS['answer_a'] = $question[1];
    $questionS['answer_b'] = $question[2];
    $questionS['answer_c'] = $question[3];
    $questionS['answer_d'] = $question[4];

    //var_dump($questionS);





// $stem = $question[3];
// echo $stem;


//return $question;


/*

$question是一个数组，但是如果要想让前端用这个数据，必需返回json
php数组转json的方法也就是   json_encode()
json_encode(参数是数组)
*/
exit(json_encode($questionS));
// $questionJson =  json_encode($questionS);
//return $questionJson;

// var_dump($questionJson);
