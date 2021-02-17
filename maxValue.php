<?PHP

//从左往右的尝试模型2
//给定两个长度都为N的数组weights和values，weights[i]和values[i]
//分别代表i号物品的重量和价值。
//给定一个正数bag，表示一个载重bag的袋子，你装的物品不能超过这个
//重量。返回能装下最多的价值是多少？

//$weights 物品的重量
//$values 物品的价值
//$i 第i个物品
//$bag 袋子的载重
//$bag_value 袋子所装物品的总价值
function maxValue($weights=[],$values=[],$i=0,$bag=0,$bag_value=0){
    $len = count($weights);
    if($len==0)
       return 0;
    if($weights[$i]>$bag)
       return 0;

    foreach($weights as $key => $weight){
       if($weight<=$bag){
           $bag -= $weight;
           $bag_value += $values[$key];
       }
       else
           return $bag_value;
    }
}

$weights = [
	10,
	14,
	11,
	18,
	20,
	8,
	13
];
$values = [
        7,
	8,
	9,
	10,
        20,
	34,
	21
];
$bag = 50;
$bag_value = 0;
$res = maxValue($weights,$values,0,$bag,$bag_value);
print_r($res);

