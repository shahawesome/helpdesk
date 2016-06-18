@extends('/admin/template')

@section('content')
<div class="page-header position-relative">
	<h1>
		Add Vendor
	</h1>
</div>

<form class="form-horizontal" action="/admin/vendor/add" method="post">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1" >Vendor Name</label>

		<div class="col-sm-8" style="margin-left:7px">

			<input type="text" class="col-xs-10 col-sm-5" placeholder="Name" required name="name">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1" >Vendor Address</label>

		<div class="col-sm-8" style="margin-left:7px">

			<textarea class="col-xs-10 col-sm-5" rows="4" placeholder="Address" name="address"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Office Phone No</label>
		<div class="input-group " >
			&nbsp;
			<span class="input-group-addon " >
				<i class="ace-icon fa fa-phone" ></i>
			</span>
			<input type="text"  placeholder="XXXXXXXXX" name="phone_no" >
		</div>
	</div>
	<div class="form-group">

		<label class="col-sm-3 control-label no-padding-right" for="form-field-1" >Fax No</label>

		<div class="input-group ">
			&nbsp;
			<span class="input-group-addon " >
				<i class="ace-icon fa fa-fax" ></i>
			</span>
			<input type="text"  placeholder="XXXXXXXXX" name="fax_no" >

		</div>
		
	</div>


	<h2 class="header lighter blue">&nbsp;&nbsp;Staff List</h2>
	<!--1 jemaah -->
	<div class="form-group" id="jemaah" >
		<div class=" col-sm-6">
			<input type="text" name="jemaah_name[]" Placeholder="Name" required class="col-xs-10 col-sm-12">
		</div>
		<div class="col-sm-2">	
			<input type="text" name="jemaah_phone_no[]"  Placeholder="Phone No" required class="col-xs-10 col-sm-12">
		</div>
		<div class=" col-sm-3 ">
		
			<input type="email" name="jemaah_email[]"  Placeholder="Email" required class="col-xs-10 col-sm-12">
		</div>
		<div class="col-sm-1">
			<button id="btn-add-jemaah" type="button" class="btn btn-mini btn-success"><span class="ace-icon fa fa-plus"></span></button>
		</div>
	</div>
	<!--/1 jemaah -->


	<hr>
	<div class="wizard-actions">
		<div class="col-sm-12">
			<button class="btn btn-info btn-small" type="submit">
				<i class="icon-ok "></i>
				Submit
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
<div id="newJemaah" class="form-group" style="display:none">
	<div>		
		<div class="col-sm-6" style="margin-top:10px">
			<input type="text" name="jemaah_name[]"  Placeholder="Name" required class="col-xs-10 col-sm-12">
		</div>
		<div class="col-sm-2" style="margin-top:10px">
			<input type="text" name="jemaah_phone_no[]"  Placeholder="Phone No" required class="col-xs-10 col-sm-12">
		</div>
		<div class="col-sm-3" style="margin-top:10px">
			<input type="email" name="jemaah_email[]"  Placeholder="Email" required class="col-xs-10 col-sm-12">
		</div>
		<div class="col-sm-1" style="margin-top:10px">
			<button id="removeJemaah" type="button" class="btn btn-mini btn-warning"><span class="ace-icon fa fa-minus"></span></button>
		</div>
	</div>
</div>
<!--/all jemaah -->

@stop