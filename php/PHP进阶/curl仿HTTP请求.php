<?php
//1)开启curl会话
    $ch=curl_init();
    // var_dump($ch);
//2)设置curl传输设置
    // CURLOPT_URL:连接对象
        curl_setopt($ch,CURLOPT_URL,'newmal.xy/php/PHP进阶/setopt.php');//连接选项
    // CURLOPT_RETURNTRANSFER:将服务器(响应)执行结果以文件流的格式返回(php脚本)
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);//文件流返回(数据)不直接显示
    // CURLOPT_PORT:是否发起POST方式请求(默认GET)
    // CURLOPT_POSTFIELDS:用来传递数据[字符串/数组];
    // CURLOPT_HEADER:是否响应header信息(响应头)
        curl_setopt($ch,CURLOPT_HEADER,0);//是否响应文件头信息(不要)
// 3)执行请求:curl_exec():执行选项(与服务器发起请求)得到返回的数据
    $content=curl_exec($ch);
    echo $content;
// 4)关闭连接:curl_close():关闭资源
?>