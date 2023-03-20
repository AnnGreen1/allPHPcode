<?php
require_once './DB.php';


$id =  $_REQUEST['sel'];

$sql = "insert into content(con) values('$id')";
//echo $sql;

$stmt = DB::getInstance()->connect()->query($sql);
