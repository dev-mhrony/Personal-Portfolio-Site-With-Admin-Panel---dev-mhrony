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

    <!-- ===Main navbar ===-->


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
                        <li>Work Information</li>
                    </ul>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">

                    <!-- Dashboard content -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Quick stats boxes -->
                            <div class="row">


                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Welcome to <b>About Work </b> Edit Section</h5>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="reload"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        Here you can change the <code> Experience (Year)</code> ,
                                        <code> Happy Customar</code> , <code>Complet Project</code> ,
                                        <code> Awards</code> and <code>CV</code> of your webpage.
                                    </div>

                                    <table class="table datatable-basic table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Experience (Year) </th>
                                                <th>Happy Customar</th>
                                                <th>Complet Project</th>
                                                <th>Awards</th>
                                                <th>CV</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php

                                            $selectQry = "SELECT * FROM about_work";
                                            $about_work_info = mysqli_query($db_config, $selectQry);
                                            foreach ($about_work_info as $key => $about_work) {

                                            ?>

                                                <tr>
                                                    <td><?php echo ++$key ?></td>
                                                    <td><?php echo $about_work['experience_by_year'] . " +" ?></td>
                                                    <td><?php echo $about_work['happy_customar'] . " +" ?></td>
                                                    <td><?php echo $about_work['complet_project'] . " +" ?></td>
                                                    <td><span class="label label-success"><?php echo $about_work['awards'] . " +" ?></span>
                                                    </td>
                                                    <td><?php echo $about_work['cv'] ?></td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li><a href="update_workinfo.php?work_id=<?php echo $about_work['id'] ?>"><i class=" icon-pencil7"></i></a>
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