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
								<label for="register_email" class="m--font-danger">Email address</label>
								<input type="email" class="form-control m-input" id="register_email" name="register_email" required placeholder="Enter email">
								<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-6">
								<label for="register_password" class="m--font-danger">Password</label>
								<input type="password" class="form-control m-input" id="register_password" name="register_password" required placeholder="Enter password">
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-6">
								<label for="register_retype_password" class="m--font-danger">Re-type Password</label>
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
								<label for="register_firstname" class="m--font-danger">First Name</label>
								<input type="text" class="form-control m-input" id="register_firstname" name="register_firstname" placeholder="Enter first name" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_middlename" class="m--font-danger">Middle Name</label>
								<input type="text" class="form-control m-input" id="register_middlename" name="register_middlename" placeholder="Enter middle name">
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_lastname" class="m--font-danger">Last Name</label>
								<input type="text" class="form-control m-input" id="register_lastname" name="register_lastname" placeholder="Enter last name" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-4">						
								<label for="register_gender" class="m--font-danger">Gender</label>
								<select class="form-control m-input m-input--air" id="register_gender" name="register_gender" required>
									<option value="" disabled selected></option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_applicant_bday" class="m--font-danger">Date of Birth</label>
								<input type="text" class="form-control m_datepicker_1" data-date-format="dd/mm/yyyy" id="register_applicant_bday" name="register_applicant_bday" readonly placeholder="Select date of birth" required/>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_age" class="m--font-danger">Age</label>
								<input type="number" class="form-control m-input" id="register_age" name="register_age" placeholder="Enter age" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-4">
								<label for="register_marital_status" class="m--font-danger">Marital Status</label>
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
								<label for="register_address1_current" class="m--font-danger">Address Line 1</label>
								<input type="text" class="form-control" id="register_address1_current" name="register_address1_current" placeholder="Enter current address line 1" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_address2_current" class="m--font-danger">Address Line 2</label>
								<input type="text" class="form-control" id="register_address2_current" name="register_address2_current" placeholder="Enter current address line 2" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_city_current" class="m--font-danger">City / Town</label>
								<input type="text" class="form-control m-input" id="register_city_current" name="register_city_current" placeholder="Enter current city" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-4">						
								<label for="register_state_current" class="m--font-danger">State / Province / Region</label>
								<input type="text" class="form-control" id="register_state_current" name="register_state_current" placeholder="Select current state / province / region" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_state_current" class="m--font-danger">Country</label>
								<input type="text" class="form-control" id="register_country_current" name="register_state_current" placeholder="Select current country" required>
								<!-- <?php 
								$country_options=array(
									'id' => 'register_country_current',
									'class' => 'form-control m-input m-input--air',
									'name' => 'register_country_current',
									'required' => 'required'
								);
								echo form_dropdown('country',$country_list,'NZ',$country_options);
								?> -->
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
								<label for="register_address1_permanent" class="m--font-danger">Address Line 1</label>
								<input type="text" class="form-control" id="register_address1_permanent" name="register_address1_permanent" placeholder="Enter permanent address line 1" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_address2_permanent" class="m--font-danger">Address Line 2</label>
								<input type="text" class="form-control" id="register_address2_permanent" name="register_address2_permanent" placeholder="Enter permanent address line 2" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_city_permanent" class="m--font-danger">City / Town</label>
								<input type="text" class="form-control m-input" id="register_city_permanent" name="register_city_permanent"  placeholder="Enter permanent city" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-4">						
								<label for="register_state_permanent" class="m--font-danger">State / Province / Region</label>
								<input type="text" class="form-control" id="register_state_permanent" name="register_state_permanent" placeholder="Enter permanent state / province / region" required/>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-4">
								<label for="register_country_permanent" class="m--font-danger">Country</label>
								<input type="text" class="form-control" id="register_country_permanent" name="register_country_permanent" readonly placeholder="Enter permanent country" required/>
								<!-- <?php 
								$country_options=array(
									'id' => 'register_country_permanent',
									'class' => 'form-control m-input m-input--air',
									'name' => 'register_country_permanent',
									'required' => 'required'
								);
								echo form_dropdown('country',$country_list,'NZ',$country_options);
								?> -->
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
								<label for="register_mobile_number" class="m--font-danger">Mobile Number</label>
								<input type="text" class="form-control" id="register_mobile_number" name="register_mobile_number" placeholder="Enter mobile number" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
					<div class="form-group m-form__group">
						<div class="row">
							<div class="col-md-6">						
								<label for="register_email2" class="m--font-danger">Email Address</label>
								<input type="text" class="form-control" id="register_email2" name="register_email2" placeholder="Enter email address" required>
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
							<div class="col-md-6">
								<label for="register_facebook">Facebook Link</label>
								<input type="text" class="form-control" id="register_facebook" name="register_facebook" placeholder="Enter facebook link">
									<!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
							</div>
						</div>
					</div>
				</div>
				<div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-form__actions">
						<button type="submit" class="btn btn-accent" id="submit_button">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>				
			</div>
			<!--end::Portlet-->

		</form>
		<!--end::Portlet-->

	</div>
	
</div>