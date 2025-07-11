<?php include_once 'Include/header.php'; ?>
<!-- sidebar menu area start -->
<?php include_once 'Include/sidebar.php'; ?>
<style>
        body {
            background-color: #f8f9fa;
        }
        .prescription-pad {
            background-color: white;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 15px;
            margin: 20px auto;
        }
        .prescription-header {
            border-bottom: 2px solid #007bff;
            margin-bottom: 20px;
            padding-bottom: 15px;
        }
        .hospital-logo {
            max-height: 80px;
        }
        .prescription-title {
            color: #007bff;
            font-weight: bold;
        }
        .patient-info {
            background-color: #f1f8ff;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .medicine-table th {
            background-color: #007bff;
            color: white;
        }
        .doctor-signature {
            margin-top: 50px;
            border-top: 1px dashed #6c757d;
            padding-top: 10px;
        }
        .watermark {
            opacity: 0.1;
            position: absolute;
            z-index: -1;
            font-size: 80px;
            color: #007bff;
            transform: rotate(-30deg);
            left: 20%;
            top: 30%;
        }
        .prescription-footer {
            font-size: 12px;
            color: #6c757d;
            margin-top: 20px;
            border-top: 1px solid #dee2e6;
            padding-top: 10px;
        }
        .section-label {
           font-weight: bold;
           margin-bottom: 10px;
       }
    </style>
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
                    <h4 class="page-title pull-left">Create New Prescription</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
        $appointment_id = $_GET['appointment_id'];
        $pre_data = $mysqli->common_select('prescriptions','*',['appointment_id'=>$appointment_id]);
        
        if(!$pre_data['error']){
            echo "<script>location.href='".$baseurl."prescriptions_show.php?id=".$pre_data['data'][0]->id."'</script>";
        }

        $patient_id = $_GET['patient_id'];
        $patient_data = $mysqli->common_select('patients','*',['id'=>$patient_id]);
        $patient_data=$patient_data['data'][0];
    ?>
    <form action="" method="post">
        <div class="container">
            <div class="prescription-pad">
                <div class="watermark">Prescription</div>
                
                <!-- Header Section -->
                <div class="prescription-header">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="" alt="" class="hospital-logo">
                        </div>
                        <div class="col-md-4 text-center">
                            <h2 class="prescription-title">MEDICAL PRESCRIPTION</h2>
                            <p class="mb-0">Rightway Hospital</p>
                            <p class="mb-0">GEC, Chattogram | Phone: (123) 456-7890</p>
                        </div>
                        <div class="col-md-4 text-right">
                            <label for="pres_date"><b>Date:</b></label>
                            <input type="date" value="<?= date('Y-m-d') ?>" id="pres_date" name="pres_date"><br>
                        </div>
                    </div>
                </div>
                
                <!-- Patient Information -->
                <div class="patient-info">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="Patient Id"><strong><b>Patient:</b></strong></label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $patient_data->full_name ?>">
                            <input type="hidden" id="patient_id" name="patient_id" value="<?= $patient_data->id ?>">
                        </div>
                        <div class="col-md-4">
                        <label for="Patient Id"><b>Age:</b></label>
                            <input type="number" class="form-control" id="age" name="age" value="<?= date('Y') - date('Y',strtotime($patient_data->date_of_birth)); ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="Patient Id"><b>Weight:</b></label>
                            <input type="text" class="form-control" id="weight" name="weight"><br>
                        </div>
                    </div>
                </div>
                
                <!-- Prescription Medicines -->
                <div class="row prescription-body mt-3">
                    <div class="col-md-3 left-column pr-3">
                        <div class="form-group">
                            <label for="cc">C/C:</label>
                            <textarea class="form-control" id="cc" name="cc"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="rf">R/F:</label>
                            <textarea class="form-control" id="rf" name="rf"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="bp">D/X:</label>
                            <textarea class="form-control" id="dx" name="dx"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inv">Inv:</label>
                            <textarea class="form-control" id="inv" name="inv"></textarea>
                        </div>
                    </div>
        
                    <div class="col-md-9 right-column pl-3">
                        <div class="rx">℞</div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="medicine">Medicine</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="medicine">Frequency</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="medicine">Duration</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="medicine">Meal Relation</label>
                                        <button type="button" class="btn btn-info btn-sm" onclick="add_row()">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="medicines">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="medicine_name[]" id="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="frequency[]" id="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="duration[]" id="">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select name="meal_relation[]" class="form-control" id="">
                                                <option value="before">Before</option>
                                                <option value="after">After</option>
                                                <option value="with">With</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="next_visit_day">Next Visite Day</label>
                                    <input type="text" class="form-control" id="next_visit_day" name="next_visit_day">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label for="medicine">Advice</label>
                                    <textarea class="form-control" id="notes" name="notes"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                
                
                
                    <!-- Footer -->
                    <div class="prescription-footer text-center">
                        <p class="mb-0">This is a computer generated prescription. No signature required.</p>
                        <p class="mb-0">For emergency, call Hospital at (123) 456-7890</p>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
    <?php 
        if($_POST){
            $pres['patient_id']=$_GET['patient_id'];
            $pres['weight']=$_POST['weight'];
            $pres['age']=$_POST['age'];
            $pres['appointment_id']=$_GET['appointment_id'];
            $pres['staff_id']=$_GET['doctor_id'];
            $pres['pres_date']=$_POST['pres_date'];
            $pres['dx']=$_POST['dx'];
            $pres['cc']=$_POST['cc'];
            $pres['rf']=$_POST['rf'];
            $pres['inv']=$_POST['inv'];
            $pres['notes']=$_POST['notes'];
            $pres['next_visit_day']=$_POST['next_visit_day'];
            $pres['status']=1;
            $pres['created_at']=date('Y-m-d H:i:s');
            $pres['updated_at']=date('Y-m-d H:i:s');
            $pres_id=$mysqli->common_insert('prescriptions',$pres);
            if(!$pres_id['error']){
                $pres_id=$pres_id['data'];
                if(isset($_POST['medicine_name'])){
                    foreach($_POST['medicine_name'] as $key=>$value){
                        $med['prescription_id']=$pres_id;
                        $med['medicine_name']=$value;
                        $med['frequency']=$_POST['frequency'][$key];
                        $med['duration']=$_POST['duration'][$key];
                        $med['meal_relation']=$_POST['meal_relation'][$key];
                        $med['status']=1;
                        $med['created_at']=date('Y-m-d H:i:s');
                        $med['updated_at']=date('Y-m-d H:i:s');
                        $med_id=$mysqli->common_insert('prescriptions_details',$med);
                    }
                }
                if(!$res['error']){
                    echo "<script>location.href='".$baseurl."prescriptions_show.php?id=".$pres_id."'</script>";
                }else{
                    echo $res['error_msg'];
                }
            }
        }
    ?>
<!-- main content area end -->
<?php include_once 'Include/footer.php'; ?>
<script>
    function add_row(){
        var html = `<div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="medicine_name[]" id="">
                            </div>
                        </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="frequency[]" id="">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="duration[]" id="">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <select name="meal_relation[]" class=" form-control" id="">
                                    <option value="before">Before</option>
                                    <option value="after">After</option>
                                    <option value="with">With</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-danger btn-sm" type="button" onclick="remove_row(this)">-</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`;
        $('.medicines').append(html);
    }
    function remove_row(e){
        $(e).closest('.row').remove();
    }
</script>