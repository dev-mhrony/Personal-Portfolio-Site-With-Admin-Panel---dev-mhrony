<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>

    <?php
    include "header_link_file.php";
    require "./config/server_connect.php";
    ?>

</head>

<body>

    <!-- Main navbar -->


    <?php
    include "./include_section/top_navbar.php";
    ?>

    <!-- /main navbar -->

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <?php
            include "./include_section/main_sidebar.php";
            ?>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="icon-home2 position-left"></i> Deshbord</a></li>
                        <li><a href="exparience.php">Exparience</a></li>
                    </ul>
                </div>
                <!-- /page header -->

                <!-- ==Content area ==-->
                <div class="content">

                    <?php
                    if (isset($_GET['msg'])) {

                    ?>

                        <div class="alert bg-success alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                            <span class="text-semibold">Good Job</span>
                            <?php echo $_GET['msg'] ?>
                        </div>

                    <?php } ?>


                    <!-- Horizontal form modal -->
                    <div id="modal_form_horizontal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h5 class="modal-title">Update Exparience</h5>
                                </div>


                                <?php
                                $exp_id = $_GET['exp_id'];
                                $getSelectDataQre = "SELECT * FROM experience WHERE id={$exp_id}";
                                $resultQre = mysqli_query($db_config, $getSelectDataQre);

                                ?>


                                <form action="./config/exparience_controlar.php" class="form-horizontal" method="POST">
                                    <div class="modal-body">

                                        <?php
                                        foreach ($resultQre as $key => $singleExp) {


                                        ?>
                                            <input type="hidden" name="exp_id" value="<?php echo $singleExp['id'] ?>">

                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="companyName">Company Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" placeholder="Type your last company name" class="form-control" id="companyName" name="companyName" value="<?php echo $singleExp['company_name'] ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="shortBio">Short Bio</label>
                                                <div class="col-sm-9">
                                                    <input type="text" placeholder="Type your project short discription " class="form-control" id="shortBio" name="shortBio" value="<?php echo $singleExp['short_bio'] ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="start_date">Start Job
                                                    Date</label>
                                                <div class="col-sm-9">
                                                    <input type="text" placeholder="Type join year" class="form-control" id="start_date" name="startJob" value="<?php echo $singleExp['start_jobe_date'] ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="end_date">End Job Date</label>
                                                <div class="col-sm-9">
                                                    <input type="text" placeholder="Type your end job year" class="form-control" id="end_date" name="endJob" value="<?php echo $singleExp['end_jobe_date'] ?>">
                                                </div>
                                            </div>

                                        <?php } ?>
                                    </div>

                                    <div class="modal-footer">
                                        <a href="exparience.php"><button type="button" class="btn btn-link" data-dismiss="modal">Back to Exparience list
                                            </button></a>
                                        <button type="submit" class="btn btn-primary" name="updateExp">Update
                                            Exparience</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /horizontal form modal -->


                    <!-- Dashboard content -->
                    <div class="row">




                    </div>
                    <!-- /dashboard content -->


                    <!-- Footer -->
                    <div class="footer text-muted">
                        &copy; 2022. <a href="#">Ghasful</a> by <a href="" target="_blank">MH RONY</a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>

</html>