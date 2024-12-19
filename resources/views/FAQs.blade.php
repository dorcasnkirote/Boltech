<!DOCTYPE html>
<html lang="en">
<head>
  <title>Archers Tours and Travel - FAQs</title>
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
  <style>
    .faq-section {
      padding: 50px 0;
      background-color: #f8f8f8;
    }
    .faq-section .faq-header {
      text-align: center;
      margin-bottom: 40px;
    }
    .faq-section .faq-header h2 {
      font-size: 36px;
      color: #333;
    }
    .faq-item {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      padding: 20px;
      transition: background-color 0.3s ease;
    }
    .faq-item:hover {
      background-color: #f1f1f1;
    }
    .faq-item h4 {
      font-size: 20px;
      color: #333;
      margin-bottom: 10px;
    }
    .faq-item p {
      font-size: 16px;
      color: #666;
    }


    .hero-wrap {
    position: relative;
    height: 40vh; /* Reduced height to 40% of the viewport height */
    background-size: cover; /* Ensure the image covers the section */
    background-position: center center; /* Center the background image */
    background-repeat: no-repeat;
}


.container{
    max-width: 1500px   ;
    width:100%;
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
  </style>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('/images/logo_medium_3-removebg-preview.png') }}" alt="Archers Tours and Travel" style="height: 40px;">
      </a>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/destination" class="nav-link">Destination</a></li>
          <li class="nav-item "><a href="/contact" class="nav-link">Contact</a></li>
          <li class="nav-item active"><a href="/faqs" class="nav-link">FAQs</a></li>


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


 <section class="hero-wrap hero-wrap-2 " style="background-image: url('/images/travel-agent-offering-trip-planning-clients.jpg');">
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

<!-- FAQ Section -->
<section class="faq-section">
  <div class="container">
    <div class="faq-header">
      <h2>Frequently Asked Questions</h2>
      <p>Find answers to commonly asked questions about our services, bookings, and travel tips.</p>
    </div>

    <!-- FAQ Items -->
    <div class="faq-item">
      <h4>1. What is the best time to visit (destination)?</h4>
      <p>The best time to visit depends on your preferences for weather and activities. For example, if you're visiting Africa, the best time to visit is between July and September. This gives you an opportunity to view the wildebeest migration. If you want fewer crowds, then January to April would be ideal.</p>
    </div>

    <div class="faq-item">
      <h4>2. Do you offer guided tours?</h4>
      <p>Yes, we offer both guided and self-guided tours. Our guided tours are led by experienced local guides who provide insightful knowledge and ensure a seamless experience. We also offer customized tours for those who prefer exploring independently but with some local expertise. Let us know your preference!</p>
    </div>

    <div class="faq-item">
      <h4>3. How much will the trip cost?</h4>
      <p>The cost of the trip can vary based on the destination, duration, type of tour (group vs. private), and the services included (e.g., accommodations, meals, transportation). We can provide a tailored quote based on your specific travel dates, group size, and preferences.</p>
    </div>

    <div class="faq-item">
      <h4>4. Are flights included in the package?</h4>
      <p>Most of our travel packages do not include international flights unless specified. However, we can help you book flights or provide advice on the best routes and airlines. Some packages may include domestic flights, depending on the destination and tour.</p>
    </div>

    <div class="faq-item">
      <h4>5. What kind of accommodation is included?</h4>
      <p>We offer a range of accommodations to suit different budgets, from budget hostels to luxury resorts. The type of accommodation will depend on the tour package you choose. We can also customize your itinerary to fit your accommodation preferences.</p>
    </div>

    <div class="faq-item">
      <h4>6. Are meals included in the tour package?</h4>
      <p>Meal inclusions vary by tour. Some tours include breakfast, lunch, and/or dinner (Full Board - FB), while others offer a more flexible approach, allowing you to explore local dining options on your own. We'll provide the full details for your chosen tour.</p>
    </div>

    <div class="faq-item">
      <h4>7. What should I pack for the trip?</h4>
      <p>Packing lists depend on the destination and the activities planned. We provide detailed packing recommendations for each tour, which include essential items such as clothing suitable for the climate, toiletries, any necessary medications, and specific items for activities like hiking gear, swimwear, or formal attire.</p>
    </div>

    <div class="faq-item">
      <h4>8. How do I make a reservation?</h4>
      <p>To make a reservation, simply contact us with your desired tour dates and package, and we'll provide you with booking details. We require a deposit to confirm your booking, and the balance is due before departure. Our team will guide you through the entire booking process.</p>
    </div>

    <div class="faq-item">
      <h4>9. Can I customize my tour itinerary?</h4>
      <p>Absolutely! We offer customized tours tailored to your interests, whether you want to focus on history, adventure, culture, or relaxation. Our team will work with you to create a personalized itinerary based on your preferences, time frame, and budget.</p>
    </div>

    <div class="faq-item">
      <h4>10. What happens if I need to cancel or change my booking?</h4>
      <p>We understand that plans can change. Our cancellation and amendment policies vary depending on the tour package and timing of your request. We recommend purchasing travel insurance for flexibility in case of unexpected changes. Please reach out to us for specific details related to your booking.</p>
    </div>

    <div class="faq-item">
      <h4>11. Do I need travel insurance?</h4>
      <p>While travel insurance is not mandatory, it is highly recommended. Travel insurance can cover unexpected situations like trip cancellations, medical emergencies, lost luggage, and more. We can help you find suitable options based on your needs.</p>
    </div>

    <div class="faq-item">
      <h4>12. How can I contact you during my trip if I need assistance?</h4>
      <p>We provide 24/7 support during your trip. You’ll have access to a local contact number, and we also offer an emergency contact number. If you need help, don’t hesitate to reach out to our team, and we’ll assist you right away.</p>
    </div>

    <div class="faq-item">
      <h4>13. What are the payment options for booking a tour?</h4>
      <p>We accept various payment methods, including credit/debit cards, bank transfers, and in some cases, PayPal. Full payment is usually required a few weeks before the tour starts, depending on the package. Our team will provide you with the available payment options when confirming your booking.</p>
    </div>

    <div class="faq-item">
      <h4>14. Can I travel solo on your tours?</h4>
      <p>Yes, many of our tours are perfect for solo travelers. We also offer small-group tours where you can meet like-minded travelers, or you can opt for a private tour if you prefer more personal attention. Solo travelers are always welcome!</p>
    </div>

    <div class="faq-item">
      <h4>15. What happens if I miss a tour activity or transfer?</h4>
      <p>We understand that travel disruptions can happen. If you miss a tour activity or transfer, please inform us as soon as possible, and we will do our best to accommodate you on the next available option. Additional fees may apply in some cases, depending on the nature of the disruption.</p>
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


  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
