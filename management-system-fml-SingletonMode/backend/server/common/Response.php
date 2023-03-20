<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');

class Response
{
    static public function json($code=0,$message=0,$content=[])
    {
        $response=
        [
            "code"=>$code,
            "message"=>$message,
            "content"=>$content
        ];
        exit(json_encode($response,JSON_UNESCAPED_UNICODE));
    }
}