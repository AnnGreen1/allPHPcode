<?php
class todolistModel
{
    public function select()
    {
        global $pdo;
        $sql = "select * from todo";

        $stmt = $pdo->query($sql);
        $todos = $stmt->fetchAll();
        $data[] = $todos;
        return $data;
    }

    public function addtodolist()
    {
      global $pdo;
      
      $sql = "INSERT INTO user(username,password) VALUES ()";
  
      $count = $pdo->exec($sql);
      return $count;
    }
}