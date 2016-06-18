<?php

class CollaborateProvider {
	protected $collaborate;
	protected $cstaff;
	protected $collaborateaddress;

	public function __construct(Collaborate $collaborate, CollaborateStaff $cstaff, CollaborateAddress $collaborateaddress){
		$this->collaborate=$collaborate;
		$this->cstaff=$cstaff;
		$this->collaborateaddress=$collaborateaddress;
	}

//--------------------insert------------------------//
	public function createVendor($input){
		try {
			DB::transaction(function () use ($input) {
				$collaborate=new $this->collaborate;
				$collaborate->name=$input['name'];
				$collaborate->address=$input['address'];
				$collaborate->phone_no=$input['phone_no'];
				$collaborate->fax_no=$input['fax_no'];
				$collaborate->type='vendor';
				$collaborate->save();

				/* Daftar Jemaah */
				$array = array();
				for ($i = 0; $i < count($input['jemaah_name']); $i++) 
				{
					$array[] = array($input['jemaah_name'][$i],
						$input['jemaah_phone_no'][$i],
						$input['jemaah_email'][$i]);
				}

				foreach ($array as $arr) {
					$cstaff = new $this->cstaff;
					$cstaff->collaborate_id = $collaborate->id;
					$cstaff->name = $arr[0];
					$cstaff->phone_no = $arr[1];
					$cstaff->email = $arr[2];
					$cstaff->save();
				}
			});
		} catch (Exception $e) {
			dd($e);
			return false;
		}
		return true; 
	}

	public function createPartner($input){
		try {
			DB::transaction(function () use ($input) {
				$collaborate=new $this->collaborate;
				$collaborate->name=$input['name'];
				$collaborate->address=$input['address'];
				$collaborate->phone_no=$input['phone_no'];
				$collaborate->fax_no=$input['fax_no'];
				$collaborate->type='partner';
				$collaborate->save();

				/* Daftar Jemaah */
				$array = array();
				for ($i = 0; $i < count($input['jemaah_name']); $i++) 
				{
					$array[] = array($input['jemaah_name'][$i],
						$input['jemaah_phone_no'][$i],
						$input['jemaah_email'][$i]);
				}

				foreach ($array as $arr) {
					$cstaff = new $this->cstaff;
					$cstaff->collaborate_id = $collaborate->id;
					$cstaff->name = $arr[0];
					$cstaff->phone_no = $arr[1];
					$cstaff->email = $arr[2];
					$cstaff->save();
				} 
			});
		} catch (Exception $e) {
			dd($e);
			return false;
		}
		return true; 
	}

	public function createCustomer($input){
		try {
			DB::transaction(function () use ($input) {
				$collaborate=new $this->collaborate;
				$collaborate->name=$input['name'];
				$collaborate->phone_no=$input['phone_no'];
				$collaborate->fax_no=$input['fax_no'];
				$collaborate->type='customer';
				$collaborate->save();

				/* Daftar Jemaah */
				$array = array();
				for ($i = 0; $i < count($input['jemaah_name']); $i++) 
				{
					$array[] = array($input['jemaah_name'][$i],
						$input['jemaah_phone_no'][$i],
						$input['jemaah_email'][$i]);
				}
				$array2 = array();
				for ($i = 0; $i < count($input['address']); $i++) 
				{
					$array2[] = array($input['address'][$i],
						$input['site'][$i]);
				}

				foreach ($array as $arr) {
					$cstaff = new $this->cstaff;
					$cstaff->collaborate_id = $collaborate->id;
					$cstaff->name = $arr[0];
					$cstaff->phone_no = $arr[1];
					$cstaff->email = $arr[2];
					$cstaff->save();
				}
				foreach ($array2 as $arr2) {
					$collaborateaddress = new $this->collaborateaddress;
					$collaborateaddress->collaborate_id = $collaborate->id;
					$collaborateaddress->address = $arr2[0];
					$collaborateaddress->site = $arr2[1];
					$collaborateaddress->save();
				}

			});
		} catch (Exception $e) {
			dd($e);
			return false;
		}
		return true; 
	}
//--------------------update------------------------//
	public function updateVendor($input){
		try {
			DB::transaction(function () use ($input) {
				$collaborate=$this->collaborate->find($input['vendor_id']);
				$collaborate->name=$input['name'];
				$collaborate->address=$input['address'];
				$collaborate->phone_no=$input['phone_no'];
				$collaborate->fax_no=$input['fax_no'];

			//$collaborate->type=$input['type'];
				$collaborate->save();

				$cstaff=$this->cstaff->where('collaborate_id','=',$input['vendor_id'])->get();
				foreach ($cstaff as $staff) {
					$staff->delete();
				}				

				$array = array();
				for ($i = 0; $i < count($input['jemaah_name']); $i++) 
				{
					$array[] = array($input['jemaah_name'][$i],
						$input['jemaah_phone_no'][$i],
						$input['jemaah_email'][$i]);
				}

				foreach ($array as $arr) {
					$cstaff = new $this->cstaff;
					$cstaff->collaborate_id = $collaborate->id;
					$cstaff->name = $arr[0];
					$cstaff->phone_no = $arr[1];
					$cstaff->email = $arr[2];
					$cstaff->save();
				}
			});
		} catch (Exception $e) {
			dd($e);
			return false;
		}
		return true;
	}


