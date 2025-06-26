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
   
    <?php
        $id = $_GET['id'];
        $prescriptions = $mysqli->common_select('prescriptions','*',['id'=>$id]);
        $prescriptions=$prescriptions['data'][0];
        $medicines = $mysqli->common_select('prescriptions_details','*',['prescription_id'=>$id]);
        $medicines=$medicines['data'];
        $patient = $mysqli->common_select('patients','*',['id'=>$prescriptions->patient_id]);
        $patient=$patient['data'][0];
    ?>
    
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
                    </div>
                </div>
                
                <!-- Patient Information -->
                <div class="patient-info">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="Patient Id"><b>Date: </b> <?= $prescriptions->pres_date ?></label>
                        </div>
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <label for="Patient Id"><b>Patient:</b> <?= $patient->full_name ?></label>
                        </div>
                        <div class="col-md-4">
                        <label for="Patient Id"><b>Age:</b> <?= $prescriptions->age ?></label>
                        </div>
                        <div class="col-md-4">
                            <label for="Patient Id"><b>Weight:</b> <?= $prescriptions->weight ?></label>
                        </div>
                    </div>
                </div>
                
                <!-- Prescription Medicines -->
                <div class="row prescription-body mt-3">
                    <div class="col-md-3 left-column pr-3">
                        <div class="form-group">
                            <label for="cc">C/C:</label>
                            <div class="border p-2" style="min-height:80px"><?= $prescriptions->cc ?></div>
                        </div>
                        <div class="form-group">
                            <label for="rf">R/F:</label>
                            <div class="border p-2" style="min-height:80px"><?= $prescriptions->rf ?></div>
                        </div>
                        <div class="form-group">
                            <label for="bp">D/X:</label>
                            <div class="border p-2" style="min-height:80px"><?= $prescriptions->dx ?></div>
                        </div>
                        <div class="form-group">
                            <label for="inv">Inv:</label>
                            <div class="border p-2" style="min-height:80px"><?= $prescriptions->inv ?></div>
                        </div>
                    </div>
        
                    <div class="col-md-9 right-column pl-3">
                        <div class="rx">℞</div>
                            
                            <div class="medicines mt-5">
                                <?php foreach($medicines as $medicine){ ?>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <b><?= $medicine->medicine_name ?></b>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <b><?= $medicine->frequency ?></b>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <b><?= $medicine->duration ?></b>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <b><?= $medicine->meal_relation ?></b>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="next_visit_day">Next Visite Day: <?= $prescriptions->next_visit_day ?></label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label for="medicine">Advice</label>
                                    <div class="border p-2" style="min-height:80px"><?= $prescriptions->notes ?></div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary float-right  no-print" onclick="print_btn()">Print Now</button>
                    </div>
                
                
                
                    <!-- Footer -->
                    <div class="prescription-footer text-center">
                        <p class="mb-0">This is a computer generated prescription. No signature required.</p>
                        <p class="mb-0">For emergency, call Hospital at (123) 456-7890</p>
                    </div>
                </div>
            </div>
        </div>
    
   
<!-- main content area end -->
<?php include_once 'Include/footer.php'; ?>
<script>
    function print_btn(){
        window.print();
    }
</script>