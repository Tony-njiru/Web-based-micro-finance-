<?php 
include('inc/header.php');
defined('ADESFLASH') or exit('404 Access Blocked!');
if(FLASHWEBTECHINC !== 1) {
	echo 'No Direct Script Access!';
	exit('Access Forbiden!');
} 
FlashTitle('Home | '.$set['title']);
$totdo = $flash->query("SELECT * FROM `donation` WHERE `id`>'0'");
?>      
	  <hr class="ben" style="background:green;padding:3px;"/>
            <!-- *** HOMEPAGE CAROUSEL ***
 _________________________________________________________ -->

           <!-- Slider Here -->
<section id="home" class="netfx"><br/><br/>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="home-wrapper home-wrapper-alt"><br/><br/>
                        <h1 style="color:#f5678f;">"We can't help everyone, but Everyone can help Someone"
	<h5>Ronald Reagan</h5></h1><br />
                   <strong style="color:brows;font-size:20px">So what are you waiting for? <br/>
Give out a token, get Wealth</strong>
</h4><br/><br /><br />
                        <div class="users_paid text-center" style="padding-bottom:
						30px;background-color:transparent;color:#ffffff">
                            <p style="font-size:25px;color:#fff;">Render Help & Get Help X2</p>
                            <h3 style="color:cyan;">Getting 100% of Investment + 50% Bonus Upon recycle</h3>
                            <p style="color:#fff;font-size:25px"></p><br/>
                        </div>
						<?php if(!$Function->isLogin()){
                        echo '<a href="'.$set['url'].'/member/register?sess='.md5(uniqid(rand())).'" class="btn btn-template-main">Join Now</a>';
						}
						?>
                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>
                </div>
            </div>
        </div>
    </section>
	
	<!-- More -->
        </section>
<!-- Work Here -->
		<section class="bar background-gray no-mb padding-big text-center-sm" style="display:none;">
            <div class="container">

 <div class="container">
                <div class="row">
                    <div class="col-md-4">
                   <div class="box-simple"><br/>
                  <h3>TARGET MARKET</h3>
				  <p>
				  Serious minded indivadual who are determined to achieve financial freedom,
				  and achieve specific life goals</p>
             </div>				   
           </div>
		   <div class="col-md-4"><div class="box-simple"><br/>
		   <h3>ACTIVITY SUPPORT</h3>
		   <p>
		   An Active standby support readily available to respond to,
		   and address poeeible member issues</p>
		   </div></div>
		   <div class="col-md-4"><div class="box-simple"><br/>
		  <h3>AUTO BLOCK</h3>
		  <p>
		  The emergency of cyber beggers prompted the introduction of ban on
		  member who deliberately refused to make payment</p>
		   </div></div>
             <div class="col-md-4"><div class="box-simple"><br/>
		   <h3>SECURITY</h3>
		   <p>
		   *** is a scured domain, encrypted with the best anti-hackingsoftware to prevent,
		   cyber attacks and protect user data</p>
		   </div></div>
		    <div class="col-md-4"><div class="box-simple"><br/>
		   <h3>EFFICIENT AUTO PAIRING</h3>
		   <p>
		   *** is designed by it's experienced evelopers to ensure consistent balanced pairing.
		   Hence, the issue of delayed pairing has been resolved</p> 
		   </div></div>
		    <div class="col-md-4"><div class="box-simple"><br/>
			<h3>dedicated server</h3>
			<p>
			* is hosted on a dedicated server which has capacity to accommodate over 2 million active
			users</p>
			
		   </div></div>
			<!-- /.project owl-slider -->
              </div></div></div></div>
            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>
		<!-- End -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <div class="title-box-icon">
                            <i class="pe-7s-medal"></i>
                            <p>
		  The emergency of cyber beggers prompted the introduction of ban on
		  member who deliberately refused to make payment</p></div>
                    </div>
                </div>
            </div>
            <!-- *** HOMEPAGE CAROUSEL END *** -->
        
<!-- More -->
        </section>
