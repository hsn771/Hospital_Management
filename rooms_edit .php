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
                  
                  $data=$mysqli->common_select('rooms','*',$where);
                  if(!$data['error']){
                    $data=$data['data'][0];
                  }
                ?>
            <div class="col-sm-12 clearfix">
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Update Room Form</h4>
                            <form method="post" enctype="multipart/form-data" action="">
                                 <div class="form-group">
                                    <label for="room_number">Room Number</label>
                                    <input type="number" class="form-control" id="room_number" value="<?= $data->room_number ?>" name="room_number"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="room_type_id">Room Type Id</label>
                                     <input type="number" class="form-control" id="room_type_id" value="<?= $data->room_type_id ?>" name="room_type_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="department_id">Department Id</label>
                                    <input type="number" class="form-control" id="department_id" value="<?= $data->department_id ?>" name="department_id"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="capacity">Capacitye</label>
                                    <input type="number" class="form-control" id="capacity" value="<?= $data->capacity ?>" name="capacity"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="floor">Floore</label>
                                    <input type="number" class="form-control" id="floor" value="<?= $data->floor ?>" name="floor"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="has_ac">Aas AC</label>
                                    <input type="text" class="form-control" id="has_ac" value="<?= $data->has_ac ?>" name="has_ac">
                                </div>
                                
                                <div class="form-group">
                                    <label for="has_tvs">Has TV</label>
                                    <input type="text" class="form-control" id="has_tv" value="<?= $data->has_tv ?>"
                                        name="has_tv" placeholder="initial_diagnosis">
                                </div>
                                <div class="form-group">
                                    <label for="has_internet">Has Internet</label>
                                    <input type="text" class="form-control" id="has_internet" value="<?= $data->has_internet ?>"
                                        name="has_internet" placeholder="treatment_plan">
                                </div>
                                <div class="form-group">
                                    <label for="price_per_day">Price Per Day</label>
                                    <input type="number" class="form-control" id="price_per_day" value="<?= $data->price_per_day ?>" name="price_per_day"
                                        placeholder="nurse_id">
                                </div>
                                <div class="form-group">
                                    <label for="last_cleaned">Last Cleaned</label>
                                    <input type="text" class="form-control" id="last_cleaned" value="<?= $data->last_cleaned ?>"
                                        name="last_cleaned" placeholder="notes">
                                </div>
                                
                                <div class="form-group">
                                    <label for="cleaning_status">Cleaning Status </label>
                                    <input type="text" class="form-control" id="cleaning_status" alue="<?= $data->cleaning_status ?>" name="cleaning_status"
                                        placeholder="profile_image">
                                </div>
                                <div class="form-group">
                                    <label for="nurse_station_id">Nurse Station Id</label>
                                    <input type="nubmber" class="form-control" id="nurse_station_id" value="<?= $data->nurse_station_id ?>" name="nurse_station_id"
                                        placeholder="is_critical">
                                </div>
                                <div class="form-group">
                                    <label for="oxygen_support">Oxygen Support</label>
                                    <input type="text" class="form-control" id="oxygen_support" value="<?= $data->oxygen_support ?>" name="oxygen_support"
                                        placeholder="has_attendant">
                                </div>
                                 <div class="form-group">
                                    <label for="ventilator_available">Ventilator Available</label>
                                    <input type="text" class="form-control" id="ventilator_available" value="<?= $data->ventilator_available ?>" name="ventilator_available"
                                        placeholder="attendant_name">
                                </div>
                                 <div class="form-group">
                                    <label for="window_view">Window View</label>
                                    <input type="text" class="form-control" id="window_view" value="<?= $data->window_view ?>" name="window_view"
                                        placeholder="discharge_summary">
                                </div>
                                <div class="form-group">
                                    <label for="room_size">Room Size</label>
                                    <input type="text" class="form-control" id="room_size" value="<?= $data->room_size ?>" name="room_size"
                                        placeholder="discharge_summary">
                                </div>
                                <div class="form-group">
                                    <label for="special_features">Special Features</label>
                                    <input type="text" class="form-control" id="special_features" value="<?= $data->special_features ?>" name="special_features"
                                        placeholder="discharge_summary">
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                            </form>
                            <?php
                      if($_POST){
                        $_POST['updated_at']=date('Y-m-d H:i:s');
                        $_POST['updated_by']=$_SESSION['user']->id;
                        $res=$mysqli->common_update('rooms',$_POST,$where);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."rooms.php'</script>";
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
