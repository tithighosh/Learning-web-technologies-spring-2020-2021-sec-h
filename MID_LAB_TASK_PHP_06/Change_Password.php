<?php

	if(isset($_POST['submit']))
	{

		$cpassword = $_POST['cpassword'];
    $npassword =$_POST['npassword'];
    $rpassword = $_POST['rpassword'];

		if($cpassword == "" and $npassword == "" and $rpassword == "")
    {
			echo "Null submission";
    }
    elseif($cpassword != $npassword and $npassword == $rpassword)
    {
		 	echo "Password is successfully changed";
		}
    else 
    {
      echo "Invalid Password";
    }
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ChangePassword</title>
  </head>
  <body>
    <form method="post" action="">
      <fieldset>
        <legend><b>CHANGE PASSWORD</b></legend>
        <table>
          <tr>
            <td>Current Password: </td>
            <td><input type="password" name="cpassword" value=""></td>
          </tr>
          <tr>
            <td>New Password:</td>
            <td><input type="password" name="npassword" value=""></td>
          </tr>

           <tr>
            <td>Retype New Password:</td>
            <td><input type="password" name="rpassword" value=""></td>
          </tr>

          <br>
            

        </table>
      <hr style="width:25%;text-align:left;margin-left:0">
         <input type="submit" name="submit" value="Submit"> 
        
      </fieldset>
    </form>
  </body>
</html>