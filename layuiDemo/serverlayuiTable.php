<?php
//1、构造关联数组
$jsonData = array
(
  "name"=>"AnnGreen",
  "age"=>20,
  "gender"=>'m'
);

//2、转化成JSON对象
// string(false):json_encode($value,$options)
/*
value:要编码的值(必须utf-8)
options:一个可选常量参数(JSON_UNESCAPED_UNICODE,JSON_HEX_QUOT, JSON_HEX_TAG,etc.)

关联数组转换为JSON的对象格式
索引数组转换成JSON的数组格式
*/
 $dd=json_encode($jsonData);
 echo $dd;
 return $dd;
/*
设计接口所返回的数据格式除了前段需要的数据外
还需要附加上与请求状态和请求结果相关的两个重要信息:请求状态码(code)、请求结果描述信息(message)
*/