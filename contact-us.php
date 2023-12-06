<?php
$title = "Advertising Hands: Contact Us Today to Learn More about Our Services";
$description = "Looking for quality advertising hands services? Contact us today and let our skilled team take your advertising campaigns to new heights.";
include("./include/header.php") ?>

<!-- hero section  -->
<div class="container-fluid pt-5 hero-bg">
    <div class="container pt-5 pb-5">
        <div class="row g-4 pt-5 pb-5 d-flex justify-content-center">
            <div class="col-12 col-md-8 col-sm-12 d-flex justify-content-center">
                <div class="text-center pt-5 pb-5">
                    <span class="box ">
                        <span class="blue-color fs-1 fw-bold ">Contact us</span>
                        <div class="circle top-left"></div>
                        <div class="circle top-right"></div>
                        <div class="circle bottom-left"></div>
                        <div class="circle bottom-right"></div>
                    </span>
                    <div class="fs-5 mt-3">
                        <a href="index.php" class="text-decoration-none text-dark">Home</a> <span><i class="bi bi-arrow-right"></i></span> <a href="contact-us.php" class="text-decoration-none text-dark">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg">
    <div class="row">
        <div class="col bg-dark p-5">
            <h1 class="contact-blue fw-bold">Contact us</h1>
            <ul class="p-0 lh-lg">
                <li class="text-white fs-3">Address:</li>
                <li><a href="https://www.google.com/maps/place/869+Walnut+St,+Macon,+GA+31201,+USA/@32.8418718,-83.6327709,17z/data=!3m1!4b1!4m5!3m4!1s0x88f3fe6397157f79:0x77a9e61de6e46e75!8m2!3d32.8418718!4d-83.6305822?shorturl=1" class="text-decoration-none contact-grey fs-5">869 Walnut St, Macon, GA 31201, USA</a></li>
                <li class="text-white fs-3">Email:</li>
                <li><a href="mailto:info@advertinghands.com" class="contact-grey fs-5 text-decoration-none">info@advertinghands.com</a></li>
                <li class="text-white fs-3">Phone:</li>
                <li><a href="tel:(888) 283-7250" class="contact-grey fs-5 text-decoration-none">(888) 283-7250</a></li>
            </ul>
            <h5 class="fw-bold mt-3 text-white">Follow Us:</h5>
            <ul class="d-flex p-0 fs-4">
                <li><a href="" class="me-3 text-decoration-none text-white"><i class="bi bi-linkedin"></i></a></li>
                <li><a href="" class="me-3 text-decoration-none text-white"><i class="bi bi-instagram"></i></a></li>
                <li><a href="" class="text-decoration-none text-white"><i class="bi bi-facebook"></i></a></li>
            </ul>
        </div>
        <div class="col-12 col-md-7 col-sm-12 p-5">
            <h3 class="fw-bold blue-color">Get in Touch</h3>
            <form class="row mt-3 g-4">
                <div class="col-12 col-md-6 col-sm-12">
                    <label for="fullname" class="form-label"><span class="text-danger fs-5">*</span>Full Name:</label>
                    <input type="text" class="form-control shadow1" id="fullname" name="fullname" required>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <label for="inputemail" class="form-label"><span class="text-danger fs-5">*</span>Email</label>
                    <input type="email" class="form-control shadow1" id="inputemail" name="inputemail" required>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <label for="phone" class="form-label"><span class="text-danger fs-5">*</span>Phone</label>
                    <input type="tel" class="form-control shadow1" id="phone" name="phone" placeholder="" required>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <label for="subject" class="form-label"><span class="text-danger fs-5">*</span>Subject</label>
                    <input type="text" class="form-control shadow1" id="subject" name="subject" placeholder="" required>
                </div>
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="form-floating">
                        <textarea class="form-control shadow1" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Message</label>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn bttn">Sumbit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid mt-5  overflow-hidden p-0">
    <h1 class="text-center mb-3 fw-bold">Map</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3352.1276470130388!2d-83.63277088481631!3d32.841871780952424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f3fe6397157f79%3A0x77a9e61de6e46e75!2s869%20Walnut%20St%2C%20Macon%2C%20GA%2031201%2C%20USA!5e0!3m2!1sen!2s!4v1612369422705!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<div class="container-fluid bg pt-5 pb-5">
    <div class="container">
        <h2 class="text-center fw-bold">Why Choose Us?</h2>
        <p class="text-center fs-5">There are multiple reasons to choose Advertising hands</p>
        <div class="row mt-3 mb-5 g-4">
            <div class="col-12 col-md-4 col-sm-12">
                <div class="card d-flex justify-content-center shadow1">
                    <span class="d-flex justify-content-center pt-2"><img src="assets/image/about-icon3.webp" class="img-fluid" alt=""></span>
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Trained Staff</h5>
                        <p class="card-text text-center">We have highly trained staff to deliver the best solution to the customers</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-sm-12">
                <div class="card d-flex justify-content-center shadow1">
                    <span class="d-flex justify-content-center pt-2"><img src="assets/image/about-icon2.webp" class="img-fluid" alt=""></span>
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Quality Outcomes </h5>
                        <p class="card-text text-center">Due to the trained staff, the final products are mesmerizing for the clients</p>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-4 col-sm-12">
                <div class="card d-flex justify-content-center shadow1">
                    <span class="d-flex justify-content-center pt-2"><img src="assets/image/about-icon1.webp" class="img-fluid" alt=""></span>
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold">Diversity</h5>
                        <p class="card-text text-center">We have different brains working for us to bring innovative ideas to life</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container pt-5 pb-5">
    <h3 class="text-center fw-bold text-dark">Frequently Asked Questions</h3>
    <div class="accordion mt-5" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    HOW TO GET YOUR COMPANY IN THE TOP GOOGLE SEARCHES?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-light">
                    <p>To get to the top of a google search, you should hire a team of experts that assure you guarantee results. SEO teams get you to the top of google searches through different tools and techniques. A layman can't figure things out, but these experts know how to make your company visible.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    DO YOU PROVIDE SOCIAL MEDIA MARKETING SERVICES?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-light">
                    <p>Some of the top TV, Internet, phone, and digital service providers have authorized IRG as their retailer. We also represent a number of tech service and solution providers for website development, maintenance, and management, including domain registration, transfer, or renewal, website creation or migration, web or network hosting, and secure state-of-the-art server services.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    WHAT ARE THE CHARGES OF SEO?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-light">
                    <p>Advertising Hands is yet another IRG subsidiary. It is a full-service digital marketing agency that offers web design and development, social media marketing, search engine marketing, graphic design, content marketing, digital branding for individuals and businesses, and other advertising services.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    WHAT IS ADVERTISING HANDS?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-light">
                    <p>Advertising Hands is yet another IRG subsidiary. It is a full-service digital marketing agency that offers web design and development, social media marketing, search engine marketing, graphic design, content marketing, digital branding for individuals and businesses, and other advertising services.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    IS DIGITAL MARKETING WORTH IT?
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-light">
                    <p>Advertising Hands is yet another IRG subsidiary. It is a full-service digital marketing agency that offers web design and development, social media marketing, search engine marketing, graphic design, content marketing, digital branding for individuals and businesses, and other advertising services.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    IS DIGITAL MARKETING WORTH IT?
                </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body bg-light">
                    <p>Advertising Hands is yet another IRG subsidiary. It is a full-service digital marketing agency that offers web design and development, social media marketing, search engine marketing, graphic design, content marketing, digital branding for individuals and businesses, and other advertising services.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<div class="container-fluid bg pt-5 pb-5">
    <div class="container">
        <div class="row mt-3 mb-5 g-4">
            <div class="col-12 col-md-3 col-sm-12">
                <div class="card d-flex justify-content-center shadow">
                    <span class="d-flex justify-content-center pt-2"><img src="assets/image/gift-ticket.webp" class="img-fluid" alt=""></span>
                    <div class="card-body">
                        <h5 class="card-title text-center">Gift Vouchers</h5>
                        <p class="card-text text-center">Subscribe our newsletter to get amazing discounts and perks on our services.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-sm-12">
                <div class="card d-flex justify-content-center shadow">
                    <span class="d-flex justify-content-center pt-2"><img src="assets/image/support.webp" class="img-fluid" alt=""></span>
                    <div class="card-body">
                        <h5 class="card-title text-center">Customer Support</h5>
                        <p class="card-text text-center">Subscribe our newsletter to get amazing discounts and perks on our services.</p>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-3 col-sm-12">
                <div class="card d-flex justify-content-center shadow">
                    <span class="d-flex justify-content-center pt-2"><img src="assets/image/box.webp" class="img-fluid" alt=""></span>
                    <div class="card-body">
                        <h5 class="card-title text-center">Gift Vouchers</h5>
                        <p class="card-text text-center">Subscribe our newsletter to get amazing discounts and perks on our services.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-sm-12">
                <div class="card d-flex justify-content-center shadow">
                    <span class="d-flex justify-content-center pt-2"><img src="assets/image/bulb.webp" class="img-fluid" alt=""></span>
                    <div class="card-body">
                        <h5 class="card-title text-center">Gift Vouchers</h5>
                        <p class="card-text text-center">Subscribe our newsletter to get amazing discounts and perks on our services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("./include/footer.php") ?>