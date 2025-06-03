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
                            <h4 class="header-title">Prescriptions Form</h4>
                            <form method="post" enctype="multipart/form-data" action="">
                                <div class="form-group">
                                    <label for="pres_date">pres_date</label>
                                    <input type="date" class="form-control" id="pres_date" name="pres_date"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="appointment_id">appointment_id</label>
                                     <input type="number" class="form-control" id="appointment_id" name="appointment_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="patient_id">Patient Id</label>
                                    <input type="number" class="form-control" id="patient_id" name="patient_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="staff_id">Staff Id</label>
                                    <input type="date" class="form-control" id="staff_id" name="staff_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="notes">Notes</label>
                                    <input type="date" class="form-control" id="notes" name="notes"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="dx">DX</label>
                                    <input type="text" class="form-control" id="dx" name="dx">
                                </div>
                                <div class="form-group">
                                    <label for="cc">CC</label>
                                    <input type="text" class="form-control" id="cc"
                                        name="cc" placeholder="notes">
                                </div>
                                <div class="form-group">
                                    <label for="Initial Diagnosis">Initial Diagnosis</label>
                                    <input type="text" class="form-control" id="initial_diagnosis"
                                        name="initial_diagnosis" placeholder="initial_diagnosis">
                                </div>
                                <div class="form-group">
                                    <label for="rf">RF</label>
                                    <input type="text" class="form-control" id="rf"
                                        name="rf" placeholder="treatment_plan">
                                </div>
                                <div class="form-group">
                                    <label for="Nurse Id">Nurse Id</label>
                                    <input type="number" class="form-control" id="nurse_id" name="nurse_id"
                                        placeholder="nurse_id">
                                </div>
                                <div class="form-group">
                                    <label for="inv">Inv</label>
                                    <input type="text" class="form-control" id="inv"
                                        name="inv" placeholder="notes">
                                </div>
                                
                                <div class="form-group">
                                    <label for="next_visit_day">Next Visit Day</label>
                                    <input type="number" class="form-control" id="next_visit_day" name="next_visit_day"
                                        placeholder="profile_image">
                                </div>
                                
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                                
                            <?php

                            if ($_POST) {
                                $_POST['created_at'] = date('Y-m-d H:i:s');
                                $_POST['created_by'] = $_SESSION['user']->id;
                                $_POST['status'] = 1;
                                $res = $mysqli->common_insert('prescriptions', $_POST);
                                if (!$res['error']) {
                                    echo "<script>location.href='" . $baseurl . "prescriptions.php'</script>";
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
