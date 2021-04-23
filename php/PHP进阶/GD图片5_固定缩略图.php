<?php
    //固定尺寸缩略图
    //获得原始图片
        $src_image='D:\New_MaI\img\小孩子不能看.jpg';
    //转换资源
        $src=imagecreatefromjpeg($src_image);

    //制作缩略图资源
        $dst=imagecreatetruecolor(150,100);


    //获取原图宽高
        $src_w=imagesx($src);
        $src_h=imagesy($src);


    //采样复制
        $res = imagecopyresampled($dst,$src,0,0,0,0,150,100,$src_w,$src_h);
        //var_dump($res);
    


    //打开略缩图
        header('Content-type:image/jpg');
        imagejpeg($dst);
    //保存
        //imagejpeg($dst,'D:\New_MaI\php\PHP进阶\略缩图.jpg');


    //销毁资源
        imagedestroy($src);
        imagedestroy($dst);
?>