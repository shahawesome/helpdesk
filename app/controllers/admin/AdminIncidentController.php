<?php
 
class AdminIncidentController extends AdminController {
 
	
	public function getCreate($customer_id=null){
		$listCustomer=$this->collaborateProvider->listCollaborate('customer'); 
		$listPartner=$this->collaborateProvider->listCollaborate('partner');
		$listProject=$this->projectProvider->listCustomerProject($customer_id);
		$listSE=$this->userProvider->listTechnical();
		return View::make('/admin/incident/create_incident')
		->with('listCustomer',$listCustomer)
		->with('listProject',$listProject)
		->with('listPartner',$listPartner)
		->with('listSE',$listSE);
	}

	public function getList(){
		$listIncident=$this->incidentProvider->listIncident();
		return View::make('/admin/incident/incident_list')
		->with('listIncident',$listIncident);
		
	}	

	public function getListproduct($project_id){
		$listProduct=$this->productProvider->listIncidentproduct($project_id);
		$listTechnical=$this->userProvider->listTechnical();
		return View::make('/admin/incident/list_product')
		->with('listProduct',$listProduct)
		->with('listTechnical',$listTechnical);
	}
	public function getNewincident($product_id){
		$listProduct=$this->productProvider->listIncidentproduct($project_id);
		return View::make('/admin/incident/list_product')
		->with('listProduct',$listProduct);
		
	}
public function postNewincident(){
		$status=$this->incidentProvider->createIncident(Input::all());
		//return Redirect::back()
		return Redirect::to('/admin/incident/list')
		->with('status',$status);
	}

	


}
  