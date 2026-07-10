document.addEventListener('alpine:init', () => {
    window.Alpine.data('mobileBottomNav', () => ({
        active: 'home',

        sync() {
            const hash = window.location.hash.replace('#', '');

            if (hash === 'consignment') {
                this.active = 'consignment';
            } else if (hash === 'recommended-properties' || this.isRecommendFilter()) {
                this.active = 'recommended';
            } else if (this.isHomePath()) {
                this.active = 'home';
            }
        },

        isHomePath() {
            const path = window.location.pathname.replace(/\/$/, '') || '/';

            return path === '/' || path.endsWith('/public');
        },

        isRecommendFilter() {
            const value = new URLSearchParams(window.location.search).get('is_recommend');

            return ['Y', 'YES', '1', 'TRUE'].includes((value ?? '').toUpperCase());
        },

        linkClass(key) {
            return this.active === key
                ? 'text-white'
                : 'text-blue-200/90 hover:text-white active:text-white';
        },

        iconWrapClass(key) {
            return this.active === key
                ? 'bg-white/15 ring-1 ring-white/20'
                : 'bg-transparent group-hover:bg-white/10';
        },
    }));

    window.Alpine.data('propertyCarousel', () => ({
        scroller: null,
        timer: null,
        delay: 4000,

        init() {
            this.scroller = this.$refs.scroller;
            this.scroller?.addEventListener('scrollend', () => this.resetIfNeeded());
            this.play();
        },

        getStep() {
            const slide = this.scroller?.querySelector('[data-slide]');
            if (!slide) {
                return 0;
            }

            const gap = parseFloat(getComputedStyle(this.scroller).columnGap) || 24;

            return slide.offsetWidth + gap;
        },

        advance() {
            if (!this.scroller) {
                return;
            }

            this.scroller.scrollBy({ left: this.getStep(), behavior: 'smooth' });
            setTimeout(() => this.resetIfNeeded(), 600);
        },

        resetIfNeeded() {
            if (!this.scroller) {
                return;
            }

            const half = this.scroller.scrollWidth / 2;

            if (this.scroller.scrollLeft >= half - 2) {
                this.scroller.scrollTo({ left: 0, behavior: 'instant' });
            }
        },

        play() {
            this.pause();
            this.timer = setInterval(() => this.advance(), this.delay);
        },

        pause() {
            if (this.timer) {
                clearInterval(this.timer);
                this.timer = null;
            }
        },
    }));
});
