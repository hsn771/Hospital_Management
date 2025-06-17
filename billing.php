<?php 
include_once 'Include/header.php'; 
// Initialize CRUD (add this if not in header.php)

?>
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
                    <h4 class="page-title pull-left">Billing</h4> <!-- Changed from "Appointments" -->
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 clearfix">
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Billing Details</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead class="text-uppercase">
                                           <tr>
                                              <th>SL</th>
                                              <th>Bill ID</th>
                                              <th>Patient Name</th>
                                              <th>Total Amount</th>
                                              
                                              <th>Due Amount</th>
                                              <th>Status</th>
                                              <th>Action</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $patient_id = $_GET['patient_id'] ?? 0;
                                            $where = ['patient_id' => $patient_id];
                                            $result = $mysqli->common_select('billing', '*', $where);
                                            
                                            if (!$result['error']) {
                                                foreach ($result['data'] as $i => $d) {
                                                    $status_class = strtolower($d->status); // For CSS styling
                                                    ?>
                                                    <tr>
                                                        <td><?= ++$i ?></td>
                                                        <td><?= $d->bill_id ?></td>
                                                        <td>Patient #<?= $d->patient_id ?></td> <!-- Replace with patient name if available -->
                                                        <td>$<?= number_format($d->total_amount, 2) ?></td>
                                                        <td>$<?= number_format($d->due_amount, 2) ?></td>
                                                        <td><span class="badge badge-<?= $status_class ?>"><?= $d->status ?></span></td>
                                                        <td>
                                                            <a href="<?= $baseurl ?>billing_edit.php?id=<?= $d->bill_id ?>"
                                                                class="btn btn-info btn-xs" title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="<?= $baseurl ?>billing_delete.php?id=<?= $d->bill_id ?>"
                                                                class="btn btn-danger btn-xs" title="Delete">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php }
                                            } else {
                                                echo '<tr><td colspan="8">No bills found</td></tr>';
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
    <div class="main-content-inner"></div>
</div>

<!-- Add CSS for status badges -->
<style>
    .badge-paid { background: green; color: white; }
    .badge-unpaid { background: red; color: white; }
    .badge-partial { background: orange; color: white; }
</style>

<!-- main content area end -->
<?php include_once 'Include/footer.php'; ?>