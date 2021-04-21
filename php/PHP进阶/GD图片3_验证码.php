<?php
    //制作验证码

    //创建验证码
        $img = imagecreatetruecolor(200,50);
    //添加背景色
        $bg_color = imagecolorallocate($img,200,200,200);
        imagefill($img,0,0,$bg_color);

    //获取随机文字
        $str='qwertyuiopasdfghjklzxcvbnm1234567890';
        //获取字符长度
        $len=strlen($str);
        //随机数
        // $rand= mt_rand(0,$len-1);
        //取出字符
        $char1 = substr($str,$rand= mt_rand(0,$len-1),1);
        $char2 = substr($str,$rand= mt_rand(0,$len-1),1);

     //干扰点
     for($i=0;$i<20;$i++){
        $line_color=imagecolorallocate($img,mt_rand(150,250),mt_rand(150,250),mt_rand(150,250));
        imageline($img,mt_rand(0,200),mt_rand(0,50),mt_rand(150,200),mt_rand(0,50),$line_color);
    }

    //写入干扰线
    for($i=0;$i<20;$i++){
        $dots_color=imagecolorallocate($img,mt_rand(150,250),mt_rand(150,250),mt_rand(150,250));
        imagestring($img,mt_rand(1,5),mt_rand(0,200),mt_rand(0,50),'*',$dots_color);
    }


    //写入文字
        $font='D:\New_MaI\php\abc.ttf';
        $str_color = imagecolorallocate($img,100,100,100);
        imagettftext($img,mt_rand(15,30),mt_rand(-15,25),mt_rand(40,60),mt_rand(25,30),$str_color, $font,$char1);
        imagettftext($img,mt_rand(15,30),mt_rand(-15,25),mt_rand(60,100),mt_rand(40,45),$str_color, $font,$char2);

    //输出资源
        header('Content-type:image/png');
        imagepng($img);
    //销毁资源
        imagedestroy($img);
        
?>