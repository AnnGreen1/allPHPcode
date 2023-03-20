<?php
class stu
{
    public $name;
    public $sno; 
    public $birth;
    protected $gender;
    private $id_num;

    //构造函数,只要创建对象就会自动调用,构造函数只有一个,可写可不写
    public function __construct()
    {
        echo "这是构造函数";
    }
    //析构函数,一定没有参数,完成垃圾回收的工作,销毁对象之前自动调用
    public function __destruct()
    {
        echo "这是析构函数";
    }
    //普通函数
    public function do_sonething()
    {
        echo '摸鱼-ing 摸鱼-ing';
    }
}
$anngreen = new stu();
$anngreen->name = 'AnnGreen';
$anngreen->sno = '001';
//$anngreen->gender = 'F';
//$anngreen->$id_num = '34434343';

//增加属性
$anngreen->class = 'web3';
//删除属性
//unset($anngreen->sno);


echo $anngreen->name;
echo $anngreen->sno;
echo $anngreen->class;
//修改属性
$anngreen->class = 'cs3';
echo $anngreen->class; 
echo "\n";
echo $anngreen->do_sonething();  

$luna = new stu();
$poter = new stu();