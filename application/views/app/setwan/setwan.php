<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">DATA TERPILAH - DATAB BIDANG POLITIK (SETWAN)</h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-2">
                            <div class="nav flex-column nav-pills nav-primary nav-pills" id="v-pills-tab-without-border" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-partai-tab-nobd" data-toggle="pill" href="#v-pills-partai-nobd" role="tab" aria-controls="v-pills-partai-nobd" aria-selected="true">Angka DPR-RI Menurut Partai</a>
                                <a class="nav-link" id="v-pills-komisi-tab-nobd" data-toggle="pill" href="#v-pills-komisi-nobd" role="tab" aria-controls="v-pills-komisi-nobd" aria-selected="false">Angka DPR-RI Menurut Komisi</a>
                                <a class="nav-link" id="v-pills-prov_partai-tab-nobd" data-toggle="pill" href="#v-pills-prov_partai-nobd" role="tab" aria-controls="v-pills-prov_partai-nobd" aria-selected="false">Angka DPRD Provinsi Menurut Partai</a>
                                <a class="nav-link" id="v-pills-prov_komisi-tab-nobd" data-toggle="pill" href="#v-pills-prov_komisi-nobd" role="tab" aria-controls="v-pills-prov_komisi-nobd" aria-selected="false">Angka DPRD Provinsi Menurut Komisi</a>
                                <a class="nav-link" id="v-pills-kab_partai-tab-nobd" data-toggle="pill" href="#v-pills-kab_partai-nobd" role="tab" aria-controls="v-pills-kab_partai-nobd" aria-selected="false">Angka DPRD Kabupaten Menurut Partai</a>
                                <a class="nav-link" id="v-pills-kab_komisi-tab-nobd" data-toggle="pill" href="#v-pills-kab_komisi-nobd" role="tab" aria-controls="v-pills-kab_komisi-nobd" aria-selected="false"> Angka DPRD Kabupaten Menurut Komisi</a>


                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content" id="v-pills-without-border-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-partai-nobd" role="tabpanel" aria-labelledby="v-pills-partai-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="partai" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Partai</th>
                                                    <th>Pria</th>
                                                    <th>Wanita</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($partai as $data) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->partai ?></td>
                                                        <td><?php echo $data->pria ?></td>
                                                        <td><?php echo $data->wanita ?></td>


                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="v-pills-komisi-nobd" role="tabpanel" aria-labelledby="v-pills-komisi-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="komisi" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Partai</th>
                                                    <th>Pria</th>
                                                    <th>Wanita</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($komisi as $data) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->partai ?></td>
                                                        <td><?php echo $data->pria ?></td>
                                                        <td><?php echo $data->wanita ?></td>



                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>



                                <div class="tab-pane fade" id="v-pills-prov_partai-nobd" role="tabpanel" aria-labelledby="v-pills-prov_partai-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="prov_partai" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Partai</th>
                                                    <th>Pria</th>
                                                    <th>Wanita</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($prov_partai as $data) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->partai ?></td>
                                                        <td><?php echo $data->pria ?></td>
                                                        <td><?php echo $data->wanita ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-prov_komisi-nobd" role="tabpanel" aria-labelledby="v-pills-prov_komisi-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="prov_komisi" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Partai</th>
                                                    <th>Pria</th>
                                                    <th>Wanita</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($prov_komisi as $data) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->partai ?></td>
                                                        <td><?php echo $data->pria ?></td>
                                                        <td><?php echo $data->wanita ?></td>


                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-kab_partai-nobd" role="tabpanel" aria-labelledby="v-pills-kab_partai-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="kab_partai" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Partai</th>
                                                    <th>Pria</th>
                                                    <th>Wanita</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($kab_partai as $data) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->partai ?></td>
                                                        <td><?php echo $data->pria ?></td>
                                                        <td><?php echo $data->wanita ?></td>


                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-kab_komisi-nobd" role="tabpanel" aria-labelledby="v-pills-kab_komisi-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="kab_komisi" class="table table-bordered-bd-black">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Partai</th>
                                                    <th>Pria</th>
                                                    <th>Wanita</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($kab_komisi as $data) {

                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->partai ?></td>
                                                        <td><?php echo $data->pria ?></td>
                                                        <td><?php echo $data->wanita ?></td>

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