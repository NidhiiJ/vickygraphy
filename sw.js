const CACHE_NAME = 'vickygraphy-v2';

const STATIC_ASSETS = [
    '/assets/css/helper.css',
    '/assets/css/theme.css',
    '/assets/css/theme-light.css',
    '/assets/vendor/fontawesome/css/all.min.css',
    '/assets/vendor/fancybox/css/fancybox.css',
    '/assets/vendor/swiper/css/swiper-bundle.min.css',
    '/assets/vendor/jquery/jquery.min.js',
    '/assets/vendor/gsap/gsap.min.js',
    '/assets/vendor/gsap/ScrollToPlugin.min.js',
    '/assets/vendor/gsap/ScrollTrigger.min.js',
    '/assets/vendor/lenis.min.js',
    '/assets/vendor/isotope/imagesloaded.pkgd.min.js',
    '/assets/vendor/isotope/isotope.pkgd.min.js',
    '/assets/vendor/isotope/packery-mode.pkgd.min.js',
    '/assets/vendor/fancybox/js/fancybox.umd.js',
    '/assets/vendor/swiper/js/swiper-bundle.min.js',
    '/assets/js/theme.js',
    '/assets/img/logo/Secondary-White.png',
    '/assets/img/logo/Secondary-Black.png',
];

self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(CACHE_NAME).then(cache => cache.addAll(STATIC_ASSETS))
    );
    self.skipWaiting();
});

self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(keys =>
            Promise.all(keys.filter(k => k !== CACHE_NAME).map(k => caches.delete(k)))
        )
    );
    self.clients.claim();
});

self.addEventListener('fetch', event => {
    const { request } = event;
    const url = new URL(request.url);

    if (url.origin !== location.origin) return;

    // Always fetch HTML fresh so page updates show immediately
    if (request.mode === 'navigate') {
        event.respondWith(
            fetch(request).catch(() => caches.match(request))
        );
        return;
    }

    // Cache-first for static assets (images, CSS, JS, fonts, video)
    if (/\.(css|js|png|jpg|jpeg|gif|webp|svg|woff|woff2|ttf|ico|mp4|webm)$/.test(url.pathname)) {
        event.respondWith(
            caches.match(request).then(cached => {
                if (cached) return cached;
                return fetch(request)
                    .then(response => {
                        if (response.ok) {
                            const clone = response.clone();
                            caches.open(CACHE_NAME).then(cache => cache.put(request, clone));
                        }
                        return response;
                    })
                    // A dropped/failed network request must not turn into a hard
                    // failure for critical assets (gsap/jquery/theme.js) - fall
                    // back to a plain network fetch outside the SW's control.
                    .catch(() => fetch(request));
            })
        );
    }
});
