@extends('/admin/template') 

@section('content')
<div class="page-header position-relative">
	<h1>
		Incident List
	</h1> 
</div>

<table id="sample-table-1" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>Ticket Number</th>
			<th>Site Name</th>
			<th>Priority</th>
			<th>Date</th>
			<th>Time</th>
			<th>Product</th>
			<th>Description</th>
			<th>Assigned Engineer</th>
			<th>Onsite Balance</th>
			<th>Status</th>
		</tr>
	</thead>

	<tbody>
		<?php $num=1;?>
		@foreach($listIncident as $incident)
		<tr>
			<td>{{$num++}}</td>
			<td>{{$incident->ticketNumber()}}</td>
			<td>{{$incident->product->name}}</td>
			<td>{{$incident->priority}}</td>
			<td>{{$incident->date}}</td>
			<td>{{$incident->time}}</td>
			<td>{{$incident->Product->name}}</td>
			<td>{{$incident->description}}</td>
			<td>{{$incident->user->name}}</td>
			<td>{{$incident->product->balanceOnsite()}}</td>
			<td>{{$incident->IncidentStatus->status}}</td>
		</tr>
		@endforeach
	</tbody>
</table>

@stop