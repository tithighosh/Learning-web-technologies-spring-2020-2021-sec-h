<?php
    if(isset($_POST['gender']))
    {
        echo " <i>Submission Succefull</i></b><br>";
        echo "gender: ".$_POST['gender'];
    }
?>

<html>
 
<head> 
    <title>gender</title>
</head>
<body>
    <fieldset>
        <legend><b>GENDER</b></legend>
        <form method='POST' action='#'>
                        <input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female
                        <input type="radio" name="gender" value="Other"> Other 
           <hr style="width:40%;text-align:left;margin-left:0">
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>