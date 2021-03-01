<html>
<head>
     
    <title>Change Password</title>
</head>
<body>
    <fieldset>
        <table border="0" align="center" width="100%">
            <tr>
            <td>
                    <img src="logo.png" alt="Italian Trulli" height='60px'>
                 
                </td> 
                <td align='right'>
                    <nav>
                        Logged in as<a href='./'> Bob</a> |
                        <a href='./A_Public_Home.php'>Logout</a> 
                       
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <br> <br><br>
        <label>
            <table border="0" align="center" width="100%">
            <tr width="500px" height="100px">
            <td >
            <h3> Account </h3>
            <hr style="width:50%;text-align:left;margin-left:0">
            
              <li> <a href='./E_Dashboard.php'>Dashboard   
                </a> <br> </li>
               <li><a href='./F_View_Profile'>View Profile</a> <br></li>
              <li> <a href='./G_Edit_Profile.php'>Edit Profile</a><br></li>
               <li><a href='./H_Profile_Picture.php'>Change Profile Picture</a><br></li>
              <li> <a href='./I_Change_Password.php'>Change Password</a><br></li>
               <li><a href='./A_Public_Home.php'>Logout</a><br></li>
            
            </td>
            <td>

                    <form method="post" action="">
      <fieldset>
        <legend><b>CHANGE PASSWORD</b></legend>
        <table>
          <tr>
            <td>Current Password: </td>
            <td><input type="password" name="cpassword" value=""></td>
          </tr>
          <tr>
            <td><p style="color:green">New Password:</p></td>
            <td><input type="password" name="npassword" value=""></td>
          </tr>

           <tr>
            <td><p style="color:red">Retype New Password:</p></td>
            <td><input type="password" name="rpassword" value=""></td>
          </tr>

          <br>
            

        </table>
      <hr style="width:25%;text-align:left;margin-left:0">
         <input type="submit" name="submit" value="Submit"> 
        
      </fieldset>
    </form>

            </td>
            </tr>
            </table> 
           

        <div class="vl"></div>  
           
        </label>
        <br><br><br><br>
    </fieldset>
    <fieldset>
        <center>
            <label>
            <b>

                Copyright © 2017
                </b>
            </label>
        </center>
    </fieldset>
</body>
</html>