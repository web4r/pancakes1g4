<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">DATA TERPILAH - DINAS KESEHATAN</h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-2">
                            <div class="nav flex-column nav-pills nav-primary nav-pills" id="v-pills-tab-without-border" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-dinkes_ahp-tab-nobd" data-toggle="pill" href="#v-pills-dinkes_ahp-nobd" role="tab" aria-controls="v-pills-dinkes_ahp-nobd" aria-selected="true">Angka Harapan Hidup</a>
                                <a class="nav-link" id="v-pills-dinkes_kim-tab-nobd" data-toggle="pill" href="#v-pills-dinkes_kim-nobd" role="tab" aria-controls="v-pills-dinkes_kim-nobd" aria-selected="false">Jumlah Kematian Ibu Melahirkan</a>
                                <a class="nav-link" id="v-pills-dinkes_pkim-tab-nobd" data-toggle="pill" href="#v-pills-dinkes_pkim-nobd" role="tab" aria-controls="v-pills-dinkes_pkim-nobd" aria-selected="false">Penyebab Kematian Ibu Melahirkan</a>
                                <a class="nav-link" id="v-pills-dinkes_cpp-tab-nobd" data-toggle="pill" href="#v-pills-dinkes_cpp-nobd" role="tab" aria-controls="v-pills-dinkes_cpp-nobd" aria-selected="false">Cakupan Pertolongan Persalinan </a>
                                <a class="nav-link" id="v-pills-dinkes_kih-tab-nobd" data-toggle="pill" href="#v-pills-dinkes_kih-nobd" role="tab" aria-controls="v-pills-dinkes_kih-nobd" aria-selected="false">Kunjungan Ibu Hamil (K1/K4) </a>
                                <a class="nav-link" id="v-pills-dinkes_tetanus-tab-nobd" data-toggle="pill" href="#v-pills-dinkes_tetanus-nobd" role="tab" aria-controls="v-pills-dinkes_tetanus-nobd" aria-selected="false">Imunisasi Tetanus</a>
                                <a class="nav-link" id="v-pills-dinkes_zat-tab-nobd" data-toggle="pill" href="#v-pills-dinkes_zat-nobd" role="tab" aria-controls="v-pills-dinkes_zat-nobd" aria-selected="false">Pemberian Zat Besi</a>
                                <a class="nav-link" id="v-pills-dinkes_kb-tab-nobd" data-toggle="pill" href="#v-pills-dinkes_kb-nobd" role="tab" aria-controls="v-pills-dinkes_kb-nobd" aria-selected="false">Keluarga Berencana </a>
                                <a class="nav-link" id="v-pills-dinkes_napza-tab-nobd" data-toggle="pill" href="#v-pills-dinkes_napza-nobd" role="tab" aria-controls="v-pills-dinkes_napza-nobd" aria-selected="false">NAPZA</a>

                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content" id="v-pills-without-border-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-dinkes_ahp-nobd" role="tabpanel" aria-labelledby="v-pills-dinkes_ahp-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinkes_ahp" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Angka Harapan Hidup</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($dinkes_ahp as $data) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->ahp ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="v-pills-dinkes_kim-nobd" role="tabpanel" aria-labelledby="v-pills-dinkes_kim-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinkes_kim" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Jumlah Kematian Ibu</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($dinkes_kim as $data) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->jumlah ?></td>
                                                        <td><?php echo $data->status_dinkes ?></td>


                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-dinkes_pkim-nobd" role="tabpanel" aria-labelledby="v-pills-dinsos_aktifitas-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinkes_pkim" class=" table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="8" class="text-center">Jumlah Kematian Ibu</th>
                                                    <th rowspan="2">Status</th>


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

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-dinkes_cpp-nobd" role="tabpanel" aria-labelledby="v-pills-dinkes_cpp-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinkes_cpp" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="4" class="text-center">Penolong Persalinan</th>
                                                    <th rowspan="2">Status</th>


                                                </tr>
                                                <tr>
                                                    <th>Dokter
                                                        %

                                                    </th>
                                                    <th>Bidan
                                                        %

                                                    </th>
                                                    <th>Dukun
                                                        %

                                                    </th>
                                                    <th>Lainnya
                                                        %

                                                    </th>



                                                </tr>


                                            </thead>
                                            <tbody>
                                                <?php foreach ($dinkes_cpp as $item) { ?>
                                                    <tr>
                                                        <td><?php echo $item->tahun ?></td>
                                                        <td><?php echo $item->dokter ?></td>
                                                        <td><?php echo $item->bidan ?></td>
                                                        <td><?php echo $item->dukun ?></td>
                                                        <td><?php echo $item->lainnya ?></td>
                                                        <td><?php echo $item->status_dinkes ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-dinkes_kih-nobd" role="tabpanel" aria-labelledby="v-pills-dinkes_kih-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinkes_kih" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="2" class="text-center">Jumlah Kunjungan</th>
                                                    <th rowspan="2">Status</th>


                                                </tr>
                                                <tr>
                                                    <th>K1

                                                    </th>
                                                    <th>K4
                                                    </th>


                                                </tr>


                                            </thead>
                                            <tbody>
                                                <?php foreach ($dinkes_kih as $item) { ?>
                                                    <tr>
                                                        <td><?php echo $item->tahun ?></td>
                                                        <td><?php echo $item->k1 ?></td>
                                                        <td><?php echo $item->k4 ?></td>

                                                        <td><?php echo $item->status_dinkes ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-dinkes_tetanus-nobd" role="tabpanel" aria-labelledby="v-pills-dinkes_tetanus-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinkes_tetanus" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Jumlah Kematian Ibu</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($dinkes_tetanus as $data) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->jumlah ?></td>
                                                        <td><?php echo $data->status_dinkes ?></td>

                                                        <td>
                                                            <a href="<?php echo base_url('Backend/dinkes/edit_dinkes_tetanus/' . $data->id_dinkes_tetanus) ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </a>

                                                            <a href="<?php echo base_url('Backend/dinkes/delete_dinkes_tetanus/' . $data->id_dinkes_tetanus) ?>" class="btn btn-link btn-danger" data-original-title="Remove" data-toggle="tooltip">
                                                                <i class="fa fa-times"></i>
                                                            </a>



                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-dinkes_zat-nobd" role="tabpanel" aria-labelledby="v-pills-dinkes_zat-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinkes_zat" class="table table-bordered ">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="2" class="text-center">Jumlah Kunjungan</th>
                                                    <th rowspan="2">Status</th>
                                                    <th rowspan="2">Action</th>

                                                </tr>
                                                <tr>
                                                    <th>FE1

                                                    </th>
                                                    <th>FE3
                                                    </th>


                                                </tr>


                                            </thead>
                                            <tbody>
                                                <?php foreach ($dinkes_zat as $item) { ?>
                                                    <tr>
                                                        <td><?php echo $item->tahun ?></td>
                                                        <td><?php echo $item->fe1 ?></td>
                                                        <td><?php echo $item->fe3 ?></td>

                                                        <td><?php echo $item->status_dinkes ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url('Backend/dinkes/edit_dinkes_zat/' . $item->id_dinkes_zat) ?>" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </a>

                                                            <a href="<?php echo base_url('Backend/dinkes/delete_dinkes_zat/' . $item->id_dinkes_zat) ?>" class="btn btn-link btn-danger" data-original-title="Remove" data-toggle="tooltip">
                                                                <i class="fa fa-times"></i>
                                                            </a>



                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-dinkes_kb-nobd" role="tabpanel" aria-labelledby="v-pills-dinkes_kb-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinkes_kb" class="table table-bordered ">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="9" class="text-center">Jumlah Kunjungan</th>
                                                    <th rowspan="2">Status</th>


                                                </tr>
                                                <tr>
                                                    <th>MOW

                                                    </th>
                                                    <th>IUD

                                                    </th>
                                                    <th>IMPLANT

                                                    </th>
                                                    <th>SUNTIK

                                                    </th>
                                                    <th>PIL

                                                    </th>
                                                    <th>JUMLAH KBP

                                                    </th>

                                                    <th>MOP
                                                    </th>
                                                    <th>KONDOM

                                                    </th>
                                                    <th>JUMLAH KBL

                                                    </th>



                                                </tr>


                                            </thead>
                                            <tbody>
                                                <?php foreach ($dinkes_kb as $item) { ?>
                                                    <tr>
                                                        <td><?php echo $item->tahun ?></td>
                                                        <td><?php echo $item->mow ?></td>
                                                        <td><?php echo $item->iud ?></td>
                                                        <td><?php echo $item->implant ?></td>
                                                        <td><?php echo $item->suntik ?></td>
                                                        <td><?php echo $item->pil ?></td>
                                                        <td><?php echo $item->jumlahkbp ?></td>
                                                        <td><?php echo $item->mop ?></td>
                                                        <td><?php echo $item->kondom ?></td>
                                                        <td><?php echo $item->jumlahkbl ?></td>
                                                        <td><?php echo $item->status_dinkes ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-dinkes_napza-nobd" role="tabpanel" aria-labelledby="v-pills-dinkes_napza-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="dinkes_napza" class="table table-bordered-bd-black ">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">#</th>
                                                    <th rowspan="2">Tahun</th>
                                                    <th colspan="2">Jumlah Kunjungan</th>
                                                    <th rowspan="2">Status</th>


                                                <tr>
                                                    <th>Laki-Laki</th>
                                                    <th>Perempuan</th>
                                                </tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($dinkes_napza as $data) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->pria ?></td>
                                                        <td><?php echo $data->wanita ?></td>
                                                        <td><?php echo $data->status_dinkes ?></td>

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