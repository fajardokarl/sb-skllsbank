<script src="<?php echo base_url(); ?>assets/app/js/sweetalert2.js" type="text/javascript"></script>
<script>
	$(function(){
		$("#hire_button").click(function(e){
			Swal.fire({
			  title: 'Are you sure you want to hire this applicant?',
			  text: "You won't be able to revert this!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Hire Applicant'
			}).then((result) => {
			  if (result.value) {
			  	console.log($(this).data('url'));
			  	$.post($(this).data('url'), {key:$(this).data('key')}, function(data) {
			  		console.log('post done');
			  		if (data.ret) {
			  			console.log('hired');
			  			Swal.fire(
					      'Success!',
					      'Request to hire applicant sent.',
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