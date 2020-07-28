<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Perencanaan Menu Diet</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <!-- <th><input type="checkbox" onclick="checkAll(this)"></th> -->
                            <th data-priority="1">No</th>
                            <th data-priority="2">Kode</th>
                            <th>Nama bahan</th>
                            <th>Sumber</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $no = 1;
                            foreach ($semua_menu as $u) {
                            ?>
                                <!-- <td><input type="checkbox" name=""></td> -->
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $u->kode ?></td>
                                <td><?php echo $u->nama_bahan ?></td>
                                <td><?php echo $u->sumber_bahan ?></td>
                                <td><a href="<?= site_url('beranda/detail/' . $u->kode) ?>">detail</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <!-- <th><input type="checkbox" onclick="checkAll(this)"></th> -->
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama bahan</th>
                            <th>Sumber</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>