<!-- Work Here -->
		<section class="bar background-gray no-mb padding-big text-center-sm">
            <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 class="title">Our Features.</h3>
                    <p class="text-muted sub-title"></p> <hr style="background:green;padding:2px;"/> </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="features-box">
                        <img src="<?php echo $set['url']; ?>/img/support.png" alt="img" class="" width="50px" height="50px">
                        <h4>Support</h4>
                        <p class="text-muted">
                           Our Support Team is ready to assist you on any issues. 
						   you can contact us via 
						   Live Chat and Support mail. Our Team Provide 247 support.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="features-box">
                        <img src="<?php echo $set['url']; ?>/img/kloud.png" alt="img" class="" width="50px" height="50px">
                        <h4>Secured</h4>
                        <p class="text-muted">
                            <?php echo $set['name']; ?> is Secured & Hosted On 
							a secure Server With 99.9% Uptime Guarantee & Unlimited Bandwidth so you are Safe 100%.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="features-box">
                        <font size="8"><img src="<?php echo $set['url']; ?>/img/mvip.png" alt="img" class="" width="50px" height="50px">  </font>
                        <h4>Operation</h4>
                        <p class="text-muted"> HIW: the system auto match and note that 
						you get your 100% Investment + 50% Bonus 
						each time you recycle your Account.
                        </p>
                    </div>
                </div>
            </div>
        </div>
		<?php if($set['notification'] != ''){
		echo '<div class="x"><div class="xx"><div class="xxx"><div class="xxxx">
	 <center><div class="error">INFO: <i class="fa fa-info"> </i> '.$set['notification'].' <i class="fa fa-info"> </i>
		</div></center></div></div></div></div>';
		}
		?>
            <!-- *** HOMEPAGE CAROUSEL END *** -->
        </section>
		
		<!-- End -->
		<div class="container" style="padding:8px;background:white;">  </div>
        <section class="bar background-gray no-mb padding-big text-center-sm" style="display:none;">
		
            <div class="container">
<div style="color:#9933CC" align="center"><h2><?php echo $set['name']; ?> Processes</h2><div>
							<div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">

							     <div class="content">
								 
                                    <h4><a href="#">Register</a></h4>
                                    <p align="justify">Complete online registration form with full details, 
									contact number in international format (+1 901789098), 
									a valid and accessible email account will be carried out
									on your email address, so you are expected to use correct 
									email address. Your <?php echo $set['name']; ?> account is now confirmed and you 
									can proceed to login with username and password chosen during 
registration to access your newly created account.</p>
                  <p class="read-more" align="left">
				  <a href="<?php echo $set['url']; ?>/member/register?sess=<?php echo md5(uniqid(rand())); ?>" class="btn btn-template-main">Register Now</a>  </p>
                            </div>
                            </div>
                            <!-- /.box-image-text -->
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                
                                <div class="content">
                                    <h4><a href="#">Add Payment Options</a></h4>
                                    <p align="justify">After confirming your newly registered account, 
									continue to login and complete your profile including your 
									fund processing options this includes local bank transfer,
									ATM deposits, Bank Deposit, Mobile Money and/or any other
									fund processor accepted in the system. Adding a payment processor
									will speed up the process to help you receive donations from other 
									participants in real time.</p>
                  <p class="read-more" align="left">
				  <a href="<?php echo $set['url']; ?>/member/register?sess=<?php echo md5(uniqid(rand())); ?>" class="btn btn-template-main">
				  Register Now</a>  </p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                               
                                <div class="content">
                                    <h4><a href="#">Donation schedule</a></h4>
                                    <p align="justify">Once you’re in your user dashboard,
									familiarize yourself with your account. We have four donation options
									(<?php echo $mcplan1; ?>, <?php echo $mcplan2; ?>, <?php echo $mcplan3; ?>,
									<?php echo $mcplan4; ?> and <?php echo $mcplan5; ?>) available 
									for specific 
									donation. Get in touch with the receiver to make fast possible donation 
									payment available and once funds is transfer or send, go to your outgoing 
									donation and click I have paid once fund is paid, 
									then recipient will
									confirm your donation on other end once fund is received in his/her account.</p>
                                </div>
                            </div>
                            <!-- /.box-image-text -->
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                
                                <div class="content">
                                    <h4><a href="#">Receive Donation</a></h4>
                                    <p align="justify">Once you make a donation of specific amount 
									(<?php echo $mcplan1; ?>, <?php echo $mcplan2; ?>, <?php echo $mcplan3; ?>,
									<?php echo $mcplan4; ?> and <?php echo $mcplan5; ?>),
									you’re scheduled automatically to receive a donation from other 
									participants on a scheduled date (incoming donation in your dashboard)</p>
		
		
		INFORMATION FROM ADMINISTRATOR
		
		<div class="alert alert-danger">
