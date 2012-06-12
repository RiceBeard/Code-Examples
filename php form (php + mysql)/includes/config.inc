<?php
$Host = "localhost";
$User = "username";
$Password = "password";
$DBName = "dbname";
$Link = mysql_connect ($Host, $User, $Password) or die (mysql_error());
mysql_select_db ($DBName, $Link) or die (mysql_error());
?>