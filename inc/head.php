<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd"><html>
<head>
<meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="">
<link rel="STYLESHEET" type="text/css" href="'.$set['url'].'/assets/css/style.css"/>
<link rel="STYLESHEET" type="text/css" href="'.$set['url'].'/assets/style.css"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	
    <!-- Css animations  -->
    <link href="<?php echo $set['url']; ?>/css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="<?php echo $set['url']; ?>/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="<?php echo $set['url']; ?>/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $set['url']; ?>/assets/styles.css"/>
    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="<?php echo $set['url']; ?>/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo $set['url']; ?>/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $set['url']; ?>/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $set['url']; ?>/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $set['url']; ?>/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $set['url']; ?>/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $set['url']; ?>/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $set['url']; ?>/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $set['url']; ?>/img/apple-touch-icon-152x152.png" />
</head>

<body>


    <div id="all">
        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
<div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs">Contact us on support@<?php echo $set['slug']; ?></p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="http://facebook.com/<?php echo $set['fb']; ?>" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="http://google.com/search?q=<?php echo $set['url']; ?>" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="http://twitter.com/<?php echo $set['twitter']; ?>" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="<?php echo $set['url']; ?>/contact" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>

                            <div class="login">
                                <a href="<?php echo $set['url']; ?>/member/login" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                                <a href="<?php echo $set['url']; ?>/member/register"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->
	 <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="index.html">
                                <img src="<?php echo $set['url']; ?>/img/logo.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="<?php echo $set['url']; ?>/img/logo-small.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Option 1: Default Page</a>
                                        </li>
                                        <li><a href="index2.html">Option 2: Application</a>
                                        </li>
                                        <li><a href="index3.html">Option 3: Startup</a>
                                        </li>
                                        <li><a href="index4.html">Option 4: Agency</a>
                                        </li>
                                        <li><a href="index5.html">Option 5: Portfolio</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="img/template-easy-customize.png" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Shortcodes</h5>
                                                        <ul>
                                                            <li><a href="template-accordions.html">Accordions</a>
                                                            </li>
                                                            <li><a href="template-alerts.html">Alerts</a>
                                                            </li>
                                                            <li><a href="template-buttons.html">Buttons</a>
                                                            </li>
                                                            <li><a href="template-content-boxes.html">Content boxes</a>
                                                            </li>
                                                            <li><a href="template-blocks.html">Horizontal blocks</a>
                                                            </li>
                                                            <li><a href="template-pagination.html">Pagination</a>
                                                            </li>
                                                            <li><a href="template-tabs.html">Tabs</a>
                                                            </li>
                                                            <li><a href="template-typography.html">Typography</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Header variations</h5>
                                                        <ul>
                                                            <li><a href="template-header-default.html">Default sticky header</a>
                                                            </li>
                                                            <li><a href="template-header-nosticky.html">No sticky header</a>
                                                            </li>
                                                            <li><a href="template-header-light.html">Light header</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="img/template-homepage.png" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Portfolio</h5>
                                                        <ul>
                                                            <li><a href="portfolio-2.html">2 columns</a>
                                                            </li>
                                                            <li><a href="portfolio-no-space-2.html">2 columns with negative space</a>
                                                            </li>
                                                            <li><a href="portfolio-3.html">3 columns</a>
                                                            </li>
                                                            <li><a href="portfolio-no-space-3.html">3 columns with negative space</a>
                                                            </li>
                                                            <li><a href="portfolio-4.html">4 columns</a>
                                                            </li>
                                                            <li><a href="portfolio-no-space-4.html">4 columns with negative space</a>
                                                            </li>
                                                            <li><a href="portfolio-detail.html">Portfolio - detail</a>
                                                            </li>
                                                            <li><a href="portfolio-detail-2.html">Portfolio - detail 2</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>About</h5>
                                                        <ul>
                                                            <li><a href="about.html">About us</a>
                                                            </li>
                                                            <li><a href="team.html">Our team</a>
                                                            </li>
                                                            <li><a href="team-member.html">Team member</a>
                                                            </li>
                                                            <li><a href="services.html">Services</a>
                                                            </li>
                                                        </ul>
                                                        <h5>Marketing</h5>
                                                        <ul>
                                                            <li><a href="packages.html">Packages</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU ================== -->
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">All Pages <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h5>Home</h5>
                                                        <ul>
                                                            <li><a href="index.html">Option 1: Default Page</a>
                                                            </li>
                                                            <li><a href="index2.html">Option 2: Application</a>
                                                            </li>
                                                            <li><a href="index3.html">Option 3: Startup</a>
                                                            </li>
                                                            <li><a href="index4.html">Option 4: Agency</a>
                                                            </li>
                                                            <li><a href="index5.html">Option 5: Portfolio</a>
                                                            </li>
                                                        </ul>
                                                        <h5>About</h5>
                                                        <ul>
                                                            <li><a href="about.html">About us</a>
                                                            </li>
                                                            <li><a href="team.html">Our team</a>
                                                            </li>
                                                            <li><a href="team-member.html">Team member</a>
                                                            </li>
                                                            <li><a href="services.html">Services</a>
                                                            </li>
                                                        </ul>
                                                        <h5>Marketing</h5>
                                                        <ul>
                                                            <li><a href="packages.html">Packages</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Portfolio</h5>
                                                        <ul>
                                                            <li><a href="portfolio-2.html">2 columns</a>
                                                            </li>
                                                            <li><a href="portfolio-no-space-2.html">2 columns with negative space</a>
                                                            </li>
                                                            <li><a href="portfolio-3.html">3 columns</a>
                                                            </li>
                                                            <li><a href="portfolio-no-space-3.html">3 columns with negative space</a>
                                                            </li>
                                                            <li><a href="portfolio-4.html">4 columns</a>
                                                            </li>
                                                            <li><a href="portfolio-no-space-4.html">4 columns with negative space</a>
                                                            </li>
                                                            <li><a href="portfolio-detail.html">Portfolio - detail</a>
                                                            </li>
                                                            <li><a href="portfolio-detail-2.html">Portfolio - detail 2</a>
                                                            </li>
                                                        </ul>
                                                        <h5>User pages</h5>
                                                        <ul>
                                                            <li><a href="customer-register.html">Register / login</a>
                                                            </li>
                                                            <li><a href="customer-orders.html">Orders history</a>
                                                            </li>
                                                            <li><a href="customer-order.html">Order history detail</a>
                                                            </li>
                                                            <li><a href="customer-wishlist.html">Wishlist</a>
                                                            </li>
                                                            <li><a href="customer-account.html">Customer account / change password</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Shop</h5>
                                                        <ul>
                                                            <li><a href="shop-category.html">Category - sidebar right</a>
                                                            </li>
                                                            <li><a href="shop-category-left.html">Category - sidebar left</a>
                                                            </li>
                                                            <li><a href="shop-category-full.html">Category - full width</a>
                                                            </li>
                                                            <li><a href="shop-detail.html">Product detail</a>
                                                            </li>
                                                        </ul>
                                                        <h5>Shop - order process</h5>
                                                        <ul>
                                                            <li><a href="shop-basket.html">Shopping cart</a>
                                                            </li>
                                                            <li><a href="shop-checkout1.html">Checkout - step 1</a>
                                                            </li>
                                                            <li><a href="shop-checkout2.html">Checkout - step 2</a>
                                                            </li>
                                                            <li><a href="shop-checkout3.html">Checkout - step 3</a>
                                                            </li>
                                                            <li><a href="shop-checkout4.html">Checkout - step 4</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Contact</h5>
                                                        <ul>
                                                            <li><a href="contact.html">Contact</a>
                                                            </li>
                                                            <li><a href="contact2.html">Contact - version 2</a>
                                                            </li>
                                                            <li><a href="contact3.html">Contact - version 3</a>
                                                            </li>
                                                        </ul>
                                                        <h5>Pages</h5>
                                                        <ul>
                                                            <li><a href="text.html">Text page</a>
                                                            </li>
                                                            <li><a href="text-left.html">Text page - left sidebar</a>
                                                            </li>
                                                            <li><a href="text-full.html">Text page - full width</a>
                                                            </li>
                                                            <li><a href="faq.html">FAQ</a>
                                                            </li>
                                                            <li><a href="404.html">404 page</a>
                                                            </li>
                                                        </ul>
                                                        <h5>Blog</h5>
                                                        <ul>
                                                            <li><a href="blog.html">Blog listing big</a>
                                                            </li>
                                                            <li><a href="blog-medium.html">Blog listing medium</a>
                                                            </li>
                                                            <li><a href="blog-small.html">Blog listing small</a>
                                                            </li>
                                                            <li><a href="blog-post.html">Blog Post</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.yamm-content -->
                                        </li>
                                    </ul>
                                </li>
                                <!-- ========== FULL WIDTH MEGAMENU END ================== -->

                                <li class="dropdown">
                                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="contact.html">Contact option 1</a>
                                        </li>
                                        <li><a href="contact2.html">Contact option 2</a>
                                        </li>
                                        <li><a href="contact3.html">Contact option 3</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->