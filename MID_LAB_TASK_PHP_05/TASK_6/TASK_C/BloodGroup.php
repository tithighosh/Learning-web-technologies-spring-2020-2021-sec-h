<?php
    if(isset($_POST['bloodgroup']))
    {
        echo "<i>Submission Succefull</i><br>";
        
        
    }
?>
 
<html>
 
<head> 
    <title>BloodGroup</title>
</head>
<body>
    <fieldset>
        <legend><b>BLOOD GROUP</b></legend>
        <form method='POST' action='#'>
            <select name="bloodgroup">
                            <option value="A+"<?php if(isset($_POST['bloodgroup'])){if($_POST['bloodgroup']=='A+'){echo"selected";}}?>>A+</option>
                            <option value="A-"<?php if(isset($_POST['bloodgroup'])){if($_POST['bloodgroup']=='A-'){echo"selected";}}?>>A-</option>
                            <option value="B+"<?php if(isset($_POST['bloodgroup'])){if($_POST['bloodgroup']=='B+'){echo"selected";}}?>>B+</option>
                            <option value="B-"<?php if(isset($_POST['bloodgroup'])){if($_POST['bloodgroup']=='B-'){echo"selected";}}?>>B-</option>
                            <option value="O+"<?php if(isset($_POST['bloodgroup'])){if($_POST['bloodgroup']=='O+'){echo"selected";}}?>>O+</option>
                            <option value="O-"<?php if(isset($_POST['bloodgroup'])){if($_POST['bloodgroup']=='O-'){echo"selected";}}?>>O-</option>
                            
                        </select> 
            <hr style="width:50%;text-align:left;margin-left:0">
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>