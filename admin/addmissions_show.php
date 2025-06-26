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
                    <h4 class="page-title pull-left">Addmission Information</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
        
                    </ul>
                </div>
            </div>
            <?php
            $where['id'] = $_GET['id'];
            $data = $mysqli->common_select('addmissions', '*', $where);
            if (!$data['error']) {
                $addmissions = $data['data'][0];
            }
            
            ?>
            <div class="col-sm-12 clearfix">
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Addmission Details(Full)</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">Patient Id</th>
                                                <td><?= $addmissions->patient_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Staff Id</th>
                                                <td><?= $addmissions->staff_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Room Id</th>
                                                <td><?= $addmissions->room_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Admission Date</th>
                                                <td><?= $addmissions->admission_date ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Discharge Date</th>
                                                <td><?= $addmissions->discharge_date ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Reason</th>
                                                <td><?= $addmissions->reason ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Initial Diagnosis</th>
                                                <td><?= $addmissions->initial_diagnosis ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Treatment Plan</th>
                                                <td><?= $addmissions->treatment_plan ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Nurse Id</th>
                                                <td><?= $addmissions->nurse_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Notes</th>
                                                <td><?= $addmissions->notes ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Consulting Doctor</th>
                                                <td><?= $addmissions->consulting_doctor ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Is Critical</th>
                                                <td><?= $addmissions->is_critical ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Has Attendant</th>
                                                <td><?= $addmissions->has_attendant ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Attendant Name</th>
                                                <td><?= $addmissions->attendant_name ?></td>
                                            </tr>  
                                            <tr>
                                                <th scope="col">Discharge Summary</th>
                                                <td><?= $addmissions->discharge_summary ?></td>
                                            </tr>  
                                        </thead>
                                        <tbody>

                    
                                                    <a href="<?= $baseurl ?>addmissions_edit.php?id=<?= $addmissions->id ?>"
                                                        class="btn btn-info btn-xs" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?= $baseurl ?>addmissions_delete.php?id=<?= $addmissions->id ?>"
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