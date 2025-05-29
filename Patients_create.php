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
                                        <form method="post">
                                            <div class="form-group">
                                                <label for="id">ID</label>
                                                <input type="id" class="form-control" id="id" name="id"  aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="full_name">Full Name</label>
                                                <input type="full_name" class="form-control" id="full_name" name="full_name" aria-describedby="emailHelp" placeholder="full name">
                                            </div>
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <input type="gender" class="form-control" id="gender" name="gender" aria-describedby="emailHelp" placeholder="gender">
                                            </div>
                                            <div class="form-group">
                                                <label for="date_of_birth">Date of Birth</label>
                                                <input type="date_of_birth" class="form-control" id="date_of_birth" name="date_of_birth" aria-describedby="emailHelp" placeholder="date of birth">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone No</label>
                                                <input type="phone" class="form-control" id="phone" name="phone" aria-describedby="emailHelp" placeholder="phone">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="address" class="form-control" id="address" name="address" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="emergency_contact">Emergency Contact</label>
                                                <input type="emergency_contact" class="form-control" id="emergency_contact" name="emergency_contact" placeholder="emergency_contact">
                                            </div>
                                            <div class="form-group">
                                                <label for="nid_passport">NID No</label>
                                                <input type="nid_passport" class="form-control" id="nid_passport" name="nid_passport" placeholder="nid_passport">
                                            </div>
                                            <div class="form-group">
                                                <label for="insurance_provider">Insurance Provider</label>
                                                <input type="insurance_provider" class="form-control" id="insurance_provider" name="insurance_provider" placeholder="insurance_provider">
                                            </div>
                                            <div class="form-group">
                                                <label for="allergies">Allergies</label>
                                                <input type="allergies" class="form-control" id="allergies" name="allergies" placeholder="allergies">
                                            </div>
                                            <div class="form-group">
                                                <label for="registration_date">Registration Date</label>
                                                <input type="registration_date" class="form-control" id="registration_date" name="registration_date" placeholder="registration_date">
                                            </div>
                                            <div class="form-group">
                                                <label for="profile_image">Profile Image</label>
                                                <input type="profile_image" class="form-control" id="profile_image" name="profile_image" placeholder="profile_image">
                                            </div>
                                            <div class="form-group">
                                                <label for="marital_status">Marital Status</label>
                                                <input type="marital_status" class="form-control" id="marital_status" name="marital_status" placeholder="marital_status">
                                            </div>
                                            <div class="form-group">
                                                <label for="occupation">Occupation</label>
                                                <input type="occupation" class="form-control" id="occupation" name="occupation" placeholder="occupation">
                                            </div>
                                            <div class="form-group">
                                                <label for="nationality">Nationality</label>
                                                <input type="nationality" class="form-control" id="nationality" name="nationality" placeholder="nationality">
                                            </div>
                                            <div class="form-group">
                                                <label for="guardian_name">Guardian Name</label>
                                                <input type="guardian_name" class="form-control" id="guardian_name" name="guardian_name" placeholder="guardian_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="guardian_relation">Guardian Relation</label>
                                                <input type="guardian_relation" class="form-control" id="guardian_relation" name="guardian_relation" placeholder="guardian_relation">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                                        </form>
                                        <?php
                       
                      if($_POST){
                        $_POST['created_at']=date('Y-m-d H:i:s');
                        $_POST['created_by']=$_SESSION['user']->id;
                        $_POST['status']=1;
                        $res=$mysqli->common_insert('patients',$_POST);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."Patients.php'</script>";
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