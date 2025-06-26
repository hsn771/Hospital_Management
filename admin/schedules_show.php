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
                    <h4 class="page-title pull-left">Full Information(Room)</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
        
                    </ul>
                </div>
            </div>
            <?php
            $where['id'] = $_GET['id'];
            $data = $mysqli->common_select('schedules', '*', $where);
            if (!$data['error']) {
                $rooms = $data['data'][0];
            }
            
            ?>
            <div class="col-sm-12 clearfix">
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Schedules Information</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">Schedule Id</th>
                                                <td><?= $schedules->ischedule_idd ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Staff Id </th>
                                                <td><?= $schedules->staff_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Day of Week</th>
                                                <td><?= $rschedulesooms->day_of_week ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Time Start Time</th>
                                                <td><?= $schedules->start_time ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">End Time</th>
                                                <td><?= $schedules->end_time ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Shift Type</th>
                                                <td><?= $schedules->shift_type ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Location</th>
                                                <td><?= $schedules->location ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Is Available</th>
                                                <td><?= $schedules->is_available ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Notes</th>
                                                <td><?= $schedules->notes ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Valid From</th>
                                                <td><?= $schedules->valid_from?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Valid Until</th>
                                                <td><?= $schedules->valid_until ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Is Recurring</th>
                                                <td><?= $schedules->is_recurring ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Room Id</th>
                                                <td><?= $schedules->room_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Department Id</th>
                                                <td><?= $schedules->department_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Apointment Blocked</th>
                                                <td><?= $schedules->appointment_blocked ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Break Start</th>
                                                <td><?= $schedules->break_start ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Break End</th>
                                                <td><?= $schedules->break_end ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Approval Status</th>
                                                <td><?= $schedules->approval_status ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Appointments</th>
                                                <td><?= $schedules->appointment_qty ?></td>
                                            </tr>
                                            
                                            
                                        </thead>
                                        <tbody>

                    
                                                    <a href="<?= $baseurl ?>schedules_edit.php?id=<?= $schedules->id ?>"
                                                        class="btn btn-info btn-xs" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?= $baseurl ?>schedules_delete.php?id=<?= $schedules->id ?>"
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