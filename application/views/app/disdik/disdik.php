<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">DATA TERPILAH - DINAS PENDIDIKAN</h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-2">
                            <div class="nav flex-column nav-pills nav-primary nav-pills" id="v-pills-tab-without-border" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-disdik_apk-tab-nobd" data-toggle="pill" href="#v-pills-disdik_apk-nobd" role="tab" aria-controls="v-pills-disdik_apk-nobd" aria-selected="true">Angka Partisipasi Kasar (APK) Menurut Jenjang Pendidikan SD, SLTP dan SLTA</a>
                                <a class="nav-link" id="v-pills-disdik_aps-tab-nobd" data-toggle="pill" href="#v-pills-disdik_aps-nobd" role="tab" aria-controls="v-pills-disdik_aps-nobd" aria-selected="false">Angka Partisipasi Sekolah (APS) Menurut Kelompok Umur (7-12, 13-15 dan 16-18 tahun)</a>
                                <a class="nav-link" id="v-pills-disdik_apm-tab-nobd" data-toggle="pill" href="#v-pills-disdik_apm-nobd" role="tab" aria-controls="v-pills-disdik_apm-nobd" aria-selected="false">Angka Partisipasi Murni (APM) Menurut Jenjang Pendidikan SD, SLTP Dan SLTA</a>
                                <a class="nav-link" id="v-pills-disdik_jenjang-tab-nobd" data-toggle="pill" href="#v-pills-disdik_jenjang-nobd" role="tab" aria-controls="v-pills-disdik_jenjang-nobd" aria-selected="false">Angka Putus Sekolah Menurut Jenjang Pendidikan SD, SLTP Dan SLTA </a>
                                <a class="nav-link" id="v-pills-disdik_sekolah-tab-nobd" data-toggle="pill" href="#v-pills-disdik_sekolah-nobd" role="tab" aria-controls="v-pills-disdik_sekolah-nobd" aria-selected="false">Rata-Rata Lama Sekolah </a>
                                <a class="nav-link" id="v-pills-disdik_sertifikat-tab-nobd" data-toggle="pill" href="#v-pills-disdik_sertifikat-nobd" role="tab" aria-controls="v-pills-disdik_sertifikat-nobd" aria-selected="false">Angka Sertifikat Guru SD, SLTP Dan SLTA</a>
                                <a class="nav-link" id="v-pills-disdik_paket-tab-nobd" data-toggle="pill" href="#v-pills-disdik_paket-nobd" role="tab" aria-controls="v-pills-disdik_paket-nobd" aria-selected="false">Angka Lulus Paket SD, SLTP Dan SLTA</a>
                                <a class="nav-link" id="v-pills-disdik_pt-tab-nobd" data-toggle="pill" href="#v-pills-disdik_pt-nobd" role="tab" aria-controls="v-pills-disdik_pt-nobd" aria-selected="false">Angka Data Pendididkan Beasiswa SLTA dan Perguruan Tinggi </a>


                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content" id="v-pills-without-border-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-disdik_apk-nobd" role="tabpanel" aria-labelledby="v-pills-disdik_apk-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="disdik_apk" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="3">SD</th>
                                                    <th colspan="3">SLTP</th>
                                                    <th colspan="3">SLTA</th>
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
                                                <?php foreach ($disdik_apk as $item) { ?>
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
                                                        <td><?php echo $item->status_pendidikan ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="v-pills-disdik_aps-nobd" role="tabpanel" aria-labelledby="v-pills-disdik_aps-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="disdik_aps" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>

                                                    <th colspan="3">07 S/D 12 TAHUN</th>
                                                    <th colspan="3">13 S/D 15 TAHUN</th>
                                                    <th colspan="3">16 S/D 18 TAHUN</th>
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
                                                <?php foreach ($disdik_aps as $item) { ?>
                                                    <tr>
                                                        <td><?php echo $item->tahun ?></td>

                                                        <td><?php echo $item->usia_12_l ?></td>
                                                        <td><?php echo $item->usia_12_p ?></td>
                                                        <td><?php echo $item->usia_12_jml ?></td>
                                                        <td><?php echo $item->usia_15_l ?></td>
                                                        <td><?php echo $item->usia_15_p ?></td>
                                                        <td><?php echo $item->usia_15_jml ?></td>
                                                        <td><?php echo $item->usia_18_l ?></td>
                                                        <td><?php echo $item->usia_18_p ?></td>
                                                        <td><?php echo $item->usia_18_jml ?></td>
                                                        <td><?php echo $item->status_pendidikan ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-disdik_apm-nobd" role="tabpanel" aria-labelledby="v-pills-disdik_apm-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="disdik_apm" class=" table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="3">SD</th>
                                                    <th colspan="3">SLTP</th>
                                                    <th colspan="3">SLTA</th>
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
                                                <?php foreach ($disdik_apm as $item) { ?>
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
                                                        <td><?php echo $item->status_pendidikan ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-disdik_jenjang-nobd" role="tabpanel" aria-labelledby="v-pills-disdik_jenjang-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="disdik_jenjang" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="3">SD</th>
                                                    <th colspan="3">SLTP</th>
                                                    <th colspan="3">SLTA</th>
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
                                                <?php foreach ($disdik_jenjang as $item) { ?>
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
                                                        <td><?php echo $item->status_pendidikan ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-disdik_sekolah-nobd" role="tabpanel" aria-labelledby="v-pills-disdik_sekolah-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="disdik_sekolah" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Pria</th>
                                                    <th>Wanita</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($disdik_sekolah as $data) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->pria ?></td>
                                                        <td><?php echo $data->wanita ?></td>
                                                        <td><?php echo $data->status_pendidikan ?></td>



                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-disdik_sertifikat-nobd" role="tabpanel" aria-labelledby="v-pills-disdik_sertifikat-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="disdik_sertifikat" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="3">SD</th>
                                                    <th colspan="3">SLTP</th>
                                                    <th colspan="3">SLTA</th>
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
                                                <?php foreach ($disdik_sertifikat as $item) { ?>
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
                                                        <td><?php echo $item->status_pendidikan ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-disdik_paket-nobd" role="tabpanel" aria-labelledby="v-pills-disdik_paket-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="disdik_paket" class="table table-bordered ">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="3">PAKET A</th>
                                                    <th colspan="3">PAKET B</th>
                                                    <th colspan="3">PAKET C</th>
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
                                                <?php foreach ($disdik_paket as $item) { ?>
                                                    <tr>
                                                        <td><?php echo $item->tahun ?></td>
                                                        <td><?php echo $item->paket_a_l ?></td>
                                                        <td><?php echo $item->paket_a_p ?></td>
                                                        <td><?php echo $item->paket_a_jml ?></td>
                                                        <td><?php echo $item->paket_b_l ?></td>
                                                        <td><?php echo $item->paket_b_p ?></td>
                                                        <td><?php echo $item->paket_b_jml ?></td>
                                                        <td><?php echo $item->paket_c_l ?></td>
                                                        <td><?php echo $item->paket_c_p ?></td>
                                                        <td><?php echo $item->paket_c_jml ?></td>
                                                        <td><?php echo $item->status_pendidikan ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-disdik_pt-nobd" role="tabpanel" aria-labelledby="v-pills-disdik_pt-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="disdik_pt" class="table table-bordered ">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="3">SMA</th>
                                                    <th colspan="3">PERGURUAN TINGGI</th>
                                                    <th rowspan="2">Status</th>


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