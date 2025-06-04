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
            <div class="col-sm-12 clearfix">
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Staff</h4>
                            <form method="post" enctype="multipart/form-data" action="">
                                <div class="form-group">
                                    <label for="Full Name">Full Name</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="department_id">Department Id</label>
                                    <select class="form-control" id="department_id" name="department_id">
                                        <?php
                                        $res = $mysqli->common_select('departments');
                                        if (!$res['error']) {
                                            foreach ($res['data'] as $key => $value) {
                                                echo '<option value="' . $value->id . '">' . $value->name . '</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="specialization">Specialization</label>
                                    <input type="text" class="form-control" id="specialization" name="specialization">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" class="form-control" id="phone" name="phone"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="join_date">Join Date</label>
                                    <input type="date" class="form-control" id="join_date" name="join_date">
                                </div>
                                <div class="form-group">
                                    <label for="shift_id">Shift Id</label>
                                    <input type="number" class="form-control" id="shift_id"
                                        name="shift_id">
                                </div>
                                <div class="form-group">
                                    <label for="license_number">License Number</label>
                                    <input type="number" class="form-control" id="license_number"
                                        name="license_number">
                                </div>
                                <div class="form-group">
                                    <label for="division_id">Division Id</label>
                                    <input type="text" class="form-control" id="division_id"
                                        name="division_id">
                                </div>
                                <div class="form-group">
                                    <label for="bp_reading">District Id</label>
                                    <input type="text" class="form-control" id="district_id" name="district_id">
                                        
                                </div>
                                <div class="form-group">
                                    <label for="thana_id">Thana Id</label>
                                    <input type="text" class="form-control" id="thana_id"
                                        name="thana_id">
                                </div>
                                
                                <div class="form-group">
                                    <label for="source">Address</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="follow_up">Per Division Id</label>
                                    <input type="text" class="form-control" id="per_division_id" name="per_division_id">
                                        
                                </div>
                                <div class="form-group">
                                    <label for="per_district_id">Per District Id</label>
                                    <input type="text" class="form-control" id="per_district_id" name="per_district_id">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="per_thana_id">Per Thana Id</label>
                                    <input type="text" class="form-control" id="per_thana_id" name="per_thana_id">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="per_address">Per Address</label>
                                    <input type="text" class="form-control" id="per_address" name="per_address">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="emergency_contact">Emergency Contact</label>
                                    <input type="number" class="form-control" id="emergency_contact" name="emergency_contact">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="profile_image">Profile Image</label>
                                    <input type="text" class="form-control" id="profile_image" name="profile_image">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="bank_name">Bank Name</label>
                                    <input type="text" class="form-control" id="bank_name" name="bank_name">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="branch_name">Branch Name</label>
                                    <input type="text" class="form-control" id="branch_name" name="branch_name">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="bank_account">Bank Account</label>
                                    <input type="number" class="form-control" id="bank_account" name="bank_account">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="salary">Salary</label>
                                    <input type="text" class="form-control" id="salary" name="salary">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="education">Education</label>
                                    <input type="text" class="form-control" id="education" name="education">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="experience_years">Experience Years</label>
                                    <input type="number" class="form-control" id="experience_years" name="experience_years">
                                       
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                                
                            <?php

                            if ($_POST) {
                                $_POST['created_at'] = date('Y-m-d H:i:s');
                                $_POST['created_by'] = $_SESSION['user']->id;
                                $_POST['status'] = 1;
                                $res = $mysqli->common_insert('staff', $_POST);
                                if (!$res['error']) {
                                    echo "<script>location.href='" . $baseurl . "staff.php'</script>";
                                } else {
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
