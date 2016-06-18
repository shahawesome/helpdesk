@extends('/admin/template')

@section('content')
<div class="page-header position-relative">
	<h1>
		Users List
	</h1>
</div>
<a style="cursor:pointer;margin-top:-10px" class="btn pull-right" onclick="tableToExcel('table','Akaun Peribadi - Info')" title="Download">
	<img src="/img/excel.png" width="30" />
</a>
<table id="table" class="table table-striped table-bordered table-hover">
	<thead >
		<tr >
			<th class="center">No</th>
			<th class="center">Name</th>
			<th class="center">Email</th>
			<th class="center">Staff ID</th>
			<th class="center">Role</th>
			<th class="center" >Phone No</th>
			<th class="center">Action</th>
		</tr>
	</thead>

	<tbody>
		<?php $num=1; ?>
		@foreach($listUser as $user)
		<tr>
			<td class="center">{{$num++}}</td>
			<td class="center">{{$user->name}}</td>
			<td class="center">{{$user->email}}</td>
			<td class="center">{{$user->staff_id}}</td>
			<td class="center">{{$user->role()}}</td>
			<td class="center">{{$user->phone_no}}</td>
			<td class="center" width="200px">
				<a class="btn btn-mini  btn-primary">
					<i class="icon-zoom-in"></i>
					View
				</a>
				<a class="btn btn-mini btn-warning" href="/admin/user/update/{{$user->id}}">
					<i class="icon-pencil"></i>
					Update
				</a>
				<a class="btn btn-mini btn-danger" href="/admin/user/delete/{{$user->id}}" onclick="return confirm('Are you sure?')">
					<i class="icon-trash"></i>
					Delete
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@stop

