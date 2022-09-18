<?php

include 'start.php';
defined('ADESFLASH') or exit('404 Access Blocked!');
if(FLASHWEBTECHINC !== 1) {
	echo 'No Direct Script Access!';
	exit('Access Forbiden!');
}
//Fill Database Details Bellow
date_default_timezone_set('Africa/kenya');
$dbhost = 'localhost'; // Always LocalHost In Cloud/Shared Host
$dbuser = 'ponzi'; // Database UserName
$dbpass = '12345'; // DataBase PassWord
$dbname = 'ponzi'; //Database Name
// Plans Settings
//Plan1
$mcplan1 = 'Bronze Token';
$mcprice1 = '10000';
//Plan2
$mcplan2 = 'Silver Token';
$mcprice2 = '20000';
//Plan1
$mcplan3 = 'Gold Token';
$mcprice3 = '50000';
//Plan2
$mcplan4 = 'Jasper Token';
$mcprice4 = '100000';
//Plan2
$mcplan5 = 'Diamond Token';
$mcprice5 = '200000';
error_reporting(0); // Set to 1 if you want PHP error to Display But Mind you use Zero(0) To prevent  from Hackers..

?>