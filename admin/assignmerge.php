<?php
//Ponzi Script
//BY FLASHWEBTECH INC
//ADESANOYE ADELEYE BENJAMIN 
//BennySWAG DACYBERPOWER
//09022165970 or 08110446469
// flashwebtech@gmail.com
//Dacyberpower Ltd
include('../inc/header.php');
echo '<!-- Custom stylesheet - for your changes -->
    <link href="'.$set['url'].'/assets/style.css" rel="stylesheet">';
defined('ADESFLASH') or exit('404 Access Blocked!');
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
		echo '<br/><h3 class="title">Assign Merge No<h3>';
		echo '<div class="menu2"><div class="main"><form method="GET">
		<label style="color:green;">Search User with Username:</label>
		<br/><input type="text" style="width:50%;" name="q" value="'.$_GET['q'].'"/>
		<button name="sch" value="flash">Search</button></form><br/>';
		if(isset($_POST['assm'])){
			if($flash->query("UPDATE `user` SET `totaltomerge`='{$_POST['tomer']}' WHERE `username`='{$_POST['duser']}' LIMIT 1")){
				echo '<p><div class="success">Successfully Merge Assigned! </div></p>';
			}
		}
		if(isset($_GET['q'])){
			$searchr = $_GET['q'];
			$suser = $flash->prepare("SELECT * FROM `user` WHERE MATCH(username) AGAINST(:sch) 
			AND `tomerge`>'0'
			LIMIT {$startpoint} , {$limit}");
			$suser->bindParam(':sch',$searchr);
			$suser->execute();
			echo '<p><div class="main"><div class="main title">Search Result For
			" <font color="red"> '.$_GET['q'].'</font> "</div> ';
			if($suser->rowCount() < 1){
				echo '<div class="info">User Not Found or Not Available to be Merge!</div>';
			}
			while($sresult = $suser->fetch()){
			echo '<div class="left"><b>First Name: '.$sresult['firstname'].' <br/>
			Last Name: '.$sresult['lastname'].' <br/>
			Username: '.$sresult['username'].'<br/>
            Email: '.$sresult['email'].'<br/>
            Phone: '.$sresult['phone'].'<br/>
            Location: '.$sresult['location'].'<br/>
			Member Since: '.$sresult['joined'].'</b></div>
			<div class="left"><small class="left"> Enter Total Number of User You Want to Merge To
			(<font color="green">'.$sresult['username'].'</font>) ones</small></div>
			<div class="left"><form method="POST">
			<input type="hidden" name="duser" value="'.$sresult['username'].'"/>
			<input type="text" style="width:20%;height:40;" name="tomer" value=""/>
			<button style="height:50;padding:15px;" name="assm">Save</button></form><br/>
			</div>
			<hr/>';		
			}
			echo '</div></p>';
			$statement = "`user` WHERE MATCH(username) AGAINST('{$searchr}') AND `tomerge`>'0'";
            $query = $flash->query("SELECT * FROM {$statement} ORDER BY id DESC LIMIT {$startpoint} , {$limit}");
            echo Ben::page($statement,$limit,$page,'?q='.$_GET['q'].'&');
		}
//Rest User
            $hssuser = $flash->query("SELECT * FROM `user` WHERE id>0");
			$ssuser = $flash->query("SELECT * FROM `user` WHERE id>0 AND `tomerge`>'0' ORDER BY `id` ASC
			LIMIT {$startpoint} , {$limit}");
			echo '<p><div class="main"><div class="main title left">All Users</div> ';
			while($ssresult = $ssuser->fetch()){
			echo '<div class="left"><b>First Name: '.$ssresult['firstname'].' <br/>
			Last Name: '.$ssresult['lastname'].' <br/>
			Username: '.$ssresult['username'].'<br/>
            Email: '.$ssresult['email'].'<br/>
            Phone: '.$ssresult['phone'].'<br/>
            Location: '.$ssresult['location'].'<br/>
			Member Since: '.$ssresult['joined'].'</b></div>
			<div class="left"><small class="left"> Enter Total Number of User You Want to Merge To
			(<font color="green">'.$ssresult['username'].'</font>) ones</small></div>
			<div class="left"><form method="POST">
			<input type="hidden" name="duser" value="'.$ssresult['username'].'"/>
			<input type="text" style="width:10%;height:40;" name="tomer" value=""/>
			<button style="height:50;padding:15px;" name="assm">Save</button></form><br/>
			</div>
			<hr/>';	
			}
			if($ssuser->rowCount() < 1){
				echo '<p><div class="info">No Available User to be Merge!</div></p>';
			}
			echo '</div></p>';
			
			$statement = "`user` WHERE id>0 AND `totaltomerge`>'0'";
            $query = $flash->query("SELECT * FROM {$statement} ORDER BY id DESC LIMIT {$startpoint} , {$limit}");
            echo Ben::page($statement,$limit,$page,'?');
		echo '<br/><p><a class="buttong" href="'.$set['url'].'/member/main">Go Back</a></p>
	<br/></div></div></center>';
	}
	else {
		header('Location: '.$set['url'].'/member/main');
		exit;
	}
}
include('../inc/footer.php');
?>