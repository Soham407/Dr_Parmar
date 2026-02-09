<!DOCTYPE html>
<html>
   
   <head>
      <title>Dr Parmar | About Us</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
       
       
<!--    <link rel="stylesheet"-->
<!--          href="https://fonts.google.com/specimen/Montserrat">-->
       
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" > 

      
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
        #banner {
            background: #0578b3;
        }

        #banner h1 {
            color: rgb(255, 255, 255);
            line-height: 1.35;
            font-size: 44px;
        }

        .sidebar {
            border-right: solid 1px #a4a8ab;
        }

        .sideNavP {
            margin: 0;
            padding: 0.5rem;
            color: #444;
            border-bottom: solid 1px #c8ad56;
        }

        p.sideNavP.op a::before {
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            content: "\f107";
            position: absolute;
            left: 1.5rem;
        }

        p.sideNavP.op a[aria-expanded="true"]::before {

            content: "\f106";


        }

        .sideNavP:hover {
/*            background: #0578b32e;*/
        }

        .sideNavP:hover a {
            color: #c8ad56 ;
        }

        .sideNavP a {
            font-size: 14pt;
            color: #444;
            line-height: 1.4;
            display: block;

        }

        .sideNavP.op a {
            margin-left: 1.3rem;
        }

        .sideNavP a[aria-expanded="true"] {
/*            font-weight: bold;*/
        }

        .sideNavP a[aria-expanded="true"],
        .sideNavP a:hover {
/*            color: #c8ad56;*/
            text-decoration: none;
        }

        .prodCollapse {
            padding-left: 1.5rem;
        }

        .prodCollapse.show {
            border-bottom: solid 1px #a4a8ab;
        }

        .my-sticky1 {
            position: -webkit-sticky;
            position: sticky;
            top: 9rem;
            z-index: 998;
            background: #fff;
        }

        .prodCollapse p:last-child {
            border: none;
        }

        @media screen and (max-width: 992px) {}

        @media screen and (max-width: 668px) {}
    </style>
      
   </head>
   
   <body>
     <?php include "header.php"; ?>
       
      <div class="about-banner">
           <div class="container">
               <div style="padding-top:15%;text-align:center">
                   <p class="about-heading">About Us</p>
               </div>
            </div>
       </div>
       <div class="container">
            <div class="row">
                <div class="col-md-3 sidebar">
                    <div class="my-sticky">
                        <p class="sideNavP">
                            <a data-toggle="collapse" role="button" aria-expanded="true"
                                aria-controls="dustM" onclick="divclick(1)" style="cursor:pointer">
                                Meet Dr. Avani Parmar
                            </a>
                        </p>
                        

                        <p class="sideNavP">
                            <a data-toggle="collapse"  role="button" aria-expanded="false"
                                aria-controls="bulkH" onclick="divclick(2)" style="cursor:pointer">
                                Meet Dr. Nirmal Shah
                            </a>
                        </p>

                        <p class="sideNavP">
                            <a data-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="flowC" onclick="divclick(5)" style="cursor:pointer">
                                Meet Dr. Arshiya Sharafi
                            </a>
                        </p>
                        
                        <p class="sideNavP">
                            <a data-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="flowC" onclick="divclick(6)" style="cursor:pointer">
                                Meet Dr. Thomas Acierno
                            </a>
                        </p>

                        <p class="sideNavP">
                            <a data-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="materialP"  href="#materialP" onclick="divclick(3)" style="cursor:pointer">
                                Meet The Team
                            </a>
                        </p>
                        <div class="collapse prodCollapse" id="materialP">
<!--
                            <p class="sideNavP">
                                <a href="about-us.php#edensamson">
                                    Eden Samson
                                </a>
                            </p>
