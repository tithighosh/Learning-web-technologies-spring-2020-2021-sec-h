


<html>
<head>
     
    <title>Edit Profile</title>
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
                <fieldset>
        <br> <br><br>
        <label>
            
            
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
              <td colspan="2">
                <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" name="gender" value="m">Male
                    <input type="radio" name="gender" value="f">Female
                    <input type="radio" name="gender" value="o">Other
                

            </td>
            </tr>
            <td >
                
                  Date of Birth
                    <td>:<input type="date" name="dob" value="" placeholder="dob" /></td>
               
              </td>

            </table> 
            <hr style="width:25%;text-align:left;margin-left:0">
         <input type="submit" name="submit" value="Submit"> 
           </fieldset>

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