<?php
function merge(&$arr, $l, $m, $r)
{
	$n1 = $m - $l + 1;
	$n2 = $r - $m;

	$L = array();
	$R = array();
	for ($i = 0; $i < $n1; $i++)
		$L[$i] = $arr[$l + $i];
	for ($j = 0; $j < $n2; $j++)
		$R[$j] = $arr[$m + 1 + $j];

	$i = 0; 
	$j = 0; 
	$k = $l; 
	while ($i < $n1 && $j < $n2) {
		if ($L[$i] <= $R[$j]) {
			$arr[$k] = $L[$i];
			$i++;
		}
		else {
			$arr[$k] = $R[$j];
			$j++;
		}
		$k++;
	}

	while ($i < $n1) {
		$arr[$k] = $L[$i];
		$i++;
		$k++;
	}

	while ($j < $n2) {
		$arr[$k] = $R[$j];
		$j++;
		$k++;
	}
}
function mergeSort(&$arr, $l, $r)
{
	if ($l < $r) {
		$m = $l + (int)(($r - $l) / 2);

		mergeSort($arr, $l, $m);
		mergeSort($arr, $m + 1, $r);

		merge($arr, $l, $m, $r);
	}
}

function printArray($A, $size)
{
	for ($i = 0; $i < $size; $i++)
		echo $A[$i]." ";
	echo "\n";
}

$arr = array(12, 11, 13, 5, 6, 7);
$arr_size = sizeof($arr);

echo "Given array is \n";
printArray($arr, $arr_size);

mergeSort($arr, 0, $arr_size - 1);

echo "\nSorted array is \n";
printArray($arr, $arr_size);
return 0;
?>
