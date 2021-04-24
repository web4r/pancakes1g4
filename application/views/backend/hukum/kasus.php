<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Data BIDANG HUKUM ( LAPAS ) - Penghuni Lapas Menurut Jenis Lapas & Kasus</h2>
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
                            <form action="<?php echo base_url() ?>Backend/hukum/save_kasus" method="post">
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
                                        <label>Pembunuhan</label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="pembunuhan_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="pembunuhan_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Pencurian</label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="pencurian_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="pencurian_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Pemerkosa</label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="pemerkosa_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="pemerkosa_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Asusila</label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="asusila_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="asusila_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group form-group-default">
                                        <label>Napza</label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="napza_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="napza_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>KDRT</label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="kdrt_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="kdrt_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Korupsi</label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="korupsi_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="korupsi_p" type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Lainnya</label>
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>L</label>
                                                    <input name="lainnya_l" type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>P</label>
                                                    <input name="lainnya_p" type="number" class="form-control">
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
                                    <th colspan="2">Pembunuhan</th>
                                    <th colspan="2">Pencurian</th>
                                    <th colspan="2">Pemerkosa</th>
                                    <th colspan="2">Asusila</th>
                                    <th colspan="2">Napza</th>
                                    <th colspan="2">KDRT</th>
                                    <th colspan="2">Korupsi</th>
                                    <th colspan="2">Lainnya</th>
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


                                    <th>L</th>
                                    <th>P</th>


                                </tr>


                            </thead>
                            <tbody>
                                <?php foreach ($kasus as $item) { ?>
                                    <tr>
                                        <td><?php echo $item->tahun ?></td>
                                        <td><?php echo $item->jenis_lapas ?></td>
                                        <td><?php echo $item->pembunuhan_l ?></td>
                                        <td><?php echo $item->pembunuhan_p ?></td>
                                        <td><?php echo $item->pencurian_l ?></td>
                                        <td><?php echo $item->pencurian_p ?></td>
                                        <td><?php echo $item->pemerkosa_l ?></td>
                                        <td><?php echo $item->pemerkosa_p ?></td>
                                        <td><?php echo $item->asusila_l ?></td>
                                        <td><?php echo $item->asusila_p ?></td>
                                        <td><?php echo $item->napza_l ?></td>
                                        <td><?php echo $item->napza_p ?></td>
                                        <td><?php echo $item->kdrt_l ?></td>
                                        <td><?php echo $item->kdrt_p ?></td>
                                        <td><?php echo $item->korupsi_l ?></td>
                                        <td><?php echo $item->korupsi_p ?></td>
                                        <td><?php echo $item->lainnya_l ?></td>
                                        <td><?php echo $item->lainnya_p ?></td>


                                        <td>
                                            <a href="<?php echo base_url('Backend/hukum/edit_kasus/' . $item->id_lapas_kasus) ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="<?php echo base_url('Backend/hukum/delete_kasus/' . $item->id_lapas_kasus) ?>" class="btn btn-link btn-danger" data-original-title="Remove" data-toggle="tooltip">
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