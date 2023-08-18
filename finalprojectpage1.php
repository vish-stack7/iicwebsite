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
   </head>
   <body>
      <?php
         include('header.php');
         ?>
      <br><br>
      <h3 class="section-heading text-center">Current Masters Students</h3>
      <hr align="center" width="28%">
      <br/>
      <br/>
      <div style="padding-left:400px">
         <section class="accordion">
            <div class="panel-group" id="faqAccordion">
               <div class="panel panel-default ">
                  <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#batch_2016-2018">
                     <h4 class="panel-title">
                        <a data-vc-accordion="" data-vc-container=".vc_tta-container">
                        <span class="vc_tta-title-text"><br><br>Batch 2016-2018</span>
                        </a>
                     </h4>
                  </div>
                  <div id="batch_2016-2018" class="panel-collapse collapse" style="height: 0px;">
                     <div class="panel-body">
                        <div class="container-fluid">
                           <div class="table-responsive">
                              <table class="table table-hover course-list-table tablesorter" style="width: 1015px; height: 952px;">
                                 <thead>
                                    <tr>
                                       <th class="header" style="width: 226px;">Student ID&nbsp;</th>
                                       <th class="header" style="width: 259px;">Name</th>
                                    </tr>
                                 </thead>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#batch_2017-2019">
                     <h4 class="panel-title">
                        <a data-vc-accordion="" data-vc-container=".vc_tta-container">
                        <span class="vc_tta-title-text">Batch 2017-2019</span>
                        </a>
                     </h4>
                  </div>
                  <div id="batch_2017-2019" class="panel-collapse collapse" style="height: 0px;">
                     <div class="panel-body">
                        <div class="container-fluid">
                           <div class="table-responsive">
                              <table class="table table-hover course-list-table tablesorter" style="width: 1014px;">
                                 <thead>
                                    <tr>
                                       <th class="header" style="width: 231px;">Student ID</th>
                                       <th class="header" style="width: 234px;">Name</th>
                                    </tr>
                                 </thead>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#bathc_18-2020">
                     <h4 class="panel-title">
                        <a data-vc-accordion="" data-vc-container=".vc_tta-container">
                        <span class="vc_tta-title-text">Batch 2018-2020<br><br></span>
                        </a>
                     </h4>
                  </div>
                  <div id="bathc_18-2020" class="panel-collapse collapse" style="height: 0px;">
                     <div class="panel-body">
                        <div style="width: 100%;">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
      </section>
      </div>
      </div>
      </div>
      </section>
      </div>
      </div>
      <br/> <br/>
      <br/> <br/>
      <?php
         include('footer.php');
         ?>
   </body>
</html>