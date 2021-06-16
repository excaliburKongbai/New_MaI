<?php
namespace app\index\controller;

use think\Controller;

use think\Db;

use think\Cache;

use think\Session;

use think\Cookie;

class Cach extends Controller
{
    //缓存
    public function index(){
        //从数据库中获取数据
            $data = Db::table('user')->select();
        
        //设置缓存
            // dump(Cache::set('UserData',$data,200));
            //如果只有两个参数默认永久(time:秒)

        //助手函数
            // dump(cache('data',$data,200));

        //读取缓存
            //普通
                // dump(Cache::get('UserData'));
            //助手函数
                // dump(cache('UserData'));

        //删除缓存
            // dump(Cache::rm('UserData'));
            //或
                dump(cache('UserData',NULL));

    }

    //设置Session
    public function setsession(){
        //设置session
        dump(Session::set('name','云之梦'));
    }

    //获取session
    public function getsession(){
        dump(Session::get('name'));

    }

    //设置Cookie
    public function setCookie(){
        Cookie::set('name','Maid',50);
        //助手
        Cookie('age',25,50);
    }

    //获取Cookie
    public function getCookie(){
        echo Cookie::get('name');
        //助手
        echo Cookie('age');
    }

}


?>