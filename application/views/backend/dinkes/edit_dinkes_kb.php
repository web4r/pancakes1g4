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
                        <h2 class="text-black pb-2 fw-bold">FORM EDIT Keluarga Berencana</h2>
                    </div>
                    <form action="<?php echo base_url() ?>Backend/dinkes/update_dinkes_kb/<?php echo $dinkes_kb->id_dinkes_kb ?>" method="post">

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
                            echo form_dropdown('tahun', $data, set_value('tahun', $dinkes_kb->tahun), array('class' => 'form-control'));
                            ?>


                        </div>

                        <div class="form-group form-group-default">
                            <label>MOW
                            </label>
                            <input name="mow" type="text" class="form-control" value="<?php echo $dinkes_kb->mow ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>IUD
                            </label>
                            <input name="iud" type="text" class="form-control" value="<?php echo $dinkes_kb->iud ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>IMPLANT
                            </label>
                            <input name="implant" type="text" class="form-control" value="<?php echo $dinkes_kb->implant ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>SUNTIK
                            </label>
                            <input name="suntik" type="text" class="form-control" value="<?php echo $dinkes_kb->suntik ?>">
                        </div>

                        <div class="form-group form-group-default">
                            <label>PIL
                            </label>
                            <input name="pil" type="text" class="form-control" value="<?php echo $dinkes_kb->pil ?>">
                        </div>

                        <div class="form-group form-group-default">
                            <label>JUMLAH KBP
                            </label>
                            <input name="jumlahkbp" type="text" class="form-control" value="<?php echo $dinkes_kb->jumlahkbp ?>">
                        </div>

                        <div class="form-group form-group-default">
                            <label>MOP
                            </label>
                            <input name="mop" type="text" class="form-control" value="<?php echo $dinkes_kb->mop ?>">
                        </div>

                        <div class="form-group form-group-default">
                            <label>KONDOM
                            </label>
                            <input name="kondom" type="text" class="form-control" value="<?php echo $dinkes_kb->kondom ?>">
                        </div>

                        <div class="form-group form-group-default">
                            <label>JUMLAH KBL
                            </label>
                            <input name="jumlahkbl" type="text" class="form-control" value="<?php echo $dinkes_kb->jumlahkbl ?>">
                        </div>

                        <div class="form-group form-group-default">
                            <label>Status</label>
                            <input name="status_dinkes" type="text" class="form-control" value="<?php echo $dinkes_kb->status_dinkes ?>">
                        </div>


                        <a href="<?php echo base_url() ?>Backend/dinkes/dinkes_kb" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>

                    </form>



                </div>
            </div>


        </div>


    </div>
</div>