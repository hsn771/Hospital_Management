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
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="patient_id">Patient Name</label>
                                            <select class="form-control" id="patient_id" name="patient_id">
                                                <option value="">Select Patient</option>
                                                <?php
                                                $res = $mysqli->common_select('patients');
                                                if (!$res['error']) {
                                                    foreach ($res['data'] as $key => $value) {
                                                        echo '<option value="' . $value->id . '">' . $value->full_name .'('.$value->phone.')' . '</option>';
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="staff_id">Doctor </label>
                                            <select class="form-control" id="staff_id" name="staff_id">
                                                <option value="">Select Doctor</option>
                                                <?php
                                                $res = $mysqli->common_select('user');
                                                if (!$res['error']) {
                                                    foreach ($res['data'] as $key => $value) {
                                                        echo '<option value="' . $value->id . '">' . $value->name . '</option>';
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="billing_date">Bill Date</label>
                                            <input type="date" class="form-control" id="billing_date" name="billing_date" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <strong>
                                            Items
                                        </strong>
                                    </div>
                                    <div class="col-sm-2">
                                        <strong>
                                            Quantity
                                        </strong>
                                    </div>
                                    <div class="col-sm-3">
                                        <strong>
                                            Price
                                        </strong>
                                    </div>
                                    <div class="col-sm-3">
                                        <strong>
                                            Total
                                        </strong>
                                    </div>
                                </div>
                                <div class="test_item">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <select class="form-control" onchange="set_item(this)" name="item_id[]">
                                                    <option value="">Select Item</option>
                                                    <?php
                                                        $res = $mysqli->common_select('test');
                                                        if (!$res['error']) {
                                                            foreach ($res['data'] as $key => $value) {
                                                        ?>
                                                            <option data-price="<?= $value->amount ?>" value='<?= $value->id ?>'><?= $value->name ?></option>
                                                     <?php   } }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <input type="number" class="form-control qty" onkeyup="cal_line_total(this)" value="1" name="qty[]">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input type="number" step="0.01" class="form-control amount" onkeyup="cal_line_total(this)" name="amount[]">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <input type="number" step="0.01" class="form-control total_amount" name="total_amount[]" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="button" class="btn btn-primary" onclick="add_item()">Add Item</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                    </div>
                                    <div class="col-sm-6">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Sub Total</td>
                                                <td><input type="number" step="0.01" class="form-control" id="sub_total" name="sub_total" readonly></td>
                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td><input onkeyup="cal_final_total()" type="number" step="0.01" class="form-control" id="discount" name="discount" onkeyup="cal_total_amount(this)"></td>
                                            </tr>
                                            <tr>
                                                <td>Total Amount</td>
                                                <td><input type="number" step="0.01" class="form-control" id="grand_total" name="grand_total" readonly></td>
                                            </tr>
                                            <tr>
                                                <td>Paid Amount</td>
                                                <td><input type="number" step="0.01" onkeyup="cal_final_total()" class="form-control" id="paid_amount" name="paid_amount" onkeyup="cal_balance(this)"></td>
                                            </tr>
                                            <tr>
                                                <td>Due</td>
                                                <td><input type="number" step="0.01" class="form-control" id="balance" name="balance" readonly></td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                            
                            <?php
                            if ($_POST) {
                                $bill['patient_id'] = $_POST['patient_id'];
                                $bill['staff_id'] = $_POST['staff_id'];
                                $bill['billing_date'] = $_POST['billing_date'];
                                $bill['total_amount'] = $_POST['sub_total'];
                                $bill['discount'] = $_POST['discount'];
                                $bill['final_amount'] = $_POST['grand_total'];
                                $bill['paid_amount'] = $_POST['paid_amount'];
                                $bill['due_amount'] = $_POST['balance'];
                                $bill['status'] = 1;
                                $bill['created_at'] = date('Y-m-d H:i:s');
                                $bill['updated_at'] = date('Y-m-d H:i:s');

                                // Calculate due amount
                                $total = (float)$_POST['grand_total'];
                                $paid = (float)$_POST['paid_amount'];
                                $due = $total - $paid;
                                $bill['payment_status'] = ($paid >= $total) ? 'Paid' : ($paid > 0 ? 'Partial' : 'Unpaid');
                                
                                $res = $mysqli->common_insert('billing', $bill);
                                
                               if (!$res['error']) {
                                    $bill_id = $res['data'];
                                    foreach ($_POST['item_id'] as $key => $item_name) {
                                        $bill_item = array(
                                            'billing_id' => $bill_id,
                                            'test_id' => $_POST['item_id'][$key],
                                            'qty' => $_POST['qty'][$key],
                                            'amount' => $_POST['amount'][$key],
                                            'status' => 1
                                        );
                                        $resi = $mysqli->common_insert('billing_details', $bill_item);
                                    }
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
   
</div>

<!-- JavaScript for auto-calculating due amount -->
<script>
    function set_item(e){
        let price =$(e).find(':selected').attr('data-price');
        $(e).closest('.row').find('.amount').val(price);
        cal_line_total(e);
    }
    function cal_line_total(e){
        let price = $(e).closest('.row').find('.amount').val();
        let qty = $(e).closest('.row').find('.qty').val();
        let total_amount = price * qty;
        $(e).closest('.row').find('.total_amount').val(total_amount);
        cal_subtotal();
    }
    function cal_subtotal(){
        let subtotal = 0;
        $('.total_amount').each(function(){
            subtotal += parseFloat($(this).val());
        });
        $('#sub_total').val(subtotal);
        $('#grand_total').val(subtotal);
        cal_final_total()
    }

    function cal_final_total(){
        let subtotal = $('#sub_total').val();
        let discount = $('#discount').val();
        let final_total = subtotal - discount;
        $('#grand_total').val(final_total);
        let paid_amount = $('#paid_amount').val();
        let balance = final_total - paid_amount;
        $('#balance').val(balance);
    }

    function add_item(){
        let html = `
        <div class="row test_row">
            <div class="col-sm-4">
                <div class="form-group">
                    <select class="form-control" onchange="set_item(this)" name="item_id[]">
                        <option value="">Select Item</option>
                        <?php
                            $res = $mysqli->common_select('test');
                            if (!$res['error']) {
                                foreach ($res['data'] as $key => $value) {
                            ?>
                                <option data-price="<?= $value->amount ?>" value='<?= $value->id ?>'><?= $value->name ?></option>
                            <?php   } }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <input type="number" class="form-control qty" value="1" onkeyup="cal_line_total(this)" name="qty[]">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <input type="number" step="0.01" class="form-control amount" onkeyup="cal_line_total(this)" name="amount[]">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="number" step="0.01" class="form-control total_amount" name="total_amount[]" readonly>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-danger" onclick="remove_item(this)"><i class="fa fa-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>`;
            $('.test_item').append(html);
    }
    function remove_item(e){
        $(e).closest('.test_row').remove();
    }
</script>

<!-- main content area end -->
<?php include_once 'Include/footer.php'; ?>