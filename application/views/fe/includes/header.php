<!DOCTYPE html>
<html>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<title><?php echo $page_title;?>Hypertech Solutions Limited</title>
		<meta name="description" content="Hypertech Solutions Ltd">
		<meta name="author" content="Hypertech Solutions">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
	    <link rel="shortcut icon" href="<?php echo base_url();?>assets/fe/images/favicon.png">
		    	
		<!-- CSS StyleSheets -->
		<!--<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/fe/css/assets.css">
		
		<link rel="stylesheet" href="<?php echo base_url();?>assets/fe/css/style.css">
		<link id="theme_css" rel="stylesheet" href="<?php echo base_url();?>assets/fe/css/light.css">
		
		<!-- REVOLUTION SLIDER STYLES -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/fe/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/fe/revolution/css/settings.css" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/fe/revolution/css/layers.css" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/fe/revolution/css/navigation.css" type="text/css">
		<!--[if lt IE 9]>
	    	<script type="text/javascript" src="assets/js/html5.js"></script>
	    <![endif]-->
		
		<!-- Skin CSS file -->
		<link id="skin_css" rel="stylesheet" href="<?php echo base_url();?>assets/fe/css/skins/default.css">
        
	</head>
	<body>
		<div class="pageWrapper animsition">
			<!-- top bar start -->
	    	<div class="top-bar main-bg">
			    <div class="container">
					    
				    <div class="center-tbl">
				    	
				    	<ul class="top-info f-left">
						    <li><a href="mailto:info@hypertechsolutions.co.ke" class="shape"><i class="fa fa-envelope"></i>info@hypertechsolutions.co.ke</a></li>
						    <li><span><i class="fa fa-phone"></i> (+254) 700 912 916 | (+254) 725 641 247</span></li>
					    </ul>
				    	
					    <ul class="social-list alter-bg shape f-right">
						    <li><a href="https://www.facebook.com/hypertechsolutions" target="_blank" class="fa fa-facebook" data-tooltip="true" data-title="Facebook" data-position="bottom"></a></li>
						    <li><a href="https://twitter.com/hypertech_ke" target="_blank" class="fa fa-twitter" data-tooltip="true" data-title="Twitter" data-position="bottom"></a></li>
						    <li><a href="https://www.instagram.com/hypertech_ke/" target="_blank" class="fa fa-instagram" data-tooltip="true" data-title="Instagram" data-position="bottom"></a></li>
					    </ul>
				    </div>
											    
			    </div>
		    </div>
		    <!-- top bar end -->
			
			<header class="top-head " data-sticky="true">
		    	<div class="container">
			    	<!-- Logo start -->
			    	<div class="logo">
				    	<a href="<?php echo base_url();?>"><img alt="" src="<?php echo base_url();?>assets/fe/images/logo2.png" /></a>
				    </div>
				    <!-- Logo end -->
				    
					<div class="f-right responsive-nav">
						<!-- top navigation menu start -->
						<nav class="top-nav nav-animate to-bottom">
							<ul>
								<li class="<?php if ($cur == 'Home'){echo 'selected'; } ?>"><a href="<?php echo base_url();?>">Home</a></li>
								<li class="<?php if ($cur == 'Abouts'){echo 'selected'; } ?>"><a href="#">About Us</a>
									<ul>
										<li><a href="<?php echo base_url();?>about/company-profile">Company Profile</a></li>
										<li><a href="<?php echo base_url();?>about/our-team">Our Team</a></li>
                                    </ul>
                                </li>
								<li class="<?php if ($cur == 'Services'){echo 'selected'; } ?>"><a href="#">Services</a>
									<ul>
										<li><a href="#">Software</a>
											<ul>
												<li><a href="<?php echo base_url();?>services/software/custom-development">Custom Development</a></li>
												<li><a href="<?php echo base_url();?>services/software/mobile-development">Mobile Development</a></li>
												<!--<li><a href="">Business Process Automation</a></li>-->
											</ul>
										</li>
										<!--<li><a href="#">Web</a>
											<ul>
												<li><a href="">Web Design &amp; Hosting</a></li>
 												<li><a href="">Web Development</a></li>
												<li><a href="">Digital Consulting</a></li>  
											</ul>
										</li>-->
										<li><a href="#">Creative Design &amp; Print</a>
                                        	<ul>
												<li><a href="<?php echo base_url();?>services/creative-design/corporate-branding">Corporate Branding</a></li>
 												<li><a href="<?php echo base_url();?>services/creative-design/gift-items">Gift Items</a></li>
                                            </ul>
                                        </li>
                                        <!--<li><a href="<?php echo base_url();?>services/networking">Networking</a></li>-->
                                        <li><a href="#">Consultancy</a>
                                        	<ul>
												<li><a href="<?php echo base_url();?>services/consultancy/business-process-automation">Business Process Automation</a></li>
                                            </ul>
                                        </li>
									</ul>
								</li>
								<li class="<?php if ($cur == 'Products'){echo 'selected'; } ?>"><a href="#">Products</a>
									<ul>
										<li><a href="<?php echo base_url();?>products/hypertech-ischoolpro">Hypertech iSchoolPro</a></li>
										<li><a href="<?php echo base_url();?>products/hypertech-frontdesk">Hypertech FrontDesk</a></li>
										<li><a href="<?php echo base_url();?>products/hypertech-smartpos">Hypertech SmartPOS</a></li>
									</ul>
								</li>
								<li class="<?php if ($cur == 'Portfolio'){echo 'selected'; } ?>"><a href="<?php echo base_url();?>portfolio">Portfolio</a></li>
								<li class="<?php if ($cur == 'Careers'){echo 'selected'; } ?>"><a href="<?php echo base_url();?>careers">Careers</a></li>
								<li class="<?php if ($cur == 'Contact'){echo 'selected'; } ?>"><a href="<?php echo base_url();?>contact">Contact</a></li>
							</ul>
						</nav>
						<!-- top navigation menu end -->
						    
					    <div class="f-right">
					    	<!-- top search start -->
						    <!--<div class="top-search">
					    		<a href="#" class="main-color"><span class="fa fa-search"></span></a>
						    	<div class="search-box">
					    			<input type="text" name="t" placeHolder="Type And Hit Enter..." />
						    	</div>
						    </div>-->
						    <!-- top search end -->
						    
					    </div>
					    
					</div>
		    	</div>
		    </header>
