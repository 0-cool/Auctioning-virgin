<?php
$server="localhost";
$username="root";
$password="";
$db="capitan";
$connect=mysql_connect($server,$username,$password)or die(mysql_error());
$sdb=mysql_select_db($db,$connect)or die(mysql_error());
?>