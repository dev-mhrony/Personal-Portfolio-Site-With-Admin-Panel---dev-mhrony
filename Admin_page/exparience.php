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
                        <li>Exparience Information</li>
                    </ul>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class=" content">



                    <!-- ================================ Pop UP Windo================ -->
                    <div id="modal_form_horizontal" class="modal fade">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h5 class="modal-title">Update Exparience</h5>
                                </div>

                                <form action="./config/exparience_controlar.php" class="form-horizontal" method="POST">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="CompanyName">Company Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your company name" class="form-control" id="CompanyName" name="companyName">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="ShortBio">Short Bio</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your project short discription " class="form-control" id="ShortBio" name="shortBio">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="StartJob">Start Job Date</label>
                                            <div class="col-sm-9">
                                                <input type="date" placeholder="Select or Type your catagory" class="form-control" id="StartJob" name="startJob">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="EndJob">End Job Date</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Clint Name" class="form-control" id="EndJob" name="endJob">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="addExparince">Add Ecparince</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- ==================================== Pop UP Windo Close================ -->



                    <!-- Dashboard content -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Quick stats boxes -->
                            <div class="row">


                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Welcome to <b>Exparience </b> Update Section</h5>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="reload"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        Here you can update <code> Education Name </code> , <code> Short Bio </code> and
                                        <code> Year </code>. You can also add your educational qualifications through
                                        <code> Add Education Degree </code> here.



                                        <!-- ==== Message Status Start -->

                                        <?php
                                        if (isset($_GET['msg'])) {

                                        ?>

                                            <div class="alert bg-success alert-styled-left">
                                                <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                                                <span class="text-semibold">Good Job</span>
                                                <?php echo $_GET['msg'] ?>
                                            </div>

                                        <?php } ?>

                                        <!-- ==== Message Status End -->


                                        <div class="text-right">
                                            <a href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_form_horizontal" data-target="#modal_form_horizontal">Add
                                                    Exparience</button></a>
                                        </div>

                                    </div>



                                    <table class="table datatable-basic table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Company Name </th>
                                                <th>Short Bio</th>
                                                <th>Start Jobe Date</th>
                                                <th>End Jobe Date</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $selectQry = "SELECT * FROM experience WHERE status=1";
                                            $experience_list = mysqli_query($db_config, $selectQry);
                                            foreach ($experience_list as $key => $experience) {


                                            ?>

                                                <?php
                                                $status = $experience['status'];
                                                if ($status == 1) {
                                                    $status = "Active";
                                                } else {
                                                    $status = "Deactive";
                                                }
                                                ?>

                                                <tr>
                                                    <td><?php echo ++$key ?></td>
                                                    <td><?php echo $experience['company_name'] ?></td>
                                                    <td><?php echo $experience['short_bio'] ?></td>
                                                    <td><?php echo $experience['start_jobe_date'] ?></td>
                                                    <td><?php echo $experience['end_jobe_date'] ?></td>
                                                    <td><span class="label label-success"><?php echo $status ?></span></td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li><a href="update_exparience.php?exp_id=<?php echo  $experience['id'] ?>"><i class=" icon-pencil7"></i></a>
                                                            <li><a href="./config/DeleteControlar/expDelete_controlar.php?exp_id=<?php echo  $experience['id'] ?>"><i class="icon-trash"></i></a></li>
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