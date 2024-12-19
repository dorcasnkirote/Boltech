<!DOCTYPE html>
<html lang="en">
<head>
	<title>Boltech</title>
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


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




  .navbar-nav .nav-link {
    font-size: 0.9rem; /* Slightly smaller font */
    color:black;
  }
  .navbar-nav .dropdown-menu {
    font-size: 0.9rem; /* Match dropdown font size */
  }

  /* Responsive adjustment for smaller screens */
  @media (max-width: 992px) {
    .navbar-nav {
      flex-direction: column; /* Stack items vertically on smaller screens */
    }
    .navbar-nav .nav-item {
      padding: 5px 0; /* Reduce padding for mobile */
    }
  }

  .modal-content {
        background: linear-gradient(135deg, orange, orange);
        color:white;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
    }

    /* Header and logo */
    .modal-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding-bottom: 10px;
    }

    .modal-logo {
        width: 40px;
        height: 40px;
        margin-right: 10px;
        border-radius: 50%;
    }

    .modal-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    /* Close button styling */
    .close {
        color: #fff;
        opacity: 1;
    }

    /* Form input and button styling */
    .form-group label {
        color:white;
        font-weight: bold;
    }

    .form-control {
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color:white;
    }

    .form-control::placeholder {
        color: #ddd;
    }

    .form-control:focus {
        background: rgba(255, 255, 255, 0.3);
        border-color: #ffd700;
        box-shadow: 0 0 0 0.2rem rgba(255, 215, 0, 0.25);
    }

    /* Submit button styling */
    .btn-submit {
        background-color:navy;
        color:white;
        border: none;
        font-weight: bold;
        width:100%;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-submit:hover {
        color:white;
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
        .modal-content {
            padding: 15px;
        }
        .modal-title {
            font-size: 1.3rem;
        }
    }

    .background-image-container {
        position: relative;
        background-size: cover;
        background-position: center;
        height: 100vh; /* Adjust height as needed */
    }

    .background-image-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.4); /* Adjust the color and opacity as needed */
        z-index: 1;
    }

    /* Ensures content appears above the dimmed background */
    .background-image-container > * {
        position: relative;
        z-index: 2;
        color: white; /* Optional, makes text easier to read on dark overlay */
    }

    .hero-wrap {
    position: relative;
    width: 100%;
    height: 100vh; /* Full height */
    overflow: hidden;
}

.hero-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensure the video covers the full background without distortion */
    z-index: -1; /* Ensure the video is behind the content */

}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Optional dark overlay to enhance text visibility */
    z-index: 1; /* Place the overlay above the video but below the text */
}

.container {
    position: relative;
    z-index: 2; /* Ensure text content is on top */
    color: #fff; /* White text for visibility */
}

.slider-text {
    padding: 60px 0;
    text-align: left;
}

.subheading {
    font-size: 34px;
    font-weight: bold;
}

h1.mb-4 {
    font-size: 48px; /* Customize font size for better visibility */
    font-weight: bold;
}

.caps {
    text-transform: uppercase;
    font-size: 20px;
}

