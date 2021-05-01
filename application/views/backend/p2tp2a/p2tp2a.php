<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Data P2TP2A</h2>
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
                            <form action="<?php echo base_url() ?>Backend/p2tp2a/save" method="post">
                                <div class="modal-body">

                                    <div class="form-group form-group-default">
                                        <label>Tanggal Pelaporan</label>
                                        <input name="tgl_laporan" type="date" class="form-control" required="required">
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Initial</label>
                                        <input name="initial" type="text" class="form-control" placeholder="Initial" required="required">
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" required="required"></textarea>
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" id="formGroupDefaultSelect">
                                            <option value="1">Laki-laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Usia</label>
                                        <input name="usia" type="number" class="form-control" placeholder="usia" required="required">
                                    </div>
                                   <div class="form-group form-group-default">
                                        <label>Jenis Pendidikan</label>
                                        <select name="id_kat_pendidikan" class="form-control" id="formGroupDefaultSelect">
                                            <?php foreach ($kat_pendidikan as $data) { ?>
                                                <option value="<?php echo $data->id_kat_pendidikan ?>"><?php echo $data->jenis_pendidikan ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Jenis Kekerasan</label>
                                        <select name="id_kat_kekerasan" class="form-control" id="formGroupDefaultSelect">
                                            <?php foreach ($kat_kekerasan as $data) { ?>
                                                <option value="<?php echo $data->id_kat_kekerasan ?>"><?php echo $data->jenis_kekerasan ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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

    <?php if ($this->session->flashdata('update')) : ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>
                <?php echo $this->session->flashdata('update'); ?>
            </strong>
        </div>
    <?php endif; ?>

    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="table table-bordered table-head-bg-info">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal</th>
                                    <th>Initial</th>
                                    <th>Jenis Kekerasan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $num = 1;
                                foreach ($p2tp2a as $data) {

                                    ?>
                                    <tr>
                                        <td><?php echo $num++ ?></td>
                                        <td><?php echo date('d-m-Y', strtotime($data->tgl_laporan)) ?></td>
                                        <td><?php echo $data->initial ?></td>
                                        <td><?php echo $data->jenis_kekerasan ?></td>


                                        <td>
                                            <a href="<?php echo base_url('Backend/p2tp2a/edit/' . $data->id_p2tp2a) ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="<?php echo base_url('Backend/p2tp2a/delete/' . $data->id_p2tp2a) ?>" class="btn btn-link btn-danger" data-original-title="Remove" data-toggle="tooltip">
                                                <i class="fa fa-times"></i>
                                            </a>

                                            <a href="<?php echo base_url('Backend/p2tp2a/detail/' . $data->id_p2tp2a) ?>" class="btn btn-link btn-success" data-original-title="Detail" data-toggle="tooltip">
                                                <i class="fa fa-eye"></i>
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