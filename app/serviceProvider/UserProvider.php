<?php
 
class UserProvider {
	protected $user;

	public function __construct(User $user){
		$this->user=$user;
	}

	public function listUser(){ 
		return $this->user->all();
	}

	public function maklumatuser($user_id){
		return $this->user->find($user_id);
	}

	public function create($input){
		try {
			//dd($input);
			$user=new $this->user;
			$user->name=$input['name'];
			$user->username=$input['username'];
			$user->password=Hash::make($input['password']);
			$user->email=$input['email'];
			$user->staff_id=$input['staff_id'];
			//$user->picture=$input['picture'];
			$user->phone_no=$input['phone_no'];
			$user->role=$input['role'];
			$user->save();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

	public function updateUser($input){
		try {
			$user=$this->user->find($input['user_id']);
			$user->name=$input['name'];
			//$user->username=$input['username'];
			$user->email=$input['email'];
			$user->staff_id=$input['staff_id'];
			//$user->picture=$input['picture'];
			$user->phone_no=$input['phone_no'];
			$user->role=$input['role'];
			$user->save();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

	public function deleteUser($user_id){
		try {
			$user=$this->user->find($user_id);
			$user->delete();
		} catch (Exception $e) {
			return false;
		}
		return true;
	}

	public function listTechnical(){
		return $this->user->where('role','=','69')->get();
	}

	public function listUserManager(){
		return $this->user->where('role','=','88')->get();
	}
}