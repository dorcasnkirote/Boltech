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
<script src="https://cdn.userway.org/widget.js" data-account="gER1tSTnfp"></script>


<style>





        @media (min-width: 460px) {
            .slider__item {
                aspect-ratio: 0.6666666667;
                min-width: calc((100% / 2) - 2rem);
            }
        }

        @media (min-width: 940px) {
            .slider__item {
                min-width: calc((100% / 3) - 4rem);
            }
        }

        .slider__image {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .slider__info {
            position: relative;
            padding: 4rem 2rem 2rem;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.75), rgba(32, 50, 57, 0));
        }

        .slider__info h2 {
            color: #fff;
            font-family: system-ui;
            line-height: 1.1;
            font-weight: 300;
            font-size: 1.75rem;
            margin: 0;
        }

        .slider__nav {
            margin: 1rem 0 4rem;
            width: 100%;
            padding: 0;
            display: flex;
            justify-content: flex-start;
            gap: 1rem;
            align-content: center;
            align-items: center;
            pointer-events: none;
        }

        @media (min-width: 460px) {
            .slider__nav {
                justify-content: flex-end;
            }
        }

        .slider__nav__button {
            margin: 0;
            appearance: none;
            border: 0;
            border-radius: 2rem;
            background: #fff;
            color: #203239;
            padding: 0.5rem 1rem;
            font-size: 0.75rem;
            line-height: 1;
            pointer-events: none;
            transition: 0.2s ease-out;
            opacity: 0.25;
        }

        .slider__nav__button--active {
            opacity: 1;
            pointer-events: auto;
            cursor: pointer;
        }


        .marquee-content {
            display: inline-flex;
            animation: scroll 20s linear infinite;
        }

        .partner-logo {
            height: 60px;
            margin: 0 30px;
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }


            .image {
                transform: rotate(-5deg);
                position: absolute;
                top: 0.5em;
                right: 1.5em;

                img {
                    border: 10px solid #fff;
                    margin: 0;
                    padding: 0;
                }

                .clip {
                    border: 2px solid #222;
                    border-right: none;
                    height: 75px;
                    width: 20px;
                    position: absolute;
                    right: 30%;
                    top: -15%;
                    border-radius: 25px;

                    &:before {
                        content: "";
                        position: absolute;
                        top: -1px;
                        right: 0;
                        height: 10px;
                        width: 16px;
                        border: 2px solid #222;
                        border-bottom: none;
                        border-top-left-radius: 25px;
                        border-top-right-radius: 25px;
                        z-index: 99;
                    }

                    &:after {
                        content: "";
                        position: absolute;
                        bottom: -1px;
                        right: 0;
                        height: 40px;
                        width: 16px;
                        border: 2px solid #222;
                        border-top: none;
                        border-bottom-left-radius: 25px;
                        border-bottom-right-radius: 25px;
                        z-index: 99;
                    }
                }
            }



.learn-more-btn {
    text-decoration: none;
    color: #fff;
    background-color: #5a67d8;
    padding: 12px 24px;
    border-radius: 5px;
    font-size: 1rem;
    transition: background-color 0.3s;
    opacity: 0;
    animation: fadeInUp 2s forwards;
    animation-delay: 1s;
}

.learn-more-btn:hover {
    background-color: #4c51bf;
}

.images-gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
    margin-top: 40px;
}

.intro-image {
    width: 200px;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.4s ease;
    animation: fadeIn 1.5s ease-in-out;
}

.intro-image:hover {
    transform: scale(1.1) rotate(2deg);
}

/* Fade-in animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.container{
    max-width: 1500px   ;
    width:100%;
}


.box {
  display: flex;
  flex-direction: column;
  flex-basis: 100%;
  position: relative;
  padding: 24px;
  background: #fff;
}

.box-top {
  display: flex;
  flex-direction: column;
  position: relative;
  gap: 12px;
  margin-bottom: 36px;
}

.box-image {
  width: 100%;
  height: 360px;
  object-fit: cover;
  object-position: 50% 20%;
}

.title-flex {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.box-title {
  border-left: 3px solid var(--purple);
  padding-left: 12px;
}

.user-follow-info {
  color: hsl(0, 0%, 60%);
}

.button {
  display: block;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin-top: auto;
  padding: 16px;
  color:white;
  background:navy;
  box-shadow: 0px 0px 0px 1px black inset;
  transition: background 0.4s ease;
  border-radius: 30px;
}

.button:hover {
  background:orange;
}
/* RESPONSIVE QUERIES */

@media (min-width: 320px) {
  .title-flex {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: start;
  }
  .user-follow-info {
    margin-top: 6px;
  }
}

