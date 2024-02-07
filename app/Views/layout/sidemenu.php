
<!--sidebar-wrapper-->
<div class="sidebar-wrapper" data-simplebar="true">
	<div class="sidebar-header">
		<div class="">
			<img src="<?php echo base_url('assets/images/logo-icon.png'); ?>" class="logo-icon-2" alt="" />
		</div>
		<div>
			<h4 class="logo-text">Books</h4>
		</div>
		<a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
		</a>
	</div>
	<!--navigation-->
	<ul class="metismenu" id="menu">
		<li class="<?php if($menu_active == "dashboard") { echo "mm-active";}?>">
			<a href="<?php echo base_url('dashboard') ?>" >
				<div class="parent-icon icon-color-1"><i class="lni lni-dashboard"></i>
				</div>
				<div class="menu-title">Dashboard</div>
			</a>

			<a href="<?php echo base_url('add_book') ?>" >
				<div class="parent-icon icon-color-1"><i class="lni lni-dashboard"></i>
				</div>
				<div class="menu-title">Add Book</div>
			</a>
			
			<a href="<?php echo base_url('list_of_books') ?>" >
				<div class="parent-icon icon-color-1"><i class="lni lni-dashboard"></i>
				</div>
				<div class="menu-title">Personal List Of Books</div>
			</a>

			<a href="<?php echo base_url('list_of_other_user_books_list') ?>" >
				<div class="parent-icon icon-color-1"><i class="lni lni-dashboard"></i>
				</div>
				<div class="menu-title">Other user Books</div>
			</a>
			
		</li>
	</ul>
	<!--end navigation-->
</div>
<!--end sidebar-wrapper-->