-->
                            <!-- <p class="sideNavP">
                                <a href="about-us.php#vazquez">
                                    Beatriz Avina
                                </a>

                            </p> -->
                            <p class="sideNavP">
                                <a href="about-us.php#patricia">
                                    Patricia Banuelos
                                </a>
                            </p>
                            <p class="sideNavP">
                                <a href="about-us.php#sandra">
                                    Sandra Rickel
                                </a>
                            </p>
                             <p class="sideNavP">
                                <a href="about-us.php#noriko">
                                    Noriko Johnson
                                </a>
                            </p>
                            <p class="sideNavP">
                                <a href="about-us.php#bella">
                                    Bella
                                </a>
                            </p>
                        </div>

                        <p class="sideNavP">
                            <a data-toggle="collapse" role="button" aria-expanded="false"
                                aria-controls="flowC" onclick="divclick(4)" style="cursor:pointer">
                                What Sets Us Apart
                            </a>
                        </p>
                        

                        
                    </div>
                </div>
                
                
                <div class="col-md-9">
                    <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;" id="drparmar">

                   <div class="row" >

                       <div class="col-md-3">

                           <img src="images/about/dravaniparmar.png" style="height:200px;">

                       </div>

                       <div class="col-md-9" style="border-bottom:5px solid #c8ad56">

                           <div class="col-md-12" style="margin-top:10%"><h3>Meet</h3></div>

                           <div class="col-md-12" style="margin-top:20px"><h3 style="font-weight:bold">Dr. Avani Parmar</h3></div>

                       </div>

                   </div>

                   <div class="row" style="margin-top:20px;padding-left:20px;" >

                       <p style="font-weight:bold">MY DENTAL EDUCATION AND COMMITMENT TO CONTINUING EDUCATION</p>

                       <p>Dr. Parmar graduated from the Rutgers School of Dental Medicine (RSDM)  with her DMD and completed her Prosthodontics and AEGD Preceptorship Program from the University of California, Los Angeles (UCLA). In addition, she has also graduated from D. Y. Patil Dental School in Mumbai, India with a BDS (Bachelor Dental Surgery). Dr. Parmar is a member of the American Dental Association and the California Dental Association. She has been passionately practicing family dentistry including Invisalign, endodontics, implant restorations and cosmetic dentistry in India, Pennsylvania and now in California.</p>

                       

                       <p>As a child, Dr. Parmar experienced some congenital tooth abnormalities and knows firsthand how dental issues can affect confidence. She enjoys the experience of being able to provide immediate fulfillment with a healthy, beautiful smile. Dr. Parmar is certified in Invisalign and in Six Months Smile for orthodontic concerns. Following her desire to give back to the community, Dr. Parmar lived out this passion while in dental school where she worked with under-served populations. She spent 4 years giving smiles in Central Pennsylvania before locating to Southern California</p>

                       

                       <p style="font-weight:bold">OUTSIDE OUR CHULA VISTA DENTIST OFFICE</p>

                       

                       <p>Dr. Parmar loves spending time with her husband Dr. Nirmal Shah and their son, Vihaan. She also has one four legged daughter and her name is Bella. She enjoys travelling, hiking, cycling and painting on occassion.</p>

                   </div>

               </div>
                
                <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;display:none" id="drshah">

                   <div class="row" >

                       <div class="col-md-3">

                           <img src="images/about/drnirmalshah.png" style="height:200px;">

                       </div>

                       <div class="col-md-9" style="border-bottom:5px solid #c8ad56">

                           <div class="col-md-12" style="margin-top:10%"><h3>Meet</h3></div>

                           <div class="col-md-12" style="margin-top:20px"><h3 style="font-weight:bold">Dr. Nirmal Shah</h3></div>

                       </div>

                   </div>

                   <div class="row" style="margin-top:20px;padding-left:20px;" >

                       <p style="font-weight:bold">MY DENTAL EDUCATION AND COMMITMENT TO CONTINUING EDUCATION</p>

                       <p>Dr. Nirmal Shah is a graduate from the University of Colorado where he attained his Doctor of Dental Surgery (DDS) degree. He has also obtained a Masters in Public Health (MPH) degree from Emory University, Atlanta, GA. In addition, he has also graduated from D. Y. Patil Dental School in India with a BDS (Bachelor Dental Surgery). Dr. Shah is a member of the American Dental Association, California Dental Association and San Diego Dental Society. </p>

                       

                       <p>Possessing a pleasant demeanor and jovial nature, Dr. Shah is equipped to deliver quality and artistic dental care. His attention to detail and a panoramic perspective of the patients' needs allow him to devise effective and long-lasting cosmetic treatment plans encompassing all aspects of dentistry. He keeps himself abreast with the recent advances in dental treatment like bone grafts, Implants and Teeth-In-A-Day. You will find him providing patients multiple treatment options with cost and treatment comparisons.</p>
                       
                       <p>Having an outgoing personality, Dr. Shah is comfortable with individuals from diverse backgrounds. He has a unique interest in listening to others and helping them with their problems and would probably be a counselor, if not a dentist.</p>
                       
                       <p>Dr. Shah also acquired his fellowship at Centers for Disease Control and Prevention (CDC) at the office of Smoking and Oral Health. He also published a report on State-Specific Secondhand Smoke Exposure and Current Cigarette Smoking Among Adults.</p>

                       

                       <p style="font-weight:bold">OUTSIDE OUR CHULA VISTA DENTIST OFFICE</p>

                       

                       <p>In his free time, he enjoys spending time with his wife, son and his dog ‘Bella’. His other interests include reading and trying out different cuisines. </p>

                   </div>

               </div>



               <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;display:none" id="drarshiya">

                   <div class="row" >

                       <div class="col-md-3">

                           <img src="images/about/arshiya.png" style="height:200px;">

                       </div>

                       <div class="col-md-9" style="border-bottom:5px solid #c8ad56">

                           <div class="col-md-12" style="margin-top:10%"><h3>Meet</h3></div>

                           <div class="col-md-12" style="margin-top:20px"><h3 style="font-weight:bold">Dr. Arshiya Sharafi</h3></div>
                          <div class="col-md-12" style="margin-top:10px"><h6>Oral Surgeon and Implant Specialist, Chula Vista, CA</h6></div>
                       </div>

                   </div>

                   <div class="row" style="margin-top:20px;padding-left:20px;" >

                       <!-- <p style="font-weight:bold">MY DENTAL EDUCATION AND COMMITMENT TO CONTINUING EDUCATION</p> -->

                       <p>Dr. Sharafi obtained his dental degree at the University of Maryland Dental School. He went on to finish his Oral and Maxillofacial Surgery training at University of Maryland Medical Center and R. Adam Cowley Shock Trauma Center. Dr. Sharafi has trained extensively in dentoalveolar surgery, dental implants, orthognathic surgery, maxillofacial trauma surgery, facial cosmetic surgery, and benign head and neck pathology and reconstructive dental implantology.</p>

                       

                       <p>Dr. Sharafi is a Diplomate of the American Board of Oral and Maxillofacial Surgeons and a Fellow of the American Association of Oral and Maxillofacial Surgeons. He is a member of the American Dental Association, California Association of Oral and Maxillofacial Surgeons, San Diego Dental Society, International Congress of Oral Implantologists, and Academy of Osseointegration</p>
                       
                       <p>Dr. Sharafi is one of a handful of Oral and Maxillofacial Surgeons in California who holds the California Cosmetic Surgery License due to his comprehensive training in cosmetics and reconstructive surgery. Dr. Sharafi is also an evaluator for the California Dental Board for General Anesthesia Permits offered to other Oral and Maxillofacial Surgeons. Dr. Sharafi has privileges at Sharp Memorial Hospital in San Diego. </p>
                      

                   </div>

               </div>


                <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;display:none" id="drthomas">

                   <div class="row" >

                       <div class="col-md-3">

                           <img src="images/about/drthomas.jpg" style="height:200px;">

                       </div>

                       <div class="col-md-9" style="border-bottom:5px solid #c8ad56">

                           <div class="col-md-12" style="margin-top:10%"><h3>Meet</h3></div>

                           <div class="col-md-12" style="margin-top:20px"><h3 style="font-weight:bold">Dr. Thomas Acierno</h3></div>
                          <div class="col-md-12" style="margin-top:10px"><h6>Endodontist, Chula Vista, CA</h6></div>
                       </div>

                   </div>

                   <div class="row" style="margin-top:20px;padding-left:20px;" >

                       <!-- <p style="font-weight:bold">MY DENTAL EDUCATION AND COMMITMENT TO CONTINUING EDUCATION</p> -->

                       <p>Dr. Thomas Acierno is recognized as one of the best endodontists in San Diego, California. When a patient has throbbing pain from a tooth due to severe decay or infection, a common procedure to help relieve from pain and preserve their smile and bite is a root canal treatment. His meticulous approach, experience and expert techniques enable him to save teeth in a relatively painless manner. Dr. Thomas Acierno was born in Chicago, Illinois. He graduated from Creighton University in 1977 with Bachelor in Science degree with major in Biology. He completed his Doctor of Dental Surgery degree (DDS) with honors in Endodontics in 1985 from the same University, during which he was also awarded with American Association of Endodontics Merit Award. Dr. Acierno had a private dental office in Orange County, CA before pursuing futher education in the field of Endodontics.</p>
                      
                       <p>He acquired his certificate in Endodontics from University of Connecticut and currently practices endodontics for over 32 years in San Diego, CA where he resides with his wife, 3 children and dog named Sandy. While not practicing his skillset in the office, he’s either spending time with his family or enjoying Barbeque with his friends.</p>
                       
                     
                   </div>

               </div>






                
