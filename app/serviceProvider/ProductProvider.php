<?php

class ProductProvider {
	protected $product;

	public function __construct(Product $product){
		$this->product=$product;
	}

	public function createProduct($input){
		try {
			$product=new $this->product;
			$product->name=$input['name'];
			$product->number=$input['name'];
			$product->serial_number=$input['name'];
			$product->type=$input['name'];
			$product->support_id=$input['name'];
			$product->service_level=$input['name'];
			$product->start_date=$input['name'];
			$product->end_date=$input['name'];
			$product->vendor_id=$input['vendor_id'];
			$product->partner_id=$input['partner_id'];
			$product->save();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

		public function updateProduct($input){
		try {
			$product=$this->product->find($input['product_id']);
			$product->name=$input['name'];
			$product->number=$input['name'];
			$product->serial_number=$input['name'];
			$product->type=$input['name'];
			$product->support_id=$input['name'];
			$product->service_level=$input['name'];
			$product->start_date=$input['name'];
			$product->end_date=$input['name'];
			$product->vendor_id=$input['vendor_id'];
			$product->partner_id=$input['partner_id'];
			$product->save();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

			public function deleteProduct($input){
		try {
			$product=$this->product->find($input['product_id']);
			$product->delete();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

	public function listProduct($customer_id){
		return $this->product->where('customer_id','=',$customer_id)->get();
	}

		public function listIncidentproduct($project_id){
		return $this->product->where('project_id','=',$project_id)->get();
	}
	public function listProductProject($project_id){
	//dd($project_id);
	return $this->product->where('project_id','=',$project_id)->get();
}

	
}