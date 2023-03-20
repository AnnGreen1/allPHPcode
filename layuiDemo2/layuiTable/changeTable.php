<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="layui-table" lay-size="sm">
          <thead>
            <tr>
              <th>编号</th>
              <th>类型</th>
              <th>用户</th>
              <th>题干</th>
              <th>选项1</th>
              <th>选项2</th>
              <th>选项3</th>
              <th>选项4</th>
              <th>正确答案</th>
              <th>创建时间</th>
              <th>难度</th>
              <th>是否公开</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          <?php
            foreach ($data as $question) {
              echo "
                  <tr>
                    <td>{$question['id']}</td>
                    <td>{$question['type']}</td>
                    <td>{$question['username']}</td>
                    <td>{$question['stem']}</td>
                    <td>{$question['answer_a']}</td>
                    <td>{$question['answer_b']}</td>
                    <td>{$question['answer_c']}</td>
                    <td>{$question['answer_d']}</td>
                    <td>{$question['right_key']}</td>
                    <td>{$question['ctime']}</td>
                    <td>{$question['difficulty']}</td>
                    <td>{$question['open']}</td>
                    <td>
                    
                    <a class='layui-btn layui-btn-xs' href=\"./questionedit.php?id={$question['id']}\" style='float:right;'>编辑</a>
                    
                    
                    <button class=\"layui-btn layui-btn-xs layui-btn-danger\" style='float:right;' onclick=\"deletequestion({$question['id']}, '{$question['stem']}')\">删除</button>
                    
                    </td>
                  </tr>
              ";
            }
            ?>
          </tbody>
        </table>
</body>
</html>