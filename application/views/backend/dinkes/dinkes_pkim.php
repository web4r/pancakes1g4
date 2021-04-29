<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Penyebab Kematian Ibu Melahirkan</h2>
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
                            <form action="<?php echo base_url() ?>Backend/dinkes/save_dinkes_pkim" method="post">
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
                                        <label>Eklamsia
                                            %
                                        </label>
                                        <input name="eklamsia" type="text" class="form-control">
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Infeksi
                                            %
                                        </label>
                                        <input name="infeksi" type="text" class="form-control">
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Abortus
                                            %
                                        </label>
                                        <input name="abortus" type="text" class="form-control">
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>P. Lama/MAcet
                                            %
                                        </label>
                                        <input name="plama" type="text" class="form-control">
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Emboli Obstetri
                                            %
                                        </label>
                                        <input name="emboli" type="text" class="form-control">
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Kompl Masa Pueureum
                                            %
                                        </label>
                                        <input name="komp" type="text" class="form-control">
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Lain-Lain
                                            %
                                        </label>
                                        <input name="lain_lain" type="text" class="form-control">
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Pendarahan
                                            %
                                        </label>
                                        <input name="pendarahan" type="text" class="form-control">
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Status</label>
                                        <input name="status_dinkes" type="text" class="form-control">
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
                                    <th colspan="8" class="text-center">Jumlah Kematian Ibu</th>
                                    <th rowspan="2">Status</th>
                                    <th rowspan="2">Action</th>

                                </tr>
                                <tr>
                                    <th>Eklamsia
                                        %
                                    </th>
                                    <th>Infeksi
                                        %
                                    </th>
                                    <th>Abortus
                                        %
                                    </th>
                                    <th>P. Lama/MAcet
                                        %
                                    </th>
                                    <th>Emboli Obstetri
                                        %
                                    </th>
                                    <th>Kompl Masa Pueureum
                                        %

                                    </th>
                                    <th>Lain-Lain
                                        %
                                    </th>
                                    <th>Pendarahan
                                        %
                                    </th>


                                </tr>


                            </thead>
                            <tbody>
                                <?php foreach ($dinkes_pkim as $item) { ?>
                                    <tr>
                                        <td><?php echo $item->tahun ?></td>
                                        <td><?php echo $item->eklamsia ?></td>
                                        <td><?php echo $item->infeksi ?></td>
                                        <td><?php echo $item->abortus ?></td>
                                        <td><?php echo $item->plama ?></td>
                                        <td><?php echo $item->emboli ?></td>
                                        <td><?php echo $item->komp ?></td>
                                        <td><?php echo $item->lain_lain ?></td>
                                        <td><?php echo $item->pendarahan ?></td>
                                        <td><?php echo $item->status_dinkes ?></td>
                                        <td>
                                            <a href="<?php echo base_url('Backend/dinkes/edit_dinkes_pkim/' . $item->id_dinkes_pkim) ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="<?php echo base_url('Backend/dinkes/delete_dinkes_pkim/' . $item->id_dinkes_pkim) ?>" class="btn btn-link btn-danger" data-original-title="Remove" data-toggle="tooltip">
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