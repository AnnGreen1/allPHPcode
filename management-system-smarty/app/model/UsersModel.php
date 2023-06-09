<?php
class UsersModel
{
    public function getUsers()
    {
        global $pdo;
        // 准备sql语句
        $sql = "SELECT * FROM user";

        // 执行sql查询
        $stmt = $pdo->query($sql);
        $users = $stmt->fetchAll();
        //var_dump($users);
        $data = [];
        foreach ($users as $u) {
            // 对类型进行转化
            switch ($u['type']) {
                case 1:
                    $u['type_name'] = "普通员工";
                    break;
                case 2:
                    $u['type_name'] = "项目经理";
                    break;
                case 3:
                    $u['type_name'] = "项目组长";
                    break;
                default:
                    break;
            }
            $u['icon'] = $u['icon'] ? $u['icon'] : 'default.jpeg';
            $u['ctime'] = date('Y-m-d H:i', $u['create_time']);
            array_push($data, $u);
        }
        return $data;
    }

    public function addUser()
    {
        global $pdo;
        $name = $_REQUEST['name'];
        $age = $_REQUEST['age'];
        $birthday = $_REQUEST['birthday'];
        $type = $_REQUEST['type'];
        $icon = $_REQUEST['icon'];
        $create_time = time() + 7 * 3600;

        $sql = "INSERT INTO user(name, age, birthday, type, icon, create_time) VALUES('$name', $age, '$birthday', $type, '$icon', $create_time)";

        $count = $pdo->exec($sql);
        return $count;
    }

    //获取正在编辑的用户
    public function getEditingUser()
    {
        global $pdo;

        // 获取用户信息
        $id = $_REQUEST["id"];
        $sql = "SELECT * FROM user WHERE id='$id'";
        $stmt = $pdo->query($sql);
        $user = $stmt->fetch();
        return $user;
    }

    //编辑用户处理方法
    public function editUser()
    {
        global $pdo;
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $age = $_REQUEST['age'];
        $birthday = $_REQUEST['birthday'];
        $type = $_REQUEST['type'];
        $icon = $_REQUEST['icon'];
        $create_time = time();

        $sql = "UPDATE user SET name='$name', age=$age, birthday='$birthday', type=$type, icon='$icon', create_time=$create_time WHERE id='$id'";

        $count = $pdo->exec($sql);
        return $count;
    }

    //删除用户处理方法
    public function  deleteUser()
    {
        global $pdo;
        $id = $_REQUEST["id"];



        $sql = "DELETE FROM user WHERE id='$id'";
        $count = $pdo->exec($sql);
        return $count;
    }
}
