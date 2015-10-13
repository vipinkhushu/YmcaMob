$(document).ready(function(){
	$('#email_check').on('change',function(e){
		var query_string = $(this).val();
		$.ajax({
			type: "POST",
			url: "email_valid.php",
			data: { email:query_string },
			success: function(data)
			{
				if(data=='exist')
				{
          //alert("exist");
          $('#email_suc').addClass('has-error  has-feedback');
          $('#email_check').focus();
					$('#btn_sub').attr('disabled', 'disabled');
					$('#tickIcon').removeClass('glyphicon-ok');
					$('#tickIcon').addClass('glyphicon glyphicon-remove form-control-feedback');
					$('#email_exist_error').append('<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>This Email Already Exists,<br/> Please Login or Use Forgot Password</div>');
				}
				else
				{
					$('#email_suc').removeClass('has-error');
					$('#email_suc').addClass('has-success  has-feedback');
					$('#tickIcon').addClass('glyphicon glyphicon-ok form-control-feedback');
					$('#btn_sub').removeAttr('disabled');
					$('#tickIcon').removeClass('glyphicon-remove');
						$('#email_exist_error').remove();

				}
				}
			});


});
	$('#firstname').on('change',function(e){
		var query_string = $(this).val();
		if(query_string.length!=0){
				$('#fnameCheck').addClass('has-success');
				$('#fnameCheck').removeClass('has-error');
		}
		else {
			$('#fnameCheck').removeClass('has-success');
			$('#fnameCheck').addClass('has-error');
		}


	});
	$('#lastname').on('change',function(e){
		var query_string = $(this).val();
		if(query_string.length!=0){
				$('#lnameCheck').addClass('has-success');
				$('#lnameCheck').removeClass('has-error');
		}
		else {
			$('#lnameCheck').removeClass('has-success');
			$('#lnameCheck').addClass('has-error');
		}


	});
	$('#fathername').on('change',function(e){
		var query_string = $(this).val();
		if(query_string.length!=0){
				$('#fanameCheck').addClass('has-success');
				$('#fanameCheck').removeClass('has-error');
		}
		else {
			$('#fanameCheck').removeClass('has-success');
			$('#fanameCheck').addClass('has-error');
		}


	});
	$('#Address').on('change',function(e){
		var query_string = $(this).val();
		if(query_string.length!=0){
				$('#addnameCheck').addClass('has-success');
				$('#addnameCheck').removeClass('has-error');
		}
		else {
			$('#addnameCheck').removeClass('has-success');
			$('#addnameCheck').addClass('has-error');
		}


	});
	$('#passingyear').on('change',function(e){
		var query_string = $(this).val();
		if(query_string.length!=0){
				$('#yearCheck').addClass('has-success');
				$('#yearCheck').removeClass('has-error');
		}
		else {
			$('#yearCheck').removeClass('has-success');
			$('#yearCheck').addClass('has-error');
		}


	});
	$('#number').on('change',function(e){
		var query_string = $(this).val();
		if(query_string.length!=0){
				$('#phoneCheck').addClass('has-success');
				$('#phoneCheck').removeClass('has-error');
		}
		else {
			$('#phoneCheck').removeClass('has-success');
			$('#phoneCheck').addClass('has-error');
		}


	});
	$('#password').on('change',function(e){
		var query_string = $(this).val();
		if(query_string.length!=0){
				$('#passCheck').addClass('has-success');
				$('#passCheck').removeClass('has-error');
		}
		else {
			$('#passCheck').removeClass('has-success');
			$('#passCheck').addClass('has-error');
		}


	})
});
