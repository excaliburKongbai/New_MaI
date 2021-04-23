<?php
    /**水印封装函数
     * @param1 string $src_image,图片路径
     * @param2 string $wat_image,水印路径
     * @param3 string $path,水印成片图存储路径
     * @param3 steing &$error,错误报告
     * @param5 int $position = 9 水印位置默认9 右下角 1-9依次排序 左上为1
     * @param6 int $pct = 20,透明度默认20,,
     * 
     */

    function watermark($src_image,$wat_image,$path,&$error,$position = 9,$pct = 20){
        //验证原图和水印存在
        if(!is_file($src_image)){
            echo $error = '原图不存在';
            return false;
        }
        if(!is_file($wat_image)){
            echo $error = '水印图不存在';
            return false;
        }
        //判断存储的位置
        if(!is_dir($path)){
            echo $error = '存储位置不存在';
            return false;
        }
        //获取图片信息并且判断是否符合规范
        $src_info= getimagesize($src_image);
        $wat_info=getimagesize($wat_image);
        //设置格式
        $allow=array(
                'image/pjpeg' =>'jpeg',
                'image/jpeg' =>'jpeg',
                'image/jpg' =>'jpeg',
                'image/png' =>'png'
        );
        if(!array_key_exists($src_info['mime'],$allow)){
            echo $error = '原图不是有效文件';
            return false;
        }
        if(!array_key_exists($wat_info['mime'],$allow,)){
            echo  $error = '水印图不是有效文件';
            return false;
        }
        //合并函数
        $src_open='imagecreatefrom'.$allow[$src_info['mime']];
        $wat_open='imagecreatefrom'.$allow[$wat_info['mime']];
        $src_save = 'image'.$allow[$src_info['mime']];
        //打开图片
        $src = $src_open($src_image);
        $wat = $wat_open($wat_image);
        //计算位置
        $srcrt_x = $srcrt_y = 0;
        switch($position){
            case 1:
                break;
            case 2;
                $srcrt_x = ($src_info[0] - $wat_info[0])/2;
                break;
            case 3;
                $srcrt_x = $src_info[0] - $wat_info[0];
                break;
            case 4;
                $srcrt_y = ($src_info[1] - $wat_info[1])/2;
                break;
            case 5;
                $srcrt_x = ($src_info[0] - $wat_info[0])/2;
                $srcrt_y = ($src_info[1] - $wat_info[1])/2;
                break;
            case 6;
                $srcrt_x = $src_info[0] - $wat_info[0];
                $srcrt_y = ($src_info[1] - $wat_info[1])/2;
                break;
            case 7:
                $srcrt_y = $src_info[1] - $wat_info[1];
                break;
            case 8:
                $srcrt_x = $src_info[0] - $wat_info[0];
                $srcrt_y = ($src_info[1] - $wat_info[1])/2;
                break;
            case 9:
                $srcrt_x = $src_info[0] - $wat_info[0];
                $srcrt_y = $src_info[1] - $wat_info[1];
                break;
        }
        //合并图层
         imagecopymerge($src,$wat,$srcrt_x,$srcrt_y,0,0,$wat_info[0],$wat_info[1],$pct);




        header('Content-type:'.$src_info['mime']);
        // return $src_save($src);
        return $src_save($src,$path.'\new_save.'.$allow[$src_info['mime']]);
    }

    $src_a="D:\New_MaI\img\小孩子不能看.jpg";
    $wat_a="D:\New_MaI\img\show.png";
    watermark($src_a,$wat_a,__DIR__,$error,9,50);
    

?>