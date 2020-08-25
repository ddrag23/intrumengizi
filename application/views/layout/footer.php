<!-- footer content -->
<footer>
    <div class="pull-right">
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>


<!-- jQuery -->
<script src="<?= base_url(); ?>assets/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<!-- jQuery Smart Wizard -->
<script src="<?= base_url(); ?>assets/gentelella/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url(); ?>assets/gentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url(); ?>assets/gentelella/vendors/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>assets/gentelella/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= base_url(); ?>assets/gentelella/vendors/nprogress/nprogress.js"></script>
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
<!-- Select2 -->
<script src="<?= base_url(); ?>assets/gentelella/vendors/select2/dist/js/select2.full.min.js"></script>

<script src="<?= base_url();?>assets/gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?= base_url();?>assets/gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="<?= base_url();?>assets/gentelella/vendors/google-code-prettify/src/prettify.js"></script>
<script src="<?= base_url();?>assets/gentelella/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
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
    $(document).ready(function(){
      $('#select2').select2();
    })
    $(document).ready(function(){
      $('#berat').tagsInput(
        {
          'width' : '100%'
        }
      );
    })
</script>
</body>

</html>
