<?php

$arr = array(41,22,46,7,0,-2,-3,41,0,-17,-1);
$max = $arr[0];
for($t=0;$t<=9;$t++){
	if($max<$arr[$t]) {
		$max = $arr[$t];
	};
};
echo "Max" .$max

?>

<?php

echo "<br/>";
$arr = array(41,22,46,7,0,-2,-3,41,0,-17,-1);

for($i = 0, $sum = 0; $i < 10; $i++)
    if($arr[$i] > 0)
    	$sum += $arr[$i];
echo $sum

?>