	public function updatePartner($input){
		try {
			DB::transaction(function () use ($input) {
				$collaborate=$this->collaborate->find($input['partner_id']);
				$collaborate->name=$input['name'];
				$collaborate->address=$input['address'];
				$collaborate->phone_no=$input['phone_no'];
				$collaborate->fax_no=$input['fax_no'];

			//$collaborate->type=$input['type'];
				$collaborate->save();

				$cstaff=$this->cstaff->where('collaborate_id','=',$input['partner_id'])->get();
				foreach ($cstaff as $staff) {
					$staff->delete();
				}				

				$array = array();
				for ($i = 0; $i < count($input['jemaah_name']); $i++) 
				{
					$array[] = array($input['jemaah_name'][$i],
						$input['jemaah_phone_no'][$i],
						$input['jemaah_email'][$i]);
				}

				foreach ($array as $arr) {
					$cstaff = new $this->cstaff;
					$cstaff->collaborate_id = $collaborate->id;
					$cstaff->name = $arr[0];
					$cstaff->phone_no = $arr[1];
					$cstaff->email = $arr[2];
					$cstaff->save();
				}
			});
		} catch (Exception $e) {
			dd($e);
			return false;
		}
		return true;
	}

	public function updateCustomer($input){
		try {
			DB::transaction(function () use ($input) {
				$collaborate=$this->collaborate->find($input['customer_id']);
				$collaborate->name=$input['name'];
				$collaborate->address=$input['address'];
				$collaborate->phone_no=$input['phone_no'];
				$collaborate->fax_no=$input['fax_no'];

			//$collaborate->type=$input['type'];
				$collaborate->save();

				$cstaff=$this->cstaff->where('collaborate_id','=',$input['customer_id'])->get();
				foreach ($cstaff as $staff) {
					$staff->delete();
				}				

				$array = array();
				for ($i = 0; $i < count($input['jemaah_name']); $i++) 
				{
					$array[] = array($input['jemaah_name'][$i],
						$input['jemaah_phone_no'][$i],
						$input['jemaah_email'][$i]);
				}

				foreach ($array as $arr) {
					$cstaff = new $this->cstaff;
					$cstaff->collaborate_id = $collaborate->id;
					$cstaff->name = $arr[0];
					$cstaff->phone_no = $arr[1];
					$cstaff->email = $arr[2];
					$cstaff->save();
				}
			});
		} catch (Exception $e) {
			dd($e);
			return false;
		}
		return true;
	}
//--------------------delete------------------------//	
	public function deleteVendor($vendor_id){
		try {
			DB::transaction(function () use ($vendor_id) {
				$collaborate=$this->collaborate->find($vendor_id);
				$collaborate->delete();

				$cstaff=$this->cstaff->where('collaborate_id','=',$vendor_id)->get();
				foreach ($cstaff as $staff) {
					$staff->delete();
				}	
			});
		} catch (Exception $e) {
			dd($e);
			return false;
		}
		return true;
	}

	public function deletePartner($vendor_id){
		try {
			DB::transaction(function () use ($partner_id) {
				$collaborate=$this->collaborate->find($partner_id);
				$collaborate->delete();

				$cstaff=$this->cstaff->where('collaborate_id','=',$partner_id)->get();
				foreach ($cstaff as $staff) {
					$staff->delete();
				}	
			});
		} catch (Exception $e) {
			dd($e);
			return false;
		}
		return true;
	}

	public function deleteCustomer($customer_id){
		try {
			DB::transaction(function () use ($customer_id) {
				$collaborate=$this->collaborate->find($customer_id);
				$collaborate->delete();

				$cstaff=$this->cstaff->where('collaborate_id','=',$customer_id)->get();
				foreach ($cstaff as $staff) {
					$staff->delete();
				}	
			});
		} catch (Exception $e) {
			dd($e);
			return false;
		}
		return true;
	}

	//--------------------listUserbyType------------------//

	public function listCollaborate($type){
		return $this->collaborate->where('type','=',$type)->get();
	}

	public function listCollaborateStaff(){
		return $this->collaborateStaff->get();
	}

	public function findVendor($vendor_id){
		return $this->collaborate->find($vendor_id);
	}

	// ajax

	public function listDetailCollaborate($id){
		return Collaborate::find($id);
	}

	public function listDetailCollaborateStaff($collaborate_id){
		return CollaborateStaff::where('collaborate_id',$collaborate_id)->get();
	}
	

}