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
                        <h2 class="text-black pb-2 fw-bold">FORM EDIT Data Pemilik Akte Kelahiran Anak</h2>
                    </div>
                    <form action="<?php echo base_url() ?>Backend/disduk/update_akte/<?php echo $akte->id_akte_kelahiran ?>" method="post">

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
                            echo form_dropdown('tahun', $data, set_value('tahun', $akte->tahun), array('class' => 'form-control'));
                            ?>


                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6">
                                <div class="form-group form-group-default">
                                    <label>L(Punya)</label>
                                    <input name="l_punya" type="text" class="form-control" value="<?php echo $akte->l_punya ?>">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div class="form-group form-group-default">
                                    <label>P(Punya)</label>
                                    <input name="p_punya" type="text" class="form-control" value="<?php echo $akte->p_punya ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6">
                                <div class="form-group form-group-default">
                                    <label>L(Tidak)</label>
                                    <input name="l_tidak" type="text" class="form-control" value="<?php echo $akte->l_tidak ?>">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div class="form-group form-group-default">
                                    <label>P(Tidak)</label>
                                    <input name="p_tidak" type="text" class="form-control" value="<?php echo $akte->p_tidak ?>">
                                </div>
                            </div>
                        </div>



                        <a href="<?php echo base_url() ?>Backend/disduk/akte" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>

                    </form>



                </div>
            </div>


        </div>


    </div>
</div>