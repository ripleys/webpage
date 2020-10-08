<?php
//connect.php
$server = 'https://github.com/ripleys/webpage/blob/main/';
$username   = 'ripleys';
$password   = 'SMRS1125apple';
$database   = 'DB.sql';
 
if(!mysql_connect($server, $username,  $password))
{
    exit('Error: could not establish database connection');
}
if(!mysql_select_db($database)
{
    exit('Error: could not select the database');
}
?>
