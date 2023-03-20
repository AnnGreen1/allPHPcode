<?php

class wizard
{
    public $name;
    public $spell;
    public function info($name,$spell)
    {
        echo $name;
        echo $spell;
        //$this->name=$name;
        //$this->spell=$spell;
  
        echo "我是".$this->name."我会使用咒语".$this->spell;
    }
}
$Hermione = new wizard();
echo "<pre>";
var_dump($Hermione);
$Hermione->name="Hermion";
$Hermione->spell="Expelliarmus";
$Hermione -> info("Hermion","Expelliarmus");
echo "<pre>";
var_dump($Hermione);

$luna = new wizard();
echo "<pre>";
var_dump($luna);
$luna -> info("luna","Expelliarmus");
echo "<pre>";
var_dump($luna);

// class Student{
//     // 成员属性
//     public $name = "张三";
//     public $age = 20;  // 成员方法
//     public function showStuInfo($name,$age){
//       echo "$name 今年 $age 岁了";
//       echo "$this->name 今年 $this->age 岁了";
//     }
//   }
//   $stu = new Student();
//   $stu -> showStuInfo("李四",24); 
//   // 李四 今年 24 岁了 张三 今年 20 岁了