<!--
                <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;display:none" id="edensamson">

                   <div class="row" >

                       <div class="col-md-3">

                           <img src="images/about/edensamson.PNG" style="height:200px;">

                       </div>

                       <div class="col-md-9" style="border-bottom:5px solid #c8ad56">

                           

                           <div class="col-md-12" style="margin-top:18%"><h3 style="font-weight:bold">Eden Samson</h3></div>
                           <div class="col-md-12" style="margin-top:10px"><h6>Registered Dental Hygienist</h6></div>

                       </div>

                   </div>

                   <div class="row" style="margin-top:20px;padding-left:20px;" >

                       <p>I am working at this office for over 10 years, and when it comes to motivating patients in taking control of their oral health and overall health, I’m at my best. I love being able to really reach a patient, teaching them about how to care for their teeth and gums between cleanings, and when they come back in and I can see that they’ve taken the lessons to heart, I know I’ve made a difference. They are going to have a healthier, better life and a great smile! My days are spent interacting one-on-one with our patients. I perform oral cancer screenings, oral prophylaxis, scaling and root planing, and place fluoride and sealants. I also take digital radiographs and photos for diagnostics and the records. My days are full, and when I return home to my spouse Renato, and son Nathan, it’s with a smile on my face. I like to challenge myself and am currently working on learning sign language and Spanish.</p>


                   </div>

               </div>
