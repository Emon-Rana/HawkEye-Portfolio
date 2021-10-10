
<?php 

include ("header.php");
include ('server.php'); ?>

		<!--Container-->
		<!--Header-->
		<div id="home" class="header">
			<div class="container">
				<!--Top-header-->
				<div class="top-header">
					<!--Logo-->
					<!--top-nav-->
					<div class="top-nav">
						<div class="navigation">
							<div class="logo">
								<h1><a href="index.php" ><span class="rotate">H</span>awkEye</a></h1>
							</div>
							<div class="navigation-right">
								<span class="menu"><img src="images/menu.png" alt="Image" /></span><!--Hidden menu for responsive mini device-->
								<nav class="link-effect-3" id="link-effect-3" >
									<ul class="nav1 nav nav-wil" >
										<li class="active" ><a data-hover="Home" href="index.php" >Home</a></li>
										<li><a class="scroll" data-hover="About" href="#about" >About</a> </li>
										<li><a class="scroll" data-hover="Services" href="#services" >Services</a> </li>
										<li><a class="scroll" data-hover="Experience" href="#work" >Experience</a> </li>
										<li><a class="scroll" data-hover="Portfolio" href="#port" >Portfolio</a> </li>
										<li><a class="scroll" data-hover="Blog" href="#blogs" >Blog</a> </li>
										<li><a class="scroll" data-hover="Contact" href="#contact" >Contact</a> </li>
									</ul>
								</nav>
								<!--Script for menu-->
								<script>
									$( "span.menu" ).click(function() {
										$( "ul.nav1" ).slideToggle( 300, function() {
										// Animation complete.
										});
									});
								</script>
								<!--/Script for menu-->
							</div>
							<div class="clearfix" ></div><!--Easily clear floats by adding .clearfix to the parent element. Can also be used as a mixin-->
						</div>
					</div><!--End of menu (top-nav) section-->
					
					<!--Start banner section-->
					<div class="banner-info">
						<div class="col-md-7 header-right">
							<h1>HI !</h1>
							<h6>Full-Stack web developer</h6>
							<ul class="address">
								<li>
									<ul class="address-text">
										<li><b>Name : </b></li>
										<li>Md. Emon Rana</li>
									</ul>
								</li>
								<li>
									<ul class="address-text">
										<li><b>D.O.B : </b></li>
										<li>01/01/1988</li>
									</ul>
								</li>
								<li>
									<ul class="address-text">
										<li><b>Phone : </b></li>
										<li>+88 01941***</li>
									</ul>
								</li>
								<li>
									<ul class="address-text">
										<li><b>address : </b></li>
										<li> Dhaka-1216, Bangladesh</li>
									</ul>
								</li>
								<li>
									<ul class="address-text">
										<li><b>Email : </b></li>
										<li><a href="mailto:emonrana72@gmail.com">emonrana@gmail.com</a></li>
									</ul>
								</li>
								<li>
									<ul class="address-text">
										<li><b>website : </b></li>
										<li><a href="www.porthub.com" target="_blank">www.porthub.com</a></li>
									</ul>
								</li>
							</ul>
							<!--<button class="cv" onclick="window.location.href='download.php?file=resume'" >Download CV   <i class=" cvicon fas fa-file-word"></i></button>-->
							<button class="cv" onclick="window.location.href='download.php?file=resume.pdf'" >Download CV   <i class=" cvicon fas fa-file-word"></i></button>
						</div>
						<div class="col-md-5 header-left">
							<!--<div class="errormsg">
								<?php include('errors.php'); ?>
							</div>This is for showing error massage due to worng password-->
							<button class="edit" data-toggle="modal" data-target="#editsec" ><i class="fas fa-user-edit"></i> Edit</button>
							<div class="modal ab fade" id="editsec" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
								<div class="modal-dialog editpop" role="document">
									<div class="modal-content editpop"> <!--here using bootstrap modal plugin-->
										<div class="modal-header">
											<h4 class="title edit-title">Please Log-In To Access</h4>
											<button type="button" class="close ab edit-close" data-dismiss="modal" aria-label="close" style="margin-top: -1em !important;"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="modal-body about">
											<div class="editpop">
												<div class="editpop-inner">
													<form action="" method="post">
													
														<!--?php include 'errors.php'; ?-->
														<input type="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="" />
														<input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="" />
														<input id="password-field" type="password" name="password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" required="***" />
															 <span toggle="#password-field"  class="fas fa-eye-slash fa-eye field-icon toggle-password hidepass"></span>
															 <script type="text/javascript">
																$(".toggle-password").click(function() {

																  $(this).toggleClass("fa-eye fa-eye-slash");
																  var input = $($(this).attr("toggle"));
																  if (input.attr("type") == "password") {
																	input.attr("type", "text");
																  } else {
																	input.attr("type", "password");
																  }
																});
																
																
																/**function showPwd(id, el) {
																	  let x = document.getElementById(id);
																	  if (x.type === "password") {
																		x.type = "text";
																		el.className = 'fas fa-eye-slash toggle-password';
																	  } else {
																		x.type = "password";
																		el.className = 'fas fa-eye toggle-password';
																	  }
																	}**/
																
																/**const togglePassword = document.querySelector('.toggle-password');
																const password = document.querySelector('#password-field');

																togglePassword.addEventListener('click', function (e) {
																	// toggle the type attribute
																	const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
																	password.setAttribute('type', type);
																	// toggle the eye / eye slash icon
																	this.classList.toggle('fa-eye');
																});**/

															 </script>
															<!--<i class="fas fa-eye-slash fa-eye hidepass"></i> -<i class="fas fa-eye"></i>-->
														<div class="editremember">
															<input type="checkbox" value="lsRememberMe" id="rememberMe"><label for="rememberMe">Remember me</label>
														</div>
															<a class="testlog" href="#">
															  <span></span>
															  <span></span>
															  <span></span>
															  <span></span>
															  <button name="login_user" class="login" type="submit" value="Send" >Log-In</button>
															</a>
														<a href="#" class="forgotpass" >Forgotten Password ?</a>
														
														
													</form>
													
													<!--<form><!--here using bootstrap form plugin--
													  <div class="form-group">
														<label for="exampleInputEmail1">Email address</label>
														<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
														<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
													  </div>
													  <div class="form-group">
														<label for="exampleInputPassword1">Password</label>
														<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
													  </div>
													  <div class="form-check">
														<input type="checkbox" class="form-check-input" id="exampleCheck1">
														<label class="form-check-label" for="exampleCheck1">Check me out</label>
													  </div>
													  <button type="submit" class="btn btn-primary">Submit</button>
													</form>-->
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--This style is for a button that show many particle after click
							<div class="btn-contain">
								<button class="btn">Click Me!</button>
								<div class="btn-particles">
								</div>
							</div>
							<script>
								$.fn.boom = function(e) {
									var colors = [
										'#ffb3f6',
										'#7aa0ff',
										'#333',
										// '#FFD100',
										// '#FF9300',
										// '#FF7FA4'
									];
									var shapes = [
										'<polygon class="star" points="21,0,28.053423027509677,11.29179606750063,40.97218684219823,14.510643118126104,32.412678195541844,24.70820393249937,33.34349029814194,37.989356881873896,21,33,8.656509701858067,37.989356881873896,9.587321804458158,24.70820393249937,1.0278131578017735,14.510643118126108,13.94657697249032,11.291796067500632"></polygon>', 
										// '<path class="circle" d="m 20 1 a 1 1 0 0 0 0 25 a 1 1 0 0 0 0 -25"></path>',
										'<polygon class="other-star" points="18,0,22.242640687119284,13.757359312880714,36,18,22.242640687119284,22.242640687119284,18.000000000000004,36,13.757359312880716,22.242640687119284,0,18.000000000000004,13.757359312880714,13.757359312880716"></polygon>',
										'<polygon class="diamond" points="18,0,27.192388155425117,8.80761184457488,36,18,27.19238815542512,27.192388155425117,18.000000000000004,36,8.807611844574883,27.19238815542512,0,18.000000000000004,8.80761184457488,8.807611844574884"></polygon>'
									];

									var btn = $(this);
									var group = [];
									var num = Math.floor(Math.random() * 50) + 30;

									for(i = 0; i < num; i++) {
										var randBG = Math.floor(Math.random() * colors.length);
										var getShape = Math.floor(Math.random() * shapes.length);
										var c = Math.floor(Math.random() * 10) + 5;
										var scale = Math.floor(Math.random() * (8 - 4 + 1)) + 4;
										var x = Math.floor(Math.random() * (150 + 100)) - 100;
										var y = Math.floor(Math.random() * (150 + 100)) - 100;
										var sec = Math.floor(Math.random() * 1700) + 1000;
										var cir = $('<div class="cir"></div>');
										var shape = $('<svg class="shape">'+shapes[getShape]+'</svg>');
										
										shape.css({
											top: e.pageY - btn.offset().top + 20,
											left: e.pageX - btn.offset().left + 40,
											'transform': 'scale(0.'+scale+')',
											'transition': sec + 'ms',
											'fill': colors[randBG]
										});

										btn.siblings('.btn-particles').append(shape);

										group.push({shape: shape, x: x, y: y});
									}
									
									for (var a = 0; a < group.length; a++) {
										var shape = group[a].shape;
										var x = group[a].x, y = group[a].y;
										shape.css({
											left: x + 50,
											top: y + 15,
											'transform': 'scale(0)'
										});
									}
									
									setTimeout(function() {
										for (var b = 0; b < group.length; b++) {
											var shape = group[b].shape;
											shape.remove();
										}
										group = [];
									}, 2000);

								}	

								$(function() {
									$(document).on('click', '.btn', function(e) {
										$(this).boom(e);
									});

								});

							</script>-->
						
						
							<img src="images/snowden2.jpg" alt="image" />
						</div>
						<div class="clearfix"> </div>
					</div><!--End of banner-info-->
				</div>
				<!--/Top-header-->
			</div><!--End of header container-->
		</div><!--End of header section-->
		
		<!--start of About section-->
		<div id="about" class="about">
			<div class="col-md-6 about-left">
				<div id="owl-demo1" class="owl-carousel owl-carousel2">
				
					<div class="item">
						<div class="about-left-grid">
							<h2>Hi ! I am <span>Md. Emon Rana</span></h2>
							<p>
								<?php echo $string; ?>
							</p>
							<ul>
								<li><a class="a-btn-s scroll" href="#port">My Work</a></li>
								<li><a class="a-btn-s scroll" href="#contact">Hire Me</a></li>
							</ul>
						</div>
					</div>
					<div class="item">
						<div class="about-left-grid">
							<h2>Hi ! I am <span>Md. Emon Rana</span></h2>
							<p>
								<?php echo $string; ?>
							</p>
							<ul>
								<li><a class="a-btn-s scroll" href="#port">My Work</a></li>
								<li><a class="a-btn-s scroll" href="#contact">Hire Me</a></li>
							</ul>
						</div>
					</div>
					<div class="item">
						<div class="about-left-grid">
							<h2>Hi ! I am <span>Md. Emon Rana</span></h2>
							<p>
								<?php echo $string; ?>
							</p>
							<ul>
								<li><a class="a-btn-s scroll" href="#port">My Work</a></li>
								<li><a class="a-btn-s scroll" href="#contact">Hire Me</a></li>
							</ul>
						</div>
					</div>
					
				</div>	
			</div>
			<div class="col-md-6 about-right">
			
			</div>
			<div class="clearfix"> </div>
			
			<!--css&script link for slide in about-->
			<link href="css/owl.carousel.css" rel="stylesheet"/>
			<script src="js/owl.carousel.js"></script>
			<!--/css&script link for slide in about-->
			
			<!--script for slide in about section-->
			<script>
				$(document).ready(function() {
					$("#owl-demo1").owlCarousel({
							items : 1,
							lazyLoad : false,
							autoPlay : true,
							navigation : false,
							navigationText :  false,
							pagination : true,
						});
					});
				</script>
				<!-- Feedback -->
				<script>
					$(document).ready(function() {
						$("#owl-demo3").owlCarousel({
							items : 1,
							lazyLoad : false,
							autoPlay : true,
							navigation : false,
							navigationText :  true,
							pagination :true,
						});
					});
				</script>
			<!--/script for slide in about section-->
			
		</div>
		<!--/End of About section-->
			
		<!--Service Section-->
		<div id="services" class="services">
			<div class="container" >
				<div class="service-head one text-center " >
					<h4>What I Do</h4>
					<h3>My <span>Services</span></h3>
					<span class="border two"> </span>
				</div>
				
				<div class="wthree_about_right_grids w3l-agile" >
				
					<div class="col-md-6 wthree_about_right_grid">
						<div class="col-xs-4 wthree_about_right_grid_left">
							<div class="hvr-rectangle-in">
								<i class="glyphicon glyphicon-pencil"></i>
							</div>
						</div>
						<div class="col-xs-8 wthree_about_right_grid_right">
							<h4>Web Design</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 wthree_about_right_grid">
						<div class="col-xs-4 wthree_about_right_grid_left">
							<div class="hvr-rectangle-in">
								<i class="glyphicon glyphicon-cog"></i>
							</div>
						</div>
						<div class="col-xs-8 wthree_about_right_grid_right">
							<h4>Web Design</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 wthree_about_right_grid">
						<div class="col-xs-4 wthree_about_right_grid_left">
							<div class="hvr-rectangle-in">
								<i class="glyphicon glyphicon-leaf"></i>
							</div>
						</div>
						<div class="col-xs-8 wthree_about_right_grid_right">
							<h4>Web Design</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 wthree_about_right_grid">
						<div class="col-xs-4 wthree_about_right_grid_left">
							<div class="hvr-rectangle-in">
								<i class="glyphicon glyphicon-gift"></i>
							</div>
						</div>
						<div class="col-xs-8 wthree_about_right_grid_right">
							<h4>Web Design</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
				</div>
			</div>
		</div>
		<!--/Service Section-->
		<!--Experience Section-->
		<div id="work" class="work">
			<div class="container">
				<div class="service-head text-center">
					<h4>WHAT I DID</h4>
					<h3>My <span>Experience</span></h3>
					<span class="border one"></span>
				</div>
				<div class="time-main w3l-agile">
					<div class="col-md-6 year-info">
						<ul class="year">
							<li>2020</li>
							<li>2019</li>
							<li>2018</li>
							<li>2017</li>
							<li>2016</li>
							<div class="clearfix"></div>
						</ul>
					</div>
					
					<ul class="col-md-6 timeline">
					
						<li>
							<div class="timeline-badge info"><i class="glyphicon glyphicon-briefcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Company Name</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem ipsum dolor sit amet.Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus </p>
								</div>
							</div>
						</li>
						
						<li>
							<div class="timeline-badge primary"><i class="glyphicon glyphicon-briefcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Company Name</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.</p>
								</div>
							</div>
						</li>
						
						<li>
							<div class="timeline-badge danger"><i class="glyphicon glyphicon-briefcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Company Name</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.</p>
								</div>
							</div>
						</li>
						
						<li>
							<div class="timeline-badge success"><i class="glyphicon glyphicon-briefcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Company Name</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.</p>
								</div>
							</div>
						</li>
						
						<li>
							<div class="timeline-badge pass"><i class="glyphicon glyphicon-briefcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Company Name</h4>
								</div>
								<div class="timeline-body">
									<p>Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.Lorem Ipsome dolore site amet.</p>
								</div>
							</div>
						</li>
						
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--/Experience Section-->

		<!--Portfolio Section-->
		<div class="portfolio" id="port">
			<div class="service-head text-center">
				<h4>My Works</h4>
				<h3>My <span>Portfolio</span></h3>
				<span class="border"></span>
			</div>
			<div class="portfolio-grids">
				<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion 
							width: 'auto', //auto or any width like 600px
							fit: true // 100% fit in a container
						});
					});
				</script>
				
				<div class="sap_tabs">
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<ul class="resp-tabs-list">
							<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>ALL</span></li>
							<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>WEB DESIGN</span></li>
							<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>MOBILE UI</span></li>
							<li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>ILLUSTRATIONS</span></li>
						</ul>
						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<div class="col-md-3 team-gd">
									<a href="#portfolioModal1" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
										<image src="images/pic4.jpg" alt="" />
									</a>
								</div>
								<div class="col-md-3 team-gd">
									<a href="#portfolioModal3" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
										<image src="images/pic5.jpg" alt="" />
									</a>
								</div>
								<div class="col-md-3 team-gd">
									<a href="#portfolioModal2" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
										<image src="images/pic9.jpg" alt="" />
									</a>
								</div>
								<div class="col-md-3 team-gd">
									<a href="#portfolioModal4" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
										<image src="images/pic6.jpg" alt="" />
									</a>
								</div>
								<div class="col-md-3 team-gd yes_marg">
									<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
										<image src="images/pic10.jpg" alt="" />
									</a>
								</div>
								<div class="col-md-3 team-gd yes_marg">
									<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
										<image src="images/pic11.jpg" alt="" />
									</a>
								</div>
								<div class="col-md-3 team-gd yes_marg">
									<a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
										<image src="images/pic13.jpg" alt="" />
									</a>
								</div>
								<div class="col-md-3 team-gd yes_marg">
									<a href="#portfolioModal8" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
										<image src="images/pic14.jpg" alt="" />
									</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
								<div class="col-md-3 team-gd">
									<div class="thumb">
										<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
											<img src="images/pic10.jpg" alt=""/>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd">
									<div class="thumb">
										<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
											<img src="images/pic11.jpg" alt=""/>
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd">
									
										<a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
											<img src="images/pic13.jpg" alt=""/>
										</a>
									
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
								<div class="col-md-3 team-gd">
									<a href="#portfolioModal2" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
										<img src="images/pic9.jpg" alt=""/>
									</a>
								</div>
								<div class="col-md-3 team-gd">
									<a href="#portfolioModal4" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal" >
										<img src="images/pic6.jpg" alt=""/>
									</a>
								</div>
								<div class="col-md-3 team-gd">
									<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal" >
										<img src="images/pic10.jpg" alt=""/>
									</a>
								</div>
								<div class="col-md-3 team-gd">
									<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal" >
										<img src="images/pic11.jpg" alt=""/>
									</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
								<div class="col-md-3 team-gd">
									<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal" >
										<img src="images/pic10.jpg" alt=""/>
									</a>
								</div>
								<div class="col-md-3 team-gd">
									<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal" >
										<img src="images/pic11.jpg" alt=""/>
									</a>
								</div>
								<div class="col-md-3 team-gd">
									<a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal" >
										<img src="images/pic13.jpg" alt=""/>
									</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>	
		<!--/Portfolio Section-->
		
		<!--Pop up section for my portfolio-->
		<div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" area-hidden="true" >
			<div class="modal-content port-modal">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 text-center">
							<div class="modal-body">
								<h3>Image Title</h3>
								<img src="images/pic4.jpg" class="img-responsive img-centered" alt="" />
								<p>Lorem Ipsum Dolore simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" area-hidden="true" >
			<div class="modal-content port-modal">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 text-center">
							<div class="modal-body">
								<h3>Image Title</h3>
								<img src="images/pic9.jpg" class="img-responsive img-centered" alt="" />
								<p>Lorem Ipsum Dolore simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" area-hidden="true" >
			<div class="modal-content port-modal">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 text-center">
							<div class="modal-body">
								<h3>Image Title</h3>
								<img src="images/pic5.jpg" class="img-responsive img-centered" alt="" />
								<p>Lorem Ipsum Dolore simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" area-hidden="true" >
			<div class="modal-content port-modal">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 text-center">
							<div class="modal-body">
								<h3>Image Title</h3>
								<img src="images/pic6.jpg" class="img-responsive img-centered" alt="" />
								<p>Lorem Ipsum Dolore simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" area-hidden="true" >
			<div class="modal-content port-modal">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 text-center">
							<div class="modal-body">
								<h3>Image Title</h3>
								<img src="images/pic10.jpg" class="img-responsive img-centered" alt="" />
								<p>Lorem Ipsum Dolore simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" area-hidden="true" >
			<div class="modal-content port-modal">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 text-center">
							<div class="modal-body">
								<h3>Image Title</h3>
								<img src="images/pic11.jpg" class="img-responsive img-centered" alt="" />
								<p>Lorem Ipsum Dolore simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" area-hidden="true" >
			<div class="modal-content port-modal">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 text-center">
							<div class="modal-body">
								<h3>Image Title</h3>
								<img src="images/pic13.jpg" class="img-responsive img-centered" alt="" />
								<p>Lorem Ipsum Dolore simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="portfolio-modal modal fade slideanim" id="portfolioModal8" tabindex="-1" role="dialog" area-hidden="true" >
			<div class="modal-content port-modal">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 text-center">
							<div class="modal-body">
								<h3>Image Title</h3>
								<img src="images/pic14.jpg" class="img-responsive img-centered" alt="" />
								<p>Lorem Ipsum Dolore simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="portfolio-modal modal fade slideanim" id="portfolioModal9" tabindex="-1" role="dialog" area-hidden="true" >
			<div class="modal-content port-modal">
				<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-lg-offset-2 text-center">
							<div class="modal-body">
								<h3>Image Title</h3>
								<img src="images/pic1.jpg" class="img-responsive img-centered" alt="" />
								<p>Lorem Ipsum Dolore simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//Pop up section for my portfolio-->
		
		<!--Blog Section-->
		<div class="blog" id="blogs">
			<div class="container">
				<div class="service-head text-center">
					<h4>Blogs</h4>
					<h3>My <span>Blogs</span></h3>
					<span class="border one"></span>
				</div>
				
				<div class="news-grid w3l-agile">
					<div class="col-md-6 news-img">
						<a href="#" data-toggle="modal" data-target="#myModal1"><img src="images/b1.jpg" alt="" class="img-responsive" /></a>
					</div>
					<div class="col-md-6 news-text">
						<h3><a href="#" data-toggle="modal" data-target="#myModal1" >Here goes an awesome blog title</a></h3>
						<ul class="news">
							<li><i class="glyphicon glyphicon-user"></i><a href="#">Admin</a></li>
							<li><i class="glyphicon glyphicon-comment"></i><a href="#">2 Comments</a></li>
							<li><i class="glyphicon glyphicon-heart"></i><a href="#">50 Likes</a></li>
							<li><i class="glyphicon glyphicon-tags"></i><a href="#">3 Tags</a></li>
						</ul>
						<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
						<a href="#" data-toggle="modal" data-target="#myModal1" class="read hvr-shutter-in-horizontal ">Read More</a>
					</div>
					
					<div class="clearfix"></div>
				</div>
				<div class="news-grid">
					<div class="col-md-6 news-img two">
						<a href="#" data-toggle="modal" data-target="#myModal2"><img src="images/b2.jpg" alt="" class="img-responsive" /></a>
					</div>
					<div class="col-md-6 news-text two">
						<h3><a href="#" data-toggle="modal" data-target="#myModal2" >Here goes an awesome blog title</a></h3>
						<ul class="news">
							<li><i class="glyphicon glyphicon-user"></i><a href="#">Admin</a></li>
							<li><i class="glyphicon glyphicon-comment"></i><a href="#">2 Comments</a></li>
							<li><i class="glyphicon glyphicon-heart"></i><a href="#">50 Likes</a></li>
							<li><i class="glyphicon glyphicon-tags"></i><a href="#">3 Tags</a></li>
						</ul>
						<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
						<a href="#" data-toggle="modal" data-target="#myModal2" class="read hvr-shutter-in-horizontal ">Read More</a>
					</div>
					
					<div class="clearfix"></div>
				</div>
				
				<div class="news-grid">
					<div class="col-md-6 news-img">
						<a href="#" data-toggle="modal" data-target="#myModal3"><img src="images/b3.jpg" alt="" class="img-responsive" /></a>
					</div>
					<div class="col-md-6 news-text">
						<h3><a href="#" data-toggle="modal" data-target="#myModal3" >Here goes an awesome blog title</a></h3>
						<ul class="news">
							<li><i class="glyphicon glyphicon-user"></i><a href="#">Admin</a></li>
							<li><i class="glyphicon glyphicon-comment"></i><a href="#">2 Comments</a></li>
							<li><i class="glyphicon glyphicon-heart"></i><a href="#">50 Likes</a></li>
							<li><i class="glyphicon glyphicon-tags"></i><a href="#">3 Tags</a></li>
						</ul>
						<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
						<a href="#" data-toggle="modal" data-target="#myModal3" class="read hvr-shutter-in-horizontal ">Read More</a>
					</div>
					
					<div class="clearfix"></div>
				</div>
				
			</div>
		</div>
		<!--/Blog Section-->
		
		<!--Blog pop up section-->
		<div class="modal ab fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
			<div class="modal-dialog about" role="document">
				<div class="modal-content about">
					<div class="modal-header">
						<button type="button" class="close ab" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body about">
						<div class="about">
							<div class="about-inner">
								<img src="images/b1.jpg" alt="about" />
								<h4 class="title">A Few Words About Us</h4>
								<p>Lorem ipsum dolor sit amet Integer gravida,Lorem ipsum dolor sit amet Integer gravida velit,Ming sits in the corner the whole day. She's into crochet. quis dolor tristiqumsan.Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. velit quis dolor tristiqumsan.</p>
								<p>Lorem ipsum dolor sit amet. Integer gravida velit quis dolor tristiqumsan.anteposuerit litterarum formas humanitatis per seacula amet Integer gravida velit. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal ab fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
			<div class="modal-dialog about" role="document">
				<div class="modal-content about">
					<div class="modal-header">
						<button type="button" class="close ab" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body about">
						<div class="about">
							<div class="about-inner">
								<img src="images/b2.jpg" alt="about" />
								<h4 class="title">A Few Words About Us</h4>
								<p>Lorem ipsum dolor sit amet Integer gravida,Lorem ipsum dolor sit amet Integer gravida velit,Ming sits in the corner the whole day. She's into crochet. quis dolor tristiqumsan.Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. velit quis dolor tristiqumsan.</p>
								<p>Lorem ipsum dolor sit amet. Integer gravida velit quis dolor tristiqumsan.anteposuerit litterarum formas humanitatis per seacula amet Integer gravida velit. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal ab fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
			<div class="modal-dialog about" role="document">
				<div class="modal-content about">
					<div class="modal-header">
						<button type="button" class="close ab" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body about">
						<div class="about">
							<div class="about-inner">
								<img src="images/b3.jpg" alt="about" />
								<h4 class="title">A Few Words About Us</h4>
								<p>Lorem ipsum dolor sit amet Integer gravida,Lorem ipsum dolor sit amet Integer gravida velit,Ming sits in the corner the whole day. She's into crochet. quis dolor tristiqumsan.Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. velit quis dolor tristiqumsan.</p>
								<p>Lorem ipsum dolor sit amet. Integer gravida velit quis dolor tristiqumsan.anteposuerit litterarum formas humanitatis per seacula amet Integer gravida velit. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Blog pop up section-->
		
		
	<?php include ('footer.php'); ?>