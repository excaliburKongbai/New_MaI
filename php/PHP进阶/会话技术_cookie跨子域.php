<?php
    //COOKIE跨子域

    //访问
    echo '<pre>';
    var_dump($_COOKIE);

    //设定一个本地域名的COOKIE
    setcookie('loli','yaozi',0,'/');

    //设定一个允许子域名访问的COOKIE
     $is_a=setcookie('newloli','newloli',0,'/',"newmal.xyz");
     var_dump($is_a);
?>