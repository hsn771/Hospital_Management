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
            <?php
                  $where['id']=$_GET['id'];
                  
                  $data=$mysqli->common_select('appointments','*',$where);
                  if(!$data['error']){
                    $data=$data['data'][0];
                  }
                ?>
            <div class="col-sm-12 clearfix">
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Update Appointment Form</h4>
                            <form method="post" enctype="multipart/form-data" action="">
                                <div class="form-group">
                                    <label for="patient_id">Patient Id</label>
                                    <select class="form-control" id="patient_id" name="patient_id">
                                        <?php
                                        $res = $mysqli->common_select('patients');
                                        if (!$res['error']) {
                                            foreach ($res['data'] as $key => $value) {
                                        ?>
                                        <option value="<?= $value->id ?>" <?= $data->patient_id==$value->id?"selected":"" ?>><?= $value->full_name ?></option>
                                        <?php        }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Doctor</label>
                                    <select class="form-control" id="staff_id" name="staff_id">
                                        <?php
                                        $res = $mysqli->common_select('user');
                                        if (!$res['error']) {
                                            foreach ($res['data'] as $key => $value) {
                                        ?>
                                                <option value="<?= $value->id ?>" <?= $data->staff_id==$value->id?"selected":"" ?>><?= $value->name ?></option>
                                         <?php       }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="phone">appointment_date</label>
                                    <input type="date" class="form-control" id="appointment_date" value="<?= $data->appointment_date ?>" name="appointment_date"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="email">start_time</label>
                                    <input type="time" class="form-control" id="start_time" value="<?= $data->start_time ?>" name="start_time"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="address">Purpose</label>
                                    <input type="text" class="form-control" id="purpose" value="<?= $data->purpose ?>" name="purpose">
                                </div>
                                <div class="form-group">
                                    <label for="text">notes</label>
                                    <input type="text" class="form-control" id="notes" value="<?= $data->notes ?>"
                                        name="notes" placeholder="notes">
                                </div>
                                <div class="form-group">
                                    <label for="nid_passport">appointment_type</label>
                                    <select class="form-control" id="appointment_type" value="<?= $data->appointment_type ?>" name="appointment_type" aria-describedby="emailHelp">
                                        <option value="New Patient">New Patient</option>
                                        <option value="Follow-up">Follow-up</option>
                                        <option value="Emergency">Emergency</option>
                                        <option value="Routine/Check-up">Routine/Check-up</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="insurance_id">Patient Temperature</label>
                                    <input type="text" class="form-control" id="patient_temperature" value="<?= $data->patient_temperature ?>"
                                        name="patient_temperature" placeholder="patient_temperature">
                                </div>
                                <div class="form-group">
                                    <label for="bp_reading">Bp Reading</label>
                                    <input type="text" class="form-control" id="bp_reading" value="<?= $data->bp_reading ?>" name="bp_reading"
                                        placeholder="bp_reading">
                                </div>
                                <div class="form-group">
                                    <label for="registration_date">heart_rate</label>
                                    <input type="text" class="form-control" id="heart_rate" value="<?= $data->heart_rate ?>"
                                        name="heart_rate" placeholder="heart_rate">
                                </div>
                                
                                <div class="form-group">
                                    <label for="source">Source</label>
                                    <input type="text" class="form-control" id="source" value="<?= $data->source ?>" name="source"
                                        placeholder="profile_image">
                                </div>
                                <div class="form-group">
                                    <label for="follow_up">Follow Up</label>
                                    <input type="text" class="form-control" id="follow_up_required" name="follow_up_required"
                                        placeholder="follow_up">
                                </div>
                                <div class="form-group">
                                    <label for="serial_no">Serial No</label>
                                    <input type="text" class="form-control" id="serial_no" value="<?= $data->serial_no ?>" name="serial_no"
                                        placeholder="serial_no">
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                            <?php
                      if($_POST){
                        $_POST['updated_at']=date('Y-m-d H:i:s');
                        $_POST['updated_by']=$_SESSION['user']->id;
                        $res=$mysqli->common_update('appointments',$_POST,$where);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."appointments.php'</script>";
                        }else{
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
