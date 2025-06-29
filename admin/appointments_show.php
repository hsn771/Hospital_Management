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
                    <h4 class="page-title pull-left">Patiant Information</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
        
                    </ul>
                </div>
            </div>
            <?php
            $where['id'] = $_GET['id'];
            $data = $mysqli->common_select('appointments', '*', $where);
            if (!$data['error']) {
                $appointments = $data['data'][0];
            }
            
            ?>
            <div class="col-sm-12 clearfix">
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">appointment Details(Full)</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">Patient</th>
                                                <td><?= $appointments->patient_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Doctor</th>
                                                <td><?= $appointments->staff_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Appointment Date</th>
                                                <td><?= $appointments->appointment_date ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Start Time</th>
                                                <td><?= $appointments->start_time ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Purpose</th>
                                                <td><?= $appointments->purpose ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Notes</th>
                                                <td><?= $appointments->notes ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Appointment Type</th>
                                                <td><?= $appointments->appointment_type ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Patient Temperature</th>
                                                <td><?= $appointments->patient_temperature ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Bp Reading</th>
                                                <td><?= $appointments->bp_reading ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Heart Rate</th>
                                                <td><?= $appointments->heart_rate ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Source</th>
                                                <td><?= $appointments->source ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">follow_up</th>
                                                <td><?= $appointments->follow_up_required ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Serial No</th>
                                                <td><?= $appointments->serial_no ?></td>
                                            </tr>   
                                        </thead>
                                        <tbody>

                    
                                                    <a href="<?= $baseurl ?>appointments_edit.php?id=<?= $appointments->id ?>"
                                                        class="btn btn-info btn-xs" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?= $baseurl ?>appointments_delete.php?id=<?= $appointments->id ?>"
                                                        class="btn btn-danger btn-xs" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>

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