<?php 

require_once 'DB.php';
// $page=$_GET['page'];
// $limit=$_GET['limit'];




$sql = "select * from testform";
// if($page==1)
// {
//     $sql="select * from testform where id>=1 and id<=5";
// }
// else if($page==2)
// {
//     $sql="select * from testform where id>=6 and id<=10";
// }
// else
// {
//     $sql="select * from testform where id>=11 and id<=15";
// }

//echo $sqlReturnOnequestionbyid;

$stmt = DB::getInstance()->connect()->query($sql);

$onequestion = $stmt->fetchAll();

$question=[];
foreach($onequestion as $q)
{
    array_push($question,$q);
}
//   echo "<pre>";
//  var_dump($question);
// var_dump($question[3]);
//var_dump($question[0]['id']);

/**
 * json encode需要用关联数组，但是这个是索引数组，要把索引数组转为关联数组
 */
$questionSS = array
(
    $questionS = array
    (
        'id' => '',
        'username' => '',
        'password' => ''
    )
);

for($i=0;$i<count($question);$i++)
{
    $questionSS[$i]['id'] = $question[$i]['id'];
    $questionSS[$i]['username'] = $question[$i]['username'];
    $questionSS[$i]['password'] = $question[$i]['password'];

}

    //var_dump($questionS);






// $stem = $question[3];
// echo $stem;


//return $question;


/*

$question是一个数组，但是如果要想让前端用这个数据，必需返回json
php数组转json的方法也就是   json_encode()
json_encode(参数是数组)
*/


//var_dump(json_encode($questionS));
//exit(json_encode($questionS));
// $questionJson =  json_encode($questionS);
//return $questionJson;

// var_dump($questionJson);



$returndata = array
(
    "code" => 0,
    "msg" =>"success",
    "count" => 2,
    "data" =>  $questionSS
);
exit(json_encode($returndata));
