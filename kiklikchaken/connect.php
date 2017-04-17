<?php
/*
 * set var
 */
$cfHost = "localhost";
$cfUser = "root";
$cfPassword = "root";
$cfDatabase = "shopping cart";
 
/*
 * connection mysql
 */
$meConnect = mysql_connect($cfHost, $cfUser, $cfPassword) or die("Error conncetion mysql...");
$meDatabase = mysql_select_db($cfDatabase);
mysql_query("SET NAMES UTF8");
?>