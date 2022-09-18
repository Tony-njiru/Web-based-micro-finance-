<?php
require_once('config.php');
defined('ADESFLASH') or exit('404 Access Blocked!');
if(FLASHWEBTECHINC !== 1) {
	echo 'No Direct Script Access!';
	exit('Access Forbiden!');
}
define('CopyR','©');
define('RitR','®');
ini_set('default_charset','UTF-8');
session_set_cookie_params(31556926); // 31556926 FOr 1year
// Current Session Timeout Value
// Change session timeout
ini_set('session.gc_maxlifetime', 31556926); // 1 Year
ini_set('session.gc_divisor',1);
error_reporting(0); // Set to 1 if you want PHP error to Display But Mind you use Zero(0) To prevent  from Hackers..
ob_start();
session_start();
include 'connect.php';
$sett = $flash->query("SELECT * FROM `setting`");
$set = $sett->fetch();
//Set Prof Fetch
$vxemail = $_SESSION['email'];
$profv = $flash->prepare("SELECT * FROM `user` WHERE `email`=:em");
$profv->bindParam(':em',$vxemail);
$profv->execute();
$prof = $profv->fetch();
// PerPage 
$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = $set['perpage'];
    	$startpoint = ($page * $limit) - $limit;
$sets->automerge = $set['automerge'];
$sets->autopurge = $set['autopurge'];
$sets->adminmerge = $set['adminmerge'];
//Auto Marge
//Member AutoMerge
if($sets->automerge > 0 AND $sets->adminmerge < 1){
 $seetoM = $flash->query("SELECT * FROM `user` WHERE `tomerge`>'0' AND `tomerge`<'10' 
 AND `plan`>'0' AND `right`<'1'
 AND `username` 
NOT IN(SELECT `sender` FROM `merge` WHERE `id`>'0') 
AND `username` 
NOT IN(SELECT `reciever` FROM `merge` WHERE `id`>'0')
  ORDER BY RAND(),mergesince ASC LIMIT 1");
if($seetoM->rowCount() > 0){
	$meMerg = $seetoM->fetch();
	$nbn = $meMerg['totaltomerge'];
	$seeko = $flash->query("SELECT * FROM `merge` WHERE `reciever`='{$meMerg['username']}'");
	if($seeko->rowCount() < 3){
		$seepM = $flash->query("SELECT * FROM `user` WHERE `tomerge`<'1' AND `switched`<'1' AND `plan`>'0' AND
		`plan`='{$meMerg['plan']}' AND `username` 
 NOT IN(SELECT `sender` FROM `merge` WHERE `id`>'0')
	LIMIT $nbn ");
 if($seepM->rowCount() > 0){
	 $abstt = abs(($meMerg['totaltomerge'] - $seepM->rowCount()));
	 $updmt = $flash->query("UPDATE `user` SET `totaltomerge`='{$abstt}' WHERE `username`='{$meMerg['username']}'");
 while($vb = $seepM->fetch()){
	 $meTime  = (time() + (60 * 60 * 6));
	 $mmvdd = date('Y-m-d');
	 $meTimxx = (date('H') + 6).':'.date('i:s');
		 if($flash->query("INSERT INTO `merge`(sender,reciever,mergeon,xtime,ntime) 
 VALUES('{$vb['username']}','{$meMerg['username']}','{$mmvdd}','{$meTime}','{$meTimxx}')")){
	 
	 
 } 
 }
 
	}
}

}
}
if($sets->adminmerge > 0){
	 $duserx = $flash->query("SELECT * FROM `user` WHERE `tomerge`<'1' AND `switched`<'1' AND `plan`>'0'
	AND `username` 
 NOT IN(SELECT `sender` FROM `merge` WHERE `id`>'0')
AND `username` 
 NOT IN(SELECT `reciever` FROM `merge` WHERE `id`>'0')
 LIMIT 1");
 $dadminx = $flash->query("SELECT * FROM `user` WHERE `right`>'0' AND `totaltomerge`>'0' ORDER BY RAND()");
 if($duserx->rowCount() > '0' AND $dadminx->rowCount() > '0'){
	 $dadminxx = $dadminx->fetch();
	 while($duserxx = $duserx->fetch()){
		$meTimexb  = (time() + (60 * 60 * 6));
		$meTimxxv = (date('H') + 6).':'.date('i:s');
	 $mmvddx = date('Y-m-d');
		 if($flash->query("INSERT INTO `merge`(sender,reciever,mergeon,xtime,ntime) 
		 VALUES('{$duserxx['username']}','{$dadminxx['username']}','{$mmvddx}','{$meTimexb}','{$meTimxxv}')")){
$abstto = abs(($dadminxx['totaltomerge'] - 1));
	 $updmtt = $flash->query("UPDATE `user` SET `totaltomerge`='{$abstto}' WHERE `username`='{$dadminxx['username']}'");
		 }	 
	 }
 }
 
}
if($sets->autopurge > '0'){
	$gTime = time();
	$getMer = $flash->query("SELECT * FROM `merge` WHERE `xtime`<='{$gTime}' AND `xtime`!='0'");
	if($getMer->rowCount() > 0){
		while($delMer = $getMer->fetch()){
			$umnb = $flash->query("SELECT * FROM `user` WHERE `username`='{$delMer['reciever']}'");
			$MeDel = $umnb->fetch();
			$absttz = abs(($MeDel['totaltomerge'] + 1));
			if($flash->query("UPDATE `user` SET `totaltomerge`='{$absttz}' WHERE `username`='{$MeDel['username']}'")){
			if($flash->query("DELETE FROM `merge` WHERE `sender`='{$delMer['sender']}' 
			AND `reciever`='{$delMer['reciever']}' LIMIT 1")){
				$flash->query("DELETE FROM `user` WHERE `username`='{$delMer['sender']}'");
			}
			}
		}
	}
}
$flash->query("UPDATE `user` SET `mergesince`='1' WHERE `right`>'0'");
?>