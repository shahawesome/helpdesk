<?php
 
class IncidentProvider {
	protected $incident;
	protected $incidentstatus;

	public function __construct(Incident $incident, IncidentStatus $incidentstatus){ 
		$this->incident=$incident;
		$this->incidentstatus=$incidentstatus;
	}
 
	public function createIncident($input){ 
		try {//dd($input);
			DB::transaction(function () use ($input){
				/* Incident Status*/
				$incidentstatus=new $this->incidentstatus;
				$incidentstatus->status = 'new';
				//$incidentstatus->date = $input['date'];
				//$incidentstatus->time = $input['time'];
				//$incidentstatus->summary = $input['summary'];
				//$incidentstatus->logcase =$input['logcase'];
				$incidentstatus->save();


				/* Incident*/
				$incident=new $this->incident;
				$incident->report_source=$input['report_source'];
				$incident->priority=$input['priority'];
				$incident->date=$input['date'];
				$incident->time=$input['time'];
				$incident->description=$input['description'];
				$incident->type=$input['type'];
				$incident->product_id=$input['product_id'];
				$incident->incident_status_id=$incidentstatus->id;
				$incident->user_id=$input['user_id'];
				$incident->customer_id=$input['customer'];
				$incident->partner_id=$input['partner'];
				$incident->save();

				$technical= User::find($input['user_id']);
				

				$data = array('name' => $input['report_source']);

				Mail::queue('emails.test', $data, function ($message) use ($technical) {
                    $message->to($technical->email, 'New Incident')->subject('Subject');

                });
				
			});
		} catch (Exception $e) {
			dd($e);
			return false;
		}
		return true;
	}

	public function updateIncident($input){
		try {
			$incident=$this->incident->find($input['incident_id']);
			$incident->report_source=$input['report_source'];
			$incident->priority=$input['priority'];
			$incident->date=$input['date'];
			$incident->time=$input['time'];
			$incident->description=$input['description'];
			$incident->type=$input['type'];
			$incident->project_product_id=$input['project_product_id'];
			$incident->incident_status_id=$input['incident_status_id'];
			$incident->user_id=$input['user_id'];
			$incident->save();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

	public function deleteIncident($input){
		try {
			$incident=$this->incident->find($input['incident_id']);
			$incident->delete();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}
	public function listIncident(){
		return $this->incident->get();
	}


    public function listCustomer(){
	$input = Input::get('option');
	$customer = Collaborate::find($input);
	$customerinfo = $customer->collaborateStaff();
	}


}