-->

               <!--  <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;display:none" id="vazquez">

                   <div class="row" >

                       <div class="col-md-3">

                           <img src="images/about/vazquez.PNG" style="height:200px;">

                       </div>

                       <div class="col-md-9" style="border-bottom:5px solid #c8ad56">

                           

                           <div class="col-md-12" style="margin-top:18%"><h3 style="font-weight:bold">Beatriz Avina</h3></div>
                           <div class="col-md-12" style="margin-top:10px"><h6>Treatment Coordinator / Front Office</h6></div>

                       </div>

                   </div>

                   <div class="row" style="margin-top:20px;padding-left:20px;" >

                       <p>I am working at this office for over 15 years and I really enjoy my role in giving smiles here at our dental office. Being able to help our patients understand the importance of having a healthy mouth and assisting them in achieving it is very rewarding. I work with our patients to make the necessary customized financial arrangements for their treatment needs. We understand that everyone has different budgets and expectations, so we do our best to find a plan that works best for each individual. I also answer phones, schedule appointments, and verify insurance coverage. When I’m not at the office, you’ll find me out and about with my three children who keep me very busy.</p>


                   </div>

               </div> -->
                
                <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;display:none" id="pamcollier">

                   <div class="row" >

 <!--                      <div class="col-md-3">

                           <img src="images/about/pamcollier.PNG" style="height:200px;">

                       </div>
  
                       <div class="col-md-9" style="border-bottom:5px solid #c8ad56">

                           

                           <div class="col-md-12" style="margin-top:18%"><h3 style="font-weight:bold">Pamela Collier</h3></div>
                           <div class="col-md-12" style="margin-top:10px"><h6>Account Manager</h6></div>

                       </div>
 -->
                   </div>

 <!--               <div class="row" style="margin-top:20px;padding-left:20px;" >

                       <p>I am working at this office for over 32 years and I really enjoy taking part in our new patient interviews is the highlight of my work. I love meeting and getting to know new people, welcoming them to our practice, and seeing to it that everything goes smoothly for them. I’m always available to answer their questions about treatment processes and make sure they are comfortable and have what they need in order to enjoy themselves while here. My duties are varied and include working in the front office, billing insurance companies and processing billing statements. I never know what the day is going to bring, and that makes coming in each morning with an excitement! As for my personal life, I am both a mother and a grandmother, and I love hosting family gatherings.</p>


                   </div>

