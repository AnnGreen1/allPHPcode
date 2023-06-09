<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>makeChoiceQEasier-社区</title>
    <link rel="stylesheet" href="../layui/css/layui.css">
    <link rel="stylesheet" href="./css/blog.css">

    <style>
        .layui-layout-admin .layui-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgb(139, 176, 205)
        }
    </style>
</head>

<body>
    <?php
    require_once '../MCQEhomepage/nav.php';
    ?>

    <div style="position:fixed;top:600px;right:200px;width:40px;height:40px;background-color:cornflowerblue;border-radius:20px;">
        <div style="margin:auto;">
            <a href="#">
                <i class="layui-icon layui-icon-edit" style="font-size: 40px;"></i>
            </a>
        </div>
    </div>

    </div>

    <!--主体内容-->
    <div style="margin-top:70px;">

        <!-- <div style="float:left;width:30%;border-style:solid;"></div> -->
        <div style="margin:auto;width:50%;border-style:solid;">
            社区


            <div class="blogExternal">
                <div class="blogInside">
                    <!--头部-->
                    <div class="bloghead">
                        <div class="blogheadicon">
                            <img src="../MCQEhomepage/photo/anngreen.jpeg" alt="" style="height: 40px;width:40px;border-radius:20px;">
                        </div>
                        <div class="blogheadinfo">
                            <div style="margin: 2px;">nickname</div>
                            <div style="margin: 2px;">time</div>
                        </div>
                    </div>
                    <!--主体-->
                    <div class="blogbody">
                        主体
                        本网讯 为进一步加强思想政治理论课建设质量，认真贯彻落实教育部《高等学校思想政治理论
                        课建设标准（2021年本）》要求，12月22日，学校召开思想政治理论课建设专题研讨会。党委书记
                        汪奇燕，副校长陈跃东，校长助理孙辉、宋小秋，教务处、学生处、人事处、财务处、科技处及马克
                        思主义学院等部门负责人及相关人员出席会议，会议由陈跃东主持。
                        教务处就思想政治理论课建设情况进行汇报，从思政课程开设情况，课堂教学情况，师资结构情况，
                        教学研究与改革情况，校领导及教学督导听课、授课及督教督学情况进行了全面汇报。马克思主义学
                        院就思想政治理论课建设现状和效果进行了全面总结，并提出建设和改进意见。其他参会部门分别就
                        教师的发展、经费的保障、社会实践的融合等补充建设意见。
                    </div>
                    <!--评论-->
                    <div class="blogfootExteral">
                        <div class="layui-collapse" lay-accordion>
                            <div class="layui-colla-item">
                                <h2 class="layui-colla-title">杜甫</h2>
                                <div class="layui-colla-content layui-show">内容区域</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div style="margin:5px 0px 5px 0px;">
                <div style="margin:auto;width:700px;height: auto;border-style:solid;border-color:pink;">
                    <div style="margin:10px;height:50px;border-style:solid;border-color:blueviolet;">
                        <div style="margin: 5px;float:left;">
                            <img src="../MCQEhomepage/photo/anngreen.jpeg" alt="" style="height: 40px;width:40px;border-radius:20px;">
                        </div>
                        <div style="margin: 5px;float:left;">
                            <div style="margin: 2px;">nickname</div>
                            <div style="margin: 2px;">time</div>
                        </div>
                    </div>

                    <div style="margin:10px;padding:5px;height:auto;border-style:solid;border-color:blueviolet;">
                        主体
                        本网讯 为进一步加强思想政治理论课建设质量，认真贯彻落实教育部《高等学校思想政治理论
                        课建设标准（2021年本）》要求，12月22日，学校召开思想政治理论课建设专题研讨会。党委书记
                        汪奇燕，副校长陈跃东，校长助理孙辉、宋小秋，教务处、学生处、人事处、财务处、科技处及马克
                        思主义学院等部门负责人及相关人员出席会议，会议由陈跃东主持。
                        教务处就思想政治理论课建设情况进行汇报，从思政课程开设情况，课堂教学情况，师资结构情况，
                        教学研究与改革情况，校领导及教学督导听课、授课及督教督学情况进行了全面汇报。马克思主义学
                        院就思想政治理论课建设现状和效果进行了全面总结，并提出建设和改进意见。其他参会部门分别就
                        教师的发展、经费的保障、社会实践的融合等补充建设意见。
                    </div>

                    <div style="margin:10px;height:auto;border-style:solid;border-color:blueviolet;">
                        <div class="layui-collapse" lay-accordion>
                            <div class="layui-colla-item">
                                <h2 class="layui-colla-title">杜甫</h2>
                                <div class="layui-colla-content layui-show">内容区域</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>




            <div style="margin:auto;width:700px;height:auto;border-style:solid;border-color:pink;">

                这是一条博客
            </div>


        </div>
        <!-- <div style="float:left;width:30%;border-style:solid;"></div> -->
    </div>

    <script src="../layui/layui.js"></script>
</body>

</html>