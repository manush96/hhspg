var list_ind;
var list_max;
$(document).ready(function()
{
	$("#search_pgs").click(function()
	{
		var city = $("#city").val();
		var area = $("#area").val();
		window.location.href = "home/search/"+city+"/"+area;
	});
	$("#area").keyup(function(event)
	{
		if(event.which <= 45 && event.which != 8)
			return;

		var area = $("#area").val();
		if(area.trim()!="")
		{
			$.ajax
			({
				type: "GET",
				url: "home/get_area_suggestion/"+area,
				data: {},
				success: function(response)
				{
					if(response.trim() == "")
					{
						$("#search_list").hide();
					}
					else
					{
						var regex = new RegExp(area,"gi");
						$("#search_list").html(response);
						$("#search_list p").each(function()
						{
							tmp_txt = $(this).html().replace(regex, '<strong>$&</strong>');
							$(this).html(tmp_txt);
						});
					}
					list_max = $("#search_list p").length;
					list_ind = null;
				}
			});
			$("#search_list").show();
		}
		else
		{
			$("#search_list").hide();
			$("#search_list").html('');
		}
	});
	$("#area").keydown(function(event)
	{
		if(event.which == "40")
		{
			if(list_ind == null)
				list_ind = 0;

			list_ind++;
			
			if(list_ind > list_max)
			{
				list_ind = 1;
			}
			
			goto_select(list_ind);
		}
		else if(event.which == "38")
		{
			event.preventDefault();
			if(list_ind == null)
				list_ind = list_max+1;

			list_ind--;

			if(list_ind <= 0)
			{
				list_ind = list_max;
			}
			
			goto_select(list_ind);
		}
		else if(event.which == "13")
		{
			select_area(list_ind);
		}
	});
	$(document).on("mouseenter","#search_list p",function()
	{
		list_ind = $(this).index()+1
		goto_select(list_ind);
	});
	$(document).on("click","#search_list p",function()
	{
		select_area($(this).index()+1);	
	});
});
function goto_select(index)
{
	$("#search_list p").removeClass("list_hover");
	$("#search_list p:nth-child("+index+")").addClass("list_hover");
}

function select_area(index)
{
	$("#area").val($("#search_list p:nth-child("+index+")").text());
	$("#search_list").html('');
	$("#search_list").hide();
}