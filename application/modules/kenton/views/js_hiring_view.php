<script src="<?php echo base_url(); ?>assets/app/js/html-table.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/app/js/bootstrap-markdown.js" type="text/javascript"></script>
<script>
	$(function(){
		//$('#html_table').dataTable({ "aoColumnDefs": [{ "bVisible": false, "aTargets": [0] }]});

		$("#send_email_button").click(function(e){
			Swal.fire({
			  title: 'Are you sure you want to send this email?',
			  text: "You won't be able to revert this!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Send Email'
			}).then((result) => {
			  if (result.value) {
			  	console.log($(this).data('url'));
			  	var the_message = $("#message").val();
			  	var the_email = $("#applicant_email").val();
			  	console.log(the_message);
			  	console.log(the_email);
			  	$.post($(this).data('url'), {key:$(this).data('key'),message:the_message,email:the_email}, function(data) {
			  		console.log(data.ret);
			  		console.log(data.new_url);
			  		if (data.ret) {
			  			console.log('accepted');
			  			Swal.fire(
					      'Success!',
					      'Email has been sent.',
					      'success'
					    )
					    var delay = 1000; 
						setTimeout(function(){ window.location = data.new_url; }, delay);
			  		} else {
			  			Swal.fire(
					      'Failed!',
					      'Error occured.',
					      'warning'
					    )
			  		}
			  	}, 'json');
			    
			  }
			})
		});

		$("#hire_button").click(function(e){
			Swal.fire({
			  title: 'Are you sure you want to mark this as hired?',
			  text: "You won't be able to revert this!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Marked as Hired'
			}).then((result) => {
			  if (result.value) {
			  	console.log($(this).data('url'));
			  	$.post($(this).data('url'), {key:$(this).data('key')}, function(data) {
			  		console.log(data.ret);
			  		console.log(data.new_url);
			  		if (data.ret) {
			  			console.log('accepted');
			  			Swal.fire(
					      'Success!',
					      'Marked as Hired',
					      'success'
					    )
					    var delay = 1000; 
						setTimeout(function(){ window.location = data.new_url; }, delay);
			  		} else {
			  			Swal.fire(
					      'Failed!',
					      'Error occured.',
					      'warning'
					    )
			  		}
			  	}, 'json');
			    
			  }
			})
		});

	});
</script>