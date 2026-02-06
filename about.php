<!DOCTYPE html>



<html lang="en">
	<head>

		<!-- Title -->
		<title>About Me | Vickygraphy</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="description" content="Wedding and Commercial photography and videography services">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Favicon (http://www.favicon-generator.org/) -->
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
		<link rel="icon" type="image/png" sizes="512x512" href="/android-chrome-512x512.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="shortcut icon" href="/favicon.ico">
		<meta name="theme-color" content="#000000">


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

			<!-- ===================
			///// Begin header /////
			======================== -->
			<?php 
			// define('BASE_PATH', __DIR__);

			$current_page = 'about';
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
					<div class="ph-image ph-image-cover-1">
						<div class="ph-image-inner">
							<img src="assets/img/page-header/about-header.jpg" alt="Image">
						</div>
						<div class="tt-ptr-overlay-top">
						</div>
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
								<h1 class="ph-caption-title" style="font-weight:600; font-style:italic">ABOUT US</h1>
								<div class="ph-caption-description max-width-700" style="text-transform:uppercase">
									Capturing Each Moment Beautifully
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
					<div class="tt-section padding-top-100 no-padding-bottom padding-bottom-xlg-40">
						<div class="tt-section-inner tt-wrap">

							<div class="tt-row tt-lg-row-reverse">
								<div class="tt-col-lg-6 margin-bottom-20">

									<!-- Begin tt-video 
									==================== 
									* Use class "ttv-landscape" or "ttv-portrait" to enable video fixed height (no effect on small screens and full width layout!). No class = video default size.
									* Use class "ttv-full-height" to enable video full height. Useful for full width layout (no effect on small screens!).
									* Use class "margin-bottom-*" to enable bottom margins. For example "margin-bottom-40". More info about helper classes can be found in the file "helper.css".
									* Use class "ttv-grayscale" to enable video grayscale.
									* Available <video> attributes:
										Use the attribute "loop" to loop the video.
										Use the attribute "muted" to mute video.
										Use the attribute "autoplay" to enable autoplay (attribute "muted" is required for autoplay!).
										Use the attribute "controls" to display the video controls.
									* Note-1: attribute "playsinline" is required!
									* Note-2: data-src="..." is required in the video source for video lazy loading!
									-->
									<div class="tt-video ttv-portrait ">
										<img src="assets/img/vicky.jpg" alt="photographer" class="tt-anim-zoomin ph-image-grayscale">
									</div> 
									<!-- <div class="tt-video ttv-portrait ttv-grayscale">
										<video playsinline muted autoplay loop preload="metadata" poster="assets/vids/1200/video-3-1200.jpg" class="tt-anim-zoomin">
											<source src="assets/vids/placeholder.mp4" data-src="assets/vids/1200/video-3-1200.mp4" type="video/mp4">
											<source src="assets/vids/placeholder.webm" data-src="assets/vids/1200/video-3-1200.webm" type="video/webm">
										</video>
									</div> -->
									<!-- End tt-video -->

								</div> <!-- /.tt-col -->

								<div class="tt-col-lg-1">

								</div> <!-- /.tt-col -->

								<div class="tt-col-lg-5">

									<h2 class="tt-font-alter tt-anim-fadeinup" >Hello!</h2>
									<div class="text-lg tt-anim-fadeinup">
										<p>I’m Vicky, a wedding and pre-wedding photographer passionate about preserving moments that matter.</p>

										<p>For me, photography is not about staging perfection. It’s about observing quietly and capturing what is real the nervous smiles, the steady hands during vows, the laughter that breaks the silence.</p>

										<p>The result? Images that feel just as powerful years from now as they did in that very moment.</p>

										<!-- Begin big round button 
										============================ -->
										<div class="tt-big-round-ptn margin-top-20 ">
											<a href="work" class="tt-btn tt-btn-secondary">
												<span data-hover="EXPLORE OUR WORK">EXPLORE OUR WORK</span>
											</a>
										</div>
										<!-- End big round button -->

									</div>

								</div> <!-- /.tt-col -->
							</div> <!-- /.tt-row -->

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
					<div class="tt-section padding-top-xlg-120 border-top">
						<div class="tt-section-inner">

							<!-- Begin tt-Heading 
							====================== 
							* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
							* Use class "tt-heading-center" to align tt-Heading to center.
							* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
							* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="tt-heading tt-heading-lg tt-heading-center margin-bottom-40">
								<!-- <h3 class="tt-heading-subtitle tt-text-reveal">Subtitle</h3> -->
								<h2 class="tt-heading-title tt-text-reveal">WHAT WE DO</h2> <!-- You can use <br> to break a text line if needed -->
								<p class="max-width-600 tt-anim-fadeinup text-muted">Documenting love with intention, emotion, and timeless storytelling.</p>
							</div>
							<!-- End tt-Heading -->

							<!-- Begin horizontal accordion
							================================ 
							* Use class "tt-hac-alter-hover" to enable alternative hover style (no effect on small screens!).
							* INFO: Do not use too many items here! The more items, the narrower the space to display. Up to 5 items are optimal. If you want to display more items, use a vertical accordion instead.
							-->
							<div class="tt-horizontal-accordion tt-anim-fadeinup">

								<!-- Begin horizontal accordion item 
								===================================== -->
								<div class="tt-hac-item cursor-alter">
									<div class="tt-hac-item-count"></div>
									<div class="tt-hac-item-inner">
										<div class="tt-hac-item-content">
											<div class="tt-haci-content-top">
												<h2 class="tt-haci-title">WEDDING <br>PHOTOGRAPHY </h2>
												<div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
												capture weddings as they naturally unfold — the quiet prayers, the nervous smiles, the unplanned laughter. My focus is on real emotion, thoughtful composition, and moments that will still feel powerful decades from now.
												</div> <!-- /.tt-haci-description -->
											</div> <!-- /.tt-haci-content-top -->
										</div> <!-- /.tt-hac-item-content -->
									</div> <!-- /.tt-hac-item-inner -->
								</div>
								<!-- End horizontal accordion item -->

								<!-- Begin horizontal accordion item 
								===================================== -->
								<div class="tt-hac-item cursor-alter">
									<div class="tt-hac-item-count"></div>
									<div class="tt-hac-item-inner">
										<div class="tt-hac-item-content">
											<div class="tt-haci-content-top">
												<h2 class="tt-haci-title">WEDDING<br> FILMS</h2>
												<div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
												Beyond photographs, I craft cinematic wedding films that preserve movement, sound, and emotion. From vows to celebrations, every frame is edited with care to tell your story in a way that feels honest and timeless.
												</div> <!-- /.tt-haci-description -->
											</div> <!-- /.tt-haci-content-top -->
										</div> <!-- /.tt-hac-item-content -->
									</div> <!-- /.tt-hac-item-inner -->
								</div>
								<!-- End horizontal accordion item -->

								<!-- Begin horizontal accordion item 
								===================================== -->
								<div class="tt-hac-item cursor-alter">
									<div class="tt-hac-item-count"></div>
									<div class="tt-hac-item-inner">
										<div class="tt-hac-item-content">
											<div class="tt-haci-content-top">
												<h2 class="tt-haci-title">PRE-WEDDING <br> SHOOTS												</h2>
												<div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
												Before the ceremony, there’s your story. Pre-wedding sessions are relaxed, personal, and designed to capture your connection without pressure. It’s about comfort, chemistry, and documenting love in its most natural form.
												</div> <!-- /.tt-haci-description -->
											</div> <!-- /.tt-haci-content-top -->
										</div> <!-- /.tt-hac-item-content -->
									</div> <!-- /.tt-hac-item-inner -->
								</div>
								<!-- End horizontal accordion item -->

								<!-- Begin horizontal accordion item 
								===================================== -->
								<div class="tt-hac-item cursor-alter">
									<div class="tt-hac-item-count"></div>
									<div class="tt-hac-item-inner">
										<div class="tt-hac-item-content">
											<div class="tt-haci-content-top">
												<h2 class="tt-haci-title">COMMERCIAL <br> SHOOTS</h2>
												<div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
												From bridal brands to lifestyle campaigns, I create refined visual content that balances aesthetics with purpose. Clean, intentional imagery designed to elevate brands within the wedding and lifestyle space.
												</div> <!-- /.tt-haci-description -->
											</div> <!-- /.tt-haci-content-top -->
										</div> <!-- /.tt-hac-item-content -->
									</div> <!-- /.tt-hac-item-inner -->
								</div>
								<!-- End horizontal accordion item -->

							</div>
							<!-- End horizontal accordion -->

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->

					<div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120 ">
						<div class="tt-section-inner tt-wrap">

							<div class="tt-row margin-bottom-40">
								<div class="page-contact-section">

									<!-- Begin tt-Heading 
									====================== 
									* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
									* Use class "tt-heading-center" to align tt-Heading to center.
									* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
									* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
									-->
									<div class="contact-us-section">
										<h3 class="subtitle tt-text-reveal">Contact</h3>
										<h2 class="title tt-text-reveal">
											Feeling confident about our work?
										</h2> <!-- You can use <br> to break a text line if needed -->
									</div>
									<!-- End tt-Heading -->
									<!-- Begin header button (hidden on small screens!) -->
									<a href="contact" class="tt-btn tt-btn-secondary">
										<span data-hover="GET IN TOUCH">GET IN TOUCH</span>
									</a>
									<!-- End header button -->

								</div> <!-- /.tt-col -->
							
							</div><!-- /.tt-row --> 

						</div> <!-- /.tt-section-inner -->
					</div>


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