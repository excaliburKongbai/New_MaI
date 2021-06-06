<?php
namespace app\index\controller;

use think\Controller;

use think\Request;

class Login extends Controller{
    public function index(){
        //跳转页面
        return view();
    }
    public function check(){
        
        //提交后
        if($_POST['username']=='admin' && $_POST['password'] =='123'){
            $this->success('跳转成功',url('index/login/dumpdata'));
        }else{
            $this->error('密码错误');
        }
    }
    public function dumpdata(){
       return '登录成功';
    }

    //过滤数据
    public function reg(){
        return view();
    }
    //获取并且过滤数据
    public function guolv(Request $request){
        //输出传入的变量
            //dump( $request->post());

        //过滤传入的值,转换实体(防止SQL注入)
            // $request->filter('htmlspecialchars');
            // dump( $request->post());

        //过滤传入的值,单双引号(防止错误)
            $request->filter('strip_tags');
            // dump( $request->post());

        //转换<和单双引号
            $request->filter(['htmlspecialchars','strip_tags']);
            // dump( $request->post());
        
        //指定值进行过滤
            dump($request->post('text','','htmlspecialchars'));

        //输入内容进行MD5加密
            dump($request->post('text','','htmlspecialchars,md5'));
        
        //只输出指定内容
            dump($request->only('Title','GET'));   
        
        //排除掉指定内容
            dump($request->except('Title','GET'));   
        }

        public function Type(Request $request){
            dump($request->isGet());
        }
}



?>