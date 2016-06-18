@extends('/admin/template')

@section('content') 
<div class="page-header position-relative">
	<h1>
		New Project
	</h1> 
</div>

<form class="form-horizontal" action="/admin/project/create-project" method="post">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1" >Project Name</label>

		<div class="col-sm-8" style="margin-left:7px">
			<input type="text" class="col-xs-10 col-sm-7" placeholder="Project Name" required name="project_name">
		</div>
	</div>
	<div class="form-group">
		<div>
			<label class="col-sm-3 control-label no-padding-right" >Project Manager</label> 
		</div>
		<div class="col-sm-8" style="margin-left:9px">
			<select class="chosen-select form-control" required name="project_manager" data-placeholder="Choose a Customer...">
				<option value="" selected="selected">=Select=</option>
				@foreach($listManager as $manager)
				<option value="{{$manager->id}}">{{$manager->name}} </option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group">
		<div>
			<label class="col-sm-3 control-label no-padding-right">Project Status</label>
		</div>
		<div class="col-sm-4" style="margin-left:9px">
			<select class="col-xs-10 col-sm-7" required name="status">
				<option value="">=Select=</option>
				<option value="1">New</option>
				<option value="2">Renew</option>
				<option value="3">Maintainance</option>
				<option value="4">Upgrade</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<div>
			<label class="col-sm-3 control-label no-padding-right">PO Name</label>
		</div>

		<div class="col-sm-8" style="margin-left:9px">
			<input type="text" class="col-sm-7" placeholder="XX1231" required name="PO_number">
		</div>
	</div>
	<!-- <div class="control-group">
		<label class="control-label" >Project ID</label>

		<div class="form-group">
			<input type="text" class="span10" placeholder="Name" required name="product_name">
		</div>
	</div>-->
	<hr>
	<div class="form-group">
		<div>
			<label class="col-sm-3 control-label no-padding-right">Customer Name</label>
		</div>
		<div class="col-sm-8" style="margin-left:9px">
			<select class="chosen-select form-control" required name="customer_id" data-placeholder="Choose a Customer...">
				<option value="" >=Select=</option>
				@foreach($listCustomer as $customer)
				<option value="{{$customer->id}}">{{$customer->name}} </option>
				@endforeach
			</select>
		</div>
	</div>

	<h2 class="header lighter blue">&nbsp;&nbsp;Product List</h2>
	<!--1 jemaah -->

	<div id="jemaah"  style="margin-left: 30px;">
		<table style="width:90%" >
			<style>tr {height: 50px;}</style>
			<tr>
				<td width="16%">Product Name</td>
				<td colspan="4"> <input type="text" name="jemaah_product_name[]"  required class="form-control"></td>
			</tr>
			<tr>
				<td>Product Number</td>    
				<td> <input type="text" name="jemaah_number[]"  Placeholder="Product Number" class="form-control"></td>
				<td width="20px"></td>
				<td width="100px"> Serial Number</td>
				<td> <input type="text" name="jemaah_serial_number[]"  Placeholder="Serial Number" class="form-control"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td colspan="4"><!-- <select required name="jemaah_type[]" class="form-control">
					<option value="">=Select=</option>
					<option value="Netapp">Netapp</option>
					<option value="Syamantec">Syamantec</option>
					<option value="VMware">VMware</option>
				</select> -->
				<input type="checkbox" value="1" name="jemaah_type1[]"> NetApp Storage &nbsp;
				<input type="checkbox" value="1" name="jemaah_type2[]"> License &nbsp;
				<input type="checkbox" value="1" name="jemaah_type3[]"> Netbackup Appliance &nbsp;
				</td>
			</tr>
			<tr>
				<td>Support ID</td>    
				<td>  <input type="text" name="jemaah_support_id[]"  Placeholder="Serial ID" required class="form-control"></td>
				<td></td>
				<td>Service Level</td>
				<td>  <input type="text" name="jemaah_service_level[]"  Placeholder="Service Level" required class="form-control"></td>
			</tr>
			<tr>
				<td>Date</td>
				<td colspan="4">    
					<div class="input-daterange input-group col-sm-12">
						<input type="text" class="form-control" name="jemaah_start_date[]" placeholder="Start Date" id="date1[]">
						<span class="input-group-addon">
							<i class="fa fa-exchange"></i>
						</span>
						<input type="text" class="form-control" name="jemaah_end_date[]" placeholder="End Date" id="date2[]">
					</div>
				</td>
			</tr>
			<tr>
				<td>Vendor</td>    
				<td>
				<select required name="jemaah_vendor[]" class="form-control chosen-select" data-placeholder="Choose a Vendor...">
					<option value="">=Select=</option>
					@foreach($listVendor as $vendor)
					<option value="{{$vendor->id}}">{{$vendor->name}} </option>
					@endforeach
				</select></td>
				<td></td>
				<td>Partner</td>
				<td> 
				<select required name="jemaah_partner[]" class="form-control chosen-select " data-placeholder="Choose a Partner...">
					<option value="">=Select=</option>
					@foreach($listPartner as $partner)
					<option value="{{$partner->id}}">{{$partner->name}} </option>
					@endforeach
				</select></td>
			</tr>
			<tr>
				<td>Preventive Maintenance</td>    
				<td>  <input type="number" name="jemaah_pm[]"  Placeholder="8" class="form-control"></td>
				<td></td>
				<td>Onsite Support</td>
				<td><input type="number" name="jemaah_os[]"  Placeholder="4" class="form-control"></td>
			</tr>
			<tr>
				<td></td>
				<td colspan="4"><button id="btn-add-jemaah" type="button" class="btn btn-mini btn-success btn-block"><span class="fa fa-plus"></span></button></td>
			</tr>
		</table>
		<hr>
	</div>
	<!--/1 jemaah -->
	<br>
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
<div id="newJemaah" style="display:none">
	<div>
		<table style="width:90%" >
			<style>tr {height: 50px;}</style>
			<tr>
				<td width="16%">Product Name</td>
				<td colspan="4"> <input type="text" name="jemaah_product_name[]"  required class="form-control"></td>
			</tr>
			<tr>
				<td>Product Number</td>    
				<td> <input type="text" name="jemaah_number[]"  Placeholder="Product Number" class="form-control"></td>
				<td width="20px"></td>
				<td width="100px"> Serial Number</td>
				<td> <input type="text" name="jemaah_serial_number[]"  Placeholder="Serial Number" class="form-control"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td colspan="4">
				<!-- <select required name="jemaah_type[]" class="form-control">
					<option value="">=Select=</option>
					<option value="Netapp">Netapp</option>
					<option value="Syamantec">Syamantec</option>
					<option value="VMware">VMware</option>
				</select> -->
				<input type="checkbox" value="1" name="jemaah_type1[]"> NetApp Storage &nbsp;
				<input type="checkbox" value="1" name="jemaah_type2[]"> License &nbsp;
				<input type="checkbox" value="1" name="jemaah_type3[]"> Netbackup Appliance &nbsp;
				</td>
			</tr>
			<tr>
				<td>Support ID</td>    
				<td>  <input type="text" name="jemaah_support_id[]"  Placeholder="Serial ID" required class="form-control"></td>
				<td></td>
				<td>Service Level</td>
				<td>  <input type="text" name="jemaah_service_level[]"  Placeholder="Service Level" required class="form-control"></td>
			</tr>
			<tr>
				<td>Date</td>
				<td colspan="4">    
					<div class="input-daterange input-group col-sm-12">
						<input type="text" class="form-control" name="jemaah_start_date[]" placeholder="Start Date" id="date1[]">
						<span class="input-group-addon">
							<i class="fa fa-exchange"></i>
						</span>
						<input type="text" class="form-control" name="jemaah_end_date[]" placeholder="End Date" id="date2[]">
					</div>
				</td>
			</tr>
			<td>Vendor</td>    
			<td> 
			<select required name="jemaah_vendor[]" class="form-control chosen-select" data-placeholder="Choose a Vendor...">
					<option value="">=Select=</option>
					@foreach($listVendor as $vendor)
					<option value="{{$vendor->id}}">{{$vendor->name}} </option>
					@endforeach
				</select>
			</td>
			<td>
			</td>
			<td>
				Partner
			</td>
			<td> 
			<select required name="jemaah_partner[]" class="form-control chosen-select" data-placeholder="Choose a Partner...">
					<option value="">=Select=</option>
					@foreach($listPartner as $partner)
					<option value="{{$partner->id}}">{{$partner->name}} </option>
					@endforeach
				</select>
			</td>
		</tr>
		<tr>
			<td>Preventive Maintenance</td>    
			<td>  <input type="number" name="jemaah_pm[]"  Placeholder="8" class="form-control"></td>
			<td></td>
			<td>Onsite Support</td>
			<td><input type="number" name="jemaah_os[]"  Placeholder="4" class="form-control"></td>
		</tr>
	</table>
	<div style="margin-left: 14.5%; margin-right:10%; margin-top:5px;" >
		<button id="removeJemaah" type="button" class="btn btn-mini btn-warning btn-block"><span class="fa fa-minus"></span></button>
	</div>
</div>


<!--/all jemaah -->

@stop
@section('script')

@stop