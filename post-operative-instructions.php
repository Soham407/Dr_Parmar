<!DOCTYPE html>
<html>
   
   <head>
      <title>Dr Parmar | Post Operative Instructions</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
       
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

        .language-filter {
            text-align: center;
            margin: 30px 0;
        }

        .language-filter button {
            background: #0578b3;
            color: white;
            border: 2px solid #0578b3;
            padding: 12px 30px;
            margin: 0 10px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .language-filter button:hover {
            background: #045a8d;
            border-color: #045a8d;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .language-filter button.active {
            background: #c8ad56;
            border-color: #c8ad56;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .instruction-section {
            margin-bottom: 40px;
            padding: 25px;
            background: #f8f9fa;
            border-radius: 10px;
            border-left: 5px solid #c8ad56;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .instruction-section h3 {
            color: #0578b3;
            font-weight: bold;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #c8ad56;
        }

        .instruction-section h4 {
            color: #444;
            font-weight: 600;
            margin-top: 20px;
            margin-bottom: 15px;
            font-size: 18px;
        }

        .instruction-section ul {
            margin-left: 20px;
            line-height: 1.8;
        }

        .instruction-section ul li {
            margin-bottom: 10px;
            color: #555;
        }

        .instruction-section p {
            line-height: 1.8;
            color: #555;
            margin-bottom: 15px;
        }

        .instruction-section strong {
            color: #0578b3;
        }

        .content-english,
        .content-spanish {
            display: none;
        }

        .content-english.active,
        .content-spanish.active {
            display: block;
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

        @media screen and (max-width: 768px) {
            .about-banner {
                height: 180px !important;
            }
            
            .about-heading {
                font-size: 24px !important;
            }
            
            .language-filter button {
                padding: 10px 20px;
                margin: 5px;
                font-size: 14px;
            }
            
            .instruction-section {
                padding: 15px;
            }
            
            .instruction-section h3 {
                font-size: 20px;
            }
            
            .instruction-section h4 {
                font-size: 16px;
            }
        }
    </style>
      
   </head>
   
   <body>
     <?php include "header.php"; ?>
       
      <div class="about-banner">
           <div class="container">
               <div style="padding-top:15%;text-align:center">
                   <p class="about-heading">Post Operative Instructions</p>
               </div>
            </div>
       </div>
       
       <div class="container">
            <div class="row">
                <div class="col-md-12" style="padding-top:30px;padding-bottom:50px;">
                    
                    <!-- Disclaimer -->
                    <div class="disclaimer-box">
                        <p><strong>Disclaimer:</strong> The information provided here is for <strong>educational purposes only</strong> and does not replace professional medical advice. Always follow the specific instructions provided by Dr. Parmar. If you experience severe pain, excessive bleeding, or complications, contact our office immediately.</p>
                        <p style="margin-top: 10px;"><strong style="color: #dc3545;">⚠️ In case of a life-threatening emergency, call 911 immediately.</strong></p>
                    </div>

                    <!-- Language Filter -->
                    <div class="language-filter">
                        <button class="btn-english active" onclick="switchLanguage('english')">
                            <i class="fa fa-flag" aria-hidden="true"></i> English
                        </button>
                        <button class="btn-spanish" onclick="switchLanguage('spanish')">
                            <i class="fa fa-flag" aria-hidden="true"></i> Español
                        </button>
                    </div>

                    <!-- ENGLISH CONTENT -->
                    <div class="content-english active">

                        <!-- 1. Deep Cleaning -->
                        <div class="instruction-section">
                            <h3><i class="fa fa-tooth" aria-hidden="true"></i> Post Operative Instructions After Deep Cleaning</h3>
                            
                            <h4>What to Expect:</h4>
                            <ul>
                                <li>Your gums may be tender and sensitive for a few days</li>
                                <li>Some bleeding is normal when brushing and flossing</li>
                                <li>Teeth may be sensitive to hot, cold, or pressure</li>
                            </ul>

                            <h4>Instructions:</h4>
                            <ul>
                                <li><strong>Pain Management:</strong> Take over-the-counter pain medication as directed (Ibuprofen or Tylenol)</li>
                                <li><strong>Oral Hygiene:</strong> Continue brushing gently twice daily and floss once daily</li>
                                <li><strong>Rinsing:</strong> Rinse with warm salt water (1/2 teaspoon salt in 8 oz water) 2-3 times daily</li>
                                <li><strong>Diet:</strong> Avoid hard, crunchy, or sticky foods for 24-48 hours</li>
                                <li><strong>Avoid:</strong> Smoking and alcohol for at least 24 hours</li>
                                <li><strong>Follow-up:</strong> Schedule your follow-up appointment as recommended</li>
                            </ul>

                            <p><strong>Call our office if you experience:</strong> Severe pain, excessive bleeding, swelling, or fever.</p>
                        </div>

                        <!-- 2. Dental Fillings -->
                        <div class="instruction-section">
                            <h3><i class="fa fa-tooth" aria-hidden="true"></i> Post Operative Instructions After Dental Fillings</h3>
                            
                            <h4>What to Expect:</h4>
                            <ul>
                                <li>Numbness will wear off in 1-3 hours</li>
                                <li>Mild sensitivity to hot and cold is normal for a few days</li>
                                <li>Your bite may feel different initially</li>
                            </ul>

                            <h4>Instructions:</h4>
                            <ul>
                                <li><strong>Eating:</strong> Avoid chewing on the numb side to prevent biting your cheek or tongue</li>
                                <li><strong>Diet:</strong> Avoid very hot or cold foods for the first 24 hours</li>
                                <li><strong>Oral Hygiene:</strong> Resume normal brushing and flossing</li>
                                <li><strong>Pain Management:</strong> Use over-the-counter pain medication if needed</li>
                                <li><strong>Bite Adjustment:</strong> If your bite feels high after numbness wears off, call our office</li>
                            </ul>

                            <p><strong>Call our office if you experience:</strong> Severe or prolonged sensitivity, pain when biting, or if the filling feels rough or loose.</p>
                        </div>

                        <!-- 3. Extractions -->
                        <div class="instruction-section">
                            <h3><i class="fa fa-tooth" aria-hidden="true"></i> Post Operative Instructions After Extractions</h3>
                            
                            <h4>First 24 Hours:</h4>
                            <ul>
                                <li><strong>Bleeding:</strong> Bite on gauze for 30-45 minutes. Change as needed. Some oozing is normal for 24 hours</li>
                                <li><strong>Ice Packs:</strong> Apply ice packs to the outside of your face (20 minutes on, 20 minutes off)</li>
                                <li><strong>Rest:</strong> Keep your head elevated and avoid strenuous activity</li>
                                <li><strong>Do NOT:</strong> Spit, rinse vigorously, use straws, smoke, or drink alcohol</li>
                            </ul>

                            <h4>Diet:</h4>
                            <ul>
                                <li>Soft foods and liquids for the first 24 hours</li>
                                <li>Avoid hot liquids, crunchy, or sticky foods</li>
                                <li>Gradually return to normal diet as tolerated</li>
                            </ul>

                            <h4>After 24 Hours:</h4>
                            <ul>
                                <li>Gently rinse with warm salt water after meals and before bed</li>
                                <li>Resume brushing, but avoid the extraction site for 24-48 hours</li>
                                <li>Continue taking prescribed medications as directed</li>
                            </ul>

                            <p><strong>Call our office if you experience:</strong> Excessive bleeding that doesn't stop, severe pain not relieved by medication, fever over 101°F, or signs of infection.</p>
                        </div>

                        <!-- 4. Dental Crowns -->
                        <div class="instruction-section">
                            <h3><i class="fa fa-tooth" aria-hidden="true"></i> Post Operative Instructions After Dental Crowns</h3>
                            
                            <h4>Temporary Crown Care (if applicable):</h4>
                            <ul>
                                <li>Avoid sticky, hard, or chewy foods on that side</li>
                                <li>Chew on the opposite side when possible</li>
                                <li>Brush gently around the temporary crown</li>
                                <li>Avoid flossing near the temporary or pull floss out from the side</li>
                            </ul>

                            <h4>Permanent Crown Care:</h4>
                            <ul>
                                <li><strong>Sensitivity:</strong> Mild sensitivity to hot/cold is normal for a few weeks</li>
                                <li><strong>Oral Hygiene:</strong> Brush and floss normally around the crown</li>
                                <li><strong>Diet:</strong> Avoid very hard foods that could damage the crown</li>
                                <li><strong>Bite:</strong> If your bite feels uneven, contact our office for an adjustment</li>
                            </ul>

                            <p><strong>Call our office if you experience:</strong> Crown feels loose or falls off, severe sensitivity, or pain when biting.</p>
                        </div>

                        <!-- 5. Root Canals -->
                        <div class="instruction-section">
                            <h3><i class="fa fa-tooth" aria-hidden="true"></i> Post Operative Instructions After Root Canals</h3>
                            
                            <h4>What to Expect:</h4>
                            <ul>
                                <li>Mild to moderate discomfort for a few days</li>
                                <li>Tooth may feel sensitive when biting down</li>
                                <li>Temporary filling may feel high or rough</li>
                            </ul>

                            <h4>Instructions:</h4>
                            <ul>
                                <li><strong>Pain Management:</strong> Take prescribed or over-the-counter pain medication as directed</li>
                                <li><strong>Antibiotics:</strong> If prescribed, take the entire course as directed</li>
                                <li><strong>Eating:</strong> Avoid chewing on the treated tooth until permanent restoration is placed</li>
                                <li><strong>Oral Hygiene:</strong> Brush and floss normally</li>
                                <li><strong>Follow-up:</strong> Schedule your crown or permanent filling appointment within 2-4 weeks</li>
                            </ul>

                            <p><strong>Call our office if you experience:</strong> Severe pain not controlled by medication, visible swelling inside or outside the mouth, allergic reaction to medication, or if temporary filling comes out.</p>
                        </div>

                        <!-- 6. Dental Implants -->
                        <div class="instruction-section">
                            <h3><i class="fa fa-tooth" aria-hidden="true"></i> Post Operative Instructions After Dental Implants</h3>
                            
                            <h4>First 24-48 Hours:</h4>
                            <ul>
                                <li><strong>Bleeding:</strong> Bite on gauze for 30-45 minutes. Some oozing is normal</li>
                                <li><strong>Swelling:</strong> Apply ice packs (20 minutes on, 20 minutes off) for first 24 hours</li>
                                <li><strong>Rest:</strong> Avoid strenuous activity for 48-72 hours</li>
                                <li><strong>Do NOT:</strong> Spit, rinse vigorously, smoke, or use straws</li>
                            </ul>

                            <h4>Diet:</h4>
                            <ul>
                                <li>Soft foods and liquids for the first week</li>
                                <li>Avoid chewing near the implant site</li>
                                <li>Stay hydrated and maintain good nutrition</li>
                            </ul>

                            <h4>Oral Hygiene:</h4>
                            <ul>
                                <li>Do not brush the implant area for the first 24 hours</li>
                                <li>After 24 hours, gently rinse with warm salt water after meals</li>
                                <li>Resume gentle brushing around the area after 48 hours</li>
                            </ul>

                            <h4>Medications:</h4>
                            <ul>
                                <li>Take all prescribed medications as directed</li>
                                <li>Use pain medication before numbness wears off</li>
                            </ul>

                            <p><strong>Call our office if you experience:</strong> Excessive bleeding, severe pain, fever, pus discharge, or if the implant feels loose.</p>
                        </div>

                        <!-- 7. Denture Care -->
                        <div class="instruction-section">
                            <h3><i class="fa fa-tooth" aria-hidden="true"></i> Denture Care Instructions</h3>
                            
                            <h4>Daily Care:</h4>
                            <ul>
                                <li><strong>Cleaning:</strong> Remove and rinse dentures after every meal</li>
                                <li><strong>Brushing:</strong> Brush dentures daily with a soft-bristle brush and denture cleaner (not toothpaste)</li>
                                <li><strong>Soaking:</strong> Soak dentures overnight in denture solution or water</li>
                                <li><strong>Mouth Care:</strong> Brush your gums, tongue, and palate with a soft brush before inserting dentures</li>
                            </ul>

                            <h4>Handling:</h4>
                            <ul>
                                <li>Handle dentures over a towel or sink filled with water to prevent breakage</li>
                                <li>Never use hot water on dentures (can warp them)</li>
                                <li>Do not use abrasive cleaners or harsh chemicals</li>
                            </ul>

                            <h4>Wearing Schedule:</h4>
                            <ul>
                                <li>For new dentures: Wear 24 hours for first few days, then remove at night</li>
                                <li>Remove dentures for at least 4-6 hours daily (usually at night)</li>
                                <li>This allows gum tissues to rest and recover</li>
                            </ul>

                            <h4>Eating:</h4>
                            <ul>
                                <li>Start with soft foods cut into small pieces</li>
                                <li>Chew slowly using both sides of your mouth</li>
                                <li>Avoid very hard, sticky, or tough foods</li>
                            </ul>

                            <p><strong>Call our office if you experience:</strong> Sore spots, loose dentures, difficulty eating or speaking, or if dentures crack or break.</p>
                        </div>

                    </div>

                    <!-- SPANISH CONTENT -->
                    <div class="content-spanish">

                        <!-- 1. Deep Cleaning - Spanish -->
                        <div class="instruction-section">
                            <h3><i class="fa fa-tooth" aria-hidden="true"></i> Instrucciones Postoperatorias Después de Limpieza Profunda</h3>
                            
                            <h4>Qué Esperar:</h4>
                            <ul>
                                <li>Sus encías pueden estar sensibles y adoloridas por algunos días</li>
                                <li>Algo de sangrado es normal al cepillarse y usar hilo dental</li>
                                <li>Los dientes pueden estar sensibles al calor, frío o presión</li>
                            </ul>

                            <h4>Instrucciones:</h4>
                            <ul>
                                <li><strong>Control del Dolor:</strong> Tome medicamentos para el dolor de venta libre según las indicaciones (Ibuprofeno o Tylenol)</li>
                                <li><strong>Higiene Oral:</strong> Continue cepillándose suavemente dos veces al día y use hilo dental una vez al día</li>
                                <li><strong>Enjuague:</strong> Enjuague con agua tibia con sal (1/2 cucharadita de sal en 8 oz de agua) 2-3 veces al día</li>
                                <li><strong>Dieta:</strong> Evite alimentos duros, crujientes o pegajosos por 24-48 horas</li>
                                <li><strong>Evite:</strong> Fumar y alcohol por al menos 24 horas</li>
                                <li><strong>Seguimiento:</strong> Programe su cita de seguimiento según lo recomendado</li>
                            </ul>

                            <p><strong>Llame a nuestra oficina si experimenta:</strong> Dolor severo, sangrado excesivo, hinchazón o fiebre.</p>
                        </div>

                        <!-- 2. Dental Fillings - Spanish -->
                        <div class="instruction-section">
                            <h3><i class="fa fa-tooth" aria-hidden="true"></i> Instrucciones Postoperatorias Después de Empastes Dentales</h3>
                            
                            <h4>Qué Esperar:</h4>
                            <ul>
                                <li>El adormecimiento desaparecerá en 1-3 horas</li>
                                <li>Sensibilidad leve al calor y frío es normal por algunos días</li>
                                <li>Su mordida puede sentirse diferente inicialmente</li>
                            </ul>

                            <h4>Instrucciones:</h4>
                            <ul>
                                <li><strong>Comida:</strong> Evite masticar del lado adormecido para prevenir morderse la mejilla o lengua</li>
                                <li><strong>Dieta:</strong> Evite alimentos muy calientes o fríos por las primeras 24 horas</li>
                                <li><strong>Higiene Oral:</strong> Reanude el cepillado y uso de hilo dental normal</li>
                                <li><strong>Control del Dolor:</strong> Use medicamentos para el dolor de venta libre si es necesario</li>
                                <li><strong>Ajuste de Mordida:</strong> Si su mordida se siente alta después de que pase el adormecimiento, llame a nuestra oficina</li>
                            </ul>

                            <p><strong>Llame a nuestra oficina si experimenta:</strong> Sensibilidad severa o prolongada, dolor al morder, o si el empaste se siente áspero o suelto.</p>
                        </div>

                        <!-- 3. Extractions - Spanish -->
                        <div class="instruction-section">
                            <h3><i class="fa fa-tooth" aria-hidden="true"></i> Instrucciones Postoperatorias Después de Extracciones</h3>
                            
                            <h4>Primeras 24 Horas:</h4>
                            <ul>
                                <li><strong>Sangrado:</strong> Muerda la gasa por 30-45 minutos. Cambie según sea necesario. Algo de sangrado es normal por 24 horas</li>
                                <li><strong>Compresas de Hielo:</strong> Aplique compresas de hielo en el exterior de su cara (20 minutos sí, 20 minutos no)</li>
                                <li><strong>Descanso:</strong> Mantenga su cabeza elevada y evite actividad extenuante</li>
                                <li><strong>NO:</strong> Escupa, enjuague vigorosamente, use popotes, fume o beba alcohol</li>
                            </ul>

                            <h4>Dieta:</h4>
                            <ul>
                                <li>Alimentos blandos y líquidos por las primeras 24 horas</li>
                                <li>Evite líquidos calientes, alimentos crujientes o pegajosos</li>
                                <li>Regrese gradualmente a la dieta normal según lo tolere</li>
                            </ul>

                            <h4>Después de 24 Horas:</h4>
                            <ul>
                                <li>Enjuague suavemente con agua tibia con sal después de las comidas y antes de dormir</li>
                                <li>Reanude el cepillado, pero evite el sitio de extracción por 24-48 horas</li>
                                <li>Continue tomando los medicamentos recetados según las indicaciones</li>
                            </ul>

                            <p><strong>Llame a nuestra oficina si experimenta:</strong> Sangrado excesivo que no se detiene, dolor severo no aliviado por medicamentos, fiebre sobre 101°F, o signos de infección.</p>
                        </div>

                        <!-- 4. Dental Crowns - Spanish -->
                        <div class="instruction-section">
                            <h3><i class="fa fa-tooth" aria-hidden="true"></i> Instrucciones Postoperatorias Después de Coronas Dentales</h3>
                            
                            <h4>Cuidado de Corona Temporal (si aplica):</h4>
                            <ul>
                                <li>Evite alimentos pegajosos, duros o masticables en ese lado</li>
                                <li>Mastique del lado opuesto cuando sea posible</li>
                                <li>Cepille suavemente alrededor de la corona temporal</li>
                                <li>Evite usar hilo dental cerca de la temporal o jale el hilo desde el lado</li>
                            </ul>

                            <h4>Cuidado de Corona Permanente:</h4>
                            <ul>
                                <li><strong>Sensibilidad:</strong> Sensibilidad leve al calor/frío es normal por algunas semanas</li>
                                <li><strong>Higiene Oral:</strong> Cepille y use hilo dental normalmente alrededor de la corona</li>
                                <li><strong>Dieta:</strong> Evite alimentos muy duros que puedan dañar la corona</li>
                                <li><strong>Mordida:</strong> Si su mordida se siente desigual, contacte nuestra oficina para un ajuste</li>
                            </ul>

                            <p><strong>Llame a nuestra oficina si experimenta:</strong> La corona se siente suelta o se cae, sensibilidad severa, o dolor al morder.</p>
                        </div>

                        <!-- 5. Root Canals - Spanish -->
                        <div class="instruction-section">
                            <h3><i class="fa fa-tooth" aria-hidden="true"></i> Instrucciones Postoperatorias Después de Tratamientos de Conducto</h3>
                            
                            <h4>Qué Esperar:</h4>
                            <ul>
                                <li>Molestia leve a moderada por algunos días</li>
                                <li>El diente puede sentirse sensible al morder</li>
                                <li>El empaste temporal puede sentirse alto o áspero</li>
                            </ul>

                            <h4>Instrucciones:</h4>
                            <ul>
                                <li><strong>Control del Dolor:</strong> Tome medicamentos recetados o de venta libre según las indicaciones</li>
                                <li><strong>Antibióticos:</strong> Si se recetan, tome el curso completo según las indicaciones</li>
                                <li><strong>Comida:</strong> Evite masticar en el diente tratado hasta que se coloque la restauración permanente</li>
                                <li><strong>Higiene Oral:</strong> Cepille y use hilo dental normalmente</li>
                                <li><strong>Seguimiento:</strong> Programe su cita para corona o empaste permanente dentro de 2-4 semanas</li>
                            </ul>

                            <p><strong>Llame a nuestra oficina si experimenta:</strong> Dolor severo no controlado por medicamentos, hinchazón visible dentro o fuera de la boca, reacción alérgica a medicamentos, o si el empaste temporal se sale.</p>
                        </div>

                        <!-- 6. Dental Implants - Spanish -->
                        <div class="instruction-section">
                            <h3><i class="fa fa-tooth" aria-hidden="true"></i> Instrucciones Postoperatorias Después de Implantes Dentales</h3>
                            
                            <h4>Primeras 24-48 Horas:</h4>
                            <ul>
                                <li><strong>Sangrado:</strong> Muerda la gasa por 30-45 minutos. Algo de sangrado es normal</li>
                                <li><strong>Hinchazón:</strong> Aplique compresas de hielo (20 minutos sí, 20 minutos no) por las primeras 24 horas</li>
                                <li><strong>Descanso:</strong> Evite actividad extenuante por 48-72 horas</li>
                                <li><strong>NO:</strong> Escupa, enjuague vigorosamente, fume o use popotes</li>
                            </ul>

                            <h4>Dieta:</h4>
                            <ul>
                                <li>Alimentos blandos y líquidos por la primera semana</li>
                                <li>Evite masticar cerca del sitio del implante</li>
                                <li>Manténgase hidratado y mantenga buena nutrición</li>
                            </ul>

                            <h4>Higiene Oral:</h4>
                            <ul>
                                <li>No cepille el área del implante por las primeras 24 horas</li>
                                <li>Después de 24 horas, enjuague suavemente con agua tibia con sal después de las comidas</li>
                                <li>Reanude el cepillado suave alrededor del área después de 48 horas</li>
                            </ul>

                            <h4>Medicamentos:</h4>
                            <ul>
                                <li>Tome todos los medicamentos recetados según las indicaciones</li>
                                <li>Use medicamento para el dolor antes de que pase el adormecimiento</li>
                            </ul>

                            <p><strong>Llame a nuestra oficina si experimenta:</strong> Sangrado excesivo, dolor severo, fiebre, descarga de pus, o si el implante se siente suelto.</p>
                        </div>

                        <!-- 7. Denture Care - Spanish -->
                        <div class="instruction-section">
                            <h3><i class="fa fa-tooth" aria-hidden="true"></i> Instrucciones para el Cuidado de Dentaduras</h3>
                            
                            <h4>Cuidado Diario:</h4>
                            <ul>
                                <li><strong>Limpieza:</strong> Remueva y enjuague las dentaduras después de cada comida</li>
                                <li><strong>Cepillado:</strong> Cepille las dentaduras diariamente con un cepillo de cerdas suaves y limpiador de dentaduras (no pasta dental)</li>
                                <li><strong>Remojo:</strong> Remoje las dentaduras durante la noche en solución para dentaduras o agua</li>
                                <li><strong>Cuidado Bucal:</strong> Cepille sus encías, lengua y paladar con un cepillo suave antes de insertar las dentaduras</li>
                            </ul>

                            <h4>Manejo:</h4>
                            <ul>
                                <li>Maneje las dentaduras sobre una toalla o lavabo lleno de agua para prevenir roturas</li>
                                <li>Nunca use agua caliente en las dentaduras (puede deformarlas)</li>
                                <li>No use limpiadores abrasivos o químicos fuertes</li>
                            </ul>

                            <h4>Horario de Uso:</h4>
                            <ul>
                                <li>Para dentaduras nuevas: Use 24 horas por los primeros días, luego remueva por la noche</li>
                                <li>Remueva las dentaduras por al menos 4-6 horas diarias (usualmente por la noche)</li>
                                <li>Esto permite que los tejidos de las encías descansen y se recuperen</li>
                            </ul>

                            <h4>Comida:</h4>
                            <ul>
                                <li>Comience con alimentos blandos cortados en trozos pequeños</li>
                                <li>Mastique lentamente usando ambos lados de su boca</li>
                                <li>Evite alimentos muy duros, pegajosos o resistentes</li>
                            </ul>

                            <p><strong>Llame a nuestra oficina si experimenta:</strong> Puntos adoloridos, dentaduras sueltas, dificultad para comer o hablar, o si las dentaduras se agrietan o rompen.</p>
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
          function switchLanguage(language) {
              // Remove active class from all buttons
              document.querySelector('.btn-english').classList.remove('active');
              document.querySelector('.btn-spanish').classList.remove('active');
              
              // Remove active class from all content
              document.querySelector('.content-english').classList.remove('active');
              document.querySelector('.content-spanish').classList.remove('active');
              
              // Add active class to selected language
              if (language === 'english') {
                  document.querySelector('.btn-english').classList.add('active');
                  document.querySelector('.content-english').classList.add('active');
              } else {
                  document.querySelector('.btn-spanish').classList.add('active');
                  document.querySelector('.content-spanish').classList.add('active');
              }
          }
      </script>
   </body>
</html>
