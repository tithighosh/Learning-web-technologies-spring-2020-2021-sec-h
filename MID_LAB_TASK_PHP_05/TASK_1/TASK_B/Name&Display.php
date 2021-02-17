<?php
    if(isset($_POST['name']))
    {
        echo " <i>Submission Succefull</i></b><br>";
        echo "Name: ".$_POST['name'];
    }
?>

<html>
 
<head> 
    <title>Name</title>
</head>
<body>
    <fieldset>
        <legend><b>Name</b></legend>
        <form method='POST' action=''>
            <input type='text' name='name'>
           <hr style="width:40%;text-align:left;margin-left:0">
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>