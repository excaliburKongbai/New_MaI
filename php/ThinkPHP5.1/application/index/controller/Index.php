<?php
namespace app\index\controller;

//引入系统的数据库类
use think\Db;
//引入系统的控制器类
use think\Controller;
use think\facade\Env;

class Index extends Controller
{
    //初始化
    protected function initialize()
    {
        parent::initialize();
        echo '初始化成功<hr/>';
    }
    public function index()
    {
        //从数据库获取数据
        $data=Db::table('user')->select();
        var_dump($data);

       //分配数据给页面
       $this->assign('data',$data);

        //加载页面
        return view();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
    public function User(){
        //调用知己
        return'我是用户自己创键的';
    }
    public function diaoyong(){
        // 跨控制器调用
        $model = controller('User');
        echo $model->Index();
    }

    public function diaoyongs(){
        // 系统方法跨控制器调用
        echo action('admin/Index/index');
    }
     //读取配置
    public function getConfig(){
        //通过系统函数读取配置
        echo config('name.');
        echo "<hr>";
        //通过系统类读取配置
        echo \think\facade\Config::get("name.");
        echo "<hr>";
        //通过系统函数打印app配
        echo config('app_name');
        echo "<hr>";
        //读取database扩展配置
        dump(config('database.'));
        echo "<hr>";
        //======获取模块配置=====
        dump(config('admin/config'));
        echo "<hr>";
        //======5.1获取配置地址=====
        echo  Env::get('config_path');
    }
}
