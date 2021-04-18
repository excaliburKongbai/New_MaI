<?php 
//选着排序
$arr2=[2,5,6,7,12,96,4,9,66,17];
for($i =0,$len=count($arr2);$i<$len;$i++){
    //假设这个数是最小的
    $min=$i;
    //那最小的去比较
    for($j=$i+1;$j<$len;$j++){
        //比较
        if($arr2[$j]<$arr2[$min]){
            $min=$j;
        }
    }
    if($min!=$i){
        $temp=$arr2[$i];
        $arr2[$i]=$arr2[$min];
        $arr2[$min]=$temp;
    }
}

echo '<pre>';
print_r($arr2);
echo'<hr/>';

//查找算法
    $arr1=array(1,2,3,4,5,6,7,8,9,18,88,167,199);
    //顺序查找,挨个查找
    function check($arr1,$num){
        for($i = 0,$len = count($arr1);$i<$len;$i++){
            if($arr1[$i]==$num){
                return $i;
            }
        }
        return false;
    }
    var_dump(check($arr1,'88')) ;//输出key
//二叉查找
    //这玩意得正排序才能用
    //1得到边界
    $right = count($arr1);
    $left = 0;
    $res=3;
    //2循环匹配
    while($left<=$right){
        //3得到中间位置
        $middle=floor(($right+$left)/2);
        //4匹配得到的数据
        if($arr[$middle]==$res){
            echo $middle;
            break;
        }
        //没有找到
        if($arr[$middle]<$res){
            $left=$middle+1;
        }else{
            $right=$middle-1;
        }
    }    
?>