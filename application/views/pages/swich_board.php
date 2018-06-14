


            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <div class="row page-titles">

                    <div class="">
                        <a class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Swiches List</h4>
                                <div class="row m-t-40">
                                    <!-- Column -->
                                  <?php

                                    $key=$this->input->get('key');
                                    $swichs=$this->Post_model->get_swich_board($key);
                                    $c=0;
                                    while ($c<8) {
                                      $c++;
                                      $fildename="swich_board_f".$c."name";
                                      $fildvalue="swich_board_f".$c."value";
                                  ?>
                                    <a class="col-md-6 col-lg-3 col-xlg-3"   href="update_swich_board?key=<?=$key?>&status=<?=$swichs[$fildvalue]?>&field=<?=$fildvalue?>">
                                        <div class="card">
                                          <?php
                                           if($c%3==1)
                                           {
                                           ?>
                                            <div class="box bg-info text-center" style="height:80px; ">
                                              <?php
                                            }
                                            else if ($c%3==2) {
                                              ?>
                                              <div class="box bg-primary text-center" style="height:80px">
                                              <?php

                                            }
                                            else {

                                              ?>

                                              <div class="box bg-success text-center" style="height:80px">

                                              <?php
                                            }
                                               ?>
                                                <h2 class="font-light text-white"><?php echo $swichs[$fildename];?></h2>
                                                <h6 class="text-white"><?php if($swichs[$fildvalue]) {
                                                  echo "On";
                                                }
                                                else {
                                                  echo "Off";
                                                }

                                                 ?></h6>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                     }
                                     ?>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
