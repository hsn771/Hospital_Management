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
                    <h4 class="page-title pull-left">Full Information(Room)</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.html">Home</a></li>
        
                    </ul>
                </div>
            </div>
            <?php
            $where['id'] = $_GET['id'];
            $data = $mysqli->common_select('rooms', '*', $where);
            if (!$data['error']) {
                $rooms = $data['data'][0];
            }
            
            ?>
            <div class="col-sm-12 clearfix">
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Full Information(Room)</h4>
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <td><?= $rooms->id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Room Number</th>
                                                <td><?= $rooms->room_number ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Room Type Id</th>
                                                <td><?= $rooms->room_type_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Department Id</th>
                                                <td><?= $rooms->department_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Capacity</th>
                                                <td><?= $rooms->capacity ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Floor</th>
                                                <td><?= $rooms->floor ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Has AC</th>
                                                <td><?= $rooms->has_ac ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Has TV</th>
                                                <td><?= $rooms->has_tv ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Has Internet</th>
                                                <td><?= $rooms->has_internet ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Price Per Day</th>
                                                <td><?= $rooms->price_per_day ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Last Cleaned</th>
                                                <td><?= $rooms->last_cleaned ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Cleaning Status</th>
                                                <td><?= $rooms->cleaning_status ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Nurse Station Id<</th>
                                                <td><?= $rooms->nurse_station_id ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Oxygen Support</th>
                                                <td><?= $rooms->oxygen_support ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Ventilator Available</th>
                                                <td><?= $paroomstient->ventilator_available ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Window View</th>
                                                <td><?= $patient->window_view ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Room Sizen</th>
                                                <td><?= $patient->room_size ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Special Features</th>
                                                <td><?= $patient->special_features ?></td>
                                            </tr>
                                            
                                            
                                        </thead>
                                        <tbody>

                    
                                                    <a href="<?= $baseurl ?>rooms_edit.php?id=<?= $rooms->id ?>"
                                                        class="btn btn-info btn-xs" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?= $baseurl ?>rooms_delete.php?id=<?= $rooms->id ?>"
                                                        class="btn btn-danger btn-xs" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>

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