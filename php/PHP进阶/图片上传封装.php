<?php
 header('Content-type:text/html;charser=utf-8');
 echo'<pre>';
//  print_r($_FILES);
//  var_dump($_FILES);

// if(isset($_FILES['image']['name']) && is_array($_FILES['image']['name'])){
//     //声明储存数据的数组
//     $images = array();
//     foreach($_FILES['image']['name'] as $k => $file){
//         $images[]=array(
//             'name' => $file,
//             'type' =>$_FILES['image']['type'][$k],
//             'tmp_name' =>$_FILES['image']['tmp_name'][$k],
//             'error' =>$_FILES['image']['error'][$k],
//             'size' =>$_FILES['image']['size'][$k],
//         );
//     }
// }else{
//     echo '<script> alert("no")</script>';
// };
// print_r($images);
//同名name 文件复数获取

//封装文件上传函数

/**
 * 实现文件上传(单)
 * @param1 array $file，需要上传文件的信息，一维数组(name/tmp_name/error/size/type)
 * @param2 array $allow_type ,运行上传的数据类型(MIME类型)
 * @param3 string $path 储存的路径
 * @param4 string &$error 如果出现问题的原因
 * @param5 array $allow_format 运行上传的文件格式
 * @param6 int $max_size = 2000000 允许上传的最大值
*/

function upload_single($file,$allow_type,$path,&$error,$allow_format = array(),$max_size = 2000000){
    //判断文件是否有效
    if(!is_array($file) || !isset($file['error'])){
        $error = '不是有效文件';
        return false;
    }

    //判断文件路径是否有效
    if(!is_dir($path)){
        //路径不存在
        $error = '文件路径不存在';
        return false;
    }

    //判断文件上传过程是否出错
    switch($file['error']){
        case 1:
        case 2:
            $error = '文件超出服务器允许大小';
            return false;
        case 3:
            $error = '文件上传出现丢包';
            return false;
        case 4:
            $error = '用户没有选择要上传的文件';
            return false;
        case 6:
        case 7:
            $error = '文件路径/保存权限错误';
            return false;
    }

    //判断文件类型(MIME)
    //拿1值去匹配后面数组
    if(!in_array($file['type'],$allow_type)){
        $error = '当前文件类型不允许上传';
        return false;
    }

    //判断文件后缀名
    //取出后缀名
    $ext = ltrim(strrchr($file['name'],'.'),'.');
    //ltrim 去除左边的 '.'  strrchr[变量,'开始点'] 获取后缀名 
    if(!empty($allow_format) && !in_array($ext,$allow_format)){
        //判断条件不为空    和  判断文件和条件相符
        $error = '当前文件格式不允许上传';
        return false;
    }

    //判断文件大小是否符合
    if($file['size'] > $max_size){
        $error = '当前文件大小大于'. $$max_size/10000 . 'mb';
        return false;
    }

    //防止名字冲突生成随机名字
    $fullname=ltrim(strstr($file['type'],'/',FALSE),'/').date('Y-m-d').'_';
    //类型_年月日_随机字符.文件格式
    //产生随机字符串
    for($i=0;$i<=5;$i++){ 
        $fullname.= chr(mt_rand(65,90));
    }
    //拼接格式
    $fullname.= '.'.$ext;


    //移动到指定目录
    if(!is_uploaded_file($file['tmp_name'])){
        $error = '错误！不是上传文件';
        return false;
    }
    if(move_uploaded_file($file['tmp_name'],$path.'/'.$fullname)){
        return $fullname;
    }else{
        //移动失败
        $error = '移动失败';
        return false;
    }

}



//提供数据
$file=isset($_FILES['image'])?$_FILES['image']:''; //文件名
$allow_type=array('image/jpg','image/jpeg','image/pjpeg','image/gif','image/png');//格式
$path='D:\phpstudy_pro\WWW\yz.xyz\img';     //地址
$allow_format = array('jpg','gif','jpeg','png');
$max_size = 2000000;

//调用函数
if($fiename = upload_single($file,$allow_type,$path,$error,$allow_format,$max_size)){
    echo $fiename;
    
}else{
    echo $error;
}


?>