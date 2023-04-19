
        <!-- Begin Page Content -->
        <div class="card shadow ml-4 mr-4 py-4 mb-4">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-5">
                    <h1 class="h3 mb-0 text-gray-800 font-weight-normal">Tindakan Laboratorium</h1>

                </div>
                <div class="row">
                    <!-- Content Row -->

                    <table class=table class="table table-striped" id="laporan" style="width: 100%;">
                        <thead>
                            <tr>

                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Laboratorium</th>
                                <th scope="col">Kegiatan</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Urgensi</th>
                                <th scope="col">Pelapor</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tindakan</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                  
                    foreach( $data['laporan'] as $index => $laporan): ?>
                            <tr>

                                <th scope="row"><?= $index + 1?></th>
                                <td><?= $laporan['tanggal']?></td>
                                <td><?= $laporan['laboratorium']?></td>
                                <td><?= $laporan['kegiatan']?></td>
                                <td><?= $laporan['laporan']?></td>
                                <td><span class="badge <?php
                        switch ($laporan['urgensi']) {
                        case 'mendesak':
                            echo 'badge-danger';
                            break;
                        default:
                            echo 'badge-primary';
                        } ?>"><?= $laporan['urgensi'] ?></td>
                        <td><?= $laporan['pelapor']?></td>
                        <td><span class="badge <?php
                        switch ($laporan['status']) {
                        case 'belum dieksekusi':
                            echo 'badge-danger';
                            break;
                        case 'on-progress':
                            echo 'badge-warning';
                            break;
                        default:
                            echo 'badge-success';
                        } ?>"><?= $laporan['status'] ?></td>

                                <td>
                                    <button class="btn-secondary" data-toggle="modal"
                                        data-target="#editModal-<?=$index?>">
                                        <img src="<?=BASEURL ?>/img/edit-icon.png" alt=""
                                            style="width: 20px; height: 20px;">
                                    </button>
                                    <button class="btn-secondary" data-toggle="modal"
                                        data-target="#deleteModal-<?=$index?>">
                                        <img src="<?=BASEURL ?>/img/delete-icon.png" alt=""
                                            style="width: 20px; height: 20px;">
                                    </button>
                                    <!-- Button trigger modal -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="editModal-<?=$index?>" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Tindakan</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="<?=BASEURL?>/Admin/updateLaporan/<?=$laporan['id_laporan']?>">
                                                        <div class="mb-3 text-left">
                                                            <label for="id_laporan" class="form-label">ID
                                                                Laporan</label>
                                                            <input type="text" class="form-control" id="id_laporan"
                                                                name="id_laporan" value="<?=$laporan['id_laporan'] ?>"
                                                                readonly>
                                                        </div>
                                                        <div class="mb-3 text-left">
                                                            <label for="tanggal" class="form-label">Tanggal</label>
                                                            <input type="text" class="form-control" id="tanggal"
                                                                name="tanggal" value="<?=$laporan['tanggal'] ?>"
                                                                readonly>
                                                        </div>
                                                        <div class="mb-3 text-left">
                                                            <label for="laboratorium"
                                                                class="form-label">Laboratorium</label><br>
                                                            <select name="laboratorium" id="laboratorium" required>
                                                                <option value="iot">Internet of Things Laboratory
                                                                </option>
                                                                <option value="startup">Startup</option>
                                                                <option value="jaringan">Computer Networking</option>
                                                                <option value="multimedia">Multimedia</option>
                                                                <option value="microcontroller">Microcontroller</option>
                                                                <option value="komputasi-dasar">Komputasi Dasar</option>

                                                            </select>
                                                        </div>
                                                        <div class="mb-3 text-left">
                                                            <label for="kegiatan" class="form-label">Kegiatan</label>
                                                            <input type="text" class="form-control" id="kegiatan"
                                                                name="kegiatan" value="<?=$laporan['kegiatan'] ?>"
                                                                required>
                                                        </div>
                                                        <div class="mb-3 text-left">
                                                            <label for="deskripsi" class="form-label">Deskripsi</label><br> 
                                                            <textarea name="laporan" required><?=$laporan['laporan'] ?></textarea>
                                                        </div>
                                                        <div class="mb-3 text-left">
                                                            <label for="laboratorium"
                                                                class="form-label">Urgensi</label><br>
                                                            <select name="urgensi" required>
                                                                <option value="mendesak">Mendesak</option>
                                                                <option value="tidak mendesak">Tidak Mendesak</option>
                                                            </select>
                                                            </select>
                                                        </div>
                                                    
                                                    
                                                        <div class="mb-3 text-left">
                                                            <label for="pelapor" class="form-label">Pelapor</label>
                                                            <input type="text" class="form-control" id="pelapor"
                                                                name="pelapor" value="<?=$laporan['pelapor'] ?>"
                                                                readonly>
                                                        </div>
                                                        <div class="mb-3 text-left">
                                                            <label for=""
                                                                class="form-label">Status</label><br>
                                                            <select name="status" required>
                                                                <option value="belum dieksekusi">Belum Dieksekusi</option>
                                                                <option value="on-progress">On-Progress</option>
                                                                <option value="solved">Solved</option>
                                                            </select>
                                                            </select>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                onclick="location.href='<?=BASEURL?>/Admin/updateLaporan/<?=$laporan['id_laporan']?>'">Update</button>
                                                        </div>

                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="deleteModal-<?=$index?>" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Laporan
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Anda Yakin ingin menghapus laporan ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary"
                                                        onclick="location.href='<?=BASEURL?>/Admin/deleteLaporan/<?=$laporan['id_laporan']?>'">
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </td>
                            </tr>
                            <?php 
                  
                    endforeach; ?>

                        </tbody>
                    </table>
                    <!-- /.container-fluid -->
                </div>
            </div>
            <!-- End of Main Content -->



        </div>
    </div>
    <!-- End of Content Wrapper -->

</div>

<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

