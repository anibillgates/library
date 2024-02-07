<?php echo view('layout/header'); ?>
<?php echo view('layout/sidemenu'); ?>
<?php echo view('layout/main-header'); ?>

<!--page-wrapper-->
<div class="page-wrapper">
	<!--page-content-wrapper-->
	<div class="page-content-wrapper">
		<div class="page-content">
		<?php if ($this->session->getFlashdata('success_msg')) { ?>
			<div class="lobibox-notify-wrapper center top" style="margin-left: -300px;"><div class="lobibox-notify lobibox-notify-success animated-fast rollIn" style="width: 600px;"><div class="lobibox-notify-icon-wrapper"><div class="lobibox-notify-icon"><div><div class="icon-el"><i class="bx bx-check-circle"></i></div></div></div></div><div class="lobibox-notify-body"><div class="lobibox-notify-title">Success<div></div></div><div class="lobibox-notify-msg" style="max-height: 40px;"><?php echo $this->session->getFlashdata('success_msg'); ?></div></div><span class="lobibox-close">×</span><div class="lobibox-delay-indicator"><div style="width: 100%;"></div></div></div></div>
			
		<?php } ?>
			<div class="row">
			<div class="flex-grow-1 search-bar">
				<div class="input-group">
						<button class="btn btn-search-back search-arrow-back" type="button"><i class="bx bx-arrow-back"></i></button>
						<input type="text" class="form-control" placeholder="search" id="book_search" />
						<button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i></button>
				</div>
			</div>
			<div id="main_book_display_div">
				<?php 
				$i = 0;
					$note_list ='';
					$start_rack = '<div class="bookshelf">
										<div class="covers">';

					foreach($result as $val){

						if($i % 3 == 0 && $i != 0)
						{
						
							$start_rack = '</div> 
										
									</div> <br>
										<br><br><br><br> 
										<div class="bookshelf">
										<div class="covers">';
						}
						$note_list .= $start_rack ;
						$note_list .= ' 
											<div class="thumb book-1">	
												<a href="./uploads/book_file/'.$val->book_file.'">
												<img src="images/book2/1.jpg">
												</a>
												<label>Publisher : '.$val->book_publisher_name.'<br>Title : '.$val->book_title.'<br>ISBN : '.$val->book_isbn_number.'</label>
											</div>
											';
											
						$start_rack = '';
						$i++; 
					}

					$note_list .= '</div> 
										
					</div> '; 
					print_r($note_list); ?>
					
				<br>
			
			</div>

			




			</div>
		</div>
	</div>
	<!--end page-content-wrapper-->
</div>
<!--end page-wrapper-->

<?php echo view('layout/copyrights'); ?>
<?php echo view('layout/footer'); ?>