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
                  
                  $data=$mysqli->common_select('staff','*',$where);
                  if(!$data['error']){
                    $data=$data['data'][0];
                  }
                ?>
            <div class="col-sm-12 clearfix">
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Update staff Information</h4>
                            <form method="post" enctype="multipart/form-data" action="">
                                <div class="form-group">
                                    <label for="Full Name">Full Name</label>
                                    <input type="text" class="form-control" id="full_name" value="<?= $data->full_name ?>" name="full_name">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="department_id">department_id</label>
                                    <select class="form-control" id="department_id" value="<?= $data->department_id ?>" name="department_id">
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
                                    <input type="text" class="form-control" id="specialization" value="<?= $data->specialization ?>" name="specialization">
                                </div>
                                <div class="form-group">
                                    <label for="phone">phone</label>
                                    <input type="number" class="form-control" id="phone" value="<?= $data->phone ?>" name="phone"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="email" class="form-control" id="email" value="<?= $data->email ?>" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="join_date">join_date</label>
                                    <input type="date" class="form-control" id="join_date" value="<?= $data->join_date ?>" name="join_date">
                                </div>
                                <div class="form-group">
                                    <label for="shift_id">shift_id</label>
                                    <input type="number" class="form-control" id="shift_id" value="<?= $data->shift_id ?>"
                                        name="shift_id">
                                </div>
                                <div class="form-group">
                                    <label for="license_number">license_number</label>
                                    <input type="number" class="form-control" id="license_number" value="<?= $data->license_number ?>"
                                        name="license_number">
                                </div>
                                <div class="form-group">
                                    <label for="division_id">division_id</label>
                                    <input type="text" class="form-control" id="division_id" value="<?= $data->division_id ?>"
                                        name="division_id">
                                </div>
                                <div class="form-group">
                                    <label for="bp_reading">district_id</label>
                                    <input type="text" class="form-control" id="district_id" value="<?= $data->district_id ?>" name="district_id">
                                        
                                </div>
                                <div class="form-group">
                                    <label for="thana_id">thana_id</label>
                                    <input type="text" class="form-control" id="thana_id" value="<?= $data->thana_id ?>"
                                        name="thana_id">
                                </div>
                                
                                <div class="form-group">
                                    <label for="source">address</label>
                                    <input type="text" class="form-control" id="address" value="<?= $data->address ?>" name="address">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="follow_up">per_division_id</label>
                                    <input type="text" class="form-control" id="per_division_id" value="<?= $data->per_division_id ?>" name="per_division_id">
                                        
                                </div>
                                <div class="form-group">
                                    <label for="per_district_id">per_district_id</label>
                                    <input type="text" class="form-control" id="per_district_id" value="<?= $data->per_district_id ?>" name="per_district_id">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="per_thana_id">per_thana_id</label>
                                    <input type="text" class="form-control" id="per_thana_id" value="<?= $data->per_thana_id ?>" name="per_thana_id">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="per_address">per_address</label>
                                    <input type="text" class="form-control" id="per_address" value="<?= $data->per_address ?>" name="per_address">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="emergency_contact">emergency_contact</label>
                                    <input type="number" class="form-control" id="emergency_contact" value="<?= $data->emergency_contact ?>" name="emergency_contact">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="profile_image">profile_image</label>
                                    <input type="text" class="form-control" id="profile_image" value="<?= $data->profile_image ?>" name="profile_image">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="bank_name">bank_name</label>
                                    <input type="text" class="form-control" id="bank_name" value="<?= $data->bank_name ?>" name="bank_name">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="branch_name">branch_name</label>
                                    <input type="text" class="form-control" id="branch_name" value="<?= $data->branch_name ?>" name="branch_name">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="bank_account">bank_account</label>
                                    <input type="number" class="form-control" id="bank_account" value="<?= $data->bank_account ?>" name="bank_account">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="salary">salary</label>
                                    <input type="text" class="form-control" id="salary" value="<?= $data->salary ?>" name="salary">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="education">education</label>
                                    <input type="text" class="form-control" id="education" value="<?= $data->education ?>" name="education">
                                       
                                </div>
                                <div class="form-group">
                                    <label for="experience_years">experience_years</label>
                                    <input type="number" class="form-control" id="experience_years" value="<?= $data->experience_years ?>" name="experience_years">
                                       
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                            <?php
                      if($_POST){
                        $_POST['updated_at']=date('Y-m-d H:i:s');
                        $_POST['updated_by']=$_SESSION['user']->id;
                        $res=$mysqli->common_update('staff',$_POST,$where);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."staff.php'</script>";
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
