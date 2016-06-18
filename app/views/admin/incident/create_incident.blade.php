@extends('/admin/template')

@section('content') 
<div class="page-header position-relative">
	<h1>
		Create Incident  
	</h1>
</div>
<form action="/admin/incident/newincident" method="post">
	<table width="98%" border="0">

		<tr>
			<!-- <td>Ticket Number&nbsp;</td> 
			<td><input type="text" name="report_source"  required>&nbsp;</td> -->
			<input type="hidden" name="ticketno" value="$">
			<td width="100px">Impact&nbsp;</td>
			<td >
				<select name="impact" required class="form-control">
					<option value="">= Select =</option>
					<option value="Normal">Normal</option>
					<option value="Medium">Medium</option>
					<option value="High">High</option>
					<option value="Critical">Critical</option>
				</select>
			</td>
			<td align="right" ><label style="margin-right:20px">Date</label></td>
			<td width=" 100px">
				<div class="input-group">
					<input class="date-picker" id="id-date-picker-1" type="text" data-date-format="dd-MM-yyyy" value="{{date('d-M-Y')}}">
					<span class="input-group-addon">
						<i class="fa fa-calendar bigger-110"></i>
					</span>
				</div>
			</td>

			<td width="100px" align="right"><label style="margin-right:20px">Time</label></td>
			<td width="200px">
				<div class="input-group bootstrap-timepicker">
					<input id="timepicker1" type="text" class="form-control">
					<!-- value="{{date('h:i:s A')}}" -->
					<span class="input-group-addon">
						<i class="fa fa-clock-o bigger-110"></i>
					</span>
				</div>
			</td>
		</tr>
		<tr>
			<td height="50px">Report Source</td>
			<td>
				<select name="report_source" required id="report" class="form-control">
					<option value="">= Select =</option>
					<option value="Phone">Phone</option>
					<option value="Email">Email</option>
					<option value="Autosupport">Autosupport</option>
					<option value="Other">Other</option>
				</select>
			</td>
			<td align="right"><label style="margin-right:20px">SE Assign</label></td>
			<td colspan="3">  
				<form>
					<select name="SE" class="chosen-select form-control" required data-placeholder="Choose technical...">
						<option value="">=Select=</option>
						@foreach($listSE as $SE)
						<option value="{{$SE->id}}">{{$SE->name}} </option>
						@endforeach
					</select>
				</form>
			</td>
		</tr>
		<tr id="other" style="display:none">
			<td colspan="2" align="right"><i>Please Enter Report Source</i></td>
			<td colspan="4" ><input type="text" name="report_source" class="form-control" required>&nbsp;</td>
		</tr>
		<!-- ==========================================Customer Ajax======================================================= -->
		<tr>
			<td colspan="6"><h4 class="header lighter blue">Customer</h4></td>
		</tr>
		<tr>
			<td>Name</td>
			<td colspan="5">
				<form>
					<select class="chosen-select form-control" id="customer" name="customer" required data-placeholder="Choose a Customer...">
						<option value="">=Select=</option>
						@foreach($listCustomer as $customer)
						<option value="{{$customer->id}}">{{$customer->name}} </option>
						@endforeach
					</select>
				</form>
			</td>
		</tr>
		<tr >
			<td height="50px">Address</td>
			<td colspan="3" height="100px">
				<textarea id="addressCustomer" disabled="1" class="form-control" rows="3"></textarea>
			</td>
			<td align="right"><label style="margin-right:10px">Phone No</label></td>
			<td ><input type="text" name="report_source"  id="phone_noCustomer" disabled="1" class="form-control"></td>	
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td colspan="6"  id="nameCustomerStaff"></td>
		</tr>
		<!-- ==============================================Partner Ajax========================================================= -->	

		<tr>
			<td colspan="6"><h4 class="header lighter blue">Partner</h4></td>
		</tr>
		<tr>
			<td >Name</td>
			<td colspan="5">
				<select class="chosen-select form-control" required id="partner" name="partner" data-placeholder="Choose Partner...">

					<option value="">=Select=</option>
					@foreach($listPartner as $partner)
					<option value="{{$partner->id}}">{{$partner->name}} </option>
					@endforeach
				</select>
			</form>
		</td>
	</tr>
	<tr >
		<td height="100px">Address</td>
		<td colspan="3" >
			<textarea id="addressPartner" disabled="1" rows="3" class="form-control"></textarea>
		</td>
		<td align="right"><label style="margin-right:10px">Phone No</label></td>
		<td><input type="text" name="report_source"  id="phone_noPartner" disabled="1" class="form-control"></td>	
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td colspan="6"  id="namePartnerStaff"></td>
	</tr>
	<!-- ======================================================================================================= -->
	<tr>
		<td colspan="6"><h4 class="header lighter blue">Problem </h4></td>
	</tr>
	<tr>
		<td>Type</td>
		<td>
			<select name=" " class="form-control">
				<option value="">=Select=</option>
				<option value="">Software</option>
				<option value="">Hardware</option>
			</select>
		</td>
		<td align="right"><label style="margin-right:20px">Product</label></td>
		<td>
			<select name="" id="product" class="form-control">
				<option value="">=Select=</option>
				<option value="symantec">Symantec</option>
				<option value="netapp">NetApp</option>
				<option value="vmware">VMware</option>
			</select>
		</td>
		<td></td>
		<td></td>
	</tr>
	<tr id="symantec" style="display:none">
		<td height="60px">Type</td>
		<td>
			<select  class="form-control">
				<option value="">=Select=</option>
				<option value="master">Master Server</option>
				<option value="client">Client</option>
				<option value="appliance">Netbackup Appliance</option>	
			</select>
		</td>
		<td align="right"><label style="margin-right:20px">Serial Number</label></td>
		<td><input type="text" name="serial_number"  required  class="form-control"></td>
		<td></td>
		<td></td>
	</tr>
	<tr id="netapp" style="display:none">
		<td height="60px">Model</td>
		<td><input type="text" name="model"   class="form-control"></td>
		<td align="right"><label style="margin-right:20px">Serial Number</label></td>
		<td><input type="text" name="serial_number"  required  class="form-control"></td>
		<td></td>
		<td></td>
	</tr>
	<tr id="vmware" style="display:none">
		<td height="60px">Support ID</td>
		<td><input type="text" name="support_id"   class="form-control"></td>
		<td align="right"><label style="margin-right:20px">Product Version</label></td>
		<td><input type="text" name="support_id"  required  class="form-control"></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td height="90px">Description</td>
		<td rowspan="2" colspan="5" height="80px"><textarea rows="3" class="form-control" ></textarea></td>
	</tr>
	<tr>
		<td>
			<td></td>
		</td>
	</tr>
