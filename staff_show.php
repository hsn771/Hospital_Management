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
                    <h4 class="page-title pull-left">Staff Information</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
        
                    </ul>
                </div>
            </div>
            <?php
            $where['id'] = $_GET['id'];
            $data = $mysqli->common_select('staff', '*', $where);
            if (!$data['error']) {
                $staff = $data['data'][0];
            }
            
            ?>
            <div class="col-sm-12 clearfix">
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Staff Details(Full)</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">Full Name</th>
                                                <td><?= $staff->full_name ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Department Id</th>
                                                <td><?= $staff->department_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Specialization</th>
                                                <td><?= $staff->specialization ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Phone</th>
                                                <td><?= $staff->phone ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Email</th>
                                                <td><?= $staff->email ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Join Date</th>
                                                <td><?= $staff->join_date ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Shift Id</th>
                                                <td><?= $staff->shift_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">License Number</th>
                                                <td><?= $staff->license_number ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Division Id</th>
                                                <td><?= $staff->division_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">District Id</th>
                                                <td><?= $staff->district_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Thana Id</th>
                                                <td><?= $staff->thana_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Address</th>
                                                <td><?= $staff->address ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Per Division Id</th>
                                                <td><?= $staff->per_division_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">per District Id</th>
                                                <td><?= $staff->per_district_id ?></td>
                                            </tr>  
                                            <tr>
                                                <th scope="col">Per Thana id</th>
                                                <td><?= $staff->per_thana_id ?></td>
                                            </tr>  
                                            <tr>
                                                <th scope="col">Per Address</th>
                                                <td><?= $staff->per_address ?></td>
                                            </tr>  
                                            <tr>
                                                <th scope="col">Emergency Contact</th>
                                                <td><?= $staff->emergency_contact ?></td>
                                            </tr>  
                                            <tr>
                                                <th scope="col">Profile Image</th>
                                                <td><?= $staff->profile_image ?></td>
                                            </tr> 
                                            <tr>
                                                <th scope="col">Bank Name</th>
                                                <td><?= $staff->bank_name ?></td>
                                            </tr>  
                                            <tr>
                                                <th scope="col">Branch Name</th>
                                                <td><?= $staff->branch_name ?></td>
                                            </tr> 
                                            <tr>
                                                <th scope="col">Bank Account</th>
                                                <td><?= $staff->bank_account ?></td>
                                            </tr> 
                                            <tr>
                                                <th scope="col">Salary</th>
                                                <td><?= $staff->salary ?></td>
                                            </tr> 
                                            <tr>
                                                <th scope="col">Education</th>
                                                <td><?= $staff->education ?></td>
                                            </tr> 
                                            <tr>
                                                <th scope="col">Experience Years</th>
                                                <td><?= $staff->experience_years ?></td>
                                            </tr> 
                                        </thead>
                                        <tbody>

                    
                                                    <a href="<?= $baseurl ?>staff_edit.php?id=<?= $staff->id ?>"
                                                        class="btn btn-info btn-xs" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?= $baseurl ?>staff_delete.php?id=<?= $staff->id ?>"
                                                        class="btn btn-danger btn-xs" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
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