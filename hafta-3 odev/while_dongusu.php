<?php 


$numbers = [20,23,11,23,44,545,6565];
$numberCount = Count($numbers);

$i = 0;

while($i < $numberCount)
{
	echo $numbers[$i];
	echo "<br \>";
	if($numbers[$i] % 2 == 0)
	{
		echo "Sayi cift";
	}else{
		echo "sayi tek";
	}
	echo "<br \>";
	$i = $i + 1;

}



?>