<!DOCTYPE html>

<!--
	Template:   Jesper - Creative Portfolio Showcase HTML Website Template
	Author:     Themetorium
	URL:        https://themetorium.net/
-->

<html lang="en">
	<head>

		<!-- Title -->
		<title>Portfolio Classic | Jesper - Creative Portfolio Showcase HTML Website Template by Themetorium</title>

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
			<div id="magic-cursor">
				<div id="ball"></div>
			</div>
			<!-- End magic cursor --> 

			<!-- ===================
			///// Begin header /////
			======================== -->
			<?php 
			// require __DIR__ . '/bootstrap.php';

			$current_page = 'work';
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
							<img src="assets/img/page-header/work-header.jpg" alt="Image">
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
								<h1 class="ph-caption-title" style="font-weight:600; font-style:italic">OUR WORK</h1>
								<div class="ph-caption-description max-width-700" style="text-transform:uppercase">
									Discover a showcase of our creative journey
								</div>
							</div> <!-- /.ph-caption-inner -->
						</div> <!-- /.ph-caption -->

					</div> <!-- /.page-header-inner -->


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
					<div class="tt-section">
						<div class="tt-section-inner">

							<!-- Begin stick portfolioy
							============================ -->
							<div class="tt-sticky-portfolio">
								
								<!-- Begin stick portfolioy item
								================================= 
								* Use class "stpi-bg-is-light" if needed, it makes the caption dark and more visible if you use a very light image.
								-->
								<a href="https://drive.google.com/drive/folders/136XHrJ3LkVrsRQMHecdFauTjxiMiT7t1" class="tt-stp-item" data-cursor="Play<br>Reel" data-fancybox data-caption="My awesome showreel. :)">
									<div class="tt-stp-item-inner">

										<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5"). Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
										<div class="tt-stp-item-video">
											<video loop muted preload="metadata" poster="assets/vids/1920/wedding-1.png" class="tt-anim-zoomin">
												<source src="assets/vids/placeholder.mp4" data-src="assets/vids/1920/wedding-1.mp4" type="video/mp4">
												<source src="assets/vids/placeholder.webm" data-src="assets/vids/1920/wedding-1.webm" type="video/webm">
											</video>
										</div> <!-- /.tt-stp-item-video -->	

										<div class="tt-stp-item-caption hide">
											<h2 class="tt-stp-item-title">Tortillas</h2>
											<div class="tt-stp-item-categories">
												<div class="tt-stp-item-category">Lifestyle</div>
												<!-- <div class="tt-stp-item-category">Varia</div> -->
											</div> <!-- /.tt-stp-item-categories -->
										</div> <!-- /.tt-stp-item-caption -->
									</div> <!-- /.tt-stp-item-inner -->
								</a>
								<!-- End sticky portfolio item -->

								<!-- Begin stick portfolioy item
								================================= 
								* Use class "stpi-bg-is-light" if needed, it makes the caption dark and more visible if you use a very light image.
								-->
								<a href="single-project-2.html" class="tt-stp-item" data-cursor="View<br>Project">
									<div class="tt-stp-item-inner">
										
										<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5"). Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
										<div class="tt-stp-item-video">
											<video loop muted preload="metadata" poster="assets/vids/1920/wedding-2.jpg" class="tt-anim-zoomin">
												<source src="assets/vids/placeholder.mp4" data-src="assets/vids/1920/wedding-2.mp4" type="video/mp4">
												<source src="assets/vids/placeholder.webm" data-src="assets/vids/1920/wedding-2.webm" type="video/webm">
											</video>
										</div> <!-- /.tt-stp-item-video -->

										<div class="tt-stp-item-caption hide">
											<h2 class="tt-stp-item-title">Coffee Shop</h2>
											<div class="tt-stp-item-categories">
												<div class="tt-stp-item-category">Lifestyle</div>
												<!-- <div class="tt-stp-item-category">Varia</div> -->
											</div> <!-- /.tt-stp-item-categories -->
										</div> <!-- /.tt-stp-item-caption -->
									</div> <!-- /.tt-stp-item-inner -->
								</a>
								<!-- End sticky portfolio item -->

								<!-- Begin stick portfolioy item
								================================= 
								* Use class "stpi-bg-is-light" if needed, it makes the caption dark and more visible if you use a very light image.
								-->
								<a href="single-project-3.html" class="tt-stp-item" data-cursor="View<br>Project">
									<div class="tt-stp-item-inner">
										
										<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5"). Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
										<div class="tt-stp-item-video">
											<video loop muted preload="metadata" poster="assets/vids/1920/wedding-3.jpg" class="tt-anim-zoomin">
												<source src="assets/vids/placeholder.mp4" data-src="assets/vids/1920/wedding-3.mp4" type="video/mp4">
												<source src="assets/vids/placeholder.webm" data-src="assets/vids/1920/wedding-3.webm" type="video/webm">
											</video>
										</div> <!-- /.tt-stp-item-video -->

										<div class="tt-stp-item-caption hide">
											<h2 class="tt-stp-item-title">Fashion<br> Shoot</h2>
											<div class="tt-stp-item-categories">
												<div class="tt-stp-item-category">Artistic</div>
												<!-- <div class="tt-stp-item-category">Varia</div> -->
											</div> <!-- /.tt-stp-item-categories -->
										</div> <!-- /.tt-stp-item-caption -->
									</div> <!-- /.tt-stp-item-inner -->
								</a>
								<!-- End sticky portfolio item -->

								<!-- Begin stick portfolioy item
								================================= 
								* Use class "stpi-bg-is-light" if needed, it makes the caption dark and more visible if you use a very light image.
								-->
								<a href="single-project-4.html" class="tt-stp-item" data-cursor="View<br>Project">
									<div class="tt-stp-item-inner">
										
										<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5"). Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
										<div class="tt-stp-item-video">
											<video loop muted preload="metadata" poster="assets/vids/1920/wedding-4.jpg" class="tt-anim-zoomin">
												<source src="assets/vids/placeholder.mp4" data-src="assets/vids/1920/wedding-4.mp4" type="video/mp4">
												<source src="assets/vids/placeholder.webm" data-src="assets/vids/1920/wedding-4.webm" type="video/webm">
											</video>
										</div> <!-- /.tt-stp-item-video -->

										<div class="tt-stp-item-caption hide">
											<h2 class="tt-stp-item-title">Postorganic</h2>
											<div class="tt-stp-item-categories">
												<div class="tt-stp-item-category">Artistic</div>
												<!-- <div class="tt-stp-item-category">Varia</div> -->
											</div> <!-- /.tt-stp-item-categories -->
										</div> <!-- /.tt-stp-item-caption -->
									</div> <!-- /.tt-stp-item-inner -->
								</a>
								<!-- End sticky portfolio item -->

							</div>
							<!-- End sticky portfolio -->

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
					<div class="tt-section">
						<div class="tt-section-inner max-width-2200">

							<!-- Begin portfolio grid (works combined with tt-Ggrid!)
							========================== 
							* Use class "pgi-hover" to enable portfolio grid item hover effect (behavior depends on "ttgr-gap-*" classes below!).
							* Use class "pgi-cap-hover" to enable portfolio grid item caption hover effect (effect only with class "pgi-cap-inside"! Also no effect on mobile devices!).
							* Use class "pgi-cap-center" to position portfolio grid item caption to center.
							* Use class "pgi-cap-inside" to position portfolio grid item caption to inside.
							--> 
							<div id="portfolio-grid" class="pgi-hover">

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
								<div class="tt-grid ttgr-layout-3 ttgr-gap-1">

									<!-- Begin tt-Ggrid top content 
									================================ -->
									<div class="tt-grid-top hide">

										<!-- Begin tt-Ggrid categories/filter classic
										============================================== -->
										<div class="tt-grid-categories-classic ">

											<!-- Begin tt-Ggrid categories
											===============================
											* Use class "ttgr-cat-classic-center" or "ttgr-cat-classic-right" to align categories (no effect on small screens!). No claa = align left.
											* Use class "ttgr-cat-classic-colored" to enable colored style.
											-->
											<div class="ttgr-cat-classic-nav ttgr-cat-classic-center">
												<ul class="ttgr-cat-classic-list">
													<li class="ttgr-cat-classic-item"><a href="#portfolio-grid" data-offset="80" class="active">All</a></li>
													<li class="ttgr-cat-classic-item"><a href="#portfolio-grid" data-offset="80" data-filter=".lifestyle">Lifestyle</a></li>
													<li class="ttgr-cat-classic-item"><a href="#portfolio-grid" data-offset="80" data-filter=".artistic">Artistic</a></li>
													<li class="ttgr-cat-classic-item"><a href="#portfolio-grid" data-offset="80" data-filter=".wellness">Wellness</a></li>
												</ul>
											</div>
											<!-- End tt-Ggrid categories-->

										</div>
										<!-- End tt-Ggrid categories/filter classic -->

									</div>
									<!-- End tt-Grid top content -->


									<!-- Begin tt-Grid items wrap 
									============================== -->
									<div id="photo-gallery" class="tt-grid-items-wrap isotope-items-wrap">

										<!-- Begin tt-Grid item
										======================== -->
										<div class="tt-grid-item isotope-item lifestyle">
											<div class="ttgr-item-inner">

												<!-- Begin portfolio grid item 
												===============================
												* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"! Also no effect on small screens!).
												-->
												<div class="portfolio-grid-item">
												<a href="assets/img/work/1.jpg" class="pgi-image-wrap" data-cursor="View" data-fancybox="gallery-459719">
													<!-- <a href="single-project-1.html" class="pgi-image-wrap" data-cursor="View<br>Project"> -->
														<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/work/1.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption hide">
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
												<div class="portfolio-grid-item">
													<a href="single-project-2.html" class="pgi-image-wrap" data-cursor="View<br>Project">
														<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/portfolio/800/portfolio-2.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption hide">
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
																<figure class="pgi-video-wrap ttgr-height">
																	<video class="pgi-video" loop muted preload="metadata" poster="assets/vids/800/video-4-800.jpg">
																		<source src="assets/vids/placeholder.mp4" data-src="assets/vids/800/video-4-800.mp4" type="video/mp4">
																		<source src="assets/vids/placeholder.webm" data-src="assets/vids/800/video-4-800.webm" type="video/webm">
																	</video>
																</figure> <!-- /.pgi-video-wrap -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption hide">
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
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/portfolio/800/portfolio-3.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption hide">
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
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/portfolio/800/portfolio-4.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption hide">
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
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/portfolio/800/portfolio-5.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption hide">
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
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/portfolio/800/portfolio-6.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption hide">
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
												<div class="portfolio-grid-item">
													<a href="single-project-8.html" class="pgi-image-wrap" data-cursor="View<br>Project">
														<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/portfolio/800/portfolio-7.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption hide">
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
														<div class="pgi-image-holder">
															<div class="pgi-image-inner tt-anim-zoomin">
																<figure class="pgi-image ttgr-height">
																	<img src="assets/img/portfolio/800/portfolio-8.jpg" loading="lazy" alt="image">
																</figure> <!-- /.pgi-image -->
															</div> <!-- /.pgi-image-inner -->
														</div> <!-- /.pgi-image-holder -->
													</a> <!-- /.pgi-image-wrap -->

													<div class="pgi-caption hide">
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
					<!-- End tt-section -->


					<!-- =======================
					///// Begin tt-section /////
					============================ 
					* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc.
					* You can use classes "border-top" and "border-bottom" if needed. 
					* Note: Each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
					-->
					<div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120 border-top">
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
							
								<div class="tt-col-xl-4 tt-align-self-end tt-xl-column-reverse margin-top-40">

									<div class="max-width-600 margin-bottom-10 tt-text-uppercase tt-text-reveal">
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
		<script src="assets/vendor/swiper/js/swiper-bundle.min.js" defer></script> <!-- Swiper JS (https://swiperjs.com/) -->

		<!-- Master JS -->
		<script src="assets/js/theme.js"></script>
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;

      const mp4 = video.dataset.src
		<script>
document.querySelectorAll('video').forEach(video => {
  const observer = new IntersectionObserver(entries => {Mp4;
      const webm = video.dataset.srcWebm;

      if (mp4) {
        video.innerHTML = `
          <source src="${mp4}" type="video/mp4">
          ${webm ? `<source src="${webm}" type="video/webm">` : ''}
        `;
        video.load();
      }

      observer.unobserve(video);
    });
  }, { rootMargin: '200px' });

  observer.observe(video);
});
</script>




	</body>

</html>