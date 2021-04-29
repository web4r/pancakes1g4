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
                        <h2 class="text-black pb-2 fw-bold">FORM EDIT Jumlah Kematian Ibu Melahirkan</h2>
                    </div>
                    <form action="<?php echo base_url() ?>Backend/dinkes/update_dinkes_kim/<?php echo $dinkes_kim->id_dinkes_kim ?>" method="post">

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
                            echo form_dropdown('tahun', $data, set_value('tahun', $dinkes_kim->tahun), array('class' => 'form-control'));
                            ?>


                        </div>
                        <div class="form-group form-group-default">
                            <label>Jumlah Kematian Ibu</label>
                            <input name="jumlah" type="text" class="form-control" value="<?php echo $dinkes_kim->jumlah ?>">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Status</label>
                            <input name="status_dinkes" type="text" class="form-control" value="<?php echo $dinkes_kim->status_dinkes ?>">
                        </div>




                        <a href="<?php echo base_url() ?>Backend/dinkes/dinkes_kim" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>

                    </form>



                </div>
            </div>


        </div>


    </div>
</div>