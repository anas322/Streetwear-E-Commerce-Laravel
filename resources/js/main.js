import Swiper from "swiper/bundle";
import "swiper/css/bundle";

import flowbite from "../../node_modules/flowbite/src/flowbite.js";

// ===================Start latest arrival swiper=================//
const swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 1,
            spaceBetween: 1,
        },
        "@0.75": {
            slidesPerView: 2,
            spaceBetween: 2,
        },
        "@1.00": {
            slidesPerView: 3,
            spaceBetween: 4,
        },
        "@1.50": {
            slidesPerView: 4,
            spaceBetween: 5,
        },
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
// ===================End latest arrival swiper=================//
// ===================start header slider=================//
const items = [
    {
        position: 0,
        el: document.getElementById("carousel-item-1"),
    },
    {
        position: 1,
        el: document.getElementById("carousel-item-2"),
    },
    {
        position: 2,
        el: document.getElementById("carousel-item-3"),
    },
];

const options = {
    activeItemPosition: 1,
    interval: 3000,
};

const carousel = new flowbite.Carousel(items, options);
carousel.cycle();
// ===================End header slider=================//
