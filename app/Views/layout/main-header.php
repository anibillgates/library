<!--header-->
<?php 
    $name = $this->session->get('name');
    $user_id = $this->session->get('user_id');


	$filename = "./assets/emp_image/". $name .".jpg";
	if (file_exists($filename)) {
		$display_images = base_url('assets/emp_image/'.$name.'.jpg');
	} else {
		$display_images = base_url('assets/emp_image/0000.jpg');
	}

	//$display_images = base_url('assets/emp_image/'.$employee_id.'.jpg');
?>
		<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
				</div>
				<h4><?php echo $header_name;?>&nbsp;&nbsp;&nbsp;</h4>
				
						<div class="right-topbar ms-auto">
							<ul class="navbar-nav">
							<div class="flex-grow-1 search-bar">
							
						</div>
						
						<li class="nav-item search-btn-mobile">
							<a class="nav-link position-relative" href="javascript:;">	<i class="bx bx-search vertical-align-middle"></i>
							</a>
						</li>
						
						<!-- <li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" id="notifiction_disapper_count" data-bs-toggle="dropdown">	<i class="bx bx-bell vertical-align-middle"></i>
								
								<span id="notification_count"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a href="javascript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">8 New</h6>
										
									</div>
								</a>
								<div class="header-notifications-list" id="header-notifications-list">
									
									
								</div>
								<a href="<?php echo base_url('list_of_notifications')?>">
									<div class="text-center msg-footer" style="margin-top:10px !important;">View All Notifications</div>
								</a>
							</div>
						</li> -->
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" data-bs-toggle="dropdown" >	
								
							</a>
							
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<div class="d-flex user-box align-items-center">
								<div class="user-info">
									<p class="user-name mb-0"><?php echo $name; ?></p>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="d-flex user-box align-items-center">
									<img src="<?php echo $display_images ?>" class="user-img" alt="user avatar">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end">	
								<a class="dropdown-item" href="<?php echo base_url('logout') ?>">
									<i class="bx bx-power-off"></i><span>Logout</span></a>
							</div>
						</li>
						
					</ul>
				</div>
			</nav>
		</header>

		<!--end header-->