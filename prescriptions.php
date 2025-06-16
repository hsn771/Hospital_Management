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
                    <h4 class="page-title pull-left">Patient Prescriptions</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Prescriptions</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 text-right">
                <a href="<?= $baseurl ?>prescriptions_create.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New Prescription</a>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    
    <div class="main-content-inner">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="header-title">Prescription Records</h4>
                            <div class="search-box">
                                <input type="text" class="form-control" id="prescriptionSearch" placeholder="Search prescriptions...">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered text-center">
                                <thead class="text-uppercase bg-primary text-white">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Patient</th>
                                        <th scope="col">Doctor</th>
                                        <th scope="col">Diagnosis</th>
                                        <th scope="col">Next Visit</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $data = $mysqli->common_select('prescriptions');
                                    if (!$data['error']) {
                                        foreach ($data['data'] as $i => $d) {
                                            // Get patient name
                                            $patient = $mysqli->common_select('patients', 'name', ['id' => $d->patient_id]);
                                            $patient_name = !$patient['error'] ? $patient['data'][0]->name : 'Unknown';
                                            
                                            // Get doctor name
                                            $doctor = $mysqli->common_select('staff', 'name', ['id' => $d->staff_id]);
                                            $doctor_name = !$doctor['error'] ? $doctor['data'][0]->name : 'Unknown';
                                            ?>
                                            <tr>
                                                <td><?= $d->id ?></td>
                                                <td><?= date('d M Y', strtotime($d->pres_date)) ?></td>
                                                <td><?= htmlspecialchars($patient_name) ?></td>
                                                <td>Dr. <?= htmlspecialchars($doctor_name) ?></td>
                                                <td><?= htmlspecialchars($d->dx) ?></td>
                                                <td><?= $d->next_visit_day ? date('d M Y', strtotime($d->next_visit_day)) : 'N/A' ?></td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="<?= $baseurl ?>prescriptions_view.php?id=<?= $d->id ?>"
                                                            class="btn btn-info btn-sm" title="View">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a href="<?= $baseurl ?>prescriptions_edit.php?id=<?= $d->id ?>"
                                                            class="btn btn-primary btn-sm" title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?= $baseurl ?>prescriptions_delete.php?id=<?= $d->id ?>"
                                                            class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure to delete this prescription?')">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php }
                                    } else { ?>
                                        <tr>
                                            <td colspan="7" class="text-center">No prescriptions found</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main content area end -->
<?php include_once 'Include/footer.php'; ?>