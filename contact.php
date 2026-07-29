<!DOCTYPE html>



<html lang="en">
	<head>

		<!-- Title -->
		<title>Contact | Vickygraphy</title>

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

		<!-- Service Worker -->
		<script>if ('serviceWorker' in navigator) { window.addEventListener('load', () => navigator.serviceWorker.register('/sw.js')); }</script>

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
	<body id="body" class="tt-transition tt-noise tt-lightmode-default tt-smooth-scroll">


	<main id="body-inner">

		<?php 
		require __DIR__ . '/bootstrap.php';
		require BASE_PATH . '/components/page-transition.php';
		?>

		<?php 
		$current_page = 'contact';
		require BASE_PATH . '/components/header.php';
		?>

		<div id="tt-content-wrap">

			<div id="page-header" class="ph-full ph-full-m ph-cap-xxxxlg ph-center ph-image-parallax ph-caption-parallax">

				<div class="ph-image ph-image-cover-1 cover-opacity-3">
					<div class="ph-image-inner">
						<img src="assets/img/page-header/contact-header.webp" alt="Contact Header" fetchpriority="high">
					</div>
				</div>

				<div class="page-header-inner tt-wrap">
					<div class="ph-caption padding-height-10">
						<div class="ph-caption-inner">
							<h2 class="ph-caption-subtitle">VICKYGRAPHY.IN</h2>
							<h1 class="ph-caption-title" style="font-weight:600;font-style:italic">
								CONTACT US
							</h1>
							<div class="ph-caption-description max-width-700" style="text-transform:uppercase">
								For your wedding diary
							</div>
						</div>
					</div>
				</div>

				<div class="ph-social hide">
					<ul>
						<li><a href="https://www.facebook.com/themetorium" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li><a href="https://dribbble.com/Themetorium" target="_blank" rel="noopener"><i class="fa-brands fa-dribbble"></i></a></li>
						<li><a href="https://www.behance.net/Themetorium" target="_blank" rel="noopener"><i class="fa-brands fa-behance"></i></a></li>
						<li><a href="https://www.youtube.com/" target="_blank" rel="noopener"><i class="fa-brands fa-youtube"></i></a></li>
					</ul>
				</div>

			</div>

			<div id="tt-page-content">

				<div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120">
					<div class="tt-section-inner tt-wrap">

						<div class="tt-row">

							<div class="tt-col-xl-5 hide-from-lg">
								<div style="border-radius:1000px 1000px 0 0;overflow:hidden;">
									<div class="pgi-image-inner tt-anim-zoomin">
										<img src="assets/img/contact-form.jpg" loading="lazy" alt="Contact Image">
									</div>
								</div>
							</div>

							<div class="tt-col-xl-7 custom-form-parent">

								<form id="tt-contact-form" class="tt-form tt-form-creative tt-form-lg">

									<div id="tt-contact-form-messages" role="alert">
										<div class="tt-cfm-inner"></div>
										<div class="tt-cfm-close hide-cursor">
											<i class="fa-solid fa-xmark"></i>
										</div>
									</div>

									<div class="tt-contact-form-inner padding-left-xlg-45">

										<div class="form-title">
											<span>Let’s Create Some Film</span>
											<span class="italic">Magic Together</span>
										</div>

										<div class="tt-form-group tt-anim-fadeinup">
											<label>Name <span class="required">*</span></label>
											<input class="tt-form-control" type="text" name="name" placeholder="Your Name" required>
										</div>

										<div class="tt-form-group tt-anim-fadeinup">
											<label>Email <span class="required">*</span></label>
											<input class="tt-form-control" type="email" name="email" placeholder="Your Email" required>
										</div>

										<div class="tt-form-group tt-anim-fadeinup">
											<label>Service <span class="required">*</span></label>
											<select class="tt-form-control custom-select" name="option" required>
												<option value="" disabled selected>Please choose an option</option>
												<option>Pre-Wedding Shoot</option>
												<option>Wedding Coverage</option>
												<option>Complete Wedding Package</option>
												<option>Commercial Shoot</option>
												<option>Other</option>
											</select>
										</div>

										<div class="tt-form-group tt-anim-fadeinup">
											<label>Message</label>
											<textarea class="tt-form-control" rows="5" name="message" placeholder="Write a message here..."></textarea>
										</div>

										<div class="tt-anim-fadeinup">
											<button type="submit" class="tt-btn tt-btn-secondary tt-magnetic-item">
												<span data-hover="Send Message">Send Message</span>
											</button>
										</div>

									</div>
								</form>

							</div>

						</div>

					</div>
				</div>

				<div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120 border-top">
					<div class="tt-section-inner tt-wrap" style="text-align:center;">
						<h1 class="tt-font-alter tt-text-reveal">Not Convinced Yet?</h1>
						<a href="work" class="tt-btn tt-btn-secondary">
							<span data-hover="Explore our work">Explore our work</span>
						</a>
					</div>
				</div>

			</div>

			<?php require BASE_PATH . '/components/footer.php'; ?>

			<a href="#" class="tt-scroll-to-top">
				<div class="tt-stt-progress tt-magnetic-item">
					<svg width="100%" height="100%" viewBox="-1 -1 102 102">
						<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
					</svg>
				</div>
			</a>

		</div>

	</main>



        

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

		<script>
			document.getElementById('tt-contact-form').addEventListener('submit', function (e) {
				e.preventDefault(); // stop normal form submit

				const name = document.querySelector('[name="name"]').value.trim();
				const email = document.querySelector('[name="email"]').value.trim();
				const service = document.querySelector('[name="option"]').value;
				const message = document.querySelector('[name="message"]').value.trim();

				if (!name || !email || !service) {
					alert('Please fill all required fields.');
					return;
				}

				const phoneNumber = '9096719285'; // 👈 CHANGE THIS

				const whatsappMessage = `
Hello Vicky, we are interesed!!
Name: ${name}
Email: ${email}
Service: ${service}

Message:
${message || 'N/A'}
	`.trim();

				const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(whatsappMessage)}`;

				window.open(whatsappURL, '_blank');
			});
		</script>



	</body>

</html>