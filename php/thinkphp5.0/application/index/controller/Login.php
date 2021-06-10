<?php
namespace app\index\controller;

use think\Controller;

use think\Request;

use think\Db;

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
        
        //绑定参数
        public function bangdin($id='null',$name='null'){
            dump($id);
            dump($name);
        }

        //MySQL查询数据
        public function data(){
            //实例化数据库类(配置方法连接)
                // $Db = new Db;

            //tp查询数据
                // $data = $Db::table('my_message')->select();
                // dump($data);

            //sql查询数据
                // $data = $Db::query('select * from `user`');
                // dump($data);

            //方法连接数据库
                // $Db = Db::connect([
                //   // 数据库类型
                //      'type'        => 'mysql',
                //      // 数据库连接DSN配置
                //      'dsn'         => '',
                //      // 服务器地址
                //      'hostname'    => '127.0.0.1',
                //      // 数据库名
                //      'database'    => 'my_date',
                //      // 数据库用户名
                //      'username'    => 'root',
                //      // 数据库密码
                //      'password'    => 'root',
                //      // 数据库连接端口
                //      'hostport'    => '',
                //      // 数据库连接参数
                //      'params'      => [],
                //      // 数据库编码默认采用utf8
                //      'charset'     => 'utf8',
                //      // 数据库表前缀
                //      'prefix'      => 'think_',
                // ]);
                // $data = $Db->table('my_message')->select();
                // dump($data);

                //字符串连接
                // 数据库类型://用户名:密码@数据库地址:数据库端口/数据库名#字符集
                    $Db = Db::connect("mysql://root:root@127.0.0.1:3306/my_date#utf8");
                    $data = $Db->table('my_message')->select();
                    dump($data);

        }
        //模型连接数据库
        public function data2(){
            $user = new \app\index\model\User();
            //查询所有数据
            $Db = $user::all();
            dump($Db);
        }

}



?>