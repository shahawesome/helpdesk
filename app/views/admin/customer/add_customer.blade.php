@extends('/admin/template')
 
@section('content')

<div class="page-header position-relative">
	<h1>
		Add Customer
	</h1>
</div>

<form class="form-horizontal" action="/admin/customer/add" method="post">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1" >Customer Name</label>

		<div class="col-sm-8" style="margin-left:7px">
			<input type="text"  class="col-xs-10 col-sm-7" placeholder="Name" required name="name">
		</div>
	</div>

	<div class="form-group" id="address">
		<div>
			<label  class="col-sm-3 control-label no-padding-right" for="form-field-1" >Customer Address</label>
		</div>
		<div class="col-sm-4" style="margin-left:7px">
			<textarea class="col-xs-10 col-sm-12" rows="4" placeholder="Address" name="address[]"></textarea>
		</div>
		<div class="col-sm-2" style="margin-left:9px">
			<select class="form-control col-xs-10 col-sm-12" name="site[]" required>
				<option value="">=SELECT SITE=</option>
				<option value="PR">Production</option>
				<option value="DR">Disaster Recovery</option>
				<option value="HO">Head Office</option>
			</select>
			<br><br><br><br>
			<button id="btn-add-address" type="button" class="btn btn-mini btn-success col-sm-12"><span class="ace-icon fa fa-plus"></span></button>
		</div>
		<div class="col-sm-2">
		</div>
	</div>

	

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"  >Office Phone No</label>
		<div class="input-group " >
			&nbsp;
			<span class="input-group-addon " >
				<i class="ace-icon fa fa-phone" ></i>
			</span>
			<input type="text"  placeholder="XXXXXXXXX" name="phone_no">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1" >Fax No</label>
		<div class="input-group ">
			&nbsp;
			<span class="input-group-addon " >
				<i class="ace-icon fa fa-fax" ></i>
			</span>
			<input type="text"  placeholder="XXXXXXXXX" name="fax_no">
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

<div  id="newaddress" style="display:none">
	<div class="form-group">
		<div>
			<label  class="col-sm-3 control-label no-padding-right" for="form-field-1"  style="margin-left:7px;margin-top:10px">Customer Address</label>
		</div>
		<div class="col-sm-4" style="margin-left:7px;margin-top:10px">
			<textarea class="col-xs-10 col-sm-12" rows="4" placeholder="Address" name="address[]"></textarea>
		</div>

		<div class="col-sm-2" style="margin-top:10px">
			<select class="form-control col-xs-10 col-sm-12" name="site[]" required>
				<option value="">=SELECT SITE=</option>
				<option value="PR">Production</option>
				<option value="DR">Disaster Recovery</option>
				<option value="HO">Head Office</option>
			</select>
			<br><br><br><br>
			<button id="removeaddress" type="button" class="btn btn-mini btn-warning col-sm-12" ><span class="ace-icon fa fa-minus"></span></button>
		</div style="margin-top:10px">
		<div class="col-sm-2" >
		</div>
	</div>
</div>

@stop

@section('script')
<script type="text/javascript">
	jQuery(function($) {
		$('[data-rel=tooltip]').tooltip();
		$('[data-rel=popover]').popover({html:true});
	});
</script>
@stop