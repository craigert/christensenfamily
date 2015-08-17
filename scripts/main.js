$(function() {
    $('.editContent').click(function() {
        $('.editable').addClass('editActive');
        $('.editable').attr('contenteditable', 'true');
    });

    $('.saveContent').click(function() {
        $('.editable').removeClass('editActive');
        $('.editable').removeAttr('contenteditable', 'true');
		
		var aboutMe = $('#about_me h3').html();
		var whatsImportant = $('#what_matters_most_to_me h3').html();
		
        $.ajax({
            url: 'saveToDb.php',
            type: 'POST',
            data: {
                aboutMe: aboutMe,
				whatsImportant: whatsImportant
            },
			success: function() {
				$('#content').after("<h2 style='color:#000; font-family:Verdana,Arial,Helvetica,sans-serif; margin:30px 0 10px 100px; width:300px;'>saved!</h2>")
			 }
        });
		
    });
});