p{
    color:black;
}

 /* Styling the blog entry container */
 .blog-entry {
        width: 100%;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    /* Ensuring the image inside the block-20 takes up enough space */
    .block-20 {
        width: 100%;
        height: 350px; /* Adjust height to make the image more prominent */
        background-size: cover;
        background-position: center;
    }

    /* Adjusting padding and margins for text inside the card */
    .blog-entry .text {
        padding: 20px; /* Increase padding for more spacious content */
    }

    .blog-entry h3 a {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
        text-decoration: none;
    }

    .blog-entry h3 a:hover {
        color: #ff5733; /* Change color on hover */
    }

    .blog-entry .btn {
        background-color: orange;
        color: white;
        padding: 12px 25px;
        border-radius: 5px;
        font-size: 1rem;
        text-transform: uppercase;
        transition: background-color 0.3s;
    }

    .blog-entry .btn:hover {
        background-color: #ff5733; /* Darken the button color on hover */
    }

    .carousel-destination {
    display: flex;
    justify-content: space-around; /* Distribute items evenly across the center */
    flex-wrap: wrap;
    margin: 0 -10px; /* Reset margin for better spacing */
}

.carousel-destination .item {
    flex: 1 1 calc(33.333% - 20px); /* Adjust width and spacing */
    margin: 10px; /* Space between items */
}

.nav-item {
    color:black;
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
                <li class="nav-item mr-4"><a href="#" class="nav-link" style="color: white;">Contact</a></li>
                <li class="nav-item mr-4"><a href="/login" class="nav-link" style="color: white;">Account</a></li>
            </ul>
        </div>
    </div>
</nav>

	<!-- END nav -->



    <section class="ftco-section services-section">
    <div class="container">
        <div class="row d-flex">
            <!-- Left Side Heading -->
            <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                <div class="w-100">
                    <span class="subheading" style="color:#0078D7; font-weight: bold;">Welcome to Boltech</span>
                    <h2 class="mb-4" style="color: navy; font-weight: bold;">Secure Your Digital Future with Us</h2>
                    <p style="line-height: 1.8;">
                        Boltech is a leading cybersecurity company dedicated to providing cutting-edge security solutions and training.
                        With years of expertise, we offer top-tier consulting, advisory services, and workshops to combat modern
                        cyber threats and help businesses and individuals secure their online presence.
                    </p>
                    <p>
                        <a href="/services" class="btn py-3 px-4" style="background:#0078D7; color:white; border-radius:30px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">Explore Our Services</a>
                    </p>
                </div>
            </div>

            <!-- Right Side Cybersecurity Services -->
            <div class="col-md-6">
                <div class="row">
                    <!-- Cyber Threat Management -->
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 d-block" style="border-radius: 30px; background:#1E1E2E; color:#FFFFFF; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); transition: all 0.3s ease-in-out;">
                            <div class="media-body">
                                <h3 class="heading mb-3" style="color:#00BFAE; font-weight: bold;">Cyber Threat Management</h3>
                                <ul>
                                    <li>Threat detection, monitoring, and analysis</li>
                                    <li>Incident response and threat mitigation</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Security Awareness Training -->
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 d-block" style="border-radius: 30px; background:#2C2F33; color:#FFFFFF; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); transition: all 0.3s ease-in-out;">
                            <div class="media-body">
                                <h3 class="heading mb-3" style="color:#FF9800; font-weight: bold;">Security Awareness Training</h3>
                                <ul>
                                    <li>Workshops on phishing, malware, and ransomware prevention</li>
                                    <li>Employee training for secure digital practices</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Network Security Solutions -->
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 d-block" style="border-radius: 30px; background:#3D4451; color:#FFFFFF; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); transition: all 0.3s ease-in-out;">
                            <div class="media-body">
                                <h3 class="heading mb-3" style="color:#F44336; font-weight: bold;">Network Security Solutions</h3>
                                <ul>
                                    <li>Firewall implementation and network monitoring</li>
                                    <li>VPN setup for secure remote access</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Penetration Testing & Auditing -->
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                        <div class="services services-1 d-block" style="border-radius: 30px; background:#121212; color:#FFFFFF; overflow: hidden; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); transition: all 0.3s ease-in-out;">
                            <div class="media-body">
                                <h3 class="heading mb-3" style="color:#4CAF50; font-weight: bold;">Penetration Testing & Auditing</h3>
                                <ul>
                                    <li>Vulnerability assessment and penetration testing</li>
                                    <li>Compliance audits for cybersecurity frameworks</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Row -->
            </div>
        </div>
    </div>
</section>

<section class="ftco-section img ftco-select-destination" style="background-image: url('images/bg_tech.jpg'); background-size: cover;">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span  style="color:#ff9800;">Explore Our Topics</span>
                <h2 class="mb-4" style="color: navy;">Select Your Topic of  Interest</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($topics as $topic)
                <div class="col-md-4 ftco-animate">
                    <div class="project-destination">
                        <a href="{{ route('topics.show', $topic->id) }}" class="img" style="background-image: url('/images/Cybersecurity-Month-TI-Blue-1920x1080-01.png'); border-radius: 20px; background-size: cover; background-position: center; height: 300px;">
                            <div class="text" style="background: rgba(0, 0, 0, 0.6); padding: 15px; border-radius: 0 0 20px 20px;">
                                <h3 style="color:black;">{{ $topic->name }}</h3>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
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



<script>
$('#quoteForm').on('submit', function(e) {
    e.preventDefault();

    var userName = $('#userName').val();
    var userEmail = $('#userEmail').val();
    var userPhone = $('#userPhone').val();
    var userMessage = $('#userMessage').val();

    // Send the data to the server using AJAX
    $.ajax({
        type: 'POST',
        url: '/send-quote-request', // Laravel route to handle email sending
        data: {
            name: userName,
            email: userEmail,
            phone: userPhone,
            message: userMessage,
            _token: '{{ csrf_token() }}' // CSRF token for Laravel
        },
        success: function(response) {
            alert('Your quote request has been submitted successfully!');
            $('#quoteModal').modal('hide');
        },
        error: function() {
            alert('An error occurred. Please try again.');
        }
    });
});
</script>


<script>

    $(document).ready(function () {
        // Check if the modal has been seen
        if (!localStorage.getItem('welcomeModalSeen')) {
            // Show the modal after 2 seconds
            setTimeout(function () {
                $('#welcomeModal').modal('show');
            }, 2000);

            // Set localStorage when the modal is shown
            $('#welcomeModal').on('shown.bs.modal', function () {
                localStorage.setItem('welcomeModalSeen', 'true');
            });
        }
    });
</script>


<script src="https://cdn.userway.org/widget.js" data-account="gER1tSTnfp"></script>


		</body>
		</html>
