<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">DATA TERPILAH - DINAS KETENAGAKERJAAN</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="nav flex-column nav-pills nav-primary nav-pills" id="v-pills-tab-without-border" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-tpak-tab-nobd" data-toggle="pill" href="#v-pills-tpak-nobd" role="tab" aria-controls="v-pills-tpak-nobd" aria-selected="true">Tingkat Partisipasi Angkatan Kerja (TPAK)</a>
                                <a class="nav-link" id="v-pills-kkm-tab-nobd" data-toggle="pill" href="#v-pills-kkm-nobd" role="tab" aria-controls="v-pills-kkm-nobd" aria-selected="false">Kepala Keluarga Miskin</a>
                                <a class="nav-link" id="v-pills-akad-tab-nobd" data-toggle="pill" href="#v-pills-akad-nobd" role="tab" aria-controls="v-pills-akad-nobd" aria-selected="false">Tenaga Kerja Migran Antar Kerja Antar Daerah (AKAD)</a>
                                <a class="nav-link" id="v-pills-akan-tab-nobd" data-toggle="pill" href="#v-pills-akan-nobd" role="tab" aria-controls="v-pills-akan-nobd" aria-selected="false">Tenaga Kerja Migran Antar Kerja Antar Negara (AKAN)</a>
                                <a class="nav-link" id="v-pills-formal-tab-nobd" data-toggle="pill" href="#v-pills-formal-nobd" role="tab" aria-controls="v-pills-formal-nobd" aria-selected="false">Pekerja Di Sektor Formal</a>
                                <a class="nav-link" id="v-pills-informal-tab-nobd" data-toggle="pill" href="#v-pills-informal-nobd" role="tab" aria-controls="v-pills-informal-nobd" aria-selected="false">Pekerja Di Sektor InFormal</a>
                                <a class="nav-link" id="v-pills-umk-tab-nobd" data-toggle="pill" href="#v-pills-umk-nobd" role="tab" aria-controls="v-pills-umk-nobd" aria-selected="false">Usaha Mikro dan Kecil (UMK)</a>
                                <a class="nav-link" id="v-pills-koperasi-tab-nobd" data-toggle="pill" href="#v-pills-koperasi-nobd" role="tab" aria-controls="v-pills-koperasi-nobd" aria-selected="false">KOPERASI</a>
                                <a class="nav-link" id="v-pills-kredit-tab-nobd" data-toggle="pill" href="#v-pills-kredit-nobd" role="tab" aria-controls="v-pills-kredit-nobd" aria-selected="false">KREDIT</a>
                                <a class="nav-link" id="v-pills-jpa-tab-nobd" data-toggle="pill" href="#v-pills-jpa-nobd" role="tab" aria-controls="v-pills-jpa-nobd" aria-selected="false">Jumlah Pekerja Anak </a>
                                <a class="nav-link" id="v-pills-jpata-tab-nobd" data-toggle="pill" href="#v-pills-jpata-nobd" role="tab" aria-controls="v-pills-jpata-nobd" aria-selected="false">Jumlah Pekerja Rumah Tangga Anak </a>
                                <a class="nav-link" id="v-pills-jsp-tab-nobd" data-toggle="pill" href="#v-pills-jsp-nobd" role="tab" aria-controls="v-pills-jsp-nobd" aria-selected="false">Daftar Jumlah Serikat Pekerja </a>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content" id="v-pills-without-border-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-tpak-nobd" role="tabpanel" aria-labelledby="v-pills-tpak-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="basic-datatables" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($tpak as $data) {
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

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="v-pills-kkm-nobd" role="tabpanel" aria-labelledby="v-pills-kkm-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="kkm" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($kkm as $data) {
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

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-akad-nobd" role="tabpanel" aria-labelledby="v-pills-akad-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="akad" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>

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

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-akan-nobd" role="tabpanel" aria-labelledby="v-pills-akan-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="akan" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($akan as $data) {
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

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-formal-nobd" role="tabpanel" aria-labelledby="v-pills-formal-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="formal" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($formal as $data) {
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

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-informal-nobd" role="tabpanel" aria-labelledby="v-pills-informal-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="informal" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($informal as $data) {
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

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-umk-nobd" role="tabpanel" aria-labelledby="v-pills-umk-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="umk" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($umk as $data) {
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

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-koperasi-nobd" role="tabpanel" aria-labelledby="v-pills-koperasi-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="koperasi" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($koperasi as $data) {
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

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-kredit-nobd" role="tabpanel" aria-labelledby="v-pills-kredit-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="kredit" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($kredit as $data) {
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

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-jpa-nobd" role="tabpanel" aria-labelledby="v-pills-jpa-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="jpa" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($jpa as $data) {
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

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-jpata-nobd" role="tabpanel" aria-labelledby="v-pills-jpata-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="jpata" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($jpata as $data) {
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

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-jsp-nobd" role="tabpanel" aria-labelledby="v-pills-jsp-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="djsp" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($djsp as $data) {
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
            </div>
        </div>
    </div>
</div>