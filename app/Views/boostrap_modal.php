<?php $department = $this->session->get('department');
$employee_id = $this->session->get('employee_id');
 ?>


<div class="modal fade" id="call_idea_comments_modal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-lg">
		<div class="modal-content ">
			<div class="modal-header">
				<h5 class="modal-title">Call For Idea Comments</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<table class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr style="text-align: center;">
							<th style="background-color: #673ab7;Color:#fff !important;">S.No</th>
							<th style="background-color: #673ab7;Color:#fff !important;">Execution Interest</th>
							<th style="background-color: #673ab7;Color:#fff !important;">Comments</th>
						</tr>
					</thead>
					<tbody id="append_comments">


					</tbody>

				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="view_rewarded_detail_modal" aria-hidden="true" >
	<div class="modal-dialog modal-dialog-scrollable modal-lg">
		<div class="modal-content " >
			<div class="modal-header">
				<h5 class="modal-title">Reward Details</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body" >
			<div class="form-group row">
                        <label for="inp-type-4" style="text-align: right;" class="col-sm-4 control-label"><b>Idea Title  :</b></label>
                        <div class="col-sm-8">
                            <label class="control-label" style="word-break: break-all;" id="modal_dis_idea_title"></label>
                            <p class="error_msg display_error_text" ></p>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="inp-type-4" style="text-align: right;" class="col-sm-4 control-label"><b>Idea Type  :</b></label>
                        <div class="col-sm-8">
                        <label class="control-label" style="word-break: break-all;" id="modal_dis_idea_type"></label>
                            <p class="error_msg display_error_text" ></p>
                        </div>
                    </div> 
                    
                    <div class="form-group row">
                        <label for="inp-type-4" style="text-align: right;" class="col-sm-4 control-label"><b>Reward type  :</b></label>
                        <div class="col-sm-8">
                        <label class="control-label" style="word-break: break-all;" id="modal_dis_rewarded_type"></label>
                            <p class="error_msg display_error_text" ></p>
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="inp-type-4" style="text-align: right;" class="col-sm-4 control-label"><b>Rewarded By  :</b></label>
                        <div class="col-sm-8">
                        <label class="control-label" style="word-break: break-all;" id="modal_dis_rewarded_by"></label>
                            <p class="error_msg display_error_text" ></p>
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="inp-type-4" style="text-align: right;" class="col-sm-4 control-label"><b>Credited Points  :</b></label>
                        <div class="col-sm-8">
                        <label class="control-label" style="word-break: break-all;" id="modal_dis_credited_points"></label>
                            <p class="error_msg display_error_text" ></p>
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="inp-type-4" style="text-align: right;" class="col-sm-4 control-label"><b>Date  :</b></label>
                        <div class="col-sm-8">
                        <label class="control-label" style="word-break: break-all;" id="modal_dis_credited_date"></label>
                            <p class="error_msg display_error_text" ></p>
                        </div>
                    </div> 

                    
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="call_idea_chat_comments_modal" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title"><?php if ($employee_id == "12345") {
												echo "Status";
											} else {
												echo "Reply Comments";
											} ?> Update</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="post" enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">
						<input type="hidden" id="status_pid">
						<?php if ($employee_id == "12345") { ?>
							<div class="row mb-1">
								<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Status <span style="color:red;">*</span></label>
								<div class="col-sm-8">
									<select class="form-control error_status" data-placeholder="Choose anything" name="idea_status" id="idea_status">
										<option value="">Choose status</option>
										<?php
										if (isset($status_lists)) {
											foreach ($status_lists as $status_list) {
												if($status_list->idea_status_pid != 8){

												echo '<option  value="' . $status_list->idea_status_pid . '">' . $status_list->idea_status_name . '</option>';
											}
										}
										} ?>
									</select>
									<p class="error_msg display_error_text" id="idea_status_error"></p>
								</div>
							</div>
                            <div id="call_idea_points_div" style="display:none;">
								<div class="row mb-1">
									<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Points <span style="color:red;">*</span></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="call_for_idea_status_point" placeholder="Enter your points" name="call_for_idea_status_point" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" readonly>
										<p class="error_msg display_error_text" id="call_for_idea_status_point_error"></p>
									</div>
								</div>
								<div class="row mb-1">
									<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Do you want change this points? <span style="color:red;">*</span></label>
									<div class="col-sm-2">
										<div class="form-check">
                							<input class="form-check-input" type="radio" name="call_for_idea_radio" id="call_for_idea_radio_yes" value="Yes" >
               								<label class="form-check-label" for="call_for_idea_radio_yes">Yes</label>
           								</div>
									</div>
									<div class="col-sm-2">
										<div class="form-check">
                							<input class="form-check-input" type="radio" name="call_for_idea_radio" id="call_for_idea_radio_no" value="No" checked>
               								<label class="form-check-label" for="call_for_idea_radio_no" >No</label>
           								</div>
									</div>
								</div>
								<div class="row mb-1" id="new_points_div" style="display:none;">
									<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">New Points <span style="color:red;">*</span></label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="call_for_idea_status_new_point" placeholder="Enter your new points" name="call_for_idea_status_new_point" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" >
										<p class="error_msg display_error_text" id="call_for_idea_status_new_point_error"></p>
									</div>
								</div>
							</div>
						<?php } ?>
						<div class="row mb-1">
							<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Comments <span style="color:red;"><?php if ($employee_id != "12345") {
																																			echo "*";
																																		} ?></span></label>
							<div class="col-sm-8">
								<textarea type="text" class="form-control" id="idea_status_comments" placeholder="Enter your comments" name="idea_status_comments"></textarea>
								<p class="error_msg display_error_text" id="idea_status_comments_error"></p>
							</div>
						</div>
						<?php if ($employee_id != "12345") { ?>
							<div class="row mb-1">
								<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Upload File </label>
								<div class="col-sm-8">
									<input type="file" class="form-control" id="idea_status_upload" placeholder="status comments" name="idea_status_upload">
									<p class="error_msg display_error_text" id="idea_status_upload_error"></p>
								</div>
							</div>
						<?php } ?>
					</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" id="status_updation">Save</button>
				</div>
			</div>
		</div>
	</div>

