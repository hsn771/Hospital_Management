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
                    <h4 class="page-title pull-left">Update Prescription</h4>
                </div>
            </div>
        </div>
    </div>
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
                            <input type="date" value="<?= $prescription_data ? $prescription_data->pres_date : date('Y-m-d') ?>" id="pres_date" name="pres_date"><br>
                        </div>
                    </div>
                </div>
                
                <!-- Patient Information -->
                <div class="patient-info">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="Patient Id"><strong><b>Patient:</b></strong></label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $patient_data->full_name ?>" readonly>
                            <input type="hidden" id="patient_id" name="patient_id" value="<?= $patient_data->id ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="Patient Id"><b>Age:</b></label>
                            <input type="number" class="form-control" id="age" name="age" value="<?= $age ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="Patient Id"><b>Weight:</b></label>
                            <input type="text" class="form-control" id="weight" name="weight" value="<?= $prescription_data ? $prescription_data->weight : '' ?>"><br>
                        </div>
                    </div>
                </div>
                
                <!-- Prescription Medicines -->
                <div class="row prescription-body mt-3">
                    <div class="col-md-3 left-column pr-3">
                        <div class="form-group">
                            <label for="cc">C/C:</label>
                            <textarea class="form-control" id="cc" name="cc"><?= $prescription_data ? $prescription_data->cc : '' ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="rf">R/F:</label>
                            <textarea class="form-control" id="rf" name="rf"><?= $prescription_data ? $prescription_data->rf : '' ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="bp">D/X:</label>
                            <textarea class="form-control" id="dx" name="dx"><?= $prescription_data ? $prescription_data->dx : '' ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inv">Inv:</label>
                            <textarea class="form-control" id="inv" name="inv"><?= $prescription_data ? $prescription_data->inv : '' ?></textarea>
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
                            <?php if(isset($medicines_data) && !empty($medicines_data)): ?>
                                <?php foreach($medicines_data as $medicine): ?>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="medicine_name[]" value="<?= $medicine->medicine_name ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="frequency[]" value="<?= $medicine->frequency ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="duration[]" value="<?= $medicine->duration ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <select name="meal_relation[]" class="form-control">
                                                    <option value="before" <?= $medicine->meal_relation == 'before' ? 'selected' : '' ?>>Before</option>
                                                    <option value="after" <?= $medicine->meal_relation == 'after' ? 'selected' : '' ?>>After</option>
                                                    <option value="with" <?= $medicine->meal_relation == 'with' ? 'selected' : '' ?>>With</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="medicine_name[]">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="frequency[]">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="duration[]">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select name="meal_relation[]" class="form-control">
                                                <option value="before">Before</option>
                                                <option value="after">After</option>
                                                <option value="with">With</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="next_visit_day">Next Visit Day</label>
                                <input type="text" class="form-control" id="next_visit_day" name="next_visit_day" value="<?= $prescription_data ? $prescription_data->next_visit_day : '' ?>">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label for="medicine">Advice</label>
                                <textarea class="form-control" id="notes" name="notes"><?= $prescription_data ? $prescription_data->notes : '' ?></textarea>
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
    </form>
    
    <?php 
    if($_POST){
        // Prepare prescription data
        $pres['patient_id'] = $_GET['patient_id'];
        $pres['weight'] = $_POST['weight'];
        $pres['age'] = $_POST['age'];
        $pres['appointment_id'] = $_GET['appointment_id'] ?? null;
        $pres['staff_id'] = $_GET['doctor_id'] ?? null;
        $pres['pres_date'] = $_POST['pres_date'];
        $pres['dx'] = $_POST['dx'];
        $pres['cc'] = $_POST['cc'];
        $pres['rf'] = $_POST['rf'];
        $pres['inv'] = $_POST['inv'];
        $pres['notes'] = $_POST['notes'];
        $pres['next_visit_day'] = $_POST['next_visit_day'];
        $pres['status'] = 1;
        $pres['updated_at'] = date('Y-m-d H:i:s');
        
        if(isset($_GET['id'])) {
            // Update existing prescription
            $result = $mysqli->common_update('prescriptions', $pres, ['id'=>$_GET['id']]);
            $pres_id = $_GET['id'];
            
            // Delete existing medicine records
            $mysqli->common_delete('prescriptions_details', ['prescription_id'=>$pres_id]);
        } else {
            // Create new prescription
            $pres['created_at'] = date('Y-m-d H:i:s');
            $result = $mysqli->common_insert('prescriptions', $pres);
            $pres_id = $result['data'];
        }
        
        if(!$result['error'] && isset($_POST['medicine_name'])) {
            // Insert medicine records
            foreach($_POST['medicine_name'] as $key=>$value){
                if(!empty($value)) {
                    $med['prescription_id'] = $pres_id;
                    $med['medicine_name'] = $value;
                    $med['frequency'] = $_POST['frequency'][$key];
                    $med['duration'] = $_POST['duration'][$key];
                    $med['meal_relation'] = $_POST['meal_relation'][$key];
                    $med['status'] = 1;
                    $med['created_at'] = date('Y-m-d H:i:s');
                    $med['updated_at'] = date('Y-m-d H:i:s');
                    $med_id = $mysqli->common_insert('prescriptions_details', $med);
                }
            }
            
            echo "<script>location.href='".$baseurl."prescriptions_show.php?id=".$pres_id."'</script>";
        } else {
            echo $result['error_msg'] ?? 'Error saving prescription';
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
                                <input type="text" class="form-control" name="medicine_name[]">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="frequency[]">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="duration[]">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <select name="meal_relation[]" class="form-control">
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