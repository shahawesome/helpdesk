@extends('/admin/template')

@section('content')
<div class="page-header position-relative">
	<h1>
		Update User
	</h1>
</div>


<form class="form-horizontal" action="/admin/user/update" method="post">
	<input type="hidden" name="user_id" value="{{$maklumatuser->id}}" >
	<div class="control-group">
		<label class="control-label" for="form-field-1">Name</label>

		<div class="controls">
			<input type="text" placeholder="Name" name="name" required value="{{$maklumatuser->name}}">
		</div>
	</div>
	<!--
	<div class="control-group">
		<label class="control-label" >Username</label>

		<div class="controls">
			<input type="text" name="username" placeholder="Username" required value="{{$maklumatuser->name}}">
		</div>
	</div>
	-->
	<div class="control-group">
		<label class="control-label" >Email</label>

		<div class="controls">
			<input type="email" name="email" placeholder="xxxx@i-erat.com" required value="{{$maklumatuser->email}}">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >Staff ID</label>

		<div class="controls">
			<input type="text" name="staff_id" placeholder="IEXXX" required value="{{$maklumatuser->staff_id}}">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >Phone No</label>

		<div class="controls">
			<input type="text" name="phone_no" placeholder="XXXXXXXXXXX" required value="{{$maklumatuser->phone_no}}">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >Role</label>

		<div class="controls">
			<div class="row-fluid">
				<select name="role" required>
					<option value="" >=Please Select=</option>
					<option value="100" {{($maklumatuser->role=='100')?'selected':''}}>Admin</option>
					<option value="69" {{($maklumatuser->role=='69')?'selected':''}}>Technical</option>

				</select>
			</div>
		</div>
	</div>

	<div class="control-group">
		<div class="controls">
			<button class="btn btn-info btn-small" type="submit">
				<i class="icon-ok "></i>
				Update
			</button>
			&nbsp; 
			<button class="btn btn-small" type="reset">
				<i class="icon-undo "></i>
				Reset
			</button>
		</div>
	</div>
</form>

@stop