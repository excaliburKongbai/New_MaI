<?php
namespace app\index\controller;

use think\Controller;
use think\Image;

class Yzm extends Controller
{
    public function index(){
        return $this->fetch();
    }
    
    //验证数据
    public function check(){
        //输出用户输入的数据
        $code = input('post.code');

        //判验证码是否正确
        if(captcha_check($code)){
            echo"okokok";
        }else{
            echo "error";
        }
    }

    //图片修改
    public function img(){
        //读取图片
        $imges=Image::open('./img/a.jpg');
        // dump($imges);

        //获取图片基本信息
        dump($imges->width());
        dump($imges->height());
        dump($imges->type());
        dump($imges->size());
        dump($imges->mime());

        //图片裁剪(默认从顶点裁剪)
            // $imges->crop(300,300)->save("./img/cj.jpg");

        //设置裁剪位置(宽，高，裁剪起始宽，起始高)
            // dump($src=$imges->crop(300,300,100,100)->save("./img/cj2.jpg"));

        //图片缩放thumb
            // 1、默认等比缩放
                // $imges->thumb(300,300)->save('./img/sf.jpg');

        //图片翻转
            // $imges->flip()->save("./img/fz.jpg");

        //图片旋转
            // $imges->rotate()->save("./img/xz.jpg");

        //水印
            //图片水印
                // $imges->water("./img/log.jpg",9,50)->save('./img/sy.jpg');
            
            //文字水印
                $imges->text('十年磨一剑 - 为API开发设计的高性能框架',ROOT_PATH.'public/static/BOOKOS.ttf',20,'#ff8800')->save('./img/text_image.png');
            }


}


?>