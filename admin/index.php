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
                    <h4 class="page-title pull-left">Dashboard Overview</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="index.php">Home</a></li>
                        <li><span>Dashboard</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
               </div>
        </div>
    </div>
    <!-- page title area end -->
    
    <div class="main-content-inner">
        <!-- summary cards row -->
        <div class="row">
            <!-- Patients Card -->
            <div class="col-xl-3 col-lg-6">
                <div class="card dashboard-card">
                    <a href="patients.php" class="card-link">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib">
                                    <i class="ti-user text-primary"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Patients</div>
                                    <div class="stat-digit">1,246</div>
                                </div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar bg-primary" style="width: 65%"></div>
                            </div>
                            <p class="mt-2 mb-0 text-muted">+12% from last month</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Appointments Card -->
            <div class="col-xl-3 col-lg-6">
                <div class="card dashboard-card">
                    <a href="appointments.php" class="card-link">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib">
                                    <i class="ti-calendar text-success"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Today's Appointments</div>
                                    <div class="stat-digit">24</div>
                                </div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar bg-success" style="width: 45%"></div>
                            </div>
                            <p class="mt-2 mb-0 text-muted">+5 new since yesterday</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Billing Card -->
            <div class="col-xl-3 col-lg-6">
                <div class="card dashboard-card">
                    <a href="billing.php" class="card-link">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib">
                                    <i class="ti-money text-warning"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Monthly Revenue</div>
                                    <div class="stat-digit">$42,567</div>
                                </div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar bg-warning" style="width: 75%"></div>
                            </div>
                            <p class="mt-2 mb-0 text-muted">+18% from last month</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <!-- Admissions Card -->
            <div class="col-xl-3 col-lg-6">
                <div class="card dashboard-card">
                    <a href="addmissions.php" class="card-link">
                        <div class="card-body">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib">
                                    <i class="ti-pulse text-danger"></i>
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Current Admissions</div>
                                    <div class="stat-digit">18</div>
                                </div>
                            </div>
                            <div class="progress mt-3">
                                <div class="progress-bar bg-danger" style="width: 30%"></div>
                            </div>
                            <p class="mt-2 mb-0 text-muted">+2 new admissions today</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- charts and additional info row -->
        <div class="row mt-4">
            <!-- Appointments Chart -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Appointments Overview</h4>
                        <canvas id="appointments-chart" height="250"></canvas>
                    </div>
                </div>
            </div>
            
            <!-- Recent Activity -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Recent Activity</h4>
                        <div class="activity-list">
                            <div class="activity-item">
                                <div class="activity-badge success">
                                    <i class="ti-check"></i>
                                </div>
                                <div class="activity-content">
                                    <p>New appointment confirmed</p>
                                    <small>10 min ago</small>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-badge primary">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="activity-content">
                                    <p>New patient registered</p>
                                    <small>25 min ago</small>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-badge warning">
                                    <i class="ti-money"></i>
                                </div>
                                <div class="activity-content">
                                    <p>Payment received from John Doe</p>
                                    <small>1 hour ago</small>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-badge danger">
                                    <i class="ti-pulse"></i>
                                </div>
                                <div class="activity-content">
                                    <p>Patient admitted (Room 204)</p>
                                    <small>2 hours ago</small>
                                </div>
                            </div>
                            <div class="activity-item">
                                <div class="activity-badge info">
                                    <i class="ti-calendar"></i>
                                </div>
                                <div class="activity-content">
                                    <p>3 appointments scheduled for tomorrow</p>
                                    <small>Today, 4:30 PM</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- upcoming appointments row -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Upcoming Appointments</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Patient</th>
                                        <th>Doctor</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John Smith</td>
                                        <td>Dr. Sarah Johnson</td>
                                        <td>Today, 10:30 AM</td>
                                        <td><span class="badge badge-success">Confirmed</span></td>
                                        <td><button class="btn btn-sm btn-primary">View</button></td>
                                    </tr>
                                    <tr>
                                        <td>Emily Davis</td>
                                        <td>Dr. Michael Brown</td>
                                        <td>Today, 2:15 PM</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td><button class="btn btn-sm btn-primary">View</button></td>
                                    </tr>
                                    <tr>
                                        <td>Robert Wilson</td>
                                        <td>Dr. Lisa Chen</td>
                                        <td>Tomorrow, 9:00 AM</td>
                                        <td><span class="badge badge-info">Scheduled</span></td>
                                        <td><button class="btn btn-sm btn-primary">View</button></td>
                                    </tr>
                                    <tr>
                                        <td>Maria Garcia</td>
                                        <td>Dr. David Lee</td>
                                        <td>Tomorrow, 11:45 AM</td>
                                        <td><span class="badge badge-info">Scheduled</span></td>
                                        <td><button class="btn btn-sm btn-primary">View</button></td>
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
<!-- main content area end -->
<?php include_once 'Include/footer.php'; ?>