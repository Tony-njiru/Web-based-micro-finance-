<?php
//Ponzi Script
//BY FLASHWEBTECH INC
//ADESANOYE ADELEYE BENJAMIN 
//BennySWAG DACYBERPOWER
//09022165970 or 08110446469
// flashwebtech@gmail.com
//Dacyberpower Ltd
include 'inc/header.php';
defined('ADESFLASH') or exit('404 Access Blocked!');
if(FLASHWEBTECHINC !== 1) {
	echo 'No Direct Script Access!';
	exit('Access Forbiden!');
}
FlashTitle('Rules And Regulation | '.$set['title']);
echo '<center><div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
						                                  
 <h4 class="text-uppercase">
<h2>Rules</h2>
<hr class="dhr" style="background:white;"/>
<p><b>'.$set['rules'].'</p>
</div></div>
<div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="box"><br/><br/>
						<h2> Information </h2>
						<p><b>'.$set['notification'].'</b></p>
						</div></div></div></div></div></div></center>';
include 'inc/footer.php';
?>