<strong>NOTE:</strong> <?php echo $set['notification']; ?>.
<p>Thanks to <?php echo $set['name']; ?>!
</p></div>		

                                </div>
                            </div>

            </div>
        </div></div>
		<!-- End -->
		
		
                                </div>
                            </div>

            </div>
        </section>
		
		 <section class="bar background-white" style="display:none;">
		 <div class="heading text-center">
                            <h2>Statistics</h2></div>
            <div class="container">
                <div class="row showcase">
				
                    <div class="col-md-3 col-sm-6">
					
                        <div class="item">
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
		<?php
		// Plans Member Counter
		$cplans1 = $flash->query("SELECT * FROM `user` WHERE `plan`='1'");
		$cplans2 = $flash->query("SELECT * FROM `user` WHERE `plan`='2'");
		$cplans3 = $flash->query("SELECT * FROM `user` WHERE `plan`='3'");
		$cplans4 = $flash->query("SELECT * FROM `user` WHERE `plan`='4'");
		$cplans5 = $flash->query("SELECT * FROM `user` WHERE `plan`='5'");
		
		
		?>
		
                             <h4><span class="counter"><?php echo (0+$cplans1->rowCount()); ?></span><br>

		<?php echo $mcplan1; ?></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                            <h4><span class="counter"><?php echo (0+$cplans2->rowCount()); ?></span><br>

		<?php echo $mcplan2; ?></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                            <h4><span class="counter"><?php echo (0+$cplans3->rowCount()); ?></span><br>

		<?php echo $mcplan3; ?></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                            <h4><span class="counter"><?php echo (0+$cplans4->rowCount()); ?></span><br> 
<?php echo $mcplan4; ?></h4>
                        </div>
                    </div>
	<div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                            <h4><span class="counter"><?php echo (0+$cplans5->rowCount()); ?></span><br> 

		<?php echo $mcplan5; ?></h4>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
		