-->               </div>
                
                <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;display:none" id="patricia">

                   <div class="row" >

                       <div class="col-md-3">

                           <img src="images/about/patricia.PNG" style="height:200px;">

                       </div>

                       <div class="col-md-9" style="border-bottom:5px solid #c8ad56">

                           

                           <div class="col-md-12" style="margin-top:18%"><h3 style="font-weight:bold">Patricia Banuelos</h3></div>
                           <div class="col-md-12" style="margin-top:10px"><h6>Manager</h6></div>

                       </div>

                   </div>

                   <div class="row" style="margin-top:20px;padding-left:20px;" >

                       <p>I am working at this office for over 11 years and being able to help each patient achieve a healthy and bright smile makes me happy. I love that we are really able to make a difference in the lives of our patients. When they know they have an incredible smile, they’re always showing it off, laughing and talking, and they’re confident, too! That’s a great gift to give to such wonderful people. I work chairside during each patient visit. I make sure the doctor’s have everything needed to make the procedure go smoothly, but most of my attention is focused on the patient. I check to see that they are comfortable and relaxed, keep them updated on what the doctor is doing and how much progress they are making, and I provide encouragement and reassurance if the patient is starting to get restless, too. I like being a part of the smile-perfecting process and love my job!</p>


                   </div>

               </div>
                
                
                <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;display:none" id="sandra">

                   <div class="row" >

                       <div class="col-md-3">

                           <img src="images/about/sandra.PNG" style="height:200px;">

                       </div>

                       <div class="col-md-9" style="border-bottom:5px solid #c8ad56">

                           

                           <div class="col-md-12" style="margin-top:18%"><h3 style="font-weight:bold">Sandra Rickel</h3></div>
                           <div class="col-md-12" style="margin-top:10px"><h6>Dental Assistant / Denture Tech Specialist</h6></div>

                       </div>

                   </div>

                   <div class="row" style="margin-top:20px;padding-left:20px;" >

                       <p>I have worked at this office for over 30 years and my favorite part of the day is when I am meeting and talking with patients, assisting them with their dental needs. Because we are family dental office, and we never over-schedule our patients, we have the time required to not only get to know each person, but provide them with exceptional and unhurried care. I have several job duties, including working chairside and assisting Dr. Shah, and Dr. Parmar with patient care, in our on-site lab performing denture fabrication, repairs, and realines, and ordering our supplies, too. My days are busy and I like that, but I also like that I have time to stop and chat with patients, hearing about what’s been happening with them since their last visit. Not everyone knows this about me, but I love music. Not only do I like to listen to music, I love going to music events and even on music cruises!</p>


                   </div>

               </div>


                <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;display:none" id="noriko">

                   <div class="row" >

                       <div class="col-md-3">

                           <img src="images/about/nori.png" style="height:200px;">

                       </div>

                       <div class="col-md-9" style="border-bottom:5px solid #c8ad56">

                           

                           <div class="col-md-12" style="margin-top:18%"><h3 style="font-weight:bold">Noriko Johnson</h3></div>
                           <div class="col-md-12" style="margin-top:10px"><h6>Dental Hyginiest</h6></div>

                       </div>

                   </div>

                   <div class="row" style="margin-top:20px;padding-left:20px;" >

                       <p>When I was younger, I always wanted to gain knowledge in the oral health field, share my dental
hygiene knowledge with patients, guide patients to prevent unnecessary treatment, and eliminate
dental anxiety. I graduated from the dental hygiene program at Southwestern College in 2013. My
passion toward patient care didn’t stop there, thus, I decided to obtain my Bachelor of Science degree in
Dental Hygiene at Wichita State University, and graduated Summa Cum Laude, while managing to
practice as a full-time hygienist. I also was inducted into the Alpha Eta National Honor Society, a
National Allied Health Organization. I will continue to advance my education, which will allow me to
share my existing and new knowledge with patients.</p>

<p>I am dedicated to providing a comfortable dental hygiene visit and bringing a positive experience to my
patients. I love to receive questions from patients and provide an evidence based dental hygiene
practice to help patients to achieve and maintain good oral health for the rest of their life.</p>

