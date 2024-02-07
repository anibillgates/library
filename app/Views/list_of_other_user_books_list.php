<?php echo view('layout/header'); ?>
<?php echo view('layout/sidemenu'); ?>
<?php echo view('layout/main-header'); ?>

<!--page-wrapper-->
<div class="page-wrapper">
	<!--page-content-wrapper-->
	<div class="page-content-wrapper">
		<div class="page-content">
		<div class="row">
				<div class="col-md-9">
					<?php if (session()->getFlashdata('success_msg')) { ?>
						<div class="lobibox-notify-wrapper top right">
						<div class="lobibox-notify lobibox-notify-success animated-fast fadeInDown notify-mini rounded" style="width: 400px;">
							<div class="lobibox-notify-icon-wrapper">
								<div class="lobibox-notify-icon">
									<div>
										<div class="icon-el"><i class="bx bx-check-circle"></i></div>
									</div>
								</div>
							</div>
							<div class="lobibox-notify-body">
								<div class="lobibox-notify-msg" style="max-height: 32px;"><?php echo session()->getFlashdata('success_msg'); ?></div>
							</div><span class="lobibox-close">×</span>
						</div>
					</div>
						
					<?php } ?>
					<?php if (session()->getFlashdata('errors')) { ?>
                        <div class="lobibox-notify-wrapper center top" style="margin-left: -300px;"><div class="lobibox-notify lobibox-notify-danger animated-fast rollIn" style="width: 600px;"><div class="lobibox-notify-icon-wrapper"><div class="lobibox-notify-icon"><div><div class="icon-el"><i class="bx bx-check-circle"></i></div></div></div></div><div class="lobibox-notify-body"><div class="lobibox-notify-title">Error<div></div></div><div class="lobibox-notify-msg" style="max-height: 40px;"><?php echo session()->getFlashdata('errors'); ?></div></div><span class="lobibox-close">×</span><div class="lobibox-delay-indicator"><div style="width: 100%;"></div></div></div></div>
                    <?php } ?>
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-xl-12 mx-auto">
					<div class="card border-top border-0 border-0 border-info">
						<div class="card-body">
							<!-- <div class="border p-4 rounded">
								<div class="card-title d-flex align-items-center">
								</div> -->
								<div class="table-responsive">
									<table id="list_of_books" class="table table-striped table-bordered" style="width:100%">
										<thead>
											<tr>
												<th>S.No</th>
												<th>Book Publisher</th>
												<th>Book Title</th>
												<th>Book ISBN</th>
												<th>Book Author</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

										</tbody>
									</table>
								<!-- </div>
							</div>
						</div> -->
					</div>
				</div>
			</div>



			</div>
		</div>
	</div>
	<!--end page-content-wrapper-->
</div>
<!--end page-wrapper-->

<?php echo view('layout/copyrights'); ?>
<?php echo view('layout/footer'); ?>