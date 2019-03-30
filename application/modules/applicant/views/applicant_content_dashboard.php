<div class="row">
	<div class="col-md-12">
        <!--begin::User alert-->
        <?php if ($applicant->profile_complete == 0) {
            ?>
               		<div class="alert alert-brand m-alert m-alert--icon m-alert--air m-alert--square m--margin-bottom-30" role="alert">
                       <div class="m-alert__icon">
                           <i class="flaticon-exclamation-1"></i>
                       </div>
                       <div class="m-alert__text">
                           <strong>Your profile is incomplete. </strong>
                           <p>Only completed profiles will be matched to companies searching for applicants and will only appear on search results to companies searching employees.</p>
                       </div>
                   </div>
        <?php } ?>
        <!--end::User alert-->
    </div>
</div>
<div class="row">
    <!--begin::User profile-->
    <div class="col-xl-3 col-lg-4">
        <!--begin::User profile sidebar-->
        <div class="m-portlet m-portlet--full-height  ">
            <div class="m-portlet__body">
                <div class="m-card-profile">
                    <div class="m-card-profile__title m--hide">
                        Your Profile
                    </div>
                    <div class="m-card-profile__pic">
                        <div class="m-card-profile__pic-wrapper">
                            <img src="<?php echo base_url(); ?>assets/app/media/img/users/user4.jpg" alt="" />
                        </div>
                    </div>
                    <div class="m-card-profile__details">
                        <span class="m-card-profile__name"><?=$person->display_name?></span>
                        <a href="" class="m-card-profile__email m-link"><?=$user['email']?></a>
                    </div>
                </div>
                <ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
                    <li class="m-nav__separator m-nav__separator--fit"></li>
                    <li class="m-nav__section m--hide">
                        <span class="m-nav__section-text">Section</span>
                    </li>
                    <li class="m-nav__item">
                        <a href="#" class="m-nav__link">
                            <i class="m-nav__link-icon flaticon-profile-1"></i>
                            <span class="m-nav__link-title">
                                <span class="m-nav__link-wrap">
                                    <span class="m-nav__link-text">Profile Status</span>
                                    <span class="m-nav__link-badge"><span class="m-badge m-badge--<?=($applicant->profile_complete)?'success':'warning'?>"><?=($applicant->profile_complete)?'complete':'incomplete'?></span></span>
                                </span>
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__item">
                        <a href="#" class="m-nav__link">
                            <i class="m-nav__link-icon flaticon-profile-1"></i>
                            <span class="m-nav__link-title">
                                <span class="m-nav__link-wrap">
                                    <span class="m-nav__link-text">Account Verification</span>
                                    <span class="m-nav__link-badge"><span class="m-badge m-badge--<?=($applicant->profile_complete)?'success':'warning'?>"><?=($applicant->profile_complete)?'complete':'incomplete'?></span></span>
                                </span>
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__item">
                        <a href="#" class="m-nav__link">
                            <i class="m-nav__link-icon flaticon-profile-1"></i>
                            <span class="m-nav__link-title">
                                <span class="m-nav__link-wrap">
                                    <span class="m-nav__link-text">Account Approved</span>
                                    <span class="m-nav__link-badge"><span class="m-badge m-badge--<?=($applicant->profile_complete)?'success':'warning'?>"><?=($applicant->profile_complete)?'complete':'incomplete'?></span></span>
                                </span>
                            </span>
                        </a>
                    </li>
                </ul>
                
            </div>
        </div>
        <!--end::User profile sidebar-->
    </div>

    <div class="col-xl-9 col-lg-8">
    <!--begin::User profile sidebar-->
        <!--begin::Portlet-->
        <div class="m-portlet m-portlet--tabs">
            <div class="m-portlet__head">
                <div class="m-portlet__head-tools">
                    <ul class="nav nav-tabs m-tabs-line m-tabs-line--primary m-tabs-line--2x" role="tablist">
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1" role="tab">
                                <i class="la la-user"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_2" role="tab">
                                <i class="la la-graduation-cap"></i> Education
                            </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3" role="tab">
                                <i class="la la-briefcase"></i> Work
                            </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_4" role="tab">
                                <i class="la la-globe"></i> Language
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
                        
                        <!--begin::Section accordion-->
                        <div class="m-accordion m-accordion--bordered" id="m_accordion_2" role="tablist">

                            <!--begin::Item-->
                            <div class="m-accordion__item">
                                <div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_2_item_1_head" data-toggle="collapse" href="#m_accordion_2_item_1_body" aria-expanded="    false">
                                    <span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
                                    <span class="m-accordion__item-title">Account Information</span>
                                    <span class="m-accordion__item-mode"></span>
                                </div>
                                <div class="m-accordion__item-body collapse" id="m_accordion_2_item_1_body" class=" " role="tabpanel" aria-labelledby="m_accordion_2_item_1_head" data-parent="#m_accordion_2">
                                    <div class="m-accordion__item-content">
                                        <div class="form-group m-form__group m--margin-top-10">
                                            <div class="alert m-alert m-alert--default" role="alert">
                                            Update your account details, if you dont want to change them, just leave them blank.
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
                                                    <label for="register_username">Username</label>
                                                    <input type="username" class="form-control m-input" id="register_username" name="register_username" required placeholder="Enter username">
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
                            </div>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <div class="m-accordion__item">
                                <div class="m-accordion__item-head show" role="tab" id="m_accordion_2_item_2_head" data-toggle="collapse" href="#m_accordion_2_item_2_body" aria-expanded="    true">
                                    <span class="m-accordion__item-icon"><i class="fa  flaticon-placeholder"></i></span>
                                    <span class="m-accordion__item-title">Personal Information</span>
                                    <span class="m-accordion__item-mode"></span>
                                </div>
                                <div class="m-accordion__item-body show" id="m_accordion_2_item_2_body" class=" " role="tabpanel" aria-labelledby="m_accordion_2_item_2_head" data-parent="#m_accordion_2">
                                    <div class="m-accordion__item-content">
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
                                        <hr>
                                        <div class="form-group m-form__group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label><strong>Current Address</strong></label>
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
                                        <div class="form-group m-form__group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label><strong>Permanent Address</strong></label>
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
                                        <hr>
                                        <div class="form-group m-form__group" style="padding-bottom: 0px;">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label><strong>Contact Details</strong></label>
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
                            </div>
                            <!--end::Item-->

                            
                        </div>
                        <!--end::Section accordion-->

                    </div>
                    <div class="tab-pane" id="m_tabs_6_2" role="tabpanel">
                        <!--begin::Section accordion-->
                        <div class="m-accordion m-accordion--bordered" id="m_accordion_2" role="tablist">

                            <!--begin::Item-->
                            <div class="m-accordion__item">
                                <div class="m-accordion__item-head " role="tab" id="m_accordion_2_item_1_head" data-toggle="collapse" href="#m_accordion_2_item_1_body" aria-expanded="    true">
                                    <span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
                                    <span class="m-accordion__item-title">Education</span>
                                    <span class="m-accordion__item-mode"></span>
                                </div>
                                
                                <div class="m-accordion__item-body collapse show" id="m_accordion_2_item_1_body" class=" " role="tabpanel" aria-labelledby="m_accordion_2_item_1_head" data-parent="#m_accordion_2">
                                    <div class="m-accordion__item-content">

                                        <div class="form-group m-form__group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="register_applicant_school">School Name</label>
                                                    <input type="email" class="form-control m-input" id="register_applicant_school" name="register_applicant_school" required placeholder="Enter school name">
                                                    <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="register_applicant_degree">Degree / Year Level</label>
                                                    <input type="email" class="form-control m-input" id="register_applicant_degree" name="register_applicant_degree" required placeholder="Enter degree / year level">
                                                    <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="register_applicant_edu_year">Specialization</label>
                                                    <input type="text" class="form-control" id="register_applicant_edu_year" name="register_applicant_edu_year" required placeholder="Enter year finished">
                                                    <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="register_applicant_edu_year">Year Finished</label>
                                                    <input type="text" class="form-control" id="register_applicant_edu_year" name="register_applicant_edu_year" required placeholder="Enter year finished">
                                                    <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Section accordion-->
                    </div>
                    <div class="tab-pane" id="m_tabs_6_3" role="tabpanel">
                        <!--begin::Section accordion-->
                        <div class="m-accordion m-accordion--bordered" id="m_accordion_2" role="tablist">

                            <!--begin::Item-->
                            <div class="m-accordion__item">
                                <div class="m-accordion__item-head " role="tab" id="m_accordion_2_item_1_head" data-toggle="collapse" href="#m_accordion_2_item_1_body" aria-expanded="    true">
                                    <span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
                                    <span class="m-accordion__item-title">Work</span>
                                    <span class="m-accordion__item-mode"></span>
                                </div>
                                
                                <div class="m-accordion__item-body collapse show" id="m_accordion_2_item_1_body" class=" " role="tabpanel" aria-labelledby="m_accordion_2_item_1_head" data-parent="#m_accordion_2">
                                    <div class="m-accordion__item-content">
                                        
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
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Section accordion-->
                    </div>

                    <div class="tab-pane" id="m_tabs_6_4" role="tabpanel">
                        <!--begin::Section accordion-->
                        <div class="m-accordion m-accordion--bordered" id="m_accordion_2" role="tablist">

                            <!--begin::Item-->
                            <div class="m-accordion__item">
                                <div class="m-accordion__item-head " role="tab" id="m_accordion_2_item_1_head" data-toggle="collapse" href="#m_accordion_2_item_1_body" aria-expanded="    true">
                                    <span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
                                    <span class="m-accordion__item-title">Language Proficiency</span>
                                    <span class="m-accordion__item-mode"></span>
                                </div>
                                
                                <div class="m-accordion__item-body collapse show" id="m_accordion_2_item_1_body" class=" " role="tabpanel" aria-labelledby="m_accordion_2_item_1_head" data-parent="#m_accordion_2">
                                    <div class="m-accordion__item-content">
                                        
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
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Section accordion-->
                    </div>

                </div>
            </div>
        </div>
        <!--end::Portlet-->
    <!--end::User profile sidebar-->
    </div>

    <!--end::User profile-->
</div>