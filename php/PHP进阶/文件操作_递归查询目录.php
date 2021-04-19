<?php
    //递归遍历文件夹
    
    //定义路径
    $dir = 'D:\New_MaI\php';
    $dir1 = 'D:\New_MaI\img';
   

    /**
     * 创建函数:能够访问指定目录下的所有文件，并判断是文件还是路径
     * @param1 string $dir,指定路径
     * @param2 int $lecel = 0,层级,默认顶层
     * 
    */
    function my_scandir($dir,$lecel = 0){
        //如果不是路径就结束(没有必要)
        if(!is_dir($dir))dir($dir,"<br>",exit);
        //读取全部路径信息,遍历输出
        $files = scandir($dir); 
        foreach($files as $file){
            //$file就是文件名
                echo str_repeat("&nbsp;&nbsp;&nbsp;&nbsp;",$lecel), $file,'<br>';
                
            //排除.和..
                if($file=='.'||$file=='..')continue;

            //构造路径
                $file_dir = $dir.'\\'.$file;
                // echo $file_dir.'<br>';
            
            //判断是否是路径
                if(is_dir($file_dir)){
                    //echo $file_dir.'<br>';
                    //递归点
                    my_scandir($file_dir,$lecel+1);
                }
        }
    } 
    my_scandir($dir);


?>