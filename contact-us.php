<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>
    <title>Dr Parmar | Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
        .tbox {
            min-width: 95%;
        }

        .form-effect {
            background: rgba(255, 255, 255, 0.28);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(11.5px);
            -webkit-backdrop-filter: blur(11.5px);
            border: 1px solid rgba(255, 255, 255, 0.79);
            padding: 20px;
        }

        .contact-send-div {
            text-align: center;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .form-section {
            flex: 1;
            min-width: 300px;
        }

        .office-hours {
            background: rgba(255, 255, 255, 0.80);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(4.8px);
            -webkit-backdrop-filter: blur(4.8px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            position: sticky;
            top: 20px;
            padding: 20px;
            margin-left: 20px;
            min-width: 250px;
            width: 450px;
            height: 160px;
        }

        .form-footer {
            text-align: center;
            margin-top: 50px;
        }


        @media (min-width: 320px) {
            .office-hours {
                margin-top: 20px;
                margin-left: -1px;
                width: 100%;

            }

            .office-hours .h5 {
                font-size: 10px;
            }

            #sendButton {
                margin-top: -80px;
            }
        }

        @media (min-width: 425px) {
            .office-hours {
                margin-top: 0px;
                width: 100%;
            }

            .office-hours .h5 {
                font-size: 10px;
            }
        }

        @media (min-width: 768px) {
            .office-hours {
                margin-left: 20px;
                width: 250px;
            }

            .office-hours .h5 {
                font-size: 10px;
            }
        }

        @media (min-width: 992px) {
            .office-hours {
                margin-left: 20px;
                width: 400px;
            }

            .office-hours .h5 {
                font-size: 10px;
            }

        }

        @media (min-width: 1200px) {
            .office-hours {
                margin-left: 20px;
                width: 400px;
            }
        }

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
    </style>
    <!-- Swiper CSS for Google Reviews widget -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Google Reviews widget styles (copied from index.php) -->
    <style>
        /* General font for the widget */
        .google-reviews-widget {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            display: flex;
            flex-wrap: wrap;
            /* Allows stacking on small screens */
            width: 100%;
            margin: 40px 0;
            /* Removed auto margin */
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            overflow: hidden;
        }

        /* Layout: ensure predictable sizing and spacing */
        .google-reviews-widget,
        .google-reviews-widget * {
            box-sizing: border-box;
        }

        /* Desktop / tablet layout: header left, slider right */
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

        /* --- 1. WIDGET HEADER (Left Side) --- */
        .widget-header {
            flex: 1;
            /* Make it flexible */
            min-width: 280px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #f9f9f9;
            /* Adds the nice background */
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
            /* You can keep your blue fill */
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
            /* This is the 4.9 */
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
            /* Keeps it next to rating */
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
            /* Stops it from being full width */
        }

        .widget-header .review-button:hover {
            background-color: #185abc;
            color: #ffffff !important;
        }

        /* --- 2. WIDGET SLIDER (Right Side) --- */
        .widget-slider {
            flex: 2.5;
            /* Takes up more space */
            min-width: 320px;
            /* For mobile */
            background: #ffffff;
            padding: 30px;
            /* Adds space around the carousel */
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
            /* Let card content define height */
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 40px;
            /* Space for pagination dots */
        }

        /* Swiper navigation arrows */
        .swiper-button-next,
        .swiper-button-prev {
            width: 40px;
            height: 40px;
            background-color: #ffffff;
            /* White background */
            border-radius: 50%;
            /* Make it circular */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            /* Add subtle shadow */
            color: #1a73e8;
            /* Blue arrow color */
            top: 50%;
            transform: translateY(-50%);
            z-index: 50;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 16px;
            /* Controls arrow size */
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

        .swiper-pagination-bullet-active {
            background-color: #1a73e8;
        }

        /* --- 3. REVIEW CARD (Inside each slide) --- */
        .review-card {
            width: 100%;
            height: 100%;
            /* Fill the slide */
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            /* This makes it a "card" */
            background: #fff;
            display: flex;
            flex-direction: column;
            cursor: pointer;
            /* Makes it look clickable */
        }

        .review-card-header {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
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
            }

            .widget-header {
                width: 100%;
            }

            .widget-slider {
                width: 100%;
            }

            .swiper-button-next,
            .swiper-button-prev {
                display: none;
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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

        /* New styles to align the Zocdoc button and the image */
        .appointment-buttons-wrapper {
            display: flex;
            align-items: center;
            /* Vertically align items */
            gap: 15px;
            /* Space between the two elements */
            flex-wrap: wrap;
            /* Allows stacking on smaller screens */
        }

        /* Style the image to match the Zocdoc button's visual size */
        .call-to-action-img {
            max-width: 162px;
            /* Zocdoc button width */
            height: 48px;
            /* Zocdoc button height */
            cursor: pointer;
            margin-top: 0 !important;
            /* Override the old margin-top:20px */
        }

        /* Fix the Zocdoc wrapper div, which might add unwanted height/margin */
        .appointment-buttons-wrapper>div {
            margin: 0;
            padding: 0;
            line-height: 0;
            /* Important to remove extra spacing under inline elements */
        }

        /* Responsive adjustment for small screens */
        @media (max-width: 425px) {
            .appointment-buttons-wrapper {
                justify-content: center;
                /* Center buttons on mobile */
            }
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $time = $_POST['time'];

        $msg = "Name:" . $name;
        $msg .= "<br>Email:" . $email;
        $msg .= "<br>Phone:" . $phone;
        $msg .= "<br>Subject:" . $subject;
        $msg .= "<br>Date:" . date("m-d-Y", strtotime($date));
        $msg .= "<br>Time:" . $time;

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <contact@drparmars.com>' . "\r\n";

        if (mail("shahmnirmal@gmail.com", "Enquiry from Website", $msg, $headers)) {
            header("Location: https://www.drparmars.com/thank-you.php");
            exit();
        } else {
            echo 0;
        }
    }
    include "header.php";
    ?>

    <div class="contact-banner">
        <div class="container">
            <div style="padding-top:15%;text-align:center">
                <p class="about-heading">Get in touch</p>
            </div>
        </div>
    </div>
    <div class="contact-main-div">
        <div class="container">
            <div class="col-md-12" style="text-align:center;margin-top:30px;margin-bottom:30px;">
                <h2>New Patient Appointment</h2>
                <hr style="width:15%;border:3px solid #c8ad56">
            </div>
            <center>
                <p>(Existing Patients please call the office)</p>
            </center>
            <div class="form-container">
                <div class="form-section">
                    <div class="appointment-buttons-wrapper">
                        <div><a style='display: block'
                                href='https://www.zocdoc.com/practice/dr-parmar-family-dentist-151590?lock=true&isNewPatient=false&referrerType=widget'
                                class='zd-plugin' data-type='book-button' data-practice-id='151590'
                                title='Dr. Parmar Family Dentist'><img
                                    src='https://offsiteSchedule.zocdoc.com/images/remote/zd_bookonline_162x48.png?type=bobjs&monolith_provider_id=151590&practice_id=pt_lG5IU0QTZkavag6f11oHrg'
                                    alt='Dr. Parmar Family Dentist' title='Dr. Parmar Family Dentist'
                                    style='border: 0' /></a></div>
                        <script>(function (d) { var script = d.createElement('script'); script.type = 'text/javascript'; script.async = true; script.src = 'https://offsiteschedule.zocdoc.com/plugin/embed'; var s = d.getElementsByTagName('script')[0]; s.parentNode.insertBefore(script, s); })(document);</script>

                        <img src="images/heroimg.svg" alt="Hero image" class="call-to-action-img" loading="lazy"
                            onclick="window.location.href='tel:+16194266891'" role="button"
                            aria-label="Call 619-426-6891">
                    </div>
                </div>
                <div class="office-hours">
                    <h3>Office Hours :</h3>
                    <h5>Monday - Thursday: 8am - 4pm</h5>
                    <h5>Friday: 8am - 1pm</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="google-reviews-widget">
        <?php include "google-reviews-static.php"; ?>
    </div>

    <!-- Review Modal (needed by the Google Reviews widget) -->
    <div id="reviewModal" class="review-modal">
        <div class="review-modal-content">
            <span class="review-modal-close">&times;</span>
            <div id="reviewModalBody"></div>
        </div>
    </div>

    <?php include "footer.php"; ?>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Swiper JS for Google Reviews widget -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Swiper carousel within the widget
            try {
                const swiper = new Swiper('.google-reviews-widget .swiper', {
                    // How many slides to show
                    slidesPerView: 1,

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
                            slidesPerView: 2,
                            spaceBetween: 20
                        }
                    }
                });
            } catch (e) {
                // Swiper not available or no widget on page
                console && console.warn && console.warn('Swiper init failed:', e);
            }

            // Modal functionality for review cards
            const modal = document.getElementById('reviewModal');
            const modalBody = document.getElementById('reviewModalBody');
            const closeModal = document.querySelector('.review-modal-close');

            if (modal && modalBody && closeModal) {
                const reviewCards = document.querySelectorAll('.review-card');
                reviewCards.forEach(card => {
                    card.addEventListener('click', function () {
                        // Clone the clicked card so we can show full content in modal
                        modalBody.innerHTML = '';
                        const clone = this.cloneNode(true);
                        // Remove truncation-related styles (modal CSS handles full text)
                        const reviewText = clone.querySelector('.review-text');
                        if (reviewText) {
                            reviewText.style.display = 'block';
                            reviewText.style.webkitLineClamp = 'unset';
                            reviewText.style.overflow = 'auto';
                            reviewText.style.textOverflow = 'unset';
                            reviewText.style.whiteSpace = 'pre-wrap';
                            reviewText.style.maxHeight = '60vh';
                        }
                        modalBody.appendChild(clone);
                        modal.style.display = 'block';
                    });
                });

                closeModal.addEventListener('click', function () { modal.style.display = 'none'; });
                window.addEventListener('click', function (e) { if (e.target === modal) modal.style.display = 'none'; });
            }
        });
    </script>
    <script>
        // Guarded checkbox handler: only attach if elements exist (form is commented out on this page)
        (function () {
            var ag = document.getElementById('agreementCheckbox');
            var sb = document.getElementById('sendButton');
            if (ag && sb && ag.addEventListener) {
                ag.addEventListener('change', function () { sb.disabled = !this.checked; });
            }
        })();
    </script>
</body>

</html>