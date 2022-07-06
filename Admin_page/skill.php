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

    <!-- ==Main navbar== -->


    <?php
    include "./include_section/top_navbar.php";
    require "./config/server_connect.php";
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
                        <li>Skill</li>
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
                                    <h5 class="modal-title">Skill Update</h5>
                                </div>

                                <form action="./config/skill_controlar.php" class="form-horizontal" method="POST">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="Percentage">Skill Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your skill name" class="form-control" id="Skill" name="SkillName">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="Percentage">Percentage</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type your percentage (%) " class="form-control" id="Percentage" name="Percentage">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="Experience">Exparience</label>
                                            <div class="col-sm-9">
                                                <input type="text" placeholder="Type exparience" class="form-control" id="Experience" name="Experience">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="skillSubmit">Add Skill</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- ================================ Pop UP Windo Close================ -->

                    <!-- Dashboard content -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Quick stats boxes -->
                            <div class="row">


                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Welcome to <b>Skill </b> Section</h5>
                                        <div class="heading-elements">
                                            <ul class="icons-list">
                                                <li><a data-action="reload"></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">

                                        From here you can <code>Add</code> or <code>Update Skills</code> .

                                        <div class="text-right">
                                            <a href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_form_horizontal" data-target="#modal_form_horizontal">Add Skill</button></a>
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
                                                <th>Skill Name </th>
                                                <th>Percentage</th>
                                                <th>Exparience</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $selectQry = "SELECT * FROM skill WHERE status=1";
                                            $skill_list = mysqli_query($db_config, $selectQry);
                                            foreach ($skill_list as $key => $skill) {


                                            ?>

                                                <?php
                                                $status = $skill['status'];
                                                if ($status == 1) {
                                                    $status = "Active";
                                                } else {
                                                    $status = "Deactive";
                                                }
                                                ?>
                                                <tr>
                                                    <td><?php echo ++$key ?></td>
                                                    <td><?php echo $skill['skill_name'] ?></td>
                                                    <td><?php echo $skill['percentage'] ?></td>
                                                    <td><?php echo $skill['experience'] . " Year" ?></td>
                                                    <td><span class="label label-success"><?php echo $status ?></span>
                                                    </td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li><a href="update_skill.php?skill_id=<?php echo $skill['id'] ?>"><i class=" icon-pencil7"></i></a>
                                                            <li><a href="./config/DeleteControlar/skillDelete_controlar.php?skill_id=<?php echo $skill['id'] ?>"><i class="icon-trash"></i></a></li>
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