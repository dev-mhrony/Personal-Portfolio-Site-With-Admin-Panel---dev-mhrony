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
                    $about_id = $_GET['about_id'];
                    $getSingleDataQry = "SELECT * FROM about_info WHERE id={$about_id}";
                    $getResult = mysqli_query($db_config, $getSingleDataQry);

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

                            <h5 class="modal-title">Update <code>About</code> Info</h5>
                        </div>



                        <form class="form-horizontal" action="./config/about_controlar.php" method="POST">
                            <div class="modal-body">
                                <?php

                                foreach ($getResult as $key => $aboutSingleData) {

                                ?>

                                    <input type="hidden" name="about_id" value="<?php echo $aboutSingleData['id'] ?>">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="FirstName">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Type your fast name" id="FirstName" class="form-control" value="<?php echo $aboutSingleData['fast_name'] ?>" name="FirstName">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="LirstName">Lirst Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Type your project lirst name" id="LirstName" class="form-control" value="<?php echo $aboutSingleData['last_name'] ?>" name="LirstName">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="DateOfBirth">Date Of Birth Year</label>
                                        <div class="col-sm-9">
                                            <input type="number" placeholder="Type your date of birth year" id="DateOfBirth" class="form-control" value="<?php echo $aboutSingleData['age'] ?>" name="DateOfBirth">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="Nationality">Nationality</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Type your nationality" class="form-control" id="Nationality" value="<?php echo $aboutSingleData['nationality'] ?>" name="Nationality">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="Freelance">Freelance</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Are your Freelance?" class="form-control" id="Freelance" value="<?php echo $aboutSingleData['freelance'] ?>" name="Freelance">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="Address">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Location" class="form-control" id="Address" value="<?php echo $aboutSingleData['address'] ?>" name="Address">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="PhoneNumber">Phone Number</label>
                                        <div class="col-sm-9">
                                            <input type="number" placeholder="" class="form-control" id="PhoneNumber" value="<?php echo $aboutSingleData['phone_number'] ?>" name="PhoneNumber">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="Email">E-mail</label>
                                        <div class="col-sm-9">
                                            <input type="email" placeholder="Type your Contact E-mail" id="Email" class="form-control" value="<?php echo $aboutSingleData['email'] ?>" name="Email">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="Langages">Langages</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Type your Speek Langages" id="Langages" class="form-control" value="<?php echo $aboutSingleData['language'] ?>" name="Langages">
                                        </div>
                                    </div>

                                <?php } ?>
                            </div>

                            <div class="modal-footer">
                                <a href="about_info.php"><button type="button" class="btn btn-link" data-dismiss="modal">Close</button></a>
                                <button type="submit" class="btn btn-primary" name="UpdateAboutInfo">Update Info</button>
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