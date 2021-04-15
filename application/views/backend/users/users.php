<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Management Users SIGADIS</h2>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data
                </button>
                <!-- Form data -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo base_url() ?>Admin/save_user" method="post">
                                <div class="modal-body">
                                    <div class="form-group form-group-default">
                                        <label>Pilih Role</label>
                                        <select name="id_role" class="form-control" id="formGroupDefaultSelect">
                                            <?php
                                            foreach ($role as $item) {
                                                ?>
                                                <option value="<?php echo $item->id_role ?>"><?php echo $item->role_name ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Nama Lengkap</label>
                                        <input name="fullname" type="text" class="form-control" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <input name="email" type="text" class="form-control" placeholder="Email">
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Password</label>
                                        <input name="password" type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>No Hp/Telepon</label>
                                        <input name="phone" type="text" class="form-control" placeholder="No Hp/Telepon">
                                    </div>



                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">

    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>
                <?php echo $this->session->flashdata('success'); ?>
            </strong>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('delete')) : ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>
                <?php echo $this->session->flashdata('delete'); ?>
            </strong>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('failed')) : ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>
                <?php echo $this->session->flashdata('failed'); ?>
            </strong>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('errors')) : ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>
                <?php echo $this->session->flashdata('errors'); ?>
            </strong>
        </div>
    <?php endif; ?>

    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-head-bg-info table-bordered-bd-info">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Role User</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $num = 1;
                                foreach ($users as $user) {
                                    ?>
                                    <tr>
                                        <td><?php echo $num++ ?></td>
                                        <td><?php echo $user->role_name ?></td>
                                        <td><?php echo $user->email ?></td>
                                        <td><?php echo $user->phone ?></td>

                                        <td>
                                            <a href="#" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="#" class="btn btn-link btn-danger" data-original-title="Remove" data-toggle="tooltip">
                                                <i class="fa fa-times"></i>
                                            </a>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>