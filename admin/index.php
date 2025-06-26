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
                            
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        
                    </div>
                </div>
            </div>
            <div class="main-content-inner">
                <div class="row">
                    <!-- seo fact area start -->
                    <div class="col-lg-12">
                        <div class="row">
                            
                            <div class="col-md-3 mt-5 mb-3">
                                <a href="patients.php">
                                <div class="card">
                                    <div class="seo-fact sbg1">
                                        <div class="p-4 d-flex justify-content-between align-items-center text-center">
                                            <div class="seofct-icon">Patients</div>
                                        </div>
                                        <canvas id="seolinechart1" height="50"></canvas>
                                    </div>
                                </div>
                                </a>
                            </div>
                         
                            
                            <div class="col-md-3 mt-md-5 mb-3">
                                <a href="appointments.php">
                                <div class="card">
                                    <div class="seo-fact sbg3">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">Appointment</div>
                                        </div>
                                        <canvas id="seolinechart3" height="50"></canvas>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3 mt-md-5 mb-3">
                                <a href="billing.php">
                                <div class="card">
                                    <div class="seo-fact sbg4">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">Bills & payments</div>
                                            
                                        </div>
                                        <canvas id="seolinechart4" height="50"></canvas>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-3 mt-md-5 mb-3">
                                <a href="addmissions.php">
                                <div class="card">
                                    <div class="seo-fact sbg2">
                                        <div class="p-4 d-flex justify-content-between align-items-center">
                                            <div class="seofct-icon">Addmission</div> 
                                        </div>
                                        <canvas id="seolinechart2" height="50"></canvas>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- seo fact area end -->
                    <!-- Social Campain area start -->
                    
                    
        </div>
        <!-- main content area end -->
<?php include_once 'Include/footer.php'; ?>