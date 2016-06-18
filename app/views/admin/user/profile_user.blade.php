@extends('/admin/template')

@section('content')
<div class="tab-content profile-edit-tab-content">
	<div id="edit-basic" class="tab-pane active">
		<h4 class="header blue bolder smaller">General Profile</h4>

		<div class="row-fluid">
			<div class="span4">
				<div class="ace-file-input ace-file-multiple"><input type="file"><label data-title="Change avatar"><span data-title="No File ..."><i class="icon-picture"></i></span></label><a class="remove" href="#"><i class="icon-remove"></i></a></div>
			</div>

			<div class="vspace"></div>

			<div class="span8">
				<div class="control-group">
					<label class="control-label" for="form-field-username">Designation</label>

					<div class="controls">
						<input type="text" id="form-field-username" placeholder="Username" value="alexdoe" disabled="true" >
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="form-field-first">Name</label>

					<div class="controls">
						<input class="input-small span6" type="text" id="form-field-first" placeholder="First Name" value="Alex" disabled="true">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="form-field-username">Satff ID</label>

					<div class="controls">
						<input type="text" id="form-field-username" placeholder="Username" value="IE007" disabled="true">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="form-field-email">Email</label>

					<div class="controls">
						<span class="input-icon input-icon-right">
							<input type="email" id="form-field-email" value="alexdoe@i-erat.com" disabled="true">
							<i class="icon-envelope"></i>
						</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="form-field-phone">Phone</label>

					<div class="controls">
						<span class="input-icon input-icon-right">
							<input class="input-medium input-mask-phone" type="text" id="form-field-phone" disabled="true">
							<i class="icon-phone icon-flip-horizontal"></i>
						</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="form-field-phone"></label>
<br>
					<div class="controls">
						<a class="btn btn-success" href="/admin/user/update-current/{{$user->id}}" onclick="return confirm('Are you sure?')">Update</a>
						<a type="button" class="btn " href="/admin">Back</a>
					</div>
				</div>
			</div>
		</div>

		<hr>
		

		<div class="space"></div>
		
	</div>

	@stop