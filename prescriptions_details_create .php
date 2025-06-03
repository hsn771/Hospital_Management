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
                            <h4 class="header-title">Prescription Form</h4>
                            <form method="post" enctype="multipart/form-data" action="">
                                <div class="form-group">
                                    <label for="patient_id">Prescription Id</label>
                                    <input type="number" class="form-control" id="patient_prescription_id" name="prescription_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="medicine_name">Medicine Name </label>
                                     <input type="text" class="form-control" id="medicine_name" name="medicine_name"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="dosage">Dosage</label>
                                    <input type="text" class="form-control" id="dosage" name="dosage"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="frequency">Frequency</label>
                                    <input type="number" class="form-control" id="frequency" name="frequency"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="email">Duration</label>
                                    <input type="time" class="form-control" id="duration" name="duration"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="route">Route</label>
                                    <input type="text" class="form-control" id="route" name="route">
                                </div>
                                <div class="form-group">
                                    <label for="timing">Timing</label>
                                    <input type="text" class="form-control" id="timing"
                                        name="timing" placeholder="notes">
                                </div>
                                
                                <div class="form-group">
                                    <label for="meal_relation">Meal Relation </label>
                                    <input type="text" class="form-control" id="meal_relation"
                                        name="meal_relation" placeholder="meal_relation">
                                </div>
                                <div class="form-group">
                                    <label for="notes">Notes</label>
                                    <input type="text" class="form-control" id="notes" name="notes"
                                        placeholder="notes">
                                </div>
                                
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                                
                            <?php

                            if ($_POST) {
                                $_POST['created_at'] = date('Y-m-d H:i:s');
                                $_POST['created_by'] = $_SESSION['user']->id;
                                $_POST['status'] = 1;
                                $res = $mysqli->common_insert('prescriptions_details', $_POST);
                                if (!$res['error']) {
                                    echo "<script>location.href='" . $baseurl . "prescriptions_details.php'</script>";
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
