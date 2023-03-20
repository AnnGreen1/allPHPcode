<?php
require_once './app/model/todolistModel.php';

class todolistController
{
    public function todolist()
    {
        $todolistmodel = new todolistModel();
        $todos = $todolistmodel->select();
        global $smarty;
        $smarty->assign('data',$todos);
        $smarty->display('todo_list.html');
    }

    public function select()
    {
        global $pdo;
        $sql = "select * from todo";

        $stmt = $pdo->query($sql);
        $todos = $stmt->fetchAll();
       var_dump($todos) ;
        $data[] = $todos;
        return $data;
    }
    public function add () {
        global $smarty;
        $smarty->display("useradd.html");
      }

      public function addUser() {
        $usersModel = new todolistModel();
        $count = $usersModel->addUser();
        if($count > 0) {
          echo "<script>alert('添加成功！');location.href='index.php?controller=Users&method=userslist'</script>";
          //echo "<script>alert('添加成功！');</script>";
        } else {
         echo "<script>alert('添加失败！');location.href='index.php?controller=Users&method=add'</script>";
           //echo "<script>alert('添加失败！');</script>";
        }
      }
}