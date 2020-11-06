<?php
if (!defined("ZABBIX_CRAWLER")) { die;}

/* CONFIG STUFF */
$DATABASE_HOST = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASSWORD = "";
$DATABASE_SCHEMA = "zabbix_spider";

//Set this if you want to use a proxy to scanning
//$proxy = "yourproxyip:3128";

$time_limit = 3; //Limit how long to run for (new requests wont be made after x seconds
$max_queries = 30; //Limit how many pages to scan at once

$debug = false;

//$db = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD);
//mysqli_select_db($db, $DATABASE_SCHEMA);

$mysqli_new = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD, $DATABASE_SCHEMA);

if($mysqli_new->connect_errno){
	echo $mysqli_new->connect_errno;exit;
}

if ($result = $mysqli_new -> query("SELECT DATABASE()")) {
  $row = $result -> fetch_row();
 // echo "Default database is " . $row[0];
  $result -> close();
//	exit;
}
else{
	echo "Failed";exit;
}
