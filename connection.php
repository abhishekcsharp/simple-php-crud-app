<?php

$hostname = 'localhost';
$username = 'simplecrudphp';
$password = 'password4';
$database = 'simplecrudphp';


$mysqli = mysqli_connect($hostname,$username,$password,$database);

//condition to check connection

if ($mysqli)

{
    echo "success";
}
else 
{
    echo "UnSuccesfull" ;
}

?>