@media (min-width: 460px) {
  .title-flex {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: start;
  }
  .user-follow-info {
    margin-top: 6px;
  }
}

@media (min-width: 640px) {
  .box {
    flex-basis: calc(50% - 12px);
  }
  .title-flex {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: start;
  }
  .user-follow-info {
    margin-top: 6px;
  }
}

@media (min-width: 840px) {
  .title-flex {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: start;
  }
  .user-follow-info {
    margin-top: 6px;
  }
}

@media (min-width: 1024px) {
  .box {
    flex-basis: calc(33.3% - 16px);
  }
  .title-flex {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: start;
  }
  .user-follow-info {
    margin-top: 6px;
  }
}

@media (min-width: 1100px) {
  .box {
    flex-basis: calc(25% - 18px);
  }
}
@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.swiper {
    width: 100%;
    height: auto;
  }

  .hero-wrap {
    position: relative;
    height: 50vh; /* Reduced height to 60% of the viewport height */
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
					<li class="nav-item "><a href="/" class="nav-link" >Home</a></li>
					<li class="nav-item"><a href="/about" class="nav-link">About</a></li>
					<li class="nav-item active"><a href="/destination" class="nav-link" >Destination</a></li>

					<li class="nav-item"><a href="/contact" class="nav-link" >Contact</a></li>

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

                    <li class="nav-item"><a href="/login" class="nav-link" >Account</a></li>

				</ul>
			</div>
		</div>
	</nav>

    <section class="hero-wrap hero-wrap-2 " style="background-image: url('/images/50-facts-about-tanzania-1688354960.jpeg');">
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


<section class="container mt-4">
  <div class="swiper mySwiper" style="background:white">
  <h1 class="text-center">Explore our various Tours</h1>
    <div class="swiper-wrapper">
      @foreach ($tours as $tour)
      <div class="swiper-slide">
        <div class="box transition duration-500 ease-in-out hover:scale-105 hover:shadow-lg opacity-0 animate-fade-in">
          <div class="box-top">
            <img class="box-image" src="{{ asset('storage/' . $tour->image) }}" alt="{{ $tour->name }}" style="border-radius:30px">
            <div class="title-flex">
              <h3 class="box-title">{{ $tour->name }}</h3>
              <p class="user-follow-info">Tour</p>
            </div>
            <!-- Truncate the description -->
            <p class="description">{!! Str::limit($tour->description, 0)  !!}</p>

          <a href="/tour/{{ $tour->id }}" class="text-orange-500 font-semibold text-sm hover:underline flex items-center">
                Read More

            </a>
          </div>

          <!-- "Read More" button -->
          <!-- "View Tours" button -->
          <a href="/package/{{ $tour->id }}" class="button">View Available Packages</a>        </div>
      </div>
      @endforeach
    </div>
    <!-- Slider navigation buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

<br>

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

<script>
document.addEventListener("DOMContentLoaded", function() {
    const fetchTours = (destinationId = null, search = '') => {
        $.ajax({
            url: '/destination',
            type: 'GET',
            data: {
                destination_id: destinationId,
                search: search,
            },
            success: function(response) {
                let toursHtml = '';
                response.forEach(tour => {
                    toursHtml += `
                        <div class="col-md-4 ftco-animate">
                            <div class="project-wrap">
                                <a href="#" class="img" style="background-image: url(images/${tour.image});">
                                    <span class="price">$${tour.price}/person</span>
                                </a>
                                <div class="text p-4">
                                    <span class="days">${tour.duration} Days Tour</span>
                                    <h3><a href="#">${tour.name}</a></h3>
                                    <p class="location"><span class="fa fa-map-marker"></span> ${tour.location}</p>
                                    <ul>
                                        <li><span class="flaticon-shower"></span> ${tour.amenity_1}</li>
                                        <li><span class="flaticon-king-size"></span> ${tour.amenity_2}</li>
                                        <li><span class="flaticon-mountains"></span> ${tour.amenity_3}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    `;
                });
                $('#tours-list').html(toursHtml);
            }
        });
    };

    // Event listeners for search and destination selection
    $('#destination-select').on('change', function() {
        fetchTours(this.value, $('#search-input').val());
    });

    $('#search-input').on('keyup', function() {
        fetchTours($('#destination-select').val(), this.value);
    });
});
</script>

    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper('.mySwiper', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      640: {
        slidesPerView: 1, // Mobile devices will show 1 slide
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2, // Tablets will show 2 slides
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3, // Larger screens will show 3 slides
        spaceBetween: 30,
      },
    },
  });
</script>


</body>
</html>
