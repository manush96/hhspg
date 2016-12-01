$(document).ready(function()
{
	$(".visited").click(function()
	{
		id = $(this).attr('rel');
		alert(id);

		$.ajax
		({
			type: "POST",
			url: "admin/visited",
			data: { id:id },
			success: function(response)
			{
				alert(response);	
			}
		});
	});
});