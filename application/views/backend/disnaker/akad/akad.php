<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Tenaga Kerja Migran Antar Kerja Antar Daerah (AKAD)</h2>
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
                            <form action="<?php echo base_url() ?>Backend/disnaker/save_akad" method="post">
                                <div class="modal-body">
                                    <div class="form-group form-group-default">
                                        <label>Pilih Tahun</label>
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
                                        <label>Laki-laki</label>
                                        <input name="pria" type="number" class="form-control" placeholder="Laki-laki">
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Perempuan</label>
                                        <input name="wanita" type="number" class="form-control" placeholder="Perempuan">
                                    </div>

                                    <div class="form-group form-group-default">
                                        <label>Status</label>
                                        <input name="status" type="text" class="form-control" placeholder="Status">
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
    <div class="row mt--2">
        <div class="col-md-12">

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-secondary card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Total Laki-laki</p>
                                        <h4 class="card-title">
                                            <?php
                                            foreach ($total_pria as $item) {
                                                if ($item->total) {
                                                    echo $item->total;
                                                } else {
                                                    echo 0;
                                                }
                                            }
                                            ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats  card-secondary card-round">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-12 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Total Perempuan</p>
                                        <h4 class="card-title">
                                            <?php
                                            foreach ($total_wanita as $item) {
                                                if ($item->total) {
                                                    echo $item->total;
                                                } else {
                                                    echo 0;
                                                }
                                            }
                                            ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-secondary card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-12 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Jumlah Akhir</p>
                                        <h4 class="card-title">
                                            <?php
                                            foreach ($total_akhir as $item) {
                                                if ($item->total) {
                                                    echo $item->total;
                                                } else {
                                                    echo 0;
                                                }
                                            }
                                            ?>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

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
                        <table class="table table-bordered table-head-bg-info table-bordered-bd-info">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tahun</th>
                                    <th>Laki-laki</th>
                                    <th>Perempuan</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $num = 1;
                                foreach ($akad as $data) {
                                    $status = $data->status;
                                    if ($status) {
                                        $result = '<span class="badge badge-primary">' . $status . '</span>';
                                    } else {
                                        $result = '<span class="badge badge-danger">Belum ada status</span>';
                                    }
                                    ?>
                                    <tr>
                                        <td><?php echo $num++ ?></td>
                                        <td><?php echo $data->tahun ?></td>
                                        <td><?php echo $data->pria ?></td>
                                        <td><?php echo $data->wanita ?></td>
                                        <td><?php echo $data->jumlah ?></td>
                                        <td><?php echo $result ?></td>
                                        <td>
                                            <a href="<?php echo base_url('Backend/disnaker/edit_akad/' . $data->id_akad) ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="<?php echo base_url('Backend/disnaker/delete_akad/' . $data->id_akad) ?>" class="btn btn-link btn-danger" data-original-title="Remove" data-toggle="tooltip">
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