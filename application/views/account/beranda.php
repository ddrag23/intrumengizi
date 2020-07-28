<html>

<head>
    <title>Daftar Bahan Makanan</title>
    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="<?= base_url(); ?>assets/gentelella/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>assets/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url(); ?>assets/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url(); ?>assets/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->

    <link href="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?= base_url(); ?>assets/gentelella/build/css/custom.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Instrumen Teknologi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="<?= base_url('beranda'); ?>">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="<?= base_url('login'); ?>">Login <span class="sr-only">(current)</span></a>
            </div>
        </div>
    </nav>
    <div class="right-col">
        <div class="container">
            <div class="row">
                <div class="x_panel">
                    <div class="container-fluid">
                        <div class="container-fluid">
                            <h1 style="text-align: center;">Selamat Datang di Situs kami</h1>
                            <h2 style="text-align: center;">Di bawah ini merupakan daftar bahan makanan di Indonesia</h2>
                            <h2 style="text-align: center;">Jika ingin melakukan sebuah perencanaan diet bisa Login terlebih dahulu</h2>
                        </div>
                    </div>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <!-- <th><input type="checkbox" onclick="checkAll(this)"></th> -->
                                <th>No</th>
                                <th>Kode</th>
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
    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url(); ?>assets/gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Datatables -->
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>assets/gentelella/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url(); ?>assets/gentelella/build/js/custom.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            responsive: true;
            columnDefs: [{
                    responsivePriority: 1,
                    targets: 0
                },
                {
                    responsivePriority: 2,
                    targets: -1
                }
            ]
        });
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
</body>

</html>