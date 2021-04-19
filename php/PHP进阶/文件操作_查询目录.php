<?php
    header('Content-type:text/html;charset=utf-8');
    echo"<pre>";
    //目录操作
    
    //创建目录
    // $res = mkdir('a23334586');
    // var_dump($res);

    //删除目录
    // $res1 = rmdir('a23334586');
    // var_dump($res);

    //读取目录
    $r = opendir('D:\New_MaI\php\入门PHP');
    var_dump($a);
    //读取资源(全部遍历)
    while($file=readdir($r)){
         echo $file,'<br>';
    };
    
    closedir($r);

    //其他函数
    //获取上一级目录
     $dir1="D:\New_MaI\php\入门PHP\测试";
    $dir2="D:\New_MaI\php\入门PHP\错误警告级别.jpg";
    var_dump(dirname($dir1),dirname($dir2));
    //真实路径
    var_dump(realpath($dir1),realpath($dir2));
    //判断路径
    var_dump(is_dir($dir1),is_dir($dir2));

    //scandir一件全部获取
    $dir3="D:\New_MaI\php\入门PHP";
    $r3=scandir($dir3);
    var_dump($r3);
    
?>