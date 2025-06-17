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
                    <h4 class="page-title pull-left">Dashboard</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Dashboard</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 clearfix">
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Lab Reports Form</h4>
                            <form method="post" enctype="multipart/form-data" action="">
                                <div class="form-group">
                                    <label for="patient_id">Patient </label>
                                    <select class="form-control" id="patient_id" name="patient_id">
                                        <?php
                                        $res = $mysqli->common_select('patients');
                                        if (!$res['error']) {
                                            foreach ($res['data'] as $key => $value) {
                                                echo '<option value="' . $value->id . '">' . $value->full_name . '</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Staff</label>
                                    <select class="form-control" id="staff_id" name="staff_id">
                                        <?php
                                        $res = $mysqli->common_select('staff');
                                        if (!$res['error']) {
                                            foreach ($res['data'] as $key => $value) {
                                                echo '<option value="' . $value->id . '">' . $value->name . '</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Test Type">Test Type</label>
                                    <input type="text" class="form-control" id="test_type" name="test_type"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="Sample Collected Date">Sample Collected Date</label>
                                    <input type="date" class="form-control" id="sample_collected_date" name="sample_collected_date"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="email">Test Date</label>
                                    <input type="date" class="form-control" id="test_date" name="test_date">
                                </div>
                                <div class="form-group">
                                    <label for="address">Report Date</label>
                                    <input type="date" class="form-control" id="report_date" name="report_date">
                                </div>
                                <div class="form-group">
                                    <label for="text">Result Summary</label>
                                    <input type="text" class="form-control" id="result_summary"
                                        name="result_summary" placeholder="Result Summary">
                                </div>
                                <div class="form-group">
                                    <label for="Document Link">Document Link</label>
                                    <input type="link" class="form-control" id="document_link" name="document_link" aria-describedby="emailHelp">
                                       
                                
                                </div>
                                <div class="form-group">
                                    <label for="Lab Name">Lab Name</label>
                                    <input type="text" class="form-control" id="lab_name"
                                        name="lab_name" placeholder="Lab Name">
                                </div>
                                <div class="form-group">
                                    <label for="Reference Range">Reference Range</label>
                                    <input type="text" class="form-control" id="reference_range" name="reference_range"
                                        placeholder="Reference Range">
                                </div>
                                <div class="form-group">
                                    <label for="Result Value">Result Value</label>
                                    <input type="text" class="form-control" id="result_value"
                                        name="result_value" placeholder="Result Value">
                                </div>
                                
                                <div class="form-group">
                                    <label for="Unit">Unit</label>
                                    <input type="text" class="form-control" id="unit" name="unit"
                                        placeholder="Unit">
                                </div>
                                <div class="form-group">
                                    <label for="Remarks">Remarks</label>
                                    <input type="text" class="form-control" id="remarks" name="remarks"
                                        placeholder="Remarks">
                                </div>
                                <div class="form-group">
                                    <label for="Priority">Priority</label>
                                    <input type="text" class="form-control" id="priority" name="priority"
                                        placeholder="Priority">
                                </div>
                                <div class="form-group">
                                    <label for="sample_type">Sample Type</label>
                                    <input type="text" class="form-control" id="sample_type" name="sample_type"
                                        placeholder="Sample Type">
                                </div>
                                <div class="form-group">
                                    <label for="collected_by">Collected By</label>
                                    <input type="text" class="form-control" id="collected_by" name="collected_by"
                                        placeholder="Collected by">
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                                
                            <?php

                            if ($_POST) {
                                $_POST['created_at'] = date('Y-m-d H:i:s');
                                $_POST['created_by'] = $_SESSION['user']->id;
                                $_POST['status'] = 1;
                                $res = $mysqli->common_insert('lab_reports', $_POST);
                                if (!$res['error']) {
                                    echo "<script>location.href='" . $baseurl . "lab_reports.php'</script>";
                                } else {
                                    echo $res['error_msg'];
                                }
                            }
                            ?>
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
