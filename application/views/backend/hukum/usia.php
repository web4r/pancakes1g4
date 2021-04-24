<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Data BIDANG HUKUM ( LAPAS ) - Penghuni Lapas Menurut Jenis Lapas & Usia</h2>
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
                            <form action="<?php echo base_url() ?>Backend/hukum/save_usia" method="post">
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
                                        <label>Jenis Lapas</label>
                                        <input name="jenis_lapas" type="text" class="form-control">
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>12></label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="usia_12_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="usia_12_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>13 S/D 17 TAHUN</label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="usia_17_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="usia_17_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>18 S/D 22 TAHUN</label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="usia_22_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="usia_22_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>23 S/D 30 TAHUN</label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="usia_30_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="usia_30_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group form-group-default">
                                        <label>31 S/D 39 TAHUN</label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="usia_39_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="usia_39_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>40 S/D 49 TAHUN </label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="usia_49_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="usia_49_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>LEBIH DARI 50 TAHUIN</label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="usia_50_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="usia_50_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
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
                                    <th rowspan="2">Jenis Lapas</th>
                                    <th colspan="2">12></th>
                                    <th colspan="2">13 S/D 17 TAHUN</th>
                                    <th colspan="2">18 S/D 22 TAHUN</th>
                                    <th colspan="2">23 S/D 30 TAHUN</th>
                                    <th colspan="2">31 S/D 39 TAHUN</th>
                                    <th colspan="2">40 S/D 49 TAHUN </th>
                                    <th colspan="2">LEBIH DARI 50 TAHUIN</th>
                                    <th rowspan="2">Action</th>

                                </tr>
                                <tr>
                                    <th>L</th>
                                    <th>P</th>
                                    <th>L</th>
                                    <th>P</th>
                                    <th>L</th>
                                    <th>P</th>
                                    <th>L</th>
                                    <th>P</th>
                                    <th>L</th>
                                    <th>P</th>
                                    <th>L</th>
                                    <th>P</th>
                                    <th>L</th>
                                    <th>P</th>
                                </tr>


                            </thead>
                            <tbody>
                                <?php foreach ($usia as $item) { ?>
                                    <tr>
                                        <td><?php echo $item->tahun ?></td>
                                        <td><?php echo $item->jenis_lapas ?></td>
                                        <td><?php echo $item->usia_12_l ?></td>
                                        <td><?php echo $item->usia_12_p ?></td>
                                        <td><?php echo $item->usia_17_l ?></td>
                                        <td><?php echo $item->usia_17_p ?></td>
                                        <td><?php echo $item->usia_22_l ?></td>
                                        <td><?php echo $item->usia_22_p ?></td>
                                        <td><?php echo $item->usia_30_l ?></td>
                                        <td><?php echo $item->usia_30_p ?></td>
                                        <td><?php echo $item->usia_39_l ?></td>
                                        <td><?php echo $item->usia_39_p ?></td>
                                        <td><?php echo $item->usia_49_l ?></td>
                                        <td><?php echo $item->usia_49_p ?></td>
                                        <td><?php echo $item->usia_50_l ?></td>
                                        <td><?php echo $item->usia_50_p ?></td>

                                        <td>
                                            <a href="<?php echo base_url('Backend/hukum/edit_usia/' . $item->id_lapas_usia) ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="<?php echo base_url('Backend/hukum/delete_usia/' . $item->id_lapas_usia) ?>" class="btn btn-link btn-danger" data-original-title="Remove" data-toggle="tooltip">
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