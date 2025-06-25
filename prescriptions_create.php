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
                </div>
            </div>
        </div>
    </div>
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
                        <label for="Date"><b>Date:</b></label>
                        <input type="date" id="date" name="date"><br>
                    </div>
                </div>
            </div>
            
            <!-- Patient Information -->
            <div class="patient-info">
                <div class="row">
                    <div class="col-md-4">
                        <label for="Patient Id"><strong><b>Patient:</b></strong></label>
                        <input type="text" id="patient_id" name="patient_id"><br>
                    </div>
                    <div class="col-md-4">
                       <label for="Patient Id"><b>Age:</b></label>
                        <input type="number" id="age" name="age">
                    </div>
                    <div class="col-md-4">
                        <label for="Patient Id"><b>Weight:</b></label>
                        <input type="text" id="weight" name="weight"><br>
                    </div>
                </div>
            </div>
            
            <!-- Prescription Medicines -->
            <div class="row prescription-body mt-3">
    <div class="col-md-3 left-column pr-3">
      <p class="section-label">C/C:</p>
      <p class="section-label">B/P:</p>
      <p class="section-label">Contrain:</p>
      <p class="section-label">Advice:</p>
    </div>
    
         <div class="col-md-9 right-column pl-3">
           <div class="rx">℞</div>
                <table>
                    <tr>
                        <td>
                            <strong>Medicine:</strong> <input type="text" name="medicine_name" placeholder="name" style="width: 20%;">
                            <strong>Dosage:</strong> <input type="text" name="dosage" placeholder="500mg" style="width: 20%;">
                            <strong>Duration:</strong> <input type="text" name="duration" placeholder="7 days" style="width: 20%;">
                        </td>
                    </tr>
                </table>
        </div>
            
    
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