<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Angka Data Pendididkan Beasiswa SLTA dan Perguruan Tinggi</h2>
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
                            <form action="<?php echo base_url() ?>Backend/disdik/save_disdik_pt" method="post">
                                <div class="modal-body">

                                    <div class="form-group form-group-default">
                                        <label>Tahun</label>
                                        <select name="tahun" class="form-control" id="formGroupDefaultSelect">
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>SMA</label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="slta_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="slta_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>PERGURUAN TINGGI</label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="pt_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="pt_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="form-group form-group-default">
                                        <label>Status</label>
                                        <input name="status_pendidikan" type="text" class="form-control">
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
                        <table class="table table-bordered  table-bordered-bd-info">
                            <thead>
                                <tr>
                                    <th rowspan="2">Tahun</th>
                                    <th colspan="3">SMA</th>
                                    <th colspan="3">PERGURUAN TINGGI</th>
                                    <th rowspan="2">Status</th>
                                    <th rowspan="2">Action</th>

                                </tr>
                                <tr>
                                    <th>L</th>
                                    <th>P</th>
                                    <th>JML</th>
                                    <th>L</th>
                                    <th>P</th>
                                    <th>JML</th>


                                </tr>


                            </thead>
                            <tbody>
                                <?php foreach ($disdik_pt as $item) { ?>
                                    <tr>
                                        <td><?php echo $item->tahun ?></td>
                                        <td><?php echo $item->slta_l ?></td>
                                        <td><?php echo $item->slta_p ?></td>
                                        <td><?php echo $item->slta_jml ?></td>
                                        <td><?php echo $item->pt_l ?></td>
                                        <td><?php echo $item->pt_p ?></td>
                                        <td><?php echo $item->pt_jml ?></td>
                                        <td><?php echo $item->status_pendidikan ?></td>
                                        <td>
                                            <a href="<?php echo base_url('Backend/disdik/edit_disdik_pt/' . $item->id_disdik_pt) ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="<?php echo base_url('Backend/disdik/delete_disdik_pt/' . $item->id_disdik_pt) ?>" class="btn btn-link btn-danger" data-original-title="Remove" data-toggle="tooltip">
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