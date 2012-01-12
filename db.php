<?php
/*
//datos para la coneccion localhost
$host ='localhost';
$user ='root';
$pass ='';
$db ='new_hope';
*/


//server
$host ='h50mysql41.secureserver.net';
$user ='new_hope';
$pass ='New2009ChAr';
$db ='new_hope';


$link = mysql_connect($host,$user,$pass);
$conn = mysql_select_db($db,$link);
?>