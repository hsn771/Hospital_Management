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
                  
                  $data=$mysqli->common_select('prescriptions_details','*',$where);
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
                                    <label for="prescription_id">Prescription Id</label>
                                    <input type="number" class="form-control" id="prescription_id" value="<?= $data->patprescription_idient_id ?>" name="prescription_id"
                                        aria-describedby="emailHelp" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="medicine_name">Medicine Name</label>
                                     <input type="text" class="form-control" id="medicine_name" value="<?= $data->medicine_name ?>" name="medicine_name"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="dosage">Dosage</label>
                                    <input type="number" class="form-control" id="dosage" value="<?= $data->dosage ?>" name="dosage"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="frequency">Frequency</label>
                                    <input type="number" class="form-control" id="frequency" value="<?= $data->frequency ?>" name="frequency"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="email">Duration</label>
                                    <input type="time" class="form-control" id="duration" value="<?= $data->duration ?>" name="duration"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="route">Route</label>
                                    <input type="text" class="form-control" id="route" value="<?= $data->route ?>" name="route">
                                </div>
                                <div class="form-group">
                                    <label for="timing">Timing</label>
                                    <input type="time" class="form-control" id="timing" value="<?= $data->timing ?>"
                                        name="timing" placeholder="notes">
                                </div>
                                
                                <div class="form-group">
                                    <label for="insurancmeal_relatione_id">Meal Relation </label>
                                    <input type="text" class="form-control" id="meal_relation" value="<?= $data->meal_relation ?>"
                                        name="meal_relation" placeholder="patient_temperature">
                                </div>
                                <div class="form-group">
                                    <label for="notes">Notes </label>
                                    <input type="text" class="form-control" id="notes" value="<?= $data->notes ?>" name="notes"
                                        placeholder="bp_reading">
                                </div>
                                
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                            <?php
                      if($_POST){
                        $_POST['updated_at']=date('Y-m-d H:i:s');
                        $_POST['updated_by']=$_SESSION['user']->id;
                        $res=$mysqli->common_update('prescriptions_details',$_POST,$where);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."prescriptions_details_edit.php'</script>";
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
