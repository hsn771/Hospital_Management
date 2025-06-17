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
                  
                  $data=$mysqli->common_select('patients','*',$where);
                  if(!$data['error']){
                    $data=$data['data'][0];
                  }
                ?>
            <div class="col-sm-12 clearfix">
                <div class="col-12 mt-5">
                    <div class="card">
                        <h4 class="header-title">Lab Reports Form</h4>
                            <form method="post" enctype="multipart/form-data" action="">
                                <div class="form-group">
                                    <label for="patient_id">Patient </label>
                                    <select class="form-control" id="patient_id" name="patient_id" value="<?= $data->patient_id ?>">
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
                                    <label for="gender">Staff</label>
                                    <select class="form-control" id="staff_id" name="staff_id" value="<?= $data->staff_id ?>">
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
                                <div class="form-group">
                                    <label for="Test Type">Test Type</label>
                                    <input type="text" class="form-control" id="test_type" value="<?= $data->test_type ?>" name="test_type"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="Sample Collected Date">Sample Collected Date</label>
                                    <input type="date" class="form-control" id="sample_collected_date" value="<?= $data->sample_collected_date ?>" name="sample_collected_date"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="Test Date">Test Date</label>
                                    <input type="date" class="form-control" id="test_date" value="<?= $data->test_date ?>" name="test_date">
                                </div>
                                <div class="form-group">
                                    <label for="Report Date">Report Date</label>
                                    <input type="date" class="form-control" id="report_date" value="<?= $data->report_date ?>" name="report_date">
                                </div>
                                <div class="form-group">
                                    <label for="Result Summary">Result Summary</label>
                                    <input type="text" class="form-control" id="result_summary" value="<?= $data->result_summary ?>"
                                        name="result_summary" placeholder="notes">
                                </div>
                                <div class="form-group">
                                    <label for="Document Link">Document Link</label>
                                    <input class="form-control" id="document_link" value="<?= $data->document_link ?>" name="document_link" aria-describedby="emailHelp">
                                       
                                
                                </div>
                                <div class="form-group">
                                    <label for="Lab Name">Lab Name</label>
                                    <input type="text" class="form-control" id="lab_name" value="<?= $data->lab_name ?>"
                                        name="lab_name" placeholder="Lab Name">
                                </div>
                                <div class="form-group">
                                    <label for="Reference Range">Reference Range</label>
                                    <input type="text" class="form-control" id="reference_range" value="<?= $data->reference_range ?>" name="reference_range"
                                        placeholder="Reference Range">
                                </div>
                                <div class="form-group">
                                    <label for="Result Value">Result Value</label>
                                    <input type="text" class="form-control" id="result_value" value="<?= $data->result_value ?>"
                                        name="result_value" placeholder="Result Value">
                                </div>
                                
                                <div class="form-group">
                                    <label for="source">Unit</label>
                                    <input type="text" class="form-control" id="unit" value="<?= $data->unit ?>" name="unit"
                                        placeholder="Unit">
                                </div>
                                <div class="form-group">
                                    <label for="Remarks">Remarks</label>
                                    <input type="text" class="form-control" id="remarks" value="<?= $data->remarks ?>" name="remarks"
                                        placeholder="Remarks">
                                </div>
                                <div class="form-group">
                                    <label for="Priority">Priority</label>
                                    <input type="text" class="form-control" id="priority" value="<?= $data->priority ?>" name="priority"
                                        placeholder="Priority">
                                </div>
                                <div class="form-group">
                                    <label for="Sample Type">Sample Type</label>
                                    <input type="text" class="form-control" id="sample_type" value="<?= $data->sample_type ?>" name="sample_type"
                                        placeholder="Sample Type">
                                </div>
                                <div class="form-group">
                                    <label for="Collected By">Collected By</label>
                                    <input type="text" class="form-control" id="collected_by" value="<?= $data->collected_by ?>" name="collected_by"
                                        placeholder="Collected By">
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                            <?php
                      if($_POST){
                        $_POST['updated_at']=date('Y-m-d H:i:s');
                        $_POST['updated_by']=$_SESSION['user']->id;
                        $res=$mysqli->common_update('lab_reports',$_POST,$where);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."lab_reports.php'</script>";
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
