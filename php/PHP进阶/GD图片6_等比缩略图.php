<?php
    //等比略缩图

    //获取图片信息
        $src_image = 'D:\New_MaI\img\小孩子不能看.jpg';
        $src_info = getimagesize($src_image);

    //获取原图资源
        $src = imagecreatefromjpeg($src_image);
    
    //制作略缩图图片资源
        $dat = imagecreatetruecolor(100,100);
        $dat_color=imagecolorallocate($dat,255,255,255);
        imagefill($dat,0,0,$dat_color);

    //略缩图宽高
        $thumb_x = $thumb_y = 0;  //宽高
        $start_x = $start_y = 0;  //图片开始位置
 


    //计算缩略图从原图采样宽高比(略缩图是宽还是高填满)
        $thumb_b = 100 / 100;
        $src_b = $src_info[0] / $src_info[1];
        //比较
            if($thumb_b>=$src_b){
                // 略缩图宽高比原图大
                $thumb_y = 100;
                $thumb_x = floor($src_b  *  $thumb_y);
                //宽度需要调整(居中)
                $start_x = floor((100 - $thumb_x)/2);
            }else{
                //略缩图宽高比原图小
                $thumb_x = 100;
                $thumb_y = floor($thumb_x / $src_b);
                //宽度需要调整(居中)
                $start_y = floor((100 - $thumb_y)/2);
            }
    //采样复制
        $res = imagecopyresampled($dat,$src,$start_x,$start_y,0,0,$thumb_x,$thumb_y,$src_info[0],$src_info[1]);
    
        
    //打开略缩图
        header('Content-type:image/jpg');
        imagejpeg($dat);
    //保存
        //imagejpeg($dst,'D:\New_MaI\php\PHP进阶\略缩图.jpg');


    //销毁资源
        imagedestroy($src);
        imagedestroy($dat);


?>