<?php include 'inc/components/menu.php'; ?>
<?php include 'inc/components/navbar.php'; ?>

<div class="my-5 px-4">
    <h2 class="text-center h-font fw-bold">Contact Us</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        Quibusdam sit obcaecati nesciunt <br> fugiat explicabo officiis
        reiciendis libero sapiente possimus veniam.
    </p>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-light rounded shadow p-4">
                <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14698.73281931048!2d-43.3609113!3d-22.9250528!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e6f82a89c32ab3a!2sCenter%20Shopping%20Rio!5e0!3m2!1spt-BR!2sbr!4v1644708383001!5m2!1spt-BR!2sbr" loading="lazy"></iframe>
                
                <h5>Address</h5>
                <a href="#" class="d-inline-block text-decoration-none text-dark mb-2" target="_blank" >
                    <i class="bi bi-geo-alt-fill"></i> Link of the Place
                </a>
                <h5 class="mt-4">Call Us</h5>
                <a href="" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +5521999999999
                </a>
                <br>
                <a href="" class="d-inline-block text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +5521999999999
                </a>

                <h5 class="mt-4">Email</h5>
                <a class="d-inline-block text-decoration-none text-dark" href="">
                    <i class="bi bi-envelope-fill"></i> contact@test.com
                </a>

                <h5 class="mt-4">Follow Us</h5>
                <a href="" class="d-inline-block mb-3 text-dark fs-5 me-2">
                    <i class="bi bi-twitter me-1"></i>
                </a>
                <a href="" class="d-inline-block mb-3 text-dark fs-5 me-2">
                    <i class="bi bi-facebook me-1"></i>
                </a>
                <a href="" class="d-inline-block text-dark fs-5">
                    <i class="bi bi-instagram me-1"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 px-4">
            <div class="bg-light rounded shadow p-4">
                <form>
                    <h5>Send a Message</h5>
                    <div class="mt-3">
                        <label class="form-label"  style="font-weight: 500;">Name</label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label"  style="font-weight: 500;">Email</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label"  style="font-weight: 500;">Subject</label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                        <label class="form-label"  style="font-weight: 500;">Message</label>
                        <textarea rows="5" style="resize: none;" class="form-control shadow-none"></textarea>
                    </div>
                    <button class="btn btn-dark shadow-none mt-3">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'inc/components/footer.php'; ?>