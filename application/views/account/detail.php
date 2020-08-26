<html>

<head>
    <title>Daftar Bahan Makanan</title>
    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/gentelella/');?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <!-- Custom Theme Style -->
    <style>
        h4{
            text-align: center;
            text-transform: uppercase;
        }
        h5{
          text-align: center;
          text-transform: capitalize;
        }
        p{
          text-align: center;
        }
        .navbar-brand, .nav-item{
          color: white !important;
          text-transform: uppercase;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container">

        <a class="navbar-brand">Instrumen Teknologi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="<?= base_url('beranda'); ?>">Home <span class="sr-only">(current)</span></a>
            </div>
        </div>

      </div>
    </nav>
    <div class="container">
      <div class="title mt-5">
        <h4>Kandungan Dari Bahan Makanan</h4>
         <h5><?= $row->nama_bahan; ?></h5>
        <p>Berat yang dimiliki dari <?= $row->nama_bahan ?>adalah 100 gram,
            Jika ingin mengetahui kandungan gizi kurang dari 100 gram bisa memasukan angka yang diinginkan</p>
      </div>
        <div class="row">

            <div class="input-group m-auto" style="width: 50%;">
                <input type="numeric" name="bagi" id="bagi" class="form-control" placeholder="Masukkan angka">
                <span class="input-group-btn">
                    <div class="btn-group">
                        <a href="<?= site_url('beranda/detail/' . $this->uri->segment(3)); ?>" class="btn btn-success">Refresh</a>
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Hitung</button>
                    </div>
                </span>
            </div>

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

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url(); ?>assets/gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
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
</body>

</html>
