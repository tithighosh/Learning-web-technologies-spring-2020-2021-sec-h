<?php
    if(isset($_POST['email']))
    {
        echo " <i>Submission Succefull</i></b><br>";
        echo "Email: ".$_POST['email'];
    }
?>

<html>
 
<head> 
    <title>Email</title>
</head>
<body>
    <fieldset>
        <legend><b>EMAILS</b></legend>
        <form method='POST' action=' '>
            <input type='email' name='email'>
           <hr style="width:40%;text-align:left;margin-left:0">
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>