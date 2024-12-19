<!DOCTYPE html>
<html lang="en">
<head>
  <title>Archers Tours and Travel</title>
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

<!--Start of Tawk.to Script-->
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
<!--End of Tawk.to Script-->


<style>


.container{
    max-width: 1500px   ;
    width:100%;
}

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


</style>

</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>
   <a class="navbar-brand" href="{{ url('/') }}">
    <img src="{{ asset('/images/logo_medium_3-removebg-preview.png') }}" alt="Pacific Travel Agency" style="height: 40px;">
</a>


     <div class="collapse navbar-collapse" id="ftco-nav">
     <ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
					<li  class="nav-item active"><a href="/about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="/destination" class="nav-link">Destination</a></li>
					<li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item "><a href="/faqs" class="nav-link">FAQs</a></li>


  <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle mr-4" id="informationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Information
    </a>
    <ul class="dropdown-menu nav-item" aria-labelledby="informationDropdown">
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('category.show', $category->id) }}" class="dropdown-item">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
</li>



                    <li class="nav-item"><a href="/login" class="nav-link">Account</a></li>


				</ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->

 <section class="hero-wrap hero-wrap-2 " style="background-image: url('pacific-main/images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">About Us</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section services-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
				<div class="w-100">
					<span class="subheading" style="color:orange">About Us</span>
                    <p>We are a Tours and Travel company based in Nairobi, Kenya, with over 70 years experience in
organizing safaris, beach holidays and travel requirements for visitors from all over the world.
Our talent is a result of an accumulation of past experience, our aim to tailor travels to individual
requests and personas, and an ability to be both flexible and efficient in our travel programmes.
Our team is equipped to satisfy the travel needs of visitors from all over the world.</p>
					<p><a href="/destination" class="btn  py-3 px-4" style="background:navy;color:white;border-radius:30px">Explore Destinations</a></p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row" >
                <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 color-1 d-block" style="border-radius: 30px; overflow: hidden;">

                <div class="media-body">
                    <h3 class="heading mb-3">Travel Management & Advisory</h3>
                    <ul class="text-white">
                        <li>Business, tours, and leisure travels management and ticketing</li>
                        <li>Personalized advisory services on travel and tours organization</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 color-2 d-block" style="border-radius: 30px; overflow: hidden;">

                <div class="media-body">
                    <h3 class="heading mb-3">Event & Tour Organization</h3>
                    <ul class="text-white">
                        <li>Organizing meetings and conferences</li>
                        <li>Organizing pilgrimages and special interest groups</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
    <div class="services services-1 color-3 d-block" style="border-radius: 30px; overflow: hidden;">

        <div class="media-body">
            <h3 class="heading mb-3">Ground Handling & Emergency Services</h3>
            <ul class="text-white">
                <li>Medical evacuation/repatriation on commercial airlines and air ambulance charters</li>
            </ul>
        </div>
    </div>
</div>

        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="services services-1 color-4 d-block" style="border-radius: 30px; overflow: hidden;">

                <div class="media-body">
                    <h3 class="heading mb-3">Travel Consultancy & Transport Services</h3>
                    <ul class="text-white">
                        <li>Travel policy consultancy and travel insurances</li>
                        <li>Airport transfers (locally and internationally)</li>
                        <li>Car-hire (locally and internationally)</li>
                    </ul>
                </div>
            </div>
        </div>				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-about img"style="background-image: url(pacific-main/images/bg_4.jpg);">
 <div class="overlay"></div>
 <div class="container py-md-5">
  <div class="row py-md-5">

</div>
</div>
</section>

<section class="ftco-section ftco-about ftco-no-pt img">
 <div class="container">
  <div class="row d-flex">
   <div class="col-md-12 about-intro">
    <div class="row">
     <div class="col-md-6 d-flex align-items-stretch">
      <div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url(/pacific-main/images/hotel-resto-7.jpg);border-radius:30px">
      </div>
    </div>
    <div class="col-md-6 pl-md-5 py-5">
      <div class="row justify-content-start pb-3">
        <div class="col-md-12 heading-section ftco-animate">
					<h2 class="mb-4">Embark on Your Next Adventure with Us</h2>
					<p>Discover the beauty of the world with Archers Tours & Travel, where unforgettable experiences await you at every destination. Let us guide you through a journey filled with excitement and discovery.</p>
					<p>From tranquil beach getaways to thrilling excursions, we offer tailored experiences that suit all your travel desires. Our team is dedicated to making your travel dreams a reality, ensuring comfort, safety, and unforgettable memories along the way.</p>
					<p><a href="#" class="btn  py-3 px-4" style="background:orange;color:white;">Explore Destinations</a></p>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</div>
