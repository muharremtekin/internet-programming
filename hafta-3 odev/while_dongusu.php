<?php 


$numbers = [20,23,11,23,44,545,6565];
$numberCount = Count($numbers);

$i = 0;

while($i < $numbersCount)
{
	echo $numbers[$i];
	echo "<br \>";
	if($numbers[$i] % 2 == 0)
	{
		echo "Sayi tek";
	}else{
		echo "sayi cift";
	}
	echo "<br \>";
	$i = $i + 1;

}



?>