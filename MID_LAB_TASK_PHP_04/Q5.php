<b>Question 5<br></b>
<i>
   Write a PHP script to print all the odd numbers between 10 to 100 .<br>
   Hints: use LOOP & IF-ELSE 
</i>
<br>
<br> 

<?php
for ($var = 10; $var <= 100; $var+=1)
{
    if ($var % 2 != 0)
    echo "$var \n";
}
?>