<!DOCTYPE html>
<html>

<head>
    <title>Dr Parmar | Testimonials</title>
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">


    <!--    <link rel="stylesheet"-->
    <!--          href="https://fonts.google.com/specimen/Montserrat">-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!--        <link href="one-page-wonder.css" rel="stylesheet">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src = "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
    <style>
        /* General font for the widget */
        .google-reviews-widget {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            display: flex;
            flex-wrap: wrap;
            /* Allows stacking on small screens */
            width: 100%;
            margin: 40px 0;
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            overflow: hidden;
        }

        /* Layout: ensure predictable sizing and spacing */
        .google-reviews-widget,
        .google-reviews-widget * {
            box-sizing: border-box;
        }

        /* Desktop layout: header left (38%), slider right (62%) */
        .google-reviews-widget>.widget-header {
            flex: 0 0 38%;
            max-width: 38%;
        }

        .google-reviews-widget>.widget-slider {
            flex: 1 1 62%;
            max-width: 62%;
        }

        /* Allow author info to shrink correctly and keep logo to the right */
        .author-info {
            min-width: 0;
        }

        .google-logo-small {
            margin-left: 12px;
            flex-shrink: 0;
        }

        /* --- 1. WIDGET HEADER (Left Side on Desktop) --- */
        .widget-header {
            min-width: 280px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #f9f9f9;
            /* Left-aligned on desktop */
        }

        .widget-header .business-logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #eee;
            margin-bottom: 16px;
        }

        .widget-header .business-logo svg {
            width: 100%;
            height: 100%;
            fill: #4285f4;
        }

        .widget-header .business-name {
            font-size: 22px;
            font-weight: 600;
            color: #202124;
        }

        .widget-header .business-rating {
            margin-top: 8px;
            font-size: 16px;
        }

        .widget-header .rating-value {
            font-size: 48px;
            font-weight: bold;
            color: #202124;
            margin-right: 8px;
            vertical-align: middle;
        }

        .widget-header .stars {
            font-size: 20px;
            color: #fbbc04;
            vertical-align: middle;
            display: inline-block;
        }

        .widget-header .powered-by {
            font-size: 14px;
            color: #70757a;
            margin-top: 15px;
            display: flex;
            align-items: center;
        }

        .widget-header .powered-by img {
            height: 20px;
            margin-left: 6px;
        }

        .widget-header .review-button {
            display: inline-block;
            background-color: #1a73e8;
            color: #ffffff !important;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 500;
            margin-top: 20px;
            text-align: center;
            transition: background-color 0.3s;
            max-width: 200px;
        }

        .widget-header .review-button:hover {
            background-color: #185abc;
            color: #ffffff !important;
        }

        /* --- 2. WIDGET SLIDER (Right Side on Desktop) --- */
        .widget-slider {
            min-width: 320px;
            background: #ffffff;
            padding: 30px;
            position: relative;
        }

        /* Swiper.js container */
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: left;
            font-size: 16px;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 40px;
        }

        /* Swiper navigation arrows */
        .swiper-button-next,
        .swiper-button-prev {
            width: 40px;
            height: 40px;
            background-color: #ffffff;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            color: #1a73e8;
            top: 50%;
            transform: translateY(-50%);
            z-index: 50;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 16px;
            font-weight: bold;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background-color: #f9f9f9;
            box-shadow: 0 3px 7px rgba(0, 0, 0, 0.2);
        }

        .swiper-button-prev {
            left: -12px;
        }

        .swiper-button-next {
            right: -12px;
        }

        /* Swiper pagination dots */
        .swiper-pagination-bullet-active {
            background-color: #1a73e8;
        }

        /* --- 3. REVIEW CARD (Inside each slide) --- */
        .review-card {
            width: 100%;
            height: 100%;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            background: #fff;
            display: flex;
            flex-direction: column;
            cursor: pointer;
        }

        .review-card-header {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            justify-content: space-between;
        }

        .author-photo,
        .author-initial {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 12px;
            flex-shrink: 0;
        }

        .author-initial {
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 18px;
        }

        .author-info {
            flex: 1;
        }

        .author-name {
            font-weight: 600;
            color: #3c4043;
            font-size: 14px;
        }

        .review-time {
            color: #70757a;
            font-size: 12px;
        }

        .google-logo-small {
            height: 16px;
        }

        .review-card-body {
            flex: 1;
        }

        .review-stars {
            color: #fbbc04;
            font-size: 16px;
            margin-bottom: 8px;
        }

        .review-text {
            margin: 0;
            color: #3c4043;
            font-size: 14px;
            line-height: 1.6;
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* --- 4. Mobile Responsive --- */
        @media (max-width: 768px) {
            .google-reviews-widget {
                flex-direction: column;
                /* Stack vertically on mobile */
                align-items: center;
                padding: 20px 12px;
            }

            /* Make both sections full width on mobile */
            .google-reviews-widget>.widget-header {
                flex: 0 0 100%;
                max-width: 100%;
                width: 100%;
            }

            .google-reviews-widget>.widget-slider {
                flex: 0 0 100%;
                max-width: 100%;
                width: 100%;
            }

            .widget-header {
                border-bottom: 1px solid #e0e0e0;
                min-width: auto;
                padding: 20px;
                align-items: center;
                /* Center on mobile */
                text-align: center;
                /* Center text on mobile */
            }

            .widget-slider {
                padding: 16px;
                min-width: auto;
                box-sizing: border-box;
            }

            .swiper-button-next,
            .swiper-button-prev {
                display: none;
            }

            .widget-header .rating-value {
                font-size: 34px;
            }

            .widget-header .business-name {
                font-size: 20px;
            }

            .widget-header .review-button {
                margin: 16px auto 0;
                display: block;
            }

            .widget-header .business-logo {
                margin: 0 auto 12px;
            }

            .widget-header .powered-by {
                justify-content: center;
                /* Center on mobile */
            }

            .review-card {
                padding: 16px;
            }

            .review-card .review-text {
                -webkit-line-clamp: 6;
            }
        }

        /* --- 5. Review Modal Styles --- */
        .review-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.6);
            padding-top: 100px;
        }

        .review-modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 25px;
            border-radius: 8px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .review-modal-close {
            color: #aaa;
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 28px;
            font-weight: bold;
        }

        .review-modal-close:hover,
        .review-modal-close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        #reviewModalBody .review-text {
            display: block;
            -webkit-line-clamp: unset;
            -webkit-box-orient: unset;
            overflow: auto;
            text-overflow: unset;
            max-height: 60vh;
            white-space: pre-wrap;
        }

        #reviewModalBody .review-card-header {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }

        #reviewModalBody .author-photo,
        #reviewModalBody .author-initial {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 12px;
            flex-shrink: 0;
        }

        #reviewModalBody .author-initial {
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 18px;
        }

        #reviewModalBody .author-info {
            flex: 1;
        }

        #reviewModalBody .author-name {
            font-weight: 600;
            color: #3c4043;
            font-size: 14px;
        }

        #reviewModalBody .review-time {
            color: #70757a;
            font-size: 12px;
        }

        #reviewModalBody .google-logo-small {
            height: 16px;
        }

        #reviewModalBody .review-stars {
            color: #fbbc04;
            font-size: 16px;
            margin-bottom: 8px;
        }


        .testimonials-section {
            padding: 60px 0;
            background-color: #f9f9f9;
        }

        .testimonials-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .testimonials-row {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        .testimonial-column {
            flex: 1;
            min-width: 280px;
            max-width: 500px;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .testimonial-column:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }

        .testimonial-image {
            width: 100%;
            height: 550px;
            object-fit: cover;
            display: block;
        }

        .testimonial-description {
            padding: 25px;
            text-align: center;
        }

        .testimonial-description p {
            margin: 0;
            font-size: 18px;
            font-weight: 500;
            color: #333;
            line-height: 1.6;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .testimonials-section {
                padding: 40px 0;
            }

            .testimonials-row {
                gap: 20px;
            }

            .testimonial-column {
                max-width: 100%;
            }

            .testimonial-image {
                height: 280px;
            }

            .testimonial-description {
                padding: 20px;
            }

            .testimonial-description p {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <?php include "header.php"; ?>

    <div class="fornewpatient-banner">
        <div class="container">
            <div style="padding-top:15%;text-align:center">
                <p class="about-heading">Testimonials</p>
            </div>
        </div>
    </div>
    <div class="google-reviews-widget">
        <?php include "google-reviews-static.php"; ?>
    </div>

    <!-- Review Modal -->
    <div id="reviewModal" class="review-modal">
        <div class="review-modal-content">
            <span class="review-modal-close">&times;</span>
            <div id="reviewModalBody">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // --- 1. Initialize the Swiper Carousel ---
            const swiper = new Swiper('.google-reviews-widget .swiper', {
                // How many slides to show
                slidesPerView: 1, // Show 1 by default on mobile

                // Space between slides
                spaceBetween: 20,

                // Enable loop 
                loop: true,

                // Add pagination (dots)
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                // Add navigation (arrows)
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                // Responsive breakpoints
                breakpoints: {
                    // when window width is >= 1024px (desktop)
                    1024: {
                        slidesPerView: 2, // Show 2 slides
                        spaceBetween: 20
                    }
                }
            });

            // --- 2. Add Modal Functionality ---

            // Get the modal elements
            const modal = document.getElementById("reviewModal");
            const modalBody = document.getElementById("reviewModalBody");
            const closeModal = document.querySelector(".review-modal-close");

            // Get all the review cards
            const reviewCards = document.querySelectorAll(".review-card");

            // Add a click listener to each review card
            reviewCards.forEach(card => {
                card.addEventListener("click", function () {
                    // Find the parts of the card
                    const header = card.querySelector(".review-card-header").cloneNode(true);
                    const stars = card.querySelector(".review-stars").cloneNode(true);
                    const text = card.querySelector(".review-text").cloneNode(true);

                    // Clear the modal body and add the cloned parts
                    modalBody.innerHTML = ""; // Clear old content
                    modalBody.appendChild(header);
                    modalBody.appendChild(stars);
                    modalBody.appendChild(text);

                    // Show the modal
                    modal.style.display = "block";
                });
            });

            // When the user clicks on <span> (x), close the modal
            closeModal.onclick = function () {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal content, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });
    </script>

    <div class="testimonials-section">
        <div class="testimonials-container">
            <div class="testimonials-row">
                <!-- First Testimonial -->
                <div class="testimonial-column">
                    <img src="images/Testimonials/1.jpg" alt="Indian Paralympic High Jump Medalist"
                        class="testimonial-image" style="object-position: top;">
                    <div class="testimonial-description">
                        <p>Indian Paralympic High Jump Medalist' choose Dr. Parmar Family Dentist</p>
                    </div>
                </div>

                <!-- Second Testimonial -->
                <div class="testimonial-column">
                    <img src="images/Testimonials/2.jpg" alt="Jeremy Stephen UFC Fighter" class="testimonial-image">
                    <div class="testimonial-description">
                        <p>Jeremy Stephen's UFC approved dentist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>