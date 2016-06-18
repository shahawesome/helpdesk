<?php

class ProjectProductStatusProvider {
	protected $project_product_status;

	public function __construct(Project_product_status $project_product_status){
		$this->project_product_status=$project_product_status;
	}

	public function createProjectProductStatus($input){
		try {
			$project_product_status=new $this->project_product_status;
			$project_product_status->status=$input['project_product_status'];
			$project_product_status->save();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

		public function updateProjectProductStatus($input){
		try {
			$project=$this->project_product_status->find($input['project_product_status_id']);
			$project_product_status->status=$input['project_product_status'];
			$project_product_status->save();
			$project->save();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

			public function deleteProjectProductStatus($input){
		try {
			$project_product_status=$this->project_product_status->find($input['project_product_status_id']);
			$project_product_status->delete();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

}