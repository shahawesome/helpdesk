@extends('/admin/template')

@section('content')
<div class="page-header position-relative">
	<h1>
		Create Work Order
	</h1>
</div>
<form action="/admin/incident/newworkorder" method="post">
	<table width="100%" border="0">

		<tr>
			<!-- <td>Ticket Number&nbsp;</td> 
			<td><input type="text" name="report_source"  required>&nbsp;</td> -->
			<input type="hidden" name="workorderno" value="$">
			<td width="80px">SE Assign&nbsp;<br></td>
			<td colspan="2" >
				<select class="chosen-select " required data-placeholder="Choose a Technical...">
					<option value="">=Select=</option>
					@foreach($listSE as $SE)
					<option value="{{$SE->id}}">{{$SE->name}} </option>
					@endforeach
				</select>
			</td>
			
			<td></td>
			<td width="80px" align="right"><label style="margin-right:18px">Task</label></td>
			<td width="250px">
				<select name="task" required id="task" class="form-control">
					<option value="">= Select =</option>
					<option value="Delivery">Delivery</option>
					<option value="Implementation">Implementation</option>
					<option value="PM">Preventive Maintenance</option>
					<option value="Other">Other</option>
				</select>
			</td>
		</tr>
		<tr id="other" style="display:none">
			<td height="50px"></td>
			<td></td>
			<td></td>
			<td></td>
			<td><i>Please Enter&nbsp;</i></td>
			<td ><input type="text" name="report_source"  required class="form-control"></td>
			
		</tr>

		<tr>
			<td height="110px">Summary</td>
			<td colspan="5"><textarea class="form-control" rows="4" name="summary" ></textarea></td>
		</tr>

		<!-- ==========================================Customer Ajax======================================================= -->
		<tr>
			<td colspan="6"><h4 class="header lighter blue">Customer</h4></td>
		</tr>
		<tr>
			<td>Name</td>
			<td colspan="5">
				<form>
					<select class="chosen-select form-control" id="customer" required data-placeholder="Choose a Customer...">
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
				<select class="chosen-select form-control" required id="partner" data-placeholder="Choose Partner...">

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
	
</table>

<div align="right">
	<button class="btn btn-small" type="reset" >
		<i class="icon-remove"></i>
		Reset
	</button>

	<button class="btn btn-small btn-primary" type="submit">
		<i class="icon-ok"></i>
		Save
	</button>
</div>

</form>

@stop

@section("script")
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
    		$('#namecustomerstaff').empty();
    		// $('textarea#addressPartner').val(data.address);
    		// $('input#namePartner').val(data.name);

    		$.each(data, function(index, subcatObj){

    			$('#nameCustomerStaff').append('<table  width="100%"><tr><td width="30px" height="40px"><input name="staff" type="checkbox" value="'+subcatObj.id+'"></td><td width="50px" align="right"><label  style="margin-right:7px;">Name</label></td><td ><input type="text" value="'+subcatObj.name+'" name="nameStaffCustomer" disabled class="form-control"></td><td width="50px" align="right"><label  style="margin-right:7px;">Email</label></td><td><input type="text" value="'+subcatObj.email+'" name="emailStaffCustomer" disabled class="form-control"></td><td width="80px" align="right"><label  style="margin-right:7px;">Phone No</label></td> <td><input type="text" value="'+subcatObj.phone_no+'" name="phone_noStaffCustomer" disabled class="form-control"></td></tr></table>');

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

    			$('#namePartnerStaff').append('<table  width="100%"><tr><td width="30px" height="40px"><input name="staff" type="checkbox" value="'+subcatObj.id+'"></td><td width="50px" align="right"><label  style="margin-right:7px;">Name</label></td><td ><input type="text" value="'+subcatObj.name+'" name="nameStaffCustomer" disabled class="form-control"></td><td width="50px" align="right"><label  style="margin-right:7px;">Email</label></td><td><input type="text" value="'+subcatObj.email+'" name="emailStaffCustomer" disabled class="form-control"></td><td width="80px" align="right"><label  style="margin-right:7px;">Phone No</label></td> <td><input type="text" value="'+subcatObj.phone_no+'" name="phone_noStaffCustomer" disabled class="form-control"></td></tr></table>');
    		});
    	});

});

}); 

</script>

<script type="text/javascript">
	$("#task").change(function(){
//alert($(this).val());
if($(this).val()=="Other"){
	$("#other").show();
}else{
	$("#other").hide();
}
});
</script>
@stop