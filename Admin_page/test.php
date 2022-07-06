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
                        <li><a href="portfoli.php">Portfolio</a></li>
                    </ul>
                </div>
                <!-- /page header -->

                <!-- ==Content area== -->
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

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">Portfolio Update</h5>
                    </div>

                    <form action="./config/portfolio_controlar.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="ProjectName">Project Name</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Type your project name" class="form-control" id="ProjectName" name="projectName">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="ProjectBio">Project Bio</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Type your project short discription " class="form-control" id="ProjectBio" name="projectBio">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="Catagory">Catagory</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Select or Type your catagory" class="form-control" id="Catagory" name="catagory">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="ClintName">Clint Name</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Clint Name" class="form-control" id="ClintName" name="cintName">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="ProjectLanguage">Project
                                    Language</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Type your project language Ex: HTML, CSS, JavaScript" class="form-control" id="ProjectLanguage" name="projectLanguage">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="ProjectPreview">Project Preview
                                    Link</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Project Preview link" class="form-control" id="ProjectPreview" name="projectPreview">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="Image">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="Image" name="image">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="addPortfolio">Add Project
                            </button>
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