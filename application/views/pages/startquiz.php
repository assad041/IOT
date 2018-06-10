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
                    <div class="alert alert-info" >



                                        <h3 class="text-info" style="text-align:center">Quiz</h3>
                                        <div style="text-align:right;  font-weight: bold; ">
                                        <label > Time Left: &nbsp;<i class="mdi mdi-clock"></i>&nbsp;</label><label id="minutes">20</label>:<label id="seconds">00 </label>&emsp;
                                        </div>

                                          <?php
                                          $attributes = array('id' => 'myform' ,'method'=>'post','name'=>'myform');
                                           echo form_open('pages/quizscore', $attributes) ?>
                                            <?php
                                              $qnn="";
                                              $i=0;
                                              foreach ($quiz as $quizs) {
                                                echo '
                                                <p><span>Q '.++$i.'</span> ';
                                                echo $quizs['quiz_q'];
                                                $qnn=$quizs['quiz_no'];
                                                echo '
                                                <div class="demo-radio-button">
                                                  <input type="radio"   name="ans'.$i.'" value="'.$quizs['quiz_op1'].'" id="radio_'.$i."1".'" class="radio-col-blue">
                                                  <label for="radio_'.$i."1".'" ><span>A</span> '.$quizs['quiz_op1'].'</label>
                                                  <input type="radio"   name="ans'.$i.'" value="'.$quizs['quiz_op2'].'" id="radio_'.$i."2".'" class="radio-col-blue">
                                                  <label for="radio_'.$i."2".'" ><span>B</span> '.$quizs['quiz_op2'].'</label>
                                                  <input type="radio"   name="ans'.$i.'" value="'.$quizs['quiz_op3'].'" id="radio_'.$i."3".'" class="radio-col-blue">
                                                  <label for="radio_'.$i."3".'" ><span>C</span> '.$quizs['quiz_op3'].'</label>
                                                  <input type="radio"   name="ans'.$i.'" value="'.$quizs['quiz_op4'].'" id="radio_'.$i."4".'" class="radio-col-blue">
                                                  <label for="radio_'.$i."4".'" ><span>D</span> '.$quizs['quiz_op4'].'</label>
                                                  <input type="hidden" name="cans'.$i.'" value="'.$quizs['quiz_ans'].'">
                                                  <input type="hidden" name="quiz_id'.$i.'" value="'.$quizs['quiz_id'].'">


                                                </div>
                                                <hr>';
                                              }

                                              if($qnn==0){
                                                redirect('pages/index');
                                              }



                                             ?>
                                            <div style="text-align:center">
                                              <input type="hidden" name="quizno" value="<?=$qnn?>">
                                              <input type="hidden" name="quiz_time" id="time" >
                                                <button type="submit"  class="btn btn-success" >Submit</button>
                                            </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
      <script>
      var minutesLabel = document.getElementById("minutes");
      var secondsLabel = document.getElementById("seconds");
      var minutesInput = document.getElementById("time");
      var totalSeconds = 1200;
      setInterval(setTime, 1000);




      function setTime() {
        --totalSeconds;
        secondsLabel.innerHTML = pad(totalSeconds % 60);
        minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
        minutesInput.value=totalSeconds / 60;
        if(totalSeconds<120){
          secondsLabel.style.color="red";
          minutesLabel.style.color="red";
        }
        if(totalSeconds==0){
          submitform();
        }
      }

      function pad(val) {
        var valString = val + "";
        if (valString.length < 2) {
          return "0" + valString;
        } else {
          return valString;
        }
      }
      function submitform(){

        alert('Your Time is up ! Let`s see the Result and Statistics of the Test.');
        document.forms["myform"].submit();
        }




      </script>
