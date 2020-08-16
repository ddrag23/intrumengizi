        <div class="x_panel">
            <div class="x_title">
                <h2>Form Perencanaan Menu Diet</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Diagnosa medis</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $no = 1;
                            foreach ($pasien_gizi as $u) {
                            ?>
                                <!-- <td><input type="checkbox" name=""></td> -->
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $u->nama_lengkap ?></td>
                                <td><?php echo $u->alamat ?></td>
                                <td><?= $u->diagnosa_medis ?></td>
                                <td>
                                    <a href="" class="fa fa-power-off btn btn-danger"> Hapus</a>
                                    <a href="" class="fa fa-print btn btn-primary"> Print</a>
                                    <a href="" class="fa fa-info-circle btn btn-info"> Edit</a>
                                </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
