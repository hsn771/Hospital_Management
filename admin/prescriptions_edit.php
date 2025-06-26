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
                  
                  $data=$mysqli->common_select('prescriptions','*',$where);
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
                                    <label for="pres_date">Prescriptions Date</label>
                                    <input type="number" class="form-control" id="pres_date" value="<?= $data->pres_date ?>" name="pres_date"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Staff Id</label>
                                     <input type="number" class="form-control" id="staff_id" value="<?= $data->staff_id ?>" name="appointment_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="appointment_id">Appointment Id</label>
                                    <input type="number" class="form-control" id="appointment_id" value="<?= $data->appointment_id ?>" name="room_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="Admission Date">Patient Id </label>
                                    <input type="number" class="form-control" id="patient_id" value="<?= $data->patient_id ?>" name="patient_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="staff_id ">Staff Id</label>
                                    <input type="date" class="form-control" id="staff_id" value="<?= $data->staff_id ?>" name="staff_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="notes">Notes</label>
                                    <input type="text" class="form-control" id="notes" value="<?= $data->notes ?>" name="notes">
                                </div>
                                
                                <div class="form-group">
                                    <label for="dx">DX</label>
                                    <input type="text" class="form-control" id="dx" value="<?= $data->dx ?>"
                                        name="dx" placeholder="initial_diagnosis">
                                </div>
                                <div class="form-group">
                                    <label for="Treatment Plan">Treatment Plan</label>
                                    <input type="text" class="form-control" id="treatment_plan" value="<?= $data->treatment_plan ?>"
                                        name="treatment_plan" placeholder="treatment_plan">
                                </div>
                                <div class="form-group">
                                    <label for="cc ">CC </label>
                                    <input type="number" class="form-control" id="cc" value="<?= $data->cc ?>" name="cc"
                                        placeholder="nurse_id">
                                </div>
                                <div class="form-group">
                                    <label for="rf">RF</label>
                                    <input type="text" class="form-control" id="rf" value="<?= $data->rf ?>"
                                        name="rf" placeholder="notes">
                                </div>
                                
                                <div class="form-group">
                                    <label for="Consulting Doctor">Consulting Doctor</label>
                                    <input type="text" class="form-control" id="consulting_doctor" alue="<?= $data->consulting_doctor ?>" name="consulting_doctor"
                                        placeholder="profile_image">
                                </div>
                                <div class="form-group">
                                    <label for="inv ">INV </label>
                                    <input type="text" class="form-control" id="inv" value="<?= $data->inv ?>" name="inv"
                                        placeholder="is_critical">
                                </div>
                                <div class="form-group">
                                    <label for="Has Attendant">Next Visit Day </label>
                                    <input type="text" class="form-control" id="next_visit_day" value="<?= $data->next_visit_day ?>" name="next_visit_day"
                                        placeholder="has_attendant">
                                </div>
                                 
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                            <?php
                      if($_POST){
                        $_POST['updated_at']=date('Y-m-d H:i:s');
                        $_POST['updated_by']=$_SESSION['user']->id;
                        $res=$mysqli->common_update('prescriptions',$_POST,$where);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."prescriptions.php'</script>";
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
