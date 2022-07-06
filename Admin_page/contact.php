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
                        <li>Contact Information</li>
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
                                        <h5 class="panel-title">Welcome to Contact Section</h5>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="reload"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        Here you can change the <code>Title</code>,
                                        <code>Short Bio</code>, <code>E-mail</code> and
                                        <code>Phone Number</code> of your webpage.
                                    </div>

                                    <table class="table datatable-basic table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Title</th>
                                                <th>Short Bio</th>
                                                <th>E-mail</th>
                                                <th>Phone Number</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php
                                            $selectQry = "SELECT * FROM contact";
                                            $contact_list = mysqli_query($db_config, $selectQry);
                                            foreach ($contact_list as $key => $contact) {


                                            ?>

                                                <?php
                                                $status = $contact['status'];
                                                if ($status == 1) {
                                                    $status = "Active";
                                                } else {
                                                    $status = "Deactive";
                                                }
                                                ?>


                                                <tr>
                                                    <td><?php echo ++$key ?></td>
                                                    <td><?php echo $contact['title'] ?></td>
                                                    <td><?php echo $contact['short_bio'] ?></td>
                                                    <td><?php echo $contact['email'] ?></td>
                                                    <td><?php echo $contact['phone_number'] ?></td>
                                                    <td><span class="label label-success"><?php echo $status ?></span></td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li><a href="update_contactinfo.php?cont_id=<?php echo $contact['id'] ?>"><i class=" icon-pencil7"></i></a>
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