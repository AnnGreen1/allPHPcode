这个也是单例模式,而且是完整的

-------------------------------------------------

在connect.php中pdo的使用

--------------------------------------------

session:登录拦截与保持用户的登录状态

----------------------------------------------------

必填项的实现    required lay-verify="required"

------------------------------------------------

如何向php语句中插入变量？
```php
<?php 
    foreach($data as $user)
    {
        echo "
            <tr>
                <td>{$user['id']}</td>
            </tr>
        ";
    }
?>
```

----------------------------------------------------

必填项的实现    required lay-verify="required"

------------------------------------------------

图片上传、时间上传组件

```javascript{.line-numbers}
 // 上传头像和日期选择脚本
    //用了两个组件（模块），即upload和laydate，所以use的第一个参数要出传一个数组，数组里包含两个组件的名字
    layui.use(
        ['upload', 'laydate'], 
        function() 
        {
            // 获取上传控件实例
            var upload = layui.upload
            // 执行实例
            var uploadInst = upload.render
            (
                {
                    elem: '#upload-btn', // 绑定元素
                    url: '../server/common/img_upload.php', // 上传接口
                    field: 'icon', // 设置上传域的key，服务端通过此key来获取信息
                    done: function(res, index, upload) 
                        {
                            // res服务端返回的资源 ,其中的 code 如果是 100 则表示上传成功
                            if (res.code == 100) 
                            {
                                $('#show-img').attr('src', '../server/resource/' + res.img); // 获取图片的路径，设置给 src 属性
                                $('#show-img').css('display', 'inline-block'); // 显示元素
                                $(':input[type=hidden]')[0].value = res.img; // 将图片的名字保存给隐藏域
                            }
                        },
                    error: function(error) 
                        {
                        // 请求异常回调
                        console.log(error);
                        }
                }
            )


            // 获取时间控件实例
            var laydate = layui.laydate
            laydate.render
            (
                {
                    elem: '#birthday', // 绑定元素
                }
            )
        }
    )
```

------------------------------------------------

编辑和删除都要确定主键，主键id如何处理非常关键

------------------------------------------------

用户列表是通过拼接php实现，新闻列表是通过ajax实现，
新闻列表是把ajax请求到的数据通过`$('tbody').html(content);`放到页面上
常用的ajax请求type是post和get，但是也有其他HTTP请求方法，例如 PUT 和 DELETE 

-----------------------------------------------

如何分页？？能用好吗？？

---------------------------------

接口怎么返回json格式数据？使用exit函数返回json_encode()函数返回值

----------------------------------------------------

解决跨域的表头有用吗？？？？
这个项目涉及到跨域吗？？？

-----------------------