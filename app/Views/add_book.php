<?php echo view('layout/header'); ?>
<?php echo view('layout/sidemenu'); ?>
<?php echo view('layout/main-header'); ?>

<!--page-wrapper-->
<div class="page-wrapper">
	<!--page-content-wrapper-->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="row">
			<!-- <div class="flex-grow-1 search-bar">
				<div class="input-group">
						<button class="btn btn-search-back search-arrow-back" type="button"><i class="bx bx-arrow-back"></i></button>
						<input type="text" class="form-control" placeholder="search" />
						<button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i></button>
				</div>
			</div> -->
            <div class="row small-spacing">
                <div class="col-lg-12 col-xs-12">
                    <div class="box-content card white">
                        <h4 class="box-title"></h4>
                        <div class="card-content">
                        <?php if ($this->session->getFlashdata('success_msg')) { ?>
                            <div class="lobibox-notify-wrapper center top" style="margin-left: -300px;"><div class="lobibox-notify lobibox-notify-success animated-fast rollIn" style="width: 600px;"><div class="lobibox-notify-icon-wrapper"><div class="lobibox-notify-icon"><div><div class="icon-el"><i class="bx bx-check-circle"></i></div></div></div></div><div class="lobibox-notify-body"><div class="lobibox-notify-title">Success<div></div></div><div class="lobibox-notify-msg" style="max-height: 40px;"><?php echo $this->session->getFlashdata('success_msg'); ?></div></div><span class="lobibox-close">×</span><div class="lobibox-delay-indicator"><div style="width: 100%;"></div></div></div></div>
                            
                        <?php } ?>
                            <form class="form-horizontal" name="insert_book" id="insert_book" method="post" enctype="multipart/form-data" autocomplete="off" action ="<?php echo base_url('insert_book'); ?>">
                            
                                <div class="form-group row">
                                    <label for="inp-type-2" class="col-sm-3 control-label add_book">Publisher <span class="error_msg">*</span></label>
                                    <div class="col-sm-8">
                                        <select class="form-control single-select" id="book_publisher_name" name="book_publisher_name" Required>
                                            <?php
                                            echo '<option value="">Select Publisher</option>';
                                            echo '<option value="Grey Oak Publishing">Grey Oak Publishing</option>';
                                            echo '<option value="Aleph Book Company">Aleph Book Company</option>';
                                            echo '<option value="Vitasta">Vitasta</option>';
                                            echo '<option value="Pothi">Pothi</option>';
                                            echo '<option value="Speaking Tiger">Speaking Tiger</option>';
                                            echo '<option value="Orient Paperbacks">Orient Paperbacks</option>';
                                            echo '<option value="Srishti Publishing">Srishti Publishing</option>';
                                        ?>
                                        </select>
                                        <p class="error_msg display_error_text" id="book_publisher_name_error"></p>
                                    </div>
                                </div> 

                                
                                <div class="form-group row">
                                    <label for="inp-type-4" class="col-sm-3 control-label add_book">ISBN Number <span class="error_msg">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="book_isbn_number" name="book_isbn_number" placeholder="Enter ISBN Number" value="" oninput="this.value = this.value.replace(/[^\d.-]+/g, '');" Required>
                                        <p class="error_msg display_error_text" id="book_isbn_number_error"></p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inp-type-4" class="col-sm-3 control-label add_book">Book Title <span class="error_msg">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="book_title" name="book_title" placeholder="Enter book title" value="" Required>
                                        <p class="error_msg display_error_text" id="book_title_error"></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inp-type-4" class="col-sm-3 control-label add_book">Author <span class="error_msg">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="book_author_name" name="book_author_name" placeholder="Enter book author name" value="" Required>
                                        <p class="error_msg display_error_text" id="book_author_name_error"></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inp-type-4" class="col-sm-3 control-label add_book">Discription <span class="error_msg">*</span></label>
                                    <div class="col-sm-8">
                                        <textarea  class="form-control" id="book_discription" name="book_discription" placeholder="Enter book diccription" value="" Required></textarea>
                                        <p class="error_msg display_error_text" id="book_discription_error"></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inp-type-4" class="col-sm-3 control-label add_book">Cover Image <span class="error_msg">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" accept="image/*" id="book_cover_image" name="book_cover_image" value="" Required>
                                        <p class="error_msg display_error_text" id="book_cover_image_error"></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inp-type-4" class="col-sm-3 control-label add_book">Book File  <span class="error_msg">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" accept=".pdf" id="book_file" name="book_file" placeholder="Enter book author name" value="" Required>
                                        <p class="error_msg display_error_text" id="book_file_error"></p>
                                    </div>
                                </div>

                                <input type="hidden" name="book_uploaded_user" value="<?php echo $this->session->get('user_id');?> ">
                                <div class="wordlist">
                                
                                <div class="form-group row">
                                    <div class="col-sm-5"></div>
                                    <div class="col-sm-5">
                                        <button type="submit"  id="book_submit"  class="btn btn-success waves-effect waves-light"> Save </button>&nbsp;&nbsp;
                                        
                                    </div>
                                </div>
                                
                            </form>
                        </div>
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