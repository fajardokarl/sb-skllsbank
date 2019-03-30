<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Pending Registrations
				</h3>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">

		<!--begin: Search Form -->
		<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
			<div class="row align-items-center">
				<div class="col-xl-8 order-2 order-xl-1">
					<div class="form-group m-form__group row align-items-center">
						<!-- <div class="col-md-4">
							<div class="m-form__group m-form__group--inline">
								<div class="m-form__label">
									<label>Status:</label>
								</div>
								<div class="m-form__control">
									<select class="form-control m-bootstrap-select" id="m_form_status">
										<option value="">All</option>
										<option value="1">Pending</option>
										<option value="2">Delivered</option>
										<option value="3">Canceled</option>
									</select>
								</div>
							</div>
							<div class="d-md-none m--margin-bottom-10"></div>
						</div>
						<div class="col-md-4">
							<div class="m-form__group m-form__group--inline">
								<div class="m-form__label">
									<label class="m-label m-label--single">Type:</label>
								</div>
								<div class="m-form__control">
									<select class="form-control m-bootstrap-select" id="m_form_type">
										<option value="">All</option>
										<option value="1">Online</option>
										<option value="2">Retail</option>
										<option value="3">Direct</option>
									</select>
								</div>
							</div>
							<div class="d-md-none m--margin-bottom-10"></div>
						</div> -->
						<div class="col-md-4">
							<div class="m-input-icon m-input-icon--left">
								<input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
								<span class="m-input-icon__icon m-input-icon__icon--left">
									<span><i class="la la-search"></i></span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--end: Search Form -->

		<!--begin: Datatable -->
		<table class="m-datatable" id="html_table" width="100%">
			<thead>
				<tr>
					<th title="Field #1" data-field="DateRegistered">Date Registered (YYYY-MM-DD)</th>
					<th title="Field #2" data-field="CompanyName">Company Name</th>
					<th title="Field #3" data-field="CompanyStatus">Status</th>
					<th title="Field #4" data-field="Actions">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($employers as $employer) { ?>
				<tr>
					<td><?php echo $employer->date_registered;?></td>
					<td><?php echo $employer->company_name;?></td>
					<td><?php if($employer->company_status == "2") {
								echo "Reserved"; } else { echo "Pending";}?>
					</td>
					<td align="center"><a class="btn btn-primary btn-sm" href="<?php echo base_url('kenton/waitlist/company_view/'.$employer->company_id); ?>"><i class="fa fa-eye"></i> View</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>