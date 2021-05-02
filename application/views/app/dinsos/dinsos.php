<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">DATA TERPILAH - DINAS SOSIAL</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="nav flex-column nav-pills nav-primary nav-pills" id="v-pills-tab-without-border" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-kkm-tab-nobd" data-toggle="pill" href="#v-pills-kkm-nobd" role="tab" aria-controls="v-pills-kkm-nobd" aria-selected="true">Kepala Keluarga Miskin</a>
                                <a class="nav-link" id="v-pills-pendidikan-tab-nobd" data-toggle="pill" href="#v-pills-pendidikan-nobd" role="tab" aria-controls="v-pills-pendidikan-nobd" aria-selected="false">Data Penduduk Lansia Menurut Pendidikan</a>
                                <a class="nav-link" id="v-pills-dinsos_aktifitas-tab-nobd" data-toggle="pill" href="#v-pills-dinsos_aktifitas-nobd" role="tab" aria-controls="v-pills-dinsos_aktifitas-nobd" aria-selected="false">Data Penduduk Lansia Menurut Aktifitas</a>
                                <a class="nav-link" id="v-pills-dinsos_sakit-tab-nobd" data-toggle="pill" href="#v-pills-dinsos_sakit-nobd" role="tab" aria-controls="v-pills-dinsos_sakit-nobd" aria-selected="false">Data Penduduk Lansia yang sakit </a>
                                <a class="nav-link" id="v-pills-dinsos_dmp-tab-nobd" data-toggle="pill" href="#v-pills-dinsos_dmp-nobd" role="tab" aria-controls="v-pills-dinsos_dmp-nobd" aria-selected="false">Data Penyandang Disablitas Menurut Pendidikan</a>
                                <a class="nav-link" id="v-pills-dinsos_dma-tab-nobd" data-toggle="pill" href="#v-pills-dinsos_dma-nobd" role="tab" aria-controls="v-pills-dinsos_dma-nobd" aria-selected="false">Data Penyandang Disablitas Menurut Aktifitas</a>
                                <a class="nav-link" id="v-pills-dinsos_jaj-tab-nobd" data-toggle="pill" href="#v-pills-dinsos_jaj-nobd" role="tab" aria-controls="v-pills-dinsos_jaj-nobd" aria-selected="false">Jumlah Anak Jalan</a>
                                <a class="nav-link" id="v-pills-dinsos_jta-tab-nobd" data-toggle="pill" href="#v-pills-dinsos_jta-nobd" role="tab" aria-controls="v-pills-dinsos_jta-nobd" aria-selected="false">Jumlah Terlantar Anak </a>
                                <a class="nav-link" id="v-pills-dinsos_abk-tab-nobd" data-toggle="pill" href="#v-pills-dinsos_abk-nobd" role="tab" aria-controls="v-pills-dinsos_abk-nobd" aria-selected="false">Data Anak Berkebutuhan Khusus</a>

                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content" id="v-pills-without-border-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-kkm-nobd" role="tabpanel" aria-labelledby="v-pills-kkm-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinsos_kkm" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Pria</th>
                                                    <th>Wanita</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($dinsos_kkm as $data) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->pria ?></td>
                                                        <td><?php echo $data->wanita ?></td>
                                                        <td><?php echo $data->jumlah ?></td>
                                                        <td><?php echo $data->status_dinsos ?></td>



                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="v-pills-pendidikan-nobd" role="tabpanel" aria-labelledby="v-pills-pendidikan-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinsos_pendidikan" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="3">SD</th>
                                                    <th colspan="3">SLTP</th>
                                                    <th colspan="3">SLTA</th>
                                                    <th colspan="3">AKADEMI/PT</th>
                                                    <th rowspan="2">Status</th>


                                                </tr>
                                                <tr>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>

                                                </tr>


                                            </thead>
                                            <tbody>
                                                <?php foreach ($dinsos_pendidikan as $item) { ?>
                                                    <tr>
                                                        <td><?php echo $item->tahun ?></td>
                                                        <td><?php echo $item->sd_l ?></td>
                                                        <td><?php echo $item->sd_p ?></td>
                                                        <td><?php echo $item->sd_jml ?></td>
                                                        <td><?php echo $item->sltp_l ?></td>
                                                        <td><?php echo $item->sltp_p ?></td>
                                                        <td><?php echo $item->sltp_jml ?></td>
                                                        <td><?php echo $item->slta_l ?></td>
                                                        <td><?php echo $item->slta_p ?></td>
                                                        <td><?php echo $item->slta_jml ?></td>
                                                        <td><?php echo $item->pt_l ?></td>
                                                        <td><?php echo $item->pt_p ?></td>
                                                        <td><?php echo $item->pt_jml ?></td>
                                                        <td><?php echo $item->status_dinsos ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-dinsos_aktifitas-nobd" role="tabpanel" aria-labelledby="v-pills-dinsos_aktifitas-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinsos_aktifitas" class=" table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="3">PERTANIAN</th>
                                                    <th colspan="3">PERTAMBANGAN</th>
                                                    <th colspan="3">INDUSTRI</th>
                                                    <th colspan="3">JASA</th>
                                                    <th colspan="3">LAINNYA</th>
                                                    <th rowspan="2">Status</th>


                                                </tr>
                                                <tr>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>

                                                </tr>


                                            </thead>
                                            <tbody>
                                                <?php foreach ($dinsos_aktifitas as $item) { ?>
                                                    <tr>
                                                        <td><?php echo $item->tahun ?></td>
                                                        <td><?php echo $item->tani_l ?></td>
                                                        <td><?php echo $item->tani_p ?></td>
                                                        <td><?php echo $item->tani_jml ?></td>
                                                        <td><?php echo $item->tambang_l ?></td>
                                                        <td><?php echo $item->tambang_p ?></td>
                                                        <td><?php echo $item->tambang_jml ?></td>
                                                        <td><?php echo $item->industri_l ?></td>
                                                        <td><?php echo $item->industri_p ?></td>
                                                        <td><?php echo $item->industri_jml ?></td>
                                                        <td><?php echo $item->jasa_l ?></td>
                                                        <td><?php echo $item->jasa_p ?></td>
                                                        <td><?php echo $item->jasa_jml ?></td>
                                                        <td><?php echo $item->lainnya_l ?></td>
                                                        <td><?php echo $item->lainnya_p ?></td>
                                                        <td><?php echo $item->lainnya_jml ?></td>

                                                        <td><?php echo $item->status_dinsos ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-dinsos_sakit-nobd" role="tabpanel" aria-labelledby="v-pills-dinsos_sakit-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinsos_sakit" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Pria</th>
                                                    <th>Wanita</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($dinsos_sakit as $data) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->pria ?></td>
                                                        <td><?php echo $data->wanita ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-dinsos_dmp-nobd" role="tabpanel" aria-labelledby="v-pills-dinsos_dmp-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinsos_dmp" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="3">SD</th>
                                                    <th colspan="3">SLTP</th>
                                                    <th colspan="3">SLTA</th>
                                                    <th colspan="3">AKADEMI/PT</th>
                                                    <th rowspan="2">Status</th>


                                                </tr>
                                                <tr>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>

                                                </tr>


                                            </thead>
                                            <tbody>
                                                <?php foreach ($dinsos_dmp as $item) { ?>
                                                    <tr>
                                                        <td><?php echo $item->tahun ?></td>
                                                        <td><?php echo $item->sd_l ?></td>
                                                        <td><?php echo $item->sd_p ?></td>
                                                        <td><?php echo $item->sd_jml ?></td>
                                                        <td><?php echo $item->sltp_l ?></td>
                                                        <td><?php echo $item->sltp_p ?></td>
                                                        <td><?php echo $item->sltp_jml ?></td>
                                                        <td><?php echo $item->slta_l ?></td>
                                                        <td><?php echo $item->slta_p ?></td>
                                                        <td><?php echo $item->slta_jml ?></td>
                                                        <td><?php echo $item->pt_l ?></td>
                                                        <td><?php echo $item->pt_p ?></td>
                                                        <td><?php echo $item->pt_jml ?></td>
                                                        <td><?php echo $item->status_dinsos ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-dinsos_dma-nobd" role="tabpanel" aria-labelledby="v-pills-dinsos_dma-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinsos_dma" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="3">PERTANIAN</th>
                                                    <th colspan="3">PERTAMBANGAN</th>
                                                    <th colspan="3">INDUSTRI</th>
                                                    <th colspan="3">JASA</th>
                                                    <th colspan="3">LAINNYA</th>
                                                    <th rowspan="2">Status</th>


                                                </tr>
                                                <tr>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>

                                                </tr>


                                            </thead>
                                            <tbody>
                                                <?php foreach ($dinsos_dma as $item) { ?>
                                                    <tr>
                                                        <td><?php echo $item->tahun ?></td>
                                                        <td><?php echo $item->tani_l ?></td>
                                                        <td><?php echo $item->tani_p ?></td>
                                                        <td><?php echo $item->tani_jml ?></td>
                                                        <td><?php echo $item->tambang_l ?></td>
                                                        <td><?php echo $item->tambang_p ?></td>
                                                        <td><?php echo $item->tambang_jml ?></td>
                                                        <td><?php echo $item->industri_l ?></td>
                                                        <td><?php echo $item->industri_p ?></td>
                                                        <td><?php echo $item->industri_jml ?></td>
                                                        <td><?php echo $item->jasa_l ?></td>
                                                        <td><?php echo $item->jasa_p ?></td>
                                                        <td><?php echo $item->jasa_jml ?></td>
                                                        <td><?php echo $item->lainnya_l ?></td>
                                                        <td><?php echo $item->lainnya_p ?></td>
                                                        <td><?php echo $item->lainnya_jml ?></td>

                                                        <td><?php echo $item->status_dinsos ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-dinsos_jaj-nobd" role="tabpanel" aria-labelledby="v-pills-dinsos_jaj-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinsos_jaj" class="table table-bordered ">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Pria</th>
                                                    <th>Wanita</th>

                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($dinsos_jaj as $data) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->pria ?></td>
                                                        <td><?php echo $data->wanita ?></td>


                                                        <td>
                                                            <a href="<?php echo base_url('Backend/dinsos/edit_dinsos_jaj/' . $data->id_dinsos_jaj) ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </a>

                                                            <a href="<?php echo base_url('Backend/dinsos/delete_dinsos_jaj/' . $data->id_dinsos_jaj) ?>" class="btn btn-link btn-danger" data-original-title="Remove" data-toggle="tooltip">
                                                                <i class="fa fa-times"></i>
                                                            </a>



                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-dinsos_jta-nobd" role="tabpanel" aria-labelledby="v-pills-dinsos_jta-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinsos_jta" class="table table-bordered ">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Pria</th>
                                                    <th>Wanita</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($dinsos_jta as $data) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->pria ?></td>
                                                        <td><?php echo $data->wanita ?></td>


                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-dinsos_abk-nobd" role="tabpanel" aria-labelledby="v-pills-dinsos_abk-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinsos_abk" class="table table-bordered-bd-black ">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="3">PUSKESMAS</th>
                                                    <th colspan="3">RUMAH SAKIT</th>
                                                    <th colspan="3">KLINIK</th>
                                                    <th rowspan="2">Status</th>


                                                </tr>
                                                <tr>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>


                                                </tr>


                                            </thead>
                                            <tbody>
                                                <?php foreach ($dinsos_abk as $item) { ?>
                                                    <tr>
                                                        <td><?php echo $item->tahun ?></td>
                                                        <td><?php echo $item->puskesmas_l ?></td>
                                                        <td><?php echo $item->puskesmas_p ?></td>
                                                        <td><?php echo $item->puskesmas_jml ?></td>
                                                        <td><?php echo $item->rs_l ?></td>
                                                        <td><?php echo $item->rs_p ?></td>
                                                        <td><?php echo $item->rs_jml ?></td>
                                                        <td><?php echo $item->klinik_l ?></td>
                                                        <td><?php echo $item->klinik_p ?></td>
                                                        <td><?php echo $item->klinik_jml ?></td>
                                                        <td><?php echo $item->status_dinsos ?></td>

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