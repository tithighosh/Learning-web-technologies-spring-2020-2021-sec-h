<?php
    if(isset($_POST['submit']))
      {

          $supported_image = array('jpg','jpeg','png');
      		$ext = strtolower(pathinfo($_POST['file'], PATHINFO_EXTENSION));
      		if (in_array($ext, $supported_image) === true)
      		  {
        			echo "Image is successfully Uploaded";
        		}
            else
        		{
        			     echo "Invalid Image";
        		}

      		
      		
        }
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
  </head>
  <body>
    <form  action="" method="">
      <fieldset>
        <legend><b>PROFILE PICTURE</b></legend>
        <img src="user.png" alt="" height="200" width="200">
        <br>
        <input type="file" name="file" value="">
        <hr style="width:25%;text-align:left;margin-left:0">
        <br>
        <input type="submit" name="submit" value="Submit">
      </fieldset>
    </form>
  </body>
</html>
