<!DOCTYPE html>
<?php
session_start();
?>
<html>
   
   <head>
      <title>Dr Parmar | Contact Us</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
       
       
<!--    <link rel="stylesheet"-->
<!--          href="https://fonts.google.com/specimen/Montserrat">-->
       
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"> 

      
      <!-- Bootstrap -->
      <link rel="stylesheet" href = "css/bootstrap.min.css" >
      <link rel="stylesheet" href = "css/bootstrap.css" >
      <link rel="stylesheet" href = "css/style.css" >
      <link rel="stylesheet" href = "css/font-awesome.min.css" >
       
<!--        <link href="one-page-wonder.css" rel="stylesheet">-->
      
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src = "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
      <style>
          .tbox {  
            min-width:95%; 
        }  
        
      </style>
   </head>
   
   <body>
       <?php 
    if(isset($_POST['send']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        
        $msg = "Name:".$name;
        $msg = $msg."<br>Email:".$email;
        $msg = $msg."<br>Phone:".$phone;
        $msg = $msg."<br>Subject:".$subject;
        $msg = $msg."<br>Date:".date("m-d-Y",strtotime($date));
        $msg = $msg."<br>Time:".$time;
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <contact@drparmars.com>' . "\r\n";
        //$headers .= 'Cc: myboss@example.com' . "\r\n";
// print_r( mail("kabranitin1992@gmail.com","Enquiry from Website",$msg,$headers));
// exit();
        if( mail("shahmnirmal@gmail.com","Enquiry from Website",$msg,$headers))
        // if( mail("kabranitin1992@gmail.com","Enquiry from Website",$msg,$headers))
        
        {
            //echo 1;
            header("Location: https://www.drparmars.com/thank-you.php");
            exit();
        }
        else
        {
            echo 0;
        }
            
    }
//       else
//       {
//           echo "Not Set";
//       }

       include "header.php"; ?>
       
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
                   <center><p>(Existing Patients please call the office)</p></center>
               <form method="post" action="contact-us.php">
               
               <div class="row">
                   <div class="col-md-7">
                            <label style="margin : 0 !important">Name</label>
                           <input type="text" placeholder="Name" class="form-control" name="name" required>
                           <br>
                           <label style="margin : 0 !important">Email</label>
                           <input type="text" placeholder="Email" class="form-control" name="email" required>
                           <br>
                           <label style="margin : 0 !important">Phone No</label>
                           <input type="text" placeholder="Phone/Mobile" class="form-control"  name="phone" required>
                           <br>
                           <label>Treatment</label>
                           <input type="text" placeholder="Treatment" class="form-control"  name="subject" required value="New Patient Consultation" readonly>
                           <br>
                           <label style="margin : 0 !important">Date</label>
                           <input type="date"  class="form-control tbox"  name="date" required min="<?php echo date("Y-m-d") ?>">
                           <br>
                           <label style="margin : 0 !important">Time</label>
                           <input type="time"  class="form-control tbox"  name="time" required>
                           
                           <!--<textarea class="form-control" placeholder="Message" style="margin-top:20px" name="message"></textarea>-->
                         
                   </div>
                   <div class="col-md-5 contact-send-div">
                       <input type="submit" class="btn btn-primary contact-send" value="Send" name="send">
                   </div>
                    
               </div>
                   </form>   
                   <div class="col-md-12 row">
                   <div style="background-color : white;border-radius : 5px" class="mt-3 col-md-7">
                       <h3>Office Hours : </h3>
                        <h5>Monday - Thursday: 8am - 4pm</h5>
                        <h5>Friday: 8am - 12pm</h5>
                    </div>
                    </div>
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