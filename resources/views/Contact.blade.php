<!DOCTYPE html>
<html lang="en">
<head>
  <title>Archers Tours and Travel</title>
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

<script>
      (function(d){
         var s = d.createElement("script");
         /* uncomment the following line to override default position*/
         /* s.setAttribute("data-position", 1);*/
         /* uncomment the following line to override default size (values: small, large)*/
         /* s.setAttribute("data-size", "large");*/
         /* uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)*/
         /* s.setAttribute("data-language", "null");*/
         /* uncomment the following line to override color set via widget (e.g., #053f67)*/
         /* s.setAttribute("data-color", "#0048FF");*/
         /* uncomment the following line to override type set via widget (1=person, 2=chair, 3=eye, 4=text)*/
         /* s.setAttribute("data-type", "1");*/
         /* s.setAttribute("data-statement_text:", "Our Accessibility Statement");*/
         /* s.setAttribute("data-statement_url", "http://www.example.com/accessibility";*/
         /* uncomment the following line to override support on mobile devices*/
         /* s.setAttribute("data-mobile", true);*/
         /* uncomment the following line to set custom trigger action for accessibility menu*/
         /* s.setAttribute("data-trigger", "triggerId")*/
         s.setAttribute("data-account", "gER1tSTnfp");
         s.setAttribute("src", "https://cdn.userway.org/widget.js");
         (d.body || d.head).appendChild(s);})(document)
 </script>

<style>


.container{
    max-width: 1500px   ;
    width:100%;
}

    .hero-wrap {
    position: relative;
    height: 40vh; /* Reduced height to 60% of the viewport height */
    background-size: cover; /* Ensure the image covers the entire section */
    background-position: center center; /* Center the background image */
    background-repeat: no-repeat;
}

.hero-wrap .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Dark overlay for text readability */
}

.hero-wrap .slider-text {
    position: absolute;
    bottom: 0; /* Align text at the bottom */
    left: 50%;
    transform: translateX(-50%); /* Center text horizontally */
    color: #fff;
    z-index: 2;
}

.hero-wrap .breadcrumbs {
    font-size: 14px;
    margin-bottom: 10px;
}

.hero-wrap .bread {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.hero-wrap p {
    font-size: 1rem;
}
#userway-widget {
    position: fixed;
    bottom: 1rem; /* Move to the bottom */
    right: 1rem; /* Keep the distance from the right */
    z-index: 9999; /* Ensure it stays on top of everything */
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
					<li class="nav-item "><a href="/" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="/about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="/destination" class="nav-link">Destination</a></li>


					<li class="nav-item nav-item active"><a href="/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="/faqs" class="nav-link">FAQs</a></li>

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

 <section class="hero-wrap hero-wrap-2 " style="background-image: url('/images/slider-1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-0 bread">Contact us</h1>
     </div>
   </div>
 </div>
</section>
<section class="ftco-section ftco-no-pb contact-section mb-4">
  <div class="container">
    <div class="row d-flex contact-info">
      <div class="col-md-3 d-flex mb-4 mb-md-0">
        <div class="align-self-stretch box p-4 text-center" style="border-radius:30px;background:navy">
          <div class="icon d-flex align-items-center justify-content-center" style="background:orange">
            <span class="fa fa-map-marker"></span>
          </div>
          <h3 class="mb-2" style="color:orange">Address</h3>
          <p style="color:white">Peponi Plaza, Mwanzi Road - Westlands, P.O. Box 437, 00606 Nairobi - Kenya - East Africa</p>
        </div>
      </div>
      <div class="col-md-3 d-flex mb-4 mb-md-0">
        <div class="align-self-stretch box p-4 text-center" style="border-radius:30px;background:navy">
          <div class="icon d-flex align-items-center justify-content-center" style="background:orange">
            <span class="fa fa-phone"></span>
          </div>
          <h3 class="mb-2" style="color:orange">Contact Number</h3>
          <p><a href="tel://1234567920" style="color:white">Travel <br> 0720865455 <br> 0733964994 <br> TOURS <br> 0722394892</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex mb-4 mb-md-0">
        <div class="align-self-stretch box p-4 text-center" style="border-radius:30px;background:navy">
          <div class="icon d-flex align-items-center justify-content-center" style="background:orange">
            <span class="fa fa-paper-plane"></span>
          </div>
          <h3 class="mb-2" style="color:orange">Email Address</h3>
          <p><a href="mailto:archers@archersafrica.com" style="color:white">archers@archersafrica.com</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center" style="border-radius:30px;background:navy">
          <div class="icon d-flex align-items-center justify-content-center" style="background:orange">
            <span class="fa fa-globe"></span>
          </div>
          <h3 class="mb-2" style="color:orange">Website</h3>
          <p style="color:white"><a href="https://www.archersafrica.com/" style="color:white">www.archersafrica.com</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section ftco-no-pt">
  <div class="container">
    <div class="row block-9">

    <div class="col-md-6 order-md-last d-flex">


    <form id="contact-form" action="/send-email" method="POST" class="bg-light p-5 contact-form">
    @if(session('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>

    <script>
        // Set a timeout to hide the alert after 3 seconds
        setTimeout(function() {
            var alert = document.getElementById('success-alert');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 3000); // 3000 milliseconds = 3 seconds
    </script>
@endif
    @csrf
    <div class="form-group">
      <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
    </div>
    <div class="form-group">
      <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone (Optional)">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
    </div>
    <div class="form-group">
      <textarea cols="30" rows="7" class="form-control" id="message" name="content" placeholder="Message" required></textarea>
    </div>

    <div class="form-group">
      <input type="submit" value="Send Message" class="btn py-3 px-5" style="background:orange;color:white">
    </div>
</form>

</div>


      <!-- Google Map Embed -->
      <div class="col-md-6 d-flex">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.859280151522!2d36.80005507496546!3d-1.2562849987317548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17690ae55bb1%3A0x4aa33405dde53f97!2sArchers%20Tours%20%26%20Travel%20Ltd!5e0!3m2!1sen!2ske!4v1731278264911!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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



</body>
</html>
