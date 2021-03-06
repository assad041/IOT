


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
                                <h4 class="card-title">Connected Devices List</h4>
                                <h6 class="card-subtitle">List of Devices Connected with you</h6>
                                <div class="row m-t-40">
                                    <!-- Column -->
                                  <?php

                                    $device=$this->Post_model->get_device();
                                    $c=0;
                                    foreach ($device as $devices) {
                                      $c++;
                                  ?>
                                    <a class="col-md-6 col-lg-3 col-xlg-3" href="swich_board?key=<?=$devices["device_key"]?>">
                                        <div class="card">
                                          <?php
                                           if($c%3==1)
                                           {
                                           ?>
                                            <div class="box bg-info text-center">
                                              <?php
                                            }
                                            else if ($c%3==2) {
                                              ?>
                                              <div class="box bg-primary text-center">
                                              <?php

                                            }
                                            else {

                                              ?>

                                              <div class="box bg-success text-center">

                                              <?php
                                            }
                                               ?>
                                                <h2 class="font-light text-white"><?=$devices["device_name"]?></h2>
                                                <h6 class="text-white">Active</h6>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                     }
                                     ?>

                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">

                                            <input type="hidden" name="quizno" value="1">
                                            <a class="box bg-dark text-center " href="adddevice">
                                                <h2 class="font-light text-white"><i class="fa fa-plus-circle m-r-5"></i>Create New Device</h2>
                                                <h6 class="text-white">Activation</h6>
                                            </a>



                                        </div>
                                    </div>
                                    <!-- Column -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
