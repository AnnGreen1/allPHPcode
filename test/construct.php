<?php
class Wizard
{
  public $name;
  public $spell;

  public function showMagic()
  {
    echo '使用咒语'.$this->spell;
  }

  public function __construct($name_,$spell_)
  {
      $this->name=$name_;
      $this->spell=$spell_;
      echo "我是巫师".$this->name;
      echo "会使用咒语".$this->spell;
  }
}

$luna = new Wizard('luna','Expelliarmus');
$luna->showMagic();