<footer class="overflow-hidden footer-bg">
        <div class="container pt-4">
            <div class="row pt-4 g-5">
                <div class="col-12 col-md-4 col-sm-12">
                    <img src="assets/image/footer-logo.webp" class="img-fluid" alt="">
                    <p class="mt-3">Advertising Hands' digital services encompass a plethora of areas, including website development, graphic design, content creation and digital marketing. Our services offer a comprehensive suite of tools and strategies to help businesses thrive in the ever-evolving online landscape. </p>
                </div>
                <div class="col-12 col-md-2 col-sm-12">
                    <h3>Company</h3>
                    <ul class="p-0">
                        <li><a href="our-services.php" class="text-grey text-decoration-none"> Our Services</a></li>
                        <li><a href="about-us.php" class="text-grey text-decoration-none"> About us</a></li>
                        <li><a href="contact-us.php" class="text-grey text-decoration-none"> Contact us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                    <h3>Contact us</h3>
                    <ul class="p-0 lh-lg">
                        <li><a href="mailto:Info@advertsinghands.com" class="text-grey text-decoration-none"><i class="bi bi-envelope-fill"></i> Info@advertsinghands.com</a></li>
                        <li><a href="tel:(888) 283 7250" class="text-grey text-decoration-none"><i class="bi bi-telephone-fill text-grey"></i> (888) 283 7250</a></li>
                        <li><a href="https://www.google.com/maps/place/869+Walnut+St,+Macon,+GA+31201,+USA/@32.8418718,-83.6327709,17z/data=!3m1!4b1!4m5!3m4!1s0x88f3fe6397157f79:0x77a9e61de6e46e75!8m2!3d32.8418718!4d-83.6305822?shorturl=1" class="text-grey text-decoration-none"><i class="bi bi-house-door-fill"></i> 869 Walnut St, Macon, GA 31201</a></li>
                        <li><a href="" class="text-grey text-decoration-none"><i class="bi bi-globe-central-south-asia"></i> www.advertisinghands.com</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-2 col-sm-12 ">
                    <a href="https://www.google.com/partners/agency?id=8527097934"><img src="assets/image/google-partner.webp" class="img-fluid" alt=""></a>
                    <h5 class="fw-bold mt-3">Follow Us:</h5>
                    <ul class="d-flex p-0 fs-5">
                        <li><a href="" class="me-3 text-decoration-none text-dark"><i class="bi bi-linkedin"></i></a></li>
                        <li><a href="" class="me-3 text-decoration-none text-dark"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/advertisinghands/" class="text-decoration-none text-dark"><i class="bi bi-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-md-4 col-sm-12">
                    <ul class="footer-ul p-0">
                        <li><a href="privacy-policy.php" class="text-decoration-none text-dark">Privacy Policy</a></li>
                        <li><a  class="text-decoration-none text-dark">|</a></li>
                        <li><a href="terms-and-conditions.php" class="text-decoration-none text-dark">Terms and Conditions</a></li>
                        <li><a  class="text-decoration-none text-dark">|</a></li>
                        <li><a href="dmca-policy.php" class="text-decoration-none text-dark">DMCA Policy</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-8 col-sm-12 footer-col2">
                © Copyrights Advertising Hands 2023. All rights reserved.
                </div>
            </div>
        </div>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        spaceBetween: 20,
        freeMode: true,
        breakpoints: {
            280: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
<script>
    function animateProgress(startValue, endValue, elementId) {
        let circularProgress = document.getElementById(elementId),
            progressValue = circularProgress.querySelector(".progress-value");

        let speed = 50;

        let progress = setInterval(() => {
            startValue++;
            progressValue.textContent = `${startValue}%`
            circularProgress.style.background = `conic-gradient(#207684 ${startValue * 3.6}deg, #ededed 0deg)`
            if (startValue == endValue) {
                clearInterval(progress);
            }
        }, speed);
    }

    animateProgress(0, 70, 'progress70');
    animateProgress(0, 80, 'progress80');
    animateProgress(0, 90, 'progress90');
    animateProgress(0, 100, 'progress100');
</script>

<script>
    function animateProgress(startValue, endValue, elementId) {
        let circularProgress = document.getElementById(elementId),
            progressValue = circularProgress.querySelector(".progress-value");

        let speed = 20;

        let progress = setInterval(() => {
            startValue++;
            progressValue.textContent = `${startValue}`; // Removed the percentage sign
            circularProgress.style.background = `conic-gradient(#207684 ${startValue * 3.6}deg, #ededed 0deg)`
            if (startValue == endValue) {
                clearInterval(progress);
            }
        }, speed);
    }

    animateProgress(0, 1962, 'progress500');
    animateProgress(0, 136, 'progress200');
    animateProgress(0, 2350, 'progress110');
    animateProgress(0, 985, 'progress220');

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function(){
    var path = window.location.pathname;
    var page = path.split("/").pop();
    $('.nav-item a').each(function(){
        var href = $(this).attr('href');
        if(page == href){
            $(this).closest('li').addClass('active');
        }
    });
});
</script>


</html>