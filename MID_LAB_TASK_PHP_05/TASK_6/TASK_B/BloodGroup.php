<?php
    if(isset($_POST['bloodgroup']))
    {
        echo " <i>Submission Succefull</i></b><br>";
        echo "bloodgroup: ".$_POST['bloodgroup'];
    }
?>

<html>
 
<head> 
    <title>BloodGroup</title>
</head>
<body>
    <fieldset>
        <legend><b>BLOOD GROUP</b></legend>
        <form method='POST' action=' '>
            <select name="bloodgroup">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                           
                        </select> 
                <hr style="width:40%;text-align:left;margin-left:0">
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>