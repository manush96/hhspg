$(document).ready(function()
{
	$(document).on("click",".add_to_wishlist",function()
	{
		id = $(this).attr('rel');
		url = window.location.href;
		elem = $(this);

		$.ajax
		({
			type: "POST",
			url: "home/add_to_wishlist",
			data: { pg_id: id, url: url },
			success: function(response)
			{
				if(response == "TRUE")
				{
					elem.addClass("remove_from_wishlist").removeClass("add_to_wishlist");
				}
				else
				{
					window.location.href = "user/?return_url="+response;
				}
				
			}
		});
	});
	$(document).on("click",".remove_from_wishlist",function()
	{
		id = $(this).attr('rel');
		url = window.location.href;
		elem = $(this);

		$.ajax
		({
			type: "POST",
			url: "home/remove_from_wishlist",
			data: { pg_id: id, url: url },
			success: function(response)
			{
				if(response == "TRUE")
				{
					elem.addClass("add_to_wishlist").removeClass("remove_from_wishlist");
				}
				else
				{
					window.location.href = "user/?return_url="+response;
				}
				
			}
		});
	});
});