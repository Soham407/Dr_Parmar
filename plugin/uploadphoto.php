<?php 
include "config.php";

if(isset($_GET['appointment'])){
    $appointent = $_GET['appointment'];    
}else{
    header('location: ../index.php');
}


?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->

<!-- If Bootstrap is not included in your website already. You can uncomment the next line to include it. -->
<!--<link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.min.css">-->
        
<!--
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#smilesnapmodal">
  Open modal
</button>
-->
<style>
    .card {
  /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        padding: 10px;
    }

    /* On mouse-over, add a deeper shadow */
    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    /* Add some padding inside the card container */
    .container {
      padding: 2px 16px;
    }
    
    .arrow {
        border: solid white;
        border-width: 0 2px 2px 0;
        display: inline-block;
        padding: 3px;
        margin-left: 5px;
    }

    .right {
      transform: rotate(-45deg);
      -webkit-transform: rotate(-45deg);
    }
    
    .sampleimage{
        width:100%;
        margin-top : 10px;
        height : 145px;
    }
    
    @media only screen and (max-width: 600px) {
      .sampleimage {
        width:100%;
          margin-top : 5px;
          height : 100px
      }
    }
    
    
</style>

<!-- The Modal -->
    <div class="modal" id="smilesnapmodal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header" style="background-color : red;" id="header-div">
            <img src="plugin/images/left-arrow.png" onclick="backDiv()" width = "20px" height = "20px" style = "margin-right : 10px;margin-top : 7px;cursor : pointer;display : none" id="backbutton"/>
            <h4 class="modal-title">Start Virtual Appointment</h4>
            <button type="button" class="close" data-dismiss="modal" id="close">&times;</button>
          </div>

          <div class="modal-body">
               <form method="post" enctype="multipart/form-data" id="frmSanpSmile" name="frmSanpSmile">
                  <input type="hidden" name="appointment" id="appointment" value="<?php echo $appointent; ?>">
                  <input type="hidden" name="successurl" id="successurl" value="http://drparmars.com/photossaved.php">
                  <input type="hidden" name="failureurl" id="failureurl" value="http://drparmars.com/appointmentnotsaved.php">
                
                   <div id="page5">
                        <div class="card">
                         <div class="col-md-12 row">
                             <div class="col-md-2 col-3">
                                  <img src="" alt="Avatar" style="width:100%;margin-top : 10px;border-radius : 50%" name="logo">       
                             </div>
                             <div class="col-md-10 col-9">
                                    <h6 id="name">Hi</h6>
                                    
                             </div>
                         </div>
                        </div>
                        <br>
                         <div class="card">
                            <div class="col-md-12 col-xs-12 row">
                                <div class="col-md-10 col-xs-10 col-9" style="padding : 0">
                                    <h6>On the next screen, we will take 5 photographs.</h6>
                                    <h7>This will help the doctor to get you an accurate treatment plan. </h7>
                                </div>
                                <div class="col-md-2 col-xs-2 col-3">
                                    <img src="plugin/images/camera.png" alt="Smile" style="width:50%;margin-top : 2px">     
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 row" style="padding : 0;margin : 0">
                                <div class="col-md-1 col-xs-1 col-1" style="padding : 0;margin : 0">
                                </div>
                                 <div class="col-md-2 col-xs-2 col-2" style="padding : 2px;margin : 0">
                                    <img src="plugin/images/example-1.jpg" alt="Avatar" style="width:100%;margin-top : 10px;">       
                                </div>
                                <div class="col-md-2 col-xs-2 col-2" style="padding : 2px;margin : 0">
                                    <img src="plugin/images/example-2.jpg" alt="Avatar" style="width:100%;margin-top : 10px;">       
                                </div>
                                <div class="col-md-2 col-xs-2 col-2" style="padding : 2px;margin : 0">
                                    <img src="plugin/images/example-3.jpg" alt="Avatar" style="width:100%;margin-top : 10px;">       
                                </div>
                                <div class="col-md-2 col-xs-2 col-2" style="padding : 2px;margin : 0">
                                    <img src="plugin/images/example-4.jpg" alt="Avatar" style="width:100%;margin-top : 10px;">       
                                </div>
                                <div class="col-md-2 col-xs-2 col-2" style="padding : 2px;margin : 0">
                                    <img src="plugin/images/example-5.jpg" alt="Avatar" style="width:100%;margin-top : 10px;">       
                                </div>
                                <div class="col-md-1 col-xs-1 col-1" style="padding : 0;margin : 0">
                                </div>
                             </div>
                             <p>This allows us to customize your treatment plan. Here's a quick video to help take perfect pics:</p>
                        <br>     
