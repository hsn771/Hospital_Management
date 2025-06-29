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
                            <h4 class="header-title">Room Form</h4>
                            <form method="post" enctype="multipart/form-data" action="">
                                <div class="form-group">
                                    <label for="room_number">Room Number</label>
                                     <input type="number" class="form-control" id="room_number" name="room_number"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="room_type_id">Room Type</label>
                                    <select class="form-control" id="room_type_id " name="room_type_id">
                                        <?php
                                        $res = $mysqli->common_select('rooms_type');
                                        if (!$res['error']) {
                                            foreach ($res['data'] as $key => $value) {
                                                echo '<option value="' . $value->id . '">' . $value->type . '</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="department_id">Department</label>
                                    <select class="form-control" id="department_id" name="department_id">
                                        <?php
                                        $res = $mysqli->common_select('departments');
                                        if (!$res['error']) {
                                            foreach ($res['data'] as $key => $value) {
                                                echo '<option value="' . $value->id . '">' . $value->name . '</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="capacity">Capacity</label>
                                    <input type="number" class="form-control" id="capacity" name="capacity"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="floor">Floor</label>
                                    <input type="number" class="form-control" id="floor" name="floor">
                                </div>
                                
                                
                               
                                <div class="form-group">
                                    <label for="price_per_day">Price</label>
                                    <input type="number" class="form-control" id="price_per_day" name="price_per_day"
                                        placeholder="price_per_day">
                                </div>
                                <div class="form-group">
                                    <label for="last_cleaned">Last Cleaned</label>
                                    <input type="text" class="form-control" id="last_cleaned"
                                        name="last_cleaned" placeholder="Last Cleaned">
                                </div>
                                
                                <div class="form-group">
                                    <label for="cleaning_status">Cleaning Status</label>
                                    <input type="text" class="form-control" id="cleaning_status" name="cleaning_status"
                                        placeholder="Cleaning Status">
                                </div>
                            
                                <div class="form-group">
                                    <label for="special_features">Special Features</label>
                                    <input type="text" class="form-control" id="special_features" name="special_features"
                                        placeholder="Special Features">
                                </div>
                                <div class="form-group">
                                    <label for="text">Has AC</label>
                                    <input type="checkbox" name="has_ac" value="1"><br>
                                    <label for="text">Has TV</label>
                                    <input type="checkbox" name="has_tv" value="1"><br>
                                    <label for="text">Has Internet</label>
                                    <input type="checkbox" name="has_internet" value="1"><br>
                                    <label for="oxygen_support">Oxygen Supportt</label>
                                    <input type="checkbox" name="oxygen_support" value="1"><br>
                                    <label for="window_view">Window View</label>
                                    <input type="checkbox" name="window_view" value="1"><br>
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                                
                            <?php

                            if ($_POST) {
                                $_POST['created_at'] = date('Y-m-d H:i:s');
                                $_POST['created_by'] = $_SESSION['user']->id;
                                $_POST['status'] = 1;
                                $res = $mysqli->common_insert('rooms', $_POST);
                                if (!$res['error']) {
                                    echo "<script>location.href='" . $baseurl . "rooms.php'</script>";
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
