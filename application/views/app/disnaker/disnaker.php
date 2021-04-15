<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">DATA TERPILAH - DINAS KETENAGAKERJAAN</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="nav flex-column nav-pills nav-primary nav-pills-no-bd" id="v-pills-tab-without-border" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-tpak-tab-nobd" data-toggle="pill" href="#v-pills-tpak-nobd" role="tab" aria-controls="v-pills-tpak-nobd" aria-selected="true">Tingkat Partisipasi Angkatan Kerja (TPAK)</a>
                                <a class="nav-link" id="v-pills-kkm-tab-nobd" data-toggle="pill" href="#v-pills-kkm-nobd" role="tab" aria-controls="v-pills-kkm-nobd" aria-selected="false">Kepala Keluarga Miskin</a>
                                <a class="nav-link" id="v-pills-akad-tab-nobd" data-toggle="pill" href="#v-pills-akad-nobd" role="tab" aria-controls="v-pills-akad-nobd" aria-selected="false">Tenaga Kerja Migran Antar Kerja Antar Daerah (AKAD)</a>
                                <a class="nav-link" id="v-pills-akan-tab-nobd" data-toggle="pill" href="#v-pills-akan-nobd" role="tab" aria-controls="v-pills-akan-nobd" aria-selected="false">Tenaga Kerja Migran Antar Kerja Antar Negara (AKAN)</a>
                                <a class="nav-link" id="v-pills-formal-tab-nobd" data-toggle="pill" href="#v-pills-formal-nobd" role="tab" aria-controls="v-pills-formal-nobd" aria-selected="false">Pekerja Di Sektor Formal</a>
                                <a class="nav-link" id="v-pills-informal-tab-nobd" data-toggle="pill" href="#v-pills-informal-nobd" role="tab" aria-controls="v-pills-informal-nobd" aria-selected="false">Pekerja Di Sektor InFormal</a>
                                <a class="nav-link" id="v-pills-umk-tab-nobd" data-toggle="pill" href="#v-pills-umk-nobd" role="tab" aria-controls="v-pills-umk-nobd" aria-selected="false">Usaha Mikro dan Kecil (UMK)</a>
                                <a class="nav-link" id="v-pills-koperasi-tab-nobd" data-toggle="pill" href="#v-pills-koperasi-nobd" role="tab" aria-controls="v-pills-koperasi-nobd" aria-selected="false">KOPERASI</a>
                                <a class="nav-link" id="v-pills-kredit-tab-nobd" data-toggle="pill" href="#v-pills-kredit-nobd" role="tab" aria-controls="v-pills-kredit-nobd" aria-selected="false">KREDIT</a>
                                <a class="nav-link" id="v-pills-jpa-tab-nobd" data-toggle="pill" href="#v-pills-jpa-nobd" role="tab" aria-controls="v-pills-jpa-nobd" aria-selected="false">Jumlah Pekerja Anak </a>
                                <a class="nav-link" id="v-pills-jpata-tab-nobd" data-toggle="pill" href="#v-pills-jpata-nobd" role="tab" aria-controls="v-pills-jpata-nobd" aria-selected="false">Jumlah Pekerja Rumah Tangga Anak </a>
                                <a class="nav-link" id="v-pills-jsp-tab-nobd" data-toggle="pill" href="#v-pills-jsp-nobd" role="tab" aria-controls="v-pills-jsp-nobd" aria-selected="false">Daftar Jumlah Serikat Pekerja </a>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-content" id="v-pills-without-border-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-tpak-nobd" role="tabpanel" aria-labelledby="v-pills-tpak-tab-nobd">
                                    <div class="table-responsive">
                                        <table id="basic-datatables" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tahun</th>
                                                    <th>Laki-laki</th>
                                                    <th>Perempuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $num = 1;
                                                foreach ($tpak as $data) {
                                                    $status = $data->status;
                                                    if ($status) {
                                                        $result = '<span class="badge badge-primary">' . $status . '</span>';
                                                    } else {
                                                        $result = '<span class="badge badge-danger">Belum ada status</span>';
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $num++ ?></td>
                                                        <td><?php echo $data->tahun ?></td>
                                                        <td><?php echo $data->pria ?></td>
                                                        <td><?php echo $data->wanita ?></td>
                                                        <td><?php echo $data->jumlah ?></td>
                                                        <td><?php echo $result ?></td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="v-pills-kkm-nobd" role="tabpanel" aria-labelledby="v-pills-kkm-tab-nobd">
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-akad-nobd" role="tabpanel" aria-labelledby="v-pills-akad-tab-nobd">
                                    <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                                    <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-akan-nobd" role="tabpanel" aria-labelledby="v-pills-akan-tab-nobd">
                                    <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                                    <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-formal-nobd" role="tabpanel" aria-labelledby="v-pills-formal-tab-nobd">
                                    <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                                    <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-informal-nobd" role="tabpanel" aria-labelledby="v-pills-informal-tab-nobd">
                                    <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                                    <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-umk-nobd" role="tabpanel" aria-labelledby="v-pills-umk-tab-nobd">
                                    <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                                    <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-koperasi-nobd" role="tabpanel" aria-labelledby="v-pills-koperasi-tab-nobd">
                                    <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                                    <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-kredit-nobd" role="tabpanel" aria-labelledby="v-pills-kredit-tab-nobd">
                                    <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                                    <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-jpa-nobd" role="tabpanel" aria-labelledby="v-pills-jpa-tab-nobd">
                                    <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                                    <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-jpata-nobd" role="tabpanel" aria-labelledby="v-pills-jpata-tab-nobd">
                                    <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                                    <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-jsp-nobd" role="tabpanel" aria-labelledby="v-pills-jsp-tab-nobd">
                                    <p>Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

                                    <p> But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>