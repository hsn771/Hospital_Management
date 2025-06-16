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
                    <h4 class="page-title pull-left">Create Bill</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Billing</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 clearfix">
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Billing Form</h4>
                            <form method="post" action="">
                                <div class="form-group">
                                    <label for="patient_id">Patient Name</label>
                                    <select class="form-control" id="patient_id" name="patient_id">
                                        <?php
                                        $res = $mysqli->common_select('patients');
                                        if (!$res['error']) {
                                            foreach ($res['data'] as $key => $value) {
                                                echo '<option value="' . $value->id . '">' . $value->full_name . '</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="total_amount">Total Amount</label>
                                    <input type="number" step="0.01" class="form-control" id="total_amount" name="total_amount" required>
                                </div>
                                <div class="form-group">
                                    <label for="paid_amount">Paid Amount</label>
                                    <input type="number" step="0.01" class="form-control" id="paid_amount" name="paid_amount" required>
                                </div>
                                <div class="form-group">
                                    <label for="due_amount">Due Amount</label>
                                    <input type="number" step="0.01" class="form-control" id="due_amount" name="due_amount" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="payment_method">Payment Method</label>
                                    <select class="form-control" id="payment_method" name="payment_method" required>
                                        <option value="Cash">Cash</option>
                                        <option value="Card">Card</option>
                                        <option value="Insurance">Insurance</option>
                                        <option value="Online">Online</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="Paid">Paid</option>
                                        <option value="Unpaid">Unpaid</option>
                                        <option value="Partial">Partial</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                            
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                // Calculate due amount
                                $total = (float)$_POST['total_amount'];
                                $paid = (float)$_POST['paid_amount'];
                                $due = $total - $paid;
                                
                                // Determine status if not set
                                if (!isset($_POST['status'])) {
                                    $_POST['status'] = ($paid >= $total) ? 'Paid' : ($paid > 0 ? 'Partial' : 'Unpaid');
                                }
                                
                                $fields = [
                                    'patient_id' => $_POST['patient_id'],
                                    'total_amount' => $total,
                                    'paid_amount' => $paid,
                                    'due_amount' => $due,
                                    'payment_method' => $_POST['payment_method'],
                                    'status' => $_POST['status'],
                                    'created_at' => date('Y-m-d H:i:s'),
                                    'created_by' => $_SESSION['user']->id ?? 1 // Fallback for user ID
                                ];
                                
                                $res = $mysqli->common_insert('billing', $fields);
                                if (!$res['error']) {
                                    echo "<script>location.href='" . $baseurl . "billing.php'</script>";
                                } else {
                                    echo '<div class="alert alert-danger">Error: ' . $res['error_msg'] . '</div>';
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
    <div class="main-content-inner"></div>
</div>

<!-- JavaScript for auto-calculating due amount -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const totalInput = document.getElementById('total_amount');
    const paidInput = document.getElementById('paid_amount');
    const dueInput = document.getElementById('due_amount');
    const statusSelect = document.getElementById('status');
    
    function calculateDue() {
        const total = parseFloat(totalInput.value) || 0;
        const paid = parseFloat(paidInput.value) || 0;
        const due = total - paid;
        dueInput.value = due.toFixed(2);
        
        // Auto-update status based on payment
        if (paid >= total) {
            statusSelect.value = 'Paid';
        } else if (paid > 0) {
            statusSelect.value = 'Partial';
        } else {
            statusSelect.value = 'Unpaid';
        }
    }
    
    totalInput.addEventListener('input', calculateDue);
    paidInput.addEventListener('input', calculateDue);
});
</script>

<!-- main content area end -->
<?php include_once 'Include/footer.php'; ?>