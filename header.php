<style>
/* 1. Make the container wider so menu fits, but keep it centered */
@media (min-width: 1200px) {
    .container {
        max-width: 1400px !important;
        width: 100%;
    }
}

/* 2. Bring menu items closer together to help them fit */
.navbar-nav .nav-link {
    padding-left: 8px !important;
    padding-right: 8px !important;
}

/* 3. Center the menu items in the middle of the empty space */
.navbar-collapse {
    justify-content: center;
}
</style>
<div class = "header-background">
  <div class="row top-bar">
    <div class="container">
      <div class="top-header">
        <div class="span6">
            <div class="top-contact">
              <ul style="list-style: none;padding: 6px 0 0 0;">
                <li><a href="tel:+16194266891"><i class="fa fa-phone" aria-hidden="true"></i> +16194266891</a></li>
              </ul>
            </div>
        </div>
        <div class="span6">
          <div class="social-links">
            <ul>
              <li><a href="https://www.facebook.com/DrParmarFamilyDentist"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <!-- <li><a href="https://twitter.com/drparmars"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
              <li><a href="https://www.instagram.com/drparmarsdentist/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <!-- <li><a href="https://www.pinterest.com/drparmars/"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li> -->
              <li><a href="https://www.tiktok.com/t/ZP8DTk3eD"><img src="images/tik-tok.png" alt="TikTok" style="width: 16px; height: 16px; vertical-align: middle;"></a></li>
              
            </ul>
          </div>
        </div>
        
      </div>
    </div>
    </div>
  <div class="container">
    
    <div class="row">
      <div class="span12">
        <div class="head">
          <div class="top-head">
            <a href="index.php"><img src="images/logo.png" class="logo" alt="logo" style="display: block;"></a>
          </div>
          <nav class="navbar navbar-expand-lg navbar-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-left:85%">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){ ?> active <?php } ?>">
                  <a class="nav-link  " href="index.php">Home </a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'about-us.php'){ ?> active <?php } ?>">
                  <a class="nav-link " href="about-us.php">About Us</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'gallery-of-smiles.php'){ ?> active <?php } ?>">
                  <a class="nav-link" href="gallery-of-smiles.php">Signature Smiles</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'onsite-denture-lab.php'){ ?> active <?php } ?>">
                  <a class="nav-link" href="onsite-denture-lab.php">On-Site Denture Lab</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'testimonials.php'){ ?> active <?php } ?>" >
                  <a class="nav-link" href="testimonials.php">Testimonials</a>
                </li>
                <li class="nav-item  <?php if(basename($_SERVER['PHP_SELF']) == 'for-new-patients.php'){ ?> active <?php } ?>">
                  <a class="nav-link" href="for-new-patients.php">For New Patients</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'educational-videos.php'){ ?> active <?php } ?>">
                  <a class="nav-link" href="educational-videos.php">Educational</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'post-operative-instructions.php'){ ?> active <?php } ?>">
                  <a class="nav-link" href="post-operative-instructions.php">Post Op</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'Invisalign.php'){ ?> active <?php } ?>">
                  <a class="nav-link" href="Invisalign.php">Invisalign</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'services.php'){ ?> active <?php } ?>">
                  <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'contact-us.php'){ ?> active <?php } ?>">
                  <a class="nav-link" href="contact-us.php">Contact Us</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
              
          
<!--
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <li>
                                <a href="#">Explore Product</a>
                            </li>

                            <li>
                                <a href="#">Search</a>
                            </li>

                            <li>
                                <a href="#">Features</a>
                            </li>

                            <li>
                                <a href="#">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
-->
