<!doctype html>

<html class="no-js" lang="en">
    
<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

        <!-- Page Title Here -->
        <title>{{config('app.name')}}</title>

        <!-- Disable screen scaling-->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">
        
        <!-- Initializer -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/normalize.css')}}">        
        
        <!-- Web fonts and Web Icons -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/pageloader.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/fonts/opensans/stylesheet.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/fonts/asap/stylesheet.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/ionicons.min.css')}}">
        
        <!-- Vendor CSS style -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/foundation.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/js/vendor/jquery.fullPage.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/js/vegas/vegas.min.css')}}">
        
		<!-- Main CSS files -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/main_responsive.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/style-color1.css')}}">
        
        <script src="{{URL::asset('assets/js/vendor/modernizr-2.7.1.min.js')}}"></script>

        <link rel="icon" type="image/png" href="{{URL::asset('assets/img/favicon.png')}}">
    </head>
    <body id="menu" class="alt-bg">        
        <!-- Page Loader -->
        <div class="page-loader" id="page-loader">
            <div><i class="ion ion-loading-d"></i><p>loading</p></div>
        </div>
        
        <!-- BEGIN OF site header Menu -->
		<!-- Add "material" class for a material design style -->
		<header class="header-top">
			
            <div class="menu clearfix">
                <!-- <a href="#about-us">about</a> -->
				
				<!-- Add other menu similar to "about" here -->
                <a href="#contact">contact</a>
            </div>
		</header>
        <!-- END OF site header Menu-->
        
        <!-- BEGIN OF Quick nav icons at left -->
		<nav class="quick-link count-4 nav-left">
			<div class="logo">
				<a href="#home">
					<img src="{{URL::asset('assets/img/logo.png')}}" alt="Logo Brand">
				</a>
			</div>
			<ul id="qmenu" class="qmenu">
				<li data-menuanchor="home">
					<a href="#home" class=""><i class="icon ion ion-home"></i>
					</a>
					<span class="title">Home page</span>
				</li>
				<li data-menuanchor="register">
					<a href="#register"><i class="icon ion ion-compose"></i>
					</a>
					<span class="title">Stay in touch</span>
				</li>
				<!-- <li data-menuanchor="about-us">
					<a href="#about-us"><i class="icon ion ion-android-information"></i>
					</a>
					<span class="title">About Us</span>
				</li> -->
				<!--<li data-menuanchor="contact">
					<a href="#contact"><i class="icon ion ion-android-call"></i>
					</a>
					<span class="title">Contact</span>
				</li>-->
				<li data-menuanchor="contact">
					<a href="#contact"><i class="icon ion ion-email"></i>
					</a>
					<span class="title">Contact</span>
				</li>
			</ul>
		</nav>
        <!-- END OF Quick nav icons at left -->
        


        <!-- BEGIN OF site cover -->
        <div class="page-cover" id="s-cover">
            <!-- Cover Background -->
            <!-- <div class="cover-bg pos-abs full-size bg-img" data-image-src="{{URL::asset('assets/img/bg-default.jpg')}}"></div> -->
						
			<!-- Solid color as background -->
           <div class="cover-bg pos-abs full-size bg-color" data-bgcolor="#fff"></div>
			
			<!-- Solid color as filter -->
            <!-- <div class="cover-bg-mask pos-abs full-size bg-color" data-bgcolor="rgba(0, 0, 0, 0.41)"></div> -->
            
        </div>
        <!--END OF site Cover -->
		
		<!-- Begin of timer pane -->
		<div class="pane-when" id="s-when">
			<div class="content">
				<!-- Clock -->
				<div class="clock clock-countdown">
					<div class="site-config"
						 data-date="01/01/2023 00:00:00" 
						 data-date-timezone="+0"
						 ></div>					
					<div class="elem-center">
						<div class="digit">
							<span class="days">00</span>
							<span class="txt">days</span>
						</div>
					</div>					
					<div class="elem-bottom">
						<div class="deco"></div>
						
						<!-- <span class="days">12</span><span class="thin">D</span> -->
						<span class="hours">00</span><span class="thin">H</span>
						<span class="minutes">00</span><span class="thin">MN</span>
						<span class="seconds">36</span><span class="thin">S</span>
					</div>
				</div> 
				
				
				<footer>
					<p>Before we launch our <strong>new website</strong></p>
				</footer>                
			</div> 
		</div>
		<!-- End of timer pane -->
        
        <!-- BEGIN OF site main content content here -->
        <main class="page-main" id="mainpage">             
            
			<!-- Begin of home page -->
			<div class="section page-home page page-cent" id="s-home">
				<!-- Content -->
				<section class="content">
					
					<header class="header">
						<div class="h-right">
							<h3>Sceptre <br>Chat</h3>
							<h4 class="subhead"><a href="#register">Available here soon</a></h4>
						</div>
					</header>
				</section>
			</div>
			<!-- End of home page -->
            
            <!-- Begin of register page -->
            <div class="section page-register page page-cent"  id="s-register">
                <section class="content">
                    <header class="p-title">
                        <h3>Register <i class="ion ion-compose"></i></h3> 
						<h4 class="subhead">Register to get our latest news</h4>
                    </header>
                    <div>
                        <form id="mail-subscription" class="form magic send_email_form" method="get" action="http://demo.highhay.com/timex/ajaxserver/serverfile.php">
                            <p class="invite">Please, write your email below to stay in touch with us :</p>
							<div class="fields clearfix">
								<div class="input">
									<label for="reg-email">Email </label>
									<input id="reg-email" class="email_f"  name="email" type="email" required placeholder="your@email.address" data-validation-type="email"></div>
								<div class="buttons">
									<button id="submit-email" class="button email_b" name="submit_email">Ok</button>
								</div>
							</div>
                            
                            <p class="email-ok invisible"><strong>Thank you</strong> for your subscription. We will inform you.</p>
                        </form>
                    </div>
                </section>
            </div>
            <!-- End of register page -->
            
            <!-- Begin of about us page -->
            <div class="section page-about page page-cent" id="s-about-us">
                <section class="content">
                    <header class="p-title">
                        <h3>About Us<i class="ion ion-android-information">
                            </i>
                        </h3>
						<h4 class="subhead">We <span class="bold">make</span> only <span class="bold">beautiful</span> things</h4>
                    </header>
                    <!-- <article class="text">
                        <p>Lorem ipsum <strong>magicum </strong>dolor sit amet, consectetur adipiscing elit. Maecenas a sem ultrices neque vehicula fermentum a sit amet nulla.</p>
                        <p>Aenean ultricies odio at erat facilisis tincidunt. Fusce tempor auctor justo, nec facilisis quam vehicula vel. Aenean non mattis purus, eget lobortis odio. </p>
                    </article> -->
                </section>
            </div>
            <!-- End of about us page -->
                
            <!-- Begin of Contact page   -->
            <div class="section page-contact page page-cent  bg-color" data-bgcolor="rgba(95, 25, 208, 0.88)s" id="s-contact">
				<!-- Begin of contact information -->
				<div class="slide" id="s-information" data-anchor="information">
					<section class="content">
						<header class="p-title">
							<h3>Contact<i class="ion ion-location">
								</i>
							</h3>
							<ul class="buttons">
								<!-- <li class="show-for-medium-up">
									<a title="About" href="#about-us" ><i class="ion ion-android-information"></i></a>
								</li> -->
								<li>
									<a title="Contact" href="#contact/information"><i class="ion ion-location"></i></a>
								</li>
							</ul>
						</header>
						<!-- Begin Of Page SubSction -->
						<div class="contact">
							<div class="row">
								<div class="medium-6 columns left">
									<ul>
										<li>
											<h4>Email</h4>
											<p><a href="mailto:support@sceptrechat.com">support@sceptrechat.com</a></p>
										</li>
										<li>
											<h4>Phone</h4>
											<p>09058498188</p>
										</li>
									</ul>
								</div>
								<div class="medium-6 columns social-links right">
									<ul>

										<!-- legal notice -->
										<li class="show-for-medium-up">
											<h4>Website</h4>
											<p><a href="https://www.sceptrechat.com/">https://www.sceptrechat.com/</a></p>
										</li>
										<li  class="show-for-medium-up">
											<h4>Find us on</h4>
											<!-- Begin of Social links -->
											<div class="socialnet">
												<!-- <a href="#"><i class="ion ion-social-facebook"></i></a> -->
												<a href="https://www.instagram.com/sceptrechat"><i class="ion ion-social-instagram"></i></a>
												<a href="https://twitter.com/sceptrechat"><i class="ion ion-social-twitter"></i></a>
											</div>
											<!-- End of Social links -->
										</li>
									</ul>

								</div>
							</div>
						</div>
						<!-- End of page SubSection -->
					</section>  
				</div>
				<!-- end of contact information -->
				
				<!-- begin of contact message --> 
				<div class="slide" id="s-message" data-anchor="message">
					<section class="content">
						<header class="p-title">
							<h3>Write to us<i class="ion ion-email">
								</i>
							</h3>
							<ul class="buttons">
								<!-- <li class="show-for-medium-up">
									<a title="About" href="#about-us"><i class="ion ion-android-information"></i></a>
								</li> -->
								<li>
									<a title="Contact" href="#contact/information"><i class="ion ion-location"></i></a>
								</li>
							</ul>
						</header>
					</section>
						
				</div>
				<!-- End of contact message -->
            </div>
            <!-- End of Contact page  -->   
        
        </main>

        <!-- END OF site main content content here -->  

        <script src="{{URL::asset('assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
		<!-- All vendor scripts -->
        <script src="{{URL::asset('assets/js/vendor/all.js')}}"></script>
		
		<!-- Downcount JS -->
        <script src="{{URL::asset('assets/js/jquery.downCount.js')}}"></script>
		
		<!-- Form script -->
        <script src="{{URL::asset('assets/js/form_script.js')}}"></script>
        
		<!-- Javascript main files -->
        <script src="{{URL::asset('assets/js/main.js')}}"></script>
         
    </body>

</html>