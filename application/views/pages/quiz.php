<!-- ============================================================== -->
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-12 ">
              <h3 class="text-themecolor" style="text-align:center"></h3>
          </div>


      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Start Page Content -->
      <!-- ============================================================== -->
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                    <?php echo form_open('pages/startquiz') ?>
                    <div class="alert alert-success" >


                                          <?php

                                          if($status==1 || $status==4){
                                            echo '<h3 class="text-success" style="text-align:center"><i class="fa fa-unlock"></i> Quiz</h3>';
                                          }
                                          else {
                                            echo '<h3 class="text-success" style="text-align:center"><i class="fa fa-lock"></i> Quiz</h3>';
                                          }


                                          if($sc){
                                            echo '<h4 class="text-success" style="text-align:center"> '.$msg.' </h4>';
                                          }
                                          else {
                                            echo '<h4 class="text-warning" style="text-align:center"> '.$msg.' </h4>';
                                          }
                                          ?>

                                          <h2 class="text-success"><i class="fa fa-check-circle"></i> Module <?=$this->input->get('no')?> Reviw Quiz</h2>
                                          <h4>20 Questions</h4>


                                          In this quiz we'll see how well you were paying attention in the previous chapter. You will get 20 minutes for 20 quiz and 5% marks will be count how quick you can answer. To pass the quiz earn at least 70% marks. For retakes we allow 1 attems every 2 hour.
                                          </br></br>
                                          <input type="hidden" name="quizno" value="<?=$this->input->get('no')?>">
                                          <div style="text-align:center">
                                          <?php

                                          if($status==1 ){
                                            echo '<button   class="btn waves-effect waves-light btn-success">Start Quiz</button>';
                                          }
                                          else if($status==4) {
                                            echo '<button   class="btn waves-effect waves-light btn-success">Retake</button>';
                                          }
                                          else if($status==3) {
                                            echo '<a href="javascript: void(0)"  class="btn waves-effect waves-light btn btn-outline-secondary">Start Quiz</a>';
                                          }
                                          else if($status==2) {
                                            echo '<a href="javascript: void(0)"  class="btn waves-effect waves-light btn btn-outline-secondary"> Retake</a>';
                                          }


                                          ?>


                                        </div>
                    </div>



                  </div>
              </div>
          </div>
      </div>
