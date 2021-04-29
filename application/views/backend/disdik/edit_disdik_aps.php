<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
    </div>
</div>

<div class="page-inner mt--5">
    <div class="row mt--2">



        <div class="col-lg-6 ml-auto mr-auto">

            <div class="card card-stats  card-round">
                <div class="card-body">
                    <div class="card-title">
                        <h2 class="text-black pb-2 fw-bold">FORM EDIT Angka Partisipasi Sekolah (APS) Menurut Kelompok Umur (7-12, 13-15 dan 16-18 tahun)</h2>
                    </div>
                    <form action="<?php echo base_url() ?>Backend/disdik/update_disdik_aps/<?php echo $disdik_aps->id_disdik_aps ?>" method="post">

                        <div class="form-group form-group-default">
                            <label>Tahun</label>

                            <?php

                            $data = array(
                                '2018' => '2018',
                                '2019' => '2019',
                                '2020' => '2020',
                                '2021' => '2021',
                                '2022' => '2022',
                                '2023' => '2023',
                                '2024' => '2024',
                                '2025' => '2025',



                            );
                            echo form_dropdown('tahun', $data, set_value('tahun', $disdik_aps->tahun), array('class' => 'form-control'));
                            ?>


                        </div>

                        <div class="form-group form-group-default">
                            <label>07 S/D 12 TAHUN</label>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>L</label>
                                        <input name="usia_12_l" type="number" class="form-control" value="<?php echo $disdik_aps->usia_12_l ?>">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>P</label>
                                        <input name="usia_12_p" type="number" class="form-control" value="<?php echo $disdik_aps->usia_12_l ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-default">
                            <label>13 S/D 15 TAHUN</label>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>L</label>
                                        <input name="usia_15_l" type="number" class="form-control" value="<?php echo $disdik_aps->usia_15_l ?>">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>P</label>
                                        <input name="usia_15_p" type="number" class="form-control" value="<?php echo $disdik_aps->usia_15_p ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-default">
                            <label>16 S/D 18 TAHUN</label>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>L</label>
                                        <input name="usia_18_l" type="number" class="form-control" value="<?php echo $disdik_aps->usia_18_l ?>">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>P</label>
                                        <input name="usia_18_p" type="number" class="form-control" value="<?php echo $disdik_aps->usia_18_p ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group-default">
                            <label>Status Pendidikan</label>
                            <input name="status_pendidikan" type="text" class="form-control" value="<?php echo $disdik_aps->status_pendidikan ?>">
                        </div>


                        <a href="<?php echo base_url() ?>Backend/disdik/disdik_aps" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>

                    </form>



                </div>
            </div>


        </div>


    </div>
</div>