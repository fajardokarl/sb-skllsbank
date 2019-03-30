<div class="row">
	<div class="col-md-12">

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
</div>