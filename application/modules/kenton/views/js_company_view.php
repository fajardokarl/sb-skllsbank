<script src="<?php echo base_url(); ?>assets/app/js/sweetalert2.js" type="text/javascript"></script>
<script>
	$(function(){
		$("#accept_button").click(function(e){
			Swal.fire({
			  title: 'Are you sure you want to accept this company?',
			  text: "You won't be able to revert this!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Accept Company'
			}).then((result) => {
			  if (result.value) {
			  	console.log($(this).data('url'));
			  	$.post($(this).data('url'), {key:$(this).data('key')}, function(data) {
			  		console.log('post done');
			  		if (data.ret) {
			  			console.log('accepted');
			  			Swal.fire(
					      'Success!',
					      'Company has been accepted.',
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

		$("#reserve_button").click(function(e){
			Swal.fire({
			  title: 'Are you sure you want to reserve this company?',
			  text: "You won't be able to revert this!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Reserve Company'
			}).then((result) => {
			  if (result.value) {
			  	console.log($(this).data('url'));
			  	$.post($(this).data('url'), {key:$(this).data('key')}, function(data) {
			  		console.log('post done');
			  		if (data.ret) {
			  			console.log('reserved');
			  			Swal.fire(
					      'Success!',
					      'Company has been reserved.',
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

		$("#reject_button").click(function(e){
			Swal.fire({
			  title: 'Are you sure you want to reject this company?',
			  text: "You won't be able to revert this!",
			  type: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Reserve Company'
			}).then((result) => {
			  if (result.value) {
			  	console.log($(this).data('url'));
			  	$.post($(this).data('url'), {key:$(this).data('key')}, function(data) {
			  		console.log('post done');
			  		if (data.ret) {
			  			console.log('reserved');
			  			Swal.fire(
					      'Success!',
					      'Company has been rejected.',
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