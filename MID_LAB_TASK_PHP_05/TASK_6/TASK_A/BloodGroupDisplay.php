<?php
    
    if(isset($_POST['submit']))
    {

        $dob = $_POST['dob'];

        if($dob == " " )
        {
            echo "null submission";
        }
        else
        {
            echo "success";
        }
    }
    else
        {
        echo "Invalid request";
        }
    
?>
