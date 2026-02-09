<!DOCTYPE html>
<html>
   
   <head>
      <title>Same Day Denture Repair Chula Vista, In House Denture Lab California - Dr. Parmars</title>
      <meta name="Description" content="Same day denture repair in-house lab in Chula Vista. At Dr. Parmars, we have in-house denture lab where we provide same day denture repair treatments. For appointment call us: 619-426-6891" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
       
       
<!--    <link rel="stylesheet"-->
<!--          href="https://fonts.google.com/specimen/Montserrat">-->
       
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" > 

      
      <!-- Bootstrap -->
      <link href = "css/bootstrap.min.css" rel="stylesheet">
      <link href = "css/bootstrap.css" rel="stylesheet">
      <link href = "css/style.css" rel="stylesheet">
      <link rel="stylesheet" href = "css/font-awesome.min.css" >
       
<!--        <link href="one-page-wonder.css" rel="stylesheet">-->
      
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src = "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
      
   </head>
   
   <body>
     <?php 
       include "plugin/uploadphoto.php";
       include "header.php"; ?>
       
      <div class="denturelab-banner">
           <div class="container">
               <div style="padding-top:15%;text-align:center">
                   <p class="about-heading">On-Site Denture Lab</p>
               </div>
            </div>
       </div>
       <div class="container" style="margin-top:60px;margin-bottom:80px">
           <h4 style="text-align:center;width:100%;font-weight:bold">Upload Your Photos</h4>
           
           <div class="col-lg-12 col-xs-12" style="text-align:center">
              <button type="button" class="btn btn-primary banner-book-appointment" data-toggle="modal" data-target="#smilesnapmodal">
                  VIRTUAL CONSULTATION
                </button>
           </div>
           
       </div>

       <?php include "footer.php"; ?>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "https://code.jquery.com/jquery.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "js/bootstrap.min.js"></script>
      
       <script>
           function divclick(val)
           {
               if(val == '1')
                   {
                       document.getElementById("drparmar").style.display = "block";
                       document.getElementById("drshah").style.display = "none";
                       document.getElementById("meettheteam").style.display = "none";
                       document.getElementById("setusapart").style.display = "none";
                   }
               if(val == '2')
                   {
                       document.getElementById("drparmar").style.display = "none";
                       document.getElementById("drshah").style.display = "block";
                       document.getElementById("meettheteam").style.display = "none";
                       document.getElementById("setusapart").style.display = "none";
                   }
               if(val == '3')
                   {
                       document.getElementById("drparmar").style.display = "none";
                       document.getElementById("drshah").style.display = "none";
                       document.getElementById("meettheteam").style.display = "block";
                       document.getElementById("setusapart").style.display = "none";
                   }
               if(val == '4')
                   {
                       document.getElementById("drparmar").style.display = "none";
                       document.getElementById("drshah").style.display = "none";
                       document.getElementById("meettheteam").style.display = "none";
                       document.getElementById("setusapart").style.display = "block";
                   }
           }
       </script>
   </body>
</html>