</section>
<<section class="ftco-section testimony-section bg-bottom" style="background-image: url(pacific-main/images/bg_1.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2 class="mb-4">Testimonials by Destination</h2>
            </div>
        </div>
        <div class="row">
            @foreach($testimonials as $testimonial)
            <div class="col-md-4 d-flex align-items-stretch mb-4">
                <div class="testimony-wrap py-4" style="border-radius: 30px; background: white; width: 100%;">
                    <div class="text">
                        <p class="star" style="color:orange">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <p class="mb-4">
                            {!! $testimonial->message !!}
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="pl-3">
                                <p class="name">{{ $testimonial->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



        <section class="ftco-section logo-section bg-bottom" style="background-image: url(images/bg_1.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <span class="subheading" style="color:orange">In partnership with</span>
            </div>
        </div>

        <div class="row ftco-animate">
            <div class="col-md-12">
                <!-- Add marquee effect using CSS animation -->
                <div class="marquee-wrapper">
                    <div class="carousel-logos">
                        <!-- Repeat for each company logo -->
                        <div class="item">
                            <img src="/images/logo_kata.png" alt="Company 1 Logo" class="logo-img">
                        </div>
                        <div class="item">
                            <img src="/images/png-transparent-iata-hd-logo.png" alt="Company 2 Logo" class="logo-img">
                        </div>
                        <div class="item">
                            <a href="https://payments.pesapal.com/archersafrica" target="_blank" rel="noopener noreferrer">
                                <img src="/images/imag4.png" alt="Company 3 Logo" class="logo-img">
                            </a>
                        </div>
                        <div class="item">
                            <img src="/images/Untitled.jpeg" alt="Company 5 Logo" class="logo-img">
                        </div>
                        <!-- Add more logos as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer bg-bottom ftco-no-pt" style="background:navy;color:white"
>
  <div class="container">
    <div class="row mb-5">
    <div class="col-md pt-5">
    <div class="ftco-footer-widget pt-md-5 mb-4">

        <div class="d-flex align-items-center mb-4">
            <h2 class="ftco-heading-2" style="color:white">About Archers Tours & Travel</h2>
        </div>
        <img src="/images/logo_medium_3-removebg-preview.png" alt="Archers Tours & Travel Logo" class="mr-3" style="width: 250px; height: 50px;">
        <br>
        <br>

        <p style="color:white">Discover unparalleled travel experiences with Archers Tours & Travel. From adventure-packed excursions to serene beach getaways, we bring you closer to your dream destinations.</p>
        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="https://www.facebook.com/ArchersToursandTravel"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="https://www.instagram.com/archerstourstravel/"><span class="fa fa-instagram"></span></a></li>
        </ul>
    </div>
</div>

      <div class="col-md pt-5 border-left">
    <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
        <h2 class="ftco-heading-2" style="color:white">Information</h2>
        <ul class="list-unstyled" style="color:white">
            @foreach ($categories as $category)
                <li><a href="{{ route('category.show', $category->id) }}" class="py-2 d-block" style="color:white">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
<div class="col-md pt-5 border-left">
    <div class="ftco-footer-widget pt-md-5 mb-4">
        <h2 class="ftco-heading-2" style="color:white">Have Questions?</h2>
        <div class="block-23 mb-3">
            <ul class="list-unstyled">
                <li style="color:white;">Peponi Plaza, Mwanzi Road - Westlands</li>
                <li style="color:white;">P.O. Box 437, 00606 Nairobi - Kenya - East Africa</li>
                <li><a href="#" style="color:white;">+254-20-3752472 / 0722394892</a></li>
                <li><a href="#" style="color:white;">archers@archerstours.com</a></li>
            </ul>
        </div>
    </div>
</div>


   <div class="col-md pt-5 border-left">
    <div class="ftco-footer-widget pt-md-5 mb-4">
        <h2 class="ftco-heading-2" style="color:white">Experiences</h2>
        <ul class="list-unstyled">
            <li><p class="py-2 d-block" style="color:white">Adventure Tours</p></li>
            <li><p class="py-2 d-block" style="color:white">Luxury Resorts</p></li>
            <li><p class="py-2 d-block" style="color:white">Beach Escapes</p></li>
            <li><p class="py-2 d-block" style="color:white">Nature Trails</p></li>
            <li><p class="py-2 d-block" style="color:white">Camping Trips</p></li>
            <li><p class="py-2 d-block" style="color:white">Event Planning</p></li>
        </ul>
    </div>
</div>
    </div>
 <div class="row">
  <div class="col-md-12 text-center">

  <p style="color:white">
      &copy; <script>document.write(new Date().getFullYear());</script> Archers Tours & Travel | All rights reserved | Powered  by <a href="https://donkraft.co.ke/" target="_blank" style="color:white"  >DONKRAFT IT SOLUTIONS LTD</a>
    </p>
  </div>
 </div>
</div>
</footer>


<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            },
            'google_translate_element'
        );
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<!-- Link JavaScript files in Laravel Blade template -->
<script src="{{ asset('pacific-main/js/jquery.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/popper.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('pacific-main/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('pacific-main/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('pacific-main/js/google-map.js') }}"></script>
<script src="{{ asset('pacific-main/js/main.js') }}"></script>

</body>
</html>
