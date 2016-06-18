<?php

class WorkorderProvider {
	protected $workorder;

	public function __construct(Workorder $workorder){
		$this->workorder=$workorder;
	}

	public function createWorkorder($input){
		try {
			$workorder=new $this->workorder;
			$workorder->task_details=$input['task_details'];
			$workorder->date=$input['date'];
			$workorder->time=$input['time'];
			$workorder->summary=$input['summary'];
			$workorder->project_product_id=$input['project_product_id'];
			$workorder->workorder_status_id=$input['workorder_status_id'];
			$workorder->user_id=$input['user_id'];
			$workorder->save();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

	public function updateWorkorder($input){
		try {
			$workorder=$this->workorder->find($input['workorder_id']);
			$workorder->task_details=$input['task_details'];
			$workorder->date=$input['date'];
			$workorder->time=$input['time'];
			$workorder->summary=$input['summary'];
			$workorder->project_product_id=$input['project_product_id'];
			$workorder->workorder_status_id=$input['workorder_status_id'];
			$workorder->user_id=$input['user_id'];
			$incident->save();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

	public function deleteWorkorder($input){
		try {
			$workorder=$this->workorder->find($input['workorder_id']);
			$workorder->delete();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

}