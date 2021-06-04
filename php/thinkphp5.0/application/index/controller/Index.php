<?php
namespace app\index\controller;

use think\Controller;
use think\helper\Arr;

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

    //带参数的路由
    public function sourse(){
        echo input('id');
    }
    //多个参数的路由
    public function sourses(){
        echo input('id').' '.input('age');
        //打印全部传入的值
        dump(input());
    }
    //动态路由
    public function dongtai(){
        echo input('a').' '.input('b');
    }
    //完全匹配路由
    public function test1(){
        echo '我是测试方法test1';
    }
    //额外携带参数
    public function test2(){
        //打印携带的参数
        dump(input());
    }
    
    //请求类型
    public function type(){
         echo '测试传值方法';
        //  打印传入的值
            dump(input());
        // 模拟请求get请求
            return view();
    }

    public function jiazai(){
        //系统函数渲染
            // return view();
        //系统控制器渲染
            return $this->fetch();
    }

    public function shuchu(){
        //输出数组
        $arr = array(
            'name'=>'Excalibur',
            'age'=>18,
        );
        // return json_encode($arr);
        return "<h3>233</h3>";
    }

}
