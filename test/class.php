<?php
class Student
{
  public $name='AnnGreen';
  public $age;

  public function doSomething()
  {
    echo '剑一扔，马一杀'."<br>";
  }
}

class STUDENT
{
  public $name='AnnGreen';
  public $age;

  public function doSomething()
  {
    echo '剑一扔，马一杀'."<br>";
  }
}

$stu = new Student();
$stu->doSomething();

echo $stu->name;
echo "<pre>";
var_dump($stu);

//属性增加
$stu->height=250;
echo "<pre>";
var_dump($stu);

//属性删除
unset($stu->age);
echo "<pre>";
var_dump($stu);

//属性修改
$stu->name='Ji';
echo "<pre>";
var_dump($stu);

//访问属性(查)
echo $stu->name;