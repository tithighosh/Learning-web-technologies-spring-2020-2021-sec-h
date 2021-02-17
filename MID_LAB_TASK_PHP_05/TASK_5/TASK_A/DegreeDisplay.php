<?php
    
    if(isset($_POST['submit']))
    {

        $email       = $_POST['degree'];

        if($degree == " " )
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
