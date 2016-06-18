@extends('/admin/template')

@section('content')
<div class="page-header position-relative">
	<h1>
		List of Product
	</h1>
</div>


</style>

<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Type</th>
			<th>Service Level</th>
			<th>Vendor</th>
			<th>Partner</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody>
		<?php $num=1;?>
		@foreach($listProduct as $product)
		<tr>
			<td>{{$num++}}</td>
			<td>{{$product->name}}</td>
			<td>{{$product->type}}</td>
			<td>{{$product->service_level}}</td>
			<td>{{$product->vendor->name}}</td>
			<td>{{$product->partner->name}}</td>
			<td><a href="#modal-form{{$product->id}}" role="button" class="btn btn-success btn-mini" data-toggle="modal">Create Incident</a>
				@include('/admin/incident/modalNewIncident')
			</td>
		</tr>
		@endforeach
	</tbody>
</table>


@stop
@section('style')

@stop