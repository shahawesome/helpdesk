
<div id="modal-form{{$product->id}}" class="modal hide" tabindex="-1" style="width:70%!important; height:830px !important;left:35%!important" >
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="blue bigger">New Incident</h4>
	</div>

	<div class="modal-body ">
		<form action="/admin/incident/newincident" method="post">
			<table>
				<tr>
					<td >Name Customer</td>
					<td>{{$product->collaborate->name}}</td>
				</tr>
				<tr>
					<td colspan="6">Address</td>
				</tr>
				<tr>
					<td colspan="4">{{$product->collaborate->address}}</td>
					<td>SE Assign</td>
					<td>	
						<select name="user_id">
							<option value="">=Select=</option>
							@foreach($listTechnical as $technical)
							<option value="{{$technical->id}}">{{$technical->name}}</option>
							@endforeach
						</select>
						
					</td>
				</tr>
				<tr>
					<td>Ticket Number</td>
					<td ></td>
					<td>Report Source</td>
					<td ><input type="text" name="report_source"  required></td>
					<td>Type</td>
					<td><input type="text" name="type"  required></td>
				</tr>
				<tr>
					<td>Priority</td>
					<td><input type="text" name="priority"  required></td>
					<td>Date</td>
					<td><input type="date" name="date" required></td>
					<td>Time</td>
					<td><input type="time" name="time"  required></td>
				</tr>
				<tr>
					<td colspan="6">Description</td>
				</tr>
				<tr>
					<td colspan="6"> <textarea rows="3" name="description"></textarea></td>
				</tr>
				<tr>
					<td colspan="6">
						Project Details
					</td>
				</tr>

				<tr>
					<td>Project Name</td>
					<td >{{$product->project->project_name}}</td>
					<td>Product Manager</td>
					<td>{{$product->project->project_director}}</td>
					<td></td>
					<td></td>

				</tr>
				<tr>
					<td colspan="6">
						Product Details
					</td>
				</tr>
				<tr>
					<td>Name</td>
					<td>{{$product->name}}</td>
					<td>Serial Number</td>
					<td>{{$product->serial_number}}</td>
					<td >Support Number</td>
					<td>{{$product->support_id}}</td>
				</tr>
				<tr>
					<td>Vendor</td>
					<td>{{$product->vendor->name}}</td>
					<td>Partner</td>
					<td >{{$product->partner->name}}</td>
					<td></td>
					<td></td>
				</tr>

			</table>
			<input type="hidden" value="{{$product->id}}" name="product_id"> 
			<div class="modal-footer">
				<button class="btn btn-small" data-dismiss="modal">
					<i class="icon-remove"></i>
					Cancel
				</button>

				<button class="btn btn-small btn-primary" type="submit">
					<i class="icon-ok"></i>
					Save
				</button>
			</div>

		</form>

	</div>
</div>