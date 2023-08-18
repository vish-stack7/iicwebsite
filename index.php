<!DOCTYPE html>
<html lang="en">
   <head>
      <title>IIC</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="HandheldFriendly" content="true">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <!-- FIRST ROW BLOCKS DIMENSION DEFINED-->
      <style type="text/css">
         @media only screen and(max-width: 800px){
         /*for tablets*/
         .myblock{
         width: 80%;
         padding: 0;
         }
         }
         @media only screen and (max-width: 500px){
         /*for mobilem phone*/
         .myblock{
         width:100%;}
         }
         @media only screen and(max-width: 500px)
         {
         .myblock{
         width: 60%;
         padding: 10;
         }
         }
         .myblock{
         width: 32%;
         height: 100px;
         float: left;
         margin-left:3%;
         margin-top: 60px;
         }
         .myblock1{
         width: 24%;
         height: 300px;
         float: right;
         margin-right:3%;
         margin-top: 60px;
         }
         .myblock2{
         width: 32%;
         height: 100px;
         float: left;
         margin-left:3%;
         margin-top: 320px;
         }
         .myblock3{
         width: 24%;
         height: 300px;
         float: right;
         margin-right:3%;
         margin-top: 120px;
         }
         /*.dropdown-menu a:hover {background-color: #ddd;}
         .dropdown:hover .dropdown-menu {display: block;}
         #navbarDropdownMenuLink:hover {background-color: #ddd;}
         */
         .dropdown-menu a:hover {background-color: #ddd; justify-content: flex-start;
         display: inline;}
         .dropdown:hover .dropdown-menu {display: block; justify-content: flex-start; display: inline;}
         #navbarDropdownMenuLink:hover {background-color: #ddd; justify-content: flex-end; display: inline;}
      </style>
      <!--2nd ROW BLOCKS DIMENSION DEFINED ends here-->
      <!-- Placement Block Dimension definition starts here-->
      <style type="text/css">
         .placementblock{
         width: 94%;
         height: 240px;
         float: left;
         margin-left:3%;
         margin-top: 120px;
         }
      </style>
      <!-- Placement Block Dimension definition ends here-->
      <!-- footer Block Dimension definition starts here-->
      <style type="text/css">
         .footer{
         width: 94%;
         height: 500px;
         float: left;
         margin-left:3%;
         margin-top:60px;
         margin-bottom: 30px;
         }
      </style>
      <!-- footer Block(5 blocks) Dimension definition starts here-->
      <style type="text/css">
         .footb1{
         width: 15%;
         height: 60%;
         float: left;
         margin-left:3%;
         margin-top:2%;
         }
         .footbv{
         width: 15%;
         height: 60%;
         float: left;
         margin-left:6%;
         margin-top:2%;
         }
      </style>
      <!-- footer Block(5 blocks) Dimension definition ENDS here-->
      <!-- footer Block(FOLLOW US) Dimension definition starts here-->
      <style type="text/css">
         .followus{
         width: 51%;
         height: 25%;
         float: left;
         margin-left:3%;
         margin-top:2%;
         }
      </style>
      <!-- footer Block(FOLLOW US) Dimension definition ENDS here
         KNOW MORE option on image-->
      <style>
         .buttononimg {
         position: relative;
         text-align: center;
         color: white;
         }
         .bottom-right {
         position: absolute;
         bottom: 8px;
         right: 16px;
         }  
         .buttononimg .btn {
         position: absolute;
         bottom: 8px;
         right: 16px;
         transform: translate(-50%, -50%);
         -ms-transform: translate(-50%, -50%);
         background-color: #555;
         color: white;
         font-size: 16px;
         padding: 12px 12px;
         border: none;
         cursor: pointer;
         border-radius: 5px;
         text-align: center;
         }
         .buttononimg .btn:hover {
         background-color: black;
         } 


        .myblock {
                height:auto !important;
                width:auto !important;
                margin-top:50px !important;
                text-align:center !important;
            }
            .myblock h1{
                margin-left:0px !important;
            }
            .myblock1 {
                height:auto !important;
                width:auto !important;
                margin-top:50px !important;  
                text-align:center !important;
            }
            #s1{
                margin-right:100px !important;
            }
            .myblock1 h1{
                margin-left:0px !important;
            }
            .myblock2 {
                height:auto !important;
                width:auto !important; 
                margin-top:50px !important; 
                text-align:center !important;
            }
            .myblock2 h1{
                margin-left:0px !important;
            }
            .myblock3 {
                height:auto !important;
                width:auto !important;
                margin-top:50px !important;
                text-align:center !important;  
            }
            .myblock3 h1{
                margin-left:0px !important;
            }
            .footb1{
                height:auto !important;
                width:inherit !important; 
                margin-top:50px !important;
            }
            .footbv{
                height:auto !important;
                width:auto !important; 
                margin-top:50px !important;
            }
            .footer{
                width:auto !important;
                height:auto !important;
            }
            .followus{
                width:auto !important;
                height:auto !important;
            }
            .mapouter {
                height:auto !important;
            } 
            .gmap_canvas {
                width:auto !important;
                height:auto !important;
            }
            
        @media (max-width: 767px) {
            .r2{
                width:70px !important;
                height:70px !important;
            }
            .r3{
                margin-top:auto !important;
                font-size:17px !important;
                margin-bottom:0px !important;
            }
            .r4{
                display:none !important;
            }
            .form-control{
                width:200px !important;
            }
            .btn{
                margin-left:5px !important;
            }
            .carousel {
                height:400px !important;
            }
            .carousel-inner {
                height:400px !important;
            } 
            .d-block{
                height:400px !important;
            }  
            .myblock {
                height:auto !important;
                width:auto !important;
                margin-top:50px !important;
                text-align:center !important;
            }
            .myblock h1{
                margin-left:0px !important;
            }
            .myblock1 {
                height:auto !important;
                width:auto !important; 
                margin-top:50px !important; 
            }
            .myblock1 h1{
                margin-left:0px !important;
            }
            .myblock2 {
                height:auto !important;
                width:auto !important; 
                margin-top:50px !important; 
            }
            .myblock2 h1{
                margin-left:0px !important;
            }
            .myblock3 {
                height:auto !important;
                width:auto !important;  
                margin-top:50px !important;
            }
            .myblock3 h1{
                margin-left:0px !important;
            }
            #s1{
                margin-right:20px !important;
            }
            .placementblock h1{
                margin-left:0px !important;
                text-align:center;
            }
            .footb1{
                height:auto !important;
                width:fit-content !important; 
                margin-top:50px !important;
            }
            .footb1 h4{
                width:fit-content !important; 
            }
            .footbv{
                height:auto !important;
                width:auto !important; 
                margin-top:50px !important;
            }
            .footbv h4{
                text-align:left !important;
            }
            .followus h4{
                margin-left:0px !important;
                text-align:center !important;
            }
            .footer{
                width: -webkit-fill-available !important;
            }
        }
      </style>
      <!-- footer Block Dimension definition ends here-->
   </head>
   <body>
      <div class="jumbotron text-center">
         <a href="http://iic.du.ac.in/" > 
         <img class="r2" src="https://www.cfa.harvard.edu/~agoodman/Presentations/IIC%20Symposium/iic_symp_ag_astromed_07.key/iiclogo_trans.png" style="width:12%; height: 12%;float: left;padding-left: 30px;">
         </a>
         <a href="http://www.du.ac.in/du/" >
         <img class="r2" src="https://upload.wikimedia.org/wikipedia/en/8/84/University_of_Delhi.png" style="width:10%;height: 10%;float: right;margin-bottom: 50px;" >
         </a>
         <h1 class="r3">INSTITUTE OF INFORMATICS AND COMMUNICATION</h1>
         <p class="r4">Accredited 'A' Grade by NAAC</p>
         <h3 class="r4">UNIVERSITY OF DELHI,SOUTH CAMPUS</h3>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light w-100 ">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <li class="nav-item active">
        <a class="nav-link" href="main.php" id="navbarDropdownMenuLink">HOME<span class="sr-only">(current)</span></a>
      </li>
  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ACADEMICS
         </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <a class="dropdown-item" href="M.sc%20iic.php">M.Sc COURSE STRUCTURE</a>
           <a class="dropdown-item" href="M.sc%20syllabus.php">M.Sc Informatics Syllabus</a>
          <a class="dropdown-item" href="phd.php">Ph.D Course Structure</a>
          <a class="dropdown-item" href="VLE.php">VLE</a>
          <a class="dropdown-item" href="AcademicCalender.pdf">Academics Calender</a>
          <a class="dropdown-item" href="https://github.com/CodeChari/MSc_Informatics_Entrance_Exam_Papers">Previous year Course Paper</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ADMISSIONS
         </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Entranceresult&interviewschedule.php">Entrance Results & Interview Schedule</a>
          <a class="dropdown-item" href="Mscadmsn.php">Post Graduation(M.Sc)</a>
          <a class="dropdown-item" href="Phdadmission.php">Research (Ph.D)</a>
          <a class="dropdown-item" href="msc-informatics-entrance-syllabus.pdf">Entrance Syllabus(M.Sc)</a>
          <a class="dropdown-item" href="phdsyllabusadmsn.php">Entrance Syllabus (Ph.D)</a>
          <a class="dropdown-item" href="Exampaperadmsn.php">Previous year Entrance Exam Papers</a>
          <a class="dropdown-item" href="FAQs.php">FAQs</a>
        </div>
      </li>
     <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          INFRASTRUCTURE
         </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Library</a>
          <a class="dropdown-item" href="#">Linux Lab(Bamboo Hut)</a>
          <a class="dropdown-item" href="#">Mac Lab</a>
          <a class="dropdown-item" href="#">Communication/Microprocessor Lab</a>
          <a class="dropdown-item" href="#">DUWA Building</a>
          <a class="dropdown-item" href="#">Hostels</a>
          <a class="dropdown-item" href="#">Health Center</a>

        </div>
      </li>-->
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          STUDENT CORNER
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="finalprojectpage1.php">M.sc Students</a>
          <a class="dropdown-item" href="finalprojectpage2.php">Research Fellows</a>
          <a class="dropdown-item" href="finalprojectpage3.php">Student Committees</a>
          <a class="dropdown-item" href="finalprojectpage4.php">GitLab@IIC</a>
          <a class="dropdown-item" href="finalprojectpage5.php">Informatica</a>
          <a class="dropdown-item" href="finalprojectpage6.php">Student Grievances</a>
          <a class="dropdown-item" href="finalprojectpage7.php">Students Project</a>
          <a class="dropdown-item" href="finalprojectpage8.php">Research Fellows Papers</a>
          <a class="dropdown-item" href="finalprojectpage9.php">Section for Reading</a>
        </div>
      </li>
  <!--    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          BEYOND ACADEMICS
         </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Envisage-Annual Tech Fest</a>
          <a class="dropdown-item" href="#">Reminiscence- Almuni Meet</a>
          <a class="dropdown-item" href="#">Sports/Literacy Club/Cultural Fest</a>
        </div>
      </li>
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CAMPUS LIFE
         </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Educational Trips</a>
          <a class="dropdown-item" href="#">Student Activities</a>
          <a class="dropdown-item" href="#">Eco Friendly Environment</a>
          <a class="dropdown-item" href="#">Library Facilities</a>
          <a class="dropdown-item" href="#">Extra Curricular Activities</a>
          <a class="dropdown-item" href="#">Hostel Events</a>

        </div>
      </li>-->

          <li class="nav-item active">
        <a class="nav-link" href="infra.php" id="navbarDropdownMenuLink">INFRASTUCTURE<span class="sr-only">(current)</span></a>
      </li>

 <li class="nav-item active">
        <a class="nav-link" href="campuslife.php" id="navbarDropdownMenuLink">CAMPUS LIFE<span class="sr-only">(current)</span></a>
      </li>


      <li class="nav-item active">
        <a class="nav-link" href="placement.php" id="navbarDropdownMenuLink">PLACEMENT<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" id="navbarDropdownMenuLink">ALUMNI<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="http://iic.du.ac.in/magazineiic2019/#page/44" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          IIC MAGAZINE</a>
      </li>
    </ul>
  </div>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
      <!-- Header part ends hereeeeeeee-->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="http://iic.du.ac.in/uploads/images/Defaults/IIC.jpg" class="d-block w-100" alt="..." style="height:700px;">
            </div>
            <div class="carousel-item">
               <img src="http://www.du.ac.in/du/uploads/images/showtime/UDSC/DSC_0499.JPG" class="d-block w-100" alt="..." style="height:700px;">
            </div>
            <div class="carousel-item">
               <img src="http://maths.du.ac.in/images/deptt-sc.jpg" class="d-block w-100" alt="..." style="height:700px;">
            </div>
            <div class="carousel-item">
               <img src="https://www.duadmissions.co.in/wp-content/uploads/2015/12/Delhi-University-MBA-Admissiosn.jpg" class="d-block w-100" alt="..." style="height:700px;">
            </div>
            <div class="carousel-item">
               <img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Auditorium_at_South_Campus_of_FMS_Delhi.JPG" class="d-block w-100" alt="..." style="height:700px;">
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
      <div class="container container-fluid mt-5">
         <div class="content">
            <h2 style="color:orange; text-align: center;"><u>Welcome to IIC</u></h2>
            <br>
            <h5>
               Established in 1997, Institute of Informatics & Communication (IIC), University of Delhi, provides studies in the field of informatics, which is essentially a blend of three domains: networking, telecommunication and software. IIC offers degrees in Masters of Science (Informatics) and PhD (Research). Over the years, IIC has grown remarkably in its stature and accomplishments with a dedicated pursuit of excellence, academic integrity and accountability.
               <br>
               <br> 
               Providing a holistic approach, students are free to explore and further enhance the fields of networking, telecommunication and software with in-depth knowledge about data processing, programming languages and system analysis.
               <br>
               <br>
               A mutual relationship is fostered between the faculty and students that allows the institute to move away from the conventional and includes not only classroom lectures but also tutorials, projects , assignments , seminars , presentations and ICT based learning. Masters of Science ( Informatics) in DU is the space where networking , telecommunication and software collate to enable its students to cater to the growing demands of the industry and to emerge as IIC-ians with a brand mark of their own.
            </h5>
         </div>
      </div>
      <!-- Blocks First Row -->
      <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="myblock bg-#AED6F1">
         <h1 style="margin-left:33%;color:grey;">IIC IN NEWS</h1>
         <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
               <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
               <li data-target="#carouselExampleIndicators2" data-slide-to="4"></li>
               <li data-target="#carouselExampleIndicators2" data-slide-to="5"></li>
            </ol>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="http://iic.du.ac.in/uploads/images/Defaults/IIC.jpg" class="d-block w-100" alt="..." style="height:300px;">
               </div>
               <div class="carousel-item">
                  <img src="http://www.du.ac.in/du/uploads/images/showtime/UDSC/DSC_0499.JPG" class="d-block w-100" alt="..." style="height:300px;">
               </div>
               <div class="carousel-item">
                  <img src="http://maths.du.ac.in/images/deptt-sc.jpg" class="d-block w-100" alt="..." style="height:300px;">
               </div>
               <div class="carousel-item">
                  <img src="https://www.duadmissions.co.in/wp-content/uploads/2015/12/Delhi-University-MBA-Admissiosn.jpg" class="d-block w-100" alt="..." style="height:300px;">
               </div>
               <div class="carousel-item">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Auditorium_at_South_Campus_of_FMS_Delhi.JPG" class="d-block w-100" alt="..." style="height:300px;">
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            <!-- Added button images -->
            <div class="buttononimg">
               <button class="btn">Know More</button>
            </div>
         </div>
      </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="myblock bg-#AED6F1">
         <h1 style="margin-left:40%;color:grey;">EVENTS</h1>
         <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
               <li data-target="#carouselExampleIndicators3" data-slide-to="3"></li>
               <li data-target="#carouselExampleIndicators3" data-slide-to="4"></li>
               <li data-target="#carouselExampleIndicators3" data-slide-to="5"></li>
            </ol>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="http://iic.du.ac.in/uploads/images/Defaults/IIC.jpg" class="d-block w-100" alt="..." style="height:300px;">
               </div>
               <div class="carousel-item">
                  <img src="http://www.du.ac.in/du/uploads/images/showtime/UDSC/DSC_0499.JPG" class="d-block w-100" alt="..." style="height:300px;">
               </div>
               <div class="carousel-item">
                  <img src="http://maths.du.ac.in/images/deptt-sc.jpg" class="d-block w-100" alt="..." style="height:300px;">
               </div>
               <div class="carousel-item">
                  <img src="https://www.duadmissions.co.in/wp-content/uploads/2015/12/Delhi-University-MBA-Admissiosn.jpg" class="d-block w-100" alt="..." style="height:300px;">
               </div>
               <div class="carousel-item">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Auditorium_at_South_Campus_of_FMS_Delhi.JPG" class="d-block w-100" alt="..." style="height:300px;">
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            <!-- Added button images -->
            <div class="buttononimg">
               <button class="btn">Know More</button>
            </div>
         </div>
      </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="myblock1 bg-#AED6F1" id="s1">
         <a href="noticeboard.php">
            <h1 style="margin-left:18%;color:grey;">BULLETIN BOARD</h1>
         </a>
         <marquee style = "color:#D47929" weight="40%" direction="up" height="100%"  behaviour="scroll"  scroll amount="10" scroll delay="350">
            <a href="#" >>> M.Sc Admission </a><br/> ----------------------------------- <br/>
            <a href="#">>> First Year Result </a><br/> ----------------------------------- <br/>
            <a href="#">>> Internship for Students</a> <br/> ----------------------------------- <br/>
            <a href="#">>> Entrance Results</a> <br/> ----------------------------------- <br/>
            <a href="#">>> Student called for Interview</a> <br/> ----------------------------------- <br/>
            <a href="#">>> First List of Admission</a> <br/> ----------------------------------- <br/>
         </marquee>
      </div>
      </div>
      <!-- Block of first Row over 
         And 2nd Row of Block started-->
         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="myblock2 bg-#AED6F1">
         <h1 style="margin-left:24%;color:grey;">FACULTY MEMBERS</h1>
         <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
            </ol>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="http://iic.du.ac.in/uploads/images/Gallery/index/7-12.jpg" class="d-block w-100" alt="..." style="height:300px;">
               </div>
               <div class="carousel-item">
                  <img src="https://i.ytimg.com/vi/diZj0x9Xtio/maxresdefault.jpg"class="d-block w-100" alt="..." style="height:300px;">
               </div>
               <div class="carousel-item">
                  <img src="http://sanjeevsingh.org/uploads/_products/product_2/mkd.jpg" class="d-block w-100" alt="..." style="height:300px;">
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            <!-- Added button images -->
            <div class="buttononimg">
               <button class="btn">Know More</button>
            </div>
         </div>
      </div>
      </div>
      <!-- 2nd row first block over
         2nd Row 2nd Block started-->
         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="myblock2 bg-#AED6F1">
         <h1 style="margin-left:29%;color:grey;">IIC GALLERY</h1>
         <div id="carouselExampleIndicators6" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators6" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators6" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators6" data-slide-to="2"></li>
            </ol>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="http://iic.du.ac.in/uploads/images/Gallery/index/IMG_2905.JPG" class="d-block w-100" alt="..." style="height:300px;">
               </div>
               <div class="carousel-item">
                  <img src="http://iic.du.ac.in/uploads/images/Gallery/index/Varchasv.jpg"class="d-block w-100" alt="..." style="height:300px;">
               </div>
               <div class="carousel-item">
                  <img src="http://iic.du.ac.in/uploads/images/Gallery/index/IMG_2935.JPG" class="d-block w-100" alt="..." style="height:300px;">
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators6" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators6" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            <!-- Added button images -->
            <div class="buttononimg">
               <button class="btn">Know More</button>
            </div>
         </div>
      </div>
      </div>
      <!-- 2nd row 2nd block over
         2nd Row 3rd Block started-->
         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <div class="myblock3 bg-#AED6F1">
         <h1 style="margin-left:20%;color:grey;">STUDENTS INFO</h1>
         <a href="finalprojectpage1.php">
         <img src="http://iic.du.ac.in/uploads/images/Gallery/index/IMG_2905.JPG" class="d-block w-100" alt="..." style="height:300px;">
         </a>
         <!-- Added button images -->
         <div class="buttononimg">
            <a href="finalprojectpage1.php"> <button class="btn">Know More</button> </a>
         </div>
      </div>
      </div>
      </div>
      <!-- 2nd row 3rd block over-->
      <!-- Placement Block starts here  (bg-#AED6F1)-->
      <div class="placementblock bg-#AED6F1">
         <h1 style="margin-left:39%;color:grey;">PLACES WE HAVE REACHED </h1>
         <marquee scrollamount="20" behavior="alternate">
            <img src="https://cdn.freebiesupply.com/logos/large/2x/tcs-3-logo-png-transparent.png" style="height: 150px;width: 150px;margin-right: 30px">
            <img src="https://img.pngio.com/hcl-technologies-sponsors-21st-century-enterprise-of-the-year-hcl-png-237_166.png" style="height: 100px;width: 100px;margin-right: 30px">
            <img src="https://mms.businesswire.com/media/20170502006181/en/584250/5/1WiproNewLogoImage.jpg" style="height: 150px;width: 150px;margin-right: 30px">
            <img src="http://www.cdot.in/cdotweb/assets/img/cdot_logo.png" style="height: 150px;width: 150px;margin-right: 30px">
            <img src="http://pngimg.com/uploads/ibm/ibm_PNG19660.png" style="height: 100px;width: 100px ;margin-right: 30px">
            <img src="https://cdn.freebiesupply.com/logos/large/2x/amd-logo-png-transparent.png" style="height: 150px;width: 150px ;margin-right: 30px">
            <img src="https://media.glassdoor.com/sqll/7927/infosys-squarelogo-1460615341362.png" style="height: 150px;width: 150px;margin-right: 30px">
            <img src="http://new.technicalfaces.com/wp-content/uploads/2018/12/cisco.jpg" style="height: 150px;width: 150px;margin-right: 30px">
            <img src="https://www.allindiajobs.in/wp-content/uploads/2018/07/Aricent-Walk-in.png" style="height: 150px;width: 150px;margin-right: 30px">
            <img src="http://orignallogo.com/wp-content/uploads/2018/05/Siemens-Logo-Icon-Vector-Free-Download.jpg" style="height: 150px;width: 150px;margin-right: 30px">
            <img src="https://logodix.com/logo/88380.png" style="height: 150px;width: 150px;margin-right: 30px">
            <img src="http://seekvectorlogo.com/wp-content/uploads/2018/02/qualcomm-vector-logo.png" style="height: 150px;width: 150px;margin-right: 30px">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Birlasoft_logo.png" style="height: 150px;width: 150px;margin-right: 30px">
            <img src="https://cdn.freebiesupply.com/logos/large/2x/sapient-logo-png-transparent.png" style="height: 150px;width: 150px;margin-right: 30px">
            <img src="https://media.licdn.com/dms/image/C510BAQEpK8Z1hwdwNw/company-logo_200_200/0?e=2159024400&v=beta&t=e3mG1MpFeSznMPlfhON2iKjxVmRZrD6l7vWiXRSB6RM" style="height: 150px;width: 150px;margin-right: 30px">
         </marquee>
      </div>
      <!-- Foot Block starts here  (bg-#AED6F1) #293BD4-->
      <div class="footer bg-light">
      <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
         <div class="footb1 bg-#AED6F1">
            <h4 style="text-align: center; ">ABOUT IIC</h4>
            <p>Establsihed in 1997, Institute of Informatics & Communication (IIC) at University of Delhi serves as a center for inter-disciplinary studies for humanities, social sciences, pure and applied sciences. IIC offers degrees in Masters of Science (Informatics) and PhD (Research).</p>
         </div>
         </div>
         <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
         <div class="footb1 bg-#AED6F1">
            <h4 style="text-align: center; ">CONTACT US</h4>
            <p><strong>IIC, University of Delhi</strong><br>
               South Campus, Benito Juarez Road </br>
               New Delhi-110021
               <br></br>
               <br> Telephone: +91 (011)-2411 0237</br> 
               Email: iicoffice@south.du.ac.in
            </p>
         </div>
         </div>
         <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
         <div class="footb1 bg-#AED6F1">
            <a href="http://www.du.ac.in/du/">
               <h4 style="text-align: center; ">UNIVERSITY OF DELHI</h4>
            </a>
            <p>IIC is a constituent institute of the University of Delhi (established 1922) and is among its 28 centres for postgraduate studies.</p>
         </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
         <div class="footb1 bg-#AED6F1">
            <h4 style="text-align: center; ">GETTING AROUND IIC</h4>
            <div class="mapouter">
               <div class="gmap_canvas">
                  <iframe width="50%" height="266" id="gmap_canvas" src="https://maps.google.com/maps?q=iic%20du&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
               </div>
               <style>
                  .mapouter{
                  position:relative;
                  height:500px;
                  width:600px;
                  }
                  .gmap_canvas{
                  overflow:hidden;
                  background:none!important;
                  height:500px;
                  width:600px;
                  }
               </style>
            </div>
         </div>
         </div>
         <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
         <div class="footbv bg-#AED6F1">
            <h4 style="text-align:center; ">VISITORS COUNT</h4>
            <br>
            <br>
         
             
           <!-- hitwebcounter Code START -->
                <a href="http://www.hitwebcounter.com" target="_blank">
                <img src="http://hitwebcounter.com/counter/counter.php?page=7118548&style=0019&nbdigits=6&type=page&initCount=6772" style="padding: 20px 30px" height="200" width="250" title="webs counters" Alt="webs counters"                                   border="0" >
                </a>        


         </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
         <div class="followus bg-#AED6F1">
            <!-- Social Media Styling Code starts here-->
            <style>
               .fa:hover {
               opacity: 0.7;
               }
            </style>
            <a href="https://www.facebook.com/iicudscofficial/" class="fa fa-facebook"><img src="https://image.flaticon.com/icons/svg/174/174848.svg" style="height: 60px;width: 60px;margin-right: 20px"></a>
            <a href="https://twitter.com/iicudscofficial" class="fa fa-twitter"><img src="https://image.flaticon.com/icons/svg/174/174876.svg" style="height: 60px;width: 60px;margin-right: 20px"></a>
            <a href="#" class="fa fa-google"><img src="https://image.flaticon.com/icons/svg/174/174851.svg" style="height: 60px;width: 60px;margin-right: 20px"></a>
            <a href="https://in.linkedin.com/in/placement-cell-iic-udsc-845538125" class="fa fa-linkedin"><img src="https://image.flaticon.com/icons/svg/174/174857.svg" style="height: 60px;width: 60px;margin-right: 20px"></a>
            <a href="https://www.youtube.com/user/IICUDSCOFFICIAL" class="fa fa-youtube"><img src="https://image.flaticon.com/icons/svg/174/174883.svg" style="height: 60px;width: 60px;margin-right: 20px"></a>
            <a href="#" class="fa fa-instagram"><img src="https://image.flaticon.com/icons/svg/174/174855.svg" style="height: 60px;width: 60px;margin-right: 20px"></a>
            <h4 style="text-decoration: underline; margin-left: 150px;margin-top: 30px"><strong>FOLLOW US</strong></h4>
         </div>
         <div>
         <a href="helpline.php">
         <h3 style="text-decoration: underline; margin-top: 30px;text-align:center;" ><strong>HELPLINE NUMBERS</strong></h3>
         </a>
         </div>
      </div>
   </body>