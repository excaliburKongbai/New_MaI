<?php
    echo '<pre>';
    //PHP文件变成:操作

    //PHP5操作
    //读取文件
    // $file='D:\New_MaI\php\content.txt';
    // $content = @file_get_contents($file);
    // var_dump($content);

    //文件写入
    //声明时间
    $time=date('H:i:s');
    $file1='D:\New_MaI\php\content.txt';
    $text = 'hello world'.$time."\r\n";
    // $content1 = file_put_contents($file1,$text);
    // var_dump($content1);


    //PHP4操作
    //打开文件资源；确定操作模式
        // $f=fopen($file1,'a+');

        //读取
        //  $string=fread($f,100);
        //  echo $string;

        //写入
        //fwrite($f,$text);

        //关闭
        // fclose($f);

    //其他函数
        // 判断是否是文件
        // $string1 =is_file($file1);
        // var_dump($string1);
// ?>