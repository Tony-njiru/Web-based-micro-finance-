<?php
//Ponzi Script
//BY FLASHWEBTECH INC
//ADESANOYE ADELEYE BENJAMIN 
//BennySWAG DACYBERPOWER
//09022165970 or 08110446469
// flashwebtech@gmail.com
//Dacyberpower Ltd
include('inc/header.php');
defined('ADESFLASH') or exit('404 Access Blocked!');
if(FLASHWEBTECHINC !== 1) {
	echo 'No Direct Script Access!';
	exit('Access Forbiden!');
}
FlashTitle('Error 404 | '.$set['title']);
echo '<br/><p><h1 class="info error center"><img src="'.$set['url'].'/img/delete.png" height="20" width="20"/>
 Error 404 Not Found!</h1></p><br/>';
include('inc/footer.php');
?>
