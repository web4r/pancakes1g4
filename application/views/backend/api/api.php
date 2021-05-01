<div class="row mt-5">
    <div class="col-md-12">

        <div class="card full-height">
            <div class="card-body">
                <h2>Daftar List API SIGADIS</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-head-bg-info table-bordered-bd-info">
                        <thead>
                            <tr>

                                <th>Judul</th>
                                <th>Link API</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($api_list as $data) {

                                ?>
                                <tr>

                                    <td><?php echo $data->judul ?></td>
                                    <td><?php echo $data->api_link ?></td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>