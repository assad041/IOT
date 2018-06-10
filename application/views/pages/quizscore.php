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


                    <?php



                    if ($score<=70) {
                      echo '  <div class="alert alert-danger" style="margin-bottom:0px">


                                              <h2 class="text-success"><i class="fa fa-check-circle"></i> Module '.$this->input->post('quizno').' Reviw Quiz</h2>
                                              <h4 style="color:red;"> <i class="fa fa-times"></i> '.$point.'/20 points earned ('.$score.' %)</h4>
                                               You have not pass yet. You need at least 70% to pass. Review the material and try again! You have 1 attemps every 2 hour.
                                              </br></br>
                                              <input type="hidden" name="quizno" value="1">
                                              <div style="text-align:center">
                                              <a  href="quiz?no='.$this->input->post('quizno').'" class="btn waves-effect waves-light btn-success"> Finish</a>
                                            </div>
                        </div>';

                    }
                    else {
                      echo '  <div class="alert alert-success" style="margin-bottom:0px; ">


                                              <h2 class="text-success"><i class="fa fa-check-circle"></i> Module '.$this->input->post('quizno').' Reviw Quiz</h2>
                                              <h4 style="color:green;"> <i class="fa fa-check-circle"> </i> '.$point.'/20 points earned ('.$score.' %)</h4>
                                               Congratulation! You passed the quiz.
                                              </br></br>
                                              <input type="hidden" name="quizno" value="1">
                                              <div style="text-align:center">
                                              <a  href="quiz?no='.$this->input->post('quizno').'" class="btn waves-effect waves-light btn-success"> Finish</a>
                                            </div>
                        </div>';
                    }


                    ?>



                    <div class="alert alert-info" >



                                            <?php

                                              $i=1;
                                              for($i=1; $i<=20 ; $i++) {
                                                echo '<p><span>Q '.$i.'</span> ';
                                                $id="quiz_id".$i;
                                                $quiz=$this->Post_model->get_quiz_by_id($this->input->post($id));
                                                $quiz_ans="ans".$i;
                                                echo $quiz['quiz_q'];
                                                $ans=$this->input->post($quiz_ans);
                                                if($ans==""){
                                                  echo '<br><br><button type="button" class="btn btn-danger btn-sm btn-circle"> <i class="fa fa-times"></i> </button>&emsp;N/A';
                                                }
                                                else if($ans!=$quiz['quiz_ans']){
                                                  echo '<br><br><button type="button" class="btn btn-danger btn-sm btn-circle"> <i class="fa fa-times"></i> </button>&emsp;Answer: '.$ans;
                                                }
                                                else {
                                                  echo '<br><br><button type="button" class="btn btn-success  btn-sm btn-circle"> <i class="fa fa-check"></i> </button>&emsp;Answer: '.$ans;
                                                }

                                                echo "<br><br><hr>";
                                              }
                                             ?>
                                            <div style="text-align:center">

                                            </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
