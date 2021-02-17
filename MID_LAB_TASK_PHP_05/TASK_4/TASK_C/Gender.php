<?php
    if(isset($_POST['gender']) )
    {
        echo "<i>Submission Succefull</i><br>";
       //echo "Gender: ".$_POST['gender'];
    }
?>

 <html>
<head>
  
    <title>Gender</title>
</head>
<body>
    <fieldset>
        <legend><b>GENDER</b></legend>
        <form method='POST' action=''>
            <input type='radio' name='gender' value='Male' <?php if(isset($_POST['gender'])){if($_POST['gender'] == "Male")echo "checked";}?>>Male
            <input type='radio' name='gender' value='Female' <?php if(isset($_POST['gender'])){if($_POST['gender'] == "Female")echo "checked";}?>>Female
            <input type='radio' name='gender' value='Others' <?php if(isset($_POST['gender'])){if($_POST['gender'] == "Others")echo "checked";}?>>Others
            <hr style="width:40%;text-align:left;margin-left:0">
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>

