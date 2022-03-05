<?php include 'inc/components/menu.php'; ?>
<?php include 'inc/components/navbar.php'; ?>
<?php include 'inc/components/carousel.php'; ?>

<!-- check availability form-->
<div class="container availability-form p-4">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Check Booking Availability</h5>
            <form>
                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-in</label>
                        <input type="date" class="form-control shadow-none" id="date">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Check-out</label>
                        <input type="date" class="form-control shadow-none" id="date">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight: 500;">Adult</label>
                        <select class="form-select shadow-none">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight: 500;">Children</label>
                        <select class="form-select shadow-none">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-1 custom-bg mb-lg-3">
                        <button type="submit" class="btn btn-primary shadow-none">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- our rooms -->
<h1 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h1>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                <img src="images/rooms/1.jpg" class="card-img-top">
                <div class="card-body">
                    <h5>Simple Room Name</h5>
                    <h6 class="mb-4">200 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            2 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            3 Sofas
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Wi-fi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Television
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            AC
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Room heater
                        </span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            5 Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            4 Children
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <div class="custom-bg">
                            <a href="#" class="btn btn-sm text-white shadow-none">Book Now</a>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                <img src="images/rooms/1.jpg" class="card-img-top">
                <div class="card-body">
                    <h5>Simple Room Name</h5>
                    <h6 class="mb-4">200 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            2 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            3 Sofas
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Wi-fi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Television
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            AC
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Room heater
                        </span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            5 Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            4 Children
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <div class="custom-bg">
                            <a href="#" class="btn btn-sm text-white shadow-none">Book Now</a>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                <img src="images/rooms/1.jpg" class="card-img-top">
                <div class="card-body">
                    <h5>Simple Room Name</h5>
                    <h6 class="mb-4">200 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            2 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            3 Sofas
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Wi-fi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Television
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            AC
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Room heater
                        </span>
                    </div>
                    <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            5 Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            4 Children
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                        <div class="custom-bg">
                            <a href="#" class="btn btn-sm text-white shadow-none">Book Now</a>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
        </div>
    </div>
</div>

<!--Our facilities-->
<h1 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h1>
<div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-light rounded shadow py-4 my-3">
            <img src="images/features/wifi.svg" width="80px">
            <h5 class="mt-3">Wi-fi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-light rounded shadow py-4 my-3">
            <img src="images/features/wifi.svg" width="80px">
            <h5 class="mt-3">Wi-fi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-light rounded shadow py-4 my-3">
            <img src="images/features/wifi.svg" width="80px">
            <h5 class="mt-3">Wi-fi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-light rounded shadow py-4 my-3">
            <img src="images/features/wifi.svg" width="80px">
            <h5 class="mt-3">Wi-fi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-light rounded shadow py-4 my-3">
            <img src="images/features/wifi.svg" width="80px">
            <h5 class="mt-3">Wi-fi</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
        </div>
    </div>
</div>

<!-- testimoninal -->
<h1 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h1>
<div class="container">
    <div class="swiper mySwiper1 swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-pointer-events">
        <div class="swiper-wrapper" style="cursor: grab; transition-duration: 0ms; transform: translate3d(-1657px, 0px, 0px);">
            <div class="swiper-slide border bg-light rounded p-4" style="transition-duration: 0ms; transform: translate3d(0px, 0px, -600px) rotateX(0deg) rotateY(300deg) scale(1); z-index: -5;">
                <div class="profile d-flex align-items-center mb-3">
                    <img src="images/features/star.svg" width="30px">
                    <h6 class="m-0 ms-2">Random User 1</h6>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti earum labore possimus esse modi dolor optio quo. Asperiores, fugit dignissimos.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
                <div class="swiper-slide-shadow-left" style="opacity: 6; transition-duration: 0ms;"></div>
                <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide border bg-light rounded p-4" style="transition-duration: 0ms; transform: translate3d(0px, 0px, -600px) rotateX(0deg) rotateY(300deg) scale(1); z-index: -5;">
                <div class="profile d-flex align-items-center mb-3">
                    <img src="images/features/star.svg" width="30px">
                    <h6 class="m-0 ms-2">Random User 1</h6>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti earum labore possimus esse modi dolor optio quo. Asperiores, fugit dignissimos.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
                <div class="swiper-slide-shadow-left" style="opacity: 6; transition-duration: 0ms;"></div>
                <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
            </div>
            <div class="swiper-slide border bg-light rounded p-4" style="transition-duration: 0ms; transform: translate3d(0px, 0px, -600px) rotateX(0deg) rotateY(300deg) scale(1); z-index: -5;">
                <div class="profile d-flex align-items-center mb-3">
                    <img src="images/features/star.svg" width="30px">
                    <h6 class="m-0 ms-2">Random User 1</h6>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti earum labore possimus esse modi dolor optio quo. Asperiores, fugit dignissimos.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
                <div class="swiper-slide-shadow-left" style="opacity: 6; transition-duration: 0ms;"></div>
                <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
            </div>
        </div>
        <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" aria-current="true"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
    <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More</a>
    </div>
</div>

<!-- reach us -->
<h1 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h1>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-light rounded">
            <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14698.73281931048!2d-43.3609113!3d-22.9250528!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e6f82a89c32ab3a!2sCenter%20Shopping%20Rio!5e0!3m2!1spt-BR!2sbr!4v1644708383001!5m2!1spt-BR!2sbr" loading="lazy"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="bg-light p-4 rounded mb-4">
                <h5>Call Us</h5>
                <a href="" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +5521999999999
                </a>
                <br>
                <a href="" class="d-inline-block text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +5521999999999
                </a>
            </div>
            <div class="bg-light p-4 rounded mb-4">
                <h5>Follow Us</h5>
                <a href="" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter me-1"></i> Twitter
                    </span>
                </a>
                <br>
                <a href="" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook me-1"></i> Facebook
                    </span>
                </a>
                <br>
                <a href="" class="d-inline-block">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram me-1"></i> Instagram
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>

<?php include 'inc/components/footer.php'; ?>