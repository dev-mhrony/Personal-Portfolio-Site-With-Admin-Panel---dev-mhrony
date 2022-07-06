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
                        <li><a href="index.html"><i class="icon-home2 position-left"></i> Deshbord</a></li>
                        <li><a href="components_notifications_other.html">Home</a></li>
                    </ul>
                </div>
                <!-- /page header -->

                <!-- ===Content area ==-->
                <div class="content">

                    <?php
                    $work_id = $_GET['work_id'];
                    $getSingleDataQry = "SELECT * FROM about_work WHERE id='{$work_id}'";
                    $result = mysqli_query($db_config, $getSingleDataQry);



                    ?>


                    <!-- Retun Message to Submite Info Start -->
                    <?php
                    if (isset($_GET['msg'])) {

                    ?>

                        <div class="alert bg-success alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                            <span class="text-semibold">Good Job</span>
                            <?php echo $_GET['msg'] ?>
                        </div>

                    <?php } ?>

                    <!-- Retun Message to Submite Info End -->

                    <!-- Horizontal form modal -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update <code>Work</code> Info</h5>
                        </div>

                        <form action="./config/work_controlar.php" class="form-horizontal" method="POST">
                            <div class="modal-body">

                                <?php

                                foreach ($result as $key => $singleData) {

                                ?>
                                    <!-- ======== Hidden Input File to Send Controlar Page Start=========== -->

                                    <input type="hidden" name="work_id" value="<?php echo $singleData['id'] ?>">

                                    <!-- ========== Hidden Input File to Send Controlar Page End============ -->


                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="Experience">Experience (Year)</label>
                                        <div class="col-sm-9">
                                            <input type="number" placeholder="Type your fast name" id="Experience" class="form-control" value="<?php echo $singleData['experience_by_year'] ?>" name="Experience">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="HappyCustomar">Happy Customar</label>
                                        <div class="col-sm-9">
                                            <input type="number" placeholder="Type your project lirst name" id="HappyCustomar" class="form-control" value="<?php echo $singleData['happy_customar'] ?>" name="HappyCustomar">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="CompletProject">Complet Project</label>
                                        <div class="col-sm-9">
                                            <input type="number" placeholder="Type your date of birth year" id="CompletProject" class="form-control" value="<?php echo $singleData['complet_project'] ?>" name="CompletProject">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="Awards">Awards</label>
                                        <div class="col-sm-9">
                                            <input type="number" placeholder="Type your nationality" class="form-control" id="Awards" value="<?php echo $singleData['awards'] ?>" name="Awards">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="CV">CV</label>
                                        <div class="col-sm-9">
                                            <input type="file" placeholder="Are your Freelance?" class="form-control" id="CV">
                                        </div>
                                    </div>

                                <?php } ?>
                            </div>

                            <div class="modal-footer">
                                <a href="work_info.php"><button type="button" class="btn btn-link" data-dismiss="modal">Close</button></a>
                                <button type="submit" class="btn btn-primary" name="UpdateWork">Update Work</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <!-- ================================ Pop UP Windo Close================ -->
            <!-- /horizontal form modal -->

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