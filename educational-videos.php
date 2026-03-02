<!DOCTYPE html>
<html>
   
   <head>
      <title>Dr Parmar | Educational Videos</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
       
       
<!--    <link rel="stylesheet"-->
<!--          href="https://fonts.google.com/specimen/Montserrat">-->
       
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" > 

      
      <!-- Bootstrap -->
      <link rel="stylesheet" href = "css/bootstrap.min.css" >
      <link rel="stylesheet" href = "css/bootstrap.css" >
      <link rel="stylesheet" href = "css/style.css" >
      <link rel="stylesheet" href = "css/font-awesome.min.css" >
       
       <style>
        #banner {
            background: #0578b3;
        }

        #banner h1 {
            color: rgb(255, 255, 255);
            line-height: 1.35;
            font-size: 44px;
        }

        .video-section {
            margin-bottom: 40px;
            padding: 20px 0;
        }

        .video-section h3 {
            color: #0578b3;
            font-weight: bold;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid #c8ad56;
        }

        .video-section h4 {
            color: #444;
            font-weight: 600;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Dedicated styling for a single YouTube Shorts (vertical) video */
        .shorts-container {
            position: relative;
            /* Match vertical testimonial video sizing from index.php (9:16) */
            padding-bottom: 70%;
            height: 0;
            overflow: hidden;
            width: 40%;
            max-width: 40%;
            margin: 0 auto 30px; /* center horizontally */
            border-radius: 8px;
            background: #000;
            box-shadow: 0 4px 6px rgba(0,0,0,0.15);
        }

        .shorts-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .image-container {
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .image-grid-2x2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .image-grid-1x2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .image-grid-2x2 .image-container {
            margin-bottom: 0;
            height: 300px;
        }

        .image-grid-2x2 .image-container img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            background: #f8f9fa;
        }

        .image-grid-1x2 .image-container {
            margin-bottom: 0;
        }

        @media screen and (max-width: 768px) {
            .image-grid-2x2,
            .image-grid-1x2 {
                grid-template-columns: 1fr;
                gap: 15px;
            }
        }

        .disclaimer-box {
            background-color: #fff3cd;
            border-left: 4px solid #c8ad56;
            padding: 15px;
            margin-bottom: 30px;
            border-radius: 4px;
        }

        .disclaimer-box p {
            margin: 0;
            color: #856404;
            font-style: italic;
        }

        .category-title {
            background: linear-gradient(135deg, #0578b3 0%, #045a8d 100%);
            color: white;
            padding: 15px 20px;
            margin-top: 40px;
            margin-bottom: 30px;
            border-radius: 8px;
            font-size: 24px;
            font-weight: bold;
        }

        .category-title:first-of-type {
            margin-top: 0;
        }

        /* Mobile Optimizations */
        @media screen and (max-width: 768px) {
            .about-banner {
                height: 180px !important;
            }
            
            .about-heading {
                font-size: 28px !important;
            }
            
            .category-title {
                font-size: 18px;
                padding: 10px 15px;
                margin-top: 30px;
                margin-bottom: 20px;
            }
            
            .video-section {
                margin-bottom: 30px;
                padding: 15px 0;
            }
            
            .video-section h4 {
                font-size: 16px;
                margin-top: 20px;
                margin-bottom: 12px;
            }
            
            .video-container {
                margin-bottom: 20px;
            }
            
            .disclaimer-box {
                padding: 12px;
                margin-bottom: 20px;
            }
            
            .disclaimer-box p {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 480px) {
            .about-heading {
                font-size: 24px !important;
            }
            
            .category-title {
                font-size: 16px;
                padding: 8px 12px;
            }
            
            .video-section h4 {
                font-size: 15px;
            }
            
            .disclaimer-box p {
                font-size: 13px;
            }
        }
    </style>
      
   </head>
   
   <body>
     <?php include "header.php"; ?>
       
      <div class="about-banner">
           <div class="container">
               <div style="padding-top:15%;text-align:center">
                   <p class="about-heading">Educational Videos</p>
               </div>
            </div>
       </div>
       
       <div class="container">
            <div class="row">
                <div class="col-md-12" style="padding-top:30px;padding-bottom:50px;">
                    
                    <!-- Disclaimer -->
                    <div class="disclaimer-box">
                        <p><strong>Disclaimer:</strong> The educational videos presented on this page are intended solely for informational and educational purposes. We do not own, produce, or claim any rights to these videos. All content is the property of their respective copyright holders. The information provided should not be considered as professional medical advice, diagnosis, or treatment. Always consult with qualified healthcare professionals regarding any questions you may have about a medical condition or treatment. We do not assume any responsibility or liability for the accuracy, completeness, or usefulness of the information presented in these videos.</p>
                        <p style="margin-top: 10px;"><strong style="color: #dc3545;">⚠️ In case of medical emergency, call 911 immediately.</strong></p>
                    </div>

                    <!-- PREVENTION Section -->
                    <div class="category-title">
                        <i class="fa fa-shield" aria-hidden="true"></i> PREVENTION
                    </div>

                    <!-- Brushing Techniques -->
                    <div class="video-section">
                        <h4>Brushing Techniques</h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/jsGJz9YW91Q" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- How to Floss -->
                    <div class="video-section">
                        <h4>How to Floss</h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/cS0zuqlj9eE" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Scaling and Root Planing -->
                    <div class="video-section">
                        <h4>Scaling and Root Planing</h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/MU0oEm1akY8" allowfullscreen></iframe>
                        </div>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/22KTcqBEXtc" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Laser -->
                    <div class="video-section">
                        <h4>Laser</h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/BqWxl9NwDgc" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Oral Spirochete -->
                    <div class="video-section">
                        <h4>Oral Spirochete</h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/oKRYysODzBM" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Antibiotics After Deep Cleaning -->
                    <div class="video-section">
                        <h4>Antibiotics After Deep Cleaning</h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/B4qC34F3mT4" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Deep Cleaning -->
                    <div class="video-section">
                        <h4>Deep Cleaning</h4>
                        <div class="image-grid-2x2">
                            <div class="image-container">
                                <img src="images/education/DeepCleaning1.jpg" alt="Deep Cleaning 1">
                            </div>
                            <div class="image-container">
                                <img src="images/education/DeepCleaning2.jpg" alt="Deep Cleaning 2">
                            </div>
                            <div class="image-container">
                                <img src="images/education/DeepCleaning3.jpg" alt="Deep Cleaning 3">
                            </div>
                            <div class="image-container">
                                <img src="images/education/DeepCleaning4.jpg" alt="Deep Cleaning 4">
                            </div>
                        </div>
                    </div>

                    <!-- TREATMENT Section -->
                    <div class="category-title">
                        <i class="fa fa-medkit" aria-hidden="true"></i> TREATMENT
                    </div>

                    <!-- Crown -->
                    <div class="video-section">
                        <h4>Crown</h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/OqYAB5YEYmo" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Root Canal -->
                    <div class="video-section">
                        <h4>Root Canal</h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/pQsd5nc6hAA" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Stages of Tooth Decay -->
                    <div class="video-section">
                        <h4>Stages of Tooth Decay</h4>
                        <div class="image-grid-1x2">
                            <div class="image-container">
                                <img src="images/education/Stages of tooth decay.jpg" alt="Stages of Tooth Decay">
                            </div>
                            <div class="image-container">
                                <img src="images/education/Stages of tooth decay2.jpg" alt="Stages of Tooth Decay 2">
                            </div>
                        </div>
                    </div>

                    <!-- Extraction and Bone Graft and Implants -->
                    <div class="video-section">
                        <h4>Extraction and Bone Graft and Implants</h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/8eofvci8gRw" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Effects of Teeth Loss -->
                    <div class="video-section">
                        <h4>Effects of Teeth Loss</h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/eEFE2PABwrw" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Partial -->
                    <div class="video-section">
                        <h4>Partial Denture</h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/zETq5LK7E7w" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Immediate Denture -->
                    <div class="video-section">
                        <h4>Immediate Denture</h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/36zcQQ76puc" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Snap on Denture -->
                    <div class="video-section">
                        <h4>Snap on Denture</h4>
                        <div class="shorts-container">
                            <iframe src="https://www.youtube.com/embed/6hnqTyXMp6E" title="Snap on Denture (Shorts)" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- All on X Fixed -->
                    <div class="video-section">
                        <h4>All on X Fixed</h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/P3NXmheeG6A" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Teeth Alignment - Invisalign -->
                    <div class="video-section">
                        <h4>Invisalign</h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/oT06O1Qej7E" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Invisalign Virtual Care -->
                    <div class="video-section">
                        <h4>Invisalign Virtual Care</h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/GoBWBKHKshs" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </div>

       <?php include "footer.php"; ?>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "https://code.jquery.com/jquery.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "js/bootstrap.min.js"></script>
   </body>
</html>
