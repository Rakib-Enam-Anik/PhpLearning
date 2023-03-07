<?php
/*
Write a PHP program to valid an email address.  
*/

function valid_email($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}

echo valid_email('rakibenamanik16@gmail.com');
echo valid_email('arif76ygh@gmail.com');