<p>I have three proud children (boy, girl, and boy, 22, 20, and 18, respectively) and always want to be the
model of a good person to them. In my free time, I like to collect junk and turn them into beautiful
objects. I also love to paint, particularly stained glass. I often like to do DIY projects, try out new recipes
to cook, and explore new places with my fiancé, Kevin. Thank you for taking the time to read about me
and hope to see you soon!</p>


                   </div>

               </div>
                
                
                <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;display:none" id="bella">

                   <div class="row" >

                       <div class="col-md-3">

                           <img src="images/about/bella.PNG" style="height:200px;">

                       </div>

                       <div class="col-md-9" style="border-bottom:5px solid #c8ad56">

                           

                           <div class="col-md-12" style="margin-top:18%"><h3 style="font-weight:bold">Bella</h3></div>
                           <div class="col-md-12" style="margin-top:10px"><h6>Office Dog</h6></div>

                       </div>

                   </div>

                   <div class="row" style="margin-top:20px;padding-left:20px;" >

                       <p>Meet Bella the office dog. On occasion, she comes to work in our office; on others she enjoys going out for a walk in the park and the beach during sunny days. When Bella enters the office she makes the rounds. She’ll say hello, look around for food, get a little love, and then stretch out in her various spots around the office. Bella makes people smile, and makes the office a little lighter and more ‘real’. She is the cheerleader of our office. Anyone can walk her at any time and she knows she can meet and greet like any leader doing their rounds.</p>

                        <p style="font-weight:bold;width:100%">Expertise</p>
                       
                       <ul style="padding-left:10px">
                           <li>Hand shakes</li>
                           <li>Giving kisses</li>
                           <li>Spreading happiness</li>
                           <li>Kids friendly</li>
                       </ul>
                       
                       
                   </div>

               </div>
                
                <div class="col-md-12" style="padding-top:20px;padding-bottom:20px;display:none" id="setusapart">

                   <div class="row" >

                       <div class="col-md-5" style="text-align:center;padding-left:0;padding-right:0">
                           <img src="images/home/tooth.png" style="padding:5px;">
                           <h5 style="color:#c8ad56;margin-top:20px;font-weight:bold">Where Art meets Dentistry</h5>
                           <hr style="width:30%;border:3px solid #000">
                       </div>
                       
                       <div class="col-md-7" style="text-align:center;padding-left:0;padding-right:0">
                           <img src="images/home/smiling.png" style="padding:8px;">
                           <h5 style="color:#c8ad56;margin-top:20px;font-weight:bold">Where Passion and Smiles Work Together</h5>
                           <hr style="width:30%;border:3px solid #000">
                       </div>
                       
                       <div class="col-md-12" style="text-align:center;padding-left:0;padding-right:0">
                           <img src="images/about/family-back.jpg">
                           <h5 style="color:#c8ad56 ;margin-top:20px;font-weight:bold">We treat you like family</h5>
                           <hr style="width:30%;border:3px solid #000">
                       </div>

                   </div>

                   <div class="row" style="margin-top:20px;padding-left:20px;" >

                     

                       <p>As a family-friendly, patient-focused dental office, we put you at the forefront of all we do. Dr.Avani R. Parmar and Dr. Nirmal M. Shah and the entire team never lose sight of the fact that we are here to serve you, offering professional, gentle care that will help you achieve and maintain excellent oral health and a strong, beautiful smile. </p>

                       

                       <p>Here, we understand that having a healthy smile makes for your overall well-being enhanced. Not only will you have a proper bite, which aids in digestion, but you will feel better about the appearance of your teeth, which boosts self-confidence and the ease with which you move through the world.</p>
                       
                       <p>Because we are passionately committed to providing personalized dental care, starting with your initial consultation, we will always treat you respectfully and compassionately. Ours is not a high-speed, high-volume dental practice; instead, we provide plenty of time for each appointment, not just for the procedure, but to talk with you about your oral healthcare, answer your questions, and catch up on the happenings in your life.</p>
                       
                       <p>Preventive care is another area of emphasis: we’d like to head off problems before they begin, to ensure your smile remains bright and strong.</p>

                       <p>When you’re looking for a dental office for yourself and your family, it’s essential to find a team where you know you are in excellent hands. We offer one-on-one consultations and invite you to schedule one at our Chula Vista, CA office, today. We welcome patients from San Diego, National City, and all surrounding communities.</p>
                       
                       <p>Dr. Parmar, Dr. Shah and our team including Bella look forward to welcoming you into our dental family and starting you on the path to incredible oral health and beautiful teeth, for a lifetime of confident smiles!</p>

                      
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
      
       <script>
          function divclick(val)
           {
               if(val == '1')
                   {
                       document.getElementById("drparmar").style.display = "block";
                       document.getElementById("drshah").style.display = "none";
                       document.getElementById("drarshiya").style.display = "none";
                       document.getElementById("drthomas").style.display = "none";
                       document.getElementById("noriko").style.display = "none";
                       document.getElementById("pamcollier").style.display = "none";
                       document.getElementById("patricia").style.display = "none";
                       document.getElementById("sandra").style.display = "none";
                       document.getElementById("bella").style.display = "none";
                       document.getElementById("setusapart").style.display = "none";
                   }
               if(val == '2')
                   {
                       document.getElementById("drparmar").style.display = "none";
                       document.getElementById("drshah").style.display = "block";
                       document.getElementById("drarshiya").style.display = "none";
                       document.getElementById("drthomas").style.display = "none";
                       document.getElementById("noriko").style.display = "none";
                       document.getElementById("pamcollier").style.display = "none";
                       document.getElementById("patricia").style.display = "none";
                       document.getElementById("sandra").style.display = "none";
                       document.getElementById("bella").style.display = "none";                       
                       document.getElementById("setusapart").style.display = "none";
                   }
               if(val == '3')
                   {
                       document.getElementById("drparmar").style.display = "none";
                       document.getElementById("drshah").style.display = "none";
                       document.getElementById("drarshiya").style.display = "none";
                       document.getElementById("drthomas").style.display = "none";
                       document.getElementById("noriko").style.display = "block";
                       document.getElementById("pamcollier").style.display = "block";
                       document.getElementById("patricia").style.display = "block";
                       document.getElementById("sandra").style.display = "block";
                       document.getElementById("bella").style.display = "block";
                       document.getElementById("setusapart").style.display = "none";
                   }
               if(val == '4')
                   {
                       document.getElementById("drparmar").style.display = "none";
                       document.getElementById("drshah").style.display = "none";
                       document.getElementById("drarshiya").style.display = "none";
                       document.getElementById("drthomas").style.display = "none";
                       document.getElementById("noriko").style.display = "none";
                       document.getElementById("pamcollier").style.display = "none";
                       document.getElementById("patricia").style.display = "none";
                       document.getElementById("sandra").style.display = "none";
                       document.getElementById("bella").style.display = "none";
                       document.getElementById("setusapart").style.display = "block";
                   }
                if(val == '5')
                   {
                       document.getElementById("drparmar").style.display = "none";
                       document.getElementById("drshah").style.display = "none";
                       document.getElementById("drarshiya").style.display = "block";
                       document.getElementById("drthomas").style.display = "none";
                       document.getElementById("noriko").style.display = "none";
                       document.getElementById("pamcollier").style.display = "none";
                       document.getElementById("patricia").style.display = "none";
                       document.getElementById("sandra").style.display = "none";
                       document.getElementById("bella").style.display = "none";
                       document.getElementById("setusapart").style.display = "none";
                   }
                if(val == '6')
                   {
                       document.getElementById("drparmar").style.display = "none";
                       document.getElementById("drshah").style.display = "none";
                       document.getElementById("drarshiya").style.display = "none";
                       document.getElementById("drthomas").style.display = "block";
                       document.getElementById("noriko").style.display = "none";
                       document.getElementById("pamcollier").style.display = "none";
                       document.getElementById("patricia").style.display = "none";
                       document.getElementById("sandra").style.display = "none";
                       document.getElementById("bella").style.display = "none";
                       document.getElementById("setusapart").style.display = "none";
                   }   
           }
       </script>
       <script>
           
           var urladdr = window.location;
            
           var res = urladdr.href.split("#");
           console.log(res);
           if(res[1] == 'drparmar')
                   {
                       document.getElementById("drparmar").style.display = "block";
                       document.getElementById("drshah").style.display = "none";
                       document.getElementById("drarshiya").style.display = "none";
                       document.getElementById("drthomas").style.display = "none";
                       document.getElementById("noriko").style.display = "none";
                       document.getElementById("pamcollier").style.display = "none";
                       document.getElementById("patricia").style.display = "none";
                       document.getElementById("sandra").style.display = "none";
                       document.getElementById("bella").style.display = "none";
                       document.getElementById("setusapart").style.display = "none";
                   }
                if(res[1] == 'drshah')
                   {
                       document.getElementById("drparmar").style.display = "none";
                       document.getElementById("drshah").style.display = "block";
                       document.getElementById("drarshiya").style.display = "none";
                       document.getElementById("drthomas").style.display = "none";
                       document.getElementById("noriko").style.display = "none";
                       document.getElementById("pamcollier").style.display = "none";
                       document.getElementById("patricia").style.display = "none";
                       document.getElementById("sandra").style.display = "none";
                       document.getElementById("bella").style.display = "none";                       
                       document.getElementById("setusapart").style.display = "none";
                   }
                if(res[1] == 'drarshiya')
                   {
                       document.getElementById("drparmar").style.display = "none";
                       document.getElementById("drshah").style.display = "none";
                       document.getElementById("drarshiya").style.display = "block";
                       document.getElementById("drthomas").style.display = "none";
                       document.getElementById("noriko").style.display = "none";
                       document.getElementById("pamcollier").style.display = "none";
                       document.getElementById("patricia").style.display = "none";
                       document.getElementById("sandra").style.display = "none";
                       document.getElementById("bella").style.display = "none";                       
                       document.getElementById("setusapart").style.display = "none";
                   }
               if(res[1] == 'drthomas')
                   {
                       document.getElementById("drparmar").style.display = "none";
                       document.getElementById("drshah").style.display = "none";
                       document.getElementById("drarshiya").style.display = "none";
                       document.getElementById("drthomas").style.display = "block";
                       document.getElementById("noriko").style.display = "none";
                       document.getElementById("pamcollier").style.display = "none";
                       document.getElementById("patricia").style.display = "none";
                       document.getElementById("sandra").style.display = "none";
                       document.getElementById("bella").style.display = "none";                       
                       document.getElementById("setusapart").style.display = "none";
                   }
               if(res[1] == 'noriko' || res[1] == 'pamcollier' || res[1] == 'patricia' || res[1] == 'sandra' || res[1] == 'bella')
                   {
                       document.getElementById("drparmar").style.display = "none";
                       document.getElementById("drshah").style.display = "none";
                       document.getElementById("drarshiya").style.display = "none";
                       document.getElementById("drthomas").style.display = "block";
                       document.getElementById("noriko").style.display = "block";
                       document.getElementById("pamcollier").style.display = "block";
                       document.getElementById("patricia").style.display = "block";
                       document.getElementById("sandra").style.display = "block";
                       document.getElementById("bella").style.display = "block";
                       document.getElementById("setusapart").style.display = "none";
                       
                       
                       var subsec = res[2];
                       
                       if(subsec == '1')
                           {
                               //var elmnt = document.getElementById("edensamson");
                               // elmnt.scrollIntoView(); 
                           }
                       if(subsec == 'noriko')
                           {
                               var elmnt = document.getElementById("noriko");
                                elmnt.scrollIntoView(); 
                           }
                       if(subsec == 'pamcollier')
                           {
                               var elmnt = document.getElementById("pamcollier");
                                elmnt.scrollIntoView(); 
                           }
                       if(subsec == 'patricia')
                           {
                               var elmnt = document.getElementById("patricia");
                                elmnt.scrollIntoView(); 
                           }
                       if(subsec == 'sandra')
                           {
                               var elmnt = document.getElementById("sandra");
                                elmnt.scrollIntoView(); 
                           }
                       if(subsec == 'bella')
                           {
                               var elmnt = document.getElementById("bella");
                                elmnt.scrollIntoView(); 
                           }
                       
                   }
           if(res[1] == 'setusapart')
           {
               document.getElementById("drparmar").style.display = "none";
                       document.getElementById("drshah").style.display = "none";
                       document.getElementById("edensamson").style.display = "none";
                       document.getElementById("drarshiya").style.display = "none";
                       document.getElementById("drthomas").style.display = "block";
                       document.getElementById("pamcollier").style.display = "none";
                       document.getElementById("patricia").style.display = "none";
                       document.getElementById("sandra").style.display = "none";
                       document.getElementById("bella").style.display = "none";
                       document.getElementById("setusapart").style.display = "block";
           }
       
           
           console.log(res[1]);
       </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.2/ScrollMagic.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.2/plugins/debug.addIndicators.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/jquery.gsap.min.js"></script>
   </body>
</html>