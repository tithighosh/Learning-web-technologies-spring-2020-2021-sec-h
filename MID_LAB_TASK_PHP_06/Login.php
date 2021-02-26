
<?php

	session_start();
	
    if(isset($_POST['submit']))
    {
        
    	

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "" || $password == "")
        {
        	echo "Null Submission";
        }
        else
        {
        	if (strlen($username)<3) 
        		{
        			echo "UserName must contain at least two (2) characters";        	
        		}
        	elseif (strlen($password)<8)

        		{

        			echo "Password must not be less than eight(8) characters";
        		}
        	

        	else
        	{
        		 	if (ord($username >= 97 && ord($username) <= 122) || (ord($username) >= 65 && ord($username) <= 90) || (ord($username) >= 48 && ord($username) <= 57) || ord($username == 39) || ord($username == 45) || ord($username == 95)) 

        		 	{
        		 		echo "<i>Submission Succefull</i></b><br>";
        		 		header('location: Login.html');
        		 	}

        		 	else
        		 	{
        		 		echo " User Name can contain alpha numeric characters, period,dash or underscore only";
        		 	}
        	}
        		
        }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form method="post" action="Login.php">
      <fieldset>
        <legend><b>LOGIN</b></legend>
        <table>
          <tr>
            <td>username:</td>
            <td><input type="text" name="username" value=""></td>
          </tr>
          <tr>
            <td>password:</td>
            <td><input type="password" name="password" value=""></td>
          </tr>

          <br>
            

        </table>
      <hr style="width:25%;text-align:left;margin-left:0">
            <input type="checkbox" name="checkbox" value="checkbox" >Remember Me
        <br>
        <br>
        <input type="submit" name="submit" value="Submit"> <u>Forgot Password?</u>
        
      </fieldset>
    </form>
  </body>
</html>