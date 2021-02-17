<?php
    
    if(isset($_POST['submit']))
    {

        $email       = $_POST['gender'];

        if($gender == " " )
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
