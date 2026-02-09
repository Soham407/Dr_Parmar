<?php 
include "config.php";
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
                  <input type="hidden" name="key" id="key" value="<?php echo KEY; ?>">
                  <input type="hidden" name="successurl" id="successurl" value="https://kaizenpro.in/drparmar/appointmentsaved.php">
                  <input type="hidden" name="failureurl" id="failureurl" value="https://kaizenpro.in/drparmar/appointmentnotsaved.php">
                   <div id="page1" style="display : none">
                       <div class="card">
                         <div class="col-md-12 row">
                             <div class="col-md-2 col-3">
                                  <img src="" alt="Avatar" style="width:100%;margin-top : 10px;" name="logo">       
                             </div>
                             <div class="col-md-10 col-9">
                                    <h6>Get Info Without the Office Visit</h6>
                                    <p>Here how it's work...</p>
                             </div>
                           </div>
<!--                                <div class="col-md-12 row">-->
                            <div class="col-md-12 col-xs-12 row">
                                <div class="col-md-2 col-xs-2 col-3">
                                    <img src="plugin/images/smile.png" alt="Smile" style="width:100%;padding : 5px">     
                                </div>
                                <div class="col-md-10 col-xs-10 col-9" style="margin-top:5px">
                                    <p>Info about the patient</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 row">
                                <div class="col-md-2 col-xs-2 col-3">
                                    <img src="plugin/images/checklist.png" alt="Smile" style="width:100%;padding : 5px">     
                                </div>
                                <div class="col-md-10 col-xs-10 col-9" style="margin-top:5px">
                                    <p>Choose your options</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 row">
                                <div class="col-md-2 col-xs-2 col-3">
                                    <img src="plugin/images/camera.png" alt="Smile" style="width:100%;padding : 5px">     
                                </div>
                                <div class="col-md-10 col-xs-10 col-9" style="margin-top:5px">
                                    <p>5 quick teeth selfies</p>
                                </div>
                            </div>
                                 
<!--                             </div>-->
<!--                             </div>-->
                        </div>
                        <br>
                        <p>Select treatment you are looking for<span style="color : red">*</span></p>
                        <div class="card">
                         <div class="col-md-12">
                                <div class="col-md-12 col-xs-12 row">
                                     <input type="checkbox" id="invisalign" name="methodtype[]" value="Cosmetic Dentistry (Veneers, Whitening)" style="margin-top : 5px">
                                    <label for="invisalign" style="margin-left : 5px">Cosmetic Dentistry <br>(Veneers, Whitening)</label>
                                 </div>
                                 <div class="col-md-12 col-xs-12 row">
                                    <input type="checkbox" id="silverbraces" name="methodtype[]" value="Crooked teeth (Invisalign)" style="margin-top : 5px">
                                    <label for="silverbraces"style="margin-left : 5px">Crooked teeth  <br>(Invisalign)</label><br>
                                </div>
                                 <div class="col-md-12 col-xs-12 row">
                                    <input type="checkbox" id="clearbraces" name="methodtype[]" value="Replace missing teeth (Bridge, Implants, Crowns, Dentures)"  style="margin-top : 5px">
                                    <label for="clearbraces"style="margin-left : 5px">Replace missing teeth <br>(Bridge, Implants, Crowns, Dentures)</label>
                                </div>
                                 <div class="col-md-12 col-xs-12 row">
                                    <input type="checkbox" id="noprefernec" name="methodtype[]" value="Cracked tooth or Broken tooth (Root canal)"  style="margin-top : 5px">
                                    <label for="noprefernec"style="margin-left : 5px">Cracked tooth or Broken tooth  <br>(Root canal)</label>
                                </div>
                         </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary modalbutton" style="width : 100%" onclick="showDiv('page2')">Start Online Consultation <i class="arrow right"></i></button>
                           </div>
                   </div>
                   
                   <div id="page2" style="display : none">
                      <div class="card">
                         <div class="col-md-12 row">
                             <div class="col-md-2 col-3">
                                  <img src="" alt="Avatar" style="width:100%;margin-top : 10px;border-radius : 50%" name="logo">       
                             </div>
                             <div class="col-md-10 col-9">
                                    <h6>Patient Information</h6>
                                    <p>Safe and Secure...</p>
                                 
                             </div>
                         </div>
                        </div>
                        <br>
                        <p>Where should we email your treatment plan?<span style="color : red">*</span></p>
                        <input type="email" required name="email" class="form-control"/>
                        <br>
                        <p>What is the best phone number to reach you?<span style="color : red">*</span></p>
                        <input type="number" required name="mobile" class="form-control"/>
                        <br>
                        <p>What's the patient's name?<span style="color : red">*</span></p>
                        <input type="text" required name="name" class="form-control"/>
                        <br>
                        <p>What's the patient's birth year?<span style="color : red">*</span></p>
                        <input type="number" required name="birthyear" class="form-control"/>
                        <br>
                        <p>What's the patient's postal code?<span style="color : red">*</span></p>
                        <input type="number" required name="postalcode" class="form-control"/>
                        <br>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary modalbutton" style="width : 100%" onclick="showDiv('page3')">Continue <i class="arrow right"></i></button>
                           </div>
                       
                   </div>
                   
                   <div id="page3" style="display : none">
                      
                      <div class="card">
                         <div class="col-md-12 row">
                             <div class="col-md-2 col-3">
                                  <img src="" alt="Avatar" style="width:100%;margin-top : 10px;border-radius : 50%" name="logo">       
                             </div>
                             <div class="col-md-10 col-9">
                                    <h6>Based on your response</h6>
                                    <p>Answer the appropriate question</p>
                                 
                             </div>
                         </div>
                        </div>
                        <br>
                        <p>What is your primary goal?<span style="color : red">*</span></p>
                        <textarea name="primarygoal" class="form-control" required></textarea>
                        <span style="color: red"><i>* Describe what you want to accomplish</i></span>
                        <br>
                        <p>What are your top priorities?<span style="color : red">*</span></p>
                        <div class="card">
                         <div class="col-md-12">
                                <div class="col-md-12 col-xs-12 row">
                                     <input type="checkbox" id="qualityofcare" name="priorites[]" value="Quality of Care" style="margin-top : 5px">
                                    <label for="qualityofcare" style="margin-left : 5px">Quality of Care</label>
                                 </div>
                                 <div class="col-md-12 col-xs-12 row">
                                    <input type="checkbox" id="affordability" name="priorites[]" value="Affordability" style="margin-top : 5px">
                                    <label for="affordability"style="margin-left : 5px">Affordability</label><br>
                                </div>
                                 <div class="col-md-12 col-xs-12 row">
                                    <input type="checkbox" id="lengthoftreatment" name="priorites[]" value="Length of Treatment"  style="margin-top : 5px">
                                    <label for="lengthoftreatment"style="margin-left : 5px">Length of Treatment</label>
                                </div>
                                 <div class="col-md-12 col-xs-12 row">
                                    <input type="checkbox" id="convenience" name="priorites[]" value="Convenience"  style="margin-top : 5px">
                                    <label for="convenience"style="margin-left : 5px">Convenience</label>
                                </div>
                         </div>
                        </div>
                        <span style="color: red"><i>* Select all that apply</i></span>
