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
                    <h4 class="page-title pull-left">Lab Reports </h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
        
                    </ul>
                </div>
            </div>
            <?php
            $where['id'] = $_GET['id'];
            $data = $mysqli->common_select('lab_reports', '*', $where);
            if (!$data['error']) {
                $appointments = $data['data'][0];
            }
            
            ?>
            <div class="col-sm-12 clearfix">
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Lab Reports</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">Patient Id</th>
                                                <td><?= $appointments->patient_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Staff Id</th>
                                                <td><?= $appointments->staff_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Test Type</th>
                                                <td><?= $appointments->test_type ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Sample Collected Date</th>
                                                <td><?= $appointments->sample_collected_date ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Test Date</th>
                                                <td><?= $appointments->test_date ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Report Date</th>
                                                <td><?= $appointments->report_date ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Result Summary</th>
                                                <td><?= $appointments->result_summary ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Document link</th>
                                                <td><?= $appointments->document_link ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Lab Name</th>
                                                <td><?= $appointments->lab_name ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Reference Range</th>
                                                <td><?= $appointments->reference_range ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Result value</th>
                                                <td><?= $appointments->result_value ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Unit</th>
                                                <td><?= $appointments->unit ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Remarks</th>
                                                <td><?= $appointments->remarks ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Priority</th>
                                                <td><?= $appointments->priority ?></td>
                                            </tr>   
                                            <tr>
                                                <th scope="col">Sample Type</th>
                                                <td><?= $appointments->sample_type?></td>
                                            </tr> 
                                            <tr>
                                                <th scope="col">Collected By</th>
                                                <td><?= $appointments->collected_by ?></td>
                                            </tr> 
                                        </thead>
                                        <tbody>

                    
                                                    <a href="<?= $baseurl ?>lab_reports_edit.php?id=<?= $appointments->id ?>"
                                                        class="btn btn-info btn-xs" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?= $baseurl ?>lab_reports_delete.php?id=<?= $appointments->id ?>"
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