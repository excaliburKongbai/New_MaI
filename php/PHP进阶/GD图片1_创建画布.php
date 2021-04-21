<?php
    //声明HTML格式
    header('Content-type:image/png');

    //创建图片资源

    //创建一个真彩图片
        // imagecreatetruecolor(100,100) or dir('初始化失败');

    //打开一张图片
        // $img = @imagecreatefromgif("D:\New_MaI\img\小孩子不能看.jpg");
        // if(!$img){
            // exit('格式错误');
        // }

    //GD画布操作
    // 创建无色画布
        $img=imagecreatetruecolor(100,100);
    //分配颜色
        $bg_color=imagecolorallocate($img,255,0,0);//红
    //填充背景色
        imagefill($img,0,0,$bg_color);
    //制作直线
        $line_color=imagecolorallocate($img,0,255,0);
        imageLine($img,10,10,90,90,$line_color);
    //画矩形
        $rec_color=imagecolorallocate($img,0,0,255);
        imageRectangle($img,10,10,90,90,$rec_color);
    //画圆弧
        $arc_color=imagecolorallocate($img,0,0,0);
        imageArc($img,50,50,80,80,180,360,$arc_color);
    //画布写字
        // 1)imagestring英文
        $str_color = imagecolorallocate($img,100,100,100);
            imagestring($img,5,20,20,'abc',$str_color);
        //2)imageTtrText中文
            $ch_color = imagecolorallocate($img,50,50,50);
            imageTtfText($img,30,45,50,50,$ch_color,'D:\New_MaI\php\abc.ttf','猎鹰');
    //输出\保存画布
        $time=date('H');
        imagepng($img,'D:/New_MaI/php/PHP进阶/my'.$time.'.png');
        //输出浏览器
        imagepng($img);

    //销毁画布
    imagedestroy($img);
?>