<!--
                        <br>
                        <p>How soon would you like to start?<span style="color : red">*</span></p>
                        <div class="card">
                         <div class="col-md-12">
                                <div class="col-md-12 col-xs-12 row">
                                     <input type="radio" id="asap" name="liketostart" value="ASAP" style="margin-top : 5px">
                                    <label for="asap" style="margin-left : 5px">ASAP</label>
                                 </div>
                                 <div class="col-md-12 col-xs-12 row">
                                    <input type="radio" id="withinamonth" name="liketostart" value="Within a Month" style="margin-top : 5px">
                                    <label for="withinamonth" style="margin-left : 5px">Within a Month</label><br>
                                </div>
                                 <div class="col-md-12 col-xs-12 row">
                                    <input type="radio" id="justgatheringinfo" name="liketostart" value="Just Gathering Info"  style="margin-top : 5px">
                                    <label for="justgatheringinfo"style="margin-left : 5px">Just Gathering Info</label>
                                </div>
                                 
                         </div>
                        </div>
-->
                        <br>
                        <p>What date will be suitable for patient?<span style="color : red">*</span></p>
                        <input type="date" required name="date" class="form-control" id="date"/>
                        <br>
                        <p>What time will be suitable for patient?<span style="color : red">*</span></p>
                            <select name="time" class="form-control" required id="time">
                                
                            </select>
                        <br>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary modalbutton" style="width : 100%" onclick="showDiv('page4')">Continue to photos <i class="arrow right"></i></button>
                           </div>
                       
                   </div>
                   
                   <div id="page4" style="display : none">
                       <div class="card">
                         <div class="col-md-12 row">
                             <div class="col-md-2 col-3">
                                  <img src="" alt="Avatar" style="width:100%;margin-top : 10px;border-radius : 50%" name="logo">       
                             </div>
                             <div class="col-md-10 col-9">
                                    <h6>FIRST WASH YOUR HANDS</h6>
                                    <p>You may also use Spoons to do this...</p>
                                 
                             </div>
                         </div>
                        </div>
                        <br>
                        <span style="color: red;font-size : 8pt"><i>It's look like you're on Computer...</i></span>
                        <p>It's much easier to take the pictures of your teeth using a Cell Phone. Enter your mobile number below and we'll send a link to your phone to continue. You won't loose your place!</p>
                        <input type="number" name="smsmobile" class="form-control"/>
                        <br>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary modalbutton" style="width : 100%"  >Send link to mobile</button>
                           </div>
                           <br>
                           <a href="#" onclick="showDiv('page5')">No thanks, I'll upload photos</a>
                   </div>
                   
                   <div id="page5" style="display : none">
                        <div class="card">
                         <div class="col-md-12 row">
                             <div class="col-md-2 col-3">
                                  <img src="" alt="Avatar" style="width:100%;margin-top : 10px;border-radius : 50%" name="logo">       
                             </div>
                             <div class="col-md-10 col-9">
                                    <h6>Based on your response</h6>
                                    <p>Answer the appropriate question</p>
                                 
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
        document.getElementById('page1').style.display = 'block';
        var nowdiv = 'page1';
        function showDiv(id){
            
//            if(id === 'page2'){
//                if
//            }
            
            document.getElementById('page1').style.display = 'none';
            document.getElementById('page2').style.display = 'none';
            document.getElementById('page3').style.display = 'none';
            document.getElementById('page4').style.display = 'none';
            document.getElementById('page5').style.display = 'none';
            document.getElementById('page6').style.display = 'none';
            document.getElementById('page7').style.display = 'none';
            document.getElementById(id).style.display = 'block';
            
            nowdiv = id;
            
            if(id != 'page1'){
                document.getElementById('backbutton').style.display = "block";
            }else{
                document.getElementById('backbutton').style.display = "none";
            }
            
        }
        
        function backDiv(){
            document.getElementById('page1').style.display = 'none';
            document.getElementById('page2').style.display = 'none';
            document.getElementById('page3').style.display = 'none';
            document.getElementById('page4').style.display = 'none';
            document.getElementById('page5').style.display = 'none';
            document.getElementById('page6').style.display = 'none';
            document.getElementById('page7').style.display = 'none';
            if(nowdiv === 'page1'){
//                $("#smilesnapmodal").modal("hide");
                document.getElementById('page1').style.display = 'block';
                var modal = document.getElementById('close');
                modal.click();
            }else if(nowdiv === 'page2'){
                document.getElementById('page1').style.display = 'block';
                document.getElementById('backbutton').style.display = "none";
                nowdiv = 'page1';
            }else if(nowdiv === 'page3'){
                document.getElementById('page2').style.display = 'block';
                document.getElementById('backbutton').style.display = "block";
                nowdiv = 'page2';
            }else if(nowdiv === 'page4'){
                document.getElementById('page3').style.display = 'block';
                document.getElementById('backbutton').style.display = "block";
                nowdiv = 'page3';
            }else if(nowdiv === 'page5'){
                document.getElementById('page4').style.display = 'block';
                document.getElementById('backbutton').style.display = "block";
                nowdiv = 'page4';
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
            frm.action = 'http://www.teledentcare.com/plugin/acceptdata.php' 
           frm.submit(); // Submit the form
           frm.reset();  // Reset all form data
//            showDiv('page7');
           return false; // Prevent page refresh
             
         }
        
        getImageBackground();
        function getImageBackground(){
            var key = document.getElementById('key').value;
            var logos = document.getElementsByName('logo');
            var time = document.getElementById('time');
            var header = document.getElementById('header-div');
            var close = document.getElementById('close');
            var doctorname = document.getElementById('doctorname');

            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                    
                    var obj = JSON.parse(this.responseText);
                    if(obj.err !== null || obj.err !== undefined){
                        for(var i =0; i < logos.length; i++){        
                            logos[i].src = obj.sLogo;
                        }

                        
                        
                        doctorname.innerHTML = "Dr. "+obj.sName+" will email your personal assessment soon! We'll text you when it's ready :)";

                        if(obj.sStartTime.includes(":") && obj.sEndTime.includes(":")){
                            var fromtime = Number(obj.sStartTime.split(":")[0]);
                            var totime = Number(obj.sEndTime.split(":")[0]);    
                        }else{
                            var fromtime = 7;
                            var totime = 21;
                        }

                        for(var i =fromtime; i < totime; i++){
                            var opt = document.createElement('option');
                            opt.text = i+":00";
                            opt.value = i+":00";
                            time.add(opt, null);
                        }        
                        
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
                        doctorname.innerHTML = "Doctor will email your personal assessment soon! We'll text you when it's ready :)";


                        for(var i =7; i < 21; i++){
                            var opt = document.createElement('option');
                            opt.text = i+":00";
                            opt.value = i+":00";
                            time.add(opt, null);
                        }       
                    }
                    
                }
                
            };

            var formData = new FormData();

            formData.append("key", key);
            formData.append("action", "getData");

            xhttp.open("POST", "http://www.teledentcare.com/plugin/WebService.php", true);
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
        
        var dtToday = new Date();
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();

        var maxDate = year + '-' + month + '-' + day;
        $('#date').attr('min', maxDate);
        
    </script>
