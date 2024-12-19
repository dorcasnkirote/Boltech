<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $topic->name }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Link CSS files in Laravel Blade template -->
    <link rel="stylesheet" href="{{ asset('pacific-main/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('pacific-main/css/style.css') }}">
    <script src="https://cdn.userway.org/widget.js" data-account="gER1tSTnfp"></script>

    <!-- Start of Tawk.to Script -->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6739b5892480f5b4f59f415b/1icsmq95h';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!-- End of Tawk.to Script -->

    <style>
        .marquee-wrapper {
            overflow: hidden;
            position: relative;
        }

        .carousel-logos {
            display: flex;
        }

        .carousel-logos .item {
            flex: 0 0 auto;
            margin-right: 30px; /* Add space between logos */
        }

        .logo-img {
            width: 150px; /* Adjust the logo size */
            height: auto;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        /* Ensure that the logos fit within the container */
        .carousel-logos {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-wrap: nowrap;
            overflow: hidden;
        }

        .item {
            flex: 1 0 auto; /* Allow the logos to be flexible but prevent them from growing too large */
            padding: 10px; /* Add some padding between logos */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-img {
            max-width: 100%; /* Make sure logos scale responsively */
            height: auto; /* Maintain aspect ratio */
            max-height: 60px; /* Limit maximum height to avoid logos becoming too large */
        }

        /* Optional: Add a responsive media query to make the logos adjust on smaller screens */
        @media (max-width: 768px) {
            .logo-img {
                max-height: 40px; /* Reduce logo size for smaller screens */
            }
        }

        .hero-wrap {
            position: relative;
            height: 40vh; /* Reduced height to 40% of the viewport height */
            background-size: cover; /* Ensure the image covers the section */
            background-position: center center; /* Center the background image */
            background-repeat: no-repeat;
        }

        .hero-wrap .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay for better readability */
        }

        .hero-wrap .slider-text {
            position: absolute;
            bottom: 10%; /* Align text near the bottom */
            left: 50%;
            transform: translateX(-50%); /* Center text horizontally */
            color: #fff;
            z-index: 2;
        }

        .hero-wrap .breadcrumbs {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .container {
    max-width: 1200px;
}

.row.justify-content-center {
    display: flex;
    justify-content: space-between;
}

.col-md-8 {
    flex: 0 0 65%; /* Main content column */
}

.col-md-4 {
    flex: 0 0 30%; /* TOC column on the left side */
    margin-left: 15px; /* Optional: add some spacing if needed */
}

.subtopics-section {
    background-color: #f8f9fa;
    padding: 15px;
    border-radius: 5px;
}

h3 {
    border-bottom: 2px solid #ddd;
    padding-bottom: 5px;
    margin-bottom: 15px;
}

.subtopics-section {
    background-color: #f8f9fa;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.toc-number {
    font-weight: bold;
    margin-right: 8px;
}

ul.list-unstyled {
    padding-left: 0;
    list-style-type: none;
}

ul.list-unstyled li {
    margin-bottom: 10px;
    padding-left: 20px;
    position: relative;
}

ul.list-unstyled li::before {
    content: "";
    position: absolute;
    left: 0;
    top: 50%;
    width: 0;
    height: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-right: 10px solid #007bff; /* Bullet color or icon color */
    transform: translateY(-50%);
}


    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #001F3F;" id="ftco-navbar">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="" alt="Boltech" style="height: 40px;">
        </a>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link" style="color: white;">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link" style="color: white;">Destination</a></li>
                <li class="nav-item mr-4"><a href="#" class="nav-link" style="color: white;">Contact</a></li>
                <li class="nav-item mr-4"><a href="/login" class="nav-link" style="color: white;">Account</a></li>
            </ul>
        </div>
    </div>
</nav>
    <!-- END nav -->

    <section class="container my-5">
    <div class="row justify-content-center">
        <!-- Blog Content -->
        <div class="col-md-8">

            <!-- Topic Title -->
            <div class="mb-4">
                <h2 class="text-center font-weight-bold" data-toggle="tooltip" title="{{ $topic->name }}">
                    {{ $topic->name }}
                </h2>
            </div>

            <div class="blog-content" style="color:black">
                {!! $topic->description !!}
            </div>

        </div>

        <!-- Table of Contents Section -->
        <div class="col-md-4">
    <div class="subtopics-section mt-5">
        <h3>Table of Contents</h3>
        <ul class="list-unstyled">
            @forelse ($subtopics as $subtopic)
                <li class="mb-3">
                    <span class="toc-number">{{ $loop->iteration }}.</span>
                    <a href="{{ route('subtopics.show', $subtopic->id) }}">
                        {{ $subtopic->name }}
                    </a>
                    @if(count($subtopic->children ?? []))
                        @include('partials.subtopics', ['subtopics' => $subtopic->children])
                    @endif
                </li>
            @empty
                <p>No subtopics available.</p>
            @endforelse
        </ul>
    </div>
</div>

    </div>
</section>





<footer class="ftco-footer bg-bottom ftco-no-pt" style="background:#001F3F;color:white">
    <div class="container">
        <div class="row mb-5">
            <!-- About Section -->
            <div class="col-md pt-5">
                <div class="ftco-footer-widget pt-md-5 mb-4">
                    <div class="d-flex align-items-center mb-4">
                        <h2 class="ftco-heading-2" style="color:white">About Boltech</h2>
                    </div>
                    <img src="/images/boltech_logo.png" alt="Boltech Logo" class="mr-3" style="width: 250px; height: 50px;">
                    <br><br>
                    <p style="color:white">
                        Boltech delivers innovative technology solutions tailored for businesses. From IT consulting to enterprise systems, we ensure reliability and performance for all your technology needs.
                    </p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/boltech"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/boltech/"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

            <!-- Information Section -->
            <div class="col-md pt-5 border-left">
                <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
                    <h2 class="ftco-heading-2" style="color:white">Our Services</h2>
                    <ul class="list-unstyled" style="color:white">
                        <li><a href="/services/consulting" class="py-2 d-block" style="color:white">IT Consulting</a></li>
                        <li><a href="/services/software-development" class="py-2 d-block" style="color:white">Software Development</a></li>
                        <li><a href="/services/cloud-solutions" class="py-2 d-block" style="color:white">Cloud Solutions</a></li>
                        <li><a href="/services/support" class="py-2 d-block" style="color:white">Managed IT Support</a></li>
                        <li><a href="/services/cybersecurity" class="py-2 d-block" style="color:white">Cybersecurity</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="col-md pt-5 border-left">
                <div class="ftco-footer-widget pt-md-5 mb-4">
                    <h2 class="ftco-heading-2" style="color:white">Contact Us</h2>
                    <div class="block-23 mb-3">
                        <ul class="list-unstyled">
                            <li style="color:white;">TechHub Plaza, Suite 302, Nairobi</li>
                            <li style="color:white;">P.O. Box 5678, 00100 Nairobi, Kenya</li>
                            <li><a href="tel:+254701234567" style="color:white;">+254 701 234 567</a></li>
                            <li><a href="mailto:info@boltech.com" style="color:white;">info@boltech.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Services Section -->
            <div class="col-md pt-5 border-left">
                <div class="ftco-footer-widget pt-md-5 mb-4">
                    <h2 class="ftco-heading-2" style="color:white">Explore Solutions</h2>
                    <ul class="list-unstyled">
                        <li><p class="py-2 d-block" style="color:white">Business Automation</p></li>
                        <li><p class="py-2 d-block" style="color:white">Enterprise Software</p></li>
                        <li><p class="py-2 d-block" style="color:white">Data Management</p></li>
                        <li><p class="py-2 d-block" style="color:white">Cloud Integration</p></li>
                        <li><p class="py-2 d-block" style="color:white">IT Training</p></li>
                        <li><p class="py-2 d-block" style="color:white">Consultation Services</p></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
      
    </div>
</footer>



    <!-- Include Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
</body>
</html>
