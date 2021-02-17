<?php
    if(isset($_POST['degree']))
    {
        echo "<i>Submission Succefull</i><br>";
        
    }
?>
 
<html>
 
<head> 
    <title>Degree</title>
</head>
<body>
    <fieldset>
        <legend><b>DEGREE</b></legend>
        <form method='POST' action=''>
                        <input type="checkbox" name="SSC" value="SSC"<?php if(isset($_POST['SSC'])){echo "checked";} ?>>SSC
                        <input type="checkbox" name="HSC" value="HSC"<?php if(isset($_POST['HSC'])){echo "checked";}?>>HSC
                        <input type="checkbox" name="BSc" value="BSc"<?php if(isset($_POST['BSc'])){echo "checked";}?>> BSc
                        <input type="checkbox" name="MSc" value="MSc"<?php if(isset($_POST['MSc'])){echo "checked";}?>>MSc
            <hr style="width:50%;text-align:left;margin-left:0">
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>