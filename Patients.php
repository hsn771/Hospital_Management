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
                        <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Bordered Table</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Full Name</th>
                                                    <th scope="col">Gender</th>
                                                    <th scope="col">Date of Birth</th>
                                                    <th scope="col">Phone No</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Emergency Contact</th>
                                                    <th scope="col">NID No</th>
                                                    <th scope="col">Insurance Provider</th>
                                                    <th scope="col">Allergies</th>
                                                    <th scope="col">Registration Date</th>
                                                    <th scope="col">Profile Image</th>
                                                    <th scope="col">Marital Status</th>
                                                    <th scope="col">Occupation</th>
                                                    <th scope="col">Nationality</th>
                                                    <th scope="col">Guardian Name</th>
                                                    <th scope="col">Guardian Relation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                        $data=$mysqli->common_select('patients');
                                        if(!$data['error']){
                                            foreach($data['data'] as $i=>$d){
                                    ?>
                                            <tr>
                                                <td><?= ++$i ?></td>
                                                <td><?= $d->full_name ?></td>
                                                <td><?= $d->gender ?></td>
                                                <td><?= $d->date_of_birth ?></td>
                                                <td><?= $d->phone ?></td>
                                                <td><?= $d->email ?></td>
                                                <td><?= $d->address ?></td>
                                                <td><?= $d->emergency_contact ?></td>
                                                <td><?= $d->nid_passport ?></td>
                                                <td><?= $d->insurance_provider ?></td>
                                                <td><?= $d->allergies ?></td>
                                                <td><?= $d->registration_date ?></td>
                                                <td><?= $d->profile_image ?></td>
                                                <td><?= $d->marital_status ?></td>
                                                <td><?= $d->occupation ?></td>
                                                <td><?= $d->nationality ?></td>
                                                <td><?= $d->guardian_name ?></td>
                                                <td><?= $d->guardian_relation ?></td>
                                                <td>
                                                    <a href="<?= $baseurl?>Patients_edit.php?id=<?= $d->id ?>" class="btn btn-info btn-xs" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?= $baseurl?>Patients_delete.php?id=<?= $d->id ?>" class="btn btn-danger btn-xs" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                    <?php    }
                                        }
                                    ?>
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