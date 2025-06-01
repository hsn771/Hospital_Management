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
                  
                  $data=$mysqli->common_select('addmissions','*',$where);
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
                                    <input type="number" class="form-control" id="patient_id" value="<?= $data->patient_id ?>" name="patient_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Staff Id</label>
                                     <input type="number" class="form-control" id="staff_id" value="<?= $data->staff_id ?>" name="staff_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">Room Id</label>
                                    <input type="number" class="form-control" id="room_id" value="<?= $data->room_id ?>" name="room_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="Admission Date">Admission Date</label>
                                    <input type="date" class="form-control" id="admission_date" value="<?= $data->admission_date ?>" name="admission_date"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="Discharge Date">Discharge Date</label>
                                    <input type="date" class="form-control" id="discharge_date" value="<?= $data->discharge_date ?>" name="discharge_date"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="Reason">Reason</label>
                                    <input type="text" class="form-control" id="reason" value="<?= $data->reason ?>" name="reason">
                                </div>
                                
                                <div class="form-group">
                                    <label for="Initial Diagnosis">Initial Diagnosis</label>
                                    <input type="text" class="form-control" id="initial_diagnosis" value="<?= $data->initial_diagnosis ?>"
                                        name="initial_diagnosis" placeholder="initial_diagnosis">
                                </div>
                                <div class="form-group">
                                    <label for="Treatment Plan">Treatment Plan</label>
                                    <input type="text" class="form-control" id="treatment_plan" value="<?= $data->treatment_plan ?>"
                                        name="treatment_plan" placeholder="treatment_plan">
                                </div>
                                <div class="form-group">
                                    <label for="Nurse Id">Nurse Id</label>
                                    <input type="number" class="form-control" id="nurse_id" value="<?= $data->nurse_id ?>" name="nurse_id"
                                        placeholder="nurse_id">
                                </div>
                                <div class="form-group">
                                    <label for="Notes">Notes</label>
                                    <input type="text" class="form-control" id="notes" value="<?= $data->notes ?>"
                                        name="notes" placeholder="notes">
                                </div>
                                
                                <div class="form-group">
                                    <label for="Consulting Doctor">Consulting Doctor</label>
                                    <input type="text" class="form-control" id="consulting_doctor" alue="<?= $data->consulting_doctor ?>" name="consulting_doctor"
                                        placeholder="profile_image">
                                </div>
                                <div class="form-group">
                                    <label for="Is Critical">Is Critical</label>
                                    <input type="text" class="form-control" id="is_critical" value="<?= $data->is_critical ?>" name="is_critical"
                                        placeholder="is_critical">
                                </div>
                                <div class="form-group">
                                    <label for="Has Attendant">Has Attendant</label>
                                    <input type="text" class="form-control" id="has_attendant" value="<?= $data->has_attendant ?>" name="has_attendant"
                                        placeholder="has_attendant">
                                </div>
                                 <div class="form-group">
                                    <label for="Has Attendant">Attendant Name</label>
                                    <input type="text" class="form-control" id="attendant_name" value="<?= $data->attendant_name ?>" name="attendant_name"
                                        placeholder="attendant_name">
                                </div>
                                 <div class="form-group">
                                    <label for="Discharge Summary">Discharge Summary</label>
                                    <input type="text" class="form-control" id="discharge_summary" value="<?= $data->discharge_summary ?>" name="discharge_summary"
                                        placeholder="discharge_summary">
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                            <?php
                      if($_POST){
                        $_POST['updated_at']=date('Y-m-d H:i:s');
                        $_POST['updated_by']=$_SESSION['user']->id;
                        $res=$mysqli->common_update('addmissions',$_POST,$where);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."addmissions.php'</script>";
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
