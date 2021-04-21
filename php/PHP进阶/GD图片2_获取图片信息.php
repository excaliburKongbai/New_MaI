<?php
    //获取图片信息 
    
    //定义图片
    $image= 'D:\New_MaI\img\小孩子不能看.jpg';

    //打开图片资源  
    $img = imagecreatefromjpeg($image);

    //获取图片信息
        // echo imagesx($img);//宽
        // echo imagesy($img);//高
    //获取图片全部信息
        echo "<pre>";
        $info=getimagesize($image);
        print_r($info);

?>