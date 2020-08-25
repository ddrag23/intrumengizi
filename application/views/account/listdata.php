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
                        <?php $no = 1; foreach ($menu as $m) :?>
                        <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $m->nama_lengkap ?></td>
                                <td><?php echo $m->alamat ?></td>
                                <td><?= $m->diagnosa_medis ?></td>
                                <td>
                                    <a href="" class="fa fa-power-off btn btn-danger">Edit</a>
                                    <a href="" class="fa fa-print btn btn-primary">Hapus</a>

                              <a href="<?=site_url('pasien/print/'.$m->id_menu);?>" class="fa fa-info-circle btn btn-info">Print</a>
                                </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
