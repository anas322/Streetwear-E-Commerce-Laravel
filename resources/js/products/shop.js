import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import "flowbite";

// ===================Start quick product view =================//
const swiperFunction = () => {
    const swiper2 = new Swiper(".product-view", {
        loop: true,
        spaceBetween: 1,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesProgress: true,
    });
    const swiper3 = new Swiper(".product-view-carousel", {
        loop: true,
        spaceBetween: 1,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper2,
        },
    });
};

swiperFunction();
window.addEventListener("contentChanged", (event) => {
    console.log("changed");
    swiperFunction();
});
// ===================End quick product view =================//
