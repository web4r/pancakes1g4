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
                        <h2 class="text-black pb-2 fw-bold">FORM EDIT Data Penduduk Lansia Menurut Aktifitas</h2>
                    </div>
                    <form action="<?php echo base_url() ?>Backend/dinsos/update_dinsos_aktifitas/<?php echo $dinsos_aktifitas->id_dinsos_aktifitas ?>" method="post">

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
                            echo form_dropdown('tahun', $data, set_value('tahun', $dinsos_aktifitas->tahun), array('class' => 'form-control'));
                            ?>


                        </div>
                        <div class="form-group form-group-default">
                            <label>PERTANIAN</label>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>L</label>
                                        <input name="tani_l" type="number" class="form-control" value="<?php echo $dinsos_aktifitas->tani_l ?>">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>P</label>
                                        <input name="tani_p" type="number" class="form-control" value="<?php echo $dinsos_aktifitas->tani_p ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-default">
                            <label>PERTAMBANGAN</label>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>L</label>
                                        <input name="tambang_l" type="number" class="form-control" value="<?php echo $dinsos_aktifitas->tambang_l ?>">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>P</label>
                                        <input name="tambang_p" type="number" class="form-control" value="<?php echo $dinsos_aktifitas->tambang_p ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-default">
                            <label>INDUSTRI</label>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>L</label>
                                        <input name="industri_l" type="number" class="form-control" value="<?php echo $dinsos_aktifitas->industri_l ?>">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>P</label>
                                        <input name="industri_p" type="number" class="form-control" value="<?php echo $dinsos_aktifitas->industri_p ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-default">
                            <label>JASA</label>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>L</label>
                                        <input name="jasa_l" type="number" class="form-control" value="<?php echo $dinsos_aktifitas->jasa_l ?>">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>P</label>
                                        <input name="jasa_p" type="number" class="form-control" value="<?php echo $dinsos_aktifitas->jasa_p ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-group-default">
                            <label>LAINNYA</label>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>L</label>
                                        <input name="lainnya_l" type="number" class="form-control" value="<?php echo $dinsos_aktifitas->lainnya_l ?>">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>P</label>
                                        <input name="lainnya_p" type="number" class="form-control" value="<?php echo $dinsos_aktifitas->lainnya_p ?>">
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="form-group form-group-default">
                            <label>Status</label>
                            <input name="status_dinsos" type="text" class="form-control" value="<?php echo $dinsos_aktifitas->status_dinsos ?>">
                        </div>


                        <a href="<?php echo base_url() ?>Backend/dinsos/dinsos_aktifitas" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>

                    </form>



                </div>
            </div>


        </div>


    </div>
</div>