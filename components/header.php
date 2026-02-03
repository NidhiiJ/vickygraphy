<?php
// header.php
if (!defined('BASE_PATH')) {
    exit('BASE_PATH not defined. Include bootstrap.php first.');
}
?>

<header id="tt-header" class="tt-header-alter tt-header-scroll tt-header-filled">
    <div class="tt-header-inner tt-noise"> 

        <!-- Left: Logo -->
        <div class="tt-header-col tt-header-col-left">
            <div class="tt-logo"> 
                <a href="/">
                    <img src="assets/img/logo/Secondary-White.png" class="tt-logo-light" alt="Logo">
                    <img src="/assets/img/logo/Secondary-Black.png" class="tt-logo-dark" alt="Logo">
                </a>
            </div>
        </div>

        <!-- Center: Main Menu -->
        <div class="tt-header-col tt-header-col-center">
            <?php require BASE_PATH . '/components/main-menu.php'; ?>
        </div>

        <!-- Right: Controls -->
        <div class="tt-header-col tt-header-col-right">

            <!-- Mobile menu toggle -->
            <div id="tt-m-menu-toggle-btn-wrap">

                <div class="tt-m-menu-toggle-btn-holder">
                    <a href="#" class="tt-m-menu-toggle-btn"><span></span></a>
                </div>
            </div>

            <!-- Begin header button (hidden on small screens!) -->
            <a href="contact" class="tt-btn tt-btn-secondary hide-from-xlg">
                <span data-hover="Contact">Contact</span>
            </a>
            <!-- End header button -->

            <!-- Style switch -->
            <div class="tt-style-switch">
                <div class="tt-style-switch-inner">
                    <div class="tt-stsw-light"><i class="fas fa-sun"></i></div>
                    <div class="tt-stsw-dark"><i class="fas fa-moon"></i></div>
                </div>
            </div>

        </div>
    </div>
</header>
