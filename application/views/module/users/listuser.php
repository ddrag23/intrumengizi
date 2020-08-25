        <div class="x_panel">
            <div class="btn btn-primary">
                <a href="<?= base_url('pasien/tambah'); ?>" class="fa fa-plus" style="color: blanchedalmond;"> TAMBAH USER</a>
            </div>
            <div class="x_title">
                <h2>Daftar User</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <!-- <th><input type="checkbox" onclick="checkAll(this)"></th> -->
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>role</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $no = 1;
                            foreach ($daftar_user as $u) {
                            ?>
                                <!-- <td><input type="checkbox" name=""></td> -->
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $u->nama ?></td>
                                <td><?php echo $u->email ?></td>
                                <td><?= $u->role ?></td>
                                <td>
                                <a href="<?= site_url('user/ubah/'.$u->id_user);?>" class="fa fa-info-circle btn btn-info"> Edit</a>
                                <a href="<?= site_url('user/hapus/'.$u->id_user);?>" class="fa fa-power-off btn btn-danger"> Hapus</a>
                                </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
