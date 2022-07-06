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

    <!-- Main navbar== -->

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
                        <li>About Information</li>
                    </ul>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">




                    <!-- Left fixed column -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Welcome to <code>About</code> Info Section </h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="reload"></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            Here you will be able to update and remove all the information <code> required</code>
                            for all kinds of
                            livelihoods.
                        </div>

                        <table class="table datatable-fixed-both" width="110%">
                            <thead>


                                <tr>
                                    <th width="3%">SN</th>
                                    <th width="10%">First Name</th>
                                    <th width="10%">Last Name</th>
                                    <th width="5%">Age</th>
                                    <th width="10%">Nationality</th>
                                    <th width="10%">Freelance</th>
                                    <th width="15%">Address</th>
                                    <th width="10%">Phone</th>
                                    <th width="15%">E-mail</th>
                                    <th width="20%">Langages</th>
                                    <th width="10%">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $selectQry = "SELECT * FROM about_info";
                                $about_info_list = mysqli_query($db_config, $selectQry);
                                foreach ($about_info_list as $key => $about_info) {

                                ?>
                                    <tr>
                                        <th><?php echo ++$key ?></th>
                                        <td><?php echo $about_info['fast_name'] ?></td>
                                        <td><?php echo $about_info['last_name'] ?></td>
                                        <td><?php echo $about_info['age'] ?></td>
                                        <td><?php echo $about_info['nationality'] ?></td>
                                        <td><?php echo $about_info['freelance'] ?></td>
                                        <td><?php echo $about_info['address'] ?></td>
                                        <td><?php echo $about_info['phone_number'] ?></td>
                                        <td><?php echo $about_info['email'] ?></td>
                                        <td><?php echo $about_info['language'] ?></td>
                                        <td class="text-center">
                                            <ul class="icons-list">
                                                <li><a href="update_aboutinfo.php?about_id=<?php echo $about_info['id'] ?>"><i class=" icon-pencil7"></i></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /left fixed column -->

                </div>
                <!-- /left fixed column -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>

</html>