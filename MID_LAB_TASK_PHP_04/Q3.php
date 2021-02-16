<b>Question 3<br></b>
<i>
	Write a PHP script to find whether a given number is odd or even .<br>
	 Hints:use IF-ELSE
</i>
<br>
<br>

<html>  
<body>  
<form method="post">  
    Enter a number:  
    <input type="number" name="number">  
    <input type="submit" value="Submit">  
</form>  
</body>  
</html>  
<?php   
    if($_POST){  
        $number = $_POST["number"];   

        if(($number % 2) == 0)
        {  
            echo "$number is an Even number";  
        }
        else
        {  
            echo "$number is Odd number";  
        }  
    }  
?> 
