<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Hiring View
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">
		<div class="row">
			<div class="col-md-4">
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#company_modal">Company View</button>
			</div>
			<div class="col-md-4">
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#applicant_modal">Applicant View</button>
			</div>
			<div class="col-md-4">
				<h5>Status : <?php echo $hiring[0]->status;?></h5>
			</div>
		</div>
		<?php if ($hiring[0]->status == 'PENDING') { ?>
		<div class="m-portlet__body-separator"></div>
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label class="col-form-label col-lg-3 col-sm-12">Send Email to Applicant</label>
				<div class="col-lg-9 col-md-9 col-sm-12">
					<input type="text" name="applicant_email" id="applicant_email" style="display: none;" value="<?php echo $user[0]->email;?>">
					<textarea name="message" id="message" class="form-control" data-provide="markdown" rows="10"></textarea>
				</div>
			</div>
			<div class="m-form__actions m-form__actions">
				<div class="row">
					<div class="col-lg-9 ml-lg-auto">
						<button type="" id="send_email_button" name="send_email_button"  class="btn btn-brand" data-url="<?php echo base_url('kenton/hiring/send_email')?>" data-key="<?php echo $hiring[0]->idx;?>">Send Email</button>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		<?php if ($hiring[0]->status == 'NOTIFIED') { ?>
		<div class="m-portlet__body-separator"></div>
		<button type="button" class="btn btn-success m-btn m-btn--custom" id="hire_button" data-url="<?php echo base_url('kenton/hiring/mark_hired')?>" data-key="<?php echo $hiring[0]->idx;?>"><i class="fa fa-check"></i> Mark As Hired</button>
		<?php } ?>
	</div>

	<!--begin::Modal-->
	<div class="modal fade" id="company_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Company View</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="m-portlet m-portlet--responsive-mobile m-portlet--warning m-portlet--head-solid-bg m-portlet--bordered">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon">
										<i class="fa fa-user"></i>
									</span>
									<h3 class="m-portlet__head-text">
										 Company Information
									</h3>
								</div>
							</div>
						</div>
						<div class="m-portlet__body">
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-6">
										<h5><u>Company Name</u></h5>
										<h5 class="text-muted"><?php echo $company[0]->company_name;?></h5>
									</div>
								</div>
							</div>
							<div class="m-portlet__body-separator"></div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-12">
										<h5><u>Company Address</u></h5>
										<h5 class="text-muted"><?php echo $company_address[0]->line_1.', '.$company_address[0]->line_2.', '.$company_address[0]->line_3.', '.$company_address[0]->city_name.', '.$company_address[0]->state_name.', '.$company_address[0]->country_name;?></h5>
									</div>
								</div>
							</div>
							<div class="m-portlet__body-separator"></div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-6">
										<h5><u>Company Mobile Number:</u></h5>
										<h5 class="text-muted"><?php echo $company[0]->mobile_number;?></h5>
									</div>
									<div class="col-md-6">
										<h5><u>Company Phone Number:</u></h5>
										<h5 class="text-muted"><?php echo $company[0]->phone_number;?></h5>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-6">
										<h5><u>Email Address:</u></h5>
										<h5 class="text-muted"><?php echo $company[0]->email;?></h5>
									</div>
									<div class="col-md-6">
										<h5><u>Facebook Link:</u></h5>
										<h5 class="text-muted"><?php echo $company[0]->facebook_link;?></h5>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="m-portlet m-portlet--responsive-mobile m-portlet--warning m-portlet--head-solid-bg m-portlet--bordered">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon">
										<i class="fa fa-user"></i>
									</span>
									<h3 class="m-portlet__head-text">
										 Company Contact Person Information
									</h3>
								</div>
							</div>
						</div>
						<div class="m-portlet__body">
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-4">
										<h5><u>First Name</u></h5>
										<h5 class="text-muted"><?php echo $contact_person[0]->firstname;?></h5>
									</div>
									<div class="col-md-4">
										<h5><u>First Name</u></h5>
										<h5 class="text-muted"><?php echo $contact_person[0]->middlename;?></h5>
									</div>
									<div class="col-md-4">
										<h5><u>First Name</u></h5>
										<h5 class="text-muted"><?php echo $contact_person[0]->lastname;?></h5>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-12">
										<h5><u>Job Title</u></h5>
										<h5 class="text-muted"><?php echo $contact_person[0]->job_title;?></h5>
									</div>
								</div>
							</div>
							<div class="m-portlet__body-separator"></div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-12">
										<h5><u>Current Address</u></h5>
										<h5 class="text-muted"><?php foreach($person_address as $add){
											if ($add->address_type=="CURRENT") {
												echo $add->line_1.', '.$add->line_2.', '.$add->line_3.', '.$add->city.', '.$add->state.', '.$add->country;
											}
										}?></h5>
									</div>
								</div>
							</div>
							<div class="m-portlet__body-separator"></div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-12">
										<h5><u>Permanent Address</u></h5>
										<h5 class="text-muted"><?php foreach($person_address as $add){
											if ($add->address_type=="PERMANENT") {
												echo $add->line_1.', '.$add->line_2.', '.$add->line_3.', '.$add->city.', '.$add->state.', '.$add->country;
											}
										}?></h5>
									</div>
								</div>
							</div>
							<div class="m-portlet__body-separator"></div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-6">
										<h5><u>Mobile Number:</u></h5>
										<h5 class="text-muted"><?php echo $contact_person[0]->mobile_number;?></h5>
									</div>
									<div class="col-md-6">
										<h5><u>Phone Number:</u></h5>
										<h5 class="text-muted"><?php echo $contact_person[0]->phone_number;?></h5>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-6">
										<h5><u>Email Address:</u></h5>
										<h5 class="text-muted"><?php echo $user[0]->email;?></h5>
									</div>
									<div class="col-md-6">
										<h5><u>Facebook Link:</u></h5>
										<h5 class="text-muted"><?php echo $contact_person[0]->facebook_link;?></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--end::Modal-->

	<!--begin::Modal-->
	<div class="modal fade" id="applicant_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Applicant View</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="m-portlet m-portlet--responsive-mobile m-portlet--warning m-portlet--head-solid-bg m-portlet--bordered">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon">
										<i class="fa fa-user"></i>
									</span>
									<h3 class="m-portlet__head-text">
										 Personal Information
									</h3>
								</div>
							</div>
						</div>
						<div class="m-portlet__body">
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-4">
										<h5><u>First Name</u></h5>
										<h5 class="text-muted"><?php echo $person[0]->firstname; ?></h5>
									</div>
									<div class="col-md-4">
										<h5><u>Middle Name</u></h5>
										<h5 class="text-muted"><?php if($person[0]->middlename) { echo $person[0]->middlename; } else { echo ''; } ?></h5>
									</div>
									<div class="col-md-4">
										<h5><u>Last Name</u></h5>
										<h5 class="text-muted"><?php echo $person[0]->lastname; ?></h5>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-4">
										<h5><u>Gender</u></h5>
										<h5 class="text-muted"><?php echo $person[0]->gender; ?></h5>
									</div>
									<div class="col-md-4">
										<h5><u>Date of Birth</u></h5>
										<h5 class="text-muted"><?php echo date("j F Y", strtotime($person[0]->birthdate)); ?></h5>
									</div>
									<div class="col-md-4">
										<h5 class="m-portlet__head-text"><u>Age</u></h5>
										<h5 class="text-muted"><?php echo $person[0]->age; ?></h5>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-12">
										<h5><u>Marital Status</u></h5>
										<h5 class="text-muted"><?php echo $person[0]->civil_status_name; ?></h5>
									</div>
								</div>
							</div>
							<div class="m-portlet__body-separator"></div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-12">
										<h5><u>Current Address</u></h5>
										<h5 class="text-muted"><?php foreach($address as $add){
											if ($add->address_type=="CURRENT") {
												echo $add->line_1.', '.$add->line_2.', '.$add->line_3.', '.$add->city.', '.$add->state.', '.$add->country;
											}
										}?></h5>
									</div>
								</div>
							</div>
							<div class="m-portlet__body-separator"></div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-12">
										<h5><u>Permanent Address</u></h5>
										<h5 class="text-muted"><?php foreach($address as $add){
											if ($add->address_type=="PERMANENT") {
												echo $add->line_1.', '.$add->line_2.', '.$add->line_3.', '.$add->city.', '.$add->state.', '.$add->country;
											}
										}?></h5>
									</div>
								</div>
							</div>
							<div class="m-portlet__body-separator"></div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-6">
										<h5><u>Mobile Number:</u></h5>
										<h5 class="text-muted"><?php echo $person[0]->mobile_number; ?></h5>
									</div>
									<div class="col-md-6">
										<h5><u>Phone Number:</u></h5>
										<h5 class="text-muted"><?php echo $person[0]->phone_number; ?></h5>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-6">
										<h5><u>Email Address:</u></h5>
										<h5 class="text-muted"><?php echo $user[0]->email; ?></h5>
									</div>
									<div class="col-md-6">
										<h5><u>Facebook Link:</u></h5>
										<h5 class="text-muted"><?php echo $person[0]->facebook_link; ?></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php if($spouse){?>
					<div class="m-portlet m-portlet--responsive-mobile m-portlet--warning m-portlet--head-solid-bg m-portlet--bordered">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon ">
										<i class="fa fa-heart"></i>
									</span>
									<h3 class="m-portlet__head-text">
										 Spouse Information
									</h3>
								</div>
							</div>
						</div>
						<div class="m-portlet__body">
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-4">
										<h5><u>Spouse Highest Educational Attainment</u></h5>
										<h5 class="text-muted"><?php echo $spouse[0]->highest; ?></h5>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-4">
										<h5><u>School Name</u></h5>
										<h5 class="text-muted"><?php echo $spouse[0]->spouse_school_name; ?></h5>
									</div>
									<div class="col-md-4">
										<h5><u>Degree / Major / Year Level</u></h5>
										<h5 class="text-muted"><?php echo $spouse[0]->spouse_degree; ?></h5>
									</div>
									<div class="col-md-4">
										<h5 class="m-portlet__head-text"><u>Year Finished</u></h5>
										<h5 class="text-muted"><?php echo $spouse[0]->spouse_year_finished; ?></h5>
									</div>
								</div>
							</div>
							<div class="m-portlet__body-separator"></div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-12">
										<h5><u>English Proficiency Exam Taken</u></h5>
										<h5 class="text-muted"><?php echo $spouse[0]->prof_exam; ?></h5>
									</div>
								</div>
							</div>
							<?php if($spouse[0]->prof_exam_id!==1) { ?>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-6">
										<h5><u>Overall Score</u></h5>
										<h5 class="text-muted"><?php echo $spouse[0]->over_all_score; ?></h5>
									</div>
									<div class="col-md-6">
										<h5><u>Date of Assessment</u></h5>
										<h5 class="text-muted"><?php echo date("j F Y", strtotime($spouse[0]->date_of_assessment)); ?></h5>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-3">
										<h5><u>Listening Score</u></h5>
										<h5 class="text-muted"><?php echo $spouse[0]->listening_score; ?></h5>
									</div>
									<div class="col-md-3">
										<h5><u>Reading Score</u></h5>
										<h5 class="text-muted"><?php echo $spouse[0]->reading_score; ?></h5>
									</div>
									<div class="col-md-3">
										<h5><u>Writing Score</u></h5>
										<h5 class="text-muted"><?php echo $spouse[0]->writing_score; ?></h5>
									</div>
									<div class="col-md-3">
										<h5><u>Speaking Score</u></h5>
										<h5 class="text-muted"><?php echo $spouse[0]->speaking_score; ?></h5>
									</div>
								</div>
							</div>
							<?php }?>
						</div>
					</div>
					<?php }?>

					<div class="m-portlet m-portlet--responsive-mobile m-portlet--warning m-portlet--head-solid-bg m-portlet--bordered">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon">
										<i class="fa fa-graduation-cap"></i>
									</span>
									<h3 class="m-portlet__head-text">
										 Educational Background
									</h3>
								</div>
							</div>
						</div>
						<div class="m-portlet__body">
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-4">
										<h5><u>Highest Educational Attainment</u></h5>
										<h5 class="text-muted"><?php echo $applicant[0]->educational_attainment_name;?></h5>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-4">
										<h5><u>School Name</u></h5>
										<h5 class="text-muted"><?php echo $applicant[0]->school_name;?></h5>
									</div>
									<div class="col-md-4">
										<h5><u>Degree / Major / Year Level</u></h5>
										<h5 class="text-muted"><?php echo $applicant[0]->degree;?></h5>
									</div>
									<div class="col-md-4">
										<h5 class="m-portlet__head-text"><u>Year Finished</u></h5>
										<h5 class="text-muted"><?php echo $applicant[0]->education_year_finished;?></h5>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="m-portlet m-portlet--responsive-mobile m-portlet--warning m-portlet--head-solid-bg m-portlet--bordered">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon">
										<i class="fa fa-briefcase"></i>
									</span>
									<h3 class="m-portlet__head-text">
										 Work Experience 
									</h3>
								</div>
							</div>
						</div>
						<div class="m-portlet__body">
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-12">
										<h5><u>Job Title</u></h5>
										<h5 class="text-muted"><?php echo $person[0]->job_title;?></h5>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-12">
										<h5><u>Summary of Job Description</u></h5>
										<h5 class="text-muted"><?php echo $person[0]->summary_of_job_description;?></h5>
									</div>
								</div>
							</div>
							<div class="m-portlet__body-separator"></div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-12">
										<h5><u>Work Experience</u></h5>
										<h5 class="text-muted">Total Months of Experience: <?php echo $exp_length;?></h5>
									</div>
								</div>
							</div>
							<div class="m-section">
								<div class="m-section__content">
									<table class="table m-table m-table--head-bg-success">
										<thead>
											<tr>
												<th>Duration</th>
												<th>Job Title</th>
												<th>Job Description</th>
												<th>Employer</th>
												<th>Location</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach($work_experience as $work) {?>
											<tr>
												<td><?php echo date("j M Y", strtotime($work->from_date)).' - '.date("j M Y", strtotime($work->to_date)); ?></td>
												<td><?php echo $work->job_title;?></td>
												<td><?php echo $work->job_description;?></td>
												<td><?php echo $work->company;?></td>
												<td><?php echo $work->location;?></td>
											</tr>
											<?php }?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="m-portlet m-portlet--responsive-mobile m-portlet--warning m-portlet--head-solid-bg m-portlet--bordered">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon">
										<i class="fa fa-assistive-listening-systems"></i>
									</span>
									<h3 class="m-portlet__head-text">
										Language Proficiency
									</h3>
								</div>
							</div>
						</div>
						<div class="m-portlet__body">
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-4">
										<h5><u>Have you ever had your English language abilities or proficiency tested?</u></h5>
										<h5 class="text-muted"><?php if($proficiency_exam[0]->tested=='1') { echo "Yes"; } else { echo "No"; }?></h5>
									</div>
									<div class="col-md-4">
										<h5><u>What level is your English Speaking level?</u></h5>
										<h5 class="text-muted"><?php echo $proficiency_exam[0]->english_speaking_level; ?></h5>
									</div>
									<div class="col-md-4">
										<h5><u>What level is your English Writing level?</u></h5>
										<h5 class="text-muted"><?php echo $proficiency_exam[0]->english_writing_level; ?></h5>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-12">
										<h5><u>English Proficiency Exam Taken</u></h5>
										<h5 class="text-muted"><?php echo $proficiency_exam[0]->proficiency_exam_name; ?></h5>
									</div>
								</div>
							</div>
							<?php if($proficiency_exam[0]->proficiency_exam_id!==1) { ?>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-6">
										<h5><u>Overall Score</u></h5>
										<h5 class="text-muted"><?php echo $proficiency_exam[0]->overall_score; ?></h5>
									</div>
									<div class="col-md-6">
										<h5><u>Date of Assessment</u></h5>
										<h5 class="text-muted"><?php echo date("j F Y", strtotime($proficiency_exam[0]->exam_date)); ?></h5>
									</div>
								</div>
							</div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-3">
										<h5><u>Listening Score</u></h5>
										<h5 class="text-muted"><?php echo $proficiency_exam[0]->listening_score; ?></h5>
									</div>
									<div class="col-md-3">
										<h5><u>Reading Score</u></h5>
										<h5 class="text-muted"><?php echo $proficiency_exam[0]->reading_score; ?></h5>
									</div>
									<div class="col-md-3">
										<h5><u>Writing Score</u></h5>
										<h5 class="text-muted"><?php echo $proficiency_exam[0]->writing_score; ?></h5>
									</div>
									<div class="col-md-3">
										<h5><u>Speaking Score</u></h5>
										<h5 class="text-muted"><?php echo $proficiency_exam[0]->speaking_score; ?></h5>
									</div>
								</div>
							</div>
							<?php }?>
							<div class="m-portlet__body-separator"></div>
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-12">
										<h5><u>Other Languages</u></h5>
									</div>
								</div>
							</div>
							<div class="m-section">
								<div class="m-section__content">
									<table class="table m-table m-table--head-bg-success">
										<thead>
											<tr>
												<th>Language</th>
												<th>Speaking Level</th>
												<th>Writing Level</th>

											</tr>
										</thead>
										<tbody>
											<?php foreach($languages as $lang) { ?>
											<tr>
												<td><?php echo $lang->language;?></td>
												<td><?php echo $lang->language_speaking_level;?></td>
												<td><?php echo $lang->language_writing_level;?></td>
											</tr>
											<?php }?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="m-portlet m-portlet--responsive-mobile m-portlet--warning m-portlet--head-solid-bg m-portlet--bordered">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon">
										<i class="fa fa-star"></i>
									</span>
									<h3 class="m-portlet__head-text">
										Additional Infomation
									</h3>
								</div>
							</div>
						</div>
						<div class="m-portlet__body">
							<div class="form-group m-form__group">
								<div class="row">
									<div class="col-md-12">
										<h5><u>How did you hear about Best Workers?</u></h5>
										<h5 class="text-muted">Referred by Ken Oh</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!--end::Modal-->

</div>