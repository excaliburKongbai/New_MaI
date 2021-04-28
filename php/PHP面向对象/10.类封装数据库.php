<?php
    header('Content-type:text/html;charser=UTF-8;');
    class Sql{
        private $host;    //主机
        private $port;    //端口
        private $user;    //用户名
        private $pass;    //密码
        private $dbname;  //数据库名字
        private $charset; //字符集
        
        //初始化构造函数
        public function __construct(array $info=array()){
            $this->host = $info['host'] ?? 'localhost';
            $this->port = $info['port'] ?? '3306';
            $this->user = $info['user'] ?? 'root';
            $this->pass = $info['pass'] ?? 'root';
            $this->dbname = $info['dbname'] ?? 'my_date';
            $this->charset = $info['charset'] ?? 'utf8';  
            //初始化的时候就调用数据库连接认证
            $this->Sql_connect();
            //初始化字符集
            $this->Sql_charset();
        }

        //数据库连接认证
        private $link;
        private function Sql_connect(){
            //利用mysqli初始化
            $this->link = @new Mysqli($this->host,$this->user,$this->pass,$this->dbname,$this->port);
            //验证连接是否成功
            if($this->link->connect_error){//如果存在错误就执行
                //connect_errno表示错误编号,connect_error表示错误信息
                die('错误编号(' .$this->link->connect_errno. ')'.$this->link->connect_error);
            }
        }
        //设定字符集
        private function Sql_charset(){
            //设置SQL
            $sql = 'ser names {$this->charset}';
            //执行sql语句
            $this->link->query($sql);
        }
        
        //写入方法
        public $affected_rows; //保存上次操作收到影响的行数
        public function Sql_exec($sql){
            //执行sql
            $res = $this->link->query($sql);
            //查看sql运行是否错误
            if(!$res){
                die('错误编号(' .$this->link->connect_errno. ')'.$this->link->connect_error);
            }
            //记录当前操作收到影响的航速
            $this->affected_rows = $this->link->affected_rows;

            //没问题返回结果
            return $res;
        }

        //获取添加完数据后的自增长id
        public function sql_last_id(){
            return $this->link->insert_id;
        }

        //查询方法
        public $num_rows;  //保存上次查询到的函数
        public function Sql_query($sql,$all = false){
            $res = $this->link->query($sql);
            //查看sql运行是否错误
            if(!$res){
                die('错误编号(' .$this->link->connect_errno. ')'.$this->link->connect_error);
            }
            //记录查询的行数
            $this->num_rows = $res->num_rows;

            //解析是一行返回还是全部
            if($all){
                //多行数据 
                return $res->fetch_all(MYSQLI_ASSOC);
            }else{
                //单行数据
                return $res->fetch_ASSOC();
            }
        }
    }
    //测试
        //实例化
        $s = new Sql();

        //查询测试
        $sql ='select * from my_message' ;
        $res = $s->Sql_query($sql);
        echo '<pre>';
        var_dump($res,true);
        echo '查询行数:'. $s->num_rows;




?>