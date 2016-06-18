@extends('/admin/template')

@section('content') 
<div class="page-header position-relative">
	<h1>
		New Project
	</h1> 
</div>

<form class="form-horizontal" action="/admin/project/update" method="post">
	<input type="hidden" value="{{$listProject->id}}" name="project_id">
	<div class="control-group">
		<label class="control-label" >Project Name</label>

		<div class="controls">
			<input type="text" class="span10" placeholder="Name" required name="project_name" value="{{$listProject->project_name}}">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >Project Director</label>

		<div class="controls">
			<input type="text" class="span10" placeholder="Name" required name="project_director" value="{{$listProject->project_director}}">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Project Type</label>
		<div class="controls">
			<select class="span10" required name="type">
				<option value="">=Select=</option>
				<option value="1" {{($listProject->type==1)?'selected':''}}>New</option>
				<option value="2" {{($listProject->type==2)?'selected':''}}>Renew</option>
				<option value="3" {{($listProject->type==3)?'selected':''}}>Maintainance</option>
				<option value="4" {{($listProject->type==4)?'selected':''}}>Upgrade</option>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" >PO Name</label>

		<div class="controls">
			<input type="text" class="span10" placeholder="XX1231" required name="PO_number" value="{{$listProject->PO_number}}">
		</div>
	</div>
	<!--
	<div class="control-group">
		<label class="control-label" >Project ID</label>

		<div class="controls">
			<input type="text" class="span10" placeholder="Name" required name="product_name" value="{{$listProject->project_director}}">
		</div>
	</div>
-->
<hr>
<div class="control-group">
	<label class="control-label">Customer Name</label>
	<div class="controls">

		<select class="span10 select2" required name="customer_id">
			<option value="">=Select=</option>
			@foreach($listCustomer as $aaa) 
			<option value="{{$aaa->id}}" {{($aaa->id=$listProject->customer_id)?'selected':''}}>{{$aaa->name}} </option>
			@endforeach
		</select>
	</div>
</div>

<h2 class="header lighter blue">&nbsp;&nbsp;Product List</h2>
<!--1 jemaah -->

<div id="jemaah"  style="margin-left: 30px;">
	<?php $no=1; ?>
	@foreach($listProduct as $product)
	@if($no!=1) <br><br><div> @endif
	<table style="width:90%" >
		<style>tr {height: 50px;}</style>
		<tr>
			<td width="16%">Product Name</td>
			<td colspan="4"> <input type="text" name="jemaah_product_name[]"  required class="input-block-level" value="{{$product->name}}"></td>
		</tr>
		<tr>
			<td>Product Number</td>    
			<td> <input type="text" name="jemaah_number[]"  Placeholder="Product Number" class="input-block-level" value="{{$product->number}}"></td>
			<td width="20px"></td>
			<td width="100px"> Serial Number</td>
			<td> <input type="text" name="jemaah_serial_number[]"  Placeholder="Serial Number" class="input-block-level" value="{{$product->serial_number}}"></td>
		</tr>
		<tr>
			<td>Type</td>
			<td colspan="4"><select required name="jemaah_type[]" class="input-block-level">
				<option value="">=Select=</option>
				<option value="Netapp" {{($product->type='Netapp')?'selected':''}}>Netapp</option>
				<option value="Symantec" {{($product->type='Symantec')?'selected':''}}>Syamantec</option>
				<option value="VMware" {{($product->type='VMware')?'selected':''}}>VMware</option>
			</select></td>
		</tr>
		<tr>
			<td>Support ID</td>    
			<td>  <input type="text" name="jemaah_support_id[]"  Placeholder="Serial ID" required class="input-block-level"  value="{{$product->support_id}}"></td>
			<td></td>
			<td>Service Level</td>
			<td>  <input type="text" name="jemaah_service_level[]"  Placeholder="Service Level" required class="input-block-level"  value="{{$product->service_level}}"></td>
		</tr>
		<tr>
			<td>Start Date</td>    
			<td>  
				<input type="date" required class="input-block-level" name="jemaah_start_date[]"  value="{{$product->start_date}}">
			</td>
			<td></td>
			<td>End Date</td>
			<td>   
				<input type="date" required class="input-block-level" name="jemaah_end_date[]"  value="{{$product->end_date}}">
			</td>
		</tr>
		<tr>
			<td>Vendor</td>    
			<td> <select required name="jemaah_vendor[]" class="input-block-level">
				<option value="">=Select=</option>
				@foreach($listVendor as $vendor)
				<option value="{{$vendor->id}}" {{($vendor->id=$vendor->id)?'selected':''}}>{{$vendor->name}} </option>
				@endforeach
			</select></td>
			<td></td>
			<td>Partner</td>
			<td> <select required name="jemaah_partner[]" class="input-block-level">
				<option value="">=Select=</option>
				@foreach($listPartner as $partner)
				<option value="{{$partner->id}}" {{($partner->id=$partner->id)?'selected':''}}>{{$partner->name}} </option>
				@endforeach
			</select></td>
		</tr>
		<tr>
			<td>Preventive Maintenance</td>    
			<td>  <input type="number" name="jemaah_pm[]"  Placeholder="8" class="input-block-level" value="{{$product->preventive_maintenance}}"></td>
			<td></td>
			<td>Onsite Support</td>
			<td><input type="number" name="jemaah_os[]"  Placeholder="4" class="input-block-level" value="{{$product->onsite_support}}"></td>
		</tr>	
		@if($no==1)
		<tr>
			<td></td>
			<td colspan="4">
				
				<button id="btn-add-jemaah" type="button" class="btn btn-mini btn-success btn-block"><span class="icon-plus"></span></button>
			</td>
		</tr>
		@else
		<div>
			<button id="removeJemaah" type="button" class="btn btn-mini btn-warning"><span class="icon-minus"></span></button>
		</div>
		@endif
	</table>
	<hr>
	@if($no!=1) </div> @endif
	<?php $no++; ?>
	@endforeach
