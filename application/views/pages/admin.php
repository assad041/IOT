


          <?php
            if($this->session->userdata('user_id')!='1'){
              redirect(index);
            }
          ?>


    <link href="../assets/plugins/horizontal-timeline/css/horizontal-timeline.css" rel="stylesheet">
        <link href="css/pages/timeline-vertical-horizontal.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
              <link href="css/colors/megna-dark.css" id="theme" rel="stylesheet">
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid ">


    <!-- ============================================================== -->
    <!-- Activity widget find scss into widget folder-->
    <!-- ============================================================== -->

    <div class="row">

        <!--Little Profile widget-->
        <div class="col-lg-12">
            <div class="card">
                <div class="text-center bg-light">
                    <div class="row">
                        <div class="col-6  p-20 b-r">
                          <?php echo form_open('pages/addquiz') ?>
                            <input type="hidden" name="quizno" value="1">
                            <button  class="m-t-10 m-b-20 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Part 1 Week 1</button>
                          <?php echo form_close(); ?>
                        </div>
                        <div class="col-6  p-20">
                          <?php echo form_open('pages/addquiz') ?>
                            <input type="hidden" name="quizno" value="2">
                            <button  class="m-t-10 m-b-20 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Part 1 Week 2</button>
                          <?php echo form_close(); ?>
                        </div>
                        <div class="col-6  p-20 b-r">
                          <?php echo form_open('pages/addquiz') ?>
                            <input type="hidden" name="quizno" value="3">
                            <button  class="m-t-10 m-b-20 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Part 1 Week 3</button>
                          <?php echo form_close(); ?>
                        </div>
                        <div class="col-6  p-20">
                          <?php echo form_open('pages/addquiz') ?>
                            <input type="hidden" name="quizno" value="4">
                            <button  class="m-t-10 m-b-20 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Part 1 Week 4</button>
                          <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="text-center bg-light">
                    <div class="row">
                        <div class="col-6  p-20 b-r">
                          <?php echo form_open('pages/addquiz') ?>
                            <input type="hidden" name="quizno" value="5">
                            <button  class="m-t-10 m-b-20 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Part 2 Week 1</button>
                          <?php echo form_close(); ?>
                        </div>
                        <div class="col-6  p-20">
                          <?php echo form_open('pages/addquiz') ?>
                            <input type="hidden" name="quizno" value="6">
                            <button  class="m-t-10 m-b-20 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Part 2 Week 2</button>
                          <?php echo form_close(); ?>
                        </div>
                        <div class="col-6  p-20 b-r">
                          <?php echo form_open('pages/addquiz') ?>
                            <input type="hidden" name="quizno" value="7">
                            <button  class="m-t-10 m-b-20 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Part 2 Week 3</button>
                          <?php echo form_close(); ?>
                        </div>
                        <div class="col-6  p-20">
                          <?php echo form_open('pages/addquiz') ?>
                            <input type="hidden" name="quizno" value="8">
                            <button  class="m-t-10 m-b-20 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Part 2 Week 4</button>
                          <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
              </div>
              <div class="card">
                <div class="text-center bg-light">
                    <div class="row">
                        <div class="col-6  p-20 b-r">
                          <?php echo form_open('pages/addquiz') ?>
                            <input type="hidden" name="quizno" value="9">
                            <button  class="m-t-10 m-b-20 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Part 3 Week 1</button>
                          <?php echo form_close(); ?>
                        </div>
                        <div class="col-6  p-20">
                          <?php echo form_open('pages/addquiz') ?>
                            <input type="hidden" name="quizno" value="10">
                            <button  class="m-t-10 m-b-20 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Part 3 Week 2</button>
                          <?php echo form_close(); ?>
                        </div>
                        <div class="col-6  p-20 b-r">
                          <?php echo form_open('pages/addquiz') ?>
                            <input type="hidden" name="quizno" value="11">
                            <button  class="m-t-10 m-b-20 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Part 3 Week 3</button>
                          <?php echo form_close(); ?>
                        </div>
                        <div class="col-6  p-20">
                          <?php echo form_open('pages/addquiz') ?>
                            <input type="hidden" name="quizno" value="12">
                            <button  class="m-t-10 m-b-20 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Part 3 Week 4</button>
                          <?php echo form_close(); ?>
                        </div>
                        <div class="col-6  p-20">
                          <?php echo form_open('pages/addquiz') ?>
                            <input type="hidden" name="quizno" value="13">
                            <button  class="m-t-10 m-b-20 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Part 3 Week 5</button>
                          <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!--Little Profile widget-->
    </div>

<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
