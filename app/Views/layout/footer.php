<?php echo view('boostrap_modal'); ?>
	<?php 
	 $request = service('request');
	 $uri = $request->uri;
	  ?>
	<input type="hidden" id="segment_2" value="<?php echo $uri->getSegment(1); ?>" >
	<!-- Bootstrap JS -->
	<script src="<?php echo base_url('assets/js/sweetalert.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/sweetalert.init.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
	<!--plugins-->
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/simplebar/js/simplebar.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/metismenu/js/metisMenu.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js'); ?>"></script>
	
	<!--notification js -->
	<script src="<?php echo base_url('assets/plugins/notifications/js/lobibox.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/notifications/js/notifications.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/notifications/js/notification-custom-script.js'); ?>"></script>
	<!-- Vector map JavaScript -->
	<script src="<?php echo base_url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/vectormap/jquery-jvectormap-in-mill.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/vectormap/jquery-jvectormap-au-mill.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/apexcharts-bundle/js/apexcharts.min.js'); ?>"></script> 
	<script src="<?php echo base_url('assets/js/index.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/pace.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
	<script src="assets/js/dropify.min.js"></script>

	<!-- Table 2 excel -->
	<script src="assets/plugins/dist/jquery.min.js"></script>
	<script src="assets/plugins/dist/jquery.table2excel.min.js"></script>

	<script src="assets/plugins/highcharts/js/highcharts.js"></script>
	<script src="assets/plugins/highcharts/js/highcharts-more.js"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>

	<!-- highcharts js -->
	<script src="assets/plugins/highcharts/js/highcharts.js"></script>
	<script src="assets/plugins/highcharts/js/highcharts-more.js"></script>
	<script src="assets/plugins/highcharts/js/variable-pie.js"></script>
	<script src="assets/plugins/highcharts/js/solid-gauge.js"></script>
	<script src="assets/plugins/highcharts/js/highcharts-3d.js"></script>
	<script src="assets/plugins/highcharts/js/cylinder.js"></script>
	<script src="assets/plugins/highcharts/js/funnel3d.js"></script>
	<script src="assets/plugins/highcharts/js/exporting.js"></script>
	<script src="assets/plugins/highcharts/js/export-data.js"></script>
	<script src="assets/plugins/highcharts/js/accessibility.js"></script>
	<script src="assets/plugins/highcharts/js/highcharts-custom.script.js"></script>
	<!-- App JS -->
	<script src="<?php echo base_url('assets/plugins/datatable/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/validation_function/validation.js'); ?>"></script>
	<script src="<?php echo base_url('assets/validation_function/common_function.js'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/select2/js/select2.min.js'); ?>"></script>
	<script>
		$(document).ready(function () {
			//Default data table
			$('#example').DataTable();
			var table = $('#example2').DataTable({
				lengthChange: false,
				buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
			});
			table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
		});

		
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});

		

		
	</script>
	
	
</body>

</html>