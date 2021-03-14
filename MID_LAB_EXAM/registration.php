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

<html>
<head>
     
    <title>registration</title>
</head>
<body>
    
        <legend><b><h1>REGISTRATION</h1></b></legend>
        <table>
          <tr>
            <td>ID:</td>
            <td><input type="text" name="id" value=""></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input type="password" name="password" value=""></td>
          </tr>
          <tr>
            <td>Confirm Password:</td>
            <td><input type="cpassword" name="cpassword" value=""></td>
          </tr>
          <tr>
            <td>Name:</td>
            <td><input type="name" name="name" value=""></td>
          </tr>
          <br>
         

        </table>
      <hr style="width:25%;text-align:left;margin-left:0">
            <input type="checkbox" name="checkbox" value="checkbox" >User Type
        <br>
        <br>
        <input type="Signup" name="signup" value="signup"> 
        <a href='./D_Forgot_Password.php'><u>SignIn</u></a>
        
      
</body>
</html>