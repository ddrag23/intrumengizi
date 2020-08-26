<style>
</style>
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Perencanaan Menu Diet</h2>
									<ul class="nav navbar-right panel_toolbox">
                  <li><a class="badge badge-primary text-white" href="<?= site_url('pasien');?>"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </li>
                  <li><a class="badge badge-primary ml-2 text-white" href="<?= site_url('menu/edit/'.$this->uri->segment(3));?>"><i class="fa fa-pencil"></i> Edit</a>
										</li>
									</ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <table class="table">
              <tr>
                <th colspan="3" style="text-align:center;" scope="row">Identitas</th>
              </tr>
              <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $row->nama_lengkap;?></td>
              </tr>
              <tr>
                <td>Usia</td>
                <td>:</td>
                <td><?= $row->usia;?></td>
              </tr>
              <tr>
                <td>Tinggi Badan</td>
                <td>:</td>
                <td><?= $row->tinggi_badan;?></td>
              </tr>
              <tr>
                <td>Berat Badan</td>
                <td>:</td>
                <td><?= $row->jenis_kelamin;?></td>
              </tr>
              <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= $row->pekerjaan;?></td>
              </tr>
              <tr>
                <td>Diagnosa Medis</td>
                <td>:</td>
                <td><?= $row->diagnosa_medis;?></td>
              </tr>
              <tr>
                <th colspan="3" style="text-align:center;" scope="row">Rincian Menu Harianku</th>
              </tr>
              <tr>
                <td>Karbohidrat</td>
                <td>:</td>
                <td><?= $row->energi;?></td>
              </tr>
              <tr>
                <td>Lemak</td>
                <td>:</td>
                <td><?= $row->lemak;?></td>
              </tr>
              <tr>
                <td>Protein</td>
                <td>:</td>
                <td><?= $row->protein;?></td>
              </tr>
              <tr>
                <td>Energi</td>
                <td>:</td>
                <td><?= $row->energi;?></td>
              </tr>
              <tr>
                <td></td>
              </tr>
            </table>
        </div>

          <p class="text-center" style="color: black;text-transform: capitalize; font-size: 14px;"><b>Pemenuhan Gizi</b></p>
        <div class="col-md-12 col-sm-12 col-xs-12 mt-3">
            <table class="table">
                <tr>
                    <td rowspan="2">Menu</td>
                    <td rowspan="2">Bahan</td>
                    <td colspan="5" style="text-align: center;">Kandungan Zat Gizi</td>
                </tr>
                <tr>
                    <td>Berat(gram)</td>
                    <td>Karbohidrat(gram)</td>
                    <td>lemak(gram)</td>
                    <td>Protein(gram)</td>
                    <td>Energi(kkal)</td>
                </tr>
                  <?php foreach ($menu as $value): ?>
                  <tr>
                      <td><?=$value['menu'];?></td>
                      <td><?=$value['bahan'];?></td>
                      <td><?=$value['berat'];?></td>
                      <td><?=$value['energi'];?></td>
                      <td><?=$value['karbohidrat'];?></td>
                      <td><?=$value['protein'];?></td>
                      <td><?=$value['lemak'];?></td>
                  </tr>
                  <?php endforeach; ?>
                <tr>
                    <td colspan="3">Total Energi dan Zat Gizi</td>
                    <td><?= $total['kh'];?></td>
                    <td><?= $total['lemak'];?></td>
                    <td><?= $total['protein'];?></td>
                    <td><?= $total['energi'];?></td>
                </tr>
                <tr>
                    <td colspan="3">Total Kebutuhan</td>
                    <td><?= $row->karbohidrat;?></td>
                    <td><?= $row->lemak;?></td>
                    <td><?= $row->protein;?></td>
                    <td><?= $row->energi;?></td>
                </tr>
                <tr>
                    <td colspan="3">%Pemenuhan</td>
                    <td><?= $pemenuhanGizi['totalKh'];?>%</td>
                    <td><?= $pemenuhanGizi['totalLemak'];?>%</td>
                    <td><?= $pemenuhanGizi['totalProtein'];?>%</td>
                    <td><?= $pemenuhanGizi['totalEnergi'];?>%</td>
                </tr>
            </table>
        </div>

</div>
</div>
