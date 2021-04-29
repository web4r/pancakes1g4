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
                        <h2 class="text-black pb-2 fw-bold">FORM EDIT Cakupan Pertolongan Persalinan</h2>
                    </div>
                    <form action="<?php echo base_url() ?>Backend/dinkes/update_dinkes_cpp/<?php echo $dinkes_cpp->id_dinkes_cpp ?>" method="post">

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
                            echo form_dropdown('tahun', $data, set_value('tahun', $dinkes_cpp->tahun), array('class' => 'form-control'));
                            ?>


                        </div>

                        <div class="form-group form-group-default">
                            <label>Dokter
                                %
                            </label>
                            <input name="dokter" type="text" class="form-control" value="<?php echo $dinkes_cpp->dokter ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Bidan
                                %
                            </label>
                            <input name="bidan" type="text" class="form-control" value="<?php echo $dinkes_cpp->bidan ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Dukun
                                %
                            </label>
                            <input name="dukun" type="text" class="form-control" value="<?php echo $dinkes_cpp->dukun ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Lainnya
                                %
                            </label>
                            <input name="lainnya" type="text" class="form-control" value="<?php echo $dinkes_cpp->lainnya ?>">
                        </div>

                        <div class="form-group form-group-default">
                            <label>Status</label>
                            <input name="status_dinkes" type="text" class="form-control" value="<?php echo $dinkes_cpp->status_dinkes ?>">
                        </div>


                        <a href="<?php echo base_url() ?>Backend/dinkes/dinkes_cpp" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>

                    </form>



                </div>
            </div>


        </div>


    </div>
</div>