<!-- Begin Page Content -->
<div class="card shadow ml-4 mr-4 py-4 mb-4">
    <div class="overflow-auto">
    <div class="container-fluid">
        
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800 font-weight-normal">Daftar User</h1>
            
        </div>
        <div class="row justify-content-start mb-3">
            <div class="form-group col-sm-3">
                <button type="submit" class="btn-secondary text-xs" data-target="#addUserModal"
                data-toggle="modal">Tambah User</button>
            </div>
        </div>
        <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Tambah User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?=BASEURL ?>/Admin/addUser">
                                <div class="mb-3">
                                    <label for="id_user" class="form-label">ID User</label>
                                    <input type="text" class="form-control" id="id_user" name="id_user" required>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="mb-3">
                                    <label class="role" for="role">Pilih Role</label><br>
                                    <select name="role" id="role">
                                        <option value="asisten">Asisten</option>
                                        <option value="admin">Admin</option>
                                    </select>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Tambah User</button>
                                </div>
                                
                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Content Row -->
                
                <table class=table class="table table-striped" style="width: 100%;">
                    <thead >
                        
                            <tr>

                            <th scope="col">No</th>
                            <th scope="col">ID User</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Role</th>
                            <th scope="col">Tindakan</th>


                        </tr>
                 
                    </thead>
                    <tbody>

                        <?php foreach( $data['users'] as $index => $users): ?>
                        <tr>

                            <th scope="row"><?= $index + 1?></th>
                            <td class="center"><?= $users['id_user']?></td>
                            <td><?= $users['username']?></td>
                            <td><?= $users['password']?></td>
                            <td><?= $users['role']?></td>

                            <td>
                                <button class="btn-secondary" data-toggle="modal" data-target="#editModal-<?=$index?>">
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
                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit User</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="<?=BASEURL ?>/Admin/updateUser">
                                                    <div class="mb-3 text-left">
                                                        <label for="id_user" class="form-label">ID User</label>
                                                        <input type="text" class="form-control" id="id_user"
                                                            name="id_user" value="<?=$users['id_user'] ?>" readonly>
                                                    </div>
                                                    <div class="mb-3 text-left">
                                                        <label for="username" class="form-label">Username</label>
                                                        <input type="text" class="form-control" id="username"
                                                            name="username" value="<?=$users['username'] ?>" required>
                                                    </div>
                                                    <div class="mb-3 text-left">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input type="text" class="form-control" id="password"
                                                            name="password" value="<?=$users['password'] ?>" required>
                                                    </div>
                                                    <div class="mb-3 text-left">
                                                        <label class="role" for="role">Pilih Role</label><br>
                                                        <select name="role" id="role">
                                                            <option value="asisten">Asisten</option>
                                                            <option value="admin">Admin</option>
                                                        </select>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary"
                                                            onclick="location.href='<?=BASEURL?>/Admin/updateUser/<?=$users['id_user']?>'">Update</button>
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
                                                <h5 class="modal-title" id="exampleModalLongTitle">Delete User</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Anda Yakin ingin menghapus akun ini?
                                                <?=$users['id_user'] ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary"
                                                    onclick="location.href='<?=BASEURL?>/Admin/deleteUser/<?=$users['id_user']?>'">
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

<!-- Logout Modal-->
