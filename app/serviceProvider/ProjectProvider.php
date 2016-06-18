<?php

class ProjectProvider {
	protected $project; 
	protected $status_project;
	protected $product;
	protected $project_product;
	protected $type_project;

	public function __construct(Project $project,StatusProject $status_project, Product $product,ProjectProduct $project_product,TypeProduct $type_product){
		$this->project=$project;
		$this->status_project=$status_project;
		$this->product=$product;
		$this->project_product=$project_product;
		$this->type_project=$type_product;
	}
//----------------------create project----------------------//
	public function createProject($input){
		try {

			DB::transaction(function () use ($input) {
				$project=new $this->project;
				$project->project_name=$input['project_name'];
				$project->user_id=$input['project_manager'];
				$project->PO_number=$input['PO_number'];
				$project->customer_id=$input['customer_id'];
				$project->save(); //sini
		// dd($project->id);

				$status_project=new $this->status_project;
				$status_project->status=$input['status'];

				// $status_project->date=$input['date'];
				$status_project->status=$project->id;
				// dd('ok');
				$status_project->save();
				
			



				$array = array();
				for ($i = 0; $i < count($input['jemaah_product_name']); $i++) 
				{
					$array[] = array($input['jemaah_product_name'][$i],
						$input['jemaah_number'][$i],
						$input['jemaah_serial_number'][$i],
						$input['jemaah_type1'][$i],
						$input['jemaah_type2'][$i],
						$input['jemaah_type3'][$i],
						$input['jemaah_support_id'][$i],
						$input['jemaah_service_level'][$i],
						$input['jemaah_start_date'][$i],
						$input['jemaah_end_date'][$i],
						$input['jemaah_vendor'][$i],
						$input['jemaah_partner'][$i],
						$input['jemaah_pm'][$i],
						$input['jemaah_os'][$i]);

				}
				/* Daftar PRoduct */
				dd($array);
				foreach ($array as $arr) {
					$product = new $this->product;
					//$product->product_id = $product->id;
					$product->name = $arr[0];
					$product->number = $arr[1];
					$product->serial_number = $arr[2];
					$product->support_id = $arr[7];

					$project_product = new $this->project_product;
					$project_product->type = $arr[6];
					$project_product->service_level = $arr[8];
					$project_product->start_date = $arr[9];
					$project_product->end_date = $arr[10];
					$project_product->project_id = $project->id; //ambik dari atas
					$project_product->product_id = $product->id;
					$project_product->vendor_id = $arr[11];
					$project_product->partner_id = $arr[12];
					$project_product->preventive_maintenance = $arr[13];
					$project_product->onsite_support = $arr[14];
					$project_product->save();	



					$type_project=new $this->type_project;
					$type_project->netapp_storage = $arr[3];
					$type_project->license = $arr[4];
					$type_project->netbackup_appliance = $arr[5];
					$type_project->save();
				}
			});
} catch (Exception $e) {
	dd($e);
	return false;
}
return true; 
}
//-----------------------------update project-------------------------------//
public function updateProject($input){
	//dd($input);
		try {
			DB::transaction(function () use ($input) {
				$project=$this->project->find($input['project_id']);
				$project->project_name=$input['project_name'];
				$project->project_director=$input['project_director'];
				$project->PO_number=$input['PO_number'];
				$project->type=$input['type'];
				$project->save();

				$product=$this->product->where('project_id','=',$input['project_id'])->get();
				foreach ($product as $jemaahproduct) {
					$jemaahproduct->delete();
				}				

				$array = array();
				for ($i = 0; $i < count($input['jemaah_product_name']); $i++) 
				{
					$array[] = array($input['jemaah_product_name'][$i],
						$input['jemaah_product_name'][$i],
						$input['jemaah_number'][$i],
						$input['jemaah_serial_number'][$i],
						$input['jemaah_type'][$i],
						$input['jemaah_support_id'][$i],
						$input['jemaah_service_level'][$i],
						$input['jemaah_start_date'][$i],
						$input['jemaah_end_date'][$i],
						$input['jemaah_vendor'][$i],
						$input['jemaah_partner'][$i],
						$input['jemaah_pm'][$i],
						$input['jemaah_os'][$i]);
				}

				foreach ($array as $arr) {
					$product = new $this->product;
					//$product->product_id = $project->id;
					$product->name = $arr[0];
					$product->number = $arr[1];
					$product->serial_number = $arr[2];
					$product->type = $arr[3];
					$product->support_id = $arr[4];
					$product->service_level = $arr[5];
					$product->start_date = $arr[6];
					$product->end_date = $arr[7];
					$product->vendor_id = $arr[8];
					$product->partner_id =$arr[9];
					$product->preventive_maintenance = $arr[10];
					$product->onsite_support = $arr[11];
					$product->save();
				}
			});
		} catch (Exception $e) {
			dd($e);
			return false;
		}
		return true;
	}


//----------------------------Delete Project-------------------------------------//

public function deleteProject($input){
	try {
		$project=$this->project->find($input['project_id']);
		$project->delete();
	} catch (Exception $e) {
		return false;
	}
	return true;
}
public function listCustomerProject($customer_id){
		return $this->project->where('customer_id','=',$customer_id)->get();
	}

public function listProject(){
	return $this->project->all();
}

public function listAllProject($project_id){
	return $this->project->find($project_id);
}


}