<?php
//与Java非常相像,无多继承,但是通过接口来模仿多继承
class human
{
    public $name;
    private $id;
    //public $birth;
    protected $gender;
}
class leek extends human
{



    //普通函数
    /*  public function do_sonething()
    {
        echo '躺平-ing';
    } */
}

/* 
class juanwang extends human
{

} */
$humanTemp = new human();
$leekTemp = new leek();
//$leekTemp->name="韭菜";
//$leekTemp->id="00";
//$leekTemp->gender="F";

//echo $leekTemp->name;//韭菜
//echo $leekTemp->id;//00
//echo $leekTemp->gender; 
var_dump("<pre>");
var_dump($humanTemp); //name,id,gender
echo "---------------";
var_dump($leekTemp); //name,id,gender
echo "---------------";
$leekTemp->name = "韭菜"; //leek类继承human的name,可以访问
$leekTemp->id2 = "00"; //不报错,这相当于又添加了一个id2属性，而不是继承来的id属性
//$leekTemp->gender="F";  

echo $leekTemp->name; //韭菜
echo $leekTemp->id2; //00
$leekTemp->id = "11";
echo $leekTemp->id;  // 这种写法也不报错
//echo $leekTemp->gender; 
echo "---------------";
var_dump($leekTemp);//name,id,gender,id2    因为41行又添加了一个id2

/*
php中继承不像cpp中继承有访问修饰符的概念
cpp中访问可分为私有、公有、保护，子类的属性权限会根据访问修饰符变化
但是在php中没有访问修饰符的概念,其实可以认为都是public的继承,这可以解释子类属性方法的用法
还有一个要点,就是在php中访问未定义的属性并不会报错,这会给类添加一个该属性
*/