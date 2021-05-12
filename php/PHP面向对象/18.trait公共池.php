<?php
    //声明trait公共类
    trait Go{
        public $name = 'Tom go!';
        public function display(){
            echo $this->name;
        }
    }
    trait Eat{
        public $name1 = 'Eat';
        public function display(){
            echo $this->name1;
        }
    }
    //类里调用
        class Human{
        use Go;
    }
    //实例化
        // $s = new Human;
        // $s->display();

    //多重trait
        class woman{
            //调用有相同名字的方法(变量不能相同)
            use go,eat{
                go::display insteadof eat; //单用这一行调用的是GO
                eat::display as displayS;
            }
        }
    //实例化多重trait
        // $w = new woman;
        // $w->display();
        // $w->displayS();
    

    //声明保护的trait
    trait goTou{
        public $name1 = 'Eat';
        protected function display(){
            echo $this->name1;
        }
    }    


    //修改trait权限
        class Man{
            use goTou{
                display as public show;
                //本质是创建一个新的方法
            }
        }
    //实例化修改trait权限的类
        $m = new Man;
        $m->show();
        $m->display();


    






?>