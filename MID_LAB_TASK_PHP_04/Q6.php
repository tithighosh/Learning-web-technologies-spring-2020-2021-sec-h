<b>Question 6<br></b>
<i>
   Write a PHP script to search an element from an array.<br>
   Hints: use LOOP, IF-ELSE & ARRAY
</i>
<br>
<br> 

<?php
echo "array List : Red,Green,Blue"."<br />";
$a= array("1.RED"=>"red","2.GREEN"=>"green","3.BLUE"=>"blue");
echo array_search("blue",$a);
?>
