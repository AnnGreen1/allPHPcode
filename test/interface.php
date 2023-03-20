<?php
//接口  interface
//接口模仿多继承
//接口中方法必需公有
//接口不能实例化对象

//java中，接口C继承接口A和接口B,再有一个类实现接口C

//use person as GlobalPerson;

interface person
{
    const name="Hermione";
    function PersonIntroduct();
}
//直接使用接口名称在外部获取常量成员的值
interface Magic
{
    const spell="Expelliarmus";
    function MagicIntroduct();
}

//实现接口  implements关键字
interface wizard extends person,Magic
{
    const college='Gryffindor';
}

class Hermione implements wizard
{
    function PersonIntroduct()
    {
        echo "我是".wizard::college."学院".person::name;
    }
    function MagicIntroduct()
    {
        echo "我会用咒语".Magic::spell;
    }
}
$hermione = new Hermione();
echo "<pre>";
var_dump($hermione);
$hermione->PersonIntroduct();
echo '<br>';
$hermione->MagicIntroduct();
echo '<br>';
echo person::name;
