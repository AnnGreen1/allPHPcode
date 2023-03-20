<?php
require_once "DB.php";
$test_name = $_REQUEST['test_name'];
$sqlselctquestionid ="select question_id from test where test_name='$test_name'";
$stmtQuestionId = DB::getInstance()->connect()->query($sqlselctquestionid);


$rows = $stmtQuestionId->fetchAll(PDO::FETCH_ASSOC);
$Type = [];
foreach($rows as $row)
{
    $contact = array(
        "question_id" => $row["question_id"]
    );
    array_push($Type,$contact);
}

var_dump($Type);

//echo $Type[0];