<?php
    //PHP文件下载
    header('Content-type:text/html;charset=utf-8');
    //模拟遍历出要下载文件的地址
    $file='D:\New_MaI\img\loli.png';
    $name='loli.png';
    //指定转码
    //$file= iconv('gbk','utf-8', $file);

    //设置下载响应头
        header('Content-type:application/octem-stream');
        //以文件流传输
        header('Accept-ranges:bytes');
        //计算方式字节
        header('Content-disposition:attachment;filename='.$name);
        //以附件模式,声明名字
        header('Accept-length:'.filesize($file));
        //设置传输大小
    //输出文件
        //文件较小
            //echo file_get_contents($file);
        //文件较大,带宽拉胯,PHP4分段式读取
            $f=@fopen($file,'r') or die();
            //1)推荐
            // while($row =fread($f,1024)){//一次读取1024
            //    echo $row; //循环把数据全部分段输出
            // }
            //2)
            while(!feof($f)){//一次读取1024
                echo fread($f,1024); //循环把数据全部分段输出
            }
    //关f闭资源
        fclose($f);
        

?>