<section class="bar background-pentagon no-mb" id="packages">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>Packages we Offer</h2>
                        </div>

                        <p class="lead" align="center">Select the appropriate package that suites you and 
						make yourself stand out from the crowd</p>

                        <div class="row packages">
									                            <div class="col-md-3">
                                <div class="package ">
                                    <div class="package-header light-green">
                                        <h5><?php echo $mcplan1; ?></h5>
                                    </div>
                                    <div class="price">
                                        <div class="price-container">
                                          <font size="12" color="black"><b>
										  ₦<?php echo $mcprice1; ?></b></font>
                                            <span class="period"></span>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i>2:1 Matrix</li>
                                        <li><i class="fa fa-check"></i>Auto Assign</li>
                                        <li><i class="fa fa-check"></i>Pay Out/In Option</li>
										<li><i class="fa fa-check"></i>100% + 50% after Recycle</li>
                                        <li><i class="fa fa-check"></i>6 Hours Auto Purge 
										
                                        
										 <li><i class="fa fa-check"></i>
										 <?php echo '₦'.($mcprice1*2); ?> Return Investment</li>

                                    </ul>
									
									
                                    <a href="<?php echo $set['url']; ?>/member/register?plan=1&sess=<?php echo md5(uniqid(rand())); ?>" class="btn btn-template-main">Sign Up </a>
                                
								
								</div>
                            </div>
							                            <div class="col-md-3">
                                <div class="package ">
                                    <div class="package-header light-green">
                                        <h5><?php echo $mcplan2; ?></h5>
                                    </div>
                                    <div class="price">
                                        <div class="price-container">
                                             <font size="12" color="black"><b> 
											 ₦<?php echo $mcprice2; ?></b></font>
                                            <span class="period"></span>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i>2:1 Matrix</li>
                                        <li><i class="fa fa-check"></i>Auto Assign</li>
                                        <li><i class="fa fa-check"></i>Pay Out/In Option</li>
										<li><i class="fa fa-check"></i>100% + 50% after Recycle</li>
                                        <li><i class="fa fa-check"></i>6 Hours Auto Purge 
										
                                        
										 <li><i class="fa fa-check"></i>
										 <?php echo '₦'.($mcprice2*2); ?> Return Investment</li>

                                    </ul>
									
									
                                    <a href="<?php echo $set['url']; ?>/member/register?plan=2&sess=<?php echo md5(uniqid(rand())); ?>" class="btn btn-template-main">Sign Up </a>
                                
								
								</div>
                            </div>
							                            <div class="col-md-3">
                                <div class="package ">
                                    <div class="package-header light-green">
                                        <h5><?php echo $mcplan3; ?></h5>
                                    </div>
                                    <div class="price">
                                        <div class="price-container">
                                             <font size="12" color="black"><b> 
											 ₦<?php echo $mcprice3; ?></b></font>
                                            <span class="period"></span>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i>2:1 Matrix</li>
                                        <li><i class="fa fa-check"></i>Auto Assign</li>
                                        <li><i class="fa fa-check"></i>Pay Out/In Option</li>
										<li><i class="fa fa-check"></i>100% + 50% after Recycle</li>
                                        <li><i class="fa fa-check"></i>6 Hours Auto Purge 
										
                                        
										 <li><i class="fa fa-check"></i>
										 <?php echo '₦'.($mcprice3*2); ?> Return Investment</li>

                                    </ul>
									
									
                                    <a href="<?php echo $set['url']; ?>/member/register?plan=3&sess=<?php echo md5(uniqid(rand())); ?>" class="btn btn-template-main">Sign Up </a>
                                
								
								</div>
                            </div>
				             <div class="col-md-3">
                                <div class="package ">
                                    <div class="package-header light-green">
                                        <h5><?php echo $mcplan4; ?></h5>
                                    </div>
                                    <div class="price">
                                        <div class="price-container">
                                             <font size="12" color="black"><b> 
											 ₦<?php echo $mcprice4; ?></b></font>
                                            <span class="period"></span>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i>2:1 Matrix</li>
                                        <li><i class="fa fa-check"></i>Auto Assign</li>
                                        <li><i class="fa fa-check"></i>Pay Out/In Option</li>
										<li><i class="fa fa-check"></i>100% + 50% after Recycle</li>
                                        <li><i class="fa fa-check"></i>6 Hours Auto Purge
										
										 <li><i class="fa fa-check"></i>
										 <?php echo '₦'.($mcprice4*2); ?> Return Investment</li>

                                    </ul>
									
									
                                    <a href="<?php echo $set['url']; ?>/member/register?plan=4&sess=<?php echo md5(uniqid(rand())); ?>" class="btn btn-template-main">
									Sign Up </a>
                                
								
								</div>
                            </div>
							  <div class="col-md-3">
                                <div class="package ">
								<div class="package-header light-green">
                                        <h5><?php echo $mcplan5; ?></h5>
                                    </div>
                                    <div class="price">
                                        <div class="price-container">
                                             <font size="12" color="black"><b>
											 ₦<?php echo $mcprice5; ?></b></font>
                                            <span class="period"></span>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i>2:1 Matrix</li>
                                        <li><i class="fa fa-check"></i>Auto Assign</li>
                                        <li><i class="fa fa-check"></i>Pay Out/In Option</li>
										<li><i class="fa fa-check"></i>100% + 50% after Recycle</li>
										
                                        <li><i class="fa fa-check"></i>6 Hours Auto Purge 
										
                                        
										 <li><i class="fa fa-check"></i>
										 <?php echo '₦'.($mcprice5*2); ?> Return Investment</li>

                                    </ul>
									
									
                                    <a href="<?php echo $set['url']; ?>/member/register?plan=5&sess=<?php echo md5(uniqid(rand())); ?>" class="btn btn-template-main">
									Sign Up </a>
                                
								
								</div>
                            </div>
							                            <!-- / END FIRST PACKAGE -->

                           
                        </div>

                    </div>
                </div>
            </div>
        </section>
		<!-- More And More -->
		<section class="bar background-white">
            <div class="container">
                <div class="col-md-12">


                    <div class="row">
					
                        <div class="col-md-4">
                           <div class="box-simple">
                                <h3>AIM</h3>
                                <p>
								To provide a reliable and sustainable system with support needed to enable 
								our members achieve their financial goals with our donation ideology.
								
                                 <br/> 
                                
								</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box-simple">
                                
                                <h3>Mission</h3>
                                <p><?php echo $set['name']; ?> aims to make every member financial empowered. 
								through our helperstoken ideology.
                                 Everyone should be financialy empowered and everyone will be.
								 Its a right, its our members right and thats our Mission. </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box-simple">
                                
                                <h3>Vision</h3>
                                <p> Our vision is to achieve our declared Mission.
                                  
								   
								  </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- *** GET IT END *** -->

