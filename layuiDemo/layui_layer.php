<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="./layui/css/layui.css" media="all">
    <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>

<body>




    <div id="layerDemo" style="margin-bottom: 0;">
        <div class="layui-btn-container" style="margin-top: 30px;">
            <button data-method="notice" class="layui-btn">示范一个公告层</button>
            <!-- <a data-method="notice">示范一个公告层</a> -->
        </div>
    </div>
   

    <script src="./layui/layui.js" charset="utf-8"></script>
    <!-- 注意：如果你直接复制所有代码到本地，上述 JS 路径需要改成你本地的 -->
    <script>
        layui.use('layer', function() { //独立版的layer无需执行这一句
            var $ = layui.jquery,
                layer = layui.layer; //独立版的layer无需执行这一句

            //触发事件
            var active = {
               
                notice: function() {
                    //示范一个公告层
                    layer.open({
                        type: 1,
                        title: false //不显示标题栏
                            ,
                        closeBtn: false,
                        area: '300px;',
                        shade: 0.8,
                        id: 'LAY_layuipro' //设定一个id，防止重复弹出
                            ,
                        btn: ['火速围观', '残忍拒绝'],
                        btnAlign: 'c',
                        moveType: 1 //拖拽模式，0或者1
                            ,
                        content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">你知道吗？亲！<br>layer ≠ layui<br><br> layer 只是作为 layui 的一个弹层模块，由于其用户基数较大，所以常常会有人以为 layui 是 <del>layerui</del><br><br>layer 虽然已被 Layui 收编为内置的弹层模块，但仍然会作为一个独立组件全力维护、升级 ^_^</div>',
                        success: function(layero) {
                            var btn = layero.find('.layui-layer-btn');
                            btn.find('.layui-layer-btn0').attr({
                                href: 'http://www.layui.com/',
                                target: '_blank'
                            });
                        }
                    });
                }
            };

            $('#layerDemo .layui-btn').on('click', function() {
                var othis = $(this),
                    method = othis.data('method');
                active[method] ? active[method].call(this, othis) : '';
            });


        });
    </script>

</body>

</html>