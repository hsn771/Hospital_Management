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
                            <h4 class="header-title">Appointment Form</h4>
                            <form method="post" enctype="multipart/form-data" action="">
                                <div class="form-group">
                                    <label for="patient_id">Patient</label>
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
                                        $res = $mysqli->common_select('user');
                                        if (!$res['error']) {
                                            foreach ($res['data'] as $key => $value) {
                                                echo '<option value="' . $value->id . '">' . $value->name . '</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">Room</label>
                                    <select class="form-control" id="room_id" name="room_id">
                                        <?php
                                        $res = $mysqli->common_select('rooms');
                                        if (!$res['error']) {
                                            foreach ($res['data'] as $key => $value) {
                                                echo '<option value="' . $value->id . '">' . $value->room_number . '</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Appointment Date</label>
                                    <input type="date" class="form-control" id="appointment_date" name="appointment_date"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="email">Start Time</label>
                                    <input type="time" class="form-control" id="start_time" name="start_time">
                                </div>
                                <div class="form-group">
                                    <label for="address">Purpose</label>
                                    <input type="text" class="form-control" id="purpose" name="purpose">
                                </div>
                                <div class="form-group">
                                    <label for="text">notes</label>
                                    <input type="text" class="form-control" id="notes"
                                        name="notes" placeholder="notes">
                                </div>
                                <div class="form-group">
                                    <label for="nid_passport">appointment_type</label>
                                    <select class="form-control" id="appointment_type" name="appointment_type" aria-describedby="emailHelp">
                                        <option value="New Patient">New Patient</option>
                                        <option value="Follow-up">Follow-up</option>
                                        <option value="Emergency">Emergency</option>
                                        <option value="Routine/Check-up">Routine/Check-up</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="insurance_id">Patient Temperature</label>
                                    <input type="text" class="form-control" id="patient_temperature"
                                        name="patient_temperature" placeholder="patient_temperature">
                                </div>
                                <div class="form-group">
                                    <label for="bp_reading">Bp Reading</label>
                                    <input type="text" class="form-control" id="bp_reading" name="bp_reading"
                                        placeholder="bp_reading">
                                </div>
                                <div class="form-group">
                                    <label for="registration_date">heart_rate</label>
                                    <input type="text" class="form-control" id="heart_rate"
                                        name="heart_rate" placeholder="heart_rate">
                                </div>
                                
                                <div class="form-group">
                                    <label for="source">Source</label>
                                    <input type="text" class="form-control" id="source" name="source"
                                        placeholder="profile_image">
                                </div>
                                <div class="form-group">
                                    <label for="follow_up">Follow Up</label>
                                    <input type="text" class="form-control" id="follow_up_required" name="follow_up_required"
                                        placeholder="follow_up">
                                </div>
                                <div class="form-group">
                                    <label for="serial_no">Serial No</label>
                                    <input type="text" class="form-control" id="serial_no" name="serial_no"
                                        placeholder="serial_no">
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                                
                            <?php

                            if ($_POST) {
                                $_POST['created_at'] = date('Y-m-d H:i:s');
                                $_POST['created_by'] = $_SESSION['user']->id;
                                $_POST['status'] = 1;
                                $res = $mysqli->common_insert('appointments', $_POST);
                                if (!$res['error']) {
                                    echo "<script>location.href='" . $baseurl . "appointments.php'</script>";
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
