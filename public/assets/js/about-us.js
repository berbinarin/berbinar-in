var swiper;

function initializeSwiper() {
    var windowWidth = window.innerWidth;

    if (windowWidth < 768) {
        if (swiper && swiper.destroy) {
            swiper.destroy();
        }

        swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            spaceBetween: 30,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    } else {
        if (swiper && swiper.destroy) {
            swiper.destroy();
        }

        swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            initialSlide: 2,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }
}

// Initialize on page load
initializeSwiper();

// Reinitialize on window resize
window.addEventListener("resize", function () {
    initializeSwiper();
});


var swiper = new Swiper(".mySwiperAsesmen", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,
    },
    loop: true,
    autoplay: true,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

document.addEventListener('alpine:init', () => {
Alpine.store('accordion', {
    tab: 0
});

Alpine.data('accordion', (idx) => ({
    init() {
    this.idx = idx;
    },
    idx: -1,
    handleClick() {
    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
    },
    handleRotate() {
    return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
    },
    handleToggle() {
    return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
    }
}));
})