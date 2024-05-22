<?php
function email_validation()
{
 
    $error = "";
    if (isset($_POST["email"])) {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $error = "email_wrong";
        }elseif(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $error = "email_valid";
        }
    }
    return $error;
    
}
