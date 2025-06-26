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
                                    <label for="patient_id">Patient</label>
                                    <select class="form-control" id="patient_id" name="patient_id">
                                        <?php
                                        $res = $mysqli->common_select('patients');
                                        if (!$res['error']) {
                                            foreach ($res['data'] as $key => $value) {
                                        ?>
                                                <option value="<?= $value->id ?>" <?= $data->patient_id==$value->id?"selected":"" ?>><?= $value->full_name ?></option>
                                        <?php      }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Doctor </label>
                                    <select class="form-control" id="staff_id" name="staff_id">
                                        <?php
                                        $res = $mysqli->common_select('user');
                                        if (!$res['error']) {
                                            foreach ($res['data'] as $key => $value) {
                                        ?>
                                                <option value="<?= $value->id ?>" <?= $data->staff_id==$value->id?"selected":"" ?>><?= $value->name ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">Room</label>
                                    <select class="form-control" id="room_id" name="room_id">
                                        <?php
                                        $res = $mysqli->common_select('rooms');
                                        if (!$res['error']) {
                                            foreach ($res['data'] as $key => $value) {
                                        ?>
                                                <option value="<?= $value->id.'-'.$value->price_per_day ?>" <?= $data->room_id==$value->id?"selected":"" ?>><?= $value->room_number ?></option>
                                        <?php } } ?>
                                    </select>
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
                        $room_price=explode('-',$_POST['room_id'])[1];
                        $_POST['room_id']=explode('-',$_POST['room_id'])[0];
                        $_POST['updated_at']=date('Y-m-d H:i:s');
                        $_POST['updated_by']=$_SESSION['user']->id;
                        $res=$mysqli->common_update('addmissions',$_POST,$where);
                        if(!$res['error']){
                            if($_POST['discharge_date']!=''){
                               addmission_bill_add($_POST,$room_price,$mysqli);
                            }
                          echo "<script>location.href='".$baseurl."addmissions.php'</script>";
                        }else{
                          echo $res['error_msg'];
                        }
                      }


                      function addmission_bill_add($data,$room_price,$mysqli){
                        $date_defference = date_diff(date_create($data['discharge_date']), date_create($data['admission_date']));
                        
                        $bill['patient_id'] = $data['patient_id'];
                        $bill['staff_id'] = $data['staff_id'];
                        $bill['addmission_id'] = $_GET['id'];
                        $bill['billing_date'] = $data['discharge_date'];
                        $bill['total_amount'] = $date_defference->format('%a') * $room_price;
                        $bill['discount'] = 0;
                        $bill['final_amount'] = $date_defference->format('%a') * $room_price;
                        $bill['paid_amount'] = 0;
                        $bill['due_amount'] = $date_defference->format('%a') * $room_price;
                        $bill['status'] = 1;
                        $bill['created_at'] = date('Y-m-d H:i:s');
                        $bill['updated_at'] = date('Y-m-d H:i:s');

                        // Calculate due amount
                       
                        $bill['payment_status'] =  'Unpaid';
                        
                        $billres = $mysqli->common_insert('billing', $bill);
                        
                        if (!$billres['error']) {
                            $bill_item = array(
                                'billing_id' => $billres['data'],
                                'admission_id' => $_GET['id'],
                                'qty' => $date_defference->format('%a'),
                                'amount' => $bill['final_amount'],
                                'status' => 1
                            );
                            
                            $resi = $mysqli->common_insert('billing_details', $bill_item);
                            
                            return "success";
                        } else {
                            return "failed";
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
