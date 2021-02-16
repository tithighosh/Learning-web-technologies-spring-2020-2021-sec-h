<b>Question 4<br></b>
<i>
	 Write a PHP script to find the largest number from three given numbers.<br>
	 Hints: use IF-ELSE 
</i>
<br>
<br> 

<?php
      $num1=30;
      $num2=15;
      $num3=80;
      if($num1>$num2 && $num1>$num3){
      	echo "Numbers Are: ".$num1.", ".$num2.", ".$num3."<br />";
        echo "Largest Number : ".$num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo  "Numbers Are: ".$num1.", ".$num2.", ".$num3."<br />";
          echo "Largest Number : ".$num2;
        }
        else
          echo  "Numbers Are: ".$num1.", ".$num2.", ".$num3."<br />";
          echo "Largest Number : ".$num3;
      }
?>