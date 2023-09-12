<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Tax Returns Law Services" name="keywords">
    <meta content="Tax Returns Law Services" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">


    <title>@yield('title')</title>
</head>

<body>
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0" data-scroll="logo" style="width: 10%;">
                <img src="{{asset('img/esf-logo.png')}}" alt="" style="width: 66%;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="" class="nav-item nav-link active" data-scroll="home">Home</a>
                    <a href="" data-scroll="about" class="nav-item nav-link">About</a>
                    <a href="" class="nav-item nav-link" data-scroll="services">Services</a>
                    <a href="" class="nav-item nav-link" data-scroll="core_team">Core Team</a>
                    <a href="{{route('blogs')}}" class="nav-item nav-link" data-scroll="blogs">Blogs</a>
                    <a href="" class="nav-item nav-link" data-scroll="contact_us">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Kachehri, Near Jinnah Park, Rawalpinid, Pakistan</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <a class="me-2" href="https://api.whatsapp.com/send?phone=923400860323">
                                    <img src="{{asset('img/whatsapp-icon.png')}}" alt="" style="width: 20px; height: 20px;">
                                </a>
                                <a class="text-white mb-0" href="https://api.whatsapp.com/send?phone=923400860323">+92 340 0860323</a>
                                <a class="text-white mb-0 ms-4" href="https://api.whatsapp.com/send?phone=92515146720 ">+92 51 5146720</a>

                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="" data-scroll="home"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="" data-scroll="about"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="" data-scroll="services"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="" data-scroll="core_team"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="" data-scroll="contact_us"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="" data-scroll="top" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        $(document).ready(function() {
            var currentRoute = window.location.pathname;
            if (currentRoute === '/blogs' || currentRoute.startsWith('/blog-detail')) {
                // Set the "Blogs" link as active
                $('a[data-scroll]').removeClass('active');
                $('a[data-scroll="blogs"]').addClass('active');
                $('a[data-scroll]').on('click', function(e) {
                    e.preventDefault();
                    if ($(this).attr('data-scroll') != 'blogs') {
                        $('a[data-scroll]').removeClass('active');
                        window.location.href = "{{ route('home') }}";
                        // Add the "active" class to the clicked link
                        $(this).addClass('active');

                        setTimeout(() => {
                            var target = $(this).attr('data-scroll');
                            var targetOffset = $('#' + target).offset().top;

                            $('html, body').animate({
                                scrollTop: targetOffset
                            });
                        }, 400);

                    }
                })
            } else {
                $('a[data-scroll]').on('click', function(e) {
                    e.preventDefault();
                    // Check if the data-scroll attribute is "logo"
                    if ($(this).attr('data-scroll') === 'logo' || $(this).attr('data-scroll') === 'top') {
                        // Remove the "active" class from all links
                        $('a[data-scroll]').removeClass('active');
                        var aboutLink = $('a[data-scroll="home"]');

                        // Do something with the found element (e.g., add a class)
                        aboutLink.addClass('active');
                        var targetOffset = $('#home').offset().top;

                        $('html, body').animate({
                            scrollTop: targetOffset
                        }); // Adjust the scroll duration as needed
                    } else if ($(this).attr('data-scroll') == 'blogs') {
                        $('a[data-scroll]').removeClass('active');
                        var aboutLink = $('a[data-scroll="blogs"]');

                        // Do something with the found element (e.g., add a class)
                        aboutLink.addClass('active');

                        window.location.href = "{{ route('blogs') }}";
                    } else {
                        // Remove the "active" class from all links
                        $('a[data-scroll]').removeClass('active');

                        // Add the "active" class to the clicked link
                        $(this).addClass('active');

                        var target = $(this).attr('data-scroll');
                        var targetOffset = $('#' + target).offset().top;

                        $('html, body').animate({
                            scrollTop: targetOffset
                        }); // Adjust the scroll duration as needed
                    }
                });
            }
            // // equal height
            const rows = document.querySelectorAll('#blog_post');
            rows.forEach(row => {
                // Get all cards in the current row
                const cards = row.querySelectorAll('.blog-item');

                // Find the maximum height among all cards in the row
                let maxHeight = 0;

                cards.forEach(card => {
                    const cardHeight = card.offsetHeight;
                    if (cardHeight > maxHeight) {
                        maxHeight = cardHeight;
                    }
                });

                // Set the maximum height for all cards in the row
                cards.forEach(card => {
                    card.style.height = `${maxHeight}px`;
                });
            });
        });
    </script>
</body>

</html>