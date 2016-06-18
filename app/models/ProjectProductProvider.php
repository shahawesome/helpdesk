<?php

class ProjectProductProvider {
	protected $project_product;

	public function __contruct(Project_product $project_product){
		$this->project_product=$project_product;
	}

	public function createProjectProduct($input){
		try {
			$project_product=new $this->project_product;
			$project_product->project_id=$input['project_id'];
			$project_product->product_id=$input['product_id'];
			$project_product->status=$input['status'];
			$project_product->save();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

		public function updateProjectProduct($input){
		try {
			$project_product=$this->project_product->find($input['project_product_id']);
			$project_product->project_id=$input['project_id'];
			$project_product->product_id=$input['product_id'];
			$project_product->status=$input['status'];
			$project_product->save();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

			public function deleteProjectProduct($input){
		try {
			$project_product=$this->project_product->find($input['project_product_id']);
			$project_product->delete();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

}