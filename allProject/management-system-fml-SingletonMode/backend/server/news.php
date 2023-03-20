<?php
require_once './common/DB.php';
require_once './common/Response.php';


//获取请求方式
$method=$_SERVER["REQUEST_METHOD"];



  



switch ($method) {
    case 'GET':
       //查询 [GET]  ./server/news
        $sql='select * from news';

        $stmt=DB::getInstance()->connect()->query($sql);
        if($stmt->rowCount()>0)
        {
            $news=$stmt->fetchAll();
            //console.log($news);
            Response::json('10001','数据请求成功！',$news);
        }
        else
        {
            Response::json('-10001','数据请求失败了！');
        }
        break;
    
    case 'POST':
        /*
# 添加
    parse_str(file_get_contents('php://input'),$data);
    $title=$data['title'];
    $type_id=$data['type_id'];
    $img=$data['img'];
    $content=$data['content'];
    $create_time=date('Y-m-d H:i:s',time());
    $sql="insert into
    news(title,content,ing,type_id,create_time)
    values
    ('$title','$content','$img',$type_id,'$create_time')";
    $count=DB::getInstance->connect()->exec->($sql);
    if($count>=1)
    {
        Response::json("1001","添加成功");
    }
    else
    {
        Response::json("-1001","添加失败");
    }

        */
    
        break;
        case 'PUT':
        # 更新
        break;
        case 'DELETE':
        #删除
        break;
        default:
            # code...
            break;
    }
    
    
