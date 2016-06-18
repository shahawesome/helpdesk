@extends('/admin/template')

@section('content')
<div class="page-header position-relative">
	<h1>
		Vendor List
	</h1>
</div>
<table class="table table-striped table-bordered ">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Address</th>
			<th>Phone No</th>
			<th  width="190px">Action</th>
		</tr>
	</thead>
 
	<tbody>
		<?php $num=1; ?>
		@forelse($listVendor as $vendor)
		<tr>
			<td>{{$num++}}</td>
			<td>{{$vendor->name}}</td>
			<td width="400px">{{$vendor->address}}</td>
			<td>{{$vendor->phone_no}}</td>
			<td>
				<a type="submit" class="btn btn-mini btn-warning" href="/admin/vendor/list/{{$vendor->id}}">Update</a>&nbsp;
				<a type="submit" class="btn btn-mini btn-danger" href="/admin/vendor/delete/{{$vendor->id}}" onclick="return confirm('Are you sure?')">Delete</a>&nbsp;
				<a class="btn btn-mini btn-success" data-toggle="collapse" href="#collapse{{$vendor->id}}">Staff
					<span class="icon-angle-down"></span>
				</a>
			</td>
		</tr>
		
		
		<tr style="background-color:#ecf0f1">
			<td colspan="5">
				<?php $num1=1; ?>

				<div id="collapse{{$vendor->id}}" class="collapse">
					<table class="table">
						
						<tr>
							<td>No</td>
							<td>Name</td>
							<td>Address</td>
							<td>Phone No</td>
						
						</tr>
						@foreach($vendor->collaborateStaff as $vendorStaff)

						<tr>
							<td>{{$num1++}}</td>
							<td>{{$vendorStaff->name}}</td>
							<td>{{$vendorStaff->phone_no}}</td>
							<td>{{$vendorStaff->email}}</td>
							
						</tr>

						@endforeach
					</table>
				</div>

			</td>
		</tr>


		@empty
		<tr>
			<td colspan="5">Rekod not found!</td>
		</tr>
		@endforelse
	</tbody>
</table>



@stop
