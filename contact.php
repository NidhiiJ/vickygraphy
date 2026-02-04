<!DOCTYPE html>



<html lang="en">
	<head>

		<!-- Title -->
		<title>Contact | Jesper - Creative Portfolio Showcase HTML Website Template by Themetorium</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="description" content="Download Jesper - Creative Portfolio Showcase HTML Website Template that comes with rich features and well-commented code. Made by Themetorium.">
		<meta name="author" content="themetorium.net">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Favicon (http://www.favicon-generator.org/) -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- Your Google Analytics code goes here -->

		<!-- Google fonts (https://fonts.google.com/) -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> <!-- Body font -->
		<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@100..900&display=swap" rel="stylesheet"> <!-- Secondary/Alter font -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css"> <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
		<link rel="stylesheet" href="assets/vendor/fancybox/css/fancybox.css"> <!-- Fancybox (lightbox) JS (https://fancyapps.com/) -->
		<link rel="stylesheet" href="assets/vendor/swiper/css/swiper-bundle.min.css"> <!-- Swiper CSS (https://swiperjs.com/) -->

		<!-- Master CSS -->
		<link rel="stylesheet" href="assets/css/helper.css">
		<link rel="stylesheet" href="assets/css/theme.css">

		<!-- Light style CSS -->
		<link rel="stylesheet" href="assets/css/theme-light.css">

	</head>

	
	<!-- ===========
	///// Body /////
	================
	* Use class "tt-transition" to enable page transitions.
	* Use class "tt-magic-cursor" to enable magic cursor.
	* Use class "tt-noise" to enable the background noise effect on the whole page. 
	* Use class "tt-smooth-scroll" to enable page smooth scroll. 
	* Use class "tt-lightmode-default" to enable light style by default (you must clear your browser's cookies and cache first!).
	* Note: there may be classes that are specific to this page only!
	-->
	<body id="body" class="tt-transition tt-noise tt-lightmode-default tt-magic-cursor tt-smooth-scroll">


		<!-- *************************************
		*********** Begin body inner ************* 
		************************************** -->
		<main id="body-inner">


			<!-- Begin page transition (do not remove!!!) 
			=========================== -->
			<?php 
			require __DIR__ . '/bootstrap.php';

			require BASE_PATH . '/components/page-transition.php';
			?>

			<!-- End page transition -->

			<!-- Begin magic cursor 
			======================== -->
			<!-- <div id="magic-cursor">
				<div id="ball"></div>
			</div> -->
			<!-- End magic cursor --> 

			<!-- ===================
			///// Begin header /////
			======================== -->
			<?php 
			$current_page = 'contact';
			require BASE_PATH . '/components/header.php';
			?>
			<!-- End header -->

			
			<!-- *************************************
			*********** Begin content wrap *********** 
			************************************** -->
			<div id="tt-content-wrap">

							<!-- ========================
				///// Begin page header /////
				============================= 
				* Use class "ph-full" to enable fullscreen size (no effect on small screens!).
				* Use class "ph-full-m" to enable fullscreen size on small screens.
				* Use class "ph-cap-sm", "ph-cap-lg", "ph-cap-xlg", "ph-cap-xxlg" "ph-cap-xxxlg" or "ph-cap-xxxxlg" to set caption size (no class = default size).
				* Use class "ph-center" to align the content to the center. 
				* Use class "ph-caption-parallax" to enable caption parallax.
				* Use class "ph-image-parallax" to enable image/video parallax (if image/video exist).
				* Use class "ph-bg-is-light" if needed, it makes the elements dark and more visible if you use a very light background image (effect only if the image/video exist).
				-->
				<div id="page-header" class="ph-full ph-full-m ph-cap-xxxxlg ph-center ph-image-parallax ph-caption-parallax">

					<!-- Begin page header image 
					============================= 
					* Use class "ph-image-grayscale" to enable black & white image.
					* Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5"). 
					-->
					<div class="ph-image ph-image-cover-1 cover-opacity-3">
						<div class="ph-image-inner">
							<img src="assets/img/page-header/contact-header.jpg" alt="Image">
						</div>
						<!-- <div class="tt-ptr-overlay-top">
						</div> -->
					</div>
					<!-- End page header image -->

					<!-- Begin page header video 
					============================= 
					* Use class "ph-video-grayscale" to enable black & white video.
					* Use class "ph-video-cover-*" to set video overlay opacity. For example "ph-video-cover-2" or "ph-video-cover-2-5" (up to "ph-video-cover-9-5"). 
					* Use attribute "loop" in <video> tag to make the video play repeatedly.
					-->
					<!-- <div class="ph-video ph-video-cover-1">
						<div class="ph-video-inner">
							<video loop muted autoplay playsinline preload="metadata" poster="assets/vids/1920/video-1-1920.jpg">
								<source src="assets/vids/placeholder.mp4" data-src="assets/vids/1920/video-1-1920.mp4" type="video/mp4">
								<source src="assets/vids/placeholder.webm" data-src="assets/vids/1920/video-1-1920.webm" type="video/webm">
							</video>
						</div>
					</div> -->
					<!-- End page header video -->
						
					<div class="page-header-inner tt-wrap">

						<div class="ph-caption padding-height-10">
							<div class="ph-caption-inner">
								<h2 class="ph-caption-subtitle">VICKYGRAPHY.IN</h2>
								<h1 class="ph-caption-title" style="font-weight:600; font-style:italic">CONTACT US</h1>
								<div class="ph-caption-description max-width-700" style="text-transform:uppercase">
									For your wedding diary
								</div>
							</div> <!-- /.ph-caption-inner -->
						</div> <!-- /.ph-caption -->

					</div> <!-- /.page-header-inner -->


					<!-- Begin social buttons
					========================== -->
					<div class="ph-social">
						<ul>
							<li><a href="https://www.facebook.com/themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a></li>
							<li><a href="https://dribbble.com/Themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-dribbble"></i></a></li>
							<li><a href="https://www.behance.net/Themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-behance"></i></a></li>
							<li><a href="https://www.youtube.com/" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i></a></li>
							<!-- <li><a href="https://x.com/Themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a></li> -->
						</ul>
					</div>
					<!-- End social buttons -->

				</div>
				<!-- End page header -->

				



				<!-- *************************************
				*********** Begin page content *********** 
				************************************** -->
				<div id="tt-page-content">


					<!-- =======================
					///// Begin tt-section /////
					============================ 
					* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
					* You can use classes "border-top" and "border-bottom" if needed. 
					* Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
					-->
					<div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120">
						<div class="tt-section-inner tt-wrap">

							<div class="tt-row">
								<div class="tt-col-xl-5 hide-from-lg">
									<div style="border-radius: 1000px 1000px 0 0; overflow: hidden;">
										<div class="pgi-image-inner tt-anim-zoomin" >
											<img src="assets/img/contact-form.jpg" loading="lazy" alt="image">
										</div> 
									</div>

								</div> <!-- /.tt-col -->

								<div class="tt-col-xl-7 custom-form-parent">

									<!-- Begin form 
									================ 
									* Use class "tt-form-filled", "tt-form-minimal" or "tt-form-creative" to change form style.
									* Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
									* Note-1: Use only lowercase letters in field names! For example name="email".
									* Note-2: See the template documentation for how to set up the contact form.
									-->
									<form id="tt-contact-form" class="tt-form tt-form-creative tt-form-lg">

										<!-- Becin contact form messages (do not remove!) -->
										<div id="tt-contact-form-messages" role="alert">
											<div class="tt-cfm-inner"></div>
											<div class="tt-cfm-close hide-cursor"><i class="fa-solid fa-xmark"></i></div>
										</div>
										<!-- End contact form messages -->

										<div class="tt-contact-form-inner padding-left-xlg-45">
											<div class="form-title">
												<span>Let’s Create Some Film </span>
												<span class="italic">Magic Together</span>
											</div>

											<!-- <small class="tt-form-text margin-bottom-30"><em>Fields marked with an asterisk (*) are required!</em></small> -->

											<div class="tt-form-group tt-anim-fadeinup">
												<label>Name <span class="required">*</span></label>
												<input class="tt-form-control" id="sender-name" type="text" name="name" placeholder="Your Name" required>
											</div>

											<div class="tt-form-group tt-anim-fadeinup">
												<label>Email? <span class="required">*</span></label>
												<input class="tt-form-control" id="sender-email" type="email" name="email" placeholder="Your Email" required>
											</div>

											<div class="tt-form-group tt-anim-fadeinup">
												<label>Which service are you interested in? <span class="required">*</span></label>
												<select class="tt-form-control custom-select" id="sender-option" name="option" required>
													<option value="" disabled selected>Please choose an option</option>
													<option value="Pre-Wedding Shoot">Pre-Wedding Shoot</option>
													<option value="Wedding Coverage">Wedding Coverage</option>
													<option value="Complete Wedding Package">Complete Wedding Package</option>
													<option value="Commercial Shoot">Commercial Shoot</option>
													<option value="Other">Other</option>
												</select>
											</div>

											<div class="tt-form-group tt-anim-fadeinup">
												<label>Message</label>
												<textarea class="tt-form-control" id="sender-message" rows="5" name="message" placeholder="Write a message here ..."></textarea>
											</div>

											<div class="tt-anim-fadeinup">
												<button type="submit" class="tt-btn tt-btn-secondary tt-magnetic-item">
													<span data-hover="Send">Send</span>
												</button>
											</div>

										</div> <!-- /.tt-contact-form-inner-->
									</form>
									<!-- End form -->

								</div> <!-- /.tt-col -->
							</div><!-- /.tt-row -->

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->


					<!-- =======================
					///// Begin tt-section /////
					============================ 
					* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
					* You can use classes "border-top" and "border-bottom" if needed. 
					* Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
					-->
					<div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120 border-top">
						<div class="tt-section-inner explore-work-footer-wrapper tt-wrap">
							<div class="explore-work-footer" style="text-align:center">
								<h2 class="title tt-text-reveal">Not Convinced Yet?</h2> <!-- You can use <br> to break a text line if needed -->
							</div>

							<a href="work" class="tt-btn tt-btn-secondary">
								<span data-hover="Explore our work">Explore our work</span>
							</a>
						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->


				</div>
				<!-- End page content -->


				<!-- ======================
				///// Begin tt-footer /////
				=========================== -->
				<?php 

				require BASE_PATH . '/components/footer.php';
				?>

				<!-- End tt-footer -->


				<!-- Begin scroll to top button
				================================ -->
				<a href="#" class="tt-scroll-to-top">
					<div class="tt-stt-progress tt-magnetic-item">
						<svg class="tt-stt-progress-circle" width="100%" height="100%" viewBox="-1 -1 102 102">
							<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
						</svg>
					</div> <!-- /.tt-stt-progress -->
				</a>
				<!-- End scroll to top button -->

			</div>
			<!-- End content wrap -->


		</main>
		<!-- End body inner -->


        

		<!-- ====================
		///// Scripts below /////
		===================== -->

		<!-- Core JS -->
		<script src="assets/vendor/jquery/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->

		<!-- Libs and Plugins JS -->
		<script src="assets/vendor/gsap/gsap.min.js"></script> <!-- GSAP JS (https://gsap.com/) -->
		<script src="assets/vendor/gsap/ScrollToPlugin.min.js"></script> <!-- GSAP ScrollToPlugin JS (https://gsap.com/docs/v3/Plugins/ScrollToPlugin/) -->
		<script src="assets/vendor/gsap/ScrollTrigger.min.js"></script> <!-- GSAP ScrollTrigger JS (https://gsap.com/docs/v3/Plugins/ScrollTrigger/) -->
		<script src="assets/vendor/lenis.min.js"></script> <!-- Lenis (smooth scroll) JS (https://lenis.darkroom.engineering/) -->
		<script src="assets/vendor/isotope/imagesloaded.pkgd.min.js"></script> <!-- imagesloaded JS (http://imagesloaded.desandro.com) -->
		<script src="assets/vendor/isotope/isotope.pkgd.min.js"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
		<script src="assets/vendor/isotope/packery-mode.pkgd.min.js"></script> <!-- Isotope Packery Mode JS (https://isotope.metafizzy.co/layout-modes/packery.html) -->
		<script src="assets/vendor/fancybox/js/fancybox.umd.js"></script> <!-- Fancybox (lightbox) JS (https://fancyapps.com/) -->
		<script src="assets/vendor/swiper/js/swiper-bundle.min.js"></script> <!-- Swiper JS (https://swiperjs.com/) -->

		<!-- Master JS -->
		<script src="assets/js/theme.js"></script>



	</body>

</html>