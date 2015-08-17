// validate and process form
$( "#login-form" ).submit(function( event ) {

		var password = $("#Password").val();

		if (password == "manti") {
			$(".errorMsg").hide();
			
			$.cookie('familywebsiteAccess', "true", { expires: 30, path: '/' });
			
			window.location.href = '/';
			document.location = '/';
		} else {
			$(".errorMsg").show();
			$('#Password').focus();
		}
		return false;

});