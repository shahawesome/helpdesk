<?php

class WorkorderStatusProvider {
	protected $workorder_status;

	public function __construct(WorkorderStatus $workorder_status){
		$this->workorder_status=$workorder_status;
	}

	public function createWorkorderStatus($input){
		try {
			$workorder_status=new $this->workorder_status;
			$workorder_status->status=$input['status'];
			$workorder_status->date=$input['date'];
			$workorder_status->time=$input['time'];
			$workorder_status->summary=$input['summary'];
			$workorder_status->save();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

	public function updateWorkorderStatus($input){
		try {
			$workorder_status=$this->workorder_status->find($input['workorder_status_id']);
			$workorder_status->status=$input['status'];
			$workorder_status->date=$input['date'];
			$workorder_status->time=$input['time'];
			$workorder_status->summary=$input['summary'];
			$workorder_status->save();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

	public function deleteWorkorderStatus($input){
		try {
			$workorder_status=$this->workorder_status->find($input['workorder_status_id']);
			$workorder_status->delete();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

}