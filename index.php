<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Title -->
		<title>Home | Vickygraphy</title>

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
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
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
				============================= -->
				<div id="page-header" class="ph-full ph-full-m ph-center ph-cap-xxxxlg ph-image-parallax ph-caption-parallax">

					<!-- Begin page header image 
					============================= 
					* Use class "ph-image-grayscale" to enable black & white image.
					* Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5"). 
					-->
					<div class="ph-image ph-image-cover-2">
						<div class="ph-image-inner">
							<img src="assets/img/page-header/landing-header.jpg" alt="Image">
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
								<source src="assets/vids/mock/mock_video1.mp4" data-src="assets/vids/mock/mock_video1.mp4" type="video/mp4">
								<source src="assets/vids/placeholder.webm" data-src="assets/vids/1920/video-1-1920.webm" type="video/webm">
							</video>
						</div>
					</div> -->
					<!-- End page header video -->
						
					<div class="page-header-inner tt-wrap">

						<div class="ph-caption">
							<div class="ph-caption-inner">
								<!-- <h2 class="ph-caption-subtitle">Subtitle</h2> -->
								<h1 class="ph-caption-title"><span style="font-style:italic">love</span> FRAMED <br> FOREVER</h1>
								<div class="ph-caption-description max-width-700">
									YOUR WEDDING PHOTOGRAPHERS
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
					<div class="ph-social hide">
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
				*********** Begin  ̰page content *********** 
				************************************** -->
				<div id="tt-page-content">

					<div id='landing-text-section'>
					your love story deserves to be told <br> fearlessly, passionately, and authentically.
					</div>

					<!-- grid start -->
					<div class="tt-section padding-top-0">
						<div class="tt-section-inner max-width-2200">

							<!-- Begin portfolio grid (works combined with tt-Ggrid!)
							========================== --> 
							<div id="portfolio-grid" class="pgi-hover pgi-cap-inside no-caption">

								<!-- Begin tt-Grid
								=================== -->
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
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/landing-gallery/img1.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->
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
																	<img src="assets/img/landing-gallery/img2.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->
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
																	<img src="assets/img/landing-gallery/img3.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->
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
														<div class="pgi-image-holder ">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/landing-gallery/img4.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->
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
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/landing-gallery/img5.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->
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
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/landing-gallery/img6.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

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
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/landing-gallery/img7.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->
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
																	<img src="assets/img/landing-gallery/img8.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->
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
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/landing-gallery/img9.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->
												</div>
												<!-- End portfolio grid item -->

											</div> <!-- /.ttgr-item-inner -->
										</div>
										<!-- End tt-Grid item -->

									</div>
									<!-- End tt-Grid items wrap  -->

								</div>
								<!-- End tt-Grid -->

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
						<div class="tt-section-inner tt-wrap max-width-1500 padding-right-xlg-80 padding-left-xlg-80">

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
										<h3 class="tt-heading-subtitle tt-text-reveal">What We Do</h3>
										<h2 class="tt-heading-title tt-text-reveal">Services</h2> <!-- You can use <br> to break a text line if needed -->
									</div>
									<!-- End tt-Heading -->

									<div class="tt-text-uppercase  margin-bottom-20 text-pretty tt-text-reveal">
									global pre-wedding and wedding photography, capturing timeless, authentic love stories everywhere.
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
												<p>Complete wedding photography coverage across all locations, backed by an experienced professional team. From candid moments and traditional rituals to detailed portraits.</p>

												<p>Our team ensures seamless coverage, cinematic storytelling, and high-quality professional editing that delivers timeless wedding memories.</p>

												<a href="contact.html" class="tt-btn tt-btn-outline tt-magnetic-item">
													<span data-hover="Book Us">Book Us</span>
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

												<p>love story in a relaxed and creative way.</p>

												<p>With expert photographers, thoughtful direction, and advanced editing techniques, we create visually stunning pre-wedding photographs that feel natural, romantic, and personal.</p>

												<a href="contact.html" class="tt-btn tt-btn-outline tt-magnetic-item">
													<span data-hover="Book Us">Book Us</span>
												</a>

											</div> <!-- /.tt-accordion-content -->
										</div> <!-- /.tt-accordion-item -->

										<div class="tt-accordion-item tt-anim-fadeinup">
											<div class="tt-accordion-heading">
												<div class="tt-ac-head cursor-alter">
													<div class="tt-ac-head-inner">
														<h4 class="tt-ac-head-title">Commercial Shoot</h4>
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

												<p>We offer professional commercial photography services worldwide, supported by a skilled creative team and premium post-production.</p>

												<p>From product and brand shoots to business visuals, we deliver sharp, polished, and market-ready images designed to elevate your brand presence.</p>

												<a href="contact.html" class="tt-btn tt-btn-outline tt-magnetic-item">
													<span data-hover="Book Us">Book Us</span>
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
								<a href="" class="tt-clipper-inner" data-cursor="Play<br>Reel" data-fancybox data-caption="My awesome showreel. :)">

									<!-- Clipper background (image) -->
									<!-- <div class="tt-clipper-bg">
										<img src="assets/vids/1920/showreel-1920.jpg" loading="lazy" alt="Image">
									</div> -->

									<!-- Clipper background (video) -->
									<div class="tt-clipper-bg">
										<video loop muted autoplay playsinline preload="metadata" poster="assets/vids/1920/wedding-4.jpg">
											<source src="assets/vids/1920/wedding-4.jpg" data-src="assets/vids/1920/wedding-4.mp4" type="video/mp4">
											<source src="assets/vids/1920/wedding-4.jpg" data-src="assets/vids/1920/wedding-4.webm" type="video/webm">
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



					<!-- OUR WORK START -->

					<div class="work-preview">
						<div class="preview-text">
							<span class="small no-sm">a </span>
							<span class="big no-sm">PREVIEW </span>
							<span class="small no-sm">of </span>
							<span class="small">our </span>
							<span class="big">WORK</span>
						</div>

						<div class="swiper landingSwiper work-swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide work-slide small-slide">
									<img src="assets/img/landing-gallery/img2.jpg" alt="">
								</div>
								<div class="swiper-slide work-slide">
									<img src="assets/img/landing-gallery/img8.jpg" alt="">
								</div>
								<div class="swiper-slide work-slide small-slide">
									<img src="assets/img/landing-gallery/img6.jpg" alt="">
								</div>
								<div class="swiper-slide work-slide">
									<img src="assets/img/landing-gallery/img4.jpg" alt="">
								</div>
							</div>

							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>
					</div>
					<!-- OUR WORK END -->



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
											Let's <br>Preserve <br>Your Moments
										</h2> <!-- You can use <br> to break a text line if needed -->
									</div>
									<!-- End tt-Heading -->
									<!-- Begin header button (hidden on small screens!) -->
									<a href="contact" class="tt-btn tt-btn-secondary">
										<span data-hover="GET IN TOUCH">GET IN TOUCH</span>
									</a>
									<!-- End header button -->

									

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
											<img src="assets/img/contact-img/img1.jpg" loading="lazy" alt="Image">
										</div> <!-- /.tt-mi-item-inner -->
									</div> <!-- /.tt-mi-item -->

									<div class="tt-mi-item">
										<div class="tt-mi-item-inner">
											<img src="assets/img/contact-img/img2.png" loading="lazy" alt="Image">
										</div> <!-- /.tt-mi-item-inner -->
									</div> <!-- /.tt-mi-item -->

									<div class="tt-mi-item">
										<div class="tt-mi-item-inner">
											<img src="assets/img/contact-img/img3.jpg" loading="lazy" alt="Image">
										</div> <!-- /.tt-mi-item-inner -->
									</div> <!-- /.tt-mi-item -->

									<div class="tt-mi-item">
										<div class="tt-mi-item-inner">
											<img src="assets/img/contact-img/img4.jpg" loading="lazy" alt="Image">
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

				<?php
				require BASE_PATH . '/components/footer.php';
				?>


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