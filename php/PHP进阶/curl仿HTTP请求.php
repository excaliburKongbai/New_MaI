<?php
//开启curl会话
    $ch=curl_init();
    var_dump($ch);
//设置curl传输设置
    // CURLOPT_URL:连接对象
    // CURLOPT_RETURNTRANSFER:将服务器(响应)执行结果以文件流的格式返回(php脚本)
    // CURLOPT_PORT:是否发起POST方式请求(默认GET)
?>