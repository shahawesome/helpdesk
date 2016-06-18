@extends('/admin/template')

@section('content')
<div class="page-header position-relative">
	<h1>
		List Expired Project
	</h1>
</div>

<div class="row-fluid">
	<table id="sample-table-2" class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Address</th>
				<th>Product</th>
				<th>Vendor</th>
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
				<td>Vendor</td>
				<td>Partner</td>
				<td>Action</td>
			</tr>
		</tbody>
	</table>
</div>

@stop