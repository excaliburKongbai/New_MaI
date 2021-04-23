<?php
    //制作水印图
    //获取图片信息
        $src_image = 'D:\New_MaI\img\小孩子不能看.jpg';
        // $src_info = getimagesize($src_image);

    //获取原图资源
        $src = imagecreatefromjpeg($src_image);
        //数据
        $src_s=getimagesize($src_image);
        //图片水印
        $wat = imagecreatefromjpeg('D:\New_MaI\img\头像.jpg');
        //文字水印
        $txt='维他命社保';
    //合并水印和图层
        //图片水印
             imagecopymerge($src,$wat,0,0,0,0,$src_s[0],$src_s[1],50);
        //文字水印
            // $col = imagecolorallocatealpha($src,0,0,0,50);
            // imagestring($src,5,20,30,$txt,$col);

    header('Content-type:image/jpeg');
    imagepng($src);



?>