<!--
                         <div class="col-md-12 row">
                             
                         </div>
-->
                        </div>
                        <br>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary modalbutton" style="width : 100%" onclick="showDiv('page6')">Continue to photos <i class="arrow right"></i></button>
                           </div>
                   </div>
                   
                   <div id="page6" style="display : none">
                       <div class="col-md-12 col-xs-12 row">
                                <div class="col-md-10 col-xs-10 col-9" style="padding : 0">
                                    <h6>On this screen, we'll take 5 pics</h6>
                                </div>
                                <div class="col-md-2 col-xs-2 col-3">
                                    <img src="plugin/images/camera.png" alt="Smile" style="width:50%;margin-top : 2px">     
                                </div>
                            </div>
                            <p>Now to get a few quick photos of your teeth so we can get you  an accurate treatment plan.</p>
                            <br>
                            <p>First take a selfie of your teeth straight on as shown.</p>
                           <div class="col-md-12 col-xs-12 row">
                               <div class="col-md-6 col-xs-6 col-6">
                                    <img src="plugin/images/example-1.jpg" alt="TeleDentcare" style="width:100%;margin-top : 10px;">       
                                </div>
                                <div class="col-md-6 col-xs-6 col-6">
                                    <img src="plugin/images/tooth-01.jpg" class="sampleimage" alt="TeleDentcare" id="image1" />
                                    <input type="file" name="image1file" id="image1file" value="Upload Picture" accept="image/*" data-type='image' style="width:100%">
                                </div>
                           </div>
                           
                           
                           <br>
                            <p>Now take a selfie of the <u>left</u> side of your teeth, using your finger to stretch your cheek.</p>
                           <div class="col-md-12 col-xs-12 row">
                               <div class="col-md-6 col-xs-6 col-6">
                                    <img src="plugin/images/example-2.jpg" alt="Avatar" style="width:100%;margin-top : 10px;">       
                                </div>
                                <div class="col-md-6 col-xs-6 col-6">
                                     <img src="plugin/images/tooth-01.jpg" class="sampleimage" alt="TeleDentcare" id="image2" />
                                    <input type="file" name="image2file" id="image2file" value="Upload Picture" accept="image/*" data-type='image' style="width:100%">
                                </div>
                           </div>
                           
                           
                           <br>
                            <p>Now take a selfie of the <u>right</u> side of your teeth, using your finger to stretch your cheek.</p>
                           <div class="col-md-12 col-xs-12 row">
                               <div class="col-md-6 col-xs-6 col-6">
                                    <img src="plugin/images/example-3.jpg" alt="Avatar" style="width:100%;margin-top : 10px;">       
                                </div>
                                <div class="col-md-6 col-xs-6 col-6">
                                     <img src="plugin/images/tooth-01.jpg" class="sampleimage" alt="TeleDentcare" id="image3" />
                                    <input type="file" name="image3file" id="image3file" value="Upload Picture" accept="image/*" data-type='image' style="width:100%">
                                </div>
                           </div>
                           
                           <br>
                            <p>Take a selfie of <u>top</u> of your teeth, as you were looking <u>up</u>.</p>
                           <div class="col-md-12 col-xs-12 row">
                               <div class="col-md-6 col-xs-6 col-6">
                                    <img src="plugin/images/example-4.jpg" alt="Avatar" style="width:100%;margin-top : 10px;">       
                                </div>
                                <div class="col-md-6 col-xs-6 col-6">
                                     <img src="plugin/images/tooth-01.jpg" class="sampleimage" alt="TeleDentcare" id="image4" />
                                    <input type="file" name="image4file" id="image4file" value="Upload Picture" accept="image/*" data-type='image' style="width:100%">
                                </div>
                           </div>
                           
                           <br>
                            <p>Take a selfie of <u>bottom</u> of your teeth, as you were looking <u>down</u>.</p>
                           <div class="col-md-12 col-xs-12 row">
                               <div class="col-md-6 col-xs-6 col-6">
                                    <img src="plugin/images/example-5.jpg" alt="Avatar" style="width:100%;margin-top : 10px;">       
                                </div>
                                <div class="col-md-6 col-xs-6 col-6">
                                     <img src="plugin/images/tooth-01.jpg" class="sampleimage" alt="TeleDentcare" id="image5" />
                                    <input type="file" name="image5file" id="image5file" value="Upload Picture" accept="image/*" data-type='image' style="width:100%">
                                </div>
                           </div>
                           <br>
                           <div class="col-md-12">
                            <input type="button" class="btn btn-primary modalbutton" style="width : 100%" onclick="submitForm()" value="Submit Photos">
                           </div>
                           <br>
                   
                           
                   </div>
                   <div id="page7" style="display : none">
                       <div class="card">
                         <div class="col-md-12 row">
                             <div class="col-md-2">
                                  <img src="" alt="Avatar" style="width:100%;margin-top : 10px;border-radius : 50%" name="logo">       
                             </div>
                             <div class="col-md-10">
                                    <h6>You're Done</h6>
                                    <p id="doctorname">Doctor will email your personal assessment soon! We'll text you when it's ready :)</p>
                                 
                             </div>
                         </div>
                        </div>
                        <br>
                        
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary modalbutton" style="width : 100%" data-dismiss="modal">Close this Window</button>
                       </div>
                       <br>
                       <div class="col-md-12">
                        <button type="button" class="btn btn-primary modalbutton" style="width : 100%" onclick="showDiv('page1')">Start Over</button>
                       </div>
                   </div>
               </form>
          </div>

          <!-- Modal footer -->
