(function($)
{

	$(document).ready(function()
	{

		var limitList 	= $('.list-limit-pagination').find('a'),
			limitNum 	= $('#list-limit-pagination-btn').data('listlimit');

		$.each(limitList, function() {
			if ( $(this).data('value') == limitNum )
			{
				$(this).addClass('active')
			}
		});

		$(limitList).click(function(e) 
		{
			e.preventDefault();
			var $this 	= $(this),
				val 	= $this.data('value');
				console.log(val);
				$('input[name="limit"]').val(val);
				$('#list-limit').submit();
		});

		
	})
})(jQuery);
