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
                            <h4 class="header-title">Patients Form</h4>
                            <form method="post" enctype="multipart/form-data" action="">
                                <div class="form-group">
                                    <label for="full_name">Full Name</label>
                                    <input type="full_name" class="form-control" id="full_name" name="full_name"
                                        aria-describedby="emailHelp" placeholder="full name">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" id="gender" name="gender" aria-describedby="emailHelp">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">Date of Birth</label>
                                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                                        aria-describedby="emailHelp" placeholder="date of birth">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone No</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        aria-describedby="emailHelp" placeholder="phone">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="address">
                                </div>
                                <div class="form-group">
                                    <label for="emergency_contact">Emergency Contact</label>
                                    <input type="text" class="form-control" id="emergency_contact"
                                        name="emergency_contact" placeholder="emergency_contact">
                                </div>
                                <div class="form-group">
                                    <label for="nid_passport">NID/Passport No</label>
                                    <input type="text" class="form-control" id="nid_passport" name="nid_passport"
                                        placeholder="nid_passport">
                                </div>
                                <div class="form-group">
                                    <label for="insurance_provider">Insurance Id</label>
                                    <input type="text" class="form-control" id="insurance_id"
                                        name="insurance_id" placeholder="insurance_id">
                                </div>
                                <div class="form-group">
                                    <label for="allergies">Allergies</label>
                                    <input type="text" class="form-control" id="allergies" name="allergies"
                                        placeholder="allergies">
                                </div>
                                <div class="form-group">
                                    <label for="registration_date">Registration Date</label>
                                    <input type="data" class="form-control" id="registration_date"
                                        name="registration_date" placeholder="registration_date">
                                </div>
                                <div class="form-group">
                                    <label for="profile_image">Profile Image</label>
                                    <input type="file" class="form-control" id="profile_image" name="profile_image"
                                        placeholder="profile_image">
                                </div>
                                <div class="form-group">
                                    <label for="marital_status">Marital Status</label>
                                    <select class="form-control" id="marital_status" name="marital_status"
                                        aria-describedby="emailHelp">
                                        <option value="Married">Married</option>
                                        <option value="Unmarried">Unmarried</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="occupation">Occupation</label>
                                    <input type="text" class="form-control" id="occupation" name="occupation"
                                        placeholder="occupation">
                                </div>
                                <div class="form-group">
                                    <label for="nationality">Nationality</label>
                                    <input type="text" class="form-control" id="nationality" name="nationality"
                                        placeholder="nationality">
                                </div>
                                <div class="form-group">
                                    <label for="guardian_name">Guardian Name</label>
                                    <input type="text" class="form-control" id="guardian_name" name="guardian_name"
                                        placeholder="guardian_name">
                                </div>
                                <div class="form-group">
                                    <label for="guardian_relation">Guardian Relation</label>
                                    <input type="text" class="form-control" id="guardian_relation"
                                        name="guardian_relation" placeholder="guardian_relation">
                                </div>
                                <div class="form-group">
                                    <label for="guardian_relation">Division Id</label>
                                    <input type="text" class="form-control" id="division_id"
                                        name="division_id" placeholder="division_id">
                                </div>
                                <div class="form-group">
                                    <label for="guardian_relation">District Id</label>
                                    <input type="text" class="form-control" id="district_id"
                                        name="district_id" placeholder="district_id">
                                </div>
                                <div class="form-group">
                                    <label for="guardian_relation">Thana Id</label>
                                    <input type="text" class="form-control" id="thana_id"
                                        name="thana_id" placeholder="thana_id">
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                            <?php

                            if ($_POST) {
                                if ($_FILES) {
                                    $img = $_FILES["profile_image"];
                                    $location = "uploads/patient/" . time() . rand(1111, 9999) . $img['name'];
                                    $rs = move_uploaded_file($img['tmp_name'], $location);
                                    if ($rs) {
                                        $_POST['profile_image'] = $location;
                                    }
                                }

                                $_POST['created_at'] = date('Y-m-d H:i:s');
                                $_POST['created_by'] = $_SESSION['user']->id;
                                $_POST['status'] = 1;
                                $res = $mysqli->common_insert('patients', $_POST);
                                if (!$res['error']) {
                                    echo "<script>location.href='" . $baseurl . "Patients.php'</script>";
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