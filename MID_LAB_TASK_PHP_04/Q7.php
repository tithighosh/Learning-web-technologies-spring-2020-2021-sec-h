<b>Question 7<br></b>
<i>
  Print the following shapes.<br>
  Hints: use LOOP, IF-ELSE & ARRAY
</i>
<br>
<br> 
<?php 
echo "Shape 1"."<br/>";
function pypart($n) 
{ 
      
    for ($i = 0; $i < $n; $i++) 
    { 
          
        
        for($j = 0; $j <= $i; $j++ ) 
        { 
              
            echo " * "; 
        } 
  
        
        echo "<br/>";   
    } 
} 
  
    $n = 3; 
    pypart($n); 
?>

<?php
echo "Shape 2"."<br/>"; 
for ($i=3; $i<=3; $i--) 
{  
for($j=1;$j<=$i;$j++)   
{     
echo $j." ";   
}     
echo "<br/>";     
}  
?> 



