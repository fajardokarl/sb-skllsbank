var finishprofile = function(){
	var _init = function(){
		var baseurl = $('#base_url').val();

		$('#sample').click(function(){
			// alert('OK');
			jQuery('input[name*="register_work_experience_job_title"]').each(function(e)
			{
			    console.log($(this).val());
			});
		});

		$('#register_applicant').click(function(){
			var idx = $('#register_idx').val();
			// PERSONAL
			var applicant_id = $('#applicant_id').val();
			var firstname = $('#register_firstname').val();
			var middlename = $('#register_middlename').val();
			var lastname = $('#register_lastname').val();
			var gender = $('#register_gender option:selected').val();
			var birthdate = $('#register_applicant_bday').val();
			var age = $('#register_age').val();
			var civil_status_id  = $('#register_marital_status option:selected').val();

			//CONTACTS
			var phone_number = $('#register_phone_number').val();
			var mobile_number = $('#register_mobile_number').val();
			var facebook_link = $('#register_facebook').val();

			// ADDRESS - CURRENT
			var c_line_1 = $('#register_address1_current').val();
			var c_line_2 = $('#register_address2_current').val();
			var c_city_id = $('#register_city_current option:selected').val();
			var c_state_id = $('#register_state_current option:selected').val();
			var c_country_id = $('#register_country_current option:selected').val();

			// ADDRESS - PERMANENT
			var p_line_1 = $('#register_address1_permanent').val();
			var p_line_2 = $('#register_address2_permanent').val();
			var p_city_id = $('#register_city_permanent option:selected').val();
			var p_state_id = $('#register_state_permanent option:selected').val();
			var p_country_id = $('#register_country_permanent option:selected').val();

			// EDUCATION
			var educational_attainment_id = $('#register_applicant_attainment option:selected').val();
			var school_name = $('#register_applicant_school').val();
			var degree = $('#register_applicant_degree').val();
			var education_year_finished = $('#register_applicant_edu_year_2').val();
			// var p_line_2 = $('#register_applicant_specialization').val();

			// WORK
			// var education_year_finished = $('#register_job_description').val();
			// var education_year_finished = $('#register_job_description_summary').val();
			// array-loop
			var from_date = $("input[name*='register_work_experience_from_date']").map(function(){return $(this).val();}).get();
			var to_date = $("input[name*='register_work_experience_to_date']").map(function(){return $(this).val();}).get();
			var company = $("input[name*='register_work_experience_employer']").map(function(){return $(this).val();}).get();
			var location = $("input[name*='register_work_experience_location']").map(function(){return $(this).val();}).get();
			var job_title = $("input[name*='register_work_experience_job_title']").map(function(){return $(this).val();}).get();
			var job_description = $("input[name*='register_work_experience_job_description_summary']").map(function(){return $(this).val();}).get();

			// LANG
			var english_writing_level = $('#register_applicant_english_writing_level option:selected').val();
			var proficiency_exam = $('#register_applicant_proficiency_exam option:selected').val();
			var overall_score = $('#register_applicant_overall_score').val();
			var date_assessed = $('#register_applicant_date_assessed').val();
			var listening_score = $('#register_applicant_listening_score').val();
			var reading_score = $('#register_applicant_reading_score').val();
			var writing_score = $('#register_applicant_writing_score').val();
			var speaking_score = $('#register_applicant_speaking_score').val();

			// array-loop
			var language = $("input[name*='register_other_language']").map(function(){return $(this).val();}).get();
			var language_speaking_level = $("select[name*='register_language_speaking_level']").map(function(){return $(this).val();}).get();
			var language_writing_level = $("select[name*='register_language_writing_level']").map(function(){return $(this).val();}).get();



			console.log(language);
			jQuery('input[name*="register_other_language"]').each(function(e)
			{
			    console.log($(this).val());
			});

			var data = {
				'idx' : idx,
				'applicant_id' : applicant_id,
				'firstname' : firstname,
				'middlename' : middlename,
				'lastname' : lastname,
				'gender' : gender,
				'birthdate' : birthdate,
				'age' : age,
				'civil_status_id' : civil_status_id,
				'phone_number' : phone_number,
				'mobile_number' : mobile_number,
				'facebook_link' : facebook_link,
				'c_line_1' : c_line_1,
				'c_line_2' : c_line_2,
				'c_city_id' : c_city_id,
				'c_state_id' : c_state_id,
				'c_country_id' : c_country_id,
				'p_line_1' : p_line_1,
				'p_line_2' : p_line_2,
				'p_city_id' : p_city_id,
				'p_state_id' : p_state_id,
				'p_country_id' : p_country_id,
				'educational_attainment_id' : educational_attainment_id,
				'school_name' : school_name,
				'degree' : degree,
				'education_year_finished' : education_year_finished,
				'from_date' : from_date,
				'to_date' : to_date,
				'company' : company,
				'location' : location,
				'job_title' : job_title,
				'job_description' : job_description,
				'language' : language,
				'language_speaking_level' : language_speaking_level,
				'language_writing_level' : language_writing_level,
				'english_writing_level': english_writing_level,
				'proficiency_exam': proficiency_exam,
				'overall_score': overall_score,
				'date_assessed': date_assessed,
				'listening_score': listening_score,
				'reading_score': reading_score,
				'writing_score': writing_score,
				'speaking_score': speaking_score,

			};

			$.ajax({
				type: "POST",
	            url : baseurl + "applicant/update_applicant",
	            dataType : "json",
	            data: data,
	            success : function(data){	
	            	toastr.options.timeOut = 500;
                	toastr.success('Saved.', 'Success');
	            },   
	            error: function(errorThrown){
	                console.log(errorThrown);
	            }
			});
		});

		$('#register_country_current').change(function(){
			var idx = $('#register_country_current option:selected').val();
			$.ajax({
				type: "POST",
	            url : baseurl + "applicant/get_all_state",
	            dataType : "json",
	            data: {'idx': idx},
	            success : function(data){	
	            	$('#register_state_current').html("<option value='0' selected>None</option>");
	            	$.each(data, function(i, value){
						$('#register_state_current').append("<option value=" + data[i].idx + ">" + data[i].name + "</option>");
	                });
	            },   
	            error: function(errorThrown){
	                console.log(errorThrown);
	            }
			});
		});
		
		$('#register_state_current').change(function(){
			var idx = $('#register_state_current option:selected').val();
			$.ajax({
				type: "POST",
	            url : baseurl + "applicant/get_all_city",
	            dataType : "json",
	            data: {'idx': idx},
	            success : function(data){	
	            	$('#register_city_current').html("<option value='0' selected>None</option>");
	            	$.each(data, function(i, value){
						$('#register_city_current').append("<option value=" + data[i].idx + ">" + data[i].name + "</option>");
	                });
	            },   
	            error: function(errorThrown){
	                console.log(errorThrown);
	            }
			});
		});

		$('#register_country_permanent').change(function(){
			var idx = $('#register_country_permanent option:selected').val();
			$.ajax({
				type: "POST",
	            url : baseurl + "applicant/get_all_state",
	            dataType : "json",
	            data: {'idx': idx},
	            success : function(data){	
	            	$('#register_state_permanent').html("<option value='0' selected>None</option>");
	            	$.each(data, function(i, value){
						$('#register_state_permanent').append("<option value=" + data[i].idx + ">" + data[i].name + "</option>");
	                });
	            },   
	            error: function(errorThrown){
	                console.log(errorThrown);
	            }
			});
		});
		
		$('#register_state_permanent').change(function(){
			var idx = $('#register_state_permanent option:selected').val();
			$.ajax({
				type: "POST",
	            url : baseurl + "applicant/get_all_city",
	            dataType : "json",
	            data: {'idx': idx},
	            success : function(data){	
	            	$('#register_city_permanent').html("<option value='0' selected>None</option>");
	            	$.each(data, function(i, value){
						$('#register_city_permanent').append("<option value=" + data[i].idx + ">" + data[i].name + "</option>");
	                });
	            },   
	            error: function(errorThrown){
	                console.log(errorThrown);
	            }
			});
		});

	    $("input[name='register_proficiency_bool']").click(function() {
		    if ($(this).val() == 'YES') {
		    	$('#prof_exam').show();
		    } else if ($(this).val() == 'NO') {
		    	$('#prof_exam').hide();
		    } 
	   	});

	    $('#edit_profile').click(function(){
	    	$('.form-control').attr("disabled", false);
			$('#edit_profile').hide();
			$('#save_edit').show();
	    });

	    $('#save_changes').click(function(){
	    	$('.form-control').attr("disabled", true);
			$('#edit_profile').show();
			$('#save_edit').show();
			$('#save_edit').hide();


	    });

	}	
	return {
		init: function(){
			_init();
		}
	};
}();

jQuery(document).ready(function(){
    // $('<script src="<?php echo base_url(); ?>public/welcome/js/dashboard.js" type="text/javascript"></script>').appendTo("footer");
    // $('<script src="<?php echo base_url(); ?>public/welcome/js/bootstrap-datepicker.js" type="text/javascript"></script>').appendTo("footer");
    // $('<script src="<?php echo base_url(); ?>public/welcome/js/form-repeater.js" type="text/javascript"></script>').appendTo("footer");
	// $("<style type='text/css'> .borderless td, .borderless th { border: none;} </style>").appendTo("head");

	if ($('#complete').val() == 1) {
		$('.form-control').attr("disabled", true);
		$('#edit_profile').show();
		$('#register_applicant').hide();

	}else{
		$('.form-control').attr("disabled", false);
		$('#edit_profile').hide();
		$('#register_applicant').show();

	}

	$('.m_datepicker_1').datepicker({
		format: "yyyy-mm-dd",
		autoclose: true
	});
	finishprofile.init();
});



// var values = $("input[name='pname[]']")
//               .map(function(){return $(this).val();}).get();