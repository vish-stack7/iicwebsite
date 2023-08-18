<!DOCTYPE html>
<html lang="en">
   <head>
      <title>IIC</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <!-- FIRST ROW BLOCKS DIMENSION DEFINED-->
      <link rel="stylesheet" type="text/css" href="style.css">
      <!-- footer Block Dimension definition ends here-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
         * {
         box-sizing: border-box;
         }
         body {
         background-color: #1E94BD;
         font-family: Helvetica, sans-serif;
         }
         /* The actual timeline (the vertical ruler) */
         .timeline {
         position: relative;
         max-width: 1400px;
         margin: 0 auto;
         padding-top:50px;
         }
         /* The actual timeline (the vertical ruler) */
         .timeline::after {
         content: '';
         position: absolute;
         width: 6px;
         background-color: white;
         top: 0;
         bottom: 0;
         left: 50%;
         margin-left: -3px;
         }
         /* Container around content */
         .container {
         padding: 10px 40px;
         position: relative;
         background-color: inherit;
         width: 50%;
         }
         /* The circles on the timeline */
         /* Place the container to the left */
         .left {
         left: -30%;
         }
         /* Place the container to the right */
         .right {
         left: 30%;
         }
         /* Add arrows to the left container (pointing right) */
         .left::before {
         content: " ";
         height: 0;
         position: absolute;
         top: 22px;
         width: 0;
         z-index: 1;
         right: 30px;
         border: medium solid white;
         border-width: 10px 0 10px 10px;
         border-color: transparent transparent transparent white;
         }
         /* Add arrows to the right container (pointing left) */
         .right::before {
         content: " ";
         height: 0;
         position: absolute;
         top: 22px;
         width: 0;
         z-index: 1;
         left: 30px;
         border: medium solid white;
         border-width: 10px 10px 10px 0;
         border-color: transparent white transparent transparent;
         }
         /* Fix the circle for containers on the right side */
         .right::after {
         left: -16px;
         }
         /* The actual content */
         .content {
         padding: 50px 30px;
         background-color: white;
         position: relative;
         border-radius: 6px;
         }
         /* Media queries - Responsive timeline on screens less than 600px wide */
         @media screen and (max-width: 600px) {
         /* Place the timelime to the left */
         .timeline::after {
         left: 31px;
         }
         /* Full-width containers */
         .container {
         width: 100%;
         padding-left: 70px;
         padding-right: 25px;
         }
         /* Make sure that all arrows are pointing leftwards */
         .container::before {
         left: 60px;
         border: medium solid white;
         border-width: 10px 10px 10px 0;
         border-color: transparent white transparent transparent;
         }
         /* Make sure all circles are at the same spot */
         .left::after, .right::after {
         left: 15px;
         }
         /* Make all right containers behave like the left ones */
         .right {
         left: 0%;
         }
         }
      </style>
   </head>
   <body>
       <?php
        include('header.php');
       ?>
         <div class="timeline">
            <div class="container left">
               <div class="content">
                  <h2>INFRASTUCTURE</h2>
                  <img class="img-fluid" src="http://du.ac.in/du/uploads/images/showtime/UDSC/DSC_0716.JPG" alt="infrastructre" width="100%" height="345"  >
                  <p ><br/>When the University of Delhi expanded in many directions to keep pace with a rapidly growing city, South Campus was established in 1973 to facilitate access for South Delhi residents. It moved to its present location on Benito Juarez Road, near Dhaula Kuan, in 1984. The Campus is now spread across 69 acres of green, hilly terrain and its buildings blend attractively with the natural surroundings. The various Departments are located in the Arts Faculty, the Faculty of Inter-disciplinary and Applied Sciences and the S.P. Jain Centre for Management Studies. Besides these, the Campus hosts a substantial library, a Health Centre, a bank, a post office, DTC Pass Section and administrative and examination blocks. South Campus also provides some residential quarters for faculty members and the non-teaching staff. Outstation students are offered accommodation in three hostels: the Geetanjali Hostel for Women, the Saramati Hostel for Men and the Aravalli P.G. Men’s Hostel</p>
               </div>
            </div>
            <div class="container right">
               <div class="content">
                  <h2>LIBRARY</h2>
                  <img class="img-fluid" src="http://www.du.ac.in/du/uploads/images/Library/library.png" alt="infrastructre" width="100%" height="345" >  
                  <p><br/>Delhi University Library System (DULS) consists of more than 34 libraries and is accomplishing its task of reaching to wider academic community. DULS has advanced its web activity with the subscription to many high quality electronic databases being made available through campus network to faculty, students and research scholars. In addition to this 20 more databases are also accessible through UGC-INFONET Digital Library Consortium. DULS also promotes Open Access e-resources. DULS is regularly conducting innovative Information Literacy Programs (ILP) for the benefit of students, researchers and faculty members and also making efforts in developing tutorials to make the community proficient in the use of WWW. Our OPAC is also being strengthened. We endeavour to further improve all our efforts to facilitate right information to the right user at the right time.</p>
               </div>
            </div>
            <div class="container left">
               <div class="content">
                  <h2>LINUX LAB(BAMBOO HUT)</h2>
                  <img class="img-fluid" src="http://www.du.ac.in/du/uploads/images/Library/library.png" alt="infrastructre" width="100%" height="345">  
                  <p><br/>Delhi University Library System (DULS) consists of more than 34 libraries and is accomplishing its task of reaching to wider academic community. DULS has advanced its web activity with the subscription to many high quality electronic databases being made available through campus network to faculty, students and research scholars. In addition to this 20 more databases are also accessible through UGC-INFONET Digital Library Consortium. DULS also promotes Open Access e-resources. DULS is regularly conducting innovative Information Literacy Programs (ILP) for the benefit of students, researchers and faculty members and also making efforts in developing tutorials to make the community proficient in the use of WWW. Our OPAC is also being strengthened. We endeavour to further improve all our efforts to facilitate right information to the right user at the right time.</p>
               </div>
            </div>
            <div class="container right">
               <div class="content">
                  <h2>MAC LAB</h2>
                  <img class="img-fluid" src="http://www.du.ac.in/du/uploads/images/Library/library.png" alt="infrastructre" width="100%" height="345">  
                  <p><br/>Delhi University Library System (DULS) consists of more than 34 libraries and is accomplishing its task of reaching to wider academic community. DULS has advanced its web activity with the subscription to many high quality electronic databases being made available through campus network to faculty, students and research scholars. In addition to this 20 more databases are also accessible through UGC-INFONET Digital Library Consortium. DULS also promotes Open Access e-resources. DULS is regularly conducting innovative Information Literacy Programs (ILP) for the benefit of students, researchers and faculty members and also making efforts in developing tutorials to make the community proficient in the use of WWW. Our OPAC is also being strengthened. We endeavour to further improve all our efforts to facilitate right information to the right user at the right time.</p>
               </div>
            </div>
            <div class="container left">
               <div class="content">
                  <h2>DUWA BUILDING</h2>
                  <img class="img-fluid" src="http://www.du.ac.in/du/uploads/images/Library/library.png" alt="infrastructre" width="100%" height="345">  
                  <p ><br/>Delhi University Library System (DULS) consists of more than 34 libraries and is accomplishing its task of reaching to wider academic community. DULS has advanced its web activity with the subscription to many high quality electronic databases being made available through campus network to faculty, students and research scholars. In addition to this 20 more databases are also accessible through UGC-INFONET Digital Library Consortium. DULS also promotes Open Access e-resources. DULS is regularly conducting innovative Information Literacy Programs (ILP) for the benefit of students, researchers and faculty members and also making efforts in developing tutorials to make the community proficient in the use of WWW. Our OPAC is also being strengthened. We endeavour to further improve all our efforts to facilitate right information to the right user at the right time.</p>
               </div>
            </div>
            <div class="container right">
               <div class="content">
                  <h2>HOSTEL</h2>
                  <img class="img-fluid" src="http://www.du.ac.in/du/uploads/images/Library/library.png" alt="infrastructre" width="100%" height="345">  
                  <p><br/>Delhi University Library System (DULS) consists of more than 34 libraries and is accomplishing its task of reaching to wider academic community. DULS has advanced its web activity with the subscription to many high quality electronic databases being made available through campus network to faculty, students and research scholars. In addition to this 20 more databases are also accessible through UGC-INFONET Digital Library Consortium. DULS also promotes Open Access e-resources. DULS is regularly conducting innovative Information Literacy Programs (ILP) for the benefit of students, researchers and faculty members and also making efforts in developing tutorials to make the community proficient in the use of WWW. Our OPAC is also being strengthened. We endeavour to further improve all our efforts to facilitate right information to the right user at the right time.</p>
               </div>
            </div>
            
            <div class="container left">
               <div class="content">
                  <h2>HEALTH CENTER</h2>
                  <img class="img-fluid" src="http://www.du.ac.in/du/uploads/images/showtime/UDSC/DSC_0263.JPG" alt="infrastructre" width="100%" height="345">  
                  <p><br/>Delhi University Library System (DULS) consists of more than 34 libraries and is accomplishing its task of reaching to wider academic community. DULS has advanced its web activity with the subscription to many high quality electronic databases being made available through campus network to faculty, students and research scholars. In addition to this 20 more databases are also accessible through UGC-INFONET Digital Library Consortium. DULS also promotes Open Access e-resources. DULS is regularly conducting innovative Information Literacy Programs (ILP) for the benefit of students, researchers and faculty members and also making efforts in developing tutorials to make the community proficient in the use of WWW. Our OPAC is also being strengthened. We endeavour to further improve all our efforts to facilitate right information to the right user at the right time.</p>
               </div>
            </div>
         </div>
         <hr>
       <?php
        include('footer.php');
       ?>
        </body>
     </html>