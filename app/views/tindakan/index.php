<!-- Content Wrapper -->


<!-- Begin Page Content -->
<div class="card shadow ml-4 mr-4 py-4 mb-4 p-3">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-5">
            <h1 class="h3 mb-0 text-gray-800 font-weight-normal">Tindakan Laboratorium</h1>

        </div>
        <div class="row ">
            <!-- Content Row -->
            <div class="col-sm-12">
                <table class="table table-striped" id="laporan" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Labroratorium</th>
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
                                <div class="row">
                                    <div class="col sm-6 mb-2">
                                        <button class="btn-secondary" data-toggle="modal"
                                            data-target="#actionModal-<?=$index?>">
                                            <img src="<?=BASEURL ?>/img/action-report-icon.png" alt=""
                                                style="width: 20px; height: 20px;">
                                        </button>
                                        
                                    </div>
                                    <div class="col sm-6">
                                    <button class="btn-secondary" data-toggle="modal"
                                            data-target="#historyModal-<?=$index?>">
                                            <img src="<?=BASEURL ?>/img/history-icon.png" alt=""
                                                style="width: 20px; height: 20px;">
                                        </button>   
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.container-fluid -->
        </div>
        <?php foreach($data['laporan'] as $index => $laporan): ?>
        <!-- <?php $index ?> -->
        <div class="modal fade" id="actionModal-<?=$index?>" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form method="POST"
                    action="<?=BASEURL ?>/Tindakan/updateTindakan/<?=$laporan['id_laporan']?>/<?=$laporan['id_asisten']?>">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Detail Tindakan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                <tr>
                                    <td>Tanggal</td>
                                    <td> : </td>
                                    <td><?= $laporan['tanggal'] ?></td>
                                </tr>
                                <tr>
                                    <td>Laboratorium</td>
                                    <td> : </td>
                                    <td><?= $laporan['laboratorium'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan</td>
                                    <td> : </td>
                                    <td><?= $laporan['kegiatan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td> : </td>
                                    <td><?= $laporan['laporan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Urgensi</td>
                                    <td> : </td>
                                    <td><?= $laporan['urgensi'] ?></td>
                                </tr>
                                <tr>
                                    <td>Pelapor</td>
                                    <td> : </td>
                                    <td><?= $laporan['pelapor'] ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td> : </td>
                                    <td>
                                        <select name="status" id="status" value="<?=$laporan['status'] ?>">
                                            <option value="belum dieksekusi">Belum Dieksekusi
                                            </option>
                                            <option value="on-progress">On-Progress</option>
                                            <option value="solved">Selesai</option>
                                        </select>
                                    </td>
                                </tr>

                            </table>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"
                                onclick="location.href='<?=BASEURL?>/Tindakan/updateTindakan/<?=$laporan['id_laporan']?>/<?=$laporan['id_asisten']?>'">Save
                                changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php endforeach; ?>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
</div>


<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>



<?php 
foreach($data['laporan'] as $index => $laporan) : ?>
<div class="modal fade" id="historyModal-<?=$index?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form method="POST"
            action="<?= BASEURL ?>/Tindakan/updateTindakan/<?=$laporan['id_laporan']?>/<?=$laporan['id_asisten']?>">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Riwayat Tindakan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <!-- <th scope="col">No</th> -->
                                <th scope="col">Tanggal</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Eksekutor</th>

                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                    $laporan_id = $laporan['id_laporan'];
                                    $respon = $data['respon'];
                                    if (empty($respon)) {
                                        echo '<tr><td colspan="6">Tidak ada tindakan untuk laporan ini</td></tr>';
                                    } else {
                                        foreach ($respon as $index => $r) {
                                            if ($r['id_laporan'] == $laporan_id) {
                                                echo '<tr>';
                                                // echo '<th scope="row">'.($index + 1).'</th>';
                                                echo '<td>'.$r['tanggal'].'</td>';
                                                echo '<td>'.$r['time'].'</td>';
                                                echo '<td>'.$r['asisten'].'</td>';
                                                $badge_color = '';
                                                if ($r['status'] == 'belum dieksekusi') {
                                                    $badge_color = 'badge-danger';
                                                } else if ($r['status'] == 'on-progress') {
                                                    $badge_color = 'badge-warning';
                                                } else {
                                                    $badge_color = 'badge-success';
                                                }

                                                echo '<td><span class="badge '.$badge_color.'">'.$r['status'].'</span></td>';
                                                echo '</tr>';    
                                                
                                            }
                                        }
                                    }
                                ?>
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>

    </div>
</div>

<?php endforeach; ?>