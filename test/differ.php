<?php
$arr = ['a' => 1, 'b' => 2 , 'c' => 3] ;
echo $arr['a'];//1
echo '<br>';
$str="arr[a]是$arr[a]";//arr[a]是1
echo $str;
echo '<br>';
$str2="arr[a]是".$arr['a'];//arr[a]是1
echo $str2;
echo '<br>';
echo current($arr);
echo '<br>';
echo key($arr);