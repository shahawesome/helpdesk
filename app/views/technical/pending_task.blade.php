@extends('/technical/template')

@section('content')
<div class="page-header position-relative">
	<h1>
		Pending Task
	</h1>
</div>

<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr >
			<th>No</th>
			<th>Date</th>
			<th>Time</th>
			<th>Summary</th>
			<th>Type</th>
			<th width="100px" >Action</th>
		</tr>
	</thead>

	<tbody>
	<tr>
		<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td ><button class="btn btn-mini btn-info">More</button>
			<button class="btn btn-mini btn-primary">Take</button></td>
		</tr>
	</tbody>
</table>


@stop