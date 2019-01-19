<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'mydb';

if ($bdd = new mysqli($dbhost,$dbuser,$dbpass,$db))
{
}
else{
    echo "uh-oh oopsie";
}
?>