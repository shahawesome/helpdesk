@extends('/admin/template')

@section('content')
<div class="page-header position-relative">
	<h1>
		Update Vendor
	</h1>
</div>

<form class="form-horizontal" action="/admin/vendor/update" method="post">
	<div class="control-group">
		<label class="control-label" >Vendor Name</label>

		<div class="controls">
			<input type="text" class="span10" placeholder="Name" required name="name" value="{{$vendor->name}}">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >Vendor Address</label>

		<div class="controls">
			<textarea class="span10" rows="4" placeholder="Address" name="address" >{{$vendor->address}}</textarea>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >Office Phone No</label>

		<div class="controls">
			<input type="text"  placeholder="XXXXXXXXX" name="phone_no" value="{{$vendor->phone_no}}">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >Fax No</label>

		<div class="controls">
			<input type="text"  placeholder="XXXXXXXXX" name="fax_no" value="{{$vendor->fax_no}}">
		</div>
	</div>

	<h2 class="header lighter blue">&nbsp;&nbsp;Staff List</h2>
	<!--1 jemaah -->
	<div class="row-fluid " id="jemaah" >
		<?php $no=1; ?>
		@foreach($vendor->collaborateStaff as $vendorStaff)
		@if($no!=1) <br><br><div> @endif
		<div class="span6">
			<input type="text" name="jemaah_name[]" class="input-block-level" Placeholder="Name" required value="{{$vendorStaff->name}}">
		</div>
		<div class="span2">
			<input type="text" name="jemaah_phone_no[]" class="input-block-level" Placeholder="Phone No" required value="{{$vendorStaff->phone_no}}">
		</div>
		<div class="span3">
			<input type="email" name="jemaah_email[]" class="input-block-level" Placeholder="Email" required value="{{$vendorStaff->email}}">
		</div>
		<div class="span1">
			@if($no!=1)
			<button id="removeJemaah" type="button" class="btn btn-mini btn-warning"><span class="icon-minus"></span></button>
			@else
			<button id="btn-add-jemaah" type="button" class="btn btn-mini btn-success"><span class="icon-plus"></span></button>
			@endif
		</div>
		@if($no!=1) </div> @endif
		<?php $no++; ?>
		@endforeach
	</div>
	<!--/1 jemaah -->
	<input type="hidden" value="{{$vendor->id}}" name="vendor_id">
	<br>
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
			&nbsp;

		</div>
	</div>
</form>

<!--all jemaah -->
<div id="newJemaah" class="row-fluid" style="display:none">
	<div>		
		<div class="span6" style="margin-top:10px">
			<input type="text" name="jemaah_name[]" class="input-block-level" Placeholder="Name" required>
		</div>
		<div class="span2" style="margin-top:10px">
			<input type="text" name="jemaah_phone_no[]" class="input-block-level" Placeholder="Phone No" required>
		</div>
		<div class="span3" style="margin-top:10px">
			<input type="email" name="jemaah_email[]" class="input-block-level" Placeholder="Email" required>
		</div>
		<div class="span1" style="margin-top:10px">
			<button id="removeJemaah" type="button" class="btn btn-mini btn-warning"><span class="icon-minus"></span></button>
		</div>
	</div>
</div>
<!--/all jemaah -->

@stop