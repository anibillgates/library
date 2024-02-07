<?php
$this->session = \Config\Services::session();
$this->session->start();
$user_name  = $this->session->get('user_name');
if($user_name == '')
{
?>
    <script>
        var url = window.location.href;
        var projet_path = url.split('/');
        var url_path = window.location.origin + '/' + projet_path[3];
        window.location = url_path;
    </script> 
<?php
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Book Networking </title>
	<!--favicon-->
	<link rel="icon" href="<?php echo base_url('assets/images/favicon-32x32.png'); ?>" type="image/png" />
	<!-- Vector CSS -->
	<link href="<?php echo base_url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css'); ?>" rel="stylesheet" />

	<!--Data Tables -->
	<link href="<?php echo base_url('assets/plugins/datatable/css/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/plugins/datatable/css/buttons.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css">
	<!--plugins-->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/notifications/css/lobibox.min.css'); ?>"/>
	<link href="<?php echo base_url('assets/plugins/simplebar/css/simplebar.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/metismenu/css/metisMenu.min.css'); ?>" rel="stylesheet" />
	<!-- loader-->
	<link href="<?php echo base_url('assets/css/pace.min.css'); ?>" rel="stylesheet" />
	
	<!-- HighCharts CSS-->
	<link href="assets/plugins/highcharts/css/highcharts.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto&display=swap" />
	<link href="<?php echo base_url('assets/css/animate.css'); ?>" rel="stylesheet" type="text/css" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/icons.css'); ?>" />
	<!-- App CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/dark-sidebar.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/dark-theme.css'); ?>" />
	<link href="<?php echo base_url('assets/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/select2/css/select2-bootstrap4.css'); ?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert.css'); ?>">
	<link rel="stylesheet" href="assets/css/dropify.min.css">
</head>
<body>
	<!-- wrapper -->
	<div class="wrapper">
		