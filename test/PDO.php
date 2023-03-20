<?php
  // 配置信息
  $dbms ="mysql";
  $host = "localhost";
  $port = "3306";
  $database = "test";
  $charset = "utf8";
  $user = "root";
  $password = "";
  $dsn = "$dbms:host=$host;port=$port;dbname=$database;charset=$charset";

  try {
    // 1, 实例化PDO对象
    $pdo = new PDO($dsn, $user, $password);
    // 2, 执行 sql语句
    $sqlStr = "SELECT * FROM stu";
    $stm  = $pdo->query($sqlStr);
    // 3, 处理结果
    // fetchAll会返回一个包含结果集中所有行的数组，通过参数可以设置返回的数组样式。ASSOC：返回按列名索引的数组
    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
    $response = [];
    foreach ($rows as $row) {
      $contact = array(
        "id" => $row["id"],
        "stu_id" => $row["stu_id"],
        "stu_name" => $row["stu_name"],
        "college"=> $row["college"],
        "major"=>$row["major"]
      );
      array_push($response, $contact);
    }
    echo "<pre>";
    print_r($response);

  } catch (PDOException $e) {
    // 出错了，那么抛出异常
    die ("Error!: " . $e->getMessage() . "<br/>");
  }
?>