<div class="row">
	<div class="col-md-12">
        <!--begin::User alert-->
        <input type="hidden" id="base_url" value="<?php echo(base_url()); ?>">
        <input type="hidden" id="complete" value="<?php echo $applicant->profile_complete; ?>">
        <?php if ($applicant->profile_complete == 0 || $applicant->approved == 0 || $profile->verified == 0) {
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
<!-- <?php 
    echo var_dump($profile);
   
 ?> -->
<input type="hidden" id="applicant_id" value="<?php echo $applicant->idx; ?>">
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
                        <input type="hidden" id="register_idx" value="<?=$person->idx?>">
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
                                    <span class="m-nav__link-badge"><span class="m-badge m-badge--<?=($profile->verified)?'success':'warning'?>"><?=($profile->verified)?'complete':'incomplete'?></span></span>
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
                                    <span class="m-nav__link-badge"><span class="m-badge m-badge--<?=($applicant->approved)?'success':'warning'?>"><?=($applicant->approved)?'complete':'incomplete'?></span></span>
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
                <div class="action"  align="right" style="margin-top: 13px; margin-right: -15px;">
                    <button class="btn btn-brand m-btn--pill" id="edit_profile">Edit Profile</button>
                </div>
                <div class="action" align="right" style="margin-top: 13px; margin-right: -15px; display: none;" id="save_edit">
                    <button class="btn btn-brand m-btn--pill" id="save_changes">Save Changes</button>
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
                                                    <input type="text" class="form-control m-input" id="register_firstname" name="register_firstname" placeholder="Enter first name" required value="<?php echo $profile->firstname; ?>">
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="register_middlename">Middle Name</label>
                                                    <input type="text" class="form-control m-input" id="register_middlename" name="register_middlename" placeholder="Enter middle name" value="<?php echo $profile->middlename; ?>">
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="register_lastname">Last Name</label>
                                                    <input type="text" class="form-control m-input" id="register_lastname" name="register_lastname" placeholder="Enter last name" required value="<?php echo $profile->lastname; ?>">
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <div class="row">
                                                <div class="col-md-4">						
                                                    <label for="register_gender">Gender</label>
                                                    <select class="form-control m-input m-input--air" id="register_gender" name="register_gender" required  value="<?php echo $profile->gender; ?>">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="register_applicant_bday">Date of Birth</label>
                                                    <input type="text" class="form-control m_datepicker_1" data-date-format="dd/mm/yyyy" id="register_applicant_bday" name="register_applicant_bday" readonly placeholder="Select date of birth" required  value="<?php echo date("Y-m-d" ,strtotime($profile->birthdate)); ?>"/>
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="register_age">Age</label>
                                                    <input type="number" class="form-control m-input" id="register_age" name="register_age" placeholder="Enter age" required  value="<?php echo $profile->age; ?>">
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="register_marital_status">Marital Status</label>
                                                    <select class="form-control m-input m-input--air" id="register_marital_status" name="register_marital_status" required value="<?php echo $profile->civil_status_id; ?>">
                                                        <option value="" disabled selected>Select..</option>
                                                        <?php 
                                                            $marital = array('1'=>'Single','2'=>'De Facto', '3'=>'Married','4'=>'Divorced','5'=>'Widowed');
                                                            foreach ($marital as $key => $value) {
                                                               if($key == $profile->civil_status_id){
                                                                    echo "<option selected value='$key'>$value</option>";
                                                                    continue;
                                                               }
                                                               echo "<option value='$key'>$value</option>";
                                                            }
                                                        ?>
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
                                                    <input type="text" class="form-control" id="register_address1_current" name="register_address1_current" placeholder="Enter current address line 1" required value="<?php echo $address_curr->line_1; ?>">
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="register_address2_current">Address Line 2</label>
                                                    <input type="text" class="form-control" id="register_address2_current" name="register_address2_current" placeholder="Enter current address line 2" required value="<?php echo $address_curr->line_2; ?>">
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="register_country_current">Country</label>
                                                    <!-- <input type="text" class="form-control" id="register_country_current" name="register_state_current" placeholder="Select current country" required> -->
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                    <select class="form-control m-input " id="register_country_current" name="register_country_current" required >
                                                    <!-- <option value="" disabled selected>Select Here..</option> -->
                                                    <?php foreach($country as $country){ ?>
                                                        <?php if($country['idx'] == $address_curr->country_id){ ?>
                                                            <option selected value="<?php echo $country['idx'];?>"><?php echo $country['name'];?></option>
                                                        <?php 
                                                            continue;
                                                        } ?>
                                                            <option value="<?php echo $country['idx'];?>"><?php echo $country['name'];?></option>

                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <div class="row">
                                                <div class="col-md-4">						
                                                    <label for="register_state_current">State / Province / Region</label>
                                                    <!-- <input type="text" class="form-control" id="register_state_current" name="register_state_current" placeholder="Select current state / province / region" required> -->
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                    <select class="form-control m-input " id="register_state_current" name="register_state_current" required>
                                                    <?php foreach($state as $state){ ?>
                                                        <?php if($state['idx'] == $address_curr->state_id && $state['country_id'] == $address_curr->country_id){ ?>
                                                            <option selected value="<?php echo $state['idx'];?>"><?php echo $state['name'];?></option>
                                                        <?php 
                                                            continue;
                                                        } ?>
                                                        <?php if($state['country_id'] == $address_curr->country_id){ ?>
                                                            <option value="<?php echo $state['idx'];?>"><?php echo $state['name'];?></option>

                                                        <?php } ?>

                                                    <?php } ?>
                                                    </select>
                                                    
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="register_city_current">City / Town</label>
                                                    <!-- <input type="text" class="form-control m-input" id="register_city_current" name="register_city_current" placeholder="Enter current city" required> -->
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                    <select class="form-control m-input " id="register_city_current" name="register_city_current" required>
                                                    <option value="" disabled selected>Select Here..</option>
                                                    <?php foreach($city as $city){ ?>
                                                        <?php if($city['idx'] == $address_curr->city_id && $city['state_id'] == $address_curr->state_id){ ?>
                                                            <option selected value="<?php echo $city['idx'];?>"><?php echo $city['name'];?></option>
                                                        <?php 
                                                            continue;
                                                        } ?>
                                                        <?php if($city['state_id'] == $address_curr->state_id){ ?>
                                                            <option value="<?php echo $city['idx'];?>"><?php echo $city['name'];?></option>

                                                        <?php } ?>

                                                    <?php } ?>
                                                    </select>
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
                                                    <input type="text" class="form-control" id="register_address1_permanent" name="register_address1_permanent" placeholder="Enter permanent address line 1" required value="<?php echo $address_perm->line_1; ?>">
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="register_address2_permanent">Address Line 2</label>
                                                    <input type="text" class="form-control" id="register_address2_permanent" name="register_address2_permanent" placeholder="Enter permanent address line 2" required value="<?php echo $address_perm->line_2; ?>">
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="register_country_permanent">Country</label>
                                                    <!-- <input type="text" class="form-control" id="register_country_permanent" name="register_state_current" placeholder="Select current country" required> -->
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                    <select class="form-control m-input " id="register_country_permanent" name="register_country_permanent" required>
                                                    <!-- <option value="" disabled selected>Select Here..</option> -->
                                                    <?php foreach($country1 as $country){ ?>
                                                        <?php if($country['idx'] == $address_perm->country_id){ ?>
                                                            <option selected value="<?php echo $country['idx'];?>"><?php echo $country['name'];?></option>
                                                        <?php 
                                                            continue;
                                                        } ?>
                                                            <option value="<?php echo $country['idx'];?>"><?php echo $country['name'];?></option>

                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <div class="row">
                                                <div class="col-md-4">						
                                                    <label for="register_state_permanent">State / Province / Region</label>
                                                    <!-- <input type="text" class="form-control" id="register_state_permanent" name="register_state_permanent" placeholder="Enter permanent state / province / region" required/> -->
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                    <select class="form-control " id="register_state_permanent" name="register_state_permanent" required>
                                                        <!-- <option value="" disabled selected>Select Here..</option> -->
                                                    <?php foreach($state2 as $state){ ?>
                                                        <?php if($state['idx'] == $address_perm->state_id && $state['country_id'] == $address_perm->country_id){ ?>
                                                            <option selected value="<?php echo $state['idx'];?>"><?php echo $state['name'];?></option>
                                                        <?php 
                                                            continue;
                                                        } ?>
                                                        <?php if($state['country_id'] == $address_perm->country_id){ ?>
                                                            <option value="<?php echo $state['idx'];?>"><?php echo $state['name'];?></option>

                                                        <?php } ?>

                                                    <?php } ?>
                                                    </select>
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="register_city_permanent">City / Town</label>
                                                    <!-- <input type="text" class="form-control m-input" id="register_city_permanent" name="register_city_permanent"  placeholder="Enter permanent city" required> -->
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                    <select class="form-control " id="register_city_permanent" name="register_city_permanent" required>
                                                        <!-- <option value="" disabled selected>Select Here..</option> -->
                                                    <?php foreach($city2 as $city){ ?>
                                                        <?php if($city['idx'] == $address_perm->city_id && $city['state_id'] == $address_perm->state_id){ ?>
                                                            <option selected value="<?php echo $city['idx'];?>"><?php echo $city['name'];?></option>
                                                        <?php 
                                                            continue;
                                                        } ?>
                                                        <?php if($city['state_id'] == $address_perm->state_id){ ?>
                                                            <option value="<?php echo $city['idx'];?>"><?php echo $city['name'];?></option>

                                                        <?php } ?>

                                                    <?php } ?>
                                                    </select>
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
                                                    <input type="text" class="form-control" id="register_phone_number" name="register_phone_number" placeholder="Enter phone number"  value="<?php echo $profile->phone_number; ?>">
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="register_mobile_number">Mobile Number</label>
                                                    <input type="text" class="form-control" id="register_mobile_number" name="register_mobile_number" placeholder="Enter mobile number" required  value="<?php echo $profile->mobile_number; ?>">
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group">
                                            <div class="row">
                                                <!-- <div class="col-md-6">						
                                                    <label for="register_email2">Email Address</label>
                                                    <input type="text" class="form-control" id="register_email2" name="register_email2" placeholder="Enter email address" required>

                                                </div> -->
                                                <div class="col-md-6">
                                                    <label for="register_facebook">Facebook Link</label>
                                                    <input type="text" class="form-control" id="register_facebook" name="register_facebook" placeholder="Enter facebook link" required  value="<?php echo $profile->facebook_link; ?>">
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <!-- <button class="btn-sm btn m-btn m-btn--icon m-btn--pill" id="sample">NEXT ></button> -->
                                                

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
                                                    <label for="register_applicant_attainment">Educational Attainment</label>
                                                    <!-- <input type="text" class="form-control" id="register_country_current" name="register_state_current" placeholder="Select current country" required> -->
                                                        <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                    <select class="form-control m-input " id="register_applicant_attainment" name="register_applicant_attainment" required>
                                                    <option value="" disabled selected>Select Here..</option>
                                                    <?php foreach($educ as $educ){ ?>
                                                        <?php if($educ['educational_attainment_id'] == $profile->educational_attainment_id){ ?>
                                                            <option selected value="<?php echo $educ['educational_attainment_id'];?>"><?php echo $educ['educational_attainment_name'];?></option>
                                                        <?php 
                                                            continue;
                                                        } ?>
                                                            <option value="<?php echo $educ['educational_attainment_id'];?>"><?php echo $educ['educational_attainment_name'];?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-8">
                                                    <label for="register_applicant_school">School Name</label>
                                                    <input type="email" class="form-control m-input" id="register_applicant_school" name="register_applicant_school" required placeholder="Enter school name" value="<?php echo $profile->school_name; ?>">
                                                    <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="register_applicant_degree">Degree / Year Level</label>
                                                    <input type="email" class="form-control m-input" id="register_applicant_degree" name="register_applicant_degree" required placeholder="Enter degree / year level" value="<?php echo $profile->degree; ?>">
                                                    <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
<!--                                                 <div class="col-md-5">
                                                    <label for="register_applicant_edu_year_1">Specialization</label>
                                                    <input type="text" class="form-control" id="register_applicant_specialization" name="register_applicant_specialization" required placeholder="Enter year finished">
                                                </div> -->
                                                <div class="col-md-3">
                                                    <label for="register_applicant_edu_year_2">Year Finished</label>
                                                    <input type="text" class="form-control" id="register_applicant_edu_year_2" name="register_applicant_edu_year_2" required placeholder="Enter year finished" value="<?php echo $profile->education_year_finished; ?>">
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
                                <div class="m-accordion__item-head " role="tab" id="m_accordion_2_item_1_head" data-toggle="collapse" href="#m_accordion_2_item_1_body" aria-expanded="true">
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
                                                                    <br>
                                                                    <br>
                                                                    <div data-repeater-delete="" class="btn-sm btn btn-danger m-btn m-btn--icon m-btn--pill" align="right">
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
                                                    <label class="col-lg-4 col-form-label"></label>
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
                        <div class="m-accordion m-accordion--bordered" id="m_accordion_1" role="tablist">

                            <!--begin::Item-->
                            <div class="m-accordion__item">
                                <div class="m-accordion__item-head " role="tab" id="m_accordion_2_item_2_head" data-toggle="collapse" href="#m_accordion_2_item_2_body" aria-expanded="true">
                                    <span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
                                    <span class="m-accordion__item-title">Language Proficiency</span>
                                    <span class="m-accordion__item-mode"></span>
                                </div>
                                <div class="m-accordion__item-body collapse show" id="m_accordion_2_item_2_body" class=" " role="tabpanel" aria-labelledby="m_accordion_2_item_2_head" data-parent="#m_accordion_2">
                                    <div class="m-accordion__item-content">
                                    <div class="form-group m-form__group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="exampleInputEmail1" class="">Have you ever had your English language abilities or proficiency tested?</label>
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
                                                <label for="register_english_level" class="">What level is your English Speaking level?</label>
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
                                                <label for="register_english_level" class="">What level is your English Writing level?</label>
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
                                                <label for="register_applicant_proficiency_exam">English Proficiency Exam</label>
                                                <select class="form-control m-input m-input--air" id="register_applicant_proficiency_exam" name="register_applicant_proficiency_exam">
                                                    <option value="1" selected>None</option>
                                                    <option value="2">IELTS - General</option>
                                                    <option value="3">IELTS - Academic</option>
                                                    <option value="4">PTE</option>
                                                    <option value="5">TOEFL</option>
                                                    <option value="6">OET</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="prof_exam" style="display: none;">
                                        
                                        <div class="form-group m-form__group applicant_english_proficiency">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="register_overall_score" class="applicant_english_proficiency">Overall Score</label>
                                                    <input type="number" class="form-control m-input applicant_english_proficiency" id="register_applicant_overall_score" name="register_applicant_overall_score" placeholder="Enter overall score">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="register_applicant_date_assessed" class="applicant_english_proficiency">Date of Assessment</label>
                                                    <input type="text" class="form-control m_datepicker_1 applicant_english_proficiency" data-date-format="dd/mm/yyyy" id="register_applicant_date_assessed" name="register_applicant_date_assessed" readonly placeholder="Select date of assesment"/>
                                                    <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group applicant_english_proficiency">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="register_applicant_listening_score" class="applicant_english_proficiency">Listening Score</label>
                                                    <input type="number" class="form-control m-input applicant_english_proficiency" id="register_applicant_listening_score" name="register_applicant_listening_score" placeholder="Enter listening score">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="register_applicant_reading_score" class="applicant_english_proficiency">Reading Score</label>
                                                    <input type="number" class="form-control m-input applicant_english_proficiency" id="register_applicant_reading_score" name="register_applicant_reading_score" placeholder="Enter reading score">
                                                    <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="register_applicant_writing_score" class="applicant_english_proficiency">Writing Score</label>
                                                    <input type="number" class="form-control m-input applicant_english_proficiency" id="register_applicant_writing_score" name="register_applicant_writing_score" placeholder="Enter writing score">
                                                    <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="register_applicant_speaking_score" class="applicant_english_proficiency">Speaking Score</label>
                                                    <input type="text" class="form-control m-input applicant_english_proficiency" id="register_applicant_speaking_score" name="register_applicant_speaking_score" placeholder="Enter speaking score">
                                                    <!-- <span class="m-form__help">We'll never share your email with anyone else.</span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- WORK HERE -->
                                    <form id="m_repeater_3">
                                        <div class="row">
                                            <div class="col-lg-10">
                                            <label class="col-form-label ">Other Languages: (Include native language)</label>
                                                
                                            </div>
                                        </div>
                                        <?php foreach ($language as $languages) { ?>
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item>
                                                    <div class="form-group m-form__group" id="">
                                                        <div data-repeater-list="" class="">
                                                            <div data-repeater-item class="form-group m-form__group row">
                                                                <div class="col-md-3">
                                                                    <div class="m-form__group m-form__group">
                                                                        <div class="m-form__label">
                                                                            <label class="">Language</label>
                                                                        </div>
                                                                        <div class="m-form__control">
                                                                            <input type="text" class="form-control m-input" name="register_other_language" id="register_other_language" placeholder="Enter language" value="<?php echo $languages['language']; ?>">
                                                                            <!-- name="register_other_language[]" -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-md-none m--margin-bottom-10"></div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="m-form__group m-form__group">
                                                                        <div class="m-form__label">
                                                                            <label class="m-label m-label--single ">Language Speaking level</label>
                                                                        </div>
                                                                        <div class="m-form__control">
                                                                            <select class="form-control m-input m-input--air" name="register_language_speaking_level" id="register_language_speaking_level" required>
                                                                                <option value="" disabled selected></option>
                                                                                <?php 
                                                                                    $marital = array('1'=>'Single','2'=>'De Facto', '3'=>'Married','4'=>'Divorced','5'=>'Widowed');
                                                                                    foreach ($marital as $key => $value) {
                                                                                       if($key == $profile->civil_status_id){
                                                                                            echo "<option selected value='$key'>$value</option>";
                                                                                            continue;
                                                                                       }
                                                                                       echo "<option value='$key'>$value</option>";
                                                                                    }
                                                                                ?>
                                                                               <!--  <option value="Native">Native</option>
                                                                                <option value="Beginner">Beginner</option>
                                                                                <option value="Elementary">Elementary</option>
                                                                                <option value="Low Intermediate">Low Intermediate</option>
                                                                                <option value="Intermediate">Intermediate</option>
                                                                                <option value="Upper Intermediate">Upper Intermediate</option>
                                                                                <option value="Advanced">Advanced</option> -->
                                                                            </select>
                                                                            <!-- name="register_language_speaking_level" -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-md-none m--margin-bottom-10"></div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="m-form__group m-form__group">
                                                                        <div class="m-form__label">
                                                                            <label class="m-label m-label--single ">Language Writing level</label>
                                                                        </div>
                                                                        <div class="m-form__control">
                                                                            <select class="form-control m-input m-input--air" name="register_language_writing_level" id="register_language_writing_level" required>
                                                                                <option value="" disabled selected></option>
                                                                                <option value="Native">Native</option>
                                                                                <option value="Beginner">Beginner</option>
                                                                                <option value="Elementary">Elementary</option>
                                                                                <option value="Low Intermediate">Low Intermediate</option>
                                                                                <option value="Intermediate">Intermediate</option>
                                                                                <option value="Upper Intermediate">Upper Intermediate</option>
                                                                                <option value="Advanced">Advanced</option>
                                                                            </select>
                                                                            <!-- name="register_language_writing_level" -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="d-md-none m--margin-bottom-10"></div> -->
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <!-- <div class="d-md-none m--margin-bottom-10"></div> -->
                                                                    <div class="m-form__group m-form__group">
                                                                        <div class="m-form__label"  style="padding-bottom: 10px">
                                                                            <label class="m-label m-label--single "></label>
                                                                        </div>

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
                                                    </div>
                                                </div>
                                            </div>
                                                    

                                        <?php } ?>
                                        <!-- <input data-repeater-create type="button" value="Add" class="btn btn btn-sm btn-brand m-btn m-btn--icon m-btn--pill m-btn--wide" /> -->
                                        <div class="m-form__group form-group row">
                                            <label class="col-lg-2 col-form-label"></label>
                                            <div class="col-lg-4">
                                                <div data-repeater-create class="btn btn btn-sm btn-brand m-btn m-btn--icon m-btn--pill m-btn--wide">
                                                    <span>
                                                        <i class="la la-plus"></i>
                                                        <span>Add</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Section accordion-->
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-12" align="right">
                            <button id="register_applicant" class="btn btn-success m-btn--pill">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Portlet-->
    <!--end::User profile sidebar-->
    </div>

    <!--end::User profile-->
</div>

<!-- ok -->