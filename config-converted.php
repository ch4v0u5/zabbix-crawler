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

$db = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD);
mysqli_select_db($DATABASE_SCHEMA, $db);