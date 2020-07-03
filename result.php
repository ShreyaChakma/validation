<?php

function error_message($msg){
    return "Sorry !, Can't submit your application . please fill the required . <br>" . 
    $msg . 
    '<br><a href="index.php">Go back</a>'
    ;
}

require 'rules/email.php';
require 'rules/profile_picture.php';


echo "Succes ";


