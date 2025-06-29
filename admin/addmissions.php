<?php include_once 'Include/header.php'; ?>
<!-- sidebar menu area start -->
<?php include_once 'Include/sidebar.php'; ?>
<!-- sidebar menu area end -->
<!-- main content area start -->
<div class="main-content">
    <!-- header area start -->
    <?php include_once 'Include/topbar.php'; ?>
    <!-- header area end -->
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Addmission</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
        
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 clearfix">
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Details</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Patient</th>
                                                <th scope="col">Doctor</th>
                                                <th scope="col">Room Number</th>
                                                <th scope="col">Admission Date</th>
                                                <th scope="col">Discharge Date</th>
                                                <th scope="col">Reason</th>
                                                <th scope="col">Initial Diagnosis</th>
                                                <th scope="col">Treatment Plan</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $data = $mysqli->common_query('SELECT addmissions.*,patients.full_name,patients.phone,user.name,user.contact_no,rooms.room_number FROM `addmissions`
                                                                           JOIN patients on patients.id=addmissions.patient_id 
                                                                           JOIN user on user.id=addmissions.staff_id 
                                                                           JOIN rooms on rooms.id=addmissions.room_id 
                                                                           WHERE addmissions.status=1');
                                            if (!$data['error']) {
                                                foreach ($data['data'] as $i => $d) {
                                                    ?>
                                                    <tr>
                                                        <td><?= ++$i ?></td>
                                                        <td><?= $d->full_name ?> (<?= $d->phone ?>)</td>
                                                        <td><?= $d->name ?> (<?= $d->contact_no ?>)</td>
                                                        <td><?= $d->room_number ?></td>
                                                        <td><?= $d->admission_date ?></td>
                                                        <td><?= $d->discharge_date ?></td>
                                                        <td><?= $d->reason ?></td>
                                                        <td><?= $d->initial_diagnosis ?></td>
                                                        <td><?= $d->treatment_plan ?></td>
                                                        <td>
                                                            <a href="<?= $baseurl ?>addmissions_show.php?id=<?= $d->id ?>"
                                                                class="btn btn-info btn-xs" title="Edit">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="<?= $baseurl ?>addmissions_edit.php?id=<?= $d->id ?>"
                                                                class="btn btn-info btn-xs" title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="<?= $baseurl ?>addmissions_delete.php?id=<?= $d->id ?>"
                                                                class="btn btn-danger btn-xs" title="Delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    <div class="main-content-inner">

    </div>
</div>
<!-- main content area end -->
<?php include_once 'Include/footer.php'; ?>