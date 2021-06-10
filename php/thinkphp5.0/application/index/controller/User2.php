<?php
namespace app\index\controller;

use think\Db;

class User2
{
    public function index(){
        //tp查询数据
            //table
                //查询所有数据
                    // $data = Db::table("user")->select();
                
                //查询一条数据
                    // $data = Db::table("user")->find()

            //name
                //用name作为查询会自动添加配置文件的表前缀
                //用name查询所有数据
                    // $data = Db::name("user")->select();
                //用neme查询单条数据
                    // $data = Db::name("user")->find();

            //助手函数查询db()
                //查找所有数据·
                    // $data = db("user")->select();
                //查询单条
                    // $data = db("user")->find();
            
            //where条件匹配查询
                //等比查询
                    // $data = Db::table("user")->where('id','1')->select();
                //比较查询
                    // $data = Db::table("user")->where('id','<=','3')->select();
                //比较限制查询
                    // $data = Db::table("user")->where('id','<=',5)->where('id','>=','2')->select();
                //模糊查询
                    // $data = Db::table("user")->where('my_name','like','%e%')->select();
                //字符串查询
                    // $data = Db::table("user")->where("id >= 3 and id <= 5 ")->select();
                //数组查询
                    // $data = Db::table("user")->where(["id"=>['<=',3],'my_name'=>['like','%e%']])->select();
                //数组单字段多重查询
                    // $data = Db::table("user")->where(["id"=>['>=',3]])->where(["id"=>['<=',5]])->select();
                
            //whereOr  或者匹配
                //或者匹配
                    // $data = Db::table("user")->where("id",'<=','5')->whereOr('id','>=','5')->select();
                //或者模糊匹配
                    // $data = Db::table("user")->where("my_name",'like','%e%')->whereOr("my_name",'like','%M%')->select();
            
            //limit 截取数据
                //截取指定条数
                    // $data = Db::table("user")->limit(5)->select();
                //截取5条数数据从第5条后面开始(6开始)
                    // $data = Db::table("user")->limit(5,5)->select();

            //Order 排序
                //升排序
                    // $data = Db::table("user")->order('id')->select();
                //降排序
                    // $data = Db::table("user")->order('id','desc')->select();

            //field查询指定字段
                //查找指定字段
                    // $data = Db::table("user")->field("my_name,my_pass")->select(); 
                    // $data = Db::table("user")->field(["my_name","my_pass"])->select(); 
                
                //声明别名
                    // $data = Db::table("user")->field("my_name name,my_pass pass")->select(); 
                    // $data = Db::table("user")->field(["my_name"=>'name',"my_pass"=>'pass'])->select(); 
                
                //sql系统函数(计算数据库有多少条数据)
                    // $data = Db::table("user")->field("count(*) as tot")->select();
                    // $data = Db::table("user")->field(["count(*)"=>"tot"])->select();

                //排除字段
                    // $data = Db::table("user")->field("my_name,my_pass",true)->select(); 
                    // $data = Db::table("user")->field(["my_name","my_pass"],true)->select(); 

            //page 页码计算方法(实现分页)
                //1参：是页数自动计算数据段
                //2参：是显示数据的行数
                    // $data = Db::table("user")->page('1,5')->select();

            //group分组聚合
                //统计相同的数量
                    // $data = Db::table("user")->field("my_pass,count(*) as tot")->group("my_pass")->select();
                    //选择表 选择显示数据 选择聚合字段 输出
            
            //having对分组聚合的数据进行过滤(只能结合group分组使用)
                // $data = Db::table("user")->field("my_pass,count(*) as tot")->group("my_pass")->having('tot >= 1')->select();

        //多表查询
                // $data = Db::query("select goods.*,type.name as type_name from type,goods where type.id = goods.cid");

            //系统方法join
                //内连实现数据库连接(默认)
                    // $data = Db::table("goods")->field("goods.*,type.name as type_name")->join("type","type.id=goods.cid")->select();
                //右连接
                    // $data = Db::table("goods")->field("goods.*,type.name as type_name ")->join("type","type.id = goods.cid","right")->select();
                //左连接
                    // $data = Db::table("goods")->field("goods.*,type.name as type_name ")->join("type","type.id = goods.cid","left")->select();

            //别名
                // $data = Db::table("goods")->alias('g')->field("g.*,t.name as type_name")->join("type t","t.id=g.cid")->select();

            //union集合
                //$data = Db::field("my_name")->table("user")->union("select name from `goods`")->select();

            //bind绑定参数
                //尽量不要用原生sql,容易给sql注入,尽量使用系统函数
                    // $id = input("id");
                    // $data = Db::table("goods")->where("id",":id")->bind(["id"=>[$id,\PDO::PARAM_INT]])->delete();

            //统计数据
                //最大值
                    // $data = Db::table("goods")->max('price');
                //最小值
                    // $data = Db::table("goods")->min('price');
                //平均值
                    // $data = Db::table("goods")->avg('price');
                //和
                    // $data = Db::table("goods")->sum('price');
                //统计有多少条数据
                    // $data = Db::table("goods")->sum('id');

                


        //打印数据
            echo Db::getLastsql();
            dump($data);

                
    }

