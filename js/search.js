$(document).ready(function()
{
	$(".wishlist_icon").click(function()
	{
		id = $(this).attr('rel');
		alert(id);
	});
});