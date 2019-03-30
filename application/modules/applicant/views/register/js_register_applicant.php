<script src="<?php echo base_url(); ?>public/welcome/js/dashboard.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/welcome/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/welcome/js/form-repeater.js" type="text/javascript"></script>
<script>
	$(function(){

		$('#submit_button').click(function(e) {
			e.preventDefault();
			var checked = $("input:checkbox[name='register_ads']").length;
			if ($("#register_referral_person").val() !== '') {
				checked++;
			}
			if ($("#register_other_reason").val() !== '') {
				checked++;
			}

			// if(checked) {
			// 	if (!$.requestHandler.checkRequirement($(this).closest('form'))) return false;
			// 	$.post($(this).closest('form').attr('action'), $(this).closest('form').serialize(), function(data) {
			// 		if (data.ret) {
			// 			$("#submit_button").prop("disabled", true);
			// 			$.messageHandler.showMessageBox('success_request');
			// 			window.setTimeout(function() {
	  //   					window.location.href = data.url;
			// 			}, 2000);
			// 		} else {
			// 			$.messageHandler.showMessageBox('error_request');
			// 		}
			// 	}, 'json');
			// 	return false;
			// } else {
			// 	$.messageHandler.showMessageBox('error_refer_required');
			// }			
			console.log($(this).closest('form').serialize());
		});

		$('#register_marital_status').change(function() {
  			if($('#register_marital_status').val() == 'Married' || $('#register_marital_status').val() == 'De Facto') {
  				$('.spouse').show();
  				$("input.spouse").prop('required',true);
  				$("#register_spouse_education").prop('required',true);
  				$("#register_spouse_proficiency_exam").prop('required',true);
  				$("label.spouse").addClass("m--font-danger");
  			} else {
  				$('.spouse').hide();
  				$("input.spouse").prop('required',false);
  				$("#register_spouse_education").prop('required',false);
  				$("#register_spouse_proficiency_exam").prop('required',false);
  				$("label.spouse").removeClass("m--font-danger");
  			}
		});

		$('#register_spouse_proficiency_exam').change(function() {
			if($('#register_spouse_proficiency_exam').val() != 'None') {
				$('.spouse_english_proficiency').show();
				$("input.spouse_english_proficiency").prop('required',true);
				$("label.spouse_english_proficiency").addClass("m--font-danger");
			} else {
				$('.spouse_english_proficiency').hide();
				$("input.spouse_english_proficiency").prop('required',false);
				$("label.spouse_english_proficiency").removeClass("m--font-danger");
			}
		});

		$('#register_applicant_proficiency_exam').change(function() {
			if($('#register_applicant_proficiency_exam').val() != 'None') {
				$('.applicant_english_proficiency').show();
				$("input.applicant_english_proficiency").prop('required',true);
				$("label.applicant_english_proficiency").addClass("m--font-danger");
			} else {
				$('.applicant_english_proficiency').hide();
				$("input.applicant_english_proficiency").prop('required',false);
				$("label.applicant_english_proficiency").removeClass("m--font-danger");
			}
		});

		// $.formHandler = {
  //  			changeForm: function(obj) {
  //   			$('.main-form').find('.row').empty();
  //   			$.post(obj.data('url'), {obj:$(obj).val()}, function(data) {
  //    				if (data.ret) {
  //     					$('.main-form').html(data.items);
  //     					$('.mdate').bootstrapMaterialDatePicker({ format: 'YYYY-MM-DD', minDate: new Date() , time: false });
  //     					$('.mdatetime').bootstrapMaterialDatePicker({ format: 'YYYY-MM-DD HH:mm', minDate: new Date() });
  //     					$('.mtime').bootstrapMaterialDatePicker({ format: 'HH:mm', date: false });
  //     					$('.uploader-area').click(function() { $(this).siblings('.uploader-loader').click(); });
  //     					$('.uploader-loader').change(function(e) { $.uploadHandler.upload($(this).parent('.uploader-wrapper'), e.target.files); });
  //     					$('.uploader-loader').data('key',data.fileKey);
  //     					$('.uploader-loader').data('action',data.actionUrl);
		// 				$R('textarea#redactor-textarea', 'destroy');
		// 		    	$("textarea#redactor-textarea").val(data.letter);
		// 		    	$.wysiwygHandler.init({key:'<?php ; ?>'});
		// 		    	return false;

	 //     			}	
  //   			}, 'json');
  //  			}
  // 		};

		// $('#form-request-type').change(function() {
		// 	$.formHandler.changeForm($(this));   
		// });


	});
</script>
