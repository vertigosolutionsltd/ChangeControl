<div class="btn-group list-limit-pagination" role="group">
	<button id="list-limit-pagination-btn" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-listlimit="{{Request::input('limit')}}">
		# {{Request::input('limit')}}
	</button>
	<div class="dropdown-menu list-limit-pagination" aria-labelledby="list-limit-pagination">
		<a class="dropdown-item" data-value="1" href="#">1</a>
		<a class="dropdown-item" data-value="15" href="#">15</a>
		<a class="dropdown-item" data-value="50" href="#">50</a>
		<a class="dropdown-item" data-value="100" href="#">100</a>
		<a class="dropdown-item" data-value="all" href="#">all</a>
	</div>
	<form id="list-limit" action="{{ url(Request::url()) }}" method="GET" style="display: none;">
		<input type="number" name="limit" value="">
	</form>
</div>
