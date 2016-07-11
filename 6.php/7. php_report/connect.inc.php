<?php
//Connecting to the server
$conn_error= 'Couldnot connect to the database. Please try later.';
$mysql_host='localhost';
$mysql_user= 'root';
$mysql_pass='';
$mysql_db='un_data';

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !@mysql_select_db($mysql_db)){
    die($conn_error);
}

?>