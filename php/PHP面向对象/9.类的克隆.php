<?php
    //创建对象
    class Seler{
        public $name;
        private  $moeny;

        //产生新的克隆时自动运行
        public function __clone(){
            //新克隆的对象会获得初始的10块钱
            $this->moeny = 10;
        }

        //禁止克隆(私有化)
        // private function __clone(){}
    }
    //实例化
    $s1 = new Seler();

    //克隆前赋值
    $s1->name = 'DoLy';

    //克隆对象
    $s2 = clone $s1;

    //验证被克隆
        // echo $s1===$s2? '一致' :'不一样';
    
    $s2->name = 'KaiLu';
    
    echo '<pre>';
    var_dump($s1,$s2);



?>