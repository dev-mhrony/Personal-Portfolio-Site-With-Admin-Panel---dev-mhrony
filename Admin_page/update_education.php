<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>

    <?php
    include "header_link_file.php";
    include "./config/server_connect.php";
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
                        <li><a href="education.php">Education</a></li>
                    </ul>
                </div>
                <!-- /page header -->

                <!-- =====Content area=== -->
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

                                    <h5 class="modal-title">Update Education / Qualifications</h5>
                                </div>


                                <?php

                                $edu_id = $_GET['edu_id'];
                                $getSingleDataQry = "SELECT * FROM education WHERE id={$edu_id}";
                                $getResult = mysqli_query($db_config, $getSingleDataQry);

                                ?>


                                <form class="form-horizontal" action="config/education_controlar.php" method="POST">
                                    <div class="modal-body">

                                        <?php

                                        foreach ($getResult as $key => $singleData) {

                                        ?>

                                            <input type="hidden" name="edu_id" value="<?php echo $singleData['id'] ?>">

                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="educationName">Education
                                                    Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" placeholder="Type your last education name" class="form-control" id="educationName" name="educationName" value="<?php echo $singleData['education_name'] ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="shortBio">Short Bio</label>
                                                <div class="col-sm-9">
                                                    <input type="text" placeholder="Type your project short discription " class="form-control" id="shortBio" name="shortBio" value="<?php echo $singleData['short_bio'] ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="startYear">Start Year</label>
                                                <div class="col-sm-9">
                                                    <input type="number" placeholder="Type start year" class="form-control" id="startYear" name="startYear" value="<?php echo $singleData['start_year'] ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="endYear">End Year</label>
                                                <div class="col-sm-9">
                                                    <input type="number" placeholder="Type your end year" class="form-control" id="endYear" name="endYear" value="<?php echo $singleData['end_year'] ?>">
                                                </div>
                                            </div>
                                    </div>

                                    <div class="modal-footer">
                                        <a href="education.php"><button type="button" class="btn btn-link" data-dismiss="modal">Back to Education Page
                                            </button></a>
                                        <button type="submit" class="btn btn-primary" name="updateEdu">Add Education
                                            form</button>
                                    </div>

                                <?php  } ?>
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