
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Status Laboratorium</h1>

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-5">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
                                                Internet of Things Laboratory</div>
                                            <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                                            <div class="row space-between">
                                            <?php $bermasalah = $data['bermasalah']; ?>
                                                <?php $progress = $data['progress']; ?>
                                                <?php $solved = $data['solved']; ?>
                                                <div class="card-trouble">
                                                <?= implode(', ', $bermasalah); ?>
                                                </div>
                                                <div class="card-onprogress">
                                                <?= implode(', ', $progress); ?>
                                                </div>
                                                <div class="card-solved">
                                                <?= implode(', ', $solved); ?>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-5">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
                                                Startup</div>
                                            <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                                            <div class="row space-between">
                                            <?php $bermasalahStartup = $data['bermasalahStartup']; ?>
                                                <?php $progressStartup = $data['progressStartup']; ?>
                                                <?php $solvedStartup = $data['solvedStartup']; ?>
                                                <div class="card-trouble">
                                                <?= implode(', ', $bermasalahStartup); ?>
                                                </div>
                                                <div class="card-onprogress">
                                                <?= implode(', ', $progressStartup); ?>
                                                </div>
                                                <div class="card-solved">
                                                <?= implode(', ', $solvedStartup); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-5">
                            <div class="row align-items-center">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
                                                Computer Networking</div>
                                            <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                                            <div class="row space-between">

                                            <?php $bermasalahComNet = $data['bermasalahComNet']; ?>
                                                <?php $progressComNet = $data['progressComNet']; ?>
                                                <?php $solvedComNet = $data['solvedComNet']; ?>
                                                <div class="col sm-4">
                                                    <div class="card-trouble">
                                                    <?= implode(', ', $bermasalahComNet); ?>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col sm-4">
                                                    <div class="card-onprogress">
                                                    <?= implode(', ', $progressComNet); ?>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col sm-4">
                                                    
                                                    <div class="card-solved">
                                                    <?= implode(', ', $solvedComNet); ?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-5">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
                                                Multimedia</div>
                                            <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                                            <div class="row space-between">

                                            <?php $bermasalahMultimedia = $data['bermasalahMultimedia']; ?>
                                                <?php $progressMultimedia = $data['progressMultimedia']; ?>
                                                <?php $solvedMultimedia = $data['solvedMultimedia']; ?>
                                                <div class="card-trouble">
                                                <?= implode(', ', $bermasalahMultimedia); ?>
                                                </div>
                                                <div class="card-onprogress">
                                                <?= implode(', ', $progressMultimedia); ?>
                                                </div>
                                                <div class="card-solved">
                                                <?= implode(', ', $solvedMultimedia); ?>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-5">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
                                                Microcontroller</div>
                                            <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                                            <div class="row space-between">

                                            <?php $bermasalahMicro = $data['bermasalahMicro']; ?>
                                                <?php $progressMicro = $data['progressMicro']; ?>
                                                <?php $solvedMicro = $data['solvedMicro']; ?>
                                                <div class="card-trouble">
                                                <?= implode(', ', $bermasalahMicro); ?>
                                                </div>
                                                <div class="card-onprogress">
                                                <?= implode(', ', $progressMicro); ?>
                                                </div>
                                                <div class="card-solved">
                                                <?= implode(', ', $solvedMicro); ?>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-5">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
                                                Computer System</div>
                                            <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                                            <div class="row space-between">

                                            <?php $bermasalahComputer = $data['bermasalahComputer']; ?>
                                                <?php $progressComputer = $data['progressComputer']; ?>
                                                <?php $solvedComputer = $data['solvedComputer']; ?>
                                                <div class="card-trouble">
                                                <?= implode(', ', $bermasalahComputer); ?>
                                                </div>
                                                <div class="card-onprogress">
                                                <?= implode(', ', $progressComputer); ?>
                                                </div>
                                                <div class="card-solved">
                                                <?= implode(', ', $solvedComputer); ?>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="ml-4 text-rg mb-2">
    Catatan : 
</div>
<div class="row">
    <div class="col sm-4 ml-4">
    <img src="<?=BASEURL;?>/img/trouble.png" alt="">
    Bermasalah
    
    <img src="<?=BASEURL;?>/img/onprogress.png" alt="">
    On-Progress
    <img src="<?=BASEURL;?>/img/solved.png" alt="">
    Solved
    </div>

            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>