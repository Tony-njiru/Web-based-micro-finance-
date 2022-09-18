<?php
//Ponzi Script
//BY FLASHWEBTECH INC
//ADESANOYE ADELEYE BENJAMIN 
//BennySWAG DACYBERPOWER
//09022165970 or 08110446469
// flashwebtech@gmail.com
//Dacyberpower Ltd
include('../inc/header.php');
defined('ADESFLASH') or exit('404 Access Blocked!');
echo '<!-- Custom stylesheet - for your changes -->
    <link href="'.$set['url'].'/assets/style.css" rel="stylesheet">';
if(FLASHWEBTECHINC !== 1) {
	echo 'No Direct Script Access!';
	exit('Access Forbiden!');
}
if(!$Function->isLogin()){
	include '../member/login2.php';
}
else {
	FlashTitle('Admin Panel | ' . $set['title']);
	if($prof['right'] > 0){
	$centa = $flash->query("SELECT * FROM `user` WHERE `username` IN
	(SELECT `sender` FROM `donation` WHERE id>'0')");
	$no = 0;
	while($sendi = $centa->fetch()){
	$det = $flash->query("SELECT * FROM `donation` WHERE `sender`='{$sendi['username']}'");
	if($det->rowCount() > 1){
		$no++;
		$deti = $det->fetch();
		echo '<div class="main x xx xxx xxxx"><div class="menu" align="left" style="text-align:left;">
		<table><tr><td style="width:70px;border-right:2px solid blue;"> 
		<img src="'.$set['url'].'/img/user_accept.png" width="70" height="80"/>
		</td><td><font color="green">#'.$no.'</font>: 
		Username: <font color="green">'.$deti['sender'].'</font><br/>
		<font style="display:none;" color="green">#'.$no.': </font>
		Total Sent: '.$det->rowCount().'<br/>
		<font style="display:none;" color="green">#'.$no.': </font>
		Status: Available For 50% Bonus <br/>
		<font style="display:none;" color="green">#'.$no.': </font>
		<small>Make Sure You Have Record For All Your 50% PayMent</small></td></tr></table><hr/></div></div>';
	}
	}
	}
	else {
		header('Location: '.$set['url'].'/member/main');
		exit;
	}
}
include('../inc/footer.php');
?>