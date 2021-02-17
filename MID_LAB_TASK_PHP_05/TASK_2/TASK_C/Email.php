<?php
    if(isset($_POST['email']))
    {
        echo "<i>Submission Succefull</i><br>";
        
    }
?>
 
<html>
 
<head> 
    <title>Email</title>
</head>
<body>
    <fieldset>
        <legend><b>EMAIL</b></legend>
        <form method='POST' action=''>
            <input type='email' name="email" value=<?php if(isset($_POST['email'])){echo $_POST['email'];}?>>
            <hr style="width:50%;text-align:left;margin-left:0">
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>