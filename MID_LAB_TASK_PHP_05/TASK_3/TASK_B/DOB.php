<?php
    if(isset($_POST['dob']))
    {
        echo " <i>Submission Succefull</i></b><br>";
        echo "dob: ".$_POST['dob'];
    }
?>

<html>
 
<head> 
    <title>DOB</title>
</head>
<body>
    <fieldset>
        <legend><b>Death Of Birth</b></legend>
        <form method='POST' action=' '>
           <td> 
                <input type="date" name="dob" value="" placeholder="dob" />
           </td>

           <hr style="width:40%;text-align:left;margin-left:0">
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>