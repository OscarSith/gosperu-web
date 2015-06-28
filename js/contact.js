$('#contactform').on('submit', function (e) {
	e.preventDefault();
	var $this = $(this);

	var name = $this.children('input[name=name]');
	var email = $this.children('input[name=email]');
	var regx = /^([a-z0-9_\-\.])+\@([a-z0-9_\-\.])+\.([a-z]{2,4})$/i;
	var comment = $this.children('textarea[name=comment]');
	var returnError = false;

	//Simple validation to make sure user entered something
	//Add your own error checking here with JS, but also do some error checking with PHP.
	//If error found, add hightlight class to the text field
	// if (name.val()=='') {
	// 	name.addClass('error');
	// 	returnError = true;
	// } else name.removeClass('error');
	
	// if (email.val()=='') {
	// 	email.addClass('error');
	// 	returnError = true;
	// } else email.removeClass('error');

	// if(!regx.test(email.val())){
 //      email.addClass('error');
 //      returnError = true;
	// } else email.removeClass('error');

	// if (comment.val()=='') {
	// 	comment.addClass('error');
	// 	returnError = true;
	// } else comment.removeClass('error');
	
	// Highlight all error fields, then quit.
	if(returnError == true) {
		return false;
	}

	var data = { name: name.val(), email: email.val(), comment: encodeURIComponent(comment.val()) };

	$this.find(':input').prop('disabled', true);
	$('.loading').show();
	$.ajax({
		url: "send.php",
		type: "POST",
		data: data,
		dataType: 'json'
	}).done(function(rec) {
		if (rec.is_errors) {
			$('.msg_errors').fadeIn('slow');
			var $errors = $('#msg_errors');
			$errors.empty();
			$.each(rec.info, function(i, input) {
				$errors.append(input);
			});
		} else {
			$('.done, .msg_errors').fadeOut('fast');
			if (rec.load) {
				$('.done').fadeIn('slow');
				$('#msg_success').html(rec.success);
				$this.trigger('reset');
			} else {
				$('.msg_errors').fadeIn('slow')
				$('#msg_errors').append(rec.error);
			}
		}
	}).always(function() {
		$this.find(':input').prop('disabled', false);
	});
});