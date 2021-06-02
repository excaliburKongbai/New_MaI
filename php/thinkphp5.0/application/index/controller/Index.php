<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    //前置方法
    protected $beforeActionList = [
        'first'  =>  ['only'=>'hello'],
    ];
    protected function first()
    {
        echo 'first<br/>';
    }
    public function hello()
    {
        return 'hello';
    }

    
    //跳转页面
    protected $flag = false;
        //设置默认值
    public function index(){
        // if($this->flag){
        //     $this->success('成功','../');
        // }else{
        //     $this->error('失败');
        // }
        return '主页';
    }

    //读取自定义环境配置
    public function getchangjing(){
        echo config('database.database');
        echo '<hr/>';
        echo config('database.password');
    } 

    //读取前台模块配
    public function getmokuai(){
        echo '<hr/>';
        dump(config('name'));
        echo '<hr/>';
        config('name','修改过的配置');
        dump(config('name'));
    }

    //读取环境变量配置 getEnv
    public function getEnv(){
        dump(\think\Env::get('name'));
        echo'<hr/>';
        //读取数组 只能单个属性读写
        dump(\think\Env::get('database.type'));
    }

    
}
