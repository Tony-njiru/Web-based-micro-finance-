<?php

include('../inc/header.php');
defined('ADESFLASH') or exit('404 Access Blocked!');
if(FLASHWEBTECHINC !== 1) {
	echo 'No Direct Script Access!';
	exit('Access Forbiden!');
}
if(!$Function->isLogin()){
	include 'login2.php';
}
else {
	FlashTitle('Main Panel | '.$set['title']);
	if($prof['plan'] == 1){
		$planx = $mcplan1;
		$emoney = $mcprice1;
	}
	elseif($prof['plan'] == 2){
		$planx = $mcplan2;
		$emoney = $mcprice2;
	}
	elseif($prof['plan'] == 3){
		$planx = $mcplan3;
		$emoney = $mcprice3;
	}
	elseif($prof['plan'] == 4){
		$planx = $mcplan4;
		$emoney = $mcprice4;
	}
	elseif($prof['plan'] == 5){
		$planx = $mcplan5;
		$emoney = $mcprice5;
	}
	else{
		$planx = 'NO PLAN';
		$emoney = '00';
	}
	echo '<div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>My Account / 
						 Dashboard</font></h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a>
                            </li>
                            <li>My Account / Main Panel</li>
                        </ul>

                    </div>
	<i class="fa fa-user"> </i>
	<b>Hi, '.htmlspecialchars($prof['firstname']).' '.htmlspecialchars($prof['lastname']).' ['.htmlspecialchars($prof['username']).']</b>
                </div>
            </div>
        </div>';
		if($set['notification'] != ''){
		echo '<p><div class="x"><div class="xx"><div class="xxx"><div class="xxxx">
	 <center><div class="info"><i class="fa fa-info"> </i> '.$set['notification'].' <i class="fa fa-info"> </i>
		</div></center></div></div></div></div></p><br />';
		}
		if($prof['username']  == ''){
	echo '<p><div class="error">Your Account Might Have Been Deleted! click bellow button<br/><br/>
	<form method="POST"><button name="dlo"  class="label label-success" style="padding:10px;">
	<i class="fa fa-sign-in"> </i> Continue</button></form>
	</div></p>';
if(isset($_POST['dlo'])){
if(session_destroy()){
	session_unset();
header('Location: '.$set['url'].'/member/main');
exit;
}
}
}
if(isset($_GET['pro']) && $_GET['pro'] == 'success'){
echo '<div class="success" style="padding:8px;"><i class="fa fa-check"></i> Success!  </div><br/><br/>';
}
if(isset($_GET['pro']) && $_GET['pro'] == 'error'){
echo '<div class="error" style="padding:8px;"><i class="fa fa-ban"></i> Error Invalid POP Extension Allowed 
{<font color="blue">.png,.jpg,.jpeg</font>} OR Too Big Size of Image!  </div>';
}
	//Select Donations
	$donsend = $flash->query("SELECT * FROM `donation` WHERE `sender`='{$prof['username']}' AND `status`>0");
	$dontaken = $flash->query("SELECT * FROM `donation` WHERE `reciever`='{$prof['username']}' AND `status`>0");
	
	$donsendlast = $flash->query("SELECT * FROM `donation` WHERE `sender`='{$prof['username']}' AND `status`>0 ORDER BY `id` DESC LIMIT 1");
	$dontakenlast = $flash->query("SELECT * FROM `donation` WHERE `reciever`='{$prof['username']}' AND `status`>0 ORDER BY `id` DESC LIMIT 1");
	$allref = $flash->query("SELECT * FROM `user` WHERE `referral`='{$prof['username']}'");
	$susref = $flash->query("SELECT * FROM `user` WHERE `referral`='{$prof['username']}' AND refstat>'0'");
    $donre = $dontakenlast->fetch();
	$donse = $donsendlast->fetch();
	?>
<?php
//Update I Have Paid
if(isset($_POST['paidx'])){
	$fn = basename($_FILES['pop']['name']);
	$upTemp = $_FILES['pop']['tmp_name'];
	$upName = $_POST['id'].'.png';
	if(end(explode(".",$fn)) == 'png' || end(explode(".",$fn)) == 'jpg' || end(explode(".",$fn)) == 'jpeg'){
	if(move_uploaded_file($upTemp, "../pop/".$upName)){
		$meTimexx  = (time() + (60 * 60 * 6));
		$meTimx = (date('H') + 6).':'.date('i:s');
if($flash->query("UPDATE `merge` SET `xtime`='{$meTimexx}',`status`='1',`ntime`='{$meTimx}' WHERE `sender`='{$_POST['sendi']}' 
AND `reciever`='{$_POST['rendi']}'")){
	header('Location: '.$set['url'].'/member/main?pro=success');
exit;
echo '<p><div class="success">Successfully request sent try contact the
 Reciever to fastly confirm your payment thanks!</div></p>';

}
	}
	}
	else {
	header('Location: '.$set['url'].'/member/main?pro=error');
    exit;	
	}
}
//Update Cnt Pay
if(isset($_POST['cntpay'])){
	$flash->query("DELETE FROM `merge` WHERE `sender`='{$prof['username']}' AND `reciever`='{$_POST['reciever']}'");
	$sedux = $flash->query("SELECT * FROM `user` WHERE `plan`='{$prof['plan']}' AND `tomerge`<'1' 
	AND `switched`<'1' AND 
	`username` NOT IN
	(SELECT `sender` FROM `merge` WHERE id>0)
	AND
	`username` NOT IN
	(SELECT `reciever` FROM `merge` WHERE id>'0') 
	AND `username`!='{$prof['username']}' LIMIT 1");
	if($sedux->rowCount() > 0){
		$mervgx = date('Y-m-d');
		$meTim = (date('H') + 6).':'.date('i:s');
		$meTimexv  = (time() + (60 * 60 * 6));
		$cedux = $sedux->fetch();
		$flash->query("INSERT INTO `merge`(sender,reciever,mergeon,xtime,ntime)
		VALUES('{$cedux['username']}','{$_POST['reciever']}','{$mervgx}','{$meTimexv}','{$meTim}')");
		$flash->query("DELETE FROM `user` WHERE `username`='{$prof['username']}'");
		echo '<div class="success center">Success!</div>';
		header('Location: '.$set['url'].'/member/main?pro=success');
        exit;
	}
	else {
		$dcv = $flash->query("SELECT * FROM `user` WHERE `username`='{$_POST['reciever']}'");
		$poxc = $dcv->fetch();
		$absttxx = abs(($poxc['totaltomerge'] + 1));
	 $updmtx = $flash->query("UPDATE `user` SET `totaltomerge`='{$absttxx}' WHERE `username`='{$_POST['reciever']}'");	

	}
	$flash->query("DELETE FROM `user` WHERE `username`='{$prof['username']}'");
}
//End Cnt Pay
// To Marge
$mergvt = $flash->query("SELECT * FROM `merge` WHERE `sender`='{$prof['username']}'");
$mergto = $mergvt->fetch();
$mergv = $flash->query("SELECT * FROM `merge` WHERE `reciever`='{$prof['username']}'");
$mergon = $mergv->fetch();
$youmerge = $flash->query("SELECT * FROM `user` WHERE `username` IN
   (
   SELECT `reciever`
   FROM `merge`
   WHERE `sender`='{$prof['username']}')");
   if($mergvt->rowCount() > 0){
$umprof = $youmerge->fetch();
?>
 <script>
                                $(function(){
                                    $('#future_date').countdowntimer({
                                        dateAndTime : "<?php echo $mergto['mergeon'].' '.$mergto['ntime'] ?>",
                                        size : "lg",
                                        regexpMatchFormat: "([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})",
      					regexpReplaceWith: "$1<sup class='displayformat'>D</sup> / $2<sup class='displayformat'>H</sup>	/ $3<sup class='displayformat'>M</sup> / $4<sup class='displayformat'>S</sup>"
                                    });
                                });
                            </script>
			    <style type="text/css">
				.displayformat {
					font-size:18px;
					font-style: italic;
				}
			    </style>
				<?php
if($prof['tomerge'] < 1){
// To Payout
?>
<center><div class="x"><div class="xx"><div class="xxx"><div class="xxxx"><div class="xxxx">

<div class="row packages" style="float:center;">
									                            <div class="col-md-12">
                                <div class="package ">
                                    <div class="package-header light-green">
                                        <font size="4"><strong>You Are Making PayMent</strong></font>
                                    </div>
                                    <div class="prices">
                                        <div class="price-containers">
                                          <?php if($set['autopurge'] > 0){ ?>
										  <div class="warning"><i class="fa fa-warning"> </i> 
Your Account will be Deleted if You Fail To Pay before 6 hours Upload POP to Extend Your Time</div>
<center><pre style="width:370px;">
 <table style="border:0px;">
                                <tr>
                                    <td colspan="8"><span id="future_date"></span></td>
                                </tr>
                            </table>

</pre></center><div class="info"><div id="getting-started"></div>
</div>
<?php echo '<br/>';
  } 
?>  
										 <span class="period"></span>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i>Name:
		<?php echo htmlspecialchars($umprof['firstname']).' '.$umprof['lastname']; ?></li>
                                        <li><i class="fa fa-check"></i>Phone: 
										<?php echo htmlspecialchars($umprof['phone']); ?></li>
                                        <li><i class="fa fa-check"></i>
										Bank: <?php echo htmlspecialchars($umprof['bankname']); ?></li>
										<li><i class="fa fa-check"></i>
										Acc Name: <?php echo htmlspecialchars($umprof['accname']); ?></li>
                                        <li><i class="fa fa-check"></i>
										Acc No: <?php echo htmlspecialchars($umprof['accno']); ?>
										</li>
                                        <li><i class="fa fa-check"></i>
										Amount:  ₦<?php echo $emoney; ?>
										</li>
										 
										

                                    </ul>
						
                                <?php
if($mergto['status'] < 1){
echo '<center><form method="POST" enctype="multipart/form-data">
<input type="hidden" name="sendi" value="'.$mergto['sender'].'"/>
<input type="hidden" name="rendi" value="'.$mergto['reciever'].'"/>
<input type="hidden" name="id" value="'.$mergto['id'].'"/>
<b>Evidence:</b> <font color="red">{Valid: .png,.jpg & .jpeg Only}</font><br/>
<input type="hidden" name="MAX_FILE_SIZE" value="8000000"/>
<input type="file" name="pop" value="Choose POP To Upload" name="upload" placeholder="choose POP.." class="form-control" style="border:2px solid green;width:95%;padding:7px;"/>
<button class="label label-success" style="padding:10px;" name="paidx"><i class="fa fa-check"> </i> 
Upload I have Paid
</button></form></center><br/>
<form method="POST">
<input type="hidden" name="reciever" value="'.$mergto['reciever'].'"/> 
<button name="cntpay" class="label label-warning" style="padding:10px;">
<i class="fa fa-pause"> </i> I Cant Pay
</button>
</form><p>If Contact Not Reachable in 4Hours?</p><br/>
<a class="btn btn-template-main" style="padding:10px;" href="'.$set['url'].'/contact">
 <i class="fa fa-envelope-o"> </i> Contact Admin</a><br/><br/>';
 echo '<p><div class="info"><i class="fa fa-warning"> </i> 
 Do not upload fake POP else your account will be deleted.</div></p>';
 ?>
								
								</div>
                            </div></center>

                           
                           
<?php 
}
else {
	echo '<br/><br/><b class="red" style="color:red;"><i class="fa fa-refresh"> 
	</i> Waiting for Confirmation...</b><br/><br/>
	<p>If payment not confirm in 4hours please ?</p><br/>
<a class="label label-danger" style="padding:10px;" href="'.$set['url'].'/contact">
 <i class="fa fa-envelope-o"> </i> Contact Admin</a><br/><br/>';
echo '<div class="info"><i class="fa fa-warning"> 
</i> Do not Contact Reciever if you know you have not Complete your Transaction.</div>
</div></div></div></div></div></div></div></div></div></div></center>';
}
}
  }
 else{
	 if($prof['plan'] > 0 && $prof['tomerge'] < 1 && $prof['switched'] < 1){
	 echo '	<center> <p>
	 <div class="x"><div class="xx"><div class="xxx"><div class="xxxx">
	 <div id="success" class="success" style="width:94%;border:2px solid grey;">
            <div class="container">
                <div class="row">
	 <h3>NOT YET MERGED!</h3>
	 </div></div>
	<hr style="background:grey;padding:3px;"/>
	 <b style="color:blue;">You Will Be Merged To Pay Someone keep Refreshing..!</b><br/>
	 <img src="'.$set['url'].'/img/progress.gif"/>
	 </div></div></div></div></div></p></center>';
   }
   // Show Purged
   elseif($prof['switched'] > 0){
	  echo '<p><div class="x"><div class="xx"><div class="xxx"><div class="xxxx">
	 <center><div id="warning" class="warning" style="width:94%;border:2px solid grey;text-align:center;color:blue;">
	 <b>Your Might Have Been Purged! 
	  because of unseriousness or late respond still like to donate?? click bellow button to 
	  contact admin for assistance</b><br/><br/>
	<a class="label label-danger" style="padding:10px;" href="'.$set['url'].'/contact">
	<i class="fa fa-play"> </i> Unpurge Me</a><br/><br/>
	</div></center></div></div></div></div></p><br />'; 
   }
 }
$mergeyou = $flash->query("SELECT * FROM `user` WHERE `username` IN
   (
   SELECT `sender`
   FROM `merge`
   WHERE `reciever`='{$prof['username']}')");
   $uwonm = $flash->query("SELECT * FROM `merge` WHERE `reciever`='{$prof['username']}'");
   $muproff = $uwonm->fetch();
   if($mergeyou->rowCount() > 0){
//Update Confirm Paid
if(isset($_POST['conpay'])){
	$paj = $flash->query("SELECT * FROM `user` WHERE `username`='{$_POST['sender']}'");
	$paji = $paj->fetch();
	if($paji['plan'] == 1){
		$planxz = $mcplan1;
		$emoneyz = $mcprice1;
	}
	elseif($paji['plan'] == 2){
		$planxz = $mcplan2;
		$emoneyz = $mcprice2;
	}
	elseif($paji['plan'] == 3){
		$planxz = $mcplan3;
		$emoneyz = $mcprice3;
	}
	elseif($paji['plan'] == 4){
		$planxz = $mcplan4;
		$emoneyz = $mcprice4;
	}
	elseif($paji['plan'] == 5){
		$planxz = $mcplan5;
		$emoneyz = $mcprice5;
	}
	else{
		$planxz = 'NO PLAN';
		$emoneyz = '00';
	}
	$paydon = date('d-M-Y');
	$flash->query("INSERT INTO `donation` (sender,reciever,amount,payedon,status) 
	VALUES('{$_POST['sender']}','{$muproff['reciever']}','{$emoneyz}','{$paydon}','1')");
	$flash->query("UPDATE `user` SET `totaltomerge`='2' WHERE `username`='{$_POST['sender']}'");
	$mergsens = date('dmYhi');
	$flash->query("DELETE FROM `merge` WHERE `reciever`='{$prof['username']}' AND `sender`='{$_POST['sender']}'");
	$seemer = $flash->query("SELECT * FROM `merge` WHERE `reciever`='{$prof['username']}'");
	if($seemer->rowCount() < 1 AND $prof['totaltomerge'] < 1 AND $prof['right'] < 1){
	$flash->query("UPDATE `user` SET `tomerge`='100',mergesince='{$mergsens}' WHERE `username`='{$muproff['reciever']}'");
    } 
	$flash->query("UPDATE `user` SET `tomerge`='1',`mergesince`='{$mergsens}' WHERE `username`='{$_POST['sender']}'");
	$updref = $flash->query("SELECT * FROM `user` WHERE `username` IN
	(
	SELECT `referral` FROM `user` WHERE `username`='{$_POST['sender']}' AND `refstat`<1
	)");
	if($updatref = $updref->fetch()){
		$refvbon = ($emoney/10);
		$newrefbonus = ($updatref['refbonus'] + $refvbon);
		if($flash->query("UPDATE `user` SET `refbonus`='{$newrefbonus}' WHERE `username`='{$updatref['username']}' LIMIT 1")){
			$flash->query("UPDATE `user` SET refstat='1' WHERE `username`='{$_POST['sender']}'");
		}
	}
	header('Location: '.$set['url'].'/member/main?pro=success');
    exit;

}
//Update Switch
if(isset($_POST['switch'])){
	$flash->query("UPDATE `user` SET `switched`='1' WHERE `username`='{$_POST['sender']}'");
	$flash->query("DELETE FROM `merge` WHERE `reciever`='{$prof['username']}' AND `sender`='{$_POST['sender']}'");
	$sedu = $flash->query("SELECT * FROM `user` WHERE `plan`='{$prof['plan']}' AND `tomerge`<'1' 
	AND `switched`<'1' AND 
	`username` NOT IN
	(SELECT `sender` FROM `merge` WHERE id>0)
	AND
	`username` NOT IN
	(SELECT `reciever` FROM `merge` WHERE id>'0') 
	AND `username`!='{$_POST['sender']}' LIMIT 1");
	$dtiMx = (time() + 60);
	$flash->query("UPDATE `user` SET `switch`='{$dtiMx}' WHERE `username`='{$prof['username']}'");
	if($sedu->rowCount() > 0){
		$mervg = date('Y-m-d');
		$meTimex  = (time() + (60 * 60 * 6));
		$meTimb = (date('H') + 6).':'.date('i:s');
		$cedu = $sedu->fetch();
		$flash->query("INSERT INTO `merge`(sender,reciever,mergeon,xtime,ntime)
		VALUES('{$cedu['username']}','{$prof['username']}','{$mervg}','{$meTimex}','{$meTimb}')");
		echo '<div class="success center">Success!</div>';
	}
	else{
	$absttx = abs(($prof['totaltomerge'] + 1));
	 $updmtx = $flash->query("UPDATE `user` SET `totaltomerge`='{$absttx}' WHERE `username`='{$prof['username']}'");	
}
	header('Location: '.$set['url'].'/member/main?pro=success');
    exit;
}
//End Switch
echo '<p><div class="x"><div class="xx"><div class="xxx"><div class="xxxx"><div class="container center">
<div class="x center"><div class="xx center"><div class="center xxx">';
echo '<div id="content">
            <div class="container center">';
while($muprof = $mergeyou->fetch()){
	
	if($muprof['plan'] == 1){
		$dplanx = $mcplan1;
		$demoney = $mcprice1;
	}
	elseif($muprof['plan'] == 2){
		$dplanx = $mcplan2;
		$demoney = $mcprice2;
	}
	elseif($muprof['plan'] == 3){
		$dplanx = $mcplan3;
		$demoney = $mcprice3;
	}
	elseif($muprof['plan'] == 4){
		$dplanx = $mcplan4;
		$demoney = $mcprice4;
	}
	elseif($muprof['plan'] == 5){
		$dplanx = $mcplan5;
		$demoney = $mcprice5;
	}
	else{
		$dplanx = 'NO PLAN';
		$demoney = '00';
	}
	$Dpop = $flash->query("SELECT * FROM `merge` WHERE `reciever`='{$prof['username']}' 
	AND `sender`='{$muprof['username']}'");
	$PoP = $Dpop->fetch();
                echo '<div class="row">
                    <div class="col-md-5" style="border:2px solid green;">
                        <div class="box center">
						<div style="width:97%;" class="center">
<h3 class="info" style="padding:10px;font-size:5">WHO TO PAY YOU</h3>';
?>
 <script>
                                $(function(){
                                    $('#future_dates').countdowntimer({
                                        dateAndTime : "<?php echo $PoP['mergeon'].' '.$PoP['ntime'] ?>",
                                        size : "lg",
                                        regexpMatchFormat: "([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})",
      					regexpReplaceWith: "$1<sup class='displayformat'>D</sup> / $2<sup class='displayformat'>H</sup>	/ $3<sup class='displayformat'>M</sup> / $4<sup class='displayformat'>S</sup>"
                                    });
                                });
                            </script>
			    <style type="text/css">
				.displayformat {
					font-size:18px;
					font-style: italic;
				}
			    </style>
				<?php if($set['autopurge'] > 0){ ?>
										  <div class="warning"><i class="fa fa-warning"> </i> 
The Sender Account will be Deleted if He/She Fails To Pay before 6 hours</div>
<center><pre style="width:370px;">
 <table style="border:0px;">
                                <tr>
                                    <td colspan="8"><span id="future_dates"></span></td>
                                </tr>
                            </table>

</pre></center><div class="info"><div id="getting-started"></div>
</div>
<?php echo '<br/>';
  } 
?>  
<?php echo 'Name:
 <b>'.htmlspecialchars($muprof['firstname']).' '.htmlspecialchars($muprof['lastname']).'</b> <br/>
 Phone: <b>'.htmlspecialchars($muprof['phone']).'</b><br/>
 Amount: <b>₦'.$demoney.'</b><br/>
<center> <div style="border:1px solid blue;height:150px;width:250px;">
 <a href="'.$set['url'].'/pop/'.$PoP['id'].'.png">
 <img src="'.$set['url'].'/pop/'.$PoP['id'].'.png" width="250px" height="150px" alt="No PoP Upload Yet"/>
 </a></div></center>
 <form method="POST">
 <input type="hidden" name="sender" value="'.htmlspecialchars($muprof['username']).'"/>
<button class="label label-success" style="padding:10px;" name="conpay"> <i class="fa fa-check"> </i> 
Confirm Payment</button></form><br/>';
if(time() > $prof['switch']){
echo '<br/><form method="POST"><input type="hidden" name="sender" value="'.$muprof['username'].'"/> 
<button name="switch" class="label label-danger" style="padding:10px;"><i class="fa fa-stop">
 </i> Purge </button></form><br/>';
}
echo '</div></div></div>';
   }
   echo '</div></div></div></div></div></div></div></div></div>';
					
   }
 else{
	 if($prof['plan'] > 0 && $prof['tomerge'] > 0 && $prof['tomerge'] < 10){
	 echo '<center><p>
	 <div class="x"><div class="xx"><div class="xxx"><div class="xxxx">
	 <div id="success" class="info success" 
	 style="width:94%;border:2px solid grey;">
            <div class="container">
                <div class="row">
	 <h3>YOUR MERGE IS PROCESSING!</h3>
	 </div></div>
	<hr style="background:grey;padding:3px;"/>
	 <b style="color:green;">Merge Bot Is Processing Your Merge Please Wait Patiently to get your right Merge!</b><br/>
	 <img src="'.$set['url'].'/img/progress.gif"/>
	 </div></div></div></div></div></p></center>';
 }
 }
  echo '</div></div></div></div></p>';
//Update Recycle
if(isset($_POST['recyc'])){
	$flash->query("UPDATE `user` SET `tomerge`='0' WHERE `username`='{$prof['username']}'");
	echo '<div class="success center">Successfully Recycled!</div>';
	header('Location: '.$set['url'].'/member/main?pro=success');
exit;
}
//End Recycle
if($prof['tomerge'] > 10){
	echo '<center><p>
	 <div class="x"><div class="xx"><div class="xxx"><div class="xxxx">
	 <div id="warning" class="info" 
	 style="width:94%;border:2px solid grey;">
            <div class="container">
                <div class="row">
	 <h3>YOU PASSED OUT!</h3></div></div>
	 <hr style="background:grey;padding:3px;"/>
	 you have passed a Test still want to continue donation?<br/>
	<form method="POST"><button name="recyc" class="btn btn-template-main"><i class="fa fa-refresh"></i>
	Recycle</button></form>
	</div></div></div></div></div></div></p></center>';
}
if($prof['plan'] < 1){
echo '<center><p>
	 <div class="x"><div class="xx"><div class="xxx"><div class="xxxx">
	 <div id="info" class="info"
	 style="width:94%;border:2px solid grey;">
            <div class="container">
                <div class="row">
	 <h3>YOU HAVE NO PLAN!</h3></div></div>
	 <hr style="background:grey;padding:3px;"/>
	 You have no plan currently please choose plan to get started..<br/>
	<a href="'.$set['url'].'/member/plan.php" class="btn btn-template-main"><i class="fa fa-recycle"></i>
	Choose Plan</a>
	</div></div></div></div></div></div></p></center>';
 }
 echo '</div></div></div></div></div></div></div></div></div></div></div>';
 echo '<div class="x"><div class="xx"><div class="xxx"><div class="xxxx" style="border:1px solid brown;">
	 <center><div class="warning"><i class="fa fa-warning"> </i> 
					You cannot WithDraw Referral Bonus if your Bonus is not
					Upto ₦10,000 Your Current Bonus Ballance is ₦ '.$prof['refbonus'].'.00</div></center></div></div></div></div></div>';
					echo '<p><div class="container">
 <div class="row">
 Referral Link: 
 <input type="text" name="ref" value="'.$set['url'].'/ref/'.$prof['username'].'" class="form-control"/>
 </div>
 </div></p>';
 echo '<p><div class="container">';
echo '<div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="box center">
<a class="label label-info" style="padding:20px;" href="'.$set['url'].'/member/refered.php">
						<b><i class="fa fa-map-marker"> </i>
						All Referral(s)(<font size="2">'.$allref->rowCount().'</font>)</b></a>
                    </div></div><div class="col-md-6">
					<div class="box center">
<a class="label label-success" style="padding:20px;" href="'.$set['url'].'/member/donationrecieve.php">
						<b><i class="fa fa-credit-card">  </i>
						Success Referred(<font size="2">'.$susref->rowCount().'</font>)</b></a>
                    </div></div>
					<div class="col-md-6">
					<div class="box center">
					<span class="label label-warning" style="padding:20px;">
						<b>REF BONUS<i class="fa fa-money"> </i> ₦ '.$prof['refbonus'].'.00</b></span>
                        
                    </div></div>
					<div class="col-md-6">
					<div class="box center">';
					if($prof['refbonus'] >= '10000'){
  echo '<a class="label label-danger" style="padding:20px;" href="'.$set['url'].'/contact">
						<b><i class="fa fa-trophy"> </i> 
						WithDraw</b></a> ';
					} 
  else {
echo '<b class="label label-danger" style="padding:20px;">
						<b><i class="fa fa-trophy"> </i> 
						WithDraw</b></b>';
  }
echo '  
                    </div></div>
					</div></div></div></div></div></div></div></div></div></div></div></div></p></div>';
				

echo '</p><div class="container">';
echo '<div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 warning" style="border:2px solid brown;">
                        <div class="box center warning" style=""><br/>
                        <a class="label label-info" style="padding:20px;" href="'.$set['url'].'/member/donationsent.php">
						<b><i class="fa fa-map-marker"> </i> 
						Donation(s) Send(<font size="2">'.$donsend->rowCount().'</font>)</b></a>
                    </div></div><div class="col-md-6 info" style="border:2px solid brown;">
					<div class="box center info" style=""><br/>
                        <a class="label label-success" style="padding:20px;" href="'.$set['url'].'/member/donationrecieve.php">
						<b><i class="fa fa-credit-card">  </i>
						Donations(s) Recieved(<font size="2">'.$dontaken->rowCount().'</font>)</b></a>
                    </div></div>
					<div class="col-md-6 success" style="border:2px solid brown;">
					<div class="box center success" style=""><br/>
                        <span class="label label-danger" style="padding:20px;">
						<b>Merge Remain(<font size="2">'.$prof['totaltomerge'].'</font>)</b></span>
                    </div></div>
					<div class="col-md-6 error" style="border:2px solid brown;">
                   <div class="box center error" style=""><br/>
                        <span class="label label-warning" style="padding:20px;">
						<b><i class="fa fa-trophy"> </i> '.$planx.'
						>> <i class="fa fa-money"> </i> ₦ '.$emoney.'.00</b></span>
                    </div></div>
					</div></div></div></div></div></div></div></div></div></div></div></div></div>';
				
}
include('../inc/footer.php');
?>