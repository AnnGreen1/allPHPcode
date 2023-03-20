<?php
class testModel
{
    function getData()
    {
        return 'web';
    }
}
class testView
{
    function showHi($data)
    {
        echo $data;
    }
}
class testController
{
    public function sayHi()
    {
        $model =new testModel();

        $data =$model->getData();

        $view=new testView();

        $view->showHi($data);
    }
}

$controller = new testController();
$controller->sayHi();