
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
     meta name=<"viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #474e5d;
  font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
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
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: -25%;
}

/* Place the container to the right */
.right {
  left: 25%;
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
  padding: 20px 30px;
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
  <br>
  <br>


<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  background-color: #474e5d;
  font-family: Helvetica, sans-serif;
}
/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}
</style>     
   </head>
   <body>
       <?php
        include('header.php');
       ?>
         
        
       
       <div class="header">
  <h2>Course Structure - M.Sc Informatics</h2>
</div>



























<div class="timeline">
  <div class="container left">
    <div class="content">
                                                  <h2 class="heading col-xs-12">Semester - 0</h2>

    <p><strong>Total Credits : 0</strong></p>
<ol>
<li>IT01. Computational, Numerical and Statistical Methods (Credits : 0 )</li>
<li>IT02. Foundations of Linear System Theory ( Credits : 0)</li>
<li>IT03. Introduction to Programming (Credits : 0)</li>
<li>IT04. Analog Electronics (Credits : 0)</li>
<li>IT05. Digital Electronics and Computer Organization (Credits : 0)</li>
</ol>             



 <div class="timeline-footer">
                            <a class="pull-right" href="M.sc syllabus.php">Read More</a>
                        </div>

       </div>
  </div>














  <div class="container right">
    <div class="content">
      



      <h2 class="heading col-xs-12">Semester - 1</h2>
 <p><strong>Total Credits :32</strong></p>
<ol>
<li>IT11. Programming Methodology (Credits :7)</li>
<li>IT12. Computer Architecture (Credits : 4)</li>
<li>IT13. Introduction to Communication Systems (Credits : 7)</li>
<li>IT14. Mathematical Foundation for Computer Science (Credits : 7 )</li>
<li>IT15. Microprocessor and Interface Programming (Credits : 7)</li>
</ol>  


                                            <div class="timeline-footer">
                            <a class="pull-right" href="M.sc syllabus.php">Read More</a>
                        </div>



    </div>
  </div>













  <div class="container left">
    <div class="content">
    
<h2 class="heading col-xs-12">Semester - 2</h2>
 <p><strong>Total Credits : 32 + 10 = 42</strong></p>
<ol>
<li>IT21.Voice and Data Communication (Credits : 4)</li>
<li>IT22.Data Structure and Design Algorithm (Credits : 7)</li>
<li>IT23.Operating Systems (Credits : 7)</li>
<li>IT24.Programming Languages (Credits : 7)</li>
<li>IT25.Computer Graphics and Multimedia (Credits : 7)</li>
</ol>              
   <div class="timeline-footer">
                            <a class="pull-right" href="M.sc syllabus.php">Read More</a>
                        </div>
     
    </div>
  </div>










  <div class="container right">
    <div class="content">

<h2 class="heading col-xs-12">Summer Internship</h2>
 <div class="timeline-body">
                        <p>The Summer Training in IIC starts in immediately after Second Semester gets over. This is one of the most important and essential part of the curriculum, as the students are given the new projects to accomplish in a given time(8 weeks), so that the students will get some exposure to the real time projects.&nbsp;</p>
<p>Recent work of the students can found at our gitlab workspace.</p>
<p><a href="https://git.iic.ac.in/" target="_blank" rel="noopener">IIC GitLab Server</a></p>                    </div>
    <div class="timeline-footer" align="right">
                            <a class="pull-right" href="M.sc syllabus.php">Read More</a>
                        </div>








    </div>
  </div>





  




  <div class="container left">
    <div class="content">
        <h2 class="heading col-xs-12">Semester - 3</h2>
  <p><strong>Total Credits : 32</strong></p>
<ol>
<li>IT31.Network Architecture (Credits : 7)</li>
<li>IT32.Database Management System (Credits : 7)</li>
<li>IT33.Tele-Communication Networks and Technology (Credits : 4)</li>
<li>IT34.Object Oriented Technology (Credits : 7)</li>
<li>IT35.Software Engineering I (Credits : 7)</li>
</ol>
<p>&nbsp;</p>
 <a class="pull-right" href="M.sc syllabus.php">Read More</a>






    </div>
  </div>







  <div class="container right">
    <div class="content">
      






                                                    <h2 class="heading col-xs-12">Semester - 4</h2>
  <p><strong>Total Credits : 32</strong></p>
<ol>
<li>IT41.Network Application &amp; Development (Credits : 7)<strong><br></strong></li>
<li>IT42.Tele-Communication Network Management (Credits : 7)</li>
<li>IT43.Modelling, Simulation and Performance Evaluation (Credits : 7)</li>
<li>IT44. IT Management (Credits : 4)</li>
<li>IT45.Software Engineering II (Credits : 7)</li>
</ol>             
    <a class="pull-right" href="M.sc syllabus.php">Read More</a>
   






    </div>
  </div>
</div>

       
       <?php
        include('footer.php');
       ?>
        </body>
     </html>