</div>


<div class="modal fade" id="reward_points_display_user" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content ">
			<div class="modal-body">
				<p><img style="width:100%;" id="" src="<?php echo base_url('assets/images') . "/" . "applause.gif"; ?>" /></p>
				<p><b>Congratulations your idea has accepted and you have earned Idea points</b></p>
				<form method="post" method="post" action="<?php echo base_url('update_employee_recevied_new_card'); ?>" enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">
					<input type="hidden" name="emp_id" id="congratz_id" value="">
					<p style="text-align:center;"><button type="submit" name="submit" id="submit" class="btn btn-primary">Thank You</button></p>
				</form>


			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="reward_points_display_hr" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content ">
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12" style="width:90%;background-color:#bbb;margin-left:20px;margin-right:20px;margin-bottom:10px;">
						<center><img style="width:50%;" id="" src="<?php echo base_url('assets/images/') . "/" . "smiley.gif"; ?>" />
						</center>
					</div>
				</div>
				<form method="post" method="post" action="<?php echo base_url('update_hr_recevied_response'); ?>" enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">
					<input type="hidden" name="emp_name" id="congratz_id_response" value="">
					<h4 style="font-family: cursive; font-weight:bold">Thank You For Your Appreciation !!!</h4>
					<div class="row">
						<div class="col-md-12" style="background-color:#f3faff;margin-left:20px;margin-right:20px;">
							<br>
							<p id="employee_name" style="font-size:18px;height:130px !important;overflow-y:scroll;"></p>
						</div>
					</div>


					<br>
					<p style="text-align:center;"><button type="submit" name="submit" id="submit" class="btn btn-primary">OK</button></p>
				</form>


			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="call_idea_reviewer_chat_comments_modal" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Status Update</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="post" enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">
						<input type="hidden" id="reviewer_status_pid">
						<input type="hidden" id="status_department_pid" value="<?php echo $department; ?>">
						<div class="row mb-1">
								<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Status <span style="color:red;">*</span></label>
								<div class="col-sm-8">
									<select class="form-control error_status" data-placeholder="Choose anything" name="reviewer_idea_status" id="reviewer_idea_status">
										<option value="">Choose status</option>
										<?php
										if (isset($status_lists)) {
											foreach ($status_lists as $status_list) {
												if($status_list->idea_status_pid == 8 && $employee_id == "12345"){
												} else {
													echo '<option  value="' . $status_list->idea_status_pid . '">' . $status_list->idea_status_name . '</option>';
												}
												
											}
										}?>
									</select>
									<p class="error_msg display_error_text" id="reviewer_idea_status_error"></p>
								</div>
							</div>
						
						<div class="row mb-1">
							<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Comments <span style="color:red;"></span></label>
							<div class="col-sm-8">
								<textarea type="text" class="form-control" id="reviewer_idea_status_comments" placeholder="Enter your comments" name="reviewer_idea_status_comments"></textarea>
								<p class="error_msg display_error_text" id="reviewer_idea_status_comments_error"></p>
							</div>
						</div>						
					</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" id="reviewer_status_updation">Save</button>
				</div>
			</div>
		</div>
	</div>

</div>


