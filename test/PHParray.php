<?php
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);
/*
    echo '<pre>';
    print_r($_SERVER);

    echo __FILE__,'<br>';
    echo __DIR__,'<br>';
    echo __LINE__;
*/

$a = 1;
$b = ' 123 $a';
$c = " 123 $a";
echo '<br/>';
echo $a, '<br>';
echo $b, '<br>';
echo $c;

$val1 = "" . 3;
var_dump($val1); // 结果：string(1) "3"
$val2 = strval(null);
var_dump($val2); // 结果: string(0) ""



$bar = <<<EOT
    BAR
    EOT;
echo $bar,'<br>';


$name = <<<SON
    anngreen_Zfuchuan
    SON;
echo $name,'<br>';

#索引数组   自动分配id
$array11=array("bar","foo");
$array12=["bar","foo"];
#打印全部数组
print_r($array11);
echo '<br>';
#打印指定元素
print_r($array11[0]);
echo '<br>';
#打印全部数组
print_r($array12);
echo '<br>';
#print_r($array12(0));  错误，非法
#打印指定元素
print_r($array12[0]);
echo '<br>';
echo '-------------------------------';
echo '<br>';

#关联数组   人工分配ID键
$array2=
[
    "foo"=>"bar",
    "bar"=>"foo",
];
print_r($array2);
echo "<br>";
print_r($array2["bar"]);
echo '<br>';
print_r($array2["foo"]);



#键值对 key=>value
$array3=['a'=>1,'b'=>2,'c'=>3];
#打印全部数组
print_r($array3);
echo "<br>";
#打印指定元素
print_r($array3['a']);
echo "<br>";



#多维数组
$array = [
    [1, 2, 3],
    ['a', 'b', 'c']
  ];
  echo $array[1][2]; # 输出：c
echo '<br>';

#数组遍历
#foreach
  $arr = [0, 1 , 2 , 3 , 4 , 5 ];

foreach ($arr as $k => $v){
    echo
    $k , ' =' ,$v . "<br>";
}
#for
for($times=0;$times<count($arr);$times++)
{
    echo "<br>";
    echo
    $times.'='.$arr[$times];

}
#error
#echo $arr;
echo "<br>";

#函数
function say()
{
    echo 'Hi^_^';
}
say();
$funValue="say";
$funValue();

function saySomeone($name)
{
    echo 'Hi^_^'.$name;
}
saySomeone("AnnGreen");


echo '<br>';
function getMaxFromArray($nums)
{
    $max=0;
    for($times=0;$times<count($nums);$times++)
    {
      if($max<$nums[$times])
      {
          $max=$nums[$times];
      }
    
    }
    echo $max;
}
$nums=array(3,5,1,7,9,6);
getMaxFromArray($nums);

function getArea($len)
{
    echo "边长为".$len."的正方形面积为".$len*$len;
}
$len1=5;
getArea($len1);
$len2=15;
getArea($len2);


function judgeTriangle($x,$y,$z)
{
    if($x+$y>$z && $x+$z>$y && $z+$y>$x)
    {
        if($x==$y || $x==$z || $y=$z)
        {
            if($x==$y && $x==$z)
            {
                    return 3;
            }
            else
            {
                    return 2;
            }
        }
        else
        {
                    return 1;
        }
    }
    else
    {
                    return 0;
    }
}

$result=judgeTriangle(3,5,3);
echo "<br>";
echo "result = ".$result;

echo "<br>";


function powerCalculate($x, $y)
{
    $temp = 0;
    for ($t = 0; $t < $y; $t++) {
        $temp = $x * $x;
    }
    return $temp;
}
$x=3;
$y=4;
$result2=powerCalculate($x,$y);
echo $x."的".$y."次方等于".$result2;


function func($a,$b) {

    $a = 100; $b = 200;

}

$a = 5; $b = 10;

func($a,$b);

echo "$a $b ";


function func2(&$a,&$b) {

    $a = 100; $b = 200;

}

$a = 5; $b = 10;

func2($a,$b);

echo "$a $b ";