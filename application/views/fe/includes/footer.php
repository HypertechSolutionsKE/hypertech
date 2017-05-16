		    	<!-- Footer start -->
			    <footer id="footWrapper">
			    	<div class="footer-middle">
					    <div class="container">
						    <div class="row">
                            
							    <!-- Tags Cloud footer cell start -->
							    <div class="col-md-3 last contact-widget">
								    <h3>Contact Us</h3>
								    <ul class="details">
								    	<li><i class="fa fa-map-marker shape"></i><span><span class="heavy-font">Our Location: </span>Along Moi Avenue, Sonalux Building, 7th Floor Suite 18</span></li>
								    	<li><i class="fa fa-envelope shape"></i><span><span class="heavy-font">Email: </span>info@hypertechsolutions.co.ke</span></li>
								    	<li><i class="fa fa-phone shape"></i><span><span class="heavy-font">Tel: </span>(+254)700 912916</span></li>
								    	<li><i class="fa fa-skype shape"></i><span><span class="heavy-font">Website: </span>www.hypertechsolutions.co.ke</span></li>
								    </ul>
							    </div>
							    <!-- Tags Cloud footer cell start -->
						    	
						    	<!-- main menu footer cell start -->
							    <div class="col-md-3 first">
								    <h3>Quick Links</h3>
								    <ul class="menu-widget">
									    <li><a href="<?php echo base_url();?>">Home</a></li>
									    <li><a href="#">Services</a></li>
									    <li><a href="#">Products</a></li>
									    <li><a href="<?php echo base_url();?>portfolio">Portfolio</a></li>
									    <li><a href="<?php echo base_url();?>contact">Contact</a></li>
								    </ul>
							    </div>
							    <!-- main menu footer cell start -->
							    
							    <!-- Our Friends footer cell start -->
							    <div class="col-md-3">
							    	<h3>Our Products</h3>
								    <ul class="menu-widget">
									    <li><a href="<?php echo base_url();?>products/hypertech-ischoolpro">Hypertech iSchoolPro</a></li>
									    <li><a href="<?php echo base_url();?>products/hypertech-frontdesk">Hypertech FrontDesk</a></li>
									    <li><a href="<?php echo base_url();?>products/hypertech-smartpos">Hypertech SmartPOS</a></li>
								    </ul>
							    </div>
							    <!-- Our Friends footer cell start -->
							    
							    <!-- Useful Links footer cell start -->
							    <div class="col-md-3">
							    	<h3>Follow us on:</h3>
								    <ul class="social-list">
									    <li><a data-toggle="tooltip" data-placement="top" title="Facebook" href="https://www.facebook.com/hypertechsolutions" target="_blank" class="fa fa-facebook shape sm">facebook</a></li>
									    <li><a data-toggle="tooltip" data-placement="top" title="Twitter" href="https://twitter.com/hypertech_ke" target="_blank" class="fa fa-twitter shape sm">twitter</a></li>
									    <li><a data-toggle="tooltip" data-placement="top" title="Instagram" href="https://www.instagram.com/hypertech_ke" target="_blank" class="fa fa-instagram shape sm">instagram</a></li>
									    <!--<li><a data-toggle="tooltip" data-placement="top" title="Linkedin" href="#" class="fa fa-linkedin shape sm">linkedin</a></li>
									    <li><a data-toggle="tooltip" data-placement="top" title="Skype" href="#" class="fa fa-skype shape sm">skype</a></li>-->
								    </ul>
							    </div>
							    <!-- Useful Links footer cell start -->
							    
							    							    							    
						    </div>
						    
					    </div>	
				    </div>
				    			    
				    <!-- footer bottom bar start -->
				    <div class="footer-bottom">
					    <div class="container">
				    		<div class="row">
					    		<!-- footer copyrights left cell -->
					    		<div class="copyrights col-md-5 first">© Copyright <b class="main-color">Hypertech Solutions Limited</b> <?php echo date('Y'); ?>. All rights reserved.</div>
					    						    		
				    		</div>
					    </div>
				    </div>
				    <!-- footer bottom bar end -->
				</footer>
		    	<!-- Footer end -->
		    </div>
		</div>
		    	
		<!-- Back to top Link -->
	    <a id="to-top"><span class="fa fa-chevron-up shape main-bg"></span></a>
	   
 		
	    <!-- Load JS plugins file -->
 		<script type="text/javascript" src="<?php echo base_url();?>assets/fe/js/assets.min.js"></script>
 		
 		<!-- SLIDER REVOLUTION  -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/fe/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/fe/revolution/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
			(Load Extensions only on Local File Systems !  +
			The following part can be removed on Server for On Demand Loading) -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/fe/revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/fe/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/fe/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/fe/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/fe/revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/fe/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/fe/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/fe/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/fe/revolution/js/extensions/revolution.extension.video.min.js"></script>
		<!-- END SLIDER REVOLUTION 5.0 EXTENSIONS -->
		<script type="text/javascript">
				var tpj=jQuery;			
				var revapi70;
				tpj(window).load(function() {
					if(tpj("#slider").revolution == undefined){
						revslider_showDoubleJqueryError("#slider");
					}else{
						revapi70 = tpj("#slider").show().revolution({
							sliderType:"standard",
							jsFileLocation:"assets/revolution/js/",
							sliderLayout:"fullwidth",
							dottedOverlay:"none",
							delay:9000,
							navigation: {
								keyboardNavigation:"off",
								keyboard_direction: "horizontal",
								mouseScrollNavigation:"off",
								onHoverStop:"off",
								touch:{
									touchenabled:"on",
									swipe_threshold: 75,
									swipe_min_touches: 1,
									swipe_direction: "horizontal",
									drag_block_vertical: false
								}
								,
								arrows: {
									style:"zeus",
									enable:true,
									hide_onmobile:true,
									hide_under:600,
									hide_onleave:true,
									hide_delay:200,
									hide_delay_mobile:1200,
									tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
									left: {
										h_align:"left",
										v_align:"center",
										h_offset:30,
										v_offset:0
									},
									right: {
										h_align:"right",
										v_align:"center",
										h_offset:30,
										v_offset:0
									}
								}
							},
							responsiveLevels:[1240,1024,778,480],
							gridwidth:[1400,1240,778,480],
							gridheight:[390,390,450,400],
							lazyType:"none",
							parallax: {
								type:"mouse+scroll",
								origo:"slidercenter",
								speed:2000,
								levels:[1,2,3,20,25,30,35,40,45,50],
								disable_onmobile:"on"
							},
							shadow:0,
							spinner:"spinner2",
							autoHeight:"off",
							disableProgressBar:"on",
							hideThumbsOnMobile:"off",
							hideSliderAtLimit:0,
							hideCaptionAtLimit:0,
							hideAllCaptionAtLilmit:0,
							debugMode:false,
							fallbacks: {
								simplifyAll:"off",
								disableFocusListener:false,
							}
						});
					}
				});	/*ready*/
			</script>
				
		<!-- general script file -->
		<script type="text/javascript" src="<?php echo base_url();?>assets/fe/js/script.js"></script>
		
	</body>

</html>