    //增加操作
    public function insert(){
        //数组中的字段名一定要与数据库的字段名一致(默认返回影响行数)
        //单条数组插入
                $data =[
                    'my_name'=>'张三',
                    'my_pass'=>'123',
                    'age'=>18,
                ];
            //执行插入
                // $code = Db::table('user')->insert($data);
            
            //db助手插入(都一样)
                // $code =  db('user')->insert($data);

        //多条数组插入
                $data =[
                    [
                        'my_name'=>'李三',
                        'my_pass'=>'123',
                        'age'=>19,
                    ],
                    [
                        'my_name'=>'王五',
                        'my_pass'=>'124',
                        'age'=>24,
                    ]
                ];
            //插入多条数据
                // $code = Db::table('user')->insertAll($data);

        //获取最后插入的id
            $data =[
                'my_name'=>'贼六',
                'my_pass'=>'123',
                'age'=>18,
            ];
            // $code = Db::table('user')->insertGetId($data);
                //返回最后插入的id
 
        //打印返回结构钢
            echo $code;
    }


    //更新数据
    public function update(){
        //修改数据update
                // $code = Db::table("user")->where('id < 10')->update(['age'=>1]);
            
            //修改一个值setField
                // $code = Db::table("user")->where('id', 11)->setField(['my_pass'=>'abc']);
        
        //实现自增加setInc
            //1参字段名 || 2参 增或减的数量
            // $code = DB::table("user")->where('id',1)->setInc("age",2);
        
        //实现自减setDec
            // $code = DB::table("user")->where('id',13)->setDec("age",1);
        
        //助手函数(都一样)
            // $code = db('user')->where('id',1)->setInc("age",2);
        
        //删除数据
            //删除一条
                // $code = Db::table("user")->where("id","14")->delete();
            //删除多条
                // $code = Db::table('user')->where("id in(10,11,12,13)")->delete();
                // $code = Db::table('user')->delete([15,16,17,18]);

            //删除区间数据
            // $code = Db::table('user')->where("id >= 19 and id <= 21")->delete();

        //打印返回值
            echo $code;
    }

    //事务
        //前置引擎要基于lnnoDB
        public function shiwu()
        {
            //自动事务
                // Db::transaction(function(){
                //     //删除一条数据
                //         Db::table("user")->delete(23);
                //     //删除一条错误的数据触发回滚
                //         Db::table("user")->delete();
                // });
            
            //手动事务 
                 //开启事务
                    //  Db::startTrans();
                 //执行事务
                    //  try{
                    //      //删除正确
                    //      $a = Db::table("user")->delete(24);
                    //      //判断是否删除成功
                    //      if(!$a){
                    //          //抛出异常 
                    //          throw new \Exception('删除第一条数据出错');
                    //      }

                    //      //删除错误
                    //      $b = Db::table("user")->delete();
                    //      //判断是否删除成功
                    //      if(!$b){
                    //          //抛出异常
                    //          throw new \Exception('删除第二条数据出错');
                    //      }

                    //      //执行提交操作
                    //      Db::commit();
                    //      echo "删除成功";
                    //  }catch(\Exception $e){
                    //      //回滚事务
                    //      Db::rollback();
                    //      //打印错误信息
                    //      dump($e->getMessage());
                    //  }
            
            //简单手动控制
                //开启事务
                    Db::startTrans();
                
                //删除数据1
                    $a = Db::table('user')->delete(24);
                //删除数据2
                    $b = Db::table('user')->delete(55);

                //判断是否执行成功
                    if($a && $b){
                        //提交数据
                        Db::commit();
                    }else{
                        //回滚
                        Db::rollback();
                    }
        
        }

        //视图查询
            public function views(){
                Db::view("goods","id,name,price")
					->view("type",'name tname',"type.id=goods.cid")
					->select();

                echo Db::getastSql();
                dump($data);
            }



}




?>