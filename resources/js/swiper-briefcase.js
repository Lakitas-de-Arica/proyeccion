import Swiper from 'swiper/bundle';

import 'swiper/css/bundle';
import '../css/swiper.css';

const swiper = new Swiper(".swiper", {
    slidesPerView: 1,
    centeredSlides: false,
    spaceBetween: 50,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 3000,
        reverseDirection: true
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 5,
            spaceBetween: 30,
        }
    },
});
