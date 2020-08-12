$(function() {
	$('form').submit(function(e) {

		//prevent default submission of form
		e.preventDefault();

		//ajax submission of forms
		$.ajax({
			type:'POST',
			url: 'form.php',
			data: $(this).serialize(),
			success: (message) => {
				//actions carried out when submission is successful
				document.querySelector('#email').value = '';
				swal("Good job!", "Registration successful", "success");
			},
			//actions carried out when submission isn't successful
			error: (error) => {
				alert(`${error}`)
			}
		})
	});
})