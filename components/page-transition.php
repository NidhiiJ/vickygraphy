<!-- Begin page transition (do not remove!!!) 
=========================== -->
<div id="tt-page-transition">
    <div class="tt-ptr-overlay-top tt-noise"></div>
    <div class="tt-ptr-overlay-bottom tt-noise"></div>
    <div class="tt-ptr-preloader">
        <div class="tt-ptr-prel-content">
            <!-- Hint: You may need to change the img height and opacity to match your logo type. You can do this from the "theme.css" file (find: ".tt-ptr-prel-image"). -->
            <img src="assets/img/logo/Monogram-White.png" class="tt-ptr-prel-image" alt="Logo">
        </div> <!-- /.tt-ptr-prel-content -->
    </div> <!-- /.tt-ptr-preloader -->
</div>
<script>
    // Fail-safe: if the GSAP transition-out animation never runs (e.g. a vendor
    // script failed to load in time on this page load), the overlay above is
    // CSS-only visible and would otherwise stay stuck covering the whole page.
    // Force it away after the animation's expected duration has safely passed.
    setTimeout(function () {
        var ttOverlay = document.getElementById("tt-page-transition");
        if (ttOverlay) { ttOverlay.style.display = "none"; }
    }, 4000);
</script>
<!-- End page transition -->