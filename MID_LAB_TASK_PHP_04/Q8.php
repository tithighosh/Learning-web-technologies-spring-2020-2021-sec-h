<b>Question 8<br></b>
<?php
	echo "The array to declare";
	echo "<br>";

	$array=[
		[1,2,3,'A'],
		[1,2,'B','C'],
		[1,'D','E','F']
	];

	echo $array[0][0]." ".$array[0][1]." ".$array[0][2]." ".$array[0][3];
	echo "<br>";
	echo $array[1][0]." ".$array[1][1]." ".$array[1][2]." ".$array[1][3];
	echo "<br>";
	echo $array[2][0]." ".$array[2][1]." ".$array[2][2]." ".$array[2][3];

	echo "<br>";
	echo "Sheaps to print";
	echo "<br>";

	$array=[
		[1,2,3],
		[1,2],
		[1]
	];

	echo $array[0][0]." ".$array[0][1]." ".$array[0][2];
	echo "<br>";
	echo $array[1][0]." ".$array[1][1];
	echo "<br>";
	echo $array[2][0];

	echo "<br>";
	echo "&";
	echo "<br>";

	$array=[
		['A'],
		['B','C',],
		['D','E','F']
	];

	echo $array[0][0];
	echo "<br>";
	echo $array[1][0]." ".$array[1][1];
	echo "<br>";
	echo$array[2][0]." ".$array[2][1]." ".$array[2][2];
?>
