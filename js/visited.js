$(document).ready(function()
{
	$(".visited").click(function()
	{
		id = $(this).attr('rel');
		//alert(id);

		$.ajax
		({
			type: "POST",
			url: "admin/visited",
			data: { id:id },
			success: function(response)
			{
				//alert(response);	
			}
		});
	});

	$(".handled").click(function()
	{
		id = $(this).attr('rel');
		//alert(id);
		par = $(this).parents(".owner_row");
		$.ajax
		({
			type: "POST",
			url: "admin/handled",
			data: { id:id },
			success: function(response)
			{
				par.fadeOut("slow");
				//alert(response);	
			}
		});
	});
});