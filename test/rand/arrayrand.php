<?php

/*
Matrix
Neo
Morpheus
Trinity
Smith
Oracle
Tank
*/
//索引数组
$Matrix = array("Neo","Morpheus","Trinity","Smith","Oracle","Tank");
//关联数组
$Matrix2=array("1"=>"Neo","2"=>"Morpheus","3"=>"Trinity","4"=>"Smith","5"=>"Oracle","6"=>"Tank");


//索引数组取一个
$randMatrix1 = array_rand($Matrix);
var_dump($randMatrix1);//只取一个，返回索引
echo "<br>";
var_dump($Matrix[$randMatrix1]);//索引对应的值


echo "<br>";

//关联数组取一个
$randMatrix2 = array_rand($Matrix2);
var_dump($randMatrix2);//只取一个，返回键名
echo "<br>";
var_dump($Matrix2[$randMatrix2]);//索引对应的值



echo "<br>";
echo "-----------------------";
echo "<br>";

//索引数组取两个
$randMatrix12 = array_rand($Matrix,2);
var_dump($randMatrix12);//取两个，返回
echo "<br>";
var_dump($Matrix2[$randMatrix12[0]]);
var_dump($Matrix2[$randMatrix12[1]]);

echo "<br>";


//关联数组取两个
$randMatrix22 = array_rand($Matrix2,2);
var_dump($randMatrix22);//取两个，返回键名
echo "<br>";
var_dump($Matrix2[$randMatrix22[0]]);
var_dump($Matrix2[$randMatrix22[1]]);