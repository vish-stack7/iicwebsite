<!DOCTYPE html>
<html lang="en">
   <head>
      <title>IIC</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </head>
   <body>
      <?php
         include('header.php')
         ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
         .carousel-inner img {
         width: 100%;
         height: 100%;
         }
         * {
         box-sizing: border-box;
         }
         body {
         background-color: darkcyan;
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
         left: -35%;
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
      <body>
         <div class="timeline">
         <div class="container left">
            <div class="content">
               <h2>EDUCATIONAL TRIPS</h2>
               <div id="demo" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                     <li data-target="#demo" data-slide-to="0" class="active"></li>
                     <li data-target="#demo" data-slide-to="1"></li>
                     <li data-target="#demo" data-slide-to="2"></li>
                  </ul>
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="https://amp.businessinsider.com/images/5b32aa651ae6623f008b492e-750-500.jpg" alt="Los Angeles" width="1100" height="500">
                     </div>
                     <div class="carousel-item">
                        <img src="https://thevespatrip.com/img/vt19/2-index.jpg" alt="Chicago" width="1100" height="500">
                     </div>
                     <div class="carousel-item">
                        <img src="https://travel.home.sndimg.com/content/dam/images/travel/stock/2018/10/30/iStock_846088202_ChrisBoswell_Badlands_USRoadTripRoutes.jpg.rend.hgtvcom.966.644.suffix/1540915995809.jpeg" alt="New York" width="1100" height="500">
                     </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                  </a>
               </div>
               <p ><br/>When the University of Delhi expanded in many directions to keep pace with a rapidly growing city, South Campus was established in 1973 to facilitate access for South Delhi residents. It moved to its present location on Benito Juarez Road, near Dhaula Kuan, in 1984. The Campus is now spread across 69 acres of green, hilly terrain and its buildings blend attractively with the natural surroundings. The various Departments are located in the Arts Faculty, the Faculty of Inter-disciplinary and Applied Sciences and the S.P. Jain Centre for Management Studies. Besides these, the Campus hosts a substantial library, a Health Centre, a bank, a post office, DTC Pass Section and administrative and examination blocks. South Campus also provides some residential quarters for faculty members and the non-teaching staff. Outstation students are offered accommodation in three hostels: the Geetanjali Hostel for Women, the Saramati Hostel for Men and the Aravalli P.G. Men’s Hostel</p>
            </div>
         </div>
         <div class="container right">
            <div class="content">
               <h2>ECO FRIENDLY ENVIRONMENT</h2>
               <div id="demo" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                     <li data-target="#demo" data-slide-to="0" class="active"></li>
                     <li data-target="#demo" data-slide-to="1"></li>
                     <li data-target="#demo" data-slide-to="2"></li>
                  </ul>
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="https://media.glassdoor.com/l/4e/f6/ed/5b/green-environment-saigon-south-campus.jpg" alt="Los Angeles" width="1100" height="500">
                     </div>
                     <div class="carousel-item">
                        <img src="http://www.du.ac.in/du/uploads/images/showtime/UDSC/DSC_0263.JPG" alt="Chicago" width="1100" height="500">
                     </div>
                     <div class="carousel-item">
                        <img src="https://c8.alamy.com/comp/C86K2D/indian-students-at-delhi-university-in-former-viceroys-residence-new-C86K2D.jpg" alt="New York" width="1100" height="500">
                     </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                  </a>
               </div>
               <p><br/>Delhi University Library System (DULS) consists of more than 34 libraries and is accomplishing its task of reaching to wider academic community. DULS has advanced its web activity with the subscription to many high quality electronic databases being made available through campus network to faculty, students and research scholars. In addition to this 20 more databases are also accessible through UGC-INFONET Digital Library Consortium. DULS also promotes Open Access e-resources. DULS is regularly conducting innovative Information Literacy Programs (ILP) for the benefit of students, researchers and faculty members and also making efforts in developing tutorials to make the community proficient in the use of WWW. Our OPAC is also being strengthened. We endeavour to further improve all our efforts to facilitate right information to the right user at the right time.</p>
            </div>
         </div>
         <div class="container left">
            <div class="content">
               <h2>LIBRARY FACILITIES</h2>
               <div id="demo" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                     <li data-target="#demo" data-slide-to="0" class="active"></li>
                     <li data-target="#demo" data-slide-to="1"></li>
                     <li data-target="#demo" data-slide-to="2"></li>
                  </ul>
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="https://cdn2.hercampus.com/Thrane.CoverPhotoLibrary.jpg" alt="Los Angeles" width="1100" height="500">
                     </div>
                     <div class="carousel-item">
                        <img src="https://imgstaticcontent.lbb.in/lbbnew/wp-content/uploads/2018/04/24151512/centrallibrary5.jpg?w=1200&h=628&fill=blur&fit=fill" alt="Chicago" width="1100" height="500">
                     </div>
                     <div class="carousel-item">
                        <img src="https://s3.amazonaws.com/blog.puzzlenation.com/library+princeton.jpg" alt="New York" width="1100" height="500">
                     </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                  </a>
               </div>
               <p><br/>Delhi University Library System (DULS) consists of more than 34 libraries and is accomplishing its task of reaching to wider academic community. DULS has advanced its web activity with the subscription to many high quality electronic databases being made available through campus network to faculty, students and research scholars. In addition to this 20 more databases are also accessible through UGC-INFONET Digital Library Consortium. DULS also promotes Open Access e-resources. DULS is regularly conducting innovative Information Literacy Programs (ILP) for the benefit of students, researchers and faculty members and also making efforts in developing tutorials to make the community proficient in the use of WWW. Our OPAC is also being strengthened. We endeavour to further improve all our efforts to facilitate right information to the right user at the right time.</p>
            </div>
         </div>
         <div class="container right">
            <div class="content">
               <h2>EXTRA CURRICULAM ACTIVITY</h2>
               <div id="demo" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                     <li data-target="#demo" data-slide-to="0" class="active"></li>
                     <li data-target="#demo" data-slide-to="1"></li>
                     <li data-target="#demo" data-slide-to="2"></li>
                  </ul>
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="http://iic.du.ac.in/envisage/images/pic01.jpg" alt="Los Angeles" width="1100" height="500">
                     </div>
                     <div class="carousel-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZsqigycFAEVgplAZwGOz74p4dEHNOWI3I1_p9A5iqbzMpU8LI-A" alt="Chicago" width="1100" height="500">
                     </div>
                     <div class="carousel-item">
                        <img src="https://s3.ap-south-1.amazonaws.com/hansindia-bucket/Chairman_6371.jpg" alt="New York" width="1100" height="500">
                     </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                  </a>
               </div>
               <p><br/>Delhi University Library System (DULS) consists of more than 34 libraries and is accomplishing its task of reaching to wider academic community. DULS has advanced its web activity with the subscription to many high quality electronic databases being made available through campus network to faculty, students and research scholars. In addition to this 20 more databases are also accessible through UGC-INFONET Digital Library Consortium. DULS also promotes Open Access e-resources. DULS is regularly conducting innovative Information Literacy Programs (ILP) for the benefit of students, researchers and faculty members and also making efforts in developing tutorials to make the community proficient in the use of WWW. Our OPAC is also being strengthened. We endeavour to further improve all our efforts to facilitate right information to the right user at the right time.</p>
            </div>
         </div>
         <div class="container left">
            <div class="content">
               <h2>HOSTEL NIGHT</h2>
               <div id="demo" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                     <li data-target="#demo" data-slide-to="0" class="active"></li>
                     <li data-target="#demo" data-slide-to="1"></li>
                     <li data-target="#demo" data-slide-to="2"></li>
                  </ul>
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="http://keshav.du.ac.in/layout/images/Hostel/Lohri18.jpg">
                     </div>
                     <div class="carousel-item">
                        <img src="http://cauverycollege.ac.in/hostel%20dinner1.jpg" alt="Chicago" width="1100" height="500">
                     </div>
                     <div class="carousel-item">
                        <img src="https://d1wvhegsi0wquf.cloudfront.net/media/uploads/2016/06/15/hindu-hostel.jpg"g alt="New York" width="1100" height="500">
                     </div>
                  </div>
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                  </a>
               </div>
               <p ><br/>Delhi University Library System (DULS) consists of more than 34 libraries and is accomplishing its task of reaching to wider academic community. DULS has advanced its web activity with the subscription to many high quality electronic databases being made available through campus network to faculty, students and research scholars. In addition to this 20 more databases are also accessible through UGC-INFONET Digital Library Consortium. DULS also promotes Open Access e-resources. DULS is regularly conducting innovative Information Literacy Programs (ILP) for the benefit of students, researchers and faculty members and also making efforts in developing tutorials to make the community proficient in the use of WWW. Our OPAC is also being strengthened. We endeavour to further improve all our efforts to facilitate right information to the right user at the right time.</p>
            </div>
         </div>
          </div>
       <?php
        include('footer.php');
       ?>
       </body>
</html>