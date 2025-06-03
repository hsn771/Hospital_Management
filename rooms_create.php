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
                                    <label for="id">Id</label>
                                    <input type="number" class="form-control" id="id" name="id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="room_number">Room Number</label>
                                     <input type="number" class="form-control" id="room_number" name="room_number"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="room_type_id">Room Type Id</label>
                                    <input type="number" class="form-control" id="room_type_id" name="room_type_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="department_id">Department Id</label>
                                    <input type="number" class="form-control" id="department_id" name="department_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="capacity">capacity</label>
                                    <input type="number" class="form-control" id="capacity" name="capacity"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="floor">Floor</label>
                                    <input type="number" class="form-control" id="floor" name="floor">
                                </div>
                                <div class="form-group">
                                    <label for="text">Has AC</label>
                                    <input type="text" class="form-control" id="has_ac"
                                        name="has_ac" placeholder="has_ac">
                                </div>
                                <div class="form-group">
                                    <label for="has_tv">Has tv</label>
                                    <input type="text" class="form-control" id="has_tv"
                                        name="has_tv" placeholder="has_tv">
                                </div>
                                <div class="form-group">
                                    <label for="has_internet">has_internet</label>
                                    <input type="text" class="form-control" id="has_internet"
                                        name="has_internet" placeholder="has_internet">
                                </div>
                                <div class="form-group">
                                    <label for="price_per_day">price_per_day</label>
                                    <input type="number" class="form-control" id="price_per_day" name="price_per_day"
                                        placeholder="price_per_day">
                                </div>
                                <div class="form-group">
                                    <label for="last_cleaned">last_cleaned</label>
                                    <input type="text" class="form-control" id="last_cleaned"
                                        name="last_cleaned" placeholder="last_cleaned">
                                </div>
                                
                                <div class="form-group">
                                    <label for="cleaning_status">cleaning_status</label>
                                    <input type="text" class="form-control" id="cleaning_status" name="cleaning_status"
                                        placeholder="cleaning_status">
                                </div>
                                <div class="form-group">
                                    <label for="nurse_station_idl">nurse_station_id</label>
                                    <input type="text" class="form-control" id="nurse_station_id" name="nurse_station_id"
                                        placeholder="nurse_station_id">
                                </div>
                                <div class="form-group">
                                    <label for="oxygen_support">oxygen_supportt</label>
                                    <input type="text" class="form-control" id="oxygen_support" name="oxygen_support"
                                        placeholder="oxygen_support">
                                </div>
                                 <div class="form-group">
                                    <label for="window_view">window_view</label>
                                    <input type="text" class="form-control" id="window_view" name="window_view"
                                        placeholder="window_view">
                                </div>
                                 <div class="form-group">
                                    <label for="room_size">room_size</label>
                                    <input type="text" class="form-control" id="room_size" name="room_size"
                                        placeholder="room_size">
                                </div>
                                <div class="form-group">
                                    <label for="special_features">special_features</label>
                                    <input type="text" class="form-control" id="special_features" name="special_features"
                                        placeholder="special_features">
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
