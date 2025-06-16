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
                    <h4 class="page-title pull-left">Create New Prescription</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="prescriptions.php">Prescriptions</a></li>
                        <li><span>New</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    
    <div class="main-content-inner">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Prescription Information</h4>
                        <form method="post" id="prescriptionForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="patient_id">Patient <span class="text-danger">*</span></label>
                                        <select class="form-control select2" id="patient_id" name="patient_id" required>
                                            <option value="">Select Patient</option>
                                            <?php
                                            $patients = $mysqli->common_select('patients');
                                            if (!$patients['error']) {
                                                foreach ($patients['data'] as $p) {
                                                    echo "<option value='{$p->id}'>{$p->name} ({$p->phone})</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pres_date">Prescription Date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="pres_date" name="pres_date" 
                                            value="<?= date('Y-m-d') ?>" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="appointment_id">Appointment</label>
                                        <select class="form-control select2" id="appointment_id" name="appointment_id">
                                            <option value="">Select Appointment</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="staff_id">Doctor <span class="text-danger">*</span></label>
                                        <select class="form-control select2" id="staff_id" name="staff_id" required>
                                            <option value="">Select Doctor</option>
                                            <?php
                                            $doctors = $mysqli->common_select('staff', '*', ['role' => 'doctor']);
                                            if (!$doctors['error']) {
                                                foreach ($doctors['data'] as $doc) {
                                                    echo "<option value='{$doc->id}'>Dr. {$doc->name}</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="cc">Chief Complaint (CC)</label>
                                <textarea class="form-control" id="cc" name="cc" rows="2"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="dx">Diagnosis (DX) <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="dx" name="dx" rows="2" required></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="rf">Referred To (RF)</label>
                                <input type="text" class="form-control" id="rf" name="rf">
                            </div>
                            
                            <div class="form-group">
                                <label for="inv">Investigations (INV)</label>
                                <textarea class="form-control" id="inv" name="inv" rows="2"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="notes">Notes</label>
                                <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="next_visit_day">Next Visit Date</label>
                                        <input type="date" class="form-control" id="next_visit_day" name="next_visit_day">
                                    </div>
                                </div>
                            </div>
                            
                            <hr>
                            <h5 class="mb-3">Medications</h5>
                            <div id="medications-container">
                                <div class="medication-item card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Medicine Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="medicines[0][name]" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Dosage <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="medicines[0][dosage]" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Frequency <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="medicines[0][frequency]" required>
                                                        <option value="OD">OD (Once daily)</option>
                                                        <option value="BD">BD (Twice daily)</option>
                                                        <option value="TDS">TDS (Thrice daily)</option>
                                                        <option value="QID">QID (Four times daily)</option>
                                                        <option value="SOS">SOS (As needed)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Duration <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="medicines[0][duration]" placeholder="e.g., 5 days" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Meal Relation</label>
                                                    <select class="form-control" name="medicines[0][meal_relation]">
                                                        <option value="Before Meal">Before Meal</option>
                                                        <option value="After Meal">After Meal</option>
                                                        <option value="With Meal">With Meal</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Instructions</label>
                                            <textarea class="form-control" name="medicines[0][instructions]" rows="1"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="button" id="add-medication" class="btn btn-secondary btn-sm mb-3">
                                <i class="fa fa-plus"></i> Add Another Medication
                            </button>
                            
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary px-5 py-2">Save Prescription</button>
                                <a href="prescriptions.php" class="btn btn-dark px-5 py-2 ml-2">Cancel</a>
                            </div>
                        </form>
                        
                        <?php
                        if ($_POST) {
                            // Process prescription data
                            $prescription_data = [
                                'pres_date' => $_POST['pres_date'],
                                'patient_id' => $_POST['patient_id'],
                                'staff_id' => $_POST['staff_id'],
                                'appointment_id' => $_POST['appointment_id'] ?: null,
                                'cc' => $_POST['cc'],
                                'dx' => $_POST['dx'],
                                'rf' => $_POST['rf'],
                                'inv' => $_POST['inv'],
                                'notes' => $_POST['notes'],
                                'next_visit_day' => $_POST['next_visit_day'] ?: null,
                                'created_at' => date('Y-m-d H:i:s'),
                                'created_by' => $_SESSION['user']->id,
                                'status' => 1
                            ];
                            
                            // Insert prescription
                            $res = $mysqli->common_insert('prescriptions', $prescription_data);
                            
                            if (!$res['error']) {
                                $prescription_id = $res['insert_id'];
                                
                                // Process medications
                                if (!empty($_POST['medicines'])) {
                                    foreach ($_POST['medicines'] as $medicine) {
                                        $medicine_data = [
                                            'prescription_id' => $prescription_id,
                                            'medicine_name' => $medicine['name'],
                                            'dosage' => $medicine['dosage'],
                                            'frequency' => $medicine['frequency'],
                                            'duration' => $medicine['duration'],
                                            'meal_relation' => $medicine['meal_relation'],
                                            'notes' => $medicine['instructions'],
                                            'created_at' => date('Y-m-d H:i:s'),
                                            'created_by' => $_SESSION['user']->id,
                                            'status' => 1
                                        ];
                                        $mysqli->common_insert('prescriptions_details', $medicine_data);
                                    }
                                }
                                
                                echo "<script>location.href='".$baseurl."prescriptions_show.php?id=$prescription_id'</script>";
                            } else {
                                echo "<div class='alert alert-danger mt-3'>Error: ".$res['error_msg']."</div>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Initialize select2
    $('.select2').select2();
    
    // Load appointments when patient is selected
    $('#patient_id').change(function() {
        var patientId = $(this).val();
        if (patientId) {
            $.ajax({
                url: 'ajax/appointments.php',
                type: 'GET',
                data: { patient_id: patientId },
                success: function(response) {
                    $('#appointment_id').html(response);
                }
            });
        } else {
            $('#appointment_id').html('<option value="">Select Appointment</option>');
        }
    });
    
    // Add medication row
    let medCounter = 1;
    $('#add-medication').click(function() {
        const newItem = $(`<div class="medication-item card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Medicine Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="medicines[${medCounter}][name]" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Dosage <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="medicines[${medCounter}][dosage]" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Frequency <span class="text-danger">*</span></label>
                            <select class="form-control" name="medicines[${medCounter}][frequency]" required>
                                <option value="OD">OD (Once daily)</option>
                                <option value="BD">BD (Twice daily)</option>
                                <option value="TDS">TDS (Thrice daily)</option>
                                <option value="QID">QID (Four times daily)</option>
                                <option value="SOS">SOS (As needed)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Duration <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="medicines[${medCounter}][duration]" placeholder="e.g., 5 days" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Meal Relation</label>
                            <select class="form-control" name="medicines[${medCounter}][meal_relation]">
                                <option value="Before Meal">Before Meal</option>
                                <option value="After Meal">After Meal</option>
                                <option value="With Meal">With Meal</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Instructions</label>
                    <textarea class="form-control" name="medicines[${medCounter}][instructions]" rows="1"></textarea>
                </div>
                <button type="button" class="btn btn-danger btn-sm remove-medication float-right">
                    <i class="fa fa-trash"></i> Remove
                </button>
            </div>
        </div>`);
        
        $('#medications-container').append(newItem);
        medCounter++;
    });
    
    // Remove medication row
    $(document).on('click', '.remove-medication', function() {
        $(this).closest('.medication-item').remove();
    });
});
</script>

<!-- main content area end -->
<?php include_once 'Include/footer.php'; ?>