<?php
//与Java非常相像,无多继承,但是通过接口来模仿多继承
class human
{
    public $name;
    private $id;
    //public $birth;
    protected $gender;

    public function work()
    {
        echo "work-ing~~~";
    }
}
class leek extends human
{
    //普通函数
    /*  public function do_sonething()
    {
        echo '躺平-ing';
    } */
}

$humanTemp = new human();
echo "<pre>";
var_dump($humanTemp); //name,id,gender

$mike = new human();
$mike->name="mike";
//$mike->gender="m";//非法
//$mike->id="00";//非法


$leekTemp = new leek();
echo "<pre>";
var_dump($leekTemp); //name,id,gender

$luna = new leek();

$luna->name="韭菜";
$luna->id="00";//不报错,这相当于又添加了一个id2属性，而不是继承来的id属性
//$luna->gender='w';//非法


echo $luna->name;//韭菜
echo $luna->id;//00
echo "<pre>";
var_dump($luna);//name,id,gender,id
//echo $luna->gender; //非法



/*
php中继承不像cpp中继承有访问修饰符的概念
cpp中访问可分为私有、公有、保护，子类的属性权限会根据访问修饰符变化
但是在php中没有访问修饰符的概念,其实可以认为都是public的继承,这可以解释子类属性方法的用法
还有一个要点,就是在php中访问未定义的属性并不会报错,这会给类添加一个该属性
*/