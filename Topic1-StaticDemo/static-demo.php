<?php

include_once 'User.php';

$pw = "asdf";

if(User::validatePassword($pw))
{
    echo"Password is long enough.";
}
else{
    echo"Too short.";
}


?>