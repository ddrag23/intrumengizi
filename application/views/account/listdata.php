        <div class="x_panel">
            <div class="x_title">
                <h2>Form Perencanaan Menu Diet</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <?php if ($this->session->flashdata('sukses')): ?>
                <div class="alert alert-success" role="alert">
                    <?= $this->session->flashdata('sukses');?>
                </div>
              <?php endif; ?>
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
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
                                <a href="<?= site_url('pasien/ubah/'.$m->id);?>" class="fa fa-power-off btn btn-primary"> Edit Pasien</a>
                                <a href="<?= site_url('menu/ubah/'.$m->id_menu);?>" class="fa fa-power-off btn btn-success"> Edit Menu</a>
                                    <a href="<?= site_url('menu/detail/'.$m->id_menu);?>" class="fa fa-eye btn btn-info"> Detail</a>
                                    <a href="<?=site_url('pasien/print/'.$m->id_menu);?>" class="fa fa-print btn btn-warning"> Print</a>
                                    <a href="#modal-hapus" class="fa fa-trash btn btn-danger" data-toggle="modal"> Hapus</a>
                                </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Yakin ingin menghapus data ?</h4>
      <form action="<?= site_url('menu/hapus')?>" method="post">
        <input type="hidden" name="id_menu" value="<?= $m->id_menu;?>">
        <input type="hidden" name="id" value="<?= $m->id;?>">
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="submit" class="btn btn-primary">Ya</button>
      </form>
      </div>
    </div>
  </div>
</div>