<div class="modal fade" id="call_idea_reviewer_emp_chat_comments_modal" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content ">
				<div class="modal-header">
					<h5 class="modal-title">Status Update</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="post" enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">
						<input type="hidden" id="reviewer_emp_status_pid">					
						<div id="reviewer_radio_buttons">

						</div>
						<div class="row mb-1">
							<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Comments <span style="color:red;">*</span></label>
							<div class="col-sm-8">
								<textarea type="text" class="form-control" id="reviewer_emp_idea_status_comments" placeholder="Enter your comments" name="reviewer_emp_idea_status_comments"></textarea>
								<p class="error_msg display_error_text" id="reviewer_emp_idea_status_comments_error"></p>
							</div>
						</div>	
						<div class="row mb-1">
								<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Upload File </label>
								<div class="col-sm-8">
									<input type="file" class="form-control" id="reviewer_emp_idea_status_upload" placeholder="status comments" name="reviewer_emp_idea_status_upload">
									<p class="error_msg display_error_text" id="reviewer_emp_idea_status_upload_error"></p>
								</div>
							</div>					
					</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" id="reviewer_emp_status_updation">Save</button>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="modal fade" id="call_idea_details_modal" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content " style="width:700px;">
				<div class="modal-header">
					<h5 class="modal-title">Submit Idea Details</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
						<input type="hidden" id="status_pid">
						<div class="row mb-3">
							<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Employee ID</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="idea_employee_id" readonly>
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Employee Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="idea_employee_name" readonly>
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Department </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="idea_employee_department" readonly>
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Title</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="submit_idea_title" readonly>
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputperquisiteexecution" class="col-sm-3 col-form-label"> Description</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="submit_idea_discription" readonly>
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputperquisiteexecution" class="col-sm-3 col-form-label">Category</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="submit_idea_category" readonly>
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Idea execution Interest</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="submit_idea_execution_intrest" readonly>
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Proposed Time </label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="submit_idea_proposed_timeofexecution" readonly>
							</div>
						</div>
						<div class="row mb-1">
							<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Perquisite for Execution</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="submit_idea_proposed_perquisite" readonly>
							</div>
						</div>
						<div class="row mb-1">
							<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Any other support required</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="submit_idea_other_support" readonly>
							</div>
						</div>
						<div class="row mb-3">
							<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Execution Comments</label>
							<div class="col-sm-8">
								<textarea type="text" class="form-control" id="submit_idea_execution_comment" readonly></textarea>
							</div>
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="submit_comments_modal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-md">
		<div class="modal-content ">
			<div class="modal-header">
				<h5 class="modal-title" id="submit_idea_title">View Submit Idea Comments</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<table class="table table-striped table-bordered" style="width:100%">
					<!-- <thead>
						<tr style="text-align: center;">
							<th style="background-color: #673ab7;Color:#fff !important;">Comments</th>
							<th style="background-color: #673ab7;Color:#fff !important;">Download</th>
						</tr>
					</thead> -->
					<tbody id="append_submit_comments">


					</tbody>

				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="idea_claim_goodies_status" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-md">
		<div class="modal-content ">
			<div class="modal-header">
				<h5 class="modal-title" id="claim_goodies_title">Update Claim Status</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="post" enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">
					<div class="row mb-1">
						<label for="inputperquisiteexecution" class="col-sm-3 col-form-label ">Status <span style="color:red;">*</span></label>
						<div class="col-sm-8">
							<select class="form-control error_status" data-placeholder="Choose anything" name="idea_claim_goodies_goodies_claim_status" id="idea_claim_goodies_goodies_claim_status">
								<option value="">Choose status</option>
								<option value="Delivered">Delivered</option>
								<option value="Rejected">Rejected</option>
								
							</select>
							<p class="error_msg display_error_text" id="idea_claim_goodies_goodies_claim_status_error"></p>
						</div>
					</div>	
					<input type="hidden" id="idea_claim_goodies_pid" />
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" id="claim_goodies_status_updation">Save</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="boostrapModal-change_password" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" >Change Password</h5>
				<button type="button" class="btn-close" id="close_password" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="post"  enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8">
					<div class="row mb-1">
						<label for="inputperquisiteexecution" class="col-sm-4 col-form-label ">Old Password <span style="color:red;">*</span></label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="employee_old_password" placeholder="Enter Old Password" >
							<p class="error_msg display_error_text" id="employee_old_password_error"></p>
						</div>
					</div>	
					<div class="row mb-1">
						<label for="inputperquisiteexecution" class="col-sm-4 col-form-label ">New Password<span style="color:red;">*</span></label>
						<div class="col-sm-8">
							<input type="text" class="form-control" maxlength="14" id="employee_new_password" placeholder="Enter New Password">
							<p class="error_msg display_error_text" id="employee_new_password_error"></p>
						</div>
					</div>	
					<div class="row mb-1">
						<label for="inputperquisiteexecution" class="col-sm-4 col-form-label ">Confirm Password<span style="color:red;">*</span></label>
						<div class="col-sm-8">
							<input type="text" class="form-control" maxlength="14" id="employee_confirm_password" placeholder="Enter Confirm Password" >
							<p class="error_msg display_error_text" id="employee_confirm_password_error"></p>
						</div>
					</div>	
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" id="update_change_password">Save</button>
			</div>
		</div>
	</div>
</div>