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
                            <h4 class="header-title">Schedules Information</h4>
                            <form method="post" enctype="multipart/form-data" action="">
                                <div class="form-group">
                                    <label for="room_nuschedule_idmber">Schedule Id</label>
                                     <input type="number" class="form-control" id="roschedule_id" name="schedule_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="staff_id">Staff Id</label>
                                    <input type="number" class="form-control" id="staff_id" name="staff_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="day_of_week">Day of Week</label>
                                    <input type="number" class="form-control" id="day_of_week" name="day_of_week"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="start_time">Time Start </label>
                                    <input type="number" class="form-control" id="start_time" name="start_time"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="end_time">End Tim</label>
                                    <input type="number" class="form-control" id="end_time" name="end_time">
                                </div>
                                <div class="form-group">
                                    <label for="shift_type">Shift Type</label>
                                    <input type="text" class="form-control" id="shift_type"
                                        name="shift_type" placeholder="has_ac">
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location"
                                        name="location" placeholder="has_tv">
                                </div>
                                <div class="form-group">
                                    <label for="is_available">Is Available</label>
                                    <input type="text" class="form-control" id="is_available"
                                        name="is_available" placeholder="is_available">
                                </div>
                                <div class="form-group">
                                    <label for="notes">Notes</label>
                                    <input type="number" class="form-control" id="notes" name="notes"
                                        placeholder="notes">
                                </div>
                                <div class="form-group">
                                    <label for="valid_from">Valid From</label>
                                    <input type="text" class="form-control" id="valid_from"
                                        name="valid_from" placeholder="valid_from">
                                </div>
                                <div class="form-group">
                                    <label for="valid_until">Valid Until</label>
                                    <input type="valid_until" class="form-control" id="valid_until"
                                        name="valid_until" placeholder="valid_from">
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="is_recurring">Is Recurrin</label>
                                    <input type="valid_until" class="form-control" id="is_recurring" name="is_recurring"
                                        placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="room_id">Room Id</label>
                                    <input type="text" class="form-control" id="room_id" name="room_id"
                                        placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="oxygen_department_idsupport">Department Id</label>
                                    <input type="text" class="form-control" id="department_id" name="department_id"
                                        placeholder="">
                                </div>
                                 <div class="form-group">
                                    <label for="appointment_blocked">Apointment Blocked</label>
                                    <input type="text" class="form-control" id="appointment_blocked" name="appointment_blocked"
                                        placeholder="">
                                </div>
                                 <div class="form-group">
                                    <label for="break_start">Break Start</label>
                                    <input type="break_start" class="form-control" id="break_start" name="break_start"
                                        placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="break_end">Break End</label>
                                    <input type="break_end" class="form-control" id="break_end" name="break_end"
                                        placeholder="">
                                </div>
                                 <div class="form-group">
                                    <label for="speciaapproval_statusl_features">Approval Status</label>
                                    <input type="text" class="form-control" id="approval_status" name="approval_status"
                                        placeholder="">
                                </div>
                                 <div class="form-group">
                                    <label for="appointment_qty">Appointments</label>
                                    <input type="text" class="form-control" id="appointment_qty" name="appointment_qty"
                                        placeholder="">
                                </div>d
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                                
                            <?php

                            if ($_POST) {
                                $_POST['created_at'] = date('Y-m-d H:i:s');
                                $_POST['created_by'] = $_SESSION['user']->id;
                                $_POST['status'] = 1;
                                $res = $mysqli->common_insert('schedules', $_POST);
                                if (!$res['error']) {
                                    echo "<script>location.href='" . $baseurl . "schedules.php'</script>";
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
