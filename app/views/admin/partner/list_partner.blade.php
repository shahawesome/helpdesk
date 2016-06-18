@extends('/admin/template')

@section('content')
<div class="page-header position-relative">
	<h1>
		Partner List
	</h1>
</div>

<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th> 
			<th>Address</th>
			<th>Phone No</th>
			<th width="180px">Action</th>
		</tr>
	</thead>

	<tbody>
		<?php $num=1; ?>
		@forelse($listPartner as $partner)
		<tr>
			<td>{{$num++}}</td>
			<td>{{$partner->name}}</td>
			<td>{{$partner->address}}</td>
			<td>{{$partner->phone_no}}</td>
			<td>
				<a type="submit" class="btn btn-mini btn-warning" href="/admin/partner/list/{{$partner->id}}">Update</a>&nbsp;
				<a type="submit" class="btn btn-mini btn-danger" href="/admin/partner/delete/{{$partner->id}}" onclick="return confirm('Are you sure?')">Delete</a>&nbsp;
				<a class="btn btn-mini btn-success" data-toggle="collapse" href="#collapse{{$partner->id}}">Staff
					<span class="icon-angle-down"></span>
				</a>
			</td>
		</tr>
		
		<tr style="background-color:#ecf0f1">
			<td colspan="5">
				<?php $num1=1; ?>

				<div id="collapse{{$partner->id}}" class="collapse">
					<table class="table">
						
						<tr>
							<td>No</td>
							<td>Name</td>
							<td>Address</td>
							<td>Phone No</td>
						
						</tr>
						@foreach($partner->collaborateStaff as $partnerStaff)

						<tr>
							<td>{{$num1++}}</td>
							<td>{{$partnerStaff->name}}</td>
							<td>{{$partnerStaff->phone_no}}</td>
							<td>{{$partnerStaff->email}}</td>
							
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