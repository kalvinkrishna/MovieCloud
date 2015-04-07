$(document).ready(function(){
	$("#SignIn").click(function(){
			$("#Register").hide();

	});

	$("#SignUp").click(function(){
		$("#Loginform").hide();
	});
});
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
$("#imgInp").change(function(){
        readURL(this);
});