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
                    <h4 class="page-title pull-left">Test</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
        
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 clearfix">
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Company Setting</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">slogan</th>
                                                <th scope="col">address</th>
                                                <th scope="col">contact</th>
                                                <th scope="col">logo</th>
                                                <th scope="col">Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $data = $mysqli->common_select('company_setting');
                                            if (!$data['error']) {
                                                foreach ($data['data'] as $i => $d) {
                                                    ?>
                                                    <tr>
                                                        <td><?= ++$i ?></td>
                                                        <td><?= $d->name ?></td>
                                                        <td><?= $d->slogan ?></td>
                                                        <td><?= $d->address ?></td>
                                                        <td><?= $d->contact ?></td>
                                                        <td><img src="<?= $baseurl ?>uploads/<?= $d->logo ?>" alt="" width="100"></td>
                                                        <td>

                                                            <a href="<?= $baseurl ?>company_setting_edit.php?id=<?= $d->id ?>"
                                                                class="btn btn-info btn-xs" title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="<?= $baseurl ?>company_setting_delete.php?id=<?= $d->id ?>"
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