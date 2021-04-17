<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
    </div>
</div>

<div class="page-inner mt--5">
    <div class="row mt--2">



        <div class="col-lg-6 ml-auto mr-auto">

            <div class="card card-stats  card-round">
                <div class="card-body">
                    <div class="card-title">
                        <h2 class="text-black pb-2 fw-bold">FORM EDIT USER</h2>
                    </div>
                    <form action="<?php echo base_url() ?>Admin/update_user/<?php echo $user->id_user ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group form-group-default">
                                <label>Pilih Role</label>
                                <select name="id_role" class="form-control" id="formGroupDefaultSelect">
                                    <?php
                                    foreach ($role as $item) {
                                        ?>
                                        <option value="<?php echo $item->id_role ?>" <?php if ($user->id_role == $item->id_role) {
                                                                                                echo "selected";
                                                                                            } ?>>
                                            <?php echo $item->role_name ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group form-group-default">
                                <label>Nama Lengkap</label>
                                <input name="fullname" type="text" class="form-control" value="<?php echo $user->fullname ?>">
                            </div>
                            <div class="form-group form-group-default">
                                <label>Email</label>
                                <input name="email" type="email" class="form-control" value="<?php echo $user->email ?>">
                            </div>

                            <div class="form-group form-group-default">
                                <label>Ubah Password</label>
                                <a href="<?php echo base_url() ?>Admin/edit_password/<?php echo $user->id_user ?>" class="btn btn-danger">Ganti Password</a>
                            </div>
                            <div class="form-group form-group-default">
                                <label>No Hp/Telepon</label>
                                <input name="phone" type="number" class="form-control" value="<?php echo $user->phone ?>">
                            </div>



                        </div>
                        <div class="modal-footer">
                            <a href="<?php echo base_url() ?>Admin/users" type="button" class="btn btn-danger" data-dismiss="modal">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>


                </div>
            </div>


        </div>


    </div>
</div>