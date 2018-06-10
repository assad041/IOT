
<!-- ============================================================== -->
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-12 ">
              <h3 class="text-themecolor" style="text-align:center">Add Quiz</h3>
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
                                             <?php echo form_open('pages/submitquiz') ?>
                                                <form method="post" class="form-horizontal p-t-20">

                                                    <div class="form-group row">

                                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Question*</label>
                                                        <div class="col-sm-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">

                                                                    </span>
                                                                </div>
                                                                <textarea name="question" class="form-control" rows="5" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Option 1*</label>
                                                        <div class="col-sm-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">

                                                                </span>
                                                                </div>
                                                                <input name="op1" type="text" class="form-control" id="exampleInputEmail3" placeholder="Enter Option" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="web" class="col-sm-3 control-label">Option 2*</label>
                                                        <div class="col-sm-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">

                                                            </span>
                                                                </div>
                                                                <input type="text" name="op2" class="form-control" id="web" placeholder="Enter Website Option" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword4" class="col-sm-3 control-label">Option 3*</label>
                                                        <div class="col-sm-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">

                                                                    </span>
                                                                </div>
                                                                <input type="text" name="op3" class="form-control" id="exampleInputpwd4" placeholder="Enter Option" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword5" class="col-sm-3 control-label">Option 4*</label>
                                                        <div class="col-sm-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">

                                                                    </span>
                                                                </div>
                                                                <input type="text" name="op4" class="form-control" id="exampleInputpwd5" placeholder="Enter Option" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputPassword5" class="col-sm-3 control-label">Answer*</label>
                                                        <div class="col-sm-9">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">

                                                                    </span>
                                                                </div>
                                                                <input type="text" name="ans" class="form-control" id="exampleInputpwd5" placeholder="Enter Answer" required>
                                                                <input type="hidden" name="quizno" value="<?=$quizno?>">


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row m-b-0">
                                                        <div class="offset-sm-3 col-sm-9">
                                                            <button type="submit"   class="btn btn-success waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php echo form_close(); ?>
                                            </div>



              </div>
          </div>
      </div>




      <div class="table-responsive">
                                    <table class="table color-bordered-table success-bordered-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Qquestion</th>
                                                <th>Option 1</th>
                                                <th>Option 2</th>
                                                <th>Option 3</th>
                                                <th>Option 4</th>
                                                <th>Answer</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                            $i=1;
                                            foreach ($quiz as $quizs) {
                                            echo '
                                              <tr>
                                                  <td>'.$i.'</td>
                                                  <td>'.$quizs['quiz_q'].'</td>
                                                  <td>'.$quizs['quiz_op1'].'</td>
                                                  <td>'.$quizs['quiz_op2'].'</td>
                                                  <td>'.$quizs['quiz_op3'].'</td>
                                                  <td>'.$quizs['quiz_op4'].'</td>
                                                  <td>'.$quizs['quiz_ans'].'</td>
                                                  <td>';
                                                   echo form_open('pages/deletequiz');
                                                   $id=$quizs["quiz_id"];
echo '<form method="post" class="form-horizontal p-t-20">
                                                  <input type="hidden" name="quizno" value="'.$quizno.'">
                                                  <input type="hidden" name="quizid" value="'.$id.'">
                                                  <button type="submit" class="btn btn-danger"  aria-haspopup="true" aria-expanded="false">
                                                     <i class="ti-trash"></i>
                                                     </button>
</form>
                                                     </td>
                                              </tr>';
                                              echo form_close();
                                              $i++;

                                             }

                                           ?>

                                        </tbody>
                                    </table>
                                </div>
