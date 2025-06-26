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
                            <form method="post" enctype="multipart/form-data" action="">
                                
                                <table class="table table-border">
                                    <tr>
                                        <th>Bill Date</th>
                                        <th>Total Amount</th>
                                        <th>Paid</th>
                                        <th>Due</th>
                                        <th>Pay now</th>
                                    </tr>
                                    <?php
                                        $where['patient_id']=$_GET['id'];
                                        $where['due_amount !']='0';
                                            $total_due=0;
                                        
                                        $data=$mysqli->common_select('billing','*',$where);
                                        if(!$data['error']){
                                            foreach($data['data'] as $key=>$value){
                                                $total_due+=$value->due_amount;
                                                echo '<tr>
                                                    <td>'.$value->billing_date.'</td>
                                                    <td>'.$value->total_amount.'</td>
                                                    <td>'.$value->paid_amount.'</td>
                                                    <td>'.$value->due_amount.'</td>
                                                    <td><input type="number" step="0.01" onkeyup="cal_final_total()" class="form-control" id="paid_amount" name="paid_amount['.$value->id.']" onkeyup="cal_balance(this)"></td>
                                                </tr>';
                                            }
                                        }
                                    ?>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td>Total</td>
                                        <td><?php echo $total_due;?></td>
                                    </tr>
                                     
                                </table>
                               
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                            <?php

                            if ($_POST) {
                                foreach ($_POST['paid_amount'] as $key => $value) {
                                    $where['id'] = $key;
                                    $data = $mysqli->common_select('billing', '*', $where);
                                    if (!$data['error']) {
                                        $data = $data['data'][0];
                                        $data->paid_amount = $value + $data->paid_amount;
                                        $data->due_amount = $data->final_amount - $data->paid_amount;
                                        $data->updated_at = date('Y-m-d H:i:s');
                                        $data->updated_by = $_SESSION['user']->id;
                                        if($data->due_amount <= 0) {
                                            $data->due_amount = 0;
                                            $data->payment_status = "Paid";
                                        }
                                        $res = $mysqli->common_update('billing', $data, $where);
                                    }
                                }
                               
                                if (!$res['error']) {
                                    echo "<script>location.href='" . $baseurl . "Patients.php'</script>";
                                } else {
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
<script>
function districtList(division_id) {
    document.querySelectorAll('.district').forEach(function(item){
        if(item.classList.contains(division_id)){
            item.style.display = 'block';
        }else{
            item.style.display = 'none';
        }
    });
}
function upazilaList(district_id) {
    document.querySelectorAll('.upazila').forEach(function(item){
        if(item.classList.contains(district_id)){
            item.style.display = 'block';
        }else{
            item.style.display = 'none';
        }
    });
}
   
</script>