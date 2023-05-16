import Swiper from "swiper/bundle";
import "swiper/css/bundle";
const app = () => {
    // ===================Start quick product view =================//
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
app();
document.addEventListener("reinit-flowbite", function () {
    app();
});
