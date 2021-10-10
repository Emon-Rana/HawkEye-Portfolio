<!--Contact and footer-->
		<div class="footer" id="contact">
			<div class="container">
				<div class="service-head one text-center">
					<h4>Contact Me</h4>
					<h3>Get <span>In Touch With Me</span></h3>
					<span class="border two"></span>
				</div>
				<div class="mail_us">
					<div class="col-md-6 mail_left">
						<div class="contact-grid1-left">
							<div class="contact-grid1-left1">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								<h4>Contact By Email</h4>
								<ul>
									<li>Mail-1<a href="">1emonrana@gmail.com</a></li>
									<li>Mail-2<a href="">1emonrana@gmail.com</a></li>
								</ul>
							</div>
						</div>
						<div class="contact-grid1-left">
							<div class="contact-grid1-left1">
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
								<h4>Contact By Phone</h4>
								<ul>
									<li>Mail-1emonrana@gmail.com</li>
									<li>Mail-1emonrana@gmail.com</li>
								</ul>
							</div>
						</div>
						<div class="contact-grid1-left">
							<div class="contact-grid1-left1">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
								<h4>Looking For address?</h4>
								<ul>
									<li>Mail-1emonrana@gmail.com</li>
									<li>Mail-1emonrana@gmail.com</li>
								</ul>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 mail_right">
						<form action="#" method="post">
							<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
							<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<input type="text" name="Mobile Number" value="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" required="">
							<textarea name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
							<!--<input type="submit" value="Send">-->
							<button class="glow-on-hover" type="submit" value="Send" >Send</button>
							
						</form>
					</div>
				
					<div class="clearfix"></div>
				</div>
				<div class="copy_right text-center">
					<p>&copy; 2021 HawkEye . All Rights Reserved | Design By <a href="https://www.linkedin.com/in/md-emon-rana-a06304150/?locale=en_US" target="_blank"> Md. Emon Rana. </a></p>
					<ul class="social-icons two">
						<li><a href="#" target="_blank"><i class="ficon fab fa-facebook"></i></a></li>
						<li><a href="#" target="_blank" class="fb"><i class="ficon fab fa-twitter"></i></a></li>
						<li><a href="#" target="_blank" class="in"><i class="ficon fab fa-github" ></i></a></li>
						<li><a href="#" target="_blank" class="dott"><i class="ficon fab fa-linkedin"></i></a></li>
						<li><a href="#" target="_blank" class=""><i class="ficon fab fa-google-plus-g"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!--/Contact and footer-->
		
		<!--Back to Top <i class="fab fa-autoprefixer"></i>-->
		<a href="#home" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"><i class="fab fa-autoprefixer"></i></span></a>
		<script type="text/javascript">
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		
		
		
			<!--<a href="#home" id="toTop" ><i class="fab fa-autoprefixer"></i></a> this scroll need smoothness
			<script>

			
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					document.getElementById("toTop").style.display = "block";
				} else {
					document.getElementById("toTop").style.display = "none";
				}
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
			</script>-->
			
			
		<!--<a class="top-link hide" href="" id="js-top">
		  <i class="btop fab fa-autoprefixer"></i>
		  <span class="screen-reader-text">Back to top</span>
		</a>
		
		<script>
			// Set a variable for our button element.
			const scrollToTopButton = document.getElementById('js-top');

			// Let's set up a function that shows our scroll-to-top button if we scroll beyond the height of the initial window.
			const scrollFunc = () => {
			  // Get the current scroll value
			  let y = window.scrollY;
			  
			  // If the scroll value is greater than the window height, let's add a class to the scroll-to-top button to show it!
			  if (y > 0) {
				scrollToTopButton.className = "top-link show";
			  } else {
				scrollToTopButton.className = "top-link hide";
			  }
			};

			window.addEventListener("scroll", scrollFunc);

			const scrollToTop = () => {
			  // Let's set a variable for the number of pixels we are from the top of the document.
			  const c = document.documentElement.scrollTop || document.body.scrollTop;
			  
			  // If that number is greater than 0, we'll scroll back to 0, or the top of the document.
			  // We'll also animate that scroll with requestAnimationFrame:
			  // https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
			  if (c > 0) {
				window.requestAnimationFrame(scrollToTop);
				// ScrollTo takes an x and a y coordinate.
				// Increase the '10' value to get a smoother/slower scroll!
				window.scrollTo(0, c - c / 10);
			  }
			};

			// When the button is clicked, run our ScrolltoTop function above!
			scrollToTopButton.onclick = function(e) {
			  e.preventDefault();
			  scrollToTop();
			}	
		</script>-->
		<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
		<script>
			// ===== Scroll to Top ==== 
			$(window).scroll(function() {
				if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
					$('#return-to-top').fadeIn(200);    // Fade in the arrow
				} else {
					$('#return-to-top').fadeOut(200);   // Else fade out the arrow
				}
			});
			$('#return-to-top').click(function() {      // When arrow is clicked
				$('body,html').animate({
					scrollTop : 0                       // Scroll to top of body
				}, 500);
			});
		</script>
		<!--/Back to Top-->
		
		<!--for bootstrap working-->
		<script src="js/bootstrap.js"></script>
	</body>
</html>



