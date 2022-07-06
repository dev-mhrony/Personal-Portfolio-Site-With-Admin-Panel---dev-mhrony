<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>

    <?php
    include "header_link_file.php";
    ?>

</head>

<body>

    <!-- Main navbar -->


    <?php
    include "./include_section/top_navbar.php";
    include "./config/server_connect.php";
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
                        <li>Portfolio</li>
                    </ul>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class=" content">



                    <!-- Dashboard content -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Quick stats boxes -->
                            <div class="row">


                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Welcome to <b>Portfolio</b> Upload Section</h5>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="reload"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--================================================================  -->


                                    <!-- Horizontal form modal -->
                                    <div id="modal_form_horizontal" class="modal fade">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
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

                                    <div class="panel-body">
                                        Here you can update <code> Project Name </code> , <code> Project Bio </code> and
                                        <code> Catagory </code> & <code>ect. </code> You can also add your code> Add
                                        Project </code> here.



                                        <div class="text-right">
                                            <a href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_form_horizontal" data-target="#modal_form_horizontal">Add
                                                    Project </button></a>
                                        </div>



                                    </div>


                                    <?php
                                    if (isset($_GET['msg'])) {

                                    ?>

                                        <div class="alert bg-success alert-styled-left">
                                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                                            <span class="text-semibold">Good Job</span>
                                            <?php echo $_GET['msg'] ?>
                                        </div>

                                    <?php } ?>



                                    <table class="table datatable-basic table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Project Name </th>
                                                <th>Project Bio</th>
                                                <th>Catagory</th>
                                                <th>Clint Name</th>
                                                <th>Project Language</th>
                                                <th>Project Preview Link</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php

                                            $selectQry = "SELECT * FROM  portfolio WHERE status=1";
                                            $portfolio_list = mysqli_query($db_config, $selectQry);

                                            foreach ($portfolio_list as $key => $portfolio) {


                                            ?>

                                                <?php

                                                $status = $portfolio['status'];

                                                if ($status == 1) {
                                                    $status = "Active";
                                                } else {
                                                    $status = "Deactive";
                                                }


                                                ?>

                                                <tr>
                                                    <td><?php echo ++$key ?></td>
                                                    <td><?php echo $portfolio['project_name'] ?></td>
                                                    <td><?php echo $portfolio['project_bio'] ?></td>
                                                    <td><?php echo $portfolio['category'] ?></td>
                                                    <td><?php echo $portfolio['clint_name'] ?></td>
                                                    <td><?php echo $portfolio['project_language'] ?></td>
                                                    <td><?php echo $portfolio['project_preview_link'] ?></td>
                                                    <td><img src="<?php echo './Upload/PortfolioUpload/' . $portfolio['image'] ?>" alt="not found" width="140px" height="80px">
                                                    </td>
                                                    <td><span class="label label-success"><?php echo $status ?></span>
                                                    </td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li><a href="update_portfolio.php?port_id=<?php echo $portfolio['id'] ?>"><i class=" icon-pencil7"></i></a>
                                                            <li><a href="./config/DeleteControlar/protDelete_controlar.php?port_id=<?php echo $portfolio['id'] ?>"><i class="icon-trash"></i></a></li>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>


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