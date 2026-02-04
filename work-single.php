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
    <title><?= htmlspecialchars($project['title']) ?> | Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/theme.css">
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
<div id="tt-page-content ">
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
