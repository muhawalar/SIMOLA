        <!-- End of Sidebar -->

        <!-- Content Wrapper -->

        <!-- Begin Page Content -->
        
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 font-weight-normal">Laporan Laboratorium</h1>

            </div>
            <div class="row">
                <!-- Content Row -->
                <div class="col-lg-8">

                    <div class="container-fluid px-1 py-5 mx-auto">
                        <div class="col text-center">
                            <form class="form-card" method="POST" action="<?=BASEURL ?>/Laporan/submitReport">
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label
                                            class="form-control-label">Pilih Lab<span class="text-danger">
                                                *</span></label>

                                        <select name="laboratorium" required>
                                            <option value="iot">Internet of Things Laboratory</option>
                                            <option value="startup">Startup</option>
                                            <option value="jaringan">Computer Networking</option>
                                            <option value="multimedia">Multimedia</option>
                                            <option value="microcontroller">Microcontroller</option>
                                            <option value="Computer system">Computer System</option>

                                        </select>

                                    </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label
                                            class="form-control-label">Penanggung Jawab</label>
                                        <input class="form-control readonly" type="text" value="Asisten 1" readonly>
                                    </div>
                                </div>

                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label
                                            class="form-control-label">Kegiatan<span class="text-danger">
                                                *</span></label> <input type="text" placeholder="IT-Fundamental"
                                            name="kegiatan" required>
                                    </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label
                                            class="form-control-label">Tingkat Urgensi<span class="text-danger">
                                                *</span></label>
                                        <select name="urgensi" required>
                                            <option value="mendesak">Mendesak</option>
                                            <option value="tidak mendesak">Tidak Mendesak</option>
                                        </select> </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-12 flex-column d-flex"> <label
                                            class="form-control-label">Deskripsi<span class="text-danger">
                                                *</span></label>
                                        <textarea name="deskripsi" required> </textarea></div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="form-group col-sm-3"> <button type="submit"
                                            class="btn-block btn-primary">Submit</button> </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>


                <div class="col-lg-4">
                    <div>
                        <div class="col">
                            <div class="card-recently-report shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Laporan Terkini</h6>

                                </div>
                                <!-- Card Body -->
                                <?php 
                                    $count = 0;
                                    foreach ($data['laporan'] as $index => $laporan) {
                                        if ($count >= 4) break;
                                        $count++;
                                    ?>
                                    <div class="card-body-report">

                                        <div class="card-last-report text-left">
                                            <div class="ml-3">
                                                <h6><?= $laporan['laboratorium'] ?>
                                                    <span class="badge <?php
                                                        switch ($laporan['urgensi']) {
                                                            case 'mendesak':
                                                                echo 'badge-danger';
                                                                break;
                                                            default:
                                                                echo 'badge-primary';
                                                        } ?>">
                                                        <?= $laporan['urgensi'] ?>
                                                    </span>
                                                </h6>
                                                <div class="text-xs">
                                                    <?= $laporan['kegiatan'] ?>
                                                </div>
                                                <div class="text-xs">
                                                    <?= $laporan['laporan'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php } ?>





                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
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