<!--
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" data-dismiss="modal">Next</button>
          </div>
-->

        </div>
      </div>
    </div>
        
    <script src="plugin/js/jquery-3.5.1.min.js"></script>
    <script src="plugin/bootstrap/js/bootstrap.min.js"></script>
    <script>
//        $(window).on('load',function(){
//            $('#smilesnapmodal').modal({backdrop: 'static', keyboard: false});
//        });
        document.getElementById('page5').style.display = 'block';
        var nowdiv = 'page5';
        function showDiv(id){
            
//            if(id === 'page2'){
//                if
//            }
            
            document.getElementById('page5').style.display = 'none';
            document.getElementById('page6').style.display = 'none';
            document.getElementById('page7').style.display = 'none';
            document.getElementById(id).style.display = 'block';
            
            nowdiv = id;
            
            if(id != 'page5'){
                document.getElementById('backbutton').style.display = "block";
            }else{
                document.getElementById('backbutton').style.display = "none";
            }
            
        }
        
        function backDiv(){
            document.getElementById('page5').style.display = 'none';
            document.getElementById('page6').style.display = 'none';
            document.getElementById('page7').style.display = 'none';
            if(nowdiv === 'page5'){
//                $("#smilesnapmodal").modal("hide");
                document.getElementById('page5').style.display = 'block';
                var modal = document.getElementById('close');
                modal.click();
            }else if(nowdiv === 'page6'){
                document.getElementById('page5').style.display = 'block';
                document.getElementById('backbutton').style.display = "block";
                nowdiv = 'page5';
            }else if(nowdiv === 'page7'){
                document.getElementById('page6').style.display = 'block';
                document.getElementById('backbutton').style.display = "block";
                nowdiv = 'page6';
            }
        }
        
        function readURL(input,id) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              $('#'+id).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }

        $("#image1file").change(function() {

            var file = this.files[0];
            var fileType = file["type"];
            var ValidImageTypes = ["image/heif","image/jpg","image/gif", "image/jpeg", "image/png"];
            if ($.inArray(fileType, ValidImageTypes) < 0) {
                 alert("File is not Image.");
                document.getElementById('image1file').value = "";
            }else{
                readURL(this,"image1");
            }
        });
        
        $("#image2file").change(function() {

            var file = this.files[0];
            var fileType = file["type"];
            var ValidImageTypes = ["image/heif","image/jpg","image/gif", "image/jpeg", "image/png"];
            if ($.inArray(fileType, ValidImageTypes) < 0) {
                 alert("File is not Image.");
                document.getElementById('image2file').value = "";
            }else{
                readURL(this,"image2");
            }
        });
        
        $("#image3file").change(function() {

            var file = this.files[0];
            var fileType = file["type"];
            var ValidImageTypes = ["image/heif","image/jpg","image/gif", "image/jpeg", "image/png"];
            if ($.inArray(fileType, ValidImageTypes) < 0) {
                 alert("File is not Image.");
                document.getElementById('image3file').value = "";
            }else{
                readURL(this,"image3");
            }
        });
        
        $("#image4file").change(function() {

            var file = this.files[0];
            var fileType = file["type"];
            var ValidImageTypes = ["image/heif","image/jpg","image/gif", "image/jpeg", "image/png"];
            if ($.inArray(fileType, ValidImageTypes) < 0) {
                 alert("File is not Image.");
                document.getElementById('image4file').value = "";
            }else{
                readURL(this,"image4");
            }
        });
        
        $("#image5file").change(function() {

            var file = this.files[0];
            var fileType = file["type"];
            var ValidImageTypes = ["image/heif","image/jpg","image/gif", "image/jpeg", "image/png"];
            if ($.inArray(fileType, ValidImageTypes) < 0) {
                 alert("File is not Image.");
                document.getElementById('image5file').value = "";
            }else{
                readURL(this,"image5");
            }
        });
        
         function submitForm(){
//             debugger;
//             frmSanpSmile
            var frm = document.getElementsByName('frmSanpSmile')[0];
            frm.action = 'https://www.teledentcare.com/plugin/uploadonlyphoto.php' 
           frm.submit(); // Submit the form
           frm.reset();  // Reset all form data
//            showDiv('page7');
           return false; // Prevent page refresh
             
         }
        
        getImageBackground();
        function getImageBackground(){
            var appointment = document.getElementById('appointment').value;
            var logos = document.getElementsByName('logo');
            var header = document.getElementById('header-div');
            var close = document.getElementById('close');
            var name = document.getElementById('name');

            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                    
                    var obj = JSON.parse(this.responseText);
                    if(obj.err !== null || obj.err !== undefined){
                        for(var i =0; i < logos.length; i++){        
                            logos[i].src = obj.sLogo;
                        }
                        
                        name.innerHTML = "Hi, "+obj.sName+"";

                        
                        header.style.backgroundColor = obj.sColor;
                        
                        if(lightOrDark(obj.sColor)){
                            
                            Array.from(document.getElementsByClassName('modalbutton')).map(function(button) {
                                        button.style.backgroundColor=obj.sColor;
                                       button.style.color="#000000";
                                       button.style.color="#000000";
                                        button.style.borderColor = obj.sColor;
                            })
                            header.style.color = "#000000";
                            close.style.color = "#000000";
                        }else{
                            
                            Array.from(document.getElementsByClassName('modalbutton')).map(function(button) {
                                        button.style.backgroundColor=obj.sColor;
                                       button.style.color="#ffffff";
                                       button.style.borderColor = obj.sColor;
                            })
                            
                            header.style.color = "#ffffff";
                            close.style.color = "#ffffff";
                        }
                        
                    }else{
                        for(var i =0; i < logos.length; i++){        
                            logos[i].src = "";
                        }

                        header.style.backgroundColor = "#fffff";
                        name.innerHTML = "Hi,";
    
                    }
                    
                }
                
            };

            var formData = new FormData();

            formData.append("key", appointment);
            formData.append("action", "getAppointment");

            xhttp.open("POST", "https://www.teledentcare.com/plugin/WebService.php", true);
            // var contentType = "multipart/form-data; boundary=" + boundary;
            // xhttp.setRequestHeader("Content-Type", contentType);
            xhttp.send(formData);
            


        }
        
        
        function lightOrDark(color) {
            // Variables for red, green, blue values
            var r, g, b, hsp;

            // Check the format of the color, HEX or RGB?
            if (color.match(/^rgb/)) {

                // If RGB --> store the red, green, blue values in separate variables
                color = color.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+(?:\.\d+)?))?\)$/);

                r = color[1];
                g = color[2];
                b = color[3];
            } 
            else {

                // If hex --> Convert it to RGB: http://gist.github.com/983661
                color = +("0x" + color.slice(1).replace( 
                color.length < 5 && /./g, '$&$&'));

                r = color >> 16;
                g = color >> 8 & 255;
                b = color & 255;
            }

            // HSP (Highly Sensitive Poo) equation from http://alienryderflex.com/hsp.html
            hsp = Math.sqrt(
            0.299 * (r * r) +
            0.587 * (g * g) +
            0.114 * (b * b)
            );

            // Using the HSP value, determine whether the color is light or dark
            if (hsp>127.5) {

                return true;
            } 
            else {

                return false;
            }
        }
        
        $("#smilesnapmodal").modal()
        
        
    </script>
