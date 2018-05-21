<?php 

$num_arr= 	[1,2,5,6,3,4,0,7,11,9,13,10,14,15,8];
echo"<pre>";print_r($num_arr);

$min 	=	array();
$max	=	array();

for($i=0;$i<=count($num_arr);$i++){
	if(($num_arr[$i]<$num_arr[$i-1]) && ($num_arr[$i]<$num_arr[$i+1])){
		if($num_arr[$i+1]!='' && $num_arr[$i-1]!=''){
			$min[] = $num_arr[$i];
		}
	}
	if(($num_arr[$i]>$num_arr[$i-1]) && ($num_arr[$i]>$num_arr[$i+1])){
		if(isset($num_arr[$i+1]) && isset($num_arr[$i-1])){
			$max[] = $num_arr[$i];
		}
	}
}

echo"<pre>";print_r($min);
echo"<pre>";print_r($max);

?>
