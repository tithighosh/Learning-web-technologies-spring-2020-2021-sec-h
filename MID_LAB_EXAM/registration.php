<?php
  if(isset($_POST['submit']))
  {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $confirm_password =$_POST['confirm_password'];
        $dob = $_POST['Bob']


         if($name == "" && $email == "" && $username == "" && $password == ""  && $dd == "" && $mm == "" && $yyyy == ""){
          echo "null submission";
         }
        elseif( $password==$confirm_password)
        {
          echo "Successfully submitted";

        }
        else 
        {
          echo "Invalid";
        }

  }


?>

<html>
<head>
     
    <title>Registration</title>
</head>
<body>
    <fieldset>
        <table width='100%' >
            <tr>
            <td>
                    <img src="logo.png" alt="Italian Trulli" height='60px'>
                 
                </td> 
                <td align='right'>
                    <nav>
                        <a href='./home.php'>Home</a> |
                        <a href='./login.php'>Log In</a> |
                        <a href='./reg.php'>Registration</a>
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <br> <br><br>
        <label>
            <h1>
            <b>
                <form method="post" action="">
      <fieldset>
        <legend><b>REGISTRATION</b></legend>
        <table>
                      
            <tr>
              <td>Name</td>
              <td>:<input type="text" name="name" value=""></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:<input type="email" name="email" value=""></td>
            </tr>
            <tr>
              <td>User Name</td>
              <td>:<input type="text" name="username" value=""></td>
            </tr>
            <tr>
              <td>Password</td>
              <td>:<input type="password" name="password" value=""></td>
            </tr>
            <tr>
              <td>Confirm Password</td>
              <td>:<input type="password" name="confirm_password" value=""></td>
            </tr>
            <tr>
              <td colspan="2">
                <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender" value="m">Male
                    <input type="radio" name="gender" value="f">Female
                    <input type="radio" name="gender" value="o">Other
                </fieldset>
              </td>
            </tr>
            <tr>
              <td >
                
                  Date of Birth
                    <td>:<input type="date" name="dob" value="" placeholder="dob" /></td>
               
              </td>

        </table>
      <hr style="width:25%;text-align:left;margin-left:0">
         <input type="submit" name="submit" value="Submit"> 
        
        
      
</body>
</html>