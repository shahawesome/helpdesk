@extends('/admin/template') 

@section('content')
<div class="page-header position-relative">
	<h1>
		Create User
	</h1>
</div>


<form class="form-horizontal" action="/admin/user/create" method="post">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Name</label>

		<div class="col-sm-9">
			<input type="text" placeholder="Name" name="name" required class="col-xs-10 col-sm-5"/>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Username</label>

		<div class="col-sm-9">
			<input type="text" name="username" placeholder="Username" required class="col-xs-10 col-sm-5">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Password</label>

		<div class="col-sm-9">
			<input type="password" name="password" placeholder="Password" required class="col-xs-10 col-sm-5">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Email</label>

		<div class="col-sm-9">
			<input type="email" name="email" placeholder="xxxx@i-erat.com" required class="col-xs-10 col-sm-5">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Staff ID</label>

		<div class="col-sm-9">
			<input type="text" name="staff_id" placeholder="IEXXX" required class="col-xs-10 col-sm-5">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1" >Phone No</label>

		<div class="col-sm-9">
			<input type="text" name="phone_no" placeholder="XXXXXXXXXXX" required class="col-xs-10 col-sm-5">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1" >Role</label>

		<div class="col-sm-9">
			<div class="row-fluid">
				<select name="role" required class="col-xs-10 col-sm-5">
					<option value="" />=Please Select=</option>
					<option value="100" />Admin</option>
					<option value="69" />Technical</option>

				</select>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-offset-3 col-md-9">
			<button class="btn btn-info btn-small" type="submit">
				<i class="ace-icon fa fa-check"></i>
				Submit
			</button>
			&nbsp; 
			<button class="btn btn-small" type="reset">
				<i class="ace-icon fa fa-undo"></i>
				Reset
			</button>
		</div>
	</div>
</form>

@stop