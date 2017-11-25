$.ajaxSetup({ scriptCharset: "utf-8", contentType: "application/x-www-form-urlencoded; charset=UTF-8" });
jQuery(document).ready(function($)
{
	var outputId = '';
	$(".compl").autocomplete(
	{
		source: function(req, res)
		{
			outputId = $(this.element).prop("id");
			var _url="http://127.0.0.1:1337/?=" + outputId + "&callback=?";
			console.log('req.term: ' + req.term + ": " + _url);
			$.ajax(
			{
				url: _url,
				dataType: "jsonp",
				data:
				{
					q: encodeURI(req.term)
				},
				success: function(data)
				{
					res(data);
				},
				error: function(xhr, status, err)
				{
					console.log(status);
					console.log(err);
				}
			});
		},
		minLength: 2,
		select: function(event, ui)
		{
			if (ui.item)
			{
				console.log('#myOutput' + outputId);
				$('#myOutput' + outputId).val(ui.item.label.split(' - ')[0]);
			}
		}
	});
});