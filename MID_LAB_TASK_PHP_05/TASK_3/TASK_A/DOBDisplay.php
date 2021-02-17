<?php
    
    if(isset($_POST['submit']))
    {

        $email       = $_POST['dob'];

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
