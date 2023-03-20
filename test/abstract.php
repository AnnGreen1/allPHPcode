<?php
//抽象类：class有abstract修饰、有抽象方法的类

abstract class person
{
    public $age;
    public $name;
    abstract public function info();
}

class wizard extends person
{
    public $college;
    public function info()
    {
        
    echo $this->name."是".$this->college."学院的学生";
    
    }
}

$luna =new wizard();
echo "<pre>";
var_dump($luna);//college、age、name
echo "<br>";
$luna->age=16;
$luna->name="luna";
$luna->college="Ravenclaw";
$luna->info();//$luna是Ravenclaw学院的学生
echo "<pre>";
var_dump($luna);//college=>"Ravenclaw"、age=>16、name=>$luna"
