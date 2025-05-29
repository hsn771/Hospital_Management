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
                    <h4 class="page-title pull-left">Patiant Information</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
        
                    </ul>
                </div>
            </div>
            <?php
            $where['id'] = $_GET['id'];
            $data = $mysqli->common_select('patients', '*', $where);
            if (!$data['error']) {
                $patient = $data['data'][0];
            }
            
            ?>
            <div class="col-sm-12 clearfix">
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Patiant Details(Full)</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">Full Name</th>
                                                <td><?= $patient->full_name ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Gender</th>
                                                <td><?= $patient->gender ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Date of Birth</th>
                                                <td><?= $patient->date_of_birth ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Phone No</th>
                                                <td><?= $patient->phone ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Email</th>
                                                <td><?= $patient->email ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Address</th>
                                                <td><?= $patient->address ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Emergency Contact</th>
                                                <td><?= $patient->emergency_contact ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">NID/Passport No</th>
                                                <td><?= $patient->nid_passport ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Insurance Id</th>
                                                <td><?= $patient->insurance_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Allergies</th>
                                                <td><?= $patient->allergies ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Registration Date</th>
                                                <td><?= $patient->registration_date ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Profile Image</th>
                                                <td><?= $patient->profile_image ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Marital Status<</th>
                                                <td><?= $patient->marital_status ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Occupation</th>
                                                <td><?= $patient->occupation ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Nationality</th>
                                                <td><?= $patient->nationality ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Guardian Name</th>
                                                <td><?= $patient->guardian_name ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Guardian Relation</th>
                                                <td><?= $patient->guardian_relation ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Division Id</th>
                                                <td><?= $patient->division_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">District Id</th>
                                                <td><?= $patient->district_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Thana Id</th>
                                                <td><?= $patient->thana_id ?></td>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>

                    
                                                    <a href="<?= $baseurl ?>Patients_edit.php?id=<?= $patient->id ?>"
                                                        class="btn btn-info btn-xs" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?= $baseurl ?>Patients_delete.php?id=<?= $patient->id ?>"
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