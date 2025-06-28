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
                            <h4 class="header-title">Company Setting form</h4>
                            <form method="post" enctype="multipart/form-data" action="">
                               
                                <div class="form-group">
                                    <label for="gender">Name</label>
                                     <input type="text" class="form-control" id="name" name="name"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">slogan</label>
                                    <input type="text" class="form-control" id="slogan" name="slogan"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">address</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">contact</label>
                                    <input type="text" class="form-control" id="contact" name="contact"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">logo</label>
                                    <input type="file" class="form-control" id="logo" name="logo"
                                        aria-describedby="emailHelp">
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                                
                            <?php

                            if ($_POST) {
                                $_POST['created_at'] = date('Y-m-d H:i:s');
                                $_POST['created_by'] = $_SESSION['user']->id;
                                $_POST['status'] = 1;
                                $res = $mysqli->common_insert('company_setting', $_POST);
                                if (!$res['error']) {
                                    echo "<script>location.href='" . $baseurl . "company_setting.php'</script>";
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
