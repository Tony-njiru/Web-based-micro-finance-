  <?php
//Ponzi Script
//BY FLASHWEBTECH INC
//ADESANOYE ADELEYE BENJAMIN 
//BennySWAG DACYBERPOWER
//09022165970 or 08110446469
// flashwebtech@gmail.com
//Dacyberpower Ltd
defined('ADESFLASH') or exit('404 Access Blocked!');
if(FLASHWEBTECHINC !== 1) {
	echo 'No Direct Script Access!';
	exit('Access Forbiden!');
}


?> 
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58e8e250f7bbaa72709c518a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
 <!-- *** GET IT ***
_________________________________________________________ -->
<section style="display:none;">
        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>Do you want to Enjoy this?</h3>
                </div>
                <div class="col-md-4 col-sm-12">
				<?php
				    if($Function->isLogin()){
						echo '<a href="'.$set['url'].'/member/main" class="btn btn-template-transparent-primary">
					Continue to Main Panel</a>';
					}
                    else{
						echo '<a href="'.$set['url'].'/member/register" class="btn btn-template-transparent-primary">
					Click to Register Now</a>';
					}
					?>
                </div>
            </div>
        </div>

        <!-- *** GET IT END *** -->      
	  <!-- *** FOOTER ***
_________________________________________________________ -->

       <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>About us</h4>

                    <p align="justify"><?php echo $set['name']; ?> was founded by a team of enthusiastic 
					humanitarian specialists who wanted to overcome the routine and create a platform 
					that would act in the market not only for business success but for the sake of
					humanitarian and financial empowerment services</p>
					
                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>QUICK LINK</h4>
             <div class="blog-entries">
                              <?php if(!$Function->isLogin()){
                    echo '<div class="item same-height-row clearfix">
                            
                            <div class="name same-height-always">
                                <h5><a href="'.$set['url'].'/member/login">
								<i class="fa fa-sign-in"> </i>LOGIN</a></h5>
                            </div>
                        </div>

                        <div class="item same-height-row clearfix">

                            <div class="name same-height-always">
                                <h5><a href="'.$set['url'].'/member/register">
								<i class="fa fa-edit"> </i>REGISTER</a></h5>
                            </div>
                        </div>'; 
						}
						else{
							if($prof['right'] > 0){
						echo '<div class="item same-height-row clearfix">

                            <div class="name same-height-always">
							<a href="'.$set['url'].'/admin/index.php">
	                   <h5><i class="fa fa-sign-in"> </i>Admin Panel</a></h5>
	                   </div>
                       </div>';
							}
					   echo '<div class="item same-height-row clearfix">

                            <div class="name same-height-always">
							<a href="'.$set['url'].'/member/main">
	                   <h5><i class="fa fa-sign-in"> </i>Main Panel</a></h5>
	                   </div>
                       </div>';	
						}
						?>
                        <div class="item same-height-row clearfix">
                           
                            <div class="name same-height-always">
                                <h5><a href="<?php echo $set['url']; ?>/rules">
								<i class="fa fa- fa-arrow-circle-up"> </i> <?php echo strtoupper($set['name']); ?> RULES</a></h5>
                            </div>
                        </div> 
						
						 <div class="item same-height-row clearfix">
                           
                            <div class="name same-height-always">
                                <h5><i class="fa fa-trophy"> </i> <a href="#testi"> TESTIMONIES</a></h5>
                            </div>
                        </div>
                    </div>

                    <hr class="hidden-md hidden-lg">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Contact</h4>

                     <p><strong>Las Vegas (USA)</strong>
                        <br>4024 Sure Pat Vile 411, 
                        <br>UK 56789-87881.
                        <br>US +13186180080.
                    </p>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->



                <div class="col-md-3 col-sm-6">

                    <h4><b>Comodo secured </b></h4>

                  <div class="photostream">
				  <img src="<?php echo $set['url']; ?>/img/comodo_secure.png" width="113" height="59"></div>
                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.container -->
        </footer>
</section>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
<p class="pull-left"><font size="12"><img src="<?php echo $set['url']; ?>/img/logo.png"/></font></p>
                    <p class="pull-right">Developed by <a href="#">
					<b><?php echo $set['name']; ?> Inc</b></a><br/>
					<img src="<?php echo $set['url']; ?>/img/comodo.png"/> 
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :)
						 If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
					
  
                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->
<br />
<center><a href="https://facebook.com/<?php echo $set['fb']; ?>"><b>Facebook</b></a> |
 <a href="https://twitter.com/<?php echo $set['twitter']; ?>"><b>Twitter</b></a></center><br /><br /><center> 
 &copy; <?php echo date('Y'); ?> - <?php echo $set['name']; ?> </center>

    </div>
    <!-- /#all -->


</body>

</html>







       <!-- *** END FOOTER ***
_________________________________________________________ -->

        