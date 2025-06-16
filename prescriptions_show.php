<?php include_once 'Include/header.php'; ?>
<!-- sidebar menu area start -->
<?php include_once 'Include/sidebar.php'; ?>
<!-- sidebar menu area end -->
<!-- main content area start -->
<div class="main-content">
    <!-- header area start -->
    <?php include_once 'Include/topbar.php'; ?>
    <!-- header area end -->
    
    <?php
    $prescription_id = $_GET['id'];
    $prescription = $mysqli->common_select('prescriptions', '*', ['id' => $prescription_id]);
    
    if ($prescription['error'] || empty($prescription['data'])) {
        echo "<script>alert('Prescription not found'); location.href='prescriptions.php';</script>";
        exit;
    }
    
    $prescription = $prescription['data'][0];
    
    // Get patient details
    $patient = $mysqli->common_select('patients', '*', ['id' => $prescription->patient_id]);
    $patient = !$patient['error'] ? $patient['data'][0] : null;
    
    // Get doctor details
    $doctor = $mysqli->common_select('staff', '*', ['id' => $prescription->staff_id]);
    $doctor = !$doctor['error'] ? $doctor['data'][0] : null;
    
    // Get medications
    $medications = $mysqli->common_select('prescriptions_details', '*', ['prescription_id' => $prescription_id]);
    $medications = !$medications['error'] ? $medications['data'] : [];
    ?>
    
    <!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Prescription Details</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="prescriptions.php">Prescriptions</a></li>
                        <li><span>View</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 text-right">
                <a href="<?= $baseurl ?>prescriptions_print.php?id=<?= $prescription_id ?>" 
                   class="btn btn-info btn-sm" target="_blank">
                    <i class="fa fa-print"></i> Print
                </a>
                <a href="<?= $baseurl ?>prescriptions_edit.php?id=<?= $prescription_id ?>" 
                   class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i> Edit
                </a>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    
    <div class="main-content-inner">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="invoice-area">
                            <div class="invoice-head">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="invoice-logo text-center mb-4">
                                            <img src="assets/images/hospital-logo.png" alt="logo" style="max-height: 80px;">
                                            <h4 class="mt-2"><?= htmlspecialchars($settings->hospital_name) ?></h4>
                                            <p><?= htmlspecialchars($settings->hospital_address) ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <h2>PRESCRIPTION</h2>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <p class="mb-1"><strong>Date:</strong> <?= date('d M Y', strtotime($prescription->pres_date)) ?></p>
                                        <p><strong>Prescription ID:</strong> <?= $prescription->id ?></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row align-items-center mt-4">
                                <div class="col-md-6">
                                    <div class="patient-info">
                                        <h4 class="mb-3">Patient Information</h4>
                                        <?php if ($patient): ?>
                                        <table class="table table-sm">
                                            <tr>
                                                <th width="30%">Name</th>
                                                <td><?= htmlspecialchars($patient->name) ?></td>
                                            </tr>
                                            <tr>
                                                <th>Age</th>
                                                <td><?= calculateAge($patient->dob) ?> years</td>
                                            </tr>
                                            <tr>
                                                <th>Gender</th>
                                                <td><?= htmlspecialchars($patient->gender) ?></td>
                                            </tr>
                                            <tr>
                                                <th>Phone</th>
                                                <td><?= htmlspecialchars($patient->phone) ?></td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td><?= htmlspecialchars($patient->address) ?></td>
                                            </tr>
                                        </table>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="doctor-info">
                                        <h4 class="mb-3">Doctor Information</h4>
                                        <?php if ($doctor): ?>
                                        <table class="table table-sm">
                                            <tr>
                                                <th width="30%">Name</th>
                                                <td>Dr. <?= htmlspecialchars($doctor->name) ?></td>
                                            </tr>
                                            <tr>
                                                <th>Specialization</th>
                                                <td><?= htmlspecialchars($doctor->specialization) ?></td>
                                            </tr>
                                            <tr>
                                                <th>Phone</th>
                                                <td><?= htmlspecialchars($doctor->phone) ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td><?= htmlspecialchars($doctor->email) ?></td>
                                            </tr>
                                        </table>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="prescription-details mt-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="diagnosis-section mb-4">
                                            <h5 class="section-title bg-light p-2">Diagnosis</h5>
                                            <div class="p-3">
                                                <p><strong>Chief Complaint (CC):</strong></p>
                                                <p><?= nl2br(htmlspecialchars($prescription->cc)) ?></p>
                                                
                                                <p class="mt-3"><strong>Diagnosis (DX):</strong></p>
                                                <p><?= nl2br(htmlspecialchars($prescription->dx)) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="other-info-section mb-4">
                                            <h5 class="section-title bg-light p-2">Other Information</h5>
                                            <div class="p-3">
                                                <?php if ($prescription->rf): ?>
                                                <p><strong>Referred To (RF):</strong> <?= htmlspecialchars($prescription->rf) ?></p>
                                                <?php endif; ?>
                                                
                                                <?php if ($prescription->inv): ?>
                                                <p><strong>Investigations (INV):</strong></p>
                                                <p><?= nl2br(htmlspecialchars($prescription->inv)) ?></p>
                                                <?php endif; ?>
                                                
                                                <?php if ($prescription->next_visit_day): ?>
                                                <p><strong>Next Visit:</strong> <?= date('d M Y', strtotime($prescription->next_visit_day)) ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php if (!empty($medications)): ?>
                                <div class="medications-section">
                                    <h5 class="section-title bg-light p-2">Medications</h5>
                                    <div class="p-3">
                                        <table class="table table-bordered">
                                            <thead class="bg-primary text-white">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Medicine Name</th>
                                                    <th>Dosage</th>
                                                    <th>Frequency</th>
                                                    <th>Duration</th>
                                                    <th>Meal Relation</th>
                                                    <th>Instructions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($medications as $i => $med): ?>
                                                <tr>
                                                    <td><?= $i+1 ?></td>
                                                    <td><?= htmlspecialchars($med->medicine_name) ?></td>
                                                    <td><?= htmlspecialchars($med->dosage) ?></td>
                                                    <td><?= htmlspecialchars($med->frequency) ?></td>
                                                    <td><?= htmlspecialchars($med->duration) ?></td>
                                                    <td><?= htmlspecialchars($med->meal_relation) ?></td>
                                                    <td><?= htmlspecialchars($med->notes) ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <?php if ($prescription->notes): ?>
                                <div class="notes-section mt-4">
                                    <h5 class="section-title bg-light p-2">Doctor's Notes</h5>
                                    <div class="p-3">
                                        <p><?= nl2br(htmlspecialchars($prescription->notes)) ?></p>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="doctor-signature mt-5 text-right">
                                <div class="signature-line" style="border-top: 1px solid #000; width: 200px; display: inline-block;"></div>
                                <p class="mt-2"><strong>Dr. <?= $doctor ? htmlspecialchars($doctor->name) : '' ?></strong></p>
                                <p><?= $doctor ? htmlspecialchars($doctor->specialization) : '' ?></p>
                                <p><?= $settings->hospital_name ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main content area end -->
<?php include_once 'Include/footer.php'; ?>