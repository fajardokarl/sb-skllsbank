<div class="row">
	<div class="col-md-12">

		<!--begin::Portlet-->
		<form class="m-form m-form--fit m-form--label-align-right" action="<?php echo base_url('modules/welcome/controllers/applicant_registration/insert_applicant'); ?>" method="post">
			<div class="m-portlet m-portlet--tab">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<span class="m-portlet__head-icon m--hide">
								<i class="la la-gear"></i>
							</span>
							<h3 class="m-portlet__head-text">
								Account Information
							</h3>
						</div>
					</div>
				</div>
				<div class="m-portlet__body">
					<div class="form-group m-form__group m--margin-top-10">
						<div class="alert m-alert m-alert--default" role="alert">
							Enter your account information. Make sure to never share your information and and don't forget them.
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-6">
								<label for="register_email">Email address</label>
								<input type="email" class="form-control m-input" id="register_email" name="register_email" required placeholder="Enter email">
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-6">
								<label for="register_password">Password</label>
								<input type="password" class="form-control m-input" id="register_password" name="register_password" required placeholder="Enter password">
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-6">
								<label for="register_retype_password">Re-type Password</label>
								<input type="password" class="form-control m-input" id="register_retype_password" name="register_retype_password" placeholder="Retype password" required>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end::Portlet-->

			<!--begin::Portlet-->
			<div class="m-portlet m-portlet--tab">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<span class="m-portlet__head-icon m--hide">
								<i class="la la-gear"></i>
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
								<label for="register_firstname">First Name</label>
								<input type="text" class="form-control m-input" id="register_firstname" name="register_firstname" placeholder="Enter first name" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_middlename">Middle Name</label>
								<input type="text" class="form-control m-input" id="register_middlename" name="register_middlename" placeholder="Enter middle name">
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_lastname">Last Name</label>
								<input type="text" class="form-control m-input" id="register_lastname" name="register_lastname" placeholder="Enter last name" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-4">						
								<label for="register_gender">Gender</label>
								<select class="form-control m-input m-input--air" id="register_gender" name="register_gender" required>
									<option>Male</option>
									<option>Female</option>
								</select>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_applicant_bday">Date of Birth</label>
								<input type="text" class="form-control m_datepicker_1" data-date-format="dd/mm/yyyy" id="register_applicant_bday" name="register_applicant_bday" readonly placeholder="Select date of birth" required/>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_age">Age</label>
								<input type="number" class="form-control m-input" id="register_age" name="register_age" placeholder="Enter age" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-4">
								<label for="register_marital_status">Marital Status</label>
								<select class="form-control m-input m-input--air" id="register_marital_status" name="register_marital_status" required>
									<option value="" disabled selected></option>
									<option value="Single">Single</option>
									<option value="De Facto">De Facto</option>
									<option value="Married">Married</option>
									<option value="Divorced">Divorced</option>
									<option value="Widowed">Widowed</option>
								</select>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group spouse" style="padding-bottom: 0px; display: none;">
						<div class="row">
							<div class="col-md-12">
								<label>Spouse Educational Background</label>
							</div>
						</div>
					</div>
					<div class="form-group m-form__group spouse" style="display: none;">
						<div class="row">
							<div class="col-md-6">
								<label for="register_spouse_education">Spouse Highest Educational Attainment</label>
								<select class="form-control m-input m-input--air" id="register_spouse_education" name="register_spouse_education" required>
									<option value="" disabled selected></option>
									<option value="High School">High School</option>
									<option value="Certificate">Certificate</option>
									<option value="Diploma">Diploma</option>
									<option value="Bachelor Degree">Bachelor Degree</option>
									<option value="Post Graduate Diploma">Post Graduate Diploma</option>
									<option value="Master's Degree">Master's Degree</option>
									<option value="Doctorate Degree">Doctorate Degree</option>
								</select>
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group spouse" style="display: none;">
						<div class="row">
							<div class="col-md-4">
								<label for="register_spouse_school">School Name</label>
								<input type="email" class="form-control m-input" id="register_spouse_school" name="register_spouse_school" required placeholder="Enter school name">
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_spouse_degree">Degree / Major / Year Level</label>
								<input type="email" class="form-control m-input" id="register_spouse_degree" name="register_spouse_degree" required placeholder="Enter degree / major / year level">
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_spouse_edu_year">Year Finished</label>
								<input type="text" class="form-control" id="register_spouse_edu_year" name="register_spouse_edu_year" placeholder="Enter year finished">
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group spouse" style="padding-bottom: 0px; display: none;">
						<div class="row">
							<div class="col-md-12">
								<label>Spouse English Proficiency</label>
							</div>
						</div>
					</div>
					<div class="form-group m-form__group spouse" style="display: none;">
						<div class="row">
							<div class="col-md-6">
								<label for="register_spouse_proficiency_exam">English Proficiency Exam</label>
								<select class="form-control m-input m-input--air" id="register_spouse_proficiency_exam" name="register_spouse_proficiency_exam" required>
									<option value="None" selected>None</option>
									<option value="IELTS - General">IELTS - General</option>
									<option value="IELTS - Academic">IELTS - Academic</option>
									<option value="TOEIC">PTE</option>
									<option value="TOEFL">TOEFL</option>
									<option value="TOEFL">OET</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="register_spouse_date_assessed">Date of Assessment</label>
								<input type="text" class="form-control m_datepicker_1" data-date-format="dd/mm/yyyy" id="register_spouse_date_assessed" name="register_spouse_date_assessed" readonly placeholder="Select date of assesment" required/>
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group spouse" style="display: none;">
						<div class="row">
							<div class="col-md-3">
								<label for="register_spouse_overall_score">Overall Score</label>
								<input type="email" class="form-control m-input" id="register_spouse_overall_score" name="register_spouse_overall_score" placeholder="Enter overall score">
							</div>
						</div>
					</div>
					<div class="form-group m-form__group spouse" style="display: none;">
						<div class="row">
							<div class="col-md-3">
								<label for="register_spouse_listening_score">Listening Score</label>
								<input type="text" class="form-control m-input" id="register_spouse_listening_score" name="register_spouse_listening_score" placeholder="Enter listening score">
							</div>
							<div class="col-md-3">
								<label for="register_spouse_reading_score">Reading Score</label>
								<input type="text" class="form-control m-input" id="register_spouse_reading_score" name="register_spouse_reading_score" placeholder="Enter reading score">
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-3">
								<label for="register_spouse_writing_score">Writing Score</label>
								<input type="text" class="form-control m-input" id="register_spouse_writing_score" name="register_spouse_writing_score" placeholder="Enter writing score">
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-3">
								<label for="register_spouse_speaking_score">Speaking Score</label>
								<input type="text" class="form-control m-input" id="register_spouse_speaking_score" name="register_spouse_speaking_score" placeholder="Enter speaking score">
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group" style="padding-bottom: 0px;">
						<div class="row">
							<div class="col-md-12">
								<label>Current Address</label>
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-4">						
								<label for="register_address1_current">Address Line 1</label>
								<input type="text" class="form-control" id="register_address1_current" name="register_address1_current" placeholder="Enter current address line 1" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_address2_current">Address Line 2</label>
								<input type="text" class="form-control" id="register_address2_current" name="register_address2_current" placeholder="Enter current address line 2" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_city_current">City / Town</label>
								<input type="text" class="form-control m-input" id="register_city_current" name="register_city_current" placeholder="Enter current city" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-4">						
								<label for="register_state_current">State / Province / Region</label>
								<input type="text" class="form-control" id="register_state_current" name="register_state_current" placeholder="Select current state / province / region" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_state_current">Country</label>
								<input type="text" class="form-control" id="register_country_current" name="register_state_current" placeholder="Select current country" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group" style="padding-bottom: 0px;">
						<div class="row">
							<div class="col-md-12">
								<label>Permanent Address</label>
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-4">						
								<label for="register_address1_permanent">Address Line 1</label>
								<input type="text" class="form-control" id="register_address1_permanent" name="register_address1_permanent" placeholder="Enter permanent address line 1" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_address2_permanent">Address Line 2</label>
								<input type="text" class="form-control" id="register_address2_permanent" name="register_address2_permanent" placeholder="Enter permanent address line 2" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_city_permanent">City / Town</label>
								<input type="text" class="form-control m-input" id="register_city_permanent" name="register_city_permanent"  placeholder="Enter permanent city" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-4">						
								<label for="register_state_permanent">State / Province / Region</label>
								<input type="text" class="form-control" id="register_state_permanent" name="register_state_permanent" placeholder="Enter permanent state / province / region" required/>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_country_permanent">Country</label>
								<input type="text" class="form-control" id="register_country_permanent" name="register_country_permanent" readonly placeholder="Enter permanent country" required/>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-6">						
								<label for="register_phone_number">Phone Number</label>
								<input type="text" class="form-control" id="register_phone_number" name="register_phone_number" placeholder="Enter phone number" >
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-6">
								<label for="register_mobile_number">Mobile Number</label>
								<input type="text" class="form-control" id="register_mobile_number" name="register_mobile_number" placeholder="Enter mobile number" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-6">						
								<label for="register_email2">Email Address</label>
								<input type="text" class="form-control" id="register_email2" name="register_email2" placeholder="Enter email address" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-6">
								<label for="register_facebook">Facebook Link</label>
								<input type="text" class="form-control" id="register_facebook" name="register_facebook" placeholder="Enter facebook link" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
				</div>				
			</div>
			<!--end::Portlet-->

			<div class="m-portlet m-portlet--tab">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<span class="m-portlet__head-icon m--hide">
								<i class="la la-gear"></i>
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
							<div class="col-md-6">
								<label for="register_applicant_education">Highest Educational Attainment</label>
								<select class="form-control m-input m-input--air" id="register_applicant_education" name="register_applicant_education" required>
									<option value="" disabled selected></option>
									<option value="High School">High School</option>
									<option value="Certificate">Certificate</option>
									<option value="Diploma">Diploma</option>
									<option value="Bachelor Degree">Bachelor Degree</option>
									<option value="Post Graduate Diploma">Post Graduate Diploma</option>
									<option value="Master's Degree">Master's Degree</option>
									<option value="Doctorate Degree">Doctorate Degree</option>
								</select>
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-4">
								<label for="register_applicant_school">School Name</label>
								<input type="email" class="form-control m-input" id="register_applicant_school" name="register_applicant_school" required placeholder="Enter school name">
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_applicant_degree">Degree / Major / Year Level</label>
								<input type="email" class="form-control m-input" id="register_applicant_degree" name="register_applicant_degree" required placeholder="Enter degree / major / year level">
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_applicant_edu_year">Year Finished</label>
								<input type="text" class="form-control" id="register_applicant_edu_year" name="register_applicant_edu_year" required placeholder="Enter year finished">
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--begin::Portlet-->
			<div class="m-portlet m-portlet--tab">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<span class="m-portlet__head-icon m--hide">
								<i class="la la-gear"></i>
							</span>
							<h3 class="m-portlet__head-text">
								Work Experience
							</h3>
						</div>
					</div>
				</div>
				<div class="m-portlet__body">
					<div class="form-group m-form__group">
						<label for="register_job_description">Job Title</label>
						<input type="email" class="form-control m-input" id="register_job_description" name="register_job_description" placeholder="Enter job description" required>
						<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
					</div>
					<div class="form-group m-form__group">
						<label for="register_job_description_summary">Summary of Job Description</label>
						<textarea class="form-control m-input m-input" id="register_job_description_summary" name="register_job_description_summary" rows="3" required></textarea>
						<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
					</div>
					<div class="form-group m-form__group m--margin-top-10">
						<div class="alert m-alert m-alert--default" role="alert">
							List all periods of employment, including self-employment.
						</div>
					</div>
					<div class="form-group m-form__group">
						<div id="m_repeater_1">
							<div class="form-group  m-form__group row" id="m_repeater_1">
								<label class="form-label">Work Experience:</label>
								<div data-repeater-list="" class="col-lg-10">
									<div data-repeater-item class="form-group m-form__group">
										<div class="row">
											<div class="col-md-3">
												<div class="m-form__group m-form__group">
													<div class="m-form__label">
														<label>From Date</label>
													</div>
													<div class="m-form__control">
														<input type="text" class="form-control m_datepicker_1" data-date-format="dd/mm/yyyy" id="register_work_experience_from_date" name="register_work_experience_from_date" readonly placeholder="Select date" required/>
													</div>
												</div>
												<div class="d-md-none m--margin-bottom-10"></div>
											</div>
											<div class="col-md-3">
												<div class="m-form__group m-form__group">
													<div class="m-form__label">
														<label class="m-label m-label--single">To Date</label>
													</div>
													<div class="m-form__control">
														<input type="text" class="form-control m_datepicker_1" data-date-format="dd/mm/yyyy" id="register_work_experience_to_date" name="register_work_experience_to_date" readonly placeholder="Select date" required/>
													</div>
												</div>
												<div class="d-md-none m--margin-bottom-10"></div>
											</div>
											<div class="col-md-6">
												<div class="m-form__group m-form__group">
													<div class="m-form__label">
														<label class="m-label m-label--single">Employer / Company</label>
													</div>
													<div class="m-form__control">
														<input type="text" class="form-control m-input" id="register_work_experience_employer" name="register_work_experience_employer" placeholder="Enter employer / company name" required>
													</div>
												</div>
												<div class="d-md-none m--margin-bottom-10"></div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="m-form__group m-form__group">
													<div class="m-form__label">
														<label class="m-label m-label--single">Location</label>
													</div>
													<div class="m-form__control">
														<input type="text" class="form-control m-input" id="register_work_experience_location" name="register_work_experience_location" placeholder="Enter employer / company location" required>
													</div>
												</div>
												<div class="d-md-none m--margin-bottom-10"></div>
											</div>
											<div class="col-md-6">
												<div class="m-form__group m-form__group">
													<div class="m-form__label">
														<label class="m-label m-label--single">Job Title</label>
													</div>
													<div class="m-form__control">
														<input type="text" class="form-control m-input" id="register_work_experience_job_title" name="register_work_experience_job_title" placeholder="Enter job title" required>
													</div>
												</div>
												<div class="d-md-none m--margin-bottom-10"></div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="m-form__group m-form__group">
													<div class="m-form__label">
														<label class="m-label m-label--single">Summary of Job Description</label>
													</div>
													<div class="m-form__control">
														<textarea class="form-control m-input m-input" id="register_work_experience_job_description_summary" name="register_work_experience_job_description_summary" rows="3" required></textarea>
													</div>
												</div>
												<div class="d-md-none m--margin-bottom-10"></div>
											</div>
											<div class="col-md-4">
												<div data-repeater-delete="" class="btn-sm btn btn-danger m-btn m-btn--icon m-btn--pill">
													<span>
														<i class="la la-trash-o"></i>
														<span>Delete</span>
													</span>
												</div>
												<div class="d-md-none m--margin-bottom-10"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="m-form__group form-group row">
								<label class="col-lg-2 col-form-label"></label>
								<div class="col-lg-4">
									<div data-repeater-create="" class="btn btn btn-sm btn-brand m-btn m-btn--icon m-btn--pill m-btn--wide">
										<span>
											<i class="la la-plus"></i>
											<span>Add</span>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end::Portlet-->

			<!--start::Portlet-->
			<div class="m-portlet m-portlet--tab">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<span class="m-portlet__head-icon m--hide">
								<i class="la la-gear"></i>
							</span>
							<h3 class="m-portlet__head-text">
								Language Proficiency
							</h3>
						</div>
					</div>
				</div>

				<div class="m-portlet__body">
					<!-- <div class="form-group m-form__group">
						<label for="register_first_language">What is your first language?</label>
						<input type="email" class="form-control m-input" id="register_first_language" name="register_first_language" placeholder="Enter first language" required>
					</div> -->
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-4">
								<label for="exampleInputEmail1">Have you ever had your English language abilities or proficiency tested?</label>
								<div class="m-radio-inline">
									<label class="m-radio">
										<input type="radio" name="register_proficiency_bool" value="YES"> Yes
										<span></span>
									</label>
									<label class="m-radio">
										<input type="radio" name="register_proficiency_bool" value="NO"> No
										<span></span>
									</label>
								</div>
							</div>
							<div class="col-md-4">
								<label for="register_english_level">What level is your English Speaking level?</label>
								<select class="form-control m-input m-input--air" id="register_applicant_english_speaking_level" name="register_applicant_english_speaking_level" required>
									<option value="" disabled selected></option>
									<option value="Beginner">Beginner</option>
									<option value="Elementary">Elementary</option>
									<option value="Low Intermediate">Low Intermediate</option>
									<option value="Intermediate">Intermediate</option>
									<option value="Upper Intermediate">Upper Intermediate</option>
									<option value="Advanced">Advanced</option>
								</select>
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_english_level">What level is your English Writing level?</label>
								<select class="form-control m-input m-input--air" id="register_applicant_english_writing_level" name="register_applicant_english_writing_level" required>
									<option value="" disabled selected></option>
									<option value="Beginner">Beginner</option>
									<option value="Elementary">Elementary</option>
									<option value="Low Intermediate">Low Intermediate</option>
									<option value="Intermediate">Intermediate</option>
									<option value="Upper Intermediate">Upper Intermediate</option>
									<option value="Advanced">Advanced</option>
								</select>
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-6">
								<label for="exampleInputEmail1">English Proficiency Exam</label>
								<select class="form-control m-input m-input--air" id="register_applicant_proficiency_exam" name="register_applicant_proficiency_exam" required>
									<option value="None" selected>None</option>
									<option value="IELTS - General">IELTS - General</option>
									<option value="IELTS - Academic">IELTS - Academic</option>
									<option value="TOEIC">PTE</option>
									<option value="TOEFL">TOEFL</option>
									<option value="TOEFL">OET</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="register_applicant_date_assessed">Date of Assessment</label>
								<input type="text" class="form-control m_datepicker_1" data-date-format="dd/mm/yyyy" id="register_applicant_date_assessed" name="register_applicant_date_assessed" readonly placeholder="Select date of assesment" required/>
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-3">
								<label for="register_overall_score">Overall Score</label>
								<input type="number" class="form-control m-input" id="register_applicant_overall_score" name="register_applicant_overall_score" placeholder="Enter overall score">
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-3">
								<label for="register_applicant_listening_score">Listening Score</label>
								<input type="number" class="form-control m-input" id="register_applicant_listening_score" name="register_applicant_listening_score" placeholder="Enter listening score">
							</div>
							<div class="col-md-3">
								<label for="register_applicant_reading_score">Reading Score</label>
								<input type="number" class="form-control m-input" id="register_applicant_reading_score" name="register_applicant_reading_score" placeholder="Enter reading score">
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-3">
								<label for="register_applicant_writing_score">Writing Score</label>
								<input type="number" class="form-control m-input" id="register_applicant_writing_score" name="register_applicant_writing_score" placeholder="Enter writing score">
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-3">
								<label for="register_applicant_speaking_score">Speaking Score</label>
								<input type="text" class="form-control m-input" id="register_applicant_speaking_score" name="register_applicant_speaking_score" placeholder="Enter speaking score">
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div id="m_repeater_2">
						<div class="form-group m-form__group" id="m_repeater_2">
							<label class="col-form-label">Other Languages:</label>
							<div data-repeater-list="" class="">
								<div data-repeater-item class="form-group m-form__group row">
									<div class="col-md-3">
										<div class="m-form__group m-form__group">
											<div class="m-form__label">
												<label>Language</label>
											</div>
											<div class="m-form__control">
												<input type="text" class="form-control m-input" placeholder="Enter language">
											</div>
										</div>
										<div class="d-md-none m--margin-bottom-10"></div>
									</div>
									<div class="col-md-3">
										<div class="m-form__group m-form__group">
											<div class="m-form__label">
												<label class="m-label m-label--single">Language Speaking level</label>
											</div>
											<div class="m-form__control">
												<select class="form-control m-input m-input--air" id="register_language_speaking_level" name="register_language_speaking_level" required>
													<option value="" disabled selected></option>
													<option value="Native">Native</option>
													<option value="Beginner">Beginner</option>
													<option value="Elementary">Elementary</option>
													<option value="Low Intermediate">Low Intermediate</option>
													<option value="Intermediate">Intermediate</option>
													<option value="Upper Intermediate">Upper Intermediate</option>
													<option value="Advanced">Advanced</option>
												</select>
											</div>
										</div>
										<div class="d-md-none m--margin-bottom-10"></div>
									</div>
									<div class="col-md-3">
										<div class="m-form__group m-form__group">
											<div class="m-form__label">
												<label class="m-label m-label--single">Language Writing level</label>
											</div>
											<div class="m-form__control">
												<select class="form-control m-input m-input--air" id="register_language_writing_level" name="register_language_writing_level" required>
													<option value="" disabled selected></option>
													<option value="Native">Native</option>
													<option value="Beginner">Beginner</option>
													<option value="Elementary">Elementary</option>
													<option value="Low Intermediate">Low Intermediate</option>
													<option value="Intermediate">Intermediate</option>
													<option value="Upper Intermediate">Upper Intermediate</option>
													<option value="Advanced">Advanced</option>
												</select>
											</div>
										</div>
										<div class="d-md-none m--margin-bottom-10"></div>
									</div>
									<div class="col-md-3">
										<div data-repeater-delete="" class="btn-sm btn btn-danger m-btn m-btn--icon m-btn--pill">
											<span>
												<i class="la la-trash-o"></i>
												<span>Delete</span>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-form__group form-group row">
							<label class="col-lg-2 col-form-label"></label>
							<div class="col-lg-4">
								<div data-repeater-create="" class="btn btn btn-sm btn-brand m-btn m-btn--icon m-btn--pill m-btn--wide">
									<span>
										<i class="la la-plus"></i>
										<span>Add</span>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!--end::Portlet-->

			<div class="m-portlet m-portlet--tab">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<span class="m-portlet__head-icon m--hide">
								<i class="la la-gear"></i>
							</span>
							<h3 class="m-portlet__head-text">
								Additional Questions
							</h3>
						</div>
					</div>
				</div>

					<div class="m-portlet__body">
						<div class="form-group m-form__group" style="padding-bottom: 0px;">
							<label>How did you hear about Best Workers?</label>
							<div class="m-checkbox-list">
								<div class="row">
								    <div class="col-md-4">
								    	<div class="form-group">
									        <label class="m-checkbox">
												<input type="checkbox" name="register_ads[]" id="register_ads1"> Facebook Ads
												<span></span>
											</label>
									        <label class="m-checkbox">
												<input type="checkbox" name="register_ads[]" id="register_ads2"> Referred by 
												<span></span>
											</label>
								        </div>
								    </div>
								    <div class="col-md-4">
								    	<div class="form-group">
									        <label class="m-checkbox">
												<input type="checkbox" name="register_ads[]" id="register_ads3"> Internet Ads 
												<span></span>
											</label>
									        <label class="m-checkbox">
												<input type="checkbox" name="register_ads[]" id="register_ads4"> Others
												<span></span>
											</label>
								        </div>
								    </div>
								    <div class="col-md-4">
								    	<div class="form-group">
									        <label class="m-checkbox">
												<input type="checkbox" name="register_ads[]" id="register_ads5"> Marketing Associate
												<span></span>
											</label>
								        </div>
								    </div>
								</div>
							</div>
						</div>
						<div class="form-group m-form__group" style="padding-top: 0px;">
							<div class="row">
								<div class="col-md-4">
									<input type="text" class="form-control m-input" id="register_referral_person" name="register_referral_person" placeholder="Enter referral person">
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control m-input" id="register_other_reason" name="register_other_reason" placeholder="Enter other reason">
								</div>
							</div>
						</div>
						<div class="form-group m-form__group"">
							<div class="m-checkbox-inline">
								<label class="m-checkbox">
									<input type="checkbox" id="register_terms_and_conditions" name="register_terms_and_conditions" required> I accept the Terms and Conditions of Best Workers.
									<span></span>
								</label>
							</div>
						</div>
					</div>
					<div class="m-portlet__foot m-portlet__foot--fit">
						<div class="m-form__actions">
							<button type="button" class="btn btn-accent" id="submit_button">Submit</button>
							<button type="reset" class="btn btn-secondary">Cancel</button>
						</div>
					</div>
			</div>
		</form>
		<!--end::Portlet-->

	</div>
	
</div>