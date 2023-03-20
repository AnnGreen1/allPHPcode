<?php
class wizard
{
    public $name;
    static $species;

    function showMagic($nam)
    {
        echo $nam."可以用咒语".wizard::$species;
    }
}
wizard::$species="Expelliarmus";
$luna = new wizard();
$luna->name="luna";
$luna->showMagic($luna->name);//luna可以用咒语Expelliarmus
//echo $luna->$species;//报错