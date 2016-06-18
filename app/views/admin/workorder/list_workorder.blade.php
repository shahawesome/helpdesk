@extends('/admin/template')

@section('content')
<div class="page-header position-relative">
	<h1>
		Work Order List
	</h1>
</div>

<table id="sample-table-1" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Address</th>
			<th>Product</th>
			<th>vendor</th>
			<th>Partner</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<td>No</td>
		<td>Name</td>
		<td>Address</td>
		<td>Product</td>
		<td>vendor</td>
		<td>Partner</td>
		<td>Action</td>
	</tr>
	</tbody>
</table>

@stop