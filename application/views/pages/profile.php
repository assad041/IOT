
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
                <div class="card-body little-profile text-center">
                    <div class="pro-img m-t-20">
                      <?php echo form_open_multipart('pages/imgpro') ?>

                            <img id="blah"  src="../assets/images/users/<?php if($this->session->userdata('user_img')) { echo $this->session->userdata('user_img'); }else {
                              echo'profile.png';
                            } ?>" alt='user' id ="#up">

                    </div>
                    <input type='file' name="image" class="label label-success label-rounded"  onchange="readURL(this);"  required />
                    <h3 class="m-b-0"><?=$this->session->userdata('user_name')?> </h3>
                    <h6 class="text-muted"><?=$this->session->userdata('user_email')?></h6>
                    <h6 class="text-red" > <?php echo $error; ?></h6>
                    <button class="label label-success label-rounded" >Save Picture  </button>


                </div>
                <div class="text-center bg-light">
                    <div class="row">
                        <div class="col-6  p-20 b-r">
                            <h4 class="m-b-0 font-medium">1099</h4><small>Score</small></div>
                        <div class="col-6  p-20">
                            <h4 class="m-b-0 font-medium">603</h4><small>World Rank</small></div>
                    </div>

                </div>





                <div class="card-body text-center">
                    <a href="javascript:void(0)" class="m-t-10 m-b-20 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Continue Practice</a>
                </div>

            </div>


        </div>
        <!--Little Profile widget-->
    </div>

<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->



    <script type="text/javascript">
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
