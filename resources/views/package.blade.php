<!doctype html>
<html lang="en">

<head>
    <title>Archer's Tours and Travel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Poppins -->

    <!-- Other Stylesheets -->
    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Other Stylesheets -->
    <link rel="stylesheet" href="{{ asset('Template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Template/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('Template/css/style.css') }}">
    <script src="https://cdn.userway.org/widget.js" data-account="gER1tSTnfp"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        .partners-marquee {
            overflow: hidden;
            white-space: nowrap;
            display: flex;
            align-items: center;
            position: relative;
        }


        title {
            font-size: 2.5rem;
            font-family: system-ui;
            line-height: 1.1;
            font-weight: 300;
            color: #fff;
            margin: 4rem auto 1rem;
            width: 85%;
            max-width: 1280px;
        }

        .slider {
            width: 85%;
            max-width: 1280px;
            margin: 0 auto;
        }

        .slider__content {
            overflow-x: scroll;
            scroll-snap-type: x mandatory;
            display: flex;
            gap: 1rem;
            padding-bottom: 1rem;
            scrollbar-color: var(--scrollcolor) var(--scrollbackground);
        }

        .slider__content::-webkit-scrollbar {
            height: 0.5rem;
            width: 0.8rem;
            border-radius: 1rem;
            background: var(--scrollbackground);
        }

        .slider__content::-webkit-scrollbar-thumb {
            border-radius: 1rem;
            background: var(--scrollcolor);
        }

        .slider__content::-webkit-scrollbar-track {
            border-radius: 1rem;
            background: var(--scrollbackground);
        }

        .slider__item {
            scroll-snap-align: start;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            min-width: 100%;
            width: 100%;
            border-radius: 1.25rem;
            overflow: hidden;
            position: relative;
            aspect-ratio: 1;
        }

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

        .social-icons a {
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #f4a261;
            /* Change to the desired hover color */
        }

        .testimonial-row {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .testimonial {
            flex: 1 1 30%;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            max-width: 320px;
        }

        .testimonial .quote {
            font-size: 2rem;
            color: #f4a261;
        }

        .testimonial .open {
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .testimonial .close {
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .testimonial .image {
            position: relative;
            width: 80px;
            height: 80px;
            margin-bottom: 15px;
        }

        .testimonial .image img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .testimonial p {
            font-size: 14px;
            color: #333;
        }


        @media (max-width: 768px) {
            .testimonial-row {
                flex-direction: column;
            }

            .testimonial {
                max-width: 100%;
            }
        }


        .testimonial {
            width: 500px;
            display: flex;
            max-width: 100%;
            background: orange;
            padding: 4em 3em;
            display: flex;
            align-items: flex-end;
            position: relative;
            box-shadow: 0 2px 2px hsl(0deg 0% 0%/.075), 0 3px 3px hsl(0deg 0% 0%/.075), 0 5px 5px hsl(0deg 0% 0%/.075), 0 9px 9px hsl(0deg 0% 0%/.075), 0 17px 17px hsl(0deg 0% 0%/.075);
            position: relative;

            &:after {
                content: "";
                border: 8px solid navy;
                border-radius: 50px;
                width: 85%;
                height: 120%;
                position: absolute;
                z-index: -1;
                left: 1.5em;
                top: -2em;
            }

            &:before {
                content: "";
                position: absolute;
                bottom: -6.2em;
                left: 5em;
                z-index: 1;
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 70px 100px 0 0;
                border-color: navy transparent transparent transparent;
            }

            .quote {
                position: absolute;
                font-size: 3em;
                width: 40px;
                height: 40px;
                background: navy;
                color: #fff;
                text-align: center;
                line-height: 1.25;

                &.open {
                    top: 0;
                    left: 0;
                }

                &.close {
                    bottom: 0;
                    right: 0;
                }
            }

            p {
                width: 60%;
                display: inline-block;
                font-weight: bold;
                font-size: 1.25em;
            }

            .source {
                width: 40%;
                height: 100%;
                position: relative;

                span {
                    display: inline-block;
                    font-weight: bold;
                    font-size: 1.15em;
                    position: relative;
                    margin-left: 1rem;
                    text-align: right;

                    &:before {
                        content: "\2014";
                        display: inline;
                        margin-right: 5px;
                    }
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
        }


        .introduction-section {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 50px;
    text-align: center;
    overflow: hidden;
}

.intro-content {
    flex: 1 1 100%;
    padding: 20px;
    animation: fadeIn 1.5s ease-in-out;
}

.intro-content h2 {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 20px;
    opacity: 0;
    animation: fadeInUp 1s forwards;
}

.intro-content p {
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 30px;
    line-height: 1.5;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    opacity: 0;
    animation: fadeInUp 1.5s forwards;
    animation-delay: 0.5s;
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


h3 {
  font-size: 1.5em;
  font-weight: 700;
}

p {
  font-size: 1em;
  line-height: 1.7;
  font-weight: 300;
  color: var(--text-gray);
}

.description {
  white-space: wrap;
}

a {
  text-decoration: none;
  color: inherit;
}

.wrap {
  display: flex;
  justify: space-between;
  align-items: stretch;
  width: 100%;
  gap: 24px;
  padding: 24px;
  flex-wrap: wrap;
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

.fill-one {
  background: var(--light-bg);
}

.fill-two {
  background: var(--pink);
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

.animate-fade-in {
  animation: fadeIn 1s ease-out forwards;
}
.swiper {
    width: 100%;
    height: auto;
  }

  /* Style adjustments for the destination box */
  .box {
    padding: 16px;
    border-radius: 10px;
    background-color: #fff;
  }

  /* Responsive text truncation */
  .description {
    display: -webkit-box;
    -webkit-line-clamp: 3; /* Limits to 3 lines */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  .modal-body p {
    margin-bottom: 1em; /* Adjust spacing as needed */
  }


  .modal-content {
    border-radius: 8px;
}

.modal-header {
    background-color:navy; /* Navy Blue */
    color: white;
}

.modal-title {
    font-weight: bold;
}

.modal-body {
    background-color:orange; /* Orange */
    color: #333; /* Dark text color */
}



.btn-primary {
    background-color:navy; /* Orange button */
    border-color: #F4A261;
    color:white;
}

.btn-primary:hover {
    background-color: #E76F51; /* Darker Orange for button hover effect */
}


    </style>
</head>

<body>


 <!-- Package List with Swiper -->
 <section class="container mt-4">

 <a class="button" href="/destination">back to all destination</a>
 <br>
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      @foreach ($packages as $package)
        <div class="swiper-slide">
          <div class="box transition duration-500 ease-in-out hover:scale-105 hover:shadow-lg opacity-0 animate-fade-in">
            <div class="box-top">
              <img class="box-image" src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->name }}" style="border-radius:30px">
              <div class="title-flex">
                <h3 class="box-title">{{ $package->name }}</h3>
                <p class="user-follow-info">Package</p>
              </div>
              <p class="description">{!! Str::limit($package->description, 100, '...') !!}</p>

              <!-- Read More Button linked to modal -->
              <button class="text-orange-500 font-semibold text-sm hover:underline flex items-center" data-bs-toggle="modal" data-bs-target="#packageModal{{ $package->id }}">
                Read More
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
              </button>
              <br>

              <!-- Make an Enquiry Button linked to modal -->
              <a class="button" style="color:white" data-bs-toggle="modal" data-bs-target="#enquiryModal{{ $package->id }}">Make An Enquiry</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <!-- Slider navigation buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

<!-- Modal Dialogs Outside the Loop -->
@foreach ($packages as $package)
  <!-- Modal for Full Description -->
  <div class="modal fade" id="packageModal{{ $package->id }}" tabindex="-1" aria-labelledby="packageModalLabel{{ $package->id }}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="packageModalLabel{{ $package->id }}">{{ $package->name }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p style="color:white">{!! $package->description !!}</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal for Enquiry Form -->
<div class="modal fade" id="enquiryModal{{ $package->id }}" tabindex="-1" aria-labelledby="enquiryModalLabel{{ $package->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="enquiryModalLabel{{ $package->id }}" style="color: white;">Enquiry for {{ $package->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('send.enquiry') }}" method="POST">
                    @csrf <!-- CSRF Token -->
                    <input type="hidden" name="package_id" value="{{ $package->id }}">

                    <div class="mb-3">
                        <label for="name{{ $package->id }}" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name{{ $package->id }}" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email{{ $package->id }}" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email{{ $package->id }}" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="subject{{ $package->id }}" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject{{ $package->id }}" name="subject" required>
                    </div>

                    <div class="mb-3">
                        <label for="message{{ $package->id }}" class="form-label">Message</label>
                        <textarea class="form-control" id="message{{ $package->id }}" name="package_details" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="phone{{ $package->id }}" class="form-label">Phone (Optional)</label>
                        <input type="tel" class="form-control" id="phone{{ $package->id }}" name="phone">
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach


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



    <!-- Other sections like footer or additional content go here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Template/js/main.js') }}"></script>

    <script>
        // Show description section with animation
        window.onload = function() {
            const descriptionSection = document.getElementById('description');
            descriptionSection.classList.add('show');
        };
    </script>

    <script>
        // Function to change the navbar background on scroll
        window.addEventListener('scroll', function() {
            var navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) { // If scrolled 50px from the top
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>


    <script>
        $(document).ready(function() {
            // Show the modal after 2 seconds
            setTimeout(function() {
                $('#welcomeModal').modal('show');
            }, 2000);
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js"></script>
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

<script>
  window.addEventListener('DOMContentLoaded', (event) => {
    var myModal = new bootstrap.Modal(document.getElementById('readMoreModal'), {});
    myModal.show(); // This will trigger the modal to appear
  });
</script>



</body>

</html>
