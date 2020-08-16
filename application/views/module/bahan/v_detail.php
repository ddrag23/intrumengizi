            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Default Example <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
            <div class="input-group m-auto" style="width: 50%;">
                <input type="numeric" name="bagi" id="bagi" class="form-control" placeholder="Masukkan angka">
                <span class="input-group-btn">
                    <div class="btn-group">
                        <a href="<?= site_url('bahan/detail/' . $this->uri->segment(3)); ?>" class="btn btn-success">Refresh</a>
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Hitung</button>
                    </div>
                </span>
            </div>


        <table class="table table-bordered ml-auto mr-auto mt-3" id="mytable" style="width: 50%;">
            <tr>
                <td>air</td>
                <td>:</td>
                <td><?= $row->air; ?></td>
            </tr>
            <tr>
                <td>energi</td>
                <td>:</td>
                <td><?= $row->energi; ?></td>
            </tr>
            <tr>
                <td>protein</td>
                <td>:</td>
                <td><?= $row->protein ?></td>
            </tr>
            <tr>
                <td>lemak</td>
                <td>:</td>
                <td><?= $row->lemak ?></td>
            </tr>
            <tr>
                <td>karbohidrat</td>
                <td>:</td>
                <td><?= $row->kh ?></td>
            </tr>
            <tr>
                <td>abu</td>
                <td>:</td>
                <td><?= $row->abu ?></td>
            </tr>
            <tr>
                <td>kalsium</td>
                <td>:</td>
                <td><?= $row->kalsium ?></td>
            </tr>
            <tr>
                <td>fosfor</td>
                <td>:</td>
                <td><?= $row->fosfor ?></td>
            </tr>
            <tr>
                <td>besi</td>
                <td>:</td>
                <td><?= $row->besi ?></td>
            </tr>
            <tr>
                <td>natrium</td>
                <td>:</td>
                <td><?= $row->natrium ?></td>
            </tr>
            <tr>
                <td>kalium</td>
                <td>:</td>
                <td><?= $row->kalium ?></td>
            </tr>
            <tr>
                <td>tembaga</td>
                <td>:</td>
                <td><?= $row->tembaga ?></td>
            </tr>
            <tr>
                <td>seng</td>
                <td>:</td>
                <td><?= $row->seng ?></td>
            </tr>
        </table>
    </div>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>


    <script>
        const array = ["2", "2", "2", "2", "2", "2", "2", "2", "2", "2", "2", "2", "2"];
        const btn = document.getElementById('submit');
        btn.addEventListener('click', function() {
            const submit = document.getElementById('bagi').value;
            for (let index = 0; index < array.length; index++) {
                const tb = document.getElementById('mytable').rows[index].cells.item(array[index]);
                tb.innerHTML *= submit / 100;
            }
        })
    </script>

