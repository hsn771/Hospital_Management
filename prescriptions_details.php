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
                    <h4 class="page-title pull-left">Appointments</h4>
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
                                                <th scope="col">Prescription Id</th>
                                                <th scope="col">Medicine Name</th>
                                                <th scope="col">Dosage</th>
                                                <th scope="col">Frequency</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">purpose</th>
                                                <th scope="col">Route</th>
                                                <th scope="col">Timing</th>
                                                <th scope="col">Meal Relation</th>
                                                <th scope="col">Notes</th>
                                                
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $data = $mysqli->common_select('prescriptions_details');
                                            if (!$data['error']) {
                                                foreach ($data['data'] as $i => $d) {
                                                    ?>
                                                    <tr>
                                                        <td><?= ++$i ?></td>
                                                        <td><?= $d->prescription_id ?></td>
                                                        <td><?= $d->medicine_name ?></td>
                                                        <td><?= $d->dosage ?></td>
                                                        <td><?= $d->appointment_date ?></td>
                                                        <td><?= $d->frequency ?></td>
                                                        <td><?= $d->duration ?></td>
                                                        <td><?= $d->route ?></td>
                                                        <td><?= $d->timing ?></td>
                                                        <td><?= $d->meal_relation ?></td>
                                                        <td><?= $d->notes ?></td>
                                                        
                                                        <td>
                                                            <a href="<?= $baseurl ?>appointments_show.php?id=<?= $d->id ?>"
                                                                class="btn btn-info btn-xs" title="Edit">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="<?= $baseurl ?>prescriptions_details_edit.php?id=<?= $d->id ?>"
                                                                class="btn btn-info btn-xs" title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="<?= $baseurl ?>prescriptions_details_delete.php?id=<?= $d->id ?>"
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