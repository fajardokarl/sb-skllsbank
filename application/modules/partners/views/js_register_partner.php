<script src="<?php echo base_url(); ?>public/welcome/js/dashboard.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/welcome/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/welcome/js/form-repeater.js" type="text/javascript"></script>
<script>
	$(function(){

		$('#submit_button').click(function(e) {
			e.preventDefault();
			// var checked = $("input[type=checkbox]:checked").length;

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

		$.formHandler = {
   			changeForm: function(obj) {
    			$('.main-form').find('.row').empty();
    			$.post(obj.data('url'), {obj:$(obj).val()}, function(data) {
     				if (data.ret) {
      					$('.main-form').html(data.items);
      					$('.mdate').bootstrapMaterialDatePicker({ format: 'YYYY-MM-DD', minDate: new Date() , time: false });
      					$('.mdatetime').bootstrapMaterialDatePicker({ format: 'YYYY-MM-DD HH:mm', minDate: new Date() });
      					$('.mtime').bootstrapMaterialDatePicker({ format: 'HH:mm', date: false });
      					$('.uploader-area').click(function() { $(this).siblings('.uploader-loader').click(); });
      					$('.uploader-loader').change(function(e) { $.uploadHandler.upload($(this).parent('.uploader-wrapper'), e.target.files); });
      					$('.uploader-loader').data('key',data.fileKey);
      					$('.uploader-loader').data('action',data.actionUrl);
						$R('textarea#redactor-textarea', 'destroy');
				    	$("textarea#redactor-textarea").val(data.letter);
				    	$.wysiwygHandler.init({key:'<?php echo '12345678901234567890123456789012'; ?>'});
				    	return false;

	     			}	
    			}, 'json');
   			}
  		};

		$('#form-request-type').change(function() {
			$.formHandler.changeForm($(this));   
		});

	});
</script>
