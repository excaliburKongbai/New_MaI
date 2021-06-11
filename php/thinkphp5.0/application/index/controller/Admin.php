<?php
namespace app\index\controller;

//引入模型
use \app\index\model\Admin as User;

//引入loader类
use think\Loader;

class admin
{   
    public function index(){
        return "模型控制器";
    }
    //实例化数据模型与数据表名一致的
    public function type(){
        $type = new \app\index\model\type;
        
        dump($type::get(1)->toArray());
    }

    //实例化数据模型与数据表名不致的
    public function user(){
        //实例化模型
            $user = new \app\index\model\Admin;
        
        //实例化方式
            //实例化调用
                //$res = dump($user::get(1)->toArray());
            
            //静态方法调用
                // $res =dump(user::get(1)->toArray());
            
            //loader方法调用
                // $users = Loader::model("type");
                // $res = $users::get(1);
                // dump($res->toArray());

            //助手函数
                // $uesr = model("user");
                // $res = $user::get(1);
                // dump($res->toArray());

            //打印数据
                // dump($res->toArray());

        //读取单条数据
            //get方法
                // $res = User::get(1);//找主键
                // $res = User::get(["age"=>"20"]);//找指定的数据

            //闭包方法
                // $res = User::get(function($query){
                //     $query->where("age",20);
                // });

            //fing方法
                // $res = User::where("age",25)->find();
            
            //打印单条数据
                // dump($res->toArray());

        //读取多条数据
            //查询全部数据all
                $res = User::all();
            
                //查询主键(id)
                $res = User::all("1,3");

                //数组查询
                $res = User::all(['2','3']);

                //数组指定条件
                $res = User::all(["age"=>25]);

                //闭包
                $res = User::all(function($query){
                    $query->where("password",123)
                        ->whereOr("name",'Ex_maid')
                        ->order('id',"desc");
                        //对数据进行排序
                });
            //查询所有数据select 和all方法基本类似
                $res = User::select();

                //截取数据
                $res = User::limit(2)->select();


                    
            //打印多条数据
                foreach ($res as $key => $value) {
                    dump($value->toArray());
                }
        
        //读取多条数据
    }

    //查询并且获取值    

    public function getValue(){
        //获取单个字段(只能一个)
            $res = user::where("id",5)->value('name');
            //匹配的数据-----value('要输出的字段');
        
        //获取一列值(可以多带一个列,第二列的参数会变成数组下标)
            $res = user::column("name","id");

        dump($res);
    }

    //动态查询(用的少)查询匹配的第一条数据
    public function dong(){
        //getBy任意数据库字段
        $res = User::getByPassword("123");
        dump($res->toArray());
    }

    //增加操作
    public function add(){
        //实例化增加数据
            // //先实例化模型
                // $user = new User;
            // //设置值
            //     $user->name = "李四";
            //     $user->Password = "fwkt";
            //     $user->age = "18";
            // //提交数据
            //     dump($user->save());

        //通过data方法增加
            // $user->data([
            //     'name'=>'小明',
            //     'Password'=>'1234560',
            //     'age'=>14,
            // ]);
            //提交数据
            // dump($user->save());
        
        //实例化方法
            $user = new User([
                'name'=>'林北2',
                'Password'=>'1234560',
                'age'=>28,
                'sex'=>'1',
            ]);
            //提交数据 
            dump($user->allowField(true)->save());
                //allowField(true):屏蔽数据库中不存在的字段
                //allowField(['name','age']):可以限制写入的字段

        //获取自增的id
        echo $user->id;
    }
    
    //增加多条数据
    public function adds(){
        $user = new User;

        $list=[
            ['name'=>'李老师','Password'=>'245','age'=>'54'],
            ['name'=>'切嗣','Password'=>'1245','age'=>'44']
        ];
        $user->saveAll($list);
    }

    //删除
    public function delete(){ 
        //删除数据
            //获取数据再删除  
                // $user =User::get(['id'=>11]);
                // dump($user->delete());

            //唯一主键删除destroy(可以删除多条数据,例:"1,2,3")
                // $user= User::destroy(12);
                // dump($user);

            //删除指定条件
                // $user=User::destroy(['name'=>'切嗣']);
            
            //删除多个条件
                // $user=User::destroy(['Password'=>'fwkt','age'=>'18']);

            //闭包删除
                // $user = User::destroy(function($query){
                //     $query->where('name','like','%林北%');
                // });
                

            // echo $user;
            

            
    }

    //修改
    public function update(){
        //字段修改
            // $user =User::get(18);
            // $user->age=18;
            // $user->save();

        //数组修改
            // $user = new User;
            // $res = $user->save([
            //     'Password'=>'1314520',
            //     'age'=>26,
            // ],['id'=>17]);

        //修改数据(表单传值)
            //模拟表单传值
                // $_POST['name']='伞兵';
                // $_POST['Password']='sbyhlby';
                // $_POST['age']='26';
                // $_POST['sex']='nan';
                // $_POST['id']=5;

            //实例化
                // $user =new User;
            //过滤输入的字段,并且修改
                // $user->allowField(['name','Password','age'])
                // ->save($_POST,['id' => $_POST['id']]);

        //批量更新数据
            //声明数据
                $data= [
                    ['id'=>'13','name'=>'二哈',"Password"=>'1314520','age'=>'8'],
                    ['id'=>'15','name'=>'咖啡猫',"Password"=>'1314520','age'=>'12'],
                ];
            //实例化
                $user = new User;
            //更改数据
                $user->saveAll($data);
            
            

    }

    //聚合(统计数据)
    public function Statistical(){
        //查询全部数据
            $tot=User::count();
            dump($tot);

        //统计条件判断
            $tot = User::where('id > 3')->count();
            dump($tot);
        
        //统计最大值(最小/平均/求和 都一样)
            $max = User::max('age');
            dump($max);
    }

    //获取器获取性别
    public function getSex(){
        // //获取数据
        //     $user = User::get(['id',15]);
        // //经过模型获取器判断输出
        //     dump($user->toArray());
        // //不经过模型数据
        //     dump($user->getData());

    }

    //获取用户状态码
    public function getStatus(){
        $user = User::get(['id',3]);
        dump($user->toArray());
    }

    //修改器
    public function setPass(){
        //修改密码经过模型加密
        $user = new User;
        $res =$user->save(['Password'=>'1234'],['id'=>2]);
        dump($res);
    }

    //自动完成
        // 添加
        public function setAdd(){
            $user = new User;
            $res  = $user->save(['name'=>'宗','Password'=>'123','age'=>23,'sex'=>1]);
            dump($res);
        }

        //修改
        public function setSave(){
            $user = new User;
            $res  = $user->save(['name'=>'233','Password'=>'123','age'=>20,'sex'=>1],['id'=>20]);
            dump($res);
        }

    
    //软删除
        public function ruan(){
            //删除数据
                // $res = User::destroy(['id'=>19]);

            //查询数据
                // $res = User::get(['id'=>20]);
            dump($res);
        }
    


}


?>