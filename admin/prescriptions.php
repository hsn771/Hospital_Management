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
                    <h4 class="page-title pull-left">Prescription</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
        
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 clearfix">
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Prescription list</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Patient</th>
                                                <th scope="col">Doctor</th>
                                                <th scope="col">Prescription Date</th>
                                                <th scope="col">Next Visit Day</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $data = $mysqli->common_query('SELECT prescriptions.*, patients.full_name,patients.phone,user.name, user.contact_no FROM `prescriptions` 
                                                                                JOIN patients on patients.id=prescriptions.patient_id 
                                                                                JOIN user on user.id=prescriptions.staff_id 
                                                                                WHERE prescriptions.status=1');
                                            if (!$data['error']) {
                                                foreach ($data['data'] as $i => $d) {
                                                    ?>
                                                    <tr>
                                                        <td><?= ++$i ?></td>
                                                        <td><?= $d->full_name ?> (<?= $d->phone ?>)</td>
                                                        <td><?= $d->name ?> (<?= $d->contact_no ?>)</td>
                                                        <td><?= $d->pres_date ?></td>
                                                        <td><?= $d->next_visit_day ?></td>
                                                        <td>
                                                            <a href="<?= $baseurl ?>prescriptions_show.php?id=<?= $d->id ?>"
                                                                class="btn btn-info btn-xs" title="Edit">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a href="<?= $baseurl ?>prescriptions_delete.php?id=<?= $d->id ?>"
                                                                class="btn btn-danger btn-xs" title="Delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php }
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