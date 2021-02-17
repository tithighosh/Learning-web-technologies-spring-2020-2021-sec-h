<?php
    if(isset($_POST['name']))
    {
        echo "<i>Submission Succefull</i><br>";
        
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
            <input type='text' name="name" value=<?php if(isset($_POST['name'])){echo $_POST['name'];}?>>
            <hr style="width:50%;text-align:left;margin-left:0">
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>