</table>
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

@stop

@section("script")
<script type="text/javascript">
	$("#product").change(function(){
//alert($(this).val());
if($(this).val()=="symantec"){
	$("#symantec").show();
	$("#netapp").hide();
	$("#vmware").hide();
}
else if($(this).val()=="netapp"){
	$("#symantec").hide();
	$("#netapp").show();
	$("#vmware").hide();
}else if($(this).val()=="vmware"){
	$("#symantec").hide();
	$("#netapp").hide();
	$("#vmware").show();
}else{
	$("#symantec").hide();
	$("#netapp").hide();
	$("#vmware").hide();
}
});
</script>
<script type="text/javascript">
	$(document).ready(function(){
//customer
	$('#customer').on('change',function(e){       //district change
		console.log(e);
		var id = e.target.value;

		$.get('/ajax/collaborate/' + id, function(data){
			console.log(data);
			$('#addressCustomer').empty();
			$('textarea#addressCustomer').val(data.address);
			$('input#phone_noCustomer').val(data.phone_no);

		});
	});

    $('#customer').on('change',function(e){       //district change
    	console.log(e);
    	var collaborate_id = e.target.value;

    	$.get('/ajax/collaboratestaff/' + collaborate_id, function(data){
    		console.log(data);
    		$('#nameCustomerStaff').empty();
    		// $('textarea#addressPartner').val(data.address);
    		// $('input#namePartner').val(data.name);

    		$.each(data, function(index, subcatObj){

    			$('#nameCustomerStaff').append('<center><tr><td valign="center"><input name="staff" type="checkbox" value="'+subcatObj.id+'"><span class="lbl"><td></td><td valign="center">&nbsp;&nbsp;&nbsp;Name&nbsp;&nbsp;</td><td valign="center"><input type="text" value="'+subcatObj.name+'" name="nameStaffCustomer" disabled="1"></td><td valign="center">&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;</td><td><input type="text" value="'+subcatObj.email+'" name="emailStaffCustomer" disabled="1"></td><td>&nbsp;&nbsp;&nbsp;Phone No &nbsp;&nbsp;</td><td valign="center"><input type="text" value="'+subcatObj.phone_no+'" name="phone_noStaffCustomer" disabled="1"></span></td></tr></center>');

    		});
    	});
    });


// partner
	$('#partner').on('change',function(e){       //district change
		console.log(e);
		var id = e.target.value;

		$.get('/ajax/collaborate/' + id, function(data){
			console.log(data);
			$('#addressPartner').empty();
			$('textarea#addressPartner').val(data.address);
			$('input#phone_noPartner').val(data.phone_no);
		});
	});

    $('#partner').on('change',function(e){       //district change
    	console.log(e);
    	var collaborate_id = e.target.value;

    	$.get('/ajax/collaboratestaff/' + collaborate_id, function(data){
    		console.log(data);
    		$('#namePartnerStaff').empty();
    		// $('textarea#addressPartner').val(data.address);
    		// $('input#namePartner').val(data.name);

    		$.each(data, function(index, subcatObj){

    			$('#namePartnerStaff').append('<center><tr><td valign="center"><input name="form-field-checkbox" type="checkbox"><span class="lbl"><td></td><td valign="center">&nbsp;&nbsp;&nbsp;Name&nbsp;&nbsp;</td><td valign="center"><input type="text" value="'+subcatObj.name+'" name="nameStaffPartner" disabled="1"></td><td valign="center">&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;</td><td><input type="text" value="'+subcatObj.email+'" name="emailStaffCustomer" disabled="1"></td><td>&nbsp;&nbsp;&nbsp;Phone No &nbsp;&nbsp;</td><td valign="center"><input type="text" value="'+subcatObj.phone_no+'" name="phone_noStaffCustomer" disabled="1"></span></td></tr></center>');

    		});
    	});
    });
}); 

</script>

<script type="text/javascript">
	$("#report").change(function(){
//alert($(this).val());
if($(this).val()=="Other"){
	$("#other").show();
}else{
	$("#other").hide();
}
});
</script>

<script type="text/javascript">
	var nowTemp = new Date();
	var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

	var checkin = $('#date1').datepicker({
		onRender: function(date) {
			return date.valueOf() < now.valueOf() ? 'disabled' : '';
		}
	}).data('datepicker');
	// $('#date1').datepicker();
</script>
<script type="text/javascript">
	$('#timepicker').timepicker();
</script>

@stop

