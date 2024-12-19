<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('pacific-main/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/jquery.timepicker.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('pacific-main/css/style.css') }}">
<script src="https://cdn.userway.org/widget.js" data-account="gER1tSTnfp"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
    <img src="{{ asset('/images/logo_medium_3-removebg-preview.png') }}" alt="Pacific Travel Agency" style="height: 40px;">
</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="/" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="/about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="/destination" class="nav-link">Destination</a></li>
					<li class="nav-item"><a href="/tours" class="nav-link">Tours</a></li>
					<li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="/login" class="nav-link">login</a></li>

				</ul>
			</div>
		</div>
	</nav>
 <!-- END nav -->

 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('pacific-main/images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Blog</h1>
     </div>
   </div>
 </div>
</section>
<section class="ftco-section">
  <div class="container">
    <div class="row d-flex">
      @foreach($blogs as $blog)
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <a href="{{ url('blog/' . $blog->id) }}" class="block-20" style="background-image: url('{{ asset('storage/' . $blog->image) }}');">
            </a>
            <div class="text">
              <div class="d-flex align-items-center mb-4 topp" style="background:orange">
                <div class="one">
                  <span class="day">{{ $blog->created_at->format('d') }}</span>
                </div>
                <div class="two">
                  <span class="yr">{{ $blog->created_at->format('Y') }}</span>
                  <span class="mos">{{ $blog->created_at->format('F') }}</span>
                </div>
              </div>
              <h3 class="heading"><a href="{{ url('blog/' . $blog->id) }}">{{ $blog->title }}</a></h3>
              <p><a href="{{ url('blog/' . $blog->id) }}" class="btn"  style="background:orange;color:white">Read more</a></p>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <!-- Pagination -->
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          {{ $blogs->links() }}  <!-- Pagination links -->
        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-intro ftco-section ftco-no-pt">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12 text-center">
    <div class="img"  style="background-image: url(pacific-main/images/bg_2.jpg);">
     <div class="overlay"></div>
     <h2>We Are Archers Tours & Travel</h2>
                    <p>We can help you plan your dream safari and travel adventures in Africa, ensuring a once-in-a-lifetime experience with expert guides and personalized itineraries.</p>

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
          <h2 class="ftco-heading-2" style="color:white">About Archers Tours & Travel</h2>
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
            <li><a href="#" class="py-2 d-block" style="color:white">Online Enquiry</a></li>
            <li><a href="#" class="py-2 d-block" style="color:white">General Enquiries</a></li>
            <li><a href="#" class="py-2 d-block" style="color:white">Booking Conditions</a></li>
            <li><a href="/contact" class="py-2 d-block" style="color:white">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md pt-5 border-left">
       <div class="ftco-footer-widget pt-md-5 mb-4">
        <h2 class="ftco-heading-2" style="color:white">Experiences</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block" style="color:white">Adventure Tours</a></li>
          <li><a href="#" class="py-2 d-block" style="color:white">Luxury Resorts</a></li>
          <li><a href="#" class="py-2 d-block" style="color:white">Beach Escapes</a></li>
          <li><a href="#" class="py-2 d-block" style="color:white">Nature Trails</a></li>
          <li><a href="#" class="py-2 d-block"  style="color:white">Camping Trips</a></li>
          <li><a href="#" class="py-2 d-block" style="color:white">Event Planning</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md pt-5 border-left">
      <div class="ftco-footer-widget pt-md-5 mb-4">
       <h2 class="ftco-heading-2" style="color:white">Have Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
           <li><span class=" fa fa-map-marker mr-4" style="color:orange;"></span><span style="color:white" class="mr-4">Peponi Plaza, Mwanzi Road - Westlands</span></li>
           <li><span class=" fa fa-map-marker mr-4" style="color:orange"></span><span style="color:white"> P.O. Box 437, 00606 Nairobi - Kenya - East Africa</span></li>

           <li><a href="#" ><span class=" fa fa-phone mr-4" style="color:orange"></span><span  style="color:white">+254-20-3752472 /0722394892</span></a></li>
           <li><a href="#"><span class=" fa fa-paper-plane mr-4" style="color:orange"></span><span style="color:white">archers@archerstours.com</span></a></li>
         </ul>
       </div>
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




<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

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
