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
FlashTitle('About Us | '.$set['title']);
echo '<center><div id="content">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
						                                  
 <h4 class="text-uppercase">
<h2>About Us</h2>
<hr class="dhr" style="background:white;"/>
<p><b>'.$set['name'].' is a peer-to-peer donation Platform borne out 
of the increasing desire to help Nigerians achieve financial help through 
a money circulation donation formula. This formula supports an ideology where
individuals who are members donate tokens within themselves thereby creating
financial empowerment.
<br/> So what are you waiting for? <br/> Give out a token, Get Wealth</b>
<br/><br/></p>
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