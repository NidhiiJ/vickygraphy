<?php
require __DIR__ . '/bootstrap.php';

$projects = require BASE_PATH . '/website-data/work-data.php';

$slug = $_GET['project'] ?? null;

// Validation
if (!$slug || !isset($projects[$slug])) {
    http_response_code(404);
    echo "Project not found";
    exit;
}

$project = $projects[$slug];
?>
<!DOCTYPE html>
<html lang="en">
<head>

		<!-- Title -->
		<title><?= htmlspecialchars($project['title']) ?> | Project</title>

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

<body class="tt-transition tt-noise tt-lightmode-default tt-magic-cursor tt-smooth-scroll">

<main id="body-inner">

<?php require BASE_PATH . '/components/page-transition.php'; ?>
<?php
$current_page = 'work';
require BASE_PATH . '/components/header.php';
?>

<div id="tt-content-wrap">

<!-- CONTENT -->
<div id="tt-page-content">
    <div class="padding-top-20-p padding-top-lg-8-p">
        <div class="tt-section">
            <div class="tt-heading tt-heading-xlg tt-heading-center margin-bottom-40">
                <h2 class="tt-heading-title tt-text-reveal">
                    <?= $project['title']; ?>
                </h2>
            </div>

            <div id="portfolio-grid" class="pgi-hover pgi-cap-inside">
                <div class="tt-grid ttgr-layout-2 ttgr-gap-1 ttgr-not-cropped padding-right-xlg-12-p padding-left-xlg-12-p">

                    <div class="tt-grid-items-wrap isotope-items-wrap">

                        <?php foreach ($project['images'] as $image): ?>
                        <div class="tt-grid-item isotope-item">
                            <div class="ttgr-item-inner">
                                <div class="portfolio-grid-item">
                                    <a href="<?= $image; ?>"
                                    class="pgi-image-wrap"
                                    data-fancybox="<?= $project['gallery_key']; ?>">

                                        <div class="pgi-image-holder">
                                            <div class="pgi-image-inner tt-anim-zoomin">
                                                <figure class="pgi-image ttgr-height">
                                                    <img src="<?= $image; ?>" loading="lazy" alt="work image">
                                                </figure>
                                            </div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php require BASE_PATH . '/components/footer.php'; ?>

</div>
</main>

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

</body>
</html>
