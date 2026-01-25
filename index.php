<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Title -->
		<title>Vickygraphy</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="description" content="Vivkygraphy photography and videography portfolio and services">
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
	<body id="body" class="tt-transition tt-noise tt-magic-cursor tt-smooth-scroll">


		<!-- *************************************
		*********** Begin body inner ************* 
		************************************** -->
		<main id="body-inner">


			<!-- Begin page transition (do not remove!!!) 
			=========================== -->
			<div id="tt-page-transition">
				<div class="tt-ptr-overlay-top tt-noise"></div>
				<div class="tt-ptr-overlay-bottom tt-noise"></div>
				<div class="tt-ptr-preloader">
					<div class="tt-ptr-prel-content">
						<!-- Hint: You may need to change the img height and opacity to match your logo type. You can do this from the "theme.css" file (find: ".tt-ptr-prel-image"). -->
						<img src="assets/img/logo-light.png" class="tt-ptr-prel-image" alt="Logo">
					</div> <!-- /.tt-ptr-prel-content -->
				</div> <!-- /.tt-ptr-preloader -->
			</div>
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
			define('BASE_PATH', __DIR__);
			// require __DIR__ . '/bootstrap.php';


			$current_page = 'home';
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
				<div id="page-header" class="ph-full ph-full-m ph-center ph-cap-xxxxlg ph-image-parallax ph-caption-parallax">

					<!-- Begin page header image 
					============================= 
					* Use class "ph-image-grayscale" to enable black & white image.
					* Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5"). 
					-->
					<!-- <div class="ph-image ph-image-cover-2">
						<div class="ph-image-inner">
							<img src="assets/img/page-header/ph-1.jpg" alt="Image">
						</div>
					</div> -->
					<!-- End page header image -->

					<!-- Begin page header video 
					============================= 
					* Use class "ph-video-grayscale" to enable black & white video.
					* Use class "ph-video-cover-*" to set video overlay opacity. For example "ph-video-cover-2" or "ph-video-cover-2-5" (up to "ph-video-cover-9-5"). 
					* Use attribute "loop" in <video> tag to make the video play repeatedly.
					-->
					<div class="ph-video ph-video-cover-1">
						<div class="ph-video-inner">
							<video loop muted autoplay playsinline preload="metadata" poster="assets/vids/1920/video-1-1920.jpg">
								<source src="assets/vids/mock/mock_video1.mp4" data-src="assets/vids/mock/mock_video1.mp4" type="video/mp4">
								<!-- <source src="assets/vids/placeholder.webm" data-src="assets/vids/1920/video-1-1920.webm" type="video/webm"> -->
							</video>
						</div>
					</div>
					<!-- End page header video -->
						
					<div class="page-header-inner tt-wrap">

						<div class="ph-caption">
							<div class="ph-caption-inner">
								<!-- <h2 class="ph-caption-subtitle">Subtitle</h2> -->
								<h1 class="ph-caption-title">Vickygraphy</h1>
								<div class="ph-caption-description max-width-700 hide">
									Over 15 years of experience
								</div>
							</div> <!-- /.ph-caption-inner -->
						</div> <!-- /.ph-caption -->

					</div> <!-- /.page-header-inner -->

					<!-- Begin page header mask
					============================ 
					Note: ph-mask is basically a clone of caption. If you want to use a different text on the mask then it is a bit tricky to fit. For better results, make sure that it will be the same length as possible as the original caption text (especially the title). It should also contain the same number of lines. Sometimes this can be difficult to achieve, in which case we recommend simply using identical text to the original caption.
					-->
					<!-- <div class="page-header-inner ph-mask">
						<div class="ph-mask-inner tt-wrap">

							<div class="ph-caption">
								<div class="ph-caption-inner"> -->
									<!-- <h2 class="ph-caption-subtitle">Subtitle</h2> -->
									<!-- <h1 class="ph-caption-title">Digital<br> Designer</h1>
									<div class="ph-caption-description max-width-700">
										Over 15 years of experience<br> in the design industry
									</div> -->
								<!-- </div> /.ph-caption-inner -->
							<!-- </div> /.ph-caption -->

						<!-- </div> /.ph-mask-inner -->
					<!-- </div> -->
					<!-- End page header mask -->


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

					<!-- Begin scroll down
					=======================
					* Note: Circle shown only if class "ph-full" or "ph-full-m" is enabled in "page-header" but not on small screens! Otherwise, only the arrow icon will be shown to save space.
					-->

					<!-- this is hidden -->
					<div class="tt-scroll-down hide">
						<!-- You can change "data-offset" attribute to set scroll top offset -->
						<a href="#tt-page-content" class="tt-scroll-down-inner tt-magnetic-item" data-offset="0">
							<div class="tt-scrd-icon"></div>
							<svg viewBox="0 0 500 500">
								<defs>
									<path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250" id="textcircle"></path>
								</defs>
								<text dy="30">
									<!-- If you change the text, you probably have to change the CSS parameters as well. In the "theme.css" file, find ".tt-scroll-down text {" and change the "font-size" and "letter-spacing" to fit the text correctly. -->
									<textPath xlink:href="#textcircle">Scroll to Explore - Scroll to Explore -</textPath>
								</text>
							</svg>
						</a> <!-- /.tt-scroll-down-inner -->
					</div>
					<!-- End scroll down -->

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
					<div class="tt-section padding-top-xlg-140 padding-bottom-xlg-120 hide">
						<div class="tt-section-inner tt-wrap">

							<div class="tt-row">
								<div class="tt-col-lg-4">

									<!-- Begin tt-Heading 
									====================== 
									* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
									* Use class "tt-heading-center" to align tt-Heading to center.
									* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
									* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
									-->
									<div class="tt-heading tt-heading-xlg">
										<!-- <h3 class="tt-heading-subtitle tt-text-reveal">Featured</h3> -->
										<h2 class="tt-heading-title tt-text-reveal">About Me</h2> <!-- You can use <br> to break a text line if needed -->
									</div>
									<!-- End tt-Heading -->

									<div class="tt-text-uppercase margin-top-30 tt-text-reveal">
										Creative designer<br> based in Melbourne
									</div>

								</div> <!-- /.tt-col -->

								<div class="tt-col-lg-1 padding-top-30">
								</div> <!-- /.tt-col -->

								<div class="tt-col-lg-7 tt-align-self-center">

									<div class="text-xxlg font-500 tt-text-reveal">
										I am dedicated to developing innovative solutions and impactful experiences that meet user needs and exceed expectations.
									</div>

									<a href="about-me.html" class="tt-btn tt-btn-outline margin-top-40 tt-magnetic-item tt-anim-fadeinup">
										<span data-hover="Read More">Read More</span>
									</a>
									
								</div> <!-- /.tt-col -->
							</div><!-- /.tt-row -->

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->

					<blockquote class="open-quote landing-quote">
						<cite>Your time is limited, so don't waste it living someone else's life. Don't be trapped by dogma – which is living with the results of other people's thinking.</cite>
						<footer><cite title="Source Title">Steve Jobs</cite></footer>
					</blockquote>

					<!-- grid start -->
					<div class="tt-section padding-top-0">
						<div class="tt-section-inner max-width-2200">

							<!-- Begin portfolio grid (works combined with tt-Ggrid!)
							========================== 
							* Use class "pgi-hover" to enable portfolio grid item hover effect (behavior depends on "ttgr-gap-*" classes below!).
							* Use class "pgi-cap-hover" to enable portfolio grid item caption hover effect (effect only with class "pgi-cap-inside"! Also no effect on mobile devices!).
							* Use class "pgi-cap-center" to position portfolio grid item caption to center.
							* Use class "pgi-cap-inside" to position portfolio grid item caption to inside.
							--> 
							<div id="portfolio-grid" class="pgi-hover pgi-cap-inside no-caption">

								<!-- Begin tt-Grid
								=================== 
								* Use class "ttgr-layout-2", "ttgr-layout-3", "ttgr-layout-4" to set grid layout (columns). No class = one column.
								* Use class "ttgr-layout-1-2", "ttgr-layout-2-1", "ttgr-layout-2-3", "ttgr-layout-3-2", "ttgr-layout-3-4" or "ttgr-layout-4-3" to set grid mixed layout (columns).
								* Use class "ttgr-layout-creative-1" or "ttgr-layout-creative-2" to set grid creative mixed layout (no effect with classes "ttgr-portrait", "ttgr-portrait-half", "ttgr-not-cropped" and "ttgr-shifted").
								* Use class "ttgr-portrait" or "ttgr-portrait-half" to enable portrait mode (no effect with classes "ttgr-layout-creative-1", "ttgr-layout-creative-2" and "ttgr-not-cropped").
								* Use class "ttgr-gap-1", "ttgr-gap-2", "ttgr-gap-3", "ttgr-gap-4", "ttgr-gap-5" or "ttgr-gap-6" to add space between items.
								* Use class "ttgr-not-cropped" to enable not cropped mode (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
								* Use class "ttgr-shifted" to enable shifted layout (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
								-->
								<div class="tt-grid ttgr-layout-3 ttgr-gap-1 ttgr-not-cropped">


									<!-- Begin tt-Grid items wrap 
									============================== -->
									<div class="tt-grid-items-wrap isotope-items-wrap">

										<!-- Begin tt-Grid item
										======================== -->
										<div class="tt-grid-item isotope-item lifestyle">
											<div class="ttgr-item-inner">

												<!-- Begin portfolio grid item 
												===============================
												* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"! Also no effect on small screens!).
												-->
												<div class="portfolio-grid-item">
													<a href="single-project-1.html" class="pgi-image-wrap" data-cursor="View<br>Project">
														<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
														<div class="pgi-image-holder cover-opacity-2">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/mock/img1.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption">
														<div class="pgi-caption-inner">
															<h2 class="pgi-title">
																<a href="single-project-1.html">Tortillas</a>
															</h2>
															<div class="pgi-categories-wrap">
																<div class="pgi-category">Lifestyle</div>
																<!-- <a href="" class="pgi-category">Varia</a -->
															</div> <!-- /.pli-categories-wrap -->
														</div> <!-- /.pgi-caption-inner -->
													</div> <!-- /.pgi-caption -->
												</div>
												<!-- End portfolio grid item -->

											</div> <!-- /.ttgr-item-inner -->
										</div>
										<!-- End tt-Grid item -->

										<!-- Begin tt-Grid item
										======================== -->
										<div class="tt-grid-item isotope-item lifestyle">
											<div class="ttgr-item-inner">

												<!-- Begin portfolio grid item 
												===============================
												* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
												-->
												<div class="portfolio-grid-item pgi-image-is-light">
													<a href="single-project-2.html" class="pgi-image-wrap" data-cursor="View<br>Project">
														<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/mock/img2.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption">
														<div class="pgi-caption-inner">
															<h2 class="pgi-title">
																<a href="single-project-2.html">Coffee Shop</a>
															</h2>
															<div class="pgi-categories-wrap">
																<div class="pgi-category">Lifestyle</div>
																<!-- <div class="pgi-category">Varia</div> -->
															</div> <!-- /.pli-categories-wrap -->
														</div> <!-- /.pgi-caption-inner -->
													</div> <!-- /.pgi-caption -->
												</div>
												<!-- End portfolio grid item -->

											</div> <!-- /.ttgr-item-inner -->
										</div>
										<!-- End tt-Grid item -->

										<!-- Begin tt-Grid item
										======================== -->
										<div class="tt-grid-item isotope-item artistic">
											<div class="ttgr-item-inner">

												<!-- Begin portfolio grid item 
												===============================
												* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
												-->
												<div class="portfolio-grid-item">
													<a href="single-project-3.html" class="pgi-image-wrap" data-cursor="View<br>Project">
														<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/mock/img12.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption">
														<div class="pgi-caption-inner">
															<h2 class="pgi-title">
																<a href="single-project-3.html">Fashion Shoot</a>
															</h2>
															<div class="pgi-categories-wrap">
																<div class="pgi-category">Artistic</div>
																<!-- <div class="pgi-category">Varia</div> -->
															</div> <!-- /.pli-categories-wrap -->
														</div> <!-- /.pgi-caption-inner -->
													</div> <!-- /.pgi-caption -->
												</div>
												<!-- End portfolio grid item -->

											</div> <!-- /.ttgr-item-inner -->
										</div>
										<!-- End tt-Grid item -->

										<!-- Begin tt-Grid item
										======================== -->
										<div class="tt-grid-item isotope-item artistic">
											<div class="ttgr-item-inner">

												<!-- Begin portfolio grid item 
												===============================
												* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
												-->
												<div class="portfolio-grid-item">
													<a href="single-project-4.html" class="pgi-image-wrap" data-cursor="View<br>Project">
														<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
														<div class="pgi-image-holder cover-opacity-2">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/mock/img4.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption">
														<div class="pgi-caption-inner">
															<h2 class="pgi-title">
																<a href="single-project-4.html">Postorganic</a>
															</h2>
															<div class="pgi-categories-wrap">
																<div class="pgi-category">Artistic</div>
																<!-- <div class="pgi-category">Varia</div> -->
															</div> <!-- /.pli-categories-wrap -->
														</div> <!-- /.pgi-caption-inner -->
													</div> <!-- /.pgi-caption -->
												</div>
												<!-- End portfolio grid item -->

											</div> <!-- /.ttgr-item-inner -->
										</div>
										<!-- End tt-Grid item -->

										<!-- Begin tt-Grid item
										======================== -->
										<div class="tt-grid-item isotope-item wellness">
											<div class="ttgr-item-inner">

												<!-- Begin portfolio grid item 
												===============================
												* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
												-->
												<div class="portfolio-grid-item">
													<a href="single-project-5.html" class="pgi-image-wrap" data-cursor="View<br>Project">
														<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
														<div class="pgi-image-holder cover-opacity-2">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/mock/img5.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption">
														<div class="pgi-caption-inner">
															<h2 class="pgi-title">
																<a href="single-project-5.html">Embrace Yourself</a>
															</h2>
															<div class="pgi-categories-wrap">
																<div class="pgi-category">Wellness</div>
																<!-- <div class="pgi-category">Varia</div> -->
															</div> <!-- /.pli-categories-wrap -->
														</div> <!-- /.pgi-caption-inner -->
													</div> <!-- /.pgi-caption -->
												</div>
												<!-- End portfolio grid item -->

											</div> <!-- /.ttgr-item-inner -->
										</div>
										<!-- End tt-Grid item -->

										<!-- Begin tt-Grid item
										======================== -->
										<div class="tt-grid-item isotope-item lifestyle">
											<div class="ttgr-item-inner">

												<!-- Begin portfolio grid item 
												===============================
												* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
												-->
												<div class="portfolio-grid-item">
													<a href="single-project-6.html" class="pgi-image-wrap" data-cursor="View<br>Project">
														<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
														<div class="pgi-image-holder cover-opacity-2">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/mock/img6.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption">
														<div class="pgi-caption-inner">
															<h2 class="pgi-title">
																<a href="single-project-6.html">Pink Oasis</a>
															</h2>
															<div class="pgi-categories-wrap">
																<div class="pgi-category">Lifestyle</div>
																<!-- <div class="pgi-category">Varia</div> -->
															</div> <!-- /.pli-categories-wrap -->
														</div> <!-- /.pgi-caption-inner -->
													</div> <!-- /.pgi-caption -->
												</div>
												<!-- End portfolio grid item -->

											</div> <!-- /.ttgr-item-inner -->
										</div>
										<!-- End tt-Grid item -->

										<!-- Begin tt-Grid item
										======================== -->
										<div class="tt-grid-item isotope-item lifestyle">
											<div class="ttgr-item-inner">

												<!-- Begin portfolio grid item 
												===============================
												* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
												-->
												<div class="portfolio-grid-item">
													<a href="single-project-7.html" class="pgi-image-wrap" data-cursor="View<br>Project">
														<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
														<div class="pgi-image-holder cover-opacity-2">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/mock/img7.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption">
														<div class="pgi-caption-inner">
															<h2 class="pgi-title">
																<a href="single-project-7.html">Turbulent Waters</a>
															</h2>
															<div class="pgi-categories-wrap">
																<div class="pgi-category">Lifestyle</div>
																<!-- <div class="pgi-category">Varia</div> -->
															</div> <!-- /.pli-categories-wrap -->
														</div> <!-- /.pgi-caption-inner -->
													</div> <!-- /.pgi-caption -->
												</div>
												<!-- End portfolio grid item -->

											</div> <!-- /.ttgr-item-inner -->
										</div>
										<!-- End tt-Grid item -->

										<!-- Begin tt-Grid item
										======================== -->
										<div class="tt-grid-item isotope-item wellness">
											<div class="ttgr-item-inner">

												<!-- Begin portfolio grid item 
												===============================
												* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
												-->
												<div class="portfolio-grid-item pgi-image-is-light">
													<a href="single-project-8.html" class="pgi-image-wrap" data-cursor="View<br>Project">
														<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/mock/img8.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption">
														<div class="pgi-caption-inner">
															<h2 class="pgi-title">
																<a href="single-project-8.html">Baby Care</a>
															</h2>
															<div class="pgi-categories-wrap">
																<div class="pgi-category">Wellness</div>
																<!-- <div class="pgi-category">Varia</div> -->
															</div> <!-- /.pli-categories-wrap -->
														</div> <!-- /.pgi-caption-inner -->
													</div> <!-- /.pgi-caption -->
												</div>
												<!-- End portfolio grid item -->

											</div> <!-- /.ttgr-item-inner -->
										</div>
										<!-- End tt-Grid item -->

										<!-- Begin tt-Grid item
										======================== -->
										<div class="tt-grid-item isotope-item wellness">
											<div class="ttgr-item-inner">

												<!-- Begin portfolio grid item 
												===============================
												* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
												-->
												<div class="portfolio-grid-item">
													<a href="single-project-9.html" class="pgi-image-wrap" data-cursor="View<br>Project">
														<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
														<div class="pgi-image-holder cover-opacity-2">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/mock/img9.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption">
														<div class="pgi-caption-inner">
															<h2 class="pgi-title">
																<a href="single-project-9.html">Dream Spa</a>
															</h2>
															<div class="pgi-categories-wrap">
																<div class="pgi-category">Wellness</div>
																<!-- <div class="pgi-category">Varia</div> -->
															</div> <!-- /.pli-categories-wrap -->
														</div> <!-- /.pgi-caption-inner -->
													</div> <!-- /.pgi-caption -->
												</div>
												<!-- End portfolio grid item -->

											</div> <!-- /.ttgr-item-inner -->
										</div>
										<!-- End tt-Grid item -->

									</div>
									<!-- End tt-Grid items wrap  -->

								</div>
								<!-- End tt-Grid -->

								<!-- Begin tt-pagination (uncomment below code if you want to use pagination)
								========================= 
								* Use class "tt-pagin-center" to align center.
								-->
								<!-- <div class="tt-pagination tt-pagin-center tt-anim-fadeinup">
									<div class="tt-pagin-prev">
										<a href="" class="tt-pagin-item tt-magnetic-item"><i class="fas fa-arrow-left"></i></a>
									</div>
									<div class="tt-pagin-numbers">
										<a href="#" class="tt-pagin-item tt-magnetic-item active">1</a>
										<a href="" class="tt-pagin-item tt-magnetic-item">2</a>
										<a href="" class="tt-pagin-item tt-magnetic-item">3</a>
										<a href="" class="tt-pagin-item tt-magnetic-item">4</a>
									</div>
									<div class="tt-pagin-next">
										<a href="" class="tt-pagin-item tt-pagin-next tt-magnetic-item"><i class="fas fa-arrow-right"></i></a>
									</div>
								</div> -->
								<!-- End tt-pagination -->

							</div>
							<!-- End portfolio grid -->

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- grid end -->

					
					<!-- services start -->
				<!-- =======================
					///// Begin tt-section /////
					============================ 

					-->
					<div class="tt-section">
						<div class="tt-section-inner tt-wrap max-width-1500">

							<div class="tt-row">
								<div class="tt-col-xl-3 margin-bottom-60">

									<!-- Begin tt-Heading 
									====================== 
									* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
									* Use class "tt-heading-center" to align tt-Heading to center.
									* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
									* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
									-->
									<div class="tt-heading tt-heading-xxlg">
										<h3 class="tt-heading-subtitle tt-text-reveal">What I Do</h3>
										<h2 class="tt-heading-title tt-text-reveal">Services</h2> <!-- You can use <br> to break a text line if needed -->
									</div>
									<!-- End tt-Heading -->

									<div class="tt-text-uppercase max-width-400 margin-bottom-20 text-pretty tt-text-reveal">
										Comprehensive digital services to boost your online presence and achieve impactful results.
									</div>

								</div> <!-- /.tt-col -->

								<div class="tt-col-xl-2">
								</div> <!-- /.tt-col -->
							
								<div class="tt-col-xl-7 tt-align-self-end">

									<!-- Begin accordion 
									===================== 
									* Use class "tt-ac-sm", "tt-ac-lg", "tt-ac-xlg" or "tt-ac-xxlg" to set accordion size. No class = default size. Alternative font used in the title from "tt-ac-lg"!
									* Use class "tt-ac-hover" to enable hover effect.
									* Use class "tt-ac-counter" to enable counter.
									* Use class "tt-ac-borders" to enable borders.
									-->
									<div class="tt-accordion tt-ac-lg tt-ac-hover tt-ac-counter tt-ac-borders">

										<div class="tt-accordion-item tt-anim-fadeinup">
											<div class="tt-accordion-heading">
												<div class="tt-ac-head cursor-alter">
													<div class="tt-ac-head-inner">
														<h4 class="tt-ac-head-title">Wedding Coverage</h4>
													</div>
												</div>
												<div class="tt-accordion-caret">
													<div class="tt-accordion-caret-inner tt-magnetic-item">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
															<path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"></path>
														</svg>
													</div>
												</div> <!-- /.tt-accordion-caret -->
											</div> <!-- /.tt-accordion-heading -->

											<!-- Use class "is-open" to make this content open by default. Max width class is optional. -->
											<div class="tt-accordion-content max-width-1400">

												<p>Crafting data-driven strategies to elevate your online presence. I align your business goals with innovative digital solutions, ensuring measurable growth and a competitive edge in the digital landscape.</p>

												<p>In today’s fast-paced digital world, having a clear and actionable strategy is key to standing out. I specialize in crafting data-driven digital strategies tailored to your unique business goals. Whether you’re looking to grow your online presence, improve customer engagement, or drive conversions, I work closely with you to identify opportunities and create a roadmap for success. From audience analysis and competitive research to defining KPIs and optimizing digital channels, I ensure your strategy is not only innovative but also measurable and results-oriented. Let’s turn your vision into a digital reality.</p>

												<a href="contact.html" class="tt-btn tt-btn-outline tt-magnetic-item">
													<span data-hover="Let’s Connect!">Let’s Connect!</span>
												</a>

											</div> <!-- /.tt-accordion-content -->
										</div> <!-- /.tt-accordion-item -->

										<div class="tt-accordion-item tt-anim-fadeinup">
											<div class="tt-accordion-heading">
												<div class="tt-ac-head cursor-alter">
													<div class="tt-ac-head-inner">
														<h4 class="tt-ac-head-title">Pre Wedding shoot</h4>
													</div>
												</div>
												<div class="tt-accordion-caret">
													<div class="tt-accordion-caret-inner tt-magnetic-item">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
															<path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"></path>
														</svg>
													</div>
												</div> <!-- /.tt-accordion-caret -->
											</div> <!-- /.tt-accordion-heading -->

											<!-- Use class "is-open" to make this content open by default. Max width class is optional. -->
											<div class="tt-accordion-content max-width-1400">

												<p>Building brands that resonate. From logos to messaging, I create cohesive and memorable identities that reflect your values, connect with your audience, and stand out in the market.</p>

												<p>Your brand is more than just a logo—it’s the heart and soul of your business. I help you create a cohesive and memorable brand identity that resonates with your audience and reflects your core values. From crafting a unique logo and selecting the perfect color palette to defining your brand voice and messaging, I ensure every element works together to tell your story. Whether you’re launching a new brand or refreshing an existing one, I’ll guide you through the process of building a strong, authentic identity that stands out in a crowded market.</p>

												<a href="contact.html" class="tt-btn tt-btn-outline tt-magnetic-item">
													<span data-hover="Let’s Connect!">Let’s Connect!</span>
												</a>

											</div> <!-- /.tt-accordion-content -->
										</div> <!-- /.tt-accordion-item -->

										<div class="tt-accordion-item tt-anim-fadeinup">
											<div class="tt-accordion-heading">
												<div class="tt-ac-head cursor-alter">
													<div class="tt-ac-head-inner">
														<h4 class="tt-ac-head-title">Editorial Shoot</h4>
													</div>
												</div>
												<div class="tt-accordion-caret">
													<div class="tt-accordion-caret-inner tt-magnetic-item">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
															<path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"></path>
														</svg>
													</div>
												</div> <!-- /.tt-accordion-caret -->
											</div> <!-- /.tt-accordion-heading -->

											<!-- Use class "is-open" to make this content open by default. Max width class is optional. -->
											<div class="tt-accordion-content max-width-1400">

												<p>Designing intuitive and engaging experiences. I blend user-centered design principles with cutting-edge aesthetics to create interfaces that are not only beautiful but also functional and easy to navigate.</p>

												<p>Great design is more than just aesthetics—it’s about creating seamless and enjoyable experiences for your users. I specialize in designing intuitive and user-friendly interfaces that not only look stunning but also function flawlessly. By combining user-centered design principles with a deep understanding of your audience, I create wireframes, prototypes, and final designs that prioritize usability and engagement. Whether it’s a website, app, or digital platform, I ensure every interaction feels natural and every detail enhances the overall experience.</p>

												<a href="contact.html" class="tt-btn tt-btn-outline tt-magnetic-item">
													<span data-hover="Let’s Connect!">Let’s Connect!</span>
												</a>

											</div> <!-- /.tt-accordion-content -->
										</div> <!-- /.tt-accordion-item -->

										<div class="tt-accordion-item tt-anim-fadeinup hide">
											<div class="tt-accordion-heading">
												<div class="tt-ac-head cursor-alter">
													<div class="tt-ac-head-inner">
														<h4 class="tt-ac-head-title">Web Design</h4>
													</div>
												</div>
												<div class="tt-accordion-caret">
													<div class="tt-accordion-caret-inner tt-magnetic-item">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
															<path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"></path>
														</svg>
													</div>
												</div> <!-- /.tt-accordion-caret -->
											</div> <!-- /.tt-accordion-heading -->

											<!-- Use class "is-open" to make this content open by default. Max width class is optional. -->
											<div class="tt-accordion-content max-width-1400">

												<p>Transforming ideas into stunning websites. My custom web designs are tailored to your brand, optimized for performance, and designed to captivate your audience while driving conversions.</p>

												<p>Your website is often the first impression you make on potential customers, and it needs to be unforgettable. I design custom websites that are visually striking, highly functional, and optimized for performance. From responsive layouts that look great on any device to seamless navigation and fast load times, I focus on creating a user experience that keeps visitors engaged and drives conversions. Whether you need a simple portfolio site or a complex e-commerce platform, I’ll work with you to bring your vision to life and create a website that truly represents your brand.</p>

												<a href="contact.html" class="tt-btn tt-btn-outline tt-magnetic-item">
													<span data-hover="Let’s Connect!">Let’s Connect!</span>
												</a>

											</div> <!-- /.tt-accordion-content -->
										</div> <!-- /.tt-accordion-item -->

										<div class="tt-accordion-item tt-anim-fadeinup hide">
											<div class="tt-accordion-heading">
												<div class="tt-ac-head cursor-alter">
													<div class="tt-ac-head-inner">
														<h4 class="tt-ac-head-title">Product Design</h4>
													</div>
												</div>
												<div class="tt-accordion-caret">
													<div class="tt-accordion-caret-inner tt-magnetic-item">
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
															<path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"></path>
														</svg>
													</div>
												</div> <!-- /.tt-accordion-caret -->
											</div> <!-- /.tt-accordion-heading -->

											<!-- Use class "is-open" to make this content open by default. Max width class is optional. -->
											<div class="tt-accordion-content max-width-1400">

												<p>Innovating with purpose. I design products that solve real problems, combining functionality, aesthetics, and user experience to deliver solutions that users love and businesses rely on.</p>

												<p>Innovative products start with thoughtful design. I specialize in creating products that solve real problems and deliver exceptional user experiences. From initial concept development and user research to prototyping and final design, I focus on combining functionality, aesthetics, and usability to create solutions that users love. Whether it’s a physical product, a digital tool, or something in between, I’ll work with you to design something that not only meets your business goals but also exceeds user expectations. Let’s create products that make an impact.</p>

												<a href="contact.html" class="tt-btn tt-btn-outline tt-magnetic-item">
													<span data-hover="Let’s Connect!">Let’s Connect!</span>
												</a>

											</div> <!-- /.tt-accordion-content -->
										</div> <!-- /.tt-accordion-item -->

									</div>
									<!-- End accordion -->

								</div> <!-- /.tt-col -->
							</div><!-- /.tt-row -->

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->
					<!-- services end  -->

						<!-- =======================
					///// Begin tt-section /////
					============================ 
					* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
					* You can use classes "border-top" and "border-bottom" if needed. 
					* Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
					-->
					<div class="tt-section no-padding-top">
						<div class="tt-section-inner">

							<!-- Begin clipper
							=================== 
							* Use class "tt-clipper-grayscale" to enable black & white background.
							* Use class "tt-clipper-cover-*" to set background overlay opacity. For example "tt-clipper-cover-2" or "tt-clipper-cover-2-5" (up to "tt-clipper-cover-9-5").
							* Supported media: "YouTube", "Vimeo", ".mp4", ".mp3 (requires data-type="html5video")". Just add your media link to the href="" tag.
							-->
							<div class="tt-clipper">
								<a href="https://www.youtube.com/watch?v=6nGs9iGrpok" class="tt-clipper-inner" data-cursor="Play<br>Reel" data-fancybox data-caption="My awesome showreel. :)">

									<!-- Clipper background (image) -->
									<!-- <div class="tt-clipper-bg">
										<img src="assets/vids/1920/showreel-1920.jpg" loading="lazy" alt="Image">
									</div> -->

									<!-- Clipper background (video) -->
									<div class="tt-clipper-bg">
										<video loop muted autoplay playsinline preload="metadata" poster="assets/img/mock/img1.jpg">
											<source src="assets/vids/mock/Slideshow-Loop.mp4" data-src="assets/vids/mock/Slideshow-Loop.mp4" type="video/mp4">
											<!-- <source src="assets/vids/placeholder.webm" data-src="assets/vids/1920/showreel-1920.webm" type="video/webm"> -->
										</video>
									</div>

									<div class="tt-clipper-content">

										<!-- Clipper button (for mobile devices only!) -->
										<div class="tt-clipper-btn">
											<i class="fa-solid fa-play"></i>
										</div>

									</div> <!-- /.tt-clipper-content -->
								</a> 
							</div>
							<!-- End clipper -->

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
					<div class="padding-bottom-0 tt-section padding-top-xlg-140 ">
						<div class="tt-section-inner tt-wrap">

							<div class="tt-row">
								<div class="tt-col-xl-8">

									<!-- Begin tt-Heading 
									====================== 
									* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
									* Use class "tt-heading-center" to align tt-Heading to center.
									* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
									* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
									-->
									<!-- <div class="tt-heading tt-heading-xxxlg"> -->
										<h3 class="tt-heading-subtitle tt-text-reveal">Featured Work</h3>
										<!-- <h2 class="tt-heading-title tt-text-reveal">Projects</h2> You can use <br> to break a text line if needed -->
									<!-- </div> -->
									<!-- End tt-Heading -->

									<!-- <div class="tt-text-uppercase max-width-400 margin-left-xlg-10-p text-pretty tt-text-reveal">
										Please explore my selected projects below. Click on each one for an overview
									</div> -->

								</div> <!-- /.tt-col -->
							
								<div class="tt-col-xl-4 tt-align-self-end margin-top-30 hide">

									<!-- Begin big round button 
									============================ -->
									<div class="tt-big-round-ptn tt-anim-fadeinup">
										<a href="portfolio-preview.html" class="tt-big-round-ptn-holder tt-magnetic-item">
											<div class="tt-big-round-ptn-inner">All<br> Projects</div>
										</a>
									</div>
									<!-- End big round button -->

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
					<div class="tt-section no-padding-top padding-top-xlg-80 padding-bottom-20 padding-bottom-xlg-80">
						<div class="tt-section-inner">

							<!-- Begin portfolio preview list 
							==================================
							* Use class "tt-ppli-portrait" to enable preview image portrait mode.
							* Use class "tt-ppli-hover" to enable item hover effect.
							-->
							<div class="tt-portfolio-preview-list tt-ppli-portrait tt-ppli-hover">
								<div class="tt-ppl-items-list">

									<!-- Begin list item 
									===================== -->
									<a href="single-project-1.html" class="tt-ppl-item">
										<div class="tt-ppli-preview">
											<div class="tt-ppli-preview-image">
												<!-- Note: The recommended maximum image width is 800px -->
												<img src="assets/img/portfolio/800/portfolio-1.jpg" alt="Image">
											</div> <!-- /.tt-ppli-preview-image -->
										</div> <!-- /.tt-ppli-preview -->

										<div class="tt-ppl-item-inner">
											<div class="tt-ppl-item-holder">
												<div class="tt-ppli-col tt-ppli-col-count">
													<div class="tt-ppli-count"></div>
												</div> <!-- /.tt-ppli-col -->
												<div class="tt-ppli-col tt-ppli-col-caption">
													<div class="tt-ppli-caption">
														<h2 class="tt-ppli-title">Tortillas</h2>
														<div class="tt-ppli-categories">
															<div class="tt-ppli-category">Lifestyle</div>
															<!-- <div class="tt-ppli-category">Varia</div> -->
														</div> <!-- /.tt-ppli-categories -->
													</div> <!-- /.tt-ppli-caption -->
												</div> <!-- /.tt-ppli-col -->
												<div class="tt-ppli-col tt-ppli-col-info tt-justify-content-md-end">
													<div class="tt-ppli-info"> <!-- Use short text! 3 lines max. -->
														Visual / Branding
													</div> <!-- /.tt-ppli-info -->
												</div> <!-- /.tt-ppli-col -->
											</div> <!-- /.tt-ppl-item-holder -->
										</div> <!-- /.tt-ppl-item-inner -->
									</a>
									<!-- End list item -->

									<!-- Begin list item 
									===================== -->
									<a href="single-project-2.html" class="tt-ppl-item">
										<div class="tt-ppli-preview">
											<div class="tt-ppli-preview-image">
												<!-- Note: The recommended maximum image width is 800px -->
												<img src="assets/img/portfolio/800/portfolio-2.jpg" alt="Image">
											</div> <!-- /.tt-ppli-preview-image -->
										</div> <!-- /.tt-ppli-preview -->

										<div class="tt-ppl-item-inner">
											<div class="tt-ppl-item-holder">
												<div class="tt-ppli-col tt-ppli-col-count">
													<div class="tt-ppli-count"></div>
												</div> <!-- /.tt-ppli-col -->
												<div class="tt-ppli-col tt-ppli-col-caption">
													<div class="tt-ppli-caption">
														<h2 class="tt-ppli-title">Coffee Shop</h2>
														<div class="tt-ppli-categories">
															<div class="tt-ppli-category">Lifestyle</div>
															<!-- <div class="tt-ppli-category">Varia</div> -->
														</div> <!-- /.tt-ppli-categories -->
													</div> <!-- /.tt-ppli-caption -->
												</div> <!-- /.tt-ppli-col -->
												<div class="tt-ppli-col tt-ppli-col-info tt-justify-content-md-end">
													<div class="tt-ppli-info"> <!-- Use short text! 3 lines max. -->
														Art Direction / Visual
													</div> <!-- /.tt-ppli-info -->
												</div> <!-- /.tt-ppli-col -->
											</div> <!-- /.tt-ppl-item-holder -->
										</div> <!-- /.tt-ppl-item-inner -->
									</a>
									<!-- End list item -->

									<!-- Begin list item 
									===================== -->
									<a href="single-project-3.html" class="tt-ppl-item">
										<div class="tt-ppli-preview">
											<div class="tt-ppli-preview-video">
												<!-- Note: The recommended maximum image width is 800px -->
												<video loop muted preload="metadata" poster="assets/vids/800/video-4-800.jpg">
													<source src="assets/vids/placeholder.mp4" data-src="assets/vids/800/video-4-800.mp4" type="video/mp4">
													<source src="assets/vids/placeholder.webm" data-src="assets/vids/800/video-4-800.webm" type="video/webm">
												</video>
											</div> <!-- /.tt-ppli-preview-video -->
										</div> <!-- /.tt-ppli-preview -->

										<div class="tt-ppl-item-inner">
											<div class="tt-ppl-item-holder">
												<div class="tt-ppli-col tt-ppli-col-count">
													<div class="tt-ppli-count"></div>
												</div> <!-- /.tt-ppli-col -->
												<div class="tt-ppli-col tt-ppli-col-caption">
													<div class="tt-ppli-caption">
														<h2 class="tt-ppli-title">Fashion Shoot</h2>
														<div class="tt-ppli-categories">
															<div class="tt-ppli-category">Artistic</div>
															<!-- <div class="tt-ppli-category">Varia</div> -->
														</div> <!-- /.tt-ppli-categories -->
													</div> <!-- /.tt-ppli-caption -->
												</div> <!-- /.tt-ppli-col -->
												<div class="tt-ppli-col tt-ppli-col-info tt-justify-content-md-end">
													<div class="tt-ppli-info"> <!-- Use short text! 3 lines max. -->
														Photographer / Visual / Branding
													</div> <!-- /.tt-ppli-info -->
												</div> <!-- /.tt-ppli-col -->
											</div> <!-- /.tt-ppl-item-holder -->
										</div> <!-- /.tt-ppl-item-inner -->
									</a>
									<!-- End list item -->

									<!-- Begin list item 
									===================== -->
									<a href="single-project-4.html" class="tt-ppl-item">
										<div class="tt-ppli-preview">
											<div class="tt-ppli-preview-image">
												<!-- Note: The recommended maximum image width is 800px -->
												<img src="assets/img/portfolio/800/portfolio-3.jpg" alt="Image">
											</div> <!-- /.tt-ppli-preview-image -->
										</div> <!-- /.tt-ppli-preview -->

										<div class="tt-ppl-item-inner">
											<div class="tt-ppl-item-holder">
												<div class="tt-ppli-col tt-ppli-col-count">
													<div class="tt-ppli-count"></div>
												</div> <!-- /.tt-ppli-col -->
												<div class="tt-ppli-col tt-ppli-col-caption">
													<div class="tt-ppli-caption">
														<h2 class="tt-ppli-title">Postorganic</h2>
														<div class="tt-ppli-categories">
															<div class="tt-ppli-category">Artistic</div>
															<!-- <div class="tt-ppli-category">Varia</div> -->
														</div> <!-- /.tt-ppli-categories -->
													</div> <!-- /.tt-ppli-caption -->
												</div> <!-- /.tt-ppli-col -->
												<div class="tt-ppli-col tt-ppli-col-info tt-justify-content-md-end">
													<div class="tt-ppli-info"> <!-- Use short text! 3 lines max. -->
														Desing / Branding
													</div> <!-- /.tt-ppli-info -->
												</div> <!-- /.tt-ppli-col -->
											</div> <!-- /.tt-ppl-item-holder -->
										</div> <!-- /.tt-ppl-item-inner -->
									</a>
									<!-- End list item -->

									<!-- Begin list item 
									===================== -->
									<a href="single-project-5.html" class="tt-ppl-item">
										<div class="tt-ppli-preview">
											<div class="tt-ppli-preview-image">
												<!-- Note: The recommended maximum image width is 800px -->
												<img src="assets/img/portfolio/800/portfolio-4.jpg" alt="Image">
											</div> <!-- /.tt-ppli-preview-image -->
										</div> <!-- /.tt-ppli-preview -->

										<div class="tt-ppl-item-inner">
											<div class="tt-ppl-item-holder">
												<div class="tt-ppli-col tt-ppli-col-count">
													<div class="tt-ppli-count"></div>
												</div> <!-- /.tt-ppli-col -->
												<div class="tt-ppli-col tt-ppli-col-caption">
													<div class="tt-ppli-caption">
														<h2 class="tt-ppli-title">Embrace Yourself</h2>
														<div class="tt-ppli-categories">
															<div class="tt-ppli-category">Wellness</div>
															<!-- <div class="tt-ppli-category">Varia</div> -->
														</div> <!-- /.tt-ppli-categories -->
													</div> <!-- /.tt-ppli-caption -->
												</div> <!-- /.tt-ppli-col -->
												<div class="tt-ppli-col tt-ppli-col-info tt-justify-content-md-end">
													<div class="tt-ppli-info"> <!-- Use short text! 3 lines max. -->
														Art Direction / Desing / Branding
													</div> <!-- /.tt-ppli-info -->
												</div> <!-- /.tt-ppli-col -->
											</div> <!-- /.tt-ppl-item-holder -->
										</div> <!-- /.tt-ppl-item-inner -->
									</a>
									<!-- End list item -->

								</div> <!-- /.tt-ppl-items-list -->
							</div>
							<!-- End portfolio preview list -->

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
					<div class="tt-section no-padding-bottom padding-bottom-xlg-80 hide">
						<div class="tt-section-inner tt-wrap">

							<div class="tt-row">
								<div class="tt-col-xl-8">

									<!-- Begin tt-Heading 
									====================== 
									* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
									* Use class "tt-heading-center" to align tt-Heading to center.
									* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
									* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
									-->
									<div class="tt-heading tt-heading-xxxlg">
										<h3 class="tt-heading-subtitle tt-text-reveal">What I Do</h3>
										<h2 class="tt-heading-title tt-text-reveal">Services</h2> <!-- You can use <br> to break a text line if needed -->
									</div>
									<!-- End tt-Heading -->

									<div class="tt-text-uppercase max-width-400 margin-left-xlg-10-p text-pretty tt-text-reveal">
										Comprehensive digital services to boost your online presence and achieve impactful results.
									</div>

								</div> <!-- /.tt-col -->
							
								<div class="tt-col-xl-4 tt-align-self-end margin-top-40">

									<!-- Begin big arrow 
									====================== 
									Use classes "tt-ba-angle-left", "tt-ba-angle-top", "tt-ba-angle-top-left", "tt-ba-angle-top-right", "tt-ba-angle-bottom", "tt-ba-angle-bottom-left", "tt-ba-angle-bottom-right" set change arrow pointing angle (no class = right).
									-->
									<div class="tt-big-arrow tt-ba-angle-bottom-left tt-anim-fadeinup">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
											<path d="M13.025 1l-2.847 2.828 6.176 6.176h-16.354v3.992h16.354l-6.176 6.176 2.847 2.828 10.975-11z"></path>
										</svg>
									</div> 
									<!-- End big arrow -->

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
					<div class="tt-section hide">
						<div class="tt-section-inner">

							<!-- Begin horizontal accordion
							================================ 
							* Use class "tt-hac-alter-hover" to enable alternative hover style (no effect on small screens!).
							* INFO: Do not use too many items here! The more items, the narrower the space to display. Up to 5 items are optimal. If you want to display more items, use a vertical accordion instead.
							-->
							<div class="tt-horizontal-accordion tt-hac-alter-hover tt-anim-fadeinup">

								<!-- Begin horizontal accordion item 
								===================================== -->
								<div class="tt-hac-item cursor-alter">
									<div class="tt-hac-item-count"></div>
									<div class="tt-hac-item-inner">
										<div class="tt-hac-item-content">
											<div class="tt-haci-content-top">
												<h2 class="tt-haci-title">Digital<br> Strategy</h2>
												<div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
													Crafting data-driven strategies to elevate your online presence. I align your business goals with innovative digital solutions, ensuring measurable growth and a competitive edge in the digital landscape.
												</div> <!-- /.tt-haci-description -->
											</div> <!-- /.tt-haci-content-top -->

											<div class="tt-haci-content-bottom">
												<a href="services.html" class="tt-btn tt-btn-outline tt-magnetic-item">
													<span data-hover="Read More">Read More</span>
												</a>
											</div> <!-- /.tt-haci-content-bottom -->
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
												<h2 class="tt-haci-title">Branding<br> &amp; Identity</h2>
												<div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
													Building brands that resonate. From logos to messaging, I create cohesive and memorable identities that reflect your values, connect with your audience, and stand out in the market.
												</div> <!-- /.tt-haci-description -->
											</div> <!-- /.tt-haci-content-top -->

											<div class="tt-haci-content-bottom">
												<a href="services.html" class="tt-btn tt-btn-outline tt-magnetic-item">
													<span data-hover="Read More">Read More</span>
												</a>
											</div> <!-- /.tt-haci-content-bottom -->
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
												<h2 class="tt-haci-title">UI / UX<br> Design</h2>
												<div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
													Designing intuitive and engaging experiences. I blend user-centered design principles with cutting-edge aesthetics to create interfaces that are not only beautiful but also functional and easy to navigate.
												</div> <!-- /.tt-haci-description -->
											</div> <!-- /.tt-haci-content-top -->

											<div class="tt-haci-content-bottom">
												<a href="services.html" class="tt-btn tt-btn-outline tt-magnetic-item">
													<span data-hover="Read More">Read More</span>
												</a>
											</div> <!-- /.tt-haci-content-bottom -->
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
												<h2 class="tt-haci-title">Web<br> Design</h2>
												<div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
													Transforming ideas into stunning websites. My custom web designs are tailored to your brand, optimized for performance, and designed to captivate your audience while driving conversions.
												</div> <!-- /.tt-haci-description -->
											</div> <!-- /.tt-haci-content-top -->

											<div class="tt-haci-content-bottom">
												<a href="services.html" class="tt-btn tt-btn-outline tt-magnetic-item">
													<span data-hover="Read More">Read More</span>
												</a>
											</div> <!-- /.tt-haci-content-bottom -->
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
												<h2 class="tt-haci-title">Product<br> Design</h2>
												<div class="tt-haci-description"> <!-- Max 4 lines of text displayed -->
													Innovating with purpose. I design products that solve real problems, combining functionality, aesthetics, and user experience to deliver solutions that users love and businesses rely on.
												</div> <!-- /.tt-haci-description -->
											</div> <!-- /.tt-haci-content-top -->

											<div class="tt-haci-content-bottom">
												<a href="services.html" class="tt-btn tt-btn-outline tt-magnetic-item">
													<span data-hover="Read More">Read More</span>
												</a>
											</div> <!-- /.tt-haci-content-bottom -->
										</div> <!-- /.tt-hac-item-content -->
									</div> <!-- /.tt-hac-item-inner -->
								</div>
								<!-- End horizontal accordion item -->

							</div>
							<!-- End horizontal accordion -->

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
					<div class="tt-section border-bottom hide">
						<div class="tt-section-inner tt-wrap">

							<!-- Begin sticker
							=================== -->
							<div class="tt-sticker">

								<div class="tt-row">
									<div class="tt-col-lg-4 margin-bottom-40">

										<!-- Begin sticky element
										========================== -->
										<div class="tt-sticker-sticky tt-sticky-element">

											<!-- Begin tt-Heading 
											====================== 
											* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
											* Use class "tt-heading-center" to align tt-Heading to center.
											* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
											* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
											-->
											<div class="tt-heading tt-heading-xxlg">
												<h3 class="tt-heading-subtitle tt-text-reveal">Testimonials</h3>
												<h2 class="tt-heading-title tt-text-reveal">What<br> They Say</h2> <!-- You can use <br> to break a text line if needed -->
												<p class="max-width-500 tt-text-uppercase tt-text-reveal">Genuine words from the people I’ve had the pleasure to work with.</p>
											</div>
											<!-- End tt-Heading -->

											<a href="dummy.html" class="tt-btn tt-btn-outline tt-magnetic-item tt-anim-fadeinup">
												<span data-hover="Read More">Read More</span>
											</a>

										</div>
										<!-- End sticky element -->

									</div> <!-- /.tt-col -->

									<div class="tt-col-lg-8">

										<!-- Begin sticker scroller
										============================ -->
										<div class="tt-sticker-scroller">

											<!-- Begin sticky testimonials 
											============================== 
											* Use class "tt-stte-center" to align the content to the center.
											* Use class "tt-stte-reversed-colors" to enable reversed colors.
											* Note: All cards have equal height, based on the tallest card.
											-->
											<div class="tt-sticky-testimonials tt-stte-reversed-colors">

												<!-- Begin sticky testimonials item -->
												<div class="tt-stte-item">
													<div class="tt-stte-card cursor-alter">
														<div class="tt-stte-card-counter"></div>
														<div class="tt-stte-card-caption">
															<div class="tt-stte-text">
																"One of the best template I've ever had. I love it! It's fully customizable, well coded, fast and responsive - fitting for all kind of devices".
															</div>
															<div class="tt-stte-subtext">
																<a href="https://themetorium.net/" class="tt-link" target="_blank" rel="noopener">- Wironimo</a>
															</div>
														</div> <!-- /.tt-stte-card-caption -->
													</div> <!-- /.tt-stte-card -->
												</div>
												<!-- End sticky testimonials item -->

												<!-- Begin sticky testimonials item -->
												<div class="tt-stte-item">
													<div class="tt-stte-card cursor-alter">
														<div class="tt-stte-card-counter"></div>
														<div class="tt-stte-card-caption">
															<div class="tt-stte-text">
																"Brilliant template. Tons of options, many concepts, design flexibility, code quality, explanatory comments in each section for easy styling".
															</div>
															<div class="tt-stte-subtext">- Gneto</div>
														</div> <!-- /.tt-stte-card-caption -->
													</div> <!-- /.tt-stte-card -->
												</div>
												<!-- End sticky testimonials item -->

												<!-- Begin sticky testimonials item -->
												<div class="tt-stte-item">
													<div class="tt-stte-card cursor-alter">
														<div class="tt-stte-card-counter"></div>
														<div class="tt-stte-card-caption">
															<div class="tt-stte-text">
																"Easy to customize, plenty of choices to display your portfolio, fast loading times. Excellent support".
															</div>
															<div class="tt-stte-subtext">
																<a href="https://themetorium.net/" class="tt-link" target="_blank" rel="noopener">- Brendak</a>
															</div>
														</div> <!-- /.tt-stte-card-caption -->
													</div> <!-- /.tt-stte-card -->
												</div>
												<!-- End sticky testimonials item -->

												<!-- Begin sticky testimonials item -->
												<div class="tt-stte-item">
													<div class="tt-stte-card cursor-alter">
														<div class="tt-stte-card-counter"></div>
														<div class="tt-stte-card-caption">
															<div class="tt-stte-text">
																"Very nice design and well organised and commented code. Also good customer service".
															</div>
															<div class="tt-stte-subtext">- Gazzzzz</div>
														</div> <!-- /.tt-stte-card-caption -->
													</div> <!-- /.tt-stte-card -->
												</div>
												<!-- End sticky testimonials item -->

												<!-- Begin sticky testimonials item -->
												<div class="tt-stte-item">
													<div class="tt-stte-card cursor-alter">
														<div class="tt-stte-card-counter"></div>
														<div class="tt-stte-card-caption">
															<div class="tt-stte-text">
																"I founded a bug on Iphone and Ipad and the author fixed very quickly. I appreciated his efforts and his quickness in solving the problem".
															</div>
															<div class="tt-stte-subtext">- Admanente</div>
														</div> <!-- /.tt-stte-card-caption -->
													</div> <!-- /.tt-stte-card -->
												</div>
												<!-- End sticky testimonials item -->

											</div>
											<!-- End sticky testimonials  -->

										</div>
										<!-- End sticker scroller -->

									</div> <!-- /.tt-col -->
								</div> <!-- /.tt-row -->

							</div>
							<!-- End sticker -->

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
					<div class="tt-section padding-top-xlg-120 no-padding-bottom hide">
						<div class="tt-section-inner">

							<!-- Begin tt-Heading 
							====================== 
							* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
							* Use class "tt-heading-center" to align tt-Heading to center.
							* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
							* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="tt-heading tt-heading-xxxlg tt-heading-center">
								<h3 class="tt-heading-subtitle tt-text-reveal">Recognitions</h3>
								<h2 class="tt-heading-title tt-text-reveal">Awards</h2> <!-- You can use <br> to break a text line if needed -->
								<p class="max-width-500 tt-text-uppercase tt-text-reveal">List of recognitions<br> that make me proud</p>
							</div>
							<!-- End tt-Heading -->

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
					<div class="tt-section hide">
						<div class="tt-section-inner">

							<!-- Begin avards list
							========================= -->
							<div class="tt-avards-list">

								<!-- Begin avards list item
								============================== -->
								<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
									<div class="tt-avlist-item-inner">

										<div class="tt-avlist-col tt-avlist-col-count">
											<div class="tt-avlist-count"></div>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-title">
											<h4 class="tt-avlist-title">Awwwards</h4>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-description">
											<div class="tt-avlist-description">
												Developer Award, Site of the Month
											</div> <!-- /.tt-avlist-description -->
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-info">
											<div class="tt-avlist-info">
												12x Avards
											</div> <!-- /.tt-avlist-info -->
										</div> <!-- /.tt-avlist-col -->

									</div> <!-- /.tt-avlist-item-inner -->
								</a>
								<!-- End avards list item -->

								<!-- Begin avards list item
								============================== -->
								<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
									<div class="tt-avlist-item-inner">

										<div class="tt-avlist-col tt-avlist-col-count">
											<div class="tt-avlist-count"></div>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-title">
											<h4 class="tt-avlist-title">CSS Design Awards</h4>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-description">
											<div class="tt-avlist-description">
												Website of the Day, Designer of the Year '23
											</div> <!-- /.tt-avlist-description -->
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-info">
											<div class="tt-avlist-info">
												3x Avards
											</div> <!-- /.tt-avlist-info -->
										</div> <!-- /.tt-avlist-col -->

									</div> <!-- /.tt-avlist-item-inner -->
								</a>
								<!-- End avards list item -->

								<!-- Begin avards list item
								============================== -->
								<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
									<div class="tt-avlist-item-inner">

										<div class="tt-avlist-col tt-avlist-col-count">
											<div class="tt-avlist-count"></div>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-title">
											<h4 class="tt-avlist-title">Behance</h4>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-description">
											<div class="tt-avlist-description">
												UI Gallery Featured
											</div> <!-- /.tt-avlist-description -->
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-info">
											<div class="tt-avlist-info">
												2x Avards
											</div> <!-- /.tt-avlist-info -->
										</div> <!-- /.tt-avlist-col -->

									</div> <!-- /.tt-avlist-item-inner -->
								</a>
								<!-- End avards list item -->

								<!-- Begin avards list item
								============================== -->
								<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
									<div class="tt-avlist-item-inner">

										<div class="tt-avlist-col tt-avlist-col-count">
											<div class="tt-avlist-count"></div>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-title">
											<h4 class="tt-avlist-title">CSS Winner</h4>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-description">
											<div class="tt-avlist-description">
												Site of the Day
											</div> <!-- /.tt-avlist-description -->
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-info">
											<div class="tt-avlist-info">
												4x Avards
											</div> <!-- /.tt-avlist-info -->
										</div> <!-- /.tt-avlist-col -->

									</div> <!-- /.tt-avlist-item-inner -->
								</a>
								<!-- End avards list item -->

								<!-- Begin avards list item
								============================== -->
								<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
									<div class="tt-avlist-item-inner">

										<div class="tt-avlist-col tt-avlist-col-count">
											<div class="tt-avlist-count"></div>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-title">
											<h4 class="tt-avlist-title">FWA Awards</h4>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-description">
											<div class="tt-avlist-description">
												FWA of the Day, Special Mention
											</div> <!-- /.tt-avlist-description -->
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-info">
											<div class="tt-avlist-info">
												8x Avards
											</div> <!-- /.tt-avlist-info -->
										</div> <!-- /.tt-avlist-col -->

									</div> <!-- /.tt-avlist-item-inner -->
								</a>
								<!-- End avards list item -->

								<!-- Begin avards list item
								============================== -->
								<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
									<div class="tt-avlist-item-inner">

										<div class="tt-avlist-col tt-avlist-col-count">
											<div class="tt-avlist-count"></div>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-title">
											<h4 class="tt-avlist-title">SiteInspire</h4>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-description">
											<div class="tt-avlist-description">
												Featured Design
											</div> <!-- /.tt-avlist-description -->
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-info">
											<div class="tt-avlist-info">
												6x Avards
											</div> <!-- /.tt-avlist-info -->
										</div> <!-- /.tt-avlist-col -->

									</div> <!-- /.tt-avlist-item-inner -->
								</a>
								<!-- End avards list item -->

								<!-- Begin avards list item
								============================== -->
								<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
									<div class="tt-avlist-item-inner">

										<div class="tt-avlist-col tt-avlist-col-count">
											<div class="tt-avlist-count"></div>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-title">
											<h4 class="tt-avlist-title">One Page Love</h4>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-description">
											<div class="tt-avlist-description">
												Site of the Day
											</div> <!-- /.tt-avlist-description -->
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-info">
											<div class="tt-avlist-info">
												2x Avards
											</div> <!-- /.tt-avlist-info -->
										</div> <!-- /.tt-avlist-col -->

									</div> <!-- /.tt-avlist-item-inner -->
								</a>
								<!-- End avards list item -->

								<!-- Begin avards list item
								============================== -->
								<a href="https://themetorium.net/" class="tt-avlist-item cursor-alter tt-anim-fadeinup" target="_blank" rel="nofollow">
									<div class="tt-avlist-item-inner">

										<div class="tt-avlist-col tt-avlist-col-count">
											<div class="tt-avlist-count"></div>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-title">
											<h4 class="tt-avlist-title">CSS Light</h4>
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-description">
											<div class="tt-avlist-description">
												Featured Design, Featured Website
											</div> <!-- /.tt-avlist-description -->
										</div> <!-- /.tt-avlist-col -->

										<div class="tt-avlist-col tt-avlist-col-info">
											<div class="tt-avlist-info">
												4x Avards
											</div> <!-- /.tt-avlist-info -->
										</div> <!-- /.tt-avlist-col -->

									</div> <!-- /.tt-avlist-item-inner -->
								</a>
								<!-- End avards list item -->

							</div>
							<!-- End avards list -->

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
					<div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120 ">
						<div class="tt-section-inner tt-wrap">

							<div class="tt-row margin-bottom-40">
								<div class="tt-col-xl-8">

									<!-- Begin tt-Heading 
									====================== 
									* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg", "tt-heading-xxlg" or "tt-heading-xxxlg" to set caption size (no class = default size).
									* Use class "tt-heading-center" to align tt-Heading to center.
									* Use class "tt-text-reveal" or "tt-anim-fadeinup" with title or subtitle element to enable text reveal animation.
									* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
									-->
									<div class="tt-heading tt-heading-xxxlg no-margin">
										<h3 class="tt-heading-subtitle tt-text-reveal">Contact</h3>
										<h2 class="tt-heading-title tt-text-reveal">Let's Work<br> Together</h2> <!-- You can use <br> to break a text line if needed -->
									</div>
									<!-- End tt-Heading -->

								</div> <!-- /.tt-col -->

												<!-- Begin moving images on scroll 
							===================================
							* Use class "tt-mi-equal" to enable fixed size for all items (no effect with class "tt-mi-top" and "tt-mi-bottom"). Optimal items = 5.
							* Use class "tt-mi-top" or "tt-mi-bottom" to align images to top or bottom. Optimal items = 4.
							* Note: This is a full-width element, do not use class "tt-wrap" on "tt-section-inner"!
							-->
							<div class="tt-moving-images tt-mi-bottom">
								<div class="tt-mi-list">

									<div class="tt-mi-item">
										<div class="tt-mi-item-inner">
											<img src="assets/img/mock/img1.jpg" loading="lazy" alt="Image">
										</div> <!-- /.tt-mi-item-inner -->
									</div> <!-- /.tt-mi-item -->

									<div class="tt-mi-item">
										<div class="tt-mi-item-inner">
											<img src="assets/img/mock/img3.jpg" loading="lazy" alt="Image">
										</div> <!-- /.tt-mi-item-inner -->
									</div> <!-- /.tt-mi-item -->

									<div class="tt-mi-item">
										<div class="tt-mi-item-inner">
											<img src="assets/img/mock/img12.jpg" loading="lazy" alt="Image">
										</div> <!-- /.tt-mi-item-inner -->
									</div> <!-- /.tt-mi-item -->

									<div class="tt-mi-item">
										<div class="tt-mi-item-inner">
											<img src="assets/img/mock/img11.jpg" loading="lazy" alt="Image">
										</div> <!-- /.tt-mi-item-inner -->
									</div> <!-- /.tt-mi-item -->

								</div> <!-- /.tt-mi-list -->
							</div>
							<!-- End moving images on scroll -->
							
								<div class="tt-col-xl-4 tt-align-self-end tt-xl-column-reverse margin-top-40 hide">

									<div class="max-width-600 margin-bottom-10 tt-text-uppercase text-pretty tt-text-reveal">
										Feeling good about a new project? Write me what's in your mind<br> and let's talk about it!
									</div>

									<!-- Begin big round button 
									============================ -->
									<div class="tt-big-round-ptn margin-top-30 margin-bottom-xlg-80 tt-anim-fadeinup">
										<a href="contact.html" class="tt-big-round-ptn-holder tt-magnetic-item">
											<div class="tt-big-round-ptn-inner">Let's<br> Connect!</div>
										</a>
									</div>
									<!-- End big round button -->

								</div> <!-- /.tt-col -->
							</div><!-- /.tt-row --> 

						</div> <!-- /.tt-section-inner -->
					</div>
					<!-- End tt-section -->


				</div>

				<!-- End page content -->



				<!-- ======================
				///// Begin tt-footer /////
				=========================== -->
				<footer id="tt-footer" class="border-top">
					<div class="tt-footer-inner tt-wrap">

						<div class="tt-row">
							<div class="tt-col-xl-3 tt-col-sm-6">
								<div class="tt-footer-widget">
									<h5 class="tt-footer-widget-heading">Links</h5>
									<ul class="tt-footer-widget-list">
										<li><a href="dummy.html" class="tt-link">Support</a></li>
										<li><a href="dummy.html" class="tt-link">Licenses</a></li>
										<li><a href="dummy.html" class="tt-link">Terms of Use</a></li>
										<li><a href="dummy.html" class="tt-link">Privacy Policy</a></li>
									</ul> <!-- /.tt-footer-widget-list -->
								</div> <!-- /.tt-footer-widget -->
							</div> <!-- /.tt-col -->

							<div class="tt-col-xl-3 tt-col-sm-6">
								<div class="tt-footer-widget">
									<h5 class="tt-footer-widget-heading">Sitemap</h5>
									<ul class="tt-footer-widget-list">
										<li><a href="about-me.html" class="tt-link">About Me</a></li>
										<li><a href="portfolio.html" class="tt-link">My Work</a></li>
										<li><a href="services.html" class="tt-link">Services</a></li>
										<li><a href="contact.html" class="tt-link">Contact</a></li>
									</ul> <!-- /.tt-footer-widget-list -->
								</div> <!-- /.tt-footer-widget -->
							</div> <!-- /.tt-col -->

							<div class="tt-col-xl-3 tt-col-sm-6">
								<div class="tt-footer-widget">
									<h5 class="tt-footer-widget-heading">Contact</h5>
									<ul class="tt-footer-widget-list">
										<li>
											<a href="https://www.google.com/maps/place/121+King+St,+Melbourne+VIC+3000,+Austraalia/@-37.817251,144.955775,17z/data=!3m1!4b1!4m6!3m5!1s0x6ad65d4dd5a05d97:0x3e64f855a564844d!8m2!3d-37.817251!4d144.955775!16s%2Fg%2F11g0g8c54h" class="tt-link" target="_blank" rel="nofollow noopener">121 King Street,<br> Melbourne, Australia</a>
										</li>
										<li><a href="mailto:company@email.com" class="tt-link">company@email.com</a></li>
										<li><a href="tel:+(123)456789000" class="tt-link"> +(123) 456 789 000</a></li>
										<li>
											<div class="tt-social-buttons">
												<ul>
													<li><a href="https://www.facebook.com/themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a></li>
													<li><a href="https://dribbble.com/Themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-dribbble"></i></a></li>
													<li><a href="https://www.behance.net/Themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-behance"></i></a></li>
													<li><a href="https://www.youtube.com/" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i></a></li>
													<!-- <li><a href="https://x.com/Themetorium" class="tt-magnetic-item" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a></li> -->
												</ul>
											</div> <!-- /.tt-social-buttons -->
										</li>
									</ul> <!-- /.tt-footer-widget-list -->
								</div> <!-- /.tt-footer-widget -->
							</div> <!-- /.tt-col -->

							<div class="tt-col-xl-3 tt-col-sm-6 tt-justify-content-xl-end">
								<div class="tt-footer-widget">
									<ul class="tt-footer-widget-list">
										<li>
											<!-- You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-footer-logo img").-->
											<div class="tt-footer-logo"> 
												<a href="index.html" class="tt-magnetic-item">
													<img src="assets/img/logo-light.png" class="tt-logo-light" loading="lazy" alt="Logo"> <!-- logo light -->
													<img src="assets/img/logo-dark.png" class="tt-logo-dark" loading="lazy" alt="Logo"> <!-- logo dark -->
												</a>
											</div> <!-- /.tt-footer-logo -->  
										</li>
										<li>
											<div class="tt-footer-copyright">
												© <span class="tt-copyright-year"></span> <a href="https://themetorium.net/" class="tt-link" target="_blank" rel="nofollow noopener"> Themetorium.net</a><br> 
												All Rights Reserved
											</div> <!-- /.tt-footer-copyright -->
										</li>
									</ul> <!-- /.tt-footer-widget-list -->
								</div> <!-- /.tt-footer-widget -->
							</div> <!-- /.tt-col -->
						</div> <!-- /.tt-row -->

					</div> <!-- /.tt-section-inner -->
				</footer>
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