</div>
<!--/1 jemaah -->
<br>
<div class="control-group">
	<div class="controls">
		<button class="btn btn-primary btn-small" type="submit">
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
<div id="newJemaah" style="display:none">
	<div>
		<table style="width:90%" >
			<style>tr {height: 50px;}</style>
			<tr>
				<td width="16%">Product Name</td>
				<td colspan="4"> <input type="text" name="jemaah_product_name[]"  required class="input-block-level"></td>
			</tr>
			<tr>
				<td>Product Number</td>    
				<td> <input type="text" name="jemaah_number[]"  Placeholder="Product Number" class="input-block-level"></td>
				<td width="20px"></td>
				<td width="100px"> Serial Number</td>
				<td> <input type="text" name="jemaah_serial_number[]"  Placeholder="Serial Number" class="input-block-level"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td colspan="4"><select required name="jemaah_type[]" class="input-block-level">
					<option value="">=Select=</option>
					<option value="Netapp">Netapp</option>
					<option value="Syamantec">Syamantec</option>
					<option value="VMware">VMware</option>
				</select></td>
			</tr>
			<tr>
				<td>Support ID</td>    
				<td>  <input type="text" name="jemaah_support_id[]"  Placeholder="Serial ID" required class="input-block-level"></td>
				<td></td>
				<td>Service Level</td>
				<td>  <input type="text" name="jemaah_service_level[]"  Placeholder="Service Level" required class="input-block-level"></td>
			</tr>
			<tr>
				<td>Start Date</td>    
				<td>  
					<input type="date" required class="input-block-level" name="jemaah_start_date[]" >
				</td>
				<td></td>
				<td>End Date</td>
				<td>   
					<input type="date" required class="input-block-level" name="jemaah_end_date[]">
				</td>
			</tr>
			<td>Vendor</td>    
			<td> <select required name="jemaah_vendor[]" class="input-block-level">
				<option value="">=Select=</option>
				@foreach($listVendor as $vendor)
				<option value="{{$vendor->id}}">{{$vendor->name}} </option>
				@endforeach
			</select></td>
			<td></td>
			<td>Partner</td>
			<td> <select required name="jemaah_partner[]" class="input-block-level">
				<option value="">=Select=</option>
				@foreach($listPartner as $partner)
				<option value="{{$partner->id}}">{{$partner->name}} </option>
				@endforeach
			</select></td>
		</tr>
		<tr>
			<td>Preventive Maintenance</td>    
			<td>  <input type="number" name="jemaah_pm[]"  Placeholder="8" class="input-block-level"></td>
			<td></td>
			<td>Onsite Support</td>
			<td><input type="number" name="jemaah_os[]"  Placeholder="4" class="input-block-level"></td>
		</tr>
		<div style="margin-left: 14.5%; margin-right:10%; margin-top:5px;" >
			<button id="removeJemaah" type="button" class="btn btn-mini btn-warning btn-block"><span class="icon-minus"></span></button>
		</div>
	</table>
	
</div>
</div>
<!--/all jemaah -->

@stop
