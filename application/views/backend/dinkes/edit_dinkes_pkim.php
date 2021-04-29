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
                        <h2 class="text-black pb-2 fw-bold">FORM EDIT Penyebab Kematian Ibu Melahirkan</h2>
                    </div>
                    <form action="<?php echo base_url() ?>Backend/dinkes/update_dinkes_pkim/<?php echo $dinkes_pkim->id_dinkes_pkim ?>" method="post">

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
                            echo form_dropdown('tahun', $data, set_value('tahun', $dinkes_pkim->tahun), array('class' => 'form-control'));
                            ?>


                        </div>

                        <div class="form-group form-group-default">
                            <label>Eklamsia
                                %
                            </label>
                            <input name="eklamsia" type="text" class="form-control" value="<?php echo $dinkes_pkim->eklamsia ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Infeksi
                                %
                            </label>
                            <input name="infeksi" type="text" class="form-control" value="<?php echo $dinkes_pkim->infeksi ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Abortus
                                %
                            </label>
                            <input name="abortus" type="text" class="form-control" value="<?php echo $dinkes_pkim->abortus ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>P. Lama/MAcet
                                %
                            </label>
                            <input name="plama" type="text" class="form-control" value="<?php echo $dinkes_pkim->plama ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Emboli Obstetri
                                %
                            </label>
                            <input name="emboli" type="text" class="form-control" value="<?php echo $dinkes_pkim->emboli ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Kompl Masa Pueureum
                                %
                            </label>
                            <input name="komp" type="text" class="form-control" value="<?php echo $dinkes_pkim->komp ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Lain-Lain
                                %
                            </label>
                            <input name="lain_lain" type="text" class="form-control" value="<?php echo $dinkes_pkim->lain_lain ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Pendarahan
                                %
                            </label>
                            <input name="pendarahan" type="text" class="form-control" value="<?php echo $dinkes_pkim->pendarahan ?>">
                        </div>


                        <div class="form-group form-group-default">
                            <label>Status</label>
                            <input name="status_dinkes" type="text" class="form-control" value="<?php echo $dinkes_pkim->status_dinkes ?>">
                        </div>


                        <a href="<?php echo base_url() ?>Backend/dinkes/dinkes_pkim" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>

                    </form>



                </div>
            </div>


        </div>


    </div>
</div>