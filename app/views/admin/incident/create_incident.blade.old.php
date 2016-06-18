@extends('/admin/template')

@section('content')
<div class="page-header position-relative">
	<h1>
		Create Incident
	</h1>
</div>

<form class="form-horizontal" />
<div class="control-group">
	<label class="control-label">Select Customer</label>
	<div class="controls">
		<select class="span12 select2" name="" id="aa">
			<option value="">=Select=</option>
			@foreach($listCustomer as $customer)
			<option value="{{$customer->id}}">{{$customer->name}} </option>
			@endforeach
		</select>
	</div>
</div>

<?php $num=1; ?>

@if(count($listProject)>0)
<h2 class="header lighter blue">&nbsp;&nbsp;Project List</h2>
<table id="sample-table-1" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>Project Name</th>
			<th>Project Director</th>
			<th>PO Number</th>
			<th>Action</th>
		</tr>
	</thead>

	<tbody>
		<?php $num=1;?>
		@foreach($listProject as $project)
		<tr>	
			<td>{{$num++}}</td>
			<td>{{$project->project_name}}</td>
			<td>{{$project->project_director}}</td>
			<td>{{$project->PO_number}}</td>
			<td><a class="btn btn-mini btn-info" href="/admin/incident/listproduct/{{$project->id}}">View Product</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endif

@stop
@section('script')
<script type="text/javascript">
	$('#aa').change(function(){
		//alert($(this).val());
		window.location.href="/admin/incident/create/"+$(this).val();
	});


</script>
@stop