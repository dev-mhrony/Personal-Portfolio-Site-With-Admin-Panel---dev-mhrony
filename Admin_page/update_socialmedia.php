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
                        <li><a href="update_socialmedia.php">Social Media</a></li>
                        <li>Update Social Media</li>
                    </ul>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">



                    <!-- Horizontal form modal -->
                    <div id="modal_form_horizontal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">


                                <?php
                                if (isset($_GET['msg'])) {


                                ?>

                                    <div class="alert bg-success alert-styled-left">
                                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                                        <span class="text-semibold">Good Job</span>
                                        <?php echo $_GET['msg'] ?>
                                    </div>

                                <?php } ?>

                                <div class="modal-header">

                                    <h5 class="modal-title">Update Social Media</h5>
                                </div>

                                <br>




                                <?php
                                $sm_id = $_GET['sm_id'];
                                $getSelectQry = "SELECT * FROM social_media WHERE id={$sm_id}";
                                $getResult = mysqli_query($db_config, $getSelectQry);


                                ?>




                                <form action="./config/social_controlar.php" class="form-horizontal" method="POST">
                                    <div class="modal-body">

                                        <?php
                                        foreach ($getResult as $key => $singlSM) {


                                        ?>
                                            <input type="hidden" name="sm_id" value="<?php echo $singlSM['id'] ?>">


                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="Social"> Social Media
                                                    Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" placeholder="Type your Social Media Name" class="form-control" id="Social" name="socialName" value="<?php echo $singlSM['social_media_name'] ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="SocialLink"> Social Media
                                                    Link</label>
                                                <div class="col-sm-9">
                                                    <input type="url" placeholder="Type your Social Media Link " class="form-control" id="SocialLink" name="SocialLink" value="<?php echo $singlSM['social_media_link'] ?>">
                                                </div>
                                            </div>
                                    </div>

                                    <div class="modal-footer">
                                        <a href="social_link.php"><button type="button" class="btn btn-link" data-dismiss="modal">Back to Social Media List
                                            </button></a>
                                        <button type="submit" class="btn btn-primary" name="updateSM">Update Social Media</button>
                                    </div>
                                <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /horizontal form modal -->


                    <!-- Dashboard content -->
                    <div class="row">




                    </div>
                    <!-- ===dashboard content==== -->


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