<a name="testi"> </a>
        <section class="bar background-gray no-mb padding-big text-center-sm" style="display:none;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading text-center">
                            <h2>Testimonials</h2>
                        </div>

                        <p class="lead" align="center">See what people are saying about us.</p>


                        <!-- *** TESTIMONIALS CAROUSEL ***
 _________________________________________________________ -->
										<?php 
										if(date('d') > 4){
											$ddvdd = (date('d') - 4);
										}
										if(date('d') > 3){
											$ddvd = (date('d') - 3);
										}
										else {
											$ddvd = date('d');
										}
										if(date('d') > 3){
											$ddvd2 = (date('d') - 1);
										}
										else {
											$ddvd2 = date('d');
										}
										?>

                        <ul class="owl-carousel testimonials same-height-row">
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p align="justify">I joined <?php echo $set['name']; ?> 
										on core aim to share with the world I had N<?php echo $mcprice4; ?>
										to 
										spend now. Thanks very much for this opportunity. 
										I am happy with this platform.</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="<?php echo $set['url']; ?>/img/comittee.png">
                                            <h5>Ebuka</h5>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p align="justify">I'm Muritala Abdulrhamom Adewale by name on 
									 <?php echo date('M'); ?>  <?php echo $ddvd; ?>,
										<?php echo date('Y'); ?> i make a donation of N<?php echo $mcprice3; ?> 
										and on <?php echo date('M'); ?>  <?php echo $ddvd2; ?>,
										<?php echo date('Y'); ?> i was able to receive N<?php echo ($mcprice3*2); ?>
										cash in my account. 
										I really like this platform......it's making sense....</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="<?php echo $set['url']; ?>/img/comittee.png">
                                            <h5>Rahmon</h5>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p align="justify">As i don get alert God Win!!!! 
										I registered on this platform day before yesterday
										 and make a 
										pledge of #<?php echo $mcprice1; ?>, within 17hours i got an alert of 
										#<?php echo ($mcprice1*2); ?> 
										in my account. <?php echo $set['name']; ?> is the best!!!!!!!  
										Maintain the Good Work......</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="<?php echo $set['url']; ?>/img/comittee.png">
                                            <h5>Jude</h5>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p align="justify">God bless <?php echo $set['name']; ?> for this 
										wonderful
										platform I pH #<?php echo $mcprice4; ?> and GH back 
                                     #<?php echo ($mcprice4*2); ?>		in 2 days God bless 
										you once again Love you</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="<?php echo $set['url']; ?>/img/comittee.png">
                                            <h5>Oluniyi</h5>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p align="justify"><?php echo $set['name']; ?> is the best...
										with <?php echo $set['name']; ?> 
										now I don't lack</p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="<?php echo $set['url']; ?>/img/comittee.png">
                                            <h5>OmoDolapo</h5>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p align="justify">Am very very happy  to been in this  platform 
										I register  on
										<?php echo $ddvd; ?> with N<?php echo $mcprice2; ?>
										package and I receive my 
										N<?php echo ($mcprice2*2); ?> on <?php echo $ddvd2; ?> long 
										live <?php $set['name']; ?> </p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>                                        </div>
                                        <div class="name-picture">
                                            <img class="" alt="" src="<?php echo $set['url']; ?>/img/comittee.png">
                                            <h5>Sylvester</h5>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- /.owl-carousel -->

                        <!-- *** TESTIMONIALS CAROUSEL END *** -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.bar -->

        <section class="bar background-image-fixed-2 no-mb color-white text-center">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="icon icon-lg"><i class="fa fa-info"></i>                        </div>
                        <h3 class="text-uppercase">Want to know how <?php echo $set['name']; ?> Works?</h3>
                        <p class="lead">Donate and get 100% of your Initial Investment + 50% Bonus Upon Recycle.</p>
                        <p class="text-center">
                            <a href="<?php echo $set['url']; ?>/about" class="btn btn-template-transparent-black btn-lg">
							ABOUT <?php echo $set['name']; ?></a>  <a href="<?php echo $set['url']; ?>/rules" class="btn btn-template-transparent-black btn-lg">Our Rules</a>                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.bar -->
<?php 
include 'inc/footer.php';
?>