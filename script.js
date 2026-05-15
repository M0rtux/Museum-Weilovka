// 1. Inicializace Carouselu
const swiper = new Swiper('.mySwiper', {
    loop: true,
    autoplay: { delay: 3000 },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
});

// 2. Countdown k 1. 6. 2026
const target = new Date("June 1, 2026 09:00:00").getTime();

setInterval(() => {
    const now = new Date().getTime();
    const diff = target - now;

    const d = Math.floor(diff / (1000 * 60 * 60 * 24));
    const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    const s = Math.floor((diff % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML = `${d}d ${h}h ${m}m ${s}s`;
}, 1000);