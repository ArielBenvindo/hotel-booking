var swiper = new Swiper(".mySwiper", {
    spaceBetween: 20,
    loop: true,
    effect: "fade",
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});


var swiper = new Swiper(".mySwiper1", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    slidesPerView: "3",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints: {
        320: {
            slidesPerView: "1",
        },
        640: {
            slidesPerView: "1",
        },
        768: {
            slidesPerView: "2",
        },
        1024: {
            slidesPerView: "3",
        },
    }
});


var swiper = new Swiper(".mySwiper2", {
    spaceBetween: 40,
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints:{
        320: {
            slidesPerView: "1",
        },
        640: {
            slidesPerView: "1",
        },
        768: {
            slidesPerView: "3",
        },
        1024: {
            